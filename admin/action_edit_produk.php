<?php
include "connect.php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
/*
echo $sql = "UPDATE produk_peternak
        SET nama_produk='".$_POST["nama_produk"]."', gambar='".$_FILE["gambar"]."', kategori_produk='".$_POST["kategori_produk"]."',
            stok='".$_POST["stok"]."', deskripsi='".$_POST["deskripsi"]."', jenis_variasi='".$_POST["jenis_variasi"]."', 
            harga='".$_POST["harga"]."', berat='".$_POST["berat"]."', pengiriman='".$_POST["pengiriman"]."', pembayaran='".$_POST["pembayaran"]."'
        WHERE id=".$_POST["id"];

if (mysqli_query($conn, $sql)) {
    header("Location: ?=produk-saya");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);*/

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['id'];
  $nama_produk = $_POST['nama_produk'];
  $gambar = $_FILE['gambar'];
  $kategori_produk = $_POST['kategori_produk'];
  $stok = $_POST['stok'];
  $deskripsi = $_POST['deskripsi'];
  $jenis_variasi = $_POST['jenis_variasi'];
  $harga = $_POST['harga'];
  $berat = $_POST['berat'];
  $pengiriman = $_POST['pengiriman'];
  $pembayaran = $_POST['pembayaran'];

  $sql = "UPDATE produk_peternak SET nama_produk = '$nama_produk', gambar = '$gambar', kategori_produk = '$kategori_produk', 
  stok = '$stok', deskripsi = '$deskripsi', jenis_variasi = '$jenis_variasi', harga = '$harga', berat = '$berat', pengiriman = '$pengiriman',
  pembayaran = '$pembayaran' WHERE id = $id";
  if (mysqli_query($conn, $sql)) {
    header("Location: dashboard-admin.php");
  } else {
      echo "Error updating record: " . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>