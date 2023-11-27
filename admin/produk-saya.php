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
    <script>
        function dialogHapus(urlHapus){
        if(confirm("Apakah anda yakin ingin menghapus data ini?")){
            alert("Oke konfirmasi penghapusan sudah diberikan");
            document.location=urlHapus;
        }
        else{
            alert("Transaksi hapus dibatalkan");
        }
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="tablesorter-master\dist\js\jquery.tablesorter.js"></script>
    <script>
        $(document).ready(function(){
        $("#search-produk").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        });
        $(function() 
        { 
            $("#myTableUtama").tablesorter( {sortList: [[0,0], [1,0]]} ); 
        } 
        ); 
    </script>

    
    <!--== Favicon ==-->
    <link rel="shortcut icon" href="image/telsa.png" type="image/x-icon" />
    <title>Admin | Produk Saya</title>
    
</head>
<body>
    <div class="row card-base">
        <div class="col-8 d-flex">
            <div class="nama-produk">
                Nama Produk
            </div>
            <input type="search" name="" id="search-produk" placeholder="Search">
        </div>
    </div>

    <div class="row card-base">
        <div class="col-12">
            Semua Produk
            <hr>
        </div>
        <div class="row">
            <div class="col-4">
                <a href="?page=tambah-produk"><button>Tambah Produk Baru</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <table class="table table-hover" class="tablesorter" id="myTableUtama">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Gambar</th>
                <th scope="col">Deskripsi Produk</th>
                <th scope="col">Kategori Produk</th>
                <th scope="col">Jenis Variasi</th>
                <th scope="col">Stok</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody id="myTable">
                <?php
                    include_once "../connect.php";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    //Check connection
                    if ($conn->connect_error){
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    $sql = "SELECT * FROM tb_produk_peternaks";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0){
                        $no = 1;
                        while($row = $result->fetch_assoc()){
                            $prodi = $conn->query($sql)->fetch_assoc()["nama_produk"];
                        echo "<tr>
                                <td>". $no++." </td>
                                <td>". $row["nama_produk"]."</td>
                                <td> <img src='".$row["gambar"]. "' width='100' height='100'></td>
                                <td>".$row["deskripsi"]."</td>
                                <td>". $row["kategori_produk"]."</td>
                                <td>". $row["jenis"]."</td>
                                <td>". $row["stok"]."</td>
                                <td> Rp". $row["harga"]."</td>
                                <td>
                                <a class=\"btn btn-success\" href='dashboard-admin.php?page=edit-produk&id=" . $row['id'] . "'>Edit</a>
                                <a href=\"javascript:dialogHapus('action_delete_produk.php?id=".$row["id"]."')\" class=\"btn btn-danger\">Hapus</a></td>

                            </tr>";
                        }
                    }else{
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
            </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>