<?php

class category{

	private $db;

	public function __construct()
	{
		try{
			$this->db =
			new PDO("mysql:host=localhost;dbname=dbweb4","root","");

		} catch (PDOException $e) {
			die ("Error".$e->getMessage());
		}
		
	}

	public function tampil()
	{
		$sql = "SELECT*FROM tb_category";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($rows = $stmt->fetch()) {
			$data[] = $rows;
	}

		return $data;
	}
}