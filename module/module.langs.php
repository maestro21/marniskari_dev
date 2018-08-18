<?php
const FLAGAPI = 'http://www.webstudio-maestro.ch/langselect/';

class langs extends masterclass {

function gettables() {
		return
		[
			'langs' => [
				'fields' => [
					'flag'			=> [ null, 'select'],
					'abbr' 			=> [ 'string', 'text', 'search' => TRUE ],
					'name' 			=> [ 'string', 'text', 'null' => TRUE  ],
					'pos'				=> [ 'int', 'text',  'null' => TRUE  ],
					'active'		=> [ 'bool', 'checkbox', 'null' => TRUE ],
				],
				'idx' => [
					'abbr' => [ 'abbr' ],
				]
			],
		];
	}

	public function extend() {
		$this->options['flag'] = json_decode(file_get_contents(FLAGAPI . 'api.php'));
	}

	    /** Save element **/
	public function save() {  //die();
		if(!superAdmin()) return;
		$this->parse = FALSE;
		file_put_contents(BASE_PATH . 'front/img/langs/' . $this->post['form']['abbr'] . '.png',file_get_contents(FLAGAPI . 'flags/' . $this->post['form']['flag']));
		unset($this->post['form']['flag']);
		$ret = $this->saveDB($this->post['form']);
		$this->cache();
		return json_encode($ret);
	}

	public function delflag() {
		unlink(BASE_PATH . 'front/img/langs/' . $this->path[2]. '.png');
		echo json_encode(array('redirect' => 'self', 'status' => 'ok', 'timeout' => 1));
		die();
	}
}
