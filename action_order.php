<?php

    include "connect.php"; 
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $jenis = $_POST["jenis"];
    $stok = $_POST["stok"];
    $deskripsi = $_POST["deskripsi"];
    $harga = $_POST["harga"];

    $gambar = $_FILES['gambar']['name'];
    
        $ekstensi_diperbolehkan = array('png', 'jpg');
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $angka_acak = rand(1, 999);
        $nama_gambar_baru = $angka_acak.'-'.$gambar;
        $gambar_path = 'gambar/'.$nama_gambar_baru;
        var_dump($ekstensi);
        
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, $gambar_path);

            $sql = "INSERT INTO produk_peternak (jenis, gambar, stok, deskripsi, harga) VALUES ('$jenis', '$gambar_path', '$stok', '$deskripsi', '$harga')";
            //$result = mysqli_query($conn, $query);
            if ($conn->query($sql) === TRUE) {
            header("Location: order.php");
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }

        } else{
            echo "<script>alert('Ekstensi gambar hanya bisa jpg dan png!');window.location='insert_produk_peternak.php';</script>";
        }

        $conn->close();
    

?>