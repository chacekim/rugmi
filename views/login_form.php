<div>
	<h1>Login</h1>

	<?php if($login_error) : ?>
		<p class="error"><?php echo $login_error; ?></p>
	<?php endif; ?>

	<?php echo Form::open() ?>

		<div class="row">
			<?php echo Form::label('email', 'Email') ?>
			<?php echo Form::email('email') ?>
		</div>

		<div class="row">
			<?php echo Form::label('password', 'password') ?>
			<?php echo Form::password('password') ?>
		</div>

		<?php echo Form::submit() ?>

	<?php echo Form::close() ?>
</div>