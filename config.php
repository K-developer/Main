<?php
class DB
{
	private static $instance = null;
	private static $host = "localhost";
	private static $user = "name";
	private static $pass = "pass";
	{
		if(self::$instance == null)
		{
			try
			{
				self::$instance = new PDO("mysq:host=$host; dbname=mysql", $user, $pass);
			}
			catch(PDOException $e)
			{
				throw $e;
			}
		}
		return self::$instance;
	}
}
?>