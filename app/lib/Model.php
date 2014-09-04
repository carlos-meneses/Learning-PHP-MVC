<?php
class Model extends R {

	private $db;

	public function __construct(){
		$this->openDatabaseConnection();
	}

	private function openDatabaseConnection()
    {
        $this->db = self::setup(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    }
}
