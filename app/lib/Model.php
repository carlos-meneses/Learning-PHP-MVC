<?php
class Model extends R {

	public static $db;

	public function __construct(){
		$this->openDatabaseConnection();
	}

	private function openDatabaseConnection()
    {
        self::$db = R::setup(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    }
}
