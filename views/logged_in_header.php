<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog 2</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
	<script>
		tinymce.init({
			selector:'textarea',
			menubar: false,
			plugins: ['code', 'image'],	
			toolbar: 
			['fontsizeselect | bold italic | undo redo | alignleft aligncenter alignright',
			'cut copy paste bullist numlist | code | image']
		});
	</script>
</head>
<body>
	
	<header>
		<div class="container">
			<h1>My Rugmi</h1>
			<nav>
				<a href="index.php">Home</a>
				<a href="logout.php">Logout</a>
			</nav>
		</div>
	</header>

	<div class="container wrapper">