<h1>image list</h1>
<main>
	<ul>
		
		<?php foreach($images as $image): ?>
		<li>	
			<img src="<?=$image->url;?>" alt="<?=$image->caption?>">
		</li>
		<?php endforeach; ?>
	</ul>
</main>

