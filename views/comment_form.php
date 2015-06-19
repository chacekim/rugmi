<h1>Edit image page</h1>

<div>
	<div class="view-page-comment-edit">
		<div>
			<img src="assets/img/<?php echo $image->url ?>">
		</div>
		<div>
			<?php echo Form::open() ?>
				<div class="row">
					<?php echo Form::label('comment', 'Comment') ?>
					<?php echo Form::textarea('comment') ?>
					<?php echo Form::hidden('image_id', $_GET['id']) ?>
				</div>
				<?php echo Form::submit() ?>
			<?php echo Form::close() ?>
		</div>
	</div>
	<div class="view-page-comment-list">
		<?php foreach ($comments->items as $comment):?>

			<ul class="view-image-comment">
				<div>
					<li>
						<div class="comment-content"><?php echo $comment->content ?></div>
					</li>
				</div>
			</ul>

		<?php endforeach; ?>
	</div>
</div>