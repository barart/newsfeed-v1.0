<?PHP 
	for ($i=0; $i < count($XML); $i++) { 
		// сюдя передадим xml документ и отобразим его данные в этом шаблоне:
	}
?>
<div class="post">
	<h1><a href="#" class="title">XML->DATA</a></h1>

	<div class='post-header'>
		<div class='published'>
			<span class='caption'>Опубликовано:</span>
			<span class='publishdate'>XML->DATA.</span>		
		</div>
	</div>
	<div class="post-content">
		XML->DATA
		<?PHP print_r($data);?>
	</div>

	<div class="post-footer">
		<div class="buttons">
			<a class="newscut" href="#">Read more &rarr; </a>
		</div>
	</div>
</div>