<?php 
// controller

// 1. load libraries & models
require_once '../libraries/auth.lib.php';
require_once '../libraries/database.lib.php';
require_once '../models/image.model.php';
require_once '../models/images.collection.php';


// 2. Logic

$is_logged_in = Auth::is_logged_in();

// 3. Load views

if($is_logged_in) {
	include '../views/logged_in_header.php';
} else {
	include '../views/header.php';
}
include '../views/image_list.php';
include '../views/footer.php';
 ?>