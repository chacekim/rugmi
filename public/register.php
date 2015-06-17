<?php 
// controller

// 1. load libraries & models
require_once '../libraries/form.lib.php';
require_once '../libraries/database.lib.php';
require_once '../libraries/url.lib.php';
require_once '../libraries/auth.lib.php';

require_once '../models/user.model.php';
require_once '../models/users.collection.php';


// 2. Logic

if($_POST) {
	$error = '';
	// attempt to log the user in
	$user = new User();

	$user->firstname = $_POST['firstname'];
	$user->lastname = $_POST['lastname'];
	$user->email = $_POST['email'];
	$user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);


	$users = new Users_Collection([			
		'email' => $user->email]);

	$user_email_exists = isset($users->items[0]);

	if($user->email != '' && $user->password != ''){
		if(!$user_email_exists){

			$user->save();
	
			Auth::log_in($user->id);

			URL::redirect('index.php');
			
		} else {
			$error = 'User exists';
		}
	} else {
		$error = 'email and password required';
	}
}

// 3. Load views

include '../views/header.php';
include '../views/register_form.php';
include '../views/footer.php';
 ?>