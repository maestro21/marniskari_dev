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
  		$this->parse = FALSE;
  		$form = $this->post['form'];
  		$ret = parent :: saveDB($form);
  		if($this->files['img']) {
  			uploadImage($this->files['img'], 'galleries/' . $this->id);
  		}
  		return json_encode($ret);
  	}

    function uploadImage() {
      $this->parse = FALSE;
      $form = $this->post['form'];
      $ret = parent :: saveDB($form);
      if($this->files['img']) {
        uploadImage($this->files['img'], 'galleries/' . $this->id);
      }
      return json_encode(['status' => 'ok']);
    }

    function view() {
        $data = parent:: view();
        $data['images'] = fm()->dscan(BASEFMDIR . 'galleries/' . $this->id);
        print_r($data);
    }

}
