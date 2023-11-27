<?php
include "connect.php";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$nama_produk = $_POST["nama_produk"];
$kategori_produk = $_POST["kategori_produk"];
$jenis_variasi = $_POST["jenis_variasi"];
$stok = $_POST["stok"];
$deskripsi = $_POST["deskripsi"];
$harga = $_POST["harga"];
$berat = $_POST["berat"];
$pengiriman = $_POST["pengiriman"];
$pembayaran = $_POST["pembayaran"];
$gambar = $_FILES['gambar']['name'];

    $ekstensi_diperbolehkan = array('png', 'jpg');
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $gambar;
    $gambar_path = 'gambar/' . $nama_gambar_baru;
    var_dump($ekstensi);

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, $gambar_path);

        $sql = "INSERT INTO produk_peternak (nama_produk, kategori_produk, jenis_variasi, gambar, 
                stok, deskripsi, harga, berat, pengiriman, pembayaran) 
                VALUES ('$nama_produk', '$kategori_produk', '$jenis_variasi', '$gambar_path', '$stok', '$deskripsi', '$harga', '$berat', '$pengiriman', '$pembayaran')";
        
        if ($conn->query($sql) === TRUE) {
            header("Location: dashboard-admin.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "<script>alert('Ekstensi gambar hanya bisa jpg dan png!');window.location='?page=tambah-produk';</script>";
    }

$conn->close();
?>