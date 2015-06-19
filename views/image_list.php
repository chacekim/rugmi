
<h1>image list</h1>

<main>
	<ul class="flex-container">
	
	<?php foreach ($images->items as $image): ?>


		<li>
			<a href="view_image.php?id=<?php echo $image->id ?>"><img src="<?php echo $image->url ?>?id=<?php echo $image->id ?>" alt="<?php echo $image->caption ?>" class="flex-item"></a>
		</li>

	<?php endforeach ; ?>
	</ul>
</main>
