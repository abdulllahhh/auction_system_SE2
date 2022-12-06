<?php

class Singleton
{

	private static  $uniqueinstance = null;

	//private Singleton();
	private function __construct()
	{
	}

	public static function getinstance()
	{
		if (@self::$uniqueinstance == null) {
			require 'connect.php';
			self::$uniqueinstance =  new mysqli($host, $dbUser, $dbPass, $dbName);
			//$uniqueinstance =  new mysqli('localhost', 'root', '', 'SWE_2_PROJ_');
		}
		return self::$uniqueinstance;
	}
}
