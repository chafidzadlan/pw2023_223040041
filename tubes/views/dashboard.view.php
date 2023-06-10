<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
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
			<ion-icon name="happy"></ion-icon>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="">
					<ion-icon name="apps"></ion-icon>
					<span class="text">Dashboard</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="registeradmin.php" class="logout">
					<ion-icon name="person-add"></ion-icon>
					<span class="text">Daftar Admin</span>
				</a>
			</li>
			<li>
				<a href="logout.php" class="logout">
					<ion-icon name="log-out-outline"></ion-icon>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<ion-icon name="menu-outline"></ion-icon>
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
						<li><ion-icon name="chevron-forward"></ion-icon></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="backend/cetakPdf.php" class="btn-download">
					<ion-icon name="cloud-download"></ion-icon>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>User Info</h3>
						<form action="" method="post">
							<div class="form-input">
								<input type="text" name="keyword" id="keyword" class="keyword" size="40" autofocus placeholder="Search..." autocomplete="off" id="keyword">
								<button type="submit" name="search" id="tombol-cari" class="search-btn">									
									<ion-icon name="search"></ion-icon>
								</button>
							</div>
						</form>
					</div>
					<div id="search-container">
							<table>
								<thead>
									<tr>
										<th>Id</th>
										<th>Nama</th>
										<th>Email</th>
										<th>Address</th>
										<th>Status</th>
									</tr>
									<?php $i = 1; ?>
									<?php foreach ($users as $user) : ?>
									<tr>
										<th><?= $user["id_users"]; ?></th>
										<th><?= $user["username"]; ?></th>
										<th><?= $user["email"]; ?></th>
										<th><?= $user["address"]; ?></th>
										<th><?= $user["status"]; ?></th>	
									</tr>
									<?php $i++; ?>
									<?php endforeach; ?>
								</thead>
							</table>
					</div>
				</div>
			</div>

			<!-- NAVIGASI -->
			
			<div class="pagination">
			<?php if($halamanAktif > 1) : ?>
				<a href="?halaman=<?= $halamanAktif - 1; ?>" class="tombol">
					<ion-icon name="chevron-back"></ion-icon>
				</a>
			<?php endif; ?>

			<?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
				<?php if($i == $halamanAktif) : ?>
					<a href="?halaman=<?= $i; ?>" class="tombol" style="font-weight: bold; color: var(--blue-color);"><?= $i; ?></a>
				<?php else : ?>
					<a href="?halaman=<?= $i; ?>" class="tombol"><?= $i; ?></a>
				<?php endif; ?>
			<?php endfor; ?>

			<?php if($halamanAktif < $jumlahHalaman) : ?>
				<a href="?halaman=<?= $halamanAktif + 1; ?>" class="tombol">
					<ion-icon name="chevron-forward"></ion-icon>
				</a>
			<?php endif; ?>
			</div>
		</main>
	</section>


	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
	<script src="js/custom.js"></script>
  
</body>
</html>