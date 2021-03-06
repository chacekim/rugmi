<h1>Edit image page</h1>

<div>
	<div class="view-page-comment-edit">
		<div>
			<img src="<?php echo $image->url ?>">
		</div>
		<div>
			<?php echo Form::open() ?>
				<div class="row">
					<?php echo Form::label('comment', 'Comment') ?>
					<?php echo Form::textarea('comment', $comment->content) ?>
					<?php echo Form::hidden('image_id', $_GET['id']) ?>
				</div>
				<?php echo Form::submit() ?>
			<?php echo Form::close() ?>
		</div>
	</div>
	<div class="view-page-comment-list">

		<?php if($comments) : ?>
			
			<?php foreach ($comments->items as $comment):?>

				<ul class="view-image-comment">
					<div>
						<li>
							<div class="comment-content"><?php echo $comment->content ?></div>
						</li>
					</div>
					<div class="comment-actions">
						<?php if($logged_in_user_id == $comment->user_id || $logged_in_user_id == $image->user_id) : ?>
							
							<a href="delete_comment.php?id=<?php echo $comment->id ?>&image_id=<?php echo $image->id  ?>">Delete</a>

						<?php endif ; ?>

						<?php if($logged_in_user_id == $comment->user_id || $image->user_id == 0) : ?>
							
							<a href="edit_comment.php?id=<?php echo $comment->id ?>&image_id=<?php echo $image->id  ?>">Edit</a>

						<?php endif ; ?>
					</div>
				</ul>

			<?php endforeach; ?>

		<?php endif ; ?>

	</div>
</div>