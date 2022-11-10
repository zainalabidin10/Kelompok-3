<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- buat links icon -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='#'></i>
            <span class="logo_name">MadBuah</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="dashborad_super_admin.php">
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
                <a href="pesanan.php" class="active">
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
</body>

</html>