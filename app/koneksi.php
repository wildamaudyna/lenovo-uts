<?php

namespace app;
use PDO;

class koneksi{
	protected object $db;
	public function __construct(){
		try{
			$this->db = new PDO("mysql:host=localhost;dbname=dbweb4", "root", "");
		} catch (\Exception $e){
			die("Error" . $e->getMessage());
		}
	}
}

?>