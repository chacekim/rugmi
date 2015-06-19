
<h1>image list</h1>

<main>
	<ul class="flex-container">

	<?php foreach ($user_images->items as $image): ?>

		<a href="view_image.php?id=<?php echo $image->id ?>"><img src="<?php echo $image->url ?>" alt="<?php echo $image->url ?>" class="flex-item"></a>


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
