<?php

class Model_Main extends Model
{
		
	public function get_data($url=null)
	{	
		if ($url) 
		{
			//по url получаем xml обьект и разбираем его
			//возвращаем ассоциативный массив с данными
			return $data;
		}
		else
		{	
			$this->queryMysql(false, 'USE newsfeed');
			$pdo_stm = $this->queryMysql(false, 'SELECT * FROM posts');
			return $data = $pdo_stm->fetchAll();
		}

	}
}
