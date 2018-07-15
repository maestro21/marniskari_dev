<?php

class langs extends masterclass {


function gettables() {
		return
		[
			'langs' => [
				'fields' => [
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

	    /** Save element **/
	public function save() {  //die();
		if(!superAdmin()) return;
		$this->parse = FALSE;
		$ret = $this->saveDB($this->post['form']);
		$this->cache();
		return json_encode($ret);
	}
}
