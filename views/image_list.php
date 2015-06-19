
<h1>image list</h1>

<main>
	<ul class="flex-container">
	
	<?php foreach ($images->items as $image): ?>

<<<<<<< HEAD
		<img src="<?php echo $image->url ?>" alt="<?php echo $image->caption ?>" class="flex-item">
=======
		<li>
			<a href="view_image.php?id=<?php echo $image->id ?>"><img src="assets/img/<?php echo $image->url ?>?id=<?php echo $image->id ?>" alt="<?php echo $image->caption ?>" class="flex-item"></a>
		</li>
>>>>>>> a22887bcbf0b1d2f000908220ce7e2f75c101c44

	<?php endforeach ; ?>
	</ul>
</main>
