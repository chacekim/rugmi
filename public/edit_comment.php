<?php 

require_once '../libraries/form.lib.php';
require_once '../libraries/auth.lib.php';
require_once '../libraries/database.lib.php';
require_once '../libraries/url.lib.php';
include_once '../models/image.model.php';
require_once '../models/comment.model.php';
require_once '../models/comments.collection.php';


$is_logged_in = Auth::is_logged_in();

$comment = new Comment();

$comment->load($_GET['id']);

$image = new Image();
$image->load($_GET['image_id']);


if($_POST && $_POST['comment'] != '') {

	$comment->content = $_POST['comment'];	

	$comment->save();

	URL::redirect('view_image.php?id='.$_GET['image_id']);
}

// 3. Load views

if($is_logged_in) {
	include '../views/logged_in_header.php';
} else {
	include '../views/header.php';
}

include '../views/comment_form.php';

include '../views/footer.php';

 ?>