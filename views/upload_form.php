<h1>Upload your images !</h1>

<div class="row">
	<?php echo Form::open_upload() ?>
	
		<?php echo Form::label('uploads', 'Your Image') ?>
		<?php echo Form::file() ?>

	<?php echo Form::close() ?>
	<?php echo Form::submit() ?>
</div>
