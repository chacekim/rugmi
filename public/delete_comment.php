<?php


// 1 load libraries & models
// 
require_once '../libraries/auth.lib.php';
require_once '../libraries/url.lib.php';
require_once '../models/comment.model.php';

// 2 logic

$comment = new Comment();

$comment->load($_GET['id']);

$comment->delete();

// 3 views

// URL::redirect('view_image.php?id='.$comment->image_id);
URL::redirect('view_image.php?id='.$_GET['image_id']);