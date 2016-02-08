<?php

class Model_Main extends Model
{
	

	public function get_data()
	{	
		
		// формируем и выполняем SQL запрос с БД
		// вызываем защищенный метод для перегонки сырых днных в XML обьект
		// возвращаем готовый XML обект    
		$data = "DATA FROM MySQL";
		return $data;
	}

}
