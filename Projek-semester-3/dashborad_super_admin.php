<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title> Project K 3 | MadBuah </title>
	<link rel="stylesheet" href="style.css">
	<!-- buat links icon -->
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<?php
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if ($_SESSION['level'] == "") {
		header("location:index.php?pesan=gagal");
	}

	?>
	<div class="sidebar">
		<div class="logo-details">
			<i class='#'></i>
			<span class="logo_name">MadBuah</span>
		</div>
		<ul class="nav-links">
			<li>
				<a href="#" class="active">
					<i class='bx bx-grid-alt'></i>
					<span class="links_name">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="produk.php">
					<i class='bx bx-box'></i>
					<span class="links_name">Pruduk</span>
				</a>
			</li>
			<li>
				<a href="pesanan.php">
					<i class='bx bx-cart'></i>
					<span class="links_name">Pesanan</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bx-user'></i>
					<span class="links_name">Pelanggan</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bx-book-alt'></i>
					<span class="links_name">Laporan</span>
				</a>
			</li>

			<li>
				<a href="#">
					<i class='bx bx-cog'></i>
					<span class="links_name">Pengaturan</span>
				</a>
			</li>
			<li class="log_out">
				<a href="logout.php">
					<i class='bx bx-log-out'></i>
					<span class="links_name">Log out</span>

				</a>
			</li>
		</ul>
	</div>
	<section class="home-section">
		<nav>
			<div class="sidebar-button">
				<i class='bx bx-menu sidebarBtn'></i>
				<span class="dashboard">Dashboard</span>
			</div>
			<div class="search-box">
				<input type="text" placeholder="Cari...">
				<i class='bx bx-search'></i>
			</div>
			<div class="profile-details">
				<img src="images/AVATARZ - Sheik.svg" alt="">
				<span class="admin_name">P Haji Asep</span>
				<i class='bx bx-chevron-down'></i>
			</div>
		</nav>

		<div class="home-content">
			<div class="overview-boxes">
				<div class="box">
					<div class="right-side">
						<div class="box-topic">Total Pendapatan</div>
						<div class="number">40,876</div>

					</div>
					<i class='bx bx-cart-alt cart'></i>
				</div>
				<div class="box">
					<div class="right-side">
						<div class="box-topic">Total Penjualan</div>
						<div class="number">38,876</div>
					</div>
					<i class='bx bxs-cart-add cart two'></i>
				</div>
				<div class="box">
					<div class="right-side">
						<div class="box-topic">Total Pendapatan Penjualan</div>
						<div class="number">$12,876</div>
					</div>
					<i class='bx bx-cart cart three'></i>
				</div>
				<div class="box">
					<div class="right-side">
						<div class="box-topic">Total Return</div>
						<div class="number">11,086</div>
					</div>
					<i class='bx bxs-cart-download cart four'></i>
				</div>
			</div>

			<div class="sales-boxes">
				<div class="recent-sales box">
					<div class="title">Penjualan Terakhir</div>
					<div class="sales-details">
						<ul class="details">
							<li class="topic">Tanggal</li>
							<li><a href="#">02 Jan 2022</a></li>
							<li><a href="#">02 Jan 2022</a></li>
							<li><a href="#">02 Jan 2022</a></li>
							<li><a href="#">02 Jan 2022</a></li>
							<li><a href="#">02 Jan 2022</a></li>
							<li><a href="#">02 Jan 2022</a></li>
							<li><a href="#">02 Jan 2022</a></li>
							<li><a href="#">02 Jan 2022</a></li>
							<li><a href="#">02 Jan 2022</a></li>
						</ul>
						<ul class="details">
							<li class="topic">Pelanggan</li>
							<li><a href="#">Budi</a></li>
							<li><a href="#">Asep</a></li>
							<li><a href="#">Adit</a></li>
							<li><a href="#">Ikbal</a></li>
							<li><a href="#">Tono</a></li>
							<li><a href="#">Bayu</a></li>
							<li><a href="#">fajar</a></li>
							<li><a href="#">Rizki</a></li>
							<li><a href="#">Hadi Hadi Hadi</a></li>
						</ul>
						<ul class="details">
							<li class="topic">Status</li>
							<li><a href="#">Di Antar</a></li>
							<li><a href="#">Selesai</a></li>
							<li><a href="#">Selesai</a></li>
							<li><a href="#">Selesai</a></li>
							<li><a href="#">Selesai</a></li>
							<li><a href="#">Selesai</a></li>
							<li><a href="#">Selesai</a></li>
							<li><a href="#">Selesai</a></li>
							<li><a href="#">Selesai</a></li>
						</ul>
						<ul class="details">
							<li class="topic">Total</li>
							<li><a href="#">Rp 200.000 </a></li>
							<li><a href="#">Rp 121.000</a></li>
							<li><a href="#">Rp 219.500</a></li>
							<li><a href="#">Rp 99.000</a></li>
							<li><a href="#">Rp 400.000</a></li>
							<li><a href="#">Rp 47.000</a></li>
							<li><a href="#">Rp 21.00</a></li>
							<li><a href="#">Rp 109.500</a></li>
							<li><a href="#">Rp 320.100</a></li>
						</ul>
					</div>
					<div class="button">
						<a href="#">Lihat Semua</a>
					</div>
				</div>
				<div class="top-sales box">
					<div class="title">Penjualan Terlaris</div>
					<ul class="top-sales-details">
						<li>
							<a href="#">
								<img src="images/stroberi.svg" alt="">
								<span class="product">Stroberi</span>
							</a>
							<span class="price">Rp. 10000</span>
						</li>
						<li>
							<a href="#">
								<img src="images/tomat.svg" alt="">
								<span class="product">Tomat </span>
							</a>
							<span class="price">Rp. 12000</span>
						</li>
						<li>
							<a href="#">
								<img src="images/anggur.svg" alt="">
								<span class="product">Anggur</span>
							</a>
							<span class="price">Rp 40000</span>
						</li>
						<li>
							<a href="#">
								<img src="images/buah naga.svg" alt="">
								<span class="product">Buah Naga</span>
							</a>
							<span class="price">Rp 25000</span>
						</li>
						<li>
							<a href="#">
								<img src="images/leci.svg" alt="">
								<span class="product">Leci</span>
							</a>
							<span class="price">Rp 65000</span>
						</li>
						<li>
							<a href="#">
								<img src="images/mangga.svg" alt="">
								<span class="product">Mangga</span>
							</a>
							<span class="price">Rp 8000</span>
						<li>
							<a href="#">
								<img src="images/nanas.svg" alt="">
								<span class="product">Nanas</span>
							</a>
							<span class="price">Rp 230000</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<script>
		let sidebar = document.querySelector(".sidebar");
		let sidebarBtn = document.querySelector(".sidebarBtn");
		sidebarBtn.onclick = function() {
			sidebar.classList.toggle("active");
			if (sidebar.classList.contains("active")) {
				sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
			} else
				sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
		}
	</script>
</body>

</html>