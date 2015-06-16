<div>
	<h1>Registration</h1>

	<?php if($error) : ?>
		<p class="error"><?php echo $error; ?></p>
	<?php endif; ?>

	<?php echo Form::open() ?>

		<div class="row">
			<?php echo Form::label('firstname', 'First Name') ?>
			<?php echo Form::text('firstname') ?>
		</div>

		<div class="row">
			<?php echo Form::label('lastname', 'Last Name') ?>
			<?php echo Form::text('lastname') ?>
		</div>

		<div class="row">
			<?php echo Form::label('email', 'Email') ?>
			<?php echo Form::email('email') ?>
		</div>

		<div class="row">
			<?php echo Form::label('password', 'Password') ?>
			<?php echo Form::text('password') ?>
		</div>

		<?php echo Form::submit() ?>

	<?php echo Form::close() ?>

</div>