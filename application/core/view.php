<?php

class View
{
	
	//public $template_view; // здесь можно указать общий вид по умолчанию.
	
	/*
	$content_file - виды отображающие контент страниц;
	$template_file - общий для всех страниц шаблон;
	$data - массив, содержащий элементы контента страницы. Обычно заполняется в модели.
	*/

	function generate($main_view, $template_view, $data = null)
	{
		/*
		if(is_array($data)) {
			
			// преобразуем элементы массива в переменные
			extract($data);
		}
		*/
		
		/*
		динамически подключаем общий шаблон (вид),
		внутри которого будет встраиваться вид
		для отображения контента конкретной страницы.
		*/
		include 'application/views/'.$template_view;
	}
	function get_prew_text($text, $maxwords=300, $maxchar=500) 
	{
		//$text=strip_tags($text);
		$words=preg_split("/[\s,]+/", $text);
		$text='';
		foreach ($words as $word) 
		{
			if (mb_strlen($text.' '.$word)<$maxchar) 
			{
				$text.=' '.$word;
			}
			else {
				$text.='...';
				break;
			}
		}
		return $text;
	}
}
