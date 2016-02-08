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
	protected $dbhost = 'localhost'; 
	protected $dbname = 'newsfeed'; 
	protected $dbuser = 'newsfeed_user'; 
	protected $dbpass = '55831421'; 
	
	function __construct()
	{
		
	}		
	// метод выборки данных
	public function get_data()
	{
		// todo
	}
}