<?php

// user_page.php


// 1. Load libraries and models
require_once '../libraries/auth.lib.php';
require_once '../libraries/database.lib.php';
require_once '../libraries/form.lib.php';



require_once '../libraries/url.lib.php';

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




if($_POST){
	
	$user_image = new Image();
	$user_image->caption = $_POST['caption'];
	$user_image->id = $_POST['image_id'];
	$user_image->user_id = $_SESSION['user']['id'];

	$user_image->save();

}

$user_images = new Images_Collection([

	'deleted' => '0',
	'user_id' => $_SESSION['user']['id'],

	]);


// if($_POST){

// 	$page = new Page();

// 	$page->title = $_POST['title'];
// 	$page->content = $_POST['content'];
// 	$page->subject_id = $_GET['subject_id'];

// 	$page->save();

// 	URL::redirect('edit_page.php?id='.$page->id);

// }

// 3. Load views

if($is_logged_in) {
	include '../views/logged_in_header.php';
} else {
	include '../views/header.php';
}

if($is_logged_in) {
	include '../views/user_page_main.php';
	include '../views/user_image_list.php';

	include '../views/upload_form.php';

} else {
	include '../views/image_list.php';
}
include '../views/footer.php';

