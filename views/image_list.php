
<h1>image list</h1>

<main>
	<ul class="flex-container">
	
	<?php foreach ($images->items as $image): ?>

		<img src="assets/img/<?php echo $image->url ?>" alt="<?php echo $image->url ?>" class="flex-item">

	<?php endforeach ; ?>
	</ul>
</main>
