<!DOCTYPE html>
<html>
<head>
	<title>UTS PEMROGRAMAN WEB LANJUTAN</title>
	<link href="<?php echo ASSET; ?>assets/css/style.css" rel="stylesheet" type="text/css">
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
				<li><a href="index.php" class="active">Dashboard</a></li>
				<li><a href="index.php?page=category" class="active">Category</a></li>
				<li><a href="index.php?page=post" class="active">Post</a></li>
				<li><a href="index.php?page=photos" class="active">Photos</a></li>
				<li><a href="index.php?page=album" class="active">Album</a></li>
				<li><a href="login_logout">Logout</a></li>

			</ul>
			
		</nav>

		<section>
			<?php
				if (isset($_GET['page'])) {
					include $_GET['page'] . ".php";
				} else {
					include "main_dashboard.php";
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