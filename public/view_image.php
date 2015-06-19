<?php 

require_once '../libraries/form.lib.php';
require_once '../libraries/auth.lib.php';
require_once '../libraries/database.lib.php';
include_once '../models/image.model.php';
require_once '../models/comment.model.php';
require_once '../models/comments.collection.php';


$is_logged_in = Auth::is_logged_in();

$image = new Image();

$image->load($_GET['id']);

if($_POST) {

	$comment = new Comment();

	$comment->content = $_POST['comment'];
	$comment->image_id = $_POST['image_id'];
	$comment->user_id = Auth::user_id();
	$comment->created_at = date("Y-m-d H:i:s");	

	$comment->save();
}

$comments = new Comments_Collection();

$comments->load();
$comments->getCommentsByImage($image->id);

$logged_in_user_id = Auth::user_id();

// 3. Load views

if($is_logged_in) {
	include '../views/logged_in_header.php';
} else {
	include '../views/header.php';
}

include '../views/comment_form.php';

include '../views/footer.php';

 ?>