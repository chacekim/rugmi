<<<<<<< HEAD
<?php  




include '../views/header.php';

include '../views/image_list.php';

=======
<?php 
// controller

// 1. load libraries & models
require_once '../libraries/auth.lib.php';
require_once '../libraries/database.lib.php';
require_once '../models/image.model.php';
require_once '../models/images.collection.php';


// 2. Logic

$is_logged_in = Auth::is_logged_in();
$images = new Image();
$imgaes->url = $_GET['url'];

// 3. Load views

if($is_logged_in) {
	include '../views/logged_in_header.php';
} else {
	include '../views/header.php';
}
include '../views/image_list.php';
include '../views/footer.php';
 ?>
>>>>>>> b19666d18edf813458daa6e20a380c8b09ec972d
