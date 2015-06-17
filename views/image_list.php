
<h1>image list</h1>

<main>
	<ul class="flex-container">
	
	<?php $images = new Images_Collection([
		'deleted' => '0'
	]); ?>

	<?php foreach ($images->items as $image): ?>

		<li>
			<img src="assets/img/<?php echo $image->url ?>?id=<?php echo $image->id ?>" alt="<?php echo $image->caption ?>" class="flex-item">

			<?php echo Form::open() ?>
				<div class="row">
					<?php echo Form::label('comment', 'Comment') ?>
					<?php echo Form::textarea('comment') ?>
					<?php echo Form::hidden('image_id', $image->id) ?>
				</div>
				<?php echo Form::submit() ?>
			<?php echo Form::close() ?>
		</li>

	<?php endforeach ; ?>
	</ul>
</main>
