<?php

// user_page.php


// 1. Load libraries and models
require_once '../libraries/auth.lib.php';
require_once '../libraries/database.lib.php';
require_once '../models/images.collection.php';
require_once '../models/image.model.php';
require_once '../models/user.model.php';

// 2. Logic

Auth::kickout('login.php');
$is_logged_in = Auth::is_logged_in();
// print_r($_SESSION['user']['id']);
$user_images = new Images_Collection([

	'deleted' => '0',
	'user_id' => $_SESSION['user']['id']

	]);

// 3. Load views

if($is_logged_in) {
	include '../views/logged_in_header.php';
} else {
	include '../views/header.php';
}

if($is_logged_in) {
	include '../views/user_page_main.php';
	include '../views/user_image_list.php';
} else {
	include '../views/image_list.php';
}
include '../views/footer.php';

