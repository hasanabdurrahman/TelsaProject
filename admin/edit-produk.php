<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css" />

    <!--== Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pangolin&family=Poppins&family=Potta+One:wght@400;500&display=swap"
      rel="stylesheet"
    />

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="image/telsa.png" type="image/x-icon" />
    <title>Admin | Edit Produk</title>
</head>
<body>
<div class="container-fluid">

<!-- Page Heading -->
<?php
    include "connect.php";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $id = $_GET['id'];

    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM produk_peternak WHERE id = $id";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    $conn->close();

    /*if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if ($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
        }
        $sql = "SELECT
        * FROM produk_peternak WHERE id = $id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }*/
?>
   
    

<form action="action_edit_produk.php" method="POST" enctype="multipart/form-data">

    <div class="row card-base">
        <div class="col-12">
            <label for="gambar" class="form-label">Gambar Produk</label>
            <input type="file" class="form-control" id="gambar"  name="gambar" required>
        </div>
    </div>

    <div class="row">
        <div class="col-8 card-base">
            <div class="row">
                <div class="col-12">
                    <label for="nama_produk" class="form-label">Nama Produk</label>
                    <input type="text" name="nama_produk" id="nama_produk" placeholder="Contoh : Ayam Telur Omega-3" required>
                </div>

                <div class="col-12 mt-10">
                    <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                    <input type="text" name="deskripsi" id="deskripsi" placeholder="Masukkan Deskripsi Produk" required>
                </div>

                <div class="col-12 mt-10">
                    <label for="kategori_produk" class="form-label">Kategori Produk</label>
                    <input type="text" name="kategori_produk" id="kategori_produk" placeholder="Masukkan Kategori Produk" required>
                </div>
            </div>
        </div>
        <div class="col-4 card-base">
            <label for="pengiriman" class="form-label">Pengiriman</label>
            <input type="text" name="pengiriman" id="pengiriman" required>
        </div>
    </div>

    <div class="row">
        <div class="col-8 card-base">
            <div class="row">
                <div class="col-12">
                    Jenis Variasi
                    <div class="row">
                        <form action="" class="d-flex">
                        <div class="col-4">
                            <input type="radio" name="jenis_variasi" id="satu" value="satu" class="jenis">
                            <label for="satu" class="pilihan selectable">Satu Variasi</label>
                        </div>
                        <div class="col-5">
                            <input type="radio" name="jenis_variasi" id="beberapa" value="beberapa" class="jenis">
                            <label for="beberapa" class="pilihan selectable">Beberapa Variasi</label><br>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-10">
                    <label for="harga" class="form-label">Harga Satuan (Rp)</label>
                    <input type="text" name="harga" id="harga" placeholder="Masukkan Harga Satuan" required>
                </div>

                <div class="col-12 mt-10">
                    <label for="berat" class="form-label">Stok Produk</label>
                    <input type="text" name="stok" id="stok" placeholder="Masukkan Stok Produk" required>
                </div>

                <div class="col-12 mt-10">
                    <label for="berat" class="form-label">Berat Produk (g)</label>
                    <input type="number" name="berat" id="berat" placeholder="Masukkan Berat Produk" required>
                </div>
            </div>
        </div>
        <div class="col-4 card-base">
            <label for="pembayaran" class="form-label">Pembayaran</label>
            <input type="text" name="pembayaran" id="pembayaran" required>
        </div>
    </div>

    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
    <div class="row">
        <div class="col-3 ms-auto">
            <button class="btn-orange" href="?page=edit-produk" style="margin-right: 10px;">Batal</a>
            <button type="submit" class="btn-orange" href="dashboard-admin.php">Unggah</button>
        </div>
    </div>

</form>
<!-- /.container-fluid -->
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <script>
        $(document).ready(function () {
            $('.selectable').on('click', function () {
                // Remove the class from all labels
                $('.selectable').removeClass('selected');
                
                // Add the class to the clicked label
                $(this).addClass('selected');
            });
        });
    </script>
</body>
</html>