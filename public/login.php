<?php 

// 1. load libraries & models
require_once '../libraries/form.lib.php';
require_once '../libraries/database.lib.php';
require_once '../libraries/url.lib.php';
require_once '../libraries/auth.lib.php';

require_once '../models/user.model.php';

// logic

// logic

if($_POST) {
	$login_error = '';
	// attempt to log the user in
	$user = new User();
	// print_r($user);

	$user->email = $_POST['email'];
	$user->password = $_POST['password'];

	// print_r($user);

	$success = $user->authenticate();

	if($success) {
		Auth::log_in($user->id);

		URL::redirect('index.php');
	} else {
		$login_error = 'Incorrect username or password';
	}
}


// load views

include '../views/header.php';
include '../views/login_form.php';
include '../views/image_list.php';
include '../views/footer.php';