<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/dashboard.css">

	<title>AdminHub</title>
	<style>
		@media print {
			body {
				display: none;
			}
		}
	</style>
</head>
<body>
	
  <!-- SIDEBAR -->
  <section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			
		</nav>

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="backend/cetakPdf.php" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>User Info</h3>
						<form action="" method="post">
							<div class="form-input">
								<input type="tex" name="keyword" size="40" autofocus placeholder="Search..." autocomplete="off" id="keyword">
								<button type="submit" name="search" id="tombol-cari" class="search-btn"><i class='bx bx-search' ></i></button>
							</div>
						</form>
					</div>
					<table>
						<thead>
							<tr>
								<th>id</th>
								<th>Nama</th>
								<th>email</th>
							</tr>
							<?php $i = 1; ?>
							<?php foreach ($users as $user) : ?>
							<tr>
								<th><?= $user["id_users"]; ?></th>
								<th><?= $user["username"]; ?></th>
								<th><?= $user["email"]; ?></th>
							</tr>
							<?php $i++; ?>
							<?php endforeach; ?>

						</thead>
						
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Ranking</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
				</div>
			</div>
			<!-- NAVIGASI -->

			<?php if($halamanAktif > 1) : ?>
				<a href="?halaman=<?= $halamanAktif - 1; ?>" class="tombol">&laquo;</a>
			<?php endif; ?>

			<?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
				<?php if($i == $halamanAktif) : ?>
					<a href="?halaman=<?= $i; ?>" class="tombol" style="font-weight: bold; color: red;"><?= $i; ?></a>
				<?php else : ?>
					<a href="?halaman=<?= $i; ?>" class="tombol"><?= $i; ?></a>
				<?php endif; ?>
			<?php endfor; ?>

			<?php if($halamanAktif < $jumlahHalaman) : ?>
				<a href="?halaman=<?= $halamanAktif + 1; ?>" class="tombol">&raquo;</a>
			<?php endif; ?>
		</main>
	</section>

  <script src="js/<?= $name; ?>.js"></script>
  
</body>
</html>