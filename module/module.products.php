<?php
class products extends masterclass  {

  function gettables() {
		return
		[
			'products' => [
				'fields' => [
					'category'	      =>	  [ 'int', 'select', 'default' => 0],
          'img'             =>    [ null, 'file', 'path' => 'products'],
					'name' 			      => 	  [ 'array', 'multistring', 'search' => TRUE ],
          'description'		  => 	  [ 'array', 'multitext', 'search' => TRUE ],
          'alchohol'        =>    ['string', 'text'],
          'size'            =>    ['string', 'text'],
				],
			]
		];
	}


  function category() {
    $this->title = q('productcategories')->select('name')->where(qEq('id', $this->id))->run(DBCELL);
    $items = q('products')->qlist()->where(qEq('category', $this->id))->run();
    return $items;
  }

  function extend() {
      $this->description = 'Products';
      $this->options['category'] = $this->getCategories();
  }

  function getCategories() {
    $categories = [];
    $tmp = q('productcategories')->qlist()->run();
    foreach($tmp as $row) {
      $categories[$row['id']] = $row['name'];
    }
    return $categories;
  }


  function view() {
    $data = parent::view();
    $this->title = unserialize($data['name'])[getlang()];
    return $data;
  }

  function save() {
    if(!superAdmin()) return;
		$this->parse = FALSE;
		$form = $this->post['form'];
		$ret = parent :: saveDB($form);
		if($this->files['img']) {
			uploadImage($this->files['img'], 'products/' . $this->id);
		}
		return json_encode($ret);
	}

}
