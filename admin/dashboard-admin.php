<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/tambah.css" />

    <!--== Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pangolin&family=Poppins&family=Potta+One:wght@400;500&display=swap"
      rel="stylesheet"
    />

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="../image/telsa.png" type="../image/x-icon" />
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-30">
            <h1>Kelola Toko</h1>
        </div>
    </div>
</div>
<div class="hijau">

</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-3 sidebar">
            <div class="dropdown mt-10 dropdown-below">
                <button class="btn dropdown-toggle btn-menu-sidebar" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../image/produk.png" alt="">
                </button>
                
            <div class="dropdown-menu">
                <li><a class="dropdown-item sub-menu" href="?page=produk-saya">Produk Saya</a></li>
                <li><a class="dropdown-item sub-menu" href="?page=tambah-produk">Tambah Produk</a></li>
                <li><a class="dropdown-item sub-menu" href="#">Promosi Saya</a></li>
            </div>
            </div>

            <div class="dropdown mt-10 dropdown-below">
                <button class="btn dropdown-toggle btn-menu-sidebar" id="dropdownMenuButton2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../image/pesanan.png" alt="">
                </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item sub-menu" href="?page=pesanan-saya">Pesanan Saya</a></li>
                <li><a class="dropdown-item sub-menu" href="#">Pengiriman Saya</a></li>
                <li><a class="dropdown-item sub-menu" href="#">Pengembalian Barang</a></li>
            </ul>
            </div>

            <div class="dropdown mt-10 dropdown-below">
                <button class="btn dropdown-toggle btn-menu-sidebar" id="dropdownMenuButton3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../image/keuangan.png" alt="">
                </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item sub-menu" href="?page=penghasilan-saya">Penghasilan Saya</a></li>
                <li><a class="dropdown-item sub-menu" href="?page=saldo-saya">Saldo Saya</a></li>
                <li><a class="dropdown-item sub-menu" href="?page=rekening-saya">Rekening Bank</a></li>
            </ul>
            </div>

            <div class="dropdown mt-10 dropdown-below">
                <button class="btn dropdown-toggle btn-menu-sidebar" id="dropdownMenuButton4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../image/data.png" alt="">
                </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item sub-menu" href="?page=bisnis-saya">Bisnis Saya</a></li>
                <li><a class="dropdown-item sub-menu" href="#">Kesehatan Toko</a></li>
            </ul>
            </div>

            <a href="../signin.php"><button class="btn-keluar">Keluar</button></a>
        </div>

        <div class="col-9">
        <?php
    // Cek apakah parameter 'page' ada di URL
    if (isset($_GET['page'])) {
        // Gunakan switch untuk menentukan file yang sesuai dengan nilai 'page'
        switch ($_GET['page']) {
            case 'produk-saya':
                include "produk-saya.php";
                break;
            case '?page=produk-saya':
                include "produk-saya.php";
                break;
            case 'tambah-produk':
                include "tambah-produk.php";
                break;
            case 'pesanan-saya':
                include "pesanan-saya.php";
                break;
            case 'penghasilan-saya':
                include "penghasilan-saya.php";
                break;
            case 'saldo-saya':
                include "saldo-saya.php";
                break;
            case 'rekening-saya':
                include "rekening-saya.php";
                break;
            case 'bisnis-saya':
                include "bisnis-saya.php";
                break;
            case '?page=edit-produk':
                include "edit-produk.php";
                break;
            case 'edit-produk':
                include "edit-produk.php";
                break;                
            // Tambahkan kasus lain sesuai kebutuhan
            default:
                include "produk-saya.php";
                break;
        }
    } else {
        // Jika parameter 'page' tidak ada, tampilkan default content
        include "produk-saya.php";
    }
?>

    </div>  
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>