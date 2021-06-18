<?php

require_once "inc/config.php";

$login = new app\login();

if (isset($_POST['b_login'])) {
	$login->proses();
	header("location:index.php");
}