<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../models/login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Detail Data</title>
</head>

<body>

    <!--Start Sidebar  -->

    <div class="sidebar close">

        <!-- logo -->
        <div class="logo-details">
            <img src="../assets/img/logo/administrator.png" alt="Profile">
            <span class="logo_name">Administrator</span>
        </div>

        <!-- navbar menu -->
        <ul class="nav-links">
            <li>

                <!-- menu -->

                <a href="dashboard_rplb_35.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>

            </li>
            <li>

                <!-- dropdown -->

                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">List Data</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down arrow'></i> -->
                </div>
                <ul class="sub-menu">
                    <li><a href="dasboard_listdata_rplb_35.php">List Data</a></li>
                </ul>
            </li>

            <!-- dropdown -->
            <li>
                <div class="iocn-link">
                    <a href="dasboard_detaildata_rplb_35.php">
                        <i class='bx bx-book-alt'></i>
                        <span class="link_name">Detail Data</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down arrow'></i> -->
                </div>
                <ul class="sub-menu">
                    <li><a href="dasboard_detaildata_rplb_35.php">Detail Data</a></li>
                </ul>
            </li>
            <li>

                <div class="iocn-link">
                    <a href="dasboard_form_rplb_35.php">
                        <i class='bx bx-pie-chart-alt-2'></i>
                        <span class="link_name">Form</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a href="dasboard_form_rplb_35.php">Form</a></li>
                </ul>

            </li>
            <li>

                <!-- menu -->

                <a href="#">
                    <i class='bx bx-line-chart'></i>
                    <span class="link_name">Chart</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Chart</a></li>
                </ul>
            </li>
            <li>
                <!-- menu -->

                <a href="#">
                    <i class='bx bx-compass'></i>
                    <span class="link_name">Explore</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Explore</a></li>
                </ul>
            </li>
            <li>
                <!-- menu -->

                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="link_name">Setting</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Setting</a></li>
                </ul>
            </li>
            <li>
                <!-- menu -->

                <a href="../models/logout.php">
                    <i class='bx bx-log-out'></i>
                    <span class="link_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- End Sidebar -->


    <!-- home -->

    <section class="home-section">

        <div class="home-content">

            <!-- menu - sun -->
            <i class='bx bx-menu'></i>
            <i class='bx bxs-sun'><span class="links_side">Switch</span></i>

            <!-- switch toggle -->
            <div class="mode-toggle">
                <span class="switch"></span>
            </div>
            <i class='bx bxs-bell'><span class="links_side">Notify</span></i>
        </div>

        <!-- Tabel Detail Data List -->
        <div class="tabel">

            <!-- Detail Data List -->
            <div class="data-list">
                <div class="content-data">
                    <div class="box-toggle">
                        <h2>Detail Data</h2>
                        <button class="btn">
                            <a href="#" class="text-data">Edit</a>
                        </button>
                    </div>

                    <div class="container-detaildata">
                        <div class="container-wrap">
                            <img src="#" alt="Barang">
                            <h4 class="under-image"></h4>

                            <div class="button">
                                <button class="btn-kembali">
                                    <a href="#" class="text-data">Kembali</a>
                                </button>
                            </div>
                        </div>
                        <div class="text">

                            <p class="text-info">Judul</p>
                            <h3>#<< /h3>

                                    <p class="text-info">Penerbit</p>
                                    <h3>#< ?>
                                    </h3>

                                    <p class="text-info">Jenis Buku</p>
                                    <h3>#<< /h3>

                                            <p class="text-info">Stok</p>
                                            <h3>#</h3>

                                            <p class="text-info">Catatan</p>
                                            <h3>#></h3>

                        </div>
                    </div>
                </div>
    </section>

    <!-- JavaScript -->
    <script src="../assets/js/script.js"></script>
</body>

</html> 
