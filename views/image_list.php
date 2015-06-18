
<h1>image list</h1>

<main>
	<ul class="flex-container">
	
	<?php $images = new Images_Collection([
		'deleted' => '0'
	]); ?>

	<?php foreach ($images->items as $image): ?>

		<img src="<?php echo $image->url ?>" alt="<?php echo $image->caption ?>" class="flex-item">

	<?php endforeach ; ?>
	</ul>
</main>
