
<h1>image list</h1>

<main>
	<ul class="flex-container">


	<?php foreach ($images->items as $image): ?>

		<li class="flex-item"><img src="assets/img/<?php echo $image->url; ?>" alt="<?php echo $image->caption; ?>"></li>

	<?php endforeach ; ?>
	</ul>
</main>
