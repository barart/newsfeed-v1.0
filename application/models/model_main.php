<?php

class Model_Main extends Model
{
		
	public function get_data()
	{	
		$this->queryMysql('USE newsfeed');
		$result = $this->queryMysql('SELECT * FROM posts');
		 foreach ($result as $row) {
	        print $row['title'] . "\t";
	        print $row['publishdate'] . "\t";
	        print $row['text'] . "\n";
	    }
		// формируем и выполняем SQL запрос с БД
		// перегоняем сырые днные в XML обьект
		// возвращаем готовый XML обект с всеми новостями   
		$data = "DATA FROM MySQL";
		return $data;
	}

}
