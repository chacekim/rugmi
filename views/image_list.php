<h1>image list</h1>

<main>
	<ul>
	<?php foreach ($images as $image): ?>

		<li><img src="<?php echo $image->url; ?>" alt="<?php echo $image->caption; ?>"></li>

	<?php endforeach ; ?>
	</ul>
</main>