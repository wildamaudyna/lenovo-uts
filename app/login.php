<?php

namespace app;

class login extends koneksi {

	public function __construct()
	{
		parent ::__construct();
	}

	public function proses()
	{
		$i_username= $_POST['i_username'];
		$i_password= $_POST['i_password'];

		$sql = "SELECT * FROM tb_user WHERE username=:username AND password=:password";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":username", $i_username);
		$stmt->bindParam(":password", $i_password);
		$stmt->execute();

		$row = $stmt->fetch();

		if (!empty($row)) {
			$_SESSION['username'] = $row['username'];
		} else {
			$_SESSION['error'] = "Login Error";
		}
	}

}