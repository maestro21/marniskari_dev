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
          'type' 			      => 	  [ 'array', 'multistring', 'search' => TRUE ],
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
      M('pages')->view(getLang() . '/products');
      //G('bgimg', BASE_URL . G('product_bg'));
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
			uploadImage($this->files['img'], 'products/' . $this->id, [150,630], [
        'path' => 'products/thumb/' . $this->id,
        'x' => 65,
        'y' => 250
      ]);
      //createThumb('products/' . $this->id, ['x' => 150, 'y' => 630]);
		}
		return json_encode($ret);
	}

}
