<?php

namespace Model;

use \PDO;
use \PDOException;

class Db
{
	//database handle
	private static $dbh;

	public static function getDbh()
	{
		// if no connexion
		if (!self::$dbh){
			//connexion & $dbh value
			self::connect();
		}

		return self::$dbh;
	}

	// Database connexion
	private static function connect()
	{

		try {
			self::$dbh = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS, [
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING         // show errors. modify for production
			]);
		} catch (PDOException $e) {
		    echo 'Connexion error : ' . $e->getMessage();
		}
	}
}