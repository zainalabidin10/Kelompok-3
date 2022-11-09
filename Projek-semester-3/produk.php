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
                <a href="produk.php" class="active">
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

        <div class="container page-wrapper">
            <div class="page-inner">
                <div class="row">
                    <div class="el-wrapper">
                        <div class="box-up">
                            <img class="img" src="images/buah naga.svg" alt="">
                            <div class="img-info">
                                <div class="info-inner">
                                    <span class="p-name">I feel like Pablo</span>
                                    <span class="p-company">Yeezy</span>
                                </div>
                                <div class="a-size">Available sizes : <span class="size">S , M , L , XL</span></div>
                            </div>
                        </div>

                        <div class="box-down">
                            <div class="h-bg">
                                <div class="h-bg-inner"></div>
                            </div>

                            <a class="cart" href="#">
                                <span class="price">$120</span>
                                <span class="add-to-cart">
                                    <span class="txt">Add in cart</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>