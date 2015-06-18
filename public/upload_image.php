<?php

// upload_image.php

require_once '../libraries/auth.lib.php'; 
require_once '../libraries/database.lib.php'; 
require_once '../libraries/form.lib.php'; 
require_once '../libraries/url.lib.php'; 
require_once '../models/user.model.php'; 
require_once '../models/image.model.php'; 

// Logic
if($_POST) {
	
}

// Load views

include '../views/logged_in_header.php';
include '../views/upload_form.php';
include '../views/footer.php';