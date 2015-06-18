
<?= Form::open_upload('upload_image.php') ?>

	<?= Form::max_file_size()?>

		<div class="form_group">
			<?=Form::label('file', 'File') ?>
			<?=Form::file() ?>
	
		</div>
		
		<?= Form::submit() ?>

		

	<?= Form::close() ?>
