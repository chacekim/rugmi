<?php	

	#1. Load libraries
	require_once '../libraries/form.lib.php';
	require_once '../libraries/auth.lib.php';
	require_once '../libraries/upload.lib.php';
	require_once '../libraries/url.lib.php';
	require_once '../libraries/database.lib.php';

	require_once '../models/user.model.php';
	require_once '../models/users.collection.php';
	require_once '../models/image.model.php';
	require_once '../models/images.collection.php';



	#2. Logic


	if($_FILES){

		$files = Upload::to_folder('assets/img/');

	




		if($files[0]['error_message'] == false){



			$image = new Image();
			$image->url = $files[0]['filepath'];
			$image->user_id = Auth::user_id();
			$image->save();

			URL::redirect('user_page.php');

		}else{

			echo $files[0]['error_message'];

		}


	}