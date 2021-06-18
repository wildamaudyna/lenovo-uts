<!DOCTYPE html>
<html>
<head>
	<title>UTS Pemrograman Web Lanjutan</title>
	<link href="layout/assets/css/style.css" rel="stylesheet" type="text/css">
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
				<li><a href="index.php">Home</a></li>
				<li><a href="tampilan_category.php">Category</a></li>
				<li><a href="tampilan_post.php">Post</a></li>
				<li><a href="tampilan_photos.php">Photos</a></li>
				<li><a href="tampilan_album.php">Album</a></li>
			</ul>
			
		</nav>

		<div class="content">
		<div class="kotak">
		<h3>POST</h3>

<?php

require_once "app/post.php";

$post = new post();
$rows = $post-> tampil();

?>
<center>
	<table>
		<tr>
			<td>ID</td>
			<td>Tanggal</td>
			<td>Slug</td>
			<td>Judul</td>
			<td>Text</td>
			<td>Aksi</td>
		</tr>

		<?php foreach ($rows as $row) { ?>

			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['date']; ?></td>	
				<td><?php echo $row['slug']; ?></td>	
				<td><?php echo $row['title']; ?></td>	
				<td><?php echo $row['text']; ?></td>	
			</tr>

		<?php } ?>
	</table>
		<br>
          <a href="index.php?page=post_tambah">+ Tambah</a>
</center>
		</div>
		</div>
		<footer>
			&copy;Copyright Gallery Photography 2021
		</footer>
	</div>
</body>
</html>