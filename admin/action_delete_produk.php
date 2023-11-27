<?php
include "connect.php";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mendapatkan nilai $id dari parameter URL
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Memastikan $id tidak kosong dan hanya berisi angka
if (!empty($id) && is_numeric($id)) {
    // Mengambil path gambar sebelum menghapus data dari database
    $sql = "SELECT gambar FROM produk_peternak WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        // Mengambil path gambar dari hasil query
        $row = mysqli_fetch_assoc($result);
        $gambarPath = $row['gambar'];

        // Menghapus data dari database
        $delete_sql = "DELETE FROM produk_peternak WHERE id=$id";
        if (mysqli_query($conn, $delete_sql)) {
            // Hapus file gambar dari sistem file
            unlink($gambarPath);
            echo "Data berhasil dihapus.";
            header("Location: dashboard-admin.php");
            exit();
        } else {
            echo "Error: " . $delete_sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID tidak valid.";
}

// Menutup koneksi
mysqli_close($conn);
?>
