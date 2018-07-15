<?php
class galleries extends masterclass  {


    function gettables() {
  		return
      [
          'galleries' => [
          'fields' => [
            'name'  =>  ['array', 'multistring'],
            'img' => [ null, 'file', 'path' => 'galleries'],
          ],
        ]
      ];
  	}

    function extend() {
        $this->description = 'Galleries';
    }

    function save() {
      if(!superAdmin()) return;
  		$this->parse = FALSE;
  		$form = $this->post['form'];
  		$ret = parent :: saveDB($form);
  		if($this->files['img']) {
  			uploadImage($this->files['img'], 'galleries/' . $this->id, [333, 222]);
  		}
  		return json_encode($ret);
  	}

    function uploadImage() {
      if(!superAdmin()) return;
      $this->parse = FALSE;
      $form = $this->post['form'];
      if($this->files['img']) {
        uploadImage($this->files['img'], 'galleries/' . $this->id . '/' . uniqid());
      }
      return json_encode(['status' => 'ok']);
    }

    function view() {
        $data = parent:: view();
        $this->title = unserialize($data['name'])[getlang()];
        $data['images'] = fm()->dscan(BASEFMDIR . 'galleries/' . $this->id);
        return $data;
    }

    function del() {
      if(!superAdmin()) return;
      fm()->drm(BASEFMDIR . 'galleries/' . $this->id);
      unlink(BASEFMDIR .  'galleries/' . $this->id . '.jpeg');
      parent::del();
    }

}
