<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<meta name="description" content="UTS Pemrograman Berbasis Web Lanjutan">
	<meta name="author" content="Gallery Photography">
	<meta name="keywords" content="uts, pemrograman, berbasis, web, dasar">
	<title>UTS PEMROGRAMAN WEB LANJUTAN</title>
	<link href="<?php echo ASSET; ?>css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="main-body">
		<header>
			<img src="layout/assets/images/fotoo.png">
			<h2>GALLERY PHOTOGRAPHY</h2>
			<p>A pict can give you all of the memory</p>
		</header>

		<nav class="nav">
			<ul>
				<li><a href="index.php" class="active">Home</a></li>
				<li><a href="index.php?page=login_form" class="active">Login</a></li>
			</ul>
			
		</nav>

		<section>
			<?php
				if (isset($_GET['page'])) {
					include $_GET['page'] . ".php";
				} else {
					include "main_index.php";
				}
			?>
		</section>
		<br>
		<footer>
			&copy;Copyright Gallery Photography 2021
		</footer>
	</div>
</body>
</html>