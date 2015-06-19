<?php

require_once '../libraries/collection.lib.php';

class Users_Collection extends Collection {
	protected $table = 'users';

	public function __construct($where = false) {
		parent::__construct($this->table, $where);
	}
}