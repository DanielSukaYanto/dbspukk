<?php
session_start();
if (empty($_SESSION['id_petugas'])) {
	echo "<script>alert('Maaf Anda Belum Login');
	window.location.assign('../index2.php');
	</script>";
}
if ($_SESSION['level'] != 'petugas') {
	echo "<script>alert('Maaf Anda Bukan Sesi Admin');
	window.location.assign('../index2.php');
	</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Petugas - Aplikasi Pembayaran SPP</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			background-color: #0d1117;
			/* Dark purple background color */
			padding-top: 60px;
			/* Adjusted for the fixed navbar height */
		}

		.navbar {
			background-color: #0d1117;
			/* Dark  background color for navbar */
			padding: 2px;
		}

		.navbar a {
			color: #fff;
			/* Navbar link text color */
			margin-right: 15px;
			text-decoration: none;
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Noto Sans", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
			margin-bottom: 10px;
			font-size: 14px;

		}

		.navbar a:hover {
			color: #6c757d;
		}

		.container {
			margin-top: 20px;
		}

		.navbar-brand img {
			height: 35px;
			/* Adjust the height as needed */
			margin-right: 10px;
			/* Adjust the margin as needed */
		}

		/* Footer styling */
		footer {
			background-color: #0d1117;
			/* Dark gray background color for the footer */
			color: #6c757d;
			/* Text color for the footer */
			padding: 20px 0;
			text-align: center;
			margin-top: 350px;
			font-family: Georgia, 'Times New Roman', Times, serif
		}

		.alert {
			font-weight: bold;
			text-align: center;
			background-color: #0d1117;
		}

		.tombol {
			font-weight: bold;
		}

		h3 {
			font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
			color: #fff;
			text-align: center;
		}

		.logout {
			margin-left: 30px;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="mts.jpg.png" alt="Logo">
			</a>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="petugas.php?url=pembayaran">Pembayaran</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="petugas.php?url=logout">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container mt-5">

		<h3>Aplikasi Pembayaran SPP</h3>
		<div class="alert alert-secondary">
			Anda Login Sebagai Petugas <b>
				<?= $_SESSION['nama_petugas'] ?>
			</b> Aplikasi Pembayaran SPP
		</div>

		<div class="card mt-2">
			<div class="card-body">
				<!-- ini isi web kita -->
				<?php
				$file = @$_GET['url'];
				if (empty($file)) {
					echo "<h4>Selamat Datang Di Halaman Petugas</h4>";
					echo "Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa / siswi di SMK Management Training Systems.";
				} else {
					include $file . '.php';
				}
				?>
			</div>
		</div>

	</div>
	<footer>
		<p>&copy; Managemenet Training System</p>
	</footer>

	<script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>