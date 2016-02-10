<?php

class Model_Main extends Model
{
		
	public function get_data()
	{	
		$this->queryMysql(false, 'USE newsfeed');
		$pdo_stm = $this->queryMysql(false, 'SELECT * FROM posts');
		return $result = $pdo_stm->fetchAll();
	}

	public function generateXml($data)
	{
		echo "<><><>".gettype($data)."<br>";
		if (gettype($data)=='array') 
		{
			// перегоняем сырые днные (массив) в XML обьект
			// возвращаем готовый XML обект с всеми новостями   			
			foreach ($data as $row) 
			{
				$xml_obj.= $row['title']."   ".$row['publishdate']."   ".$row['text']."<br />";//симуляция
 			}
			return $xml_obj;
		}
		elseif (gettype($data=='string')) 
		{
			//по url получаем xml обьект
			$xml_obj = $data; //симуляция
			return $xml_obj;
		}
		else return FALSE;
	}
}
