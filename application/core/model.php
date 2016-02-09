<?php

class Model
{
	
	/*
		Модель обычно включает методы выборки данных, это могут быть:
			> методы нативных библиотек pgsql или mysql;
			> методы библиотек, реализующих абстракицю данных. Например, методы библиотеки PEAR MDB2;
			> методы ORM;
			> методы для работы с NoSQL;
			> и др.
	*/ 
	public $dbhost = 'localhost'; 
	public $dbname = 'newsfeed'; 
	public $dbuser = 'newsfeed'; 
	public $dbpass = '55831421'; 
	public $pdo = '';
	function __construct()
	{
		$this->pdo=$this->connection_db('open');
	}

	public function connection_db($cmd)
	{
		if($cmd == 'open')
		{
			$dsn = "mysql:host=$this->dbhost;dbname=$this->newsfeed";
 			$opt = array(
 			    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
 			    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
 			);

			try 
			{
				$pdo = new PDO($dsn, $this->dbuser, $this->dbpass, $opt);
				return $pdo;
			}
			catch (PDOException $e) 
			{
				// return $e->getCode();
				return FALSE;	
			}
		}
		else if ($cmd == 'close')
		{
			$pdo = null;
		}
		else return FALSE;
	}
	function queryMysql($query)
	{
		$result = $this->pdo->query($query);
		// if (!$result) die($this->pdo->errorCode());
		return $result;
	}		
	// метод выборки данных
	public function get_data()
	{
		// todo
	}
}