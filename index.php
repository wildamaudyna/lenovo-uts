<?php

require_once "inc/config.php";

if (isset($_SESSION['username'])) {
	require_once "layout/dashboard.php";	
} else {
	require_once "layout/index.php";
}
