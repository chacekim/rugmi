<?php 

require_once '../libraries/model.lib.php';

class User extends Model{

	protected $table = 'users';

	public function __construct() {
		parent::__construct($this->table);
	}

	public function authenticate() {
		// $this->username; is the username that was typed into the form
		// $this->passowrd; is the password that was typed into the form
		
		// get the user from the DB
		$user = $this->db
			->select('id, password')
			->from('users')
			->where('email', $this->email)
			->get_one();

		// if a user was found	
		if($user){
			// check if both passwords are the same
			if(password_verify($this->password, $user['password'])) {
				$this->id = $user['id'];
				return true;
			} else {
				return false;
			}
		}else {
			return false;
		}
	}
}