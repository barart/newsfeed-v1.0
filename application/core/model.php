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
	protected $dbhost = '22localhost'; 
	protected $dbname = 'newsfeed'; 
	protected $dbuser = 'newsfeed'; 
	protected $dbpass = '55831421'; 
	
	function __construct()
	{
		$dsn = "mysql:host=$this->dbhost;dbname=$this->newsfeed";
		$opt = array(
		    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		);

		try {
			$pdo = new PDO($dsn, $this->dbuser, $this->dbpass, $opt);
		} catch (PDOException $e){
			// die ('Подключение не удалось: ' . $e->getMessage());
			Route::ErrorPage404();
		}

	}		
	
	// метод выборки данных
	public function get_data()
	{
		// todo
	}
}