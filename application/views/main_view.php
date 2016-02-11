<div class="post">
	<h1><span class="id">#<?php echo $row['id'];?></span><a href="#" class="title"><?php echo $row['title'];?></a></h1>
	<div class='post-header'>
		<div class='published'>
			<span class='caption'>Опубликовано: </span>
			<span class='publishdate'><?php echo $row['publishdate']; ?></span>		
		</div>
	</div>
	<div class="post-content">
		<?php 
			$text_preview = $this->get_prew_text($row['text']);
			echo $text_preview;
		$row ?>
	</div>

	<div class="post-footer">
		<div class="buttons">
			<a class="newscut" href="#">Read more &rarr; </a>
		</div>
	</div>
</div>