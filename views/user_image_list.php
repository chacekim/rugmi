
<h1>image list</h1>

<main>
	<ul class="flex-container">

	<?php foreach ($user_images->items as $image): ?>

		<img src="assets/img/<?php echo $image->url ?>" alt="<?php echo $image->url ?>" class="flex-item">

		<?= Form::open() ?>

			<div class="row">
				<?= Form::label('caption', 'Edit Caption') ?>
				<?= Form::textarea('caption', $image->caption) ?>
				<?= Form::hidden('image_id', $image->id) ?>
			</div>

			<?= Form::submit() ?>
 
		<?= Form::close() ?>

	<?php endforeach ; ?>
	</ul>
</main>
