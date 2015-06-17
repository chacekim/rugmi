<?php 
// controller

// 1. load libraries & models
require_once '../libraries/auth.lib.php';
require_once '../libraries/database.lib.php';
require_once '../libraries/form.lib.php';
require_once '../models/image.model.php';
require_once '../models/comment.model.php';
require_once '../models/images.collection.php';


// 2. Logic

$is_logged_in = Auth::is_logged_in();

$images = new Images_Collection(['deleted' => '0']);

// print_r($_POST['image_id']);

if($_POST) {

	$comment = new Comment();

	$comment->content = $_POST['comment'];
	$comment->image_id = $_POST['image_id'];
	$comment->user_id = $_SESSION['user']['id'];

	$comment->save();


}

// 3. Load views

if($is_logged_in) {
	include '../views/logged_in_header.php';
} else {
	include '../views/header.php';
}

include '../views/image_list.php';

include '../views/footer.php';
 ?>
