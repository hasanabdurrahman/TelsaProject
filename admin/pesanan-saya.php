<!DOCTYPE html>
<html lang="en">
<head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
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
    <title>Admin | Pesanan Saya</title>
</head>
<body>
    <div class="card-base">
      <div class="nav">
        <ul class="d-flex navigasi">
          <li><a href="#" class="nav1">Semua</a></li>
          <li><a href="#" class="nav1">Belum Bayar</a></li>
          <li><a href="#" class="nav1">Perlu Dikirim</a></li>
          <li><a href="#" class="nav1">Dikirim</a></li>
          <li><a href="#" class="nav1">Selesai</a></li>
          <li><a href="#" class="nav1">Pembatalan</a></li>
          <li><a href="#" class="nav1">Pengembalian</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-8 d-flex">
            <div class="nama-produk1">
                No Pesanan <span class="panah-drop"><img src="../image/panah-drop.png" alt=""></span>
                <div class="pilih">
                  
                </div>
            </div>
            <input type="texrt" name="" id="search-produk" placeholder="Masukkan No Pesanan">
            <a href="#" class="btn-orange-cari">Cari</a>
        </div>

        <div class="col-3">
          Waktu Pesanan Dibuat
          <input type="date" name="" id="">
        </div>
      </div>

      <div class="row mt-20">
        50 Produk
        <div class="col-12">
          <table class="table">
            <thead>
                <tr>
                <th scope="col">Pelanggan</th>
                <th scope="col">Produk</th>
                <th scope="col">Jumlah Yang Dibayar </th>
                <th scope="col">Status</th>
                <th scope="col">Jasa Kirim</th>
                <th scope="col">Aksi Pengiriman</th>
                </tr>
            </thead>
            <tbody>
              <tr>
                <td><img src="../image/profile.png" alt="" width="30">Kheizy <a href="#">Chat</a></td>
                <td class="d-flex">
                    <div class="row">
                        <div class="col-4">
                            <img src="../image/produk1.png" alt="">
                        </div>
                        <div class="col-7">
                            <div class="row">
                                <div class="col-12">
                                    <h6>Stok Tersedia</h6>
                                </div>
                                <div class="col-12">
                                    <h6>Telur Omega-3</h6>
                                </div>
                                <div class="col-12">
                                    <h6>Variasi : 1 Kg</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>Rp31.500</td>
                <td>Belum Dikirim</td>
                <td>Kurir Toko</td>
                <td>Atur Pengiriman</td>
              </tr>

              <tr>
                <td><img src="../image/profile.png" alt="" width="30">Kheizy <a href="#">Chat</a></td>
                <td class="d-flex">
                    <div class="row">
                        <div class="col-4">
                            <img src="../image/produk1.png" alt="">
                        </div>
                        <div class="col-7">
                            <div class="row">
                                <div class="col-12">
                                    <h6>Stok Tersedia</h6>
                                </div>
                                <div class="col-12">
                                    <h6>Telur Omega-3</h6>
                                </div>
                                <div class="col-12">
                                    <h6>Variasi : 1 Kg</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>Rp31.500</td>
                <td>Belum Dikirim</td>
                <td>Kurir Toko</td>
                <td>Atur Pengiriman</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <script>
        $(document).ready(function () {
            $('.nav1').on('click', function () {
                // Remove the class from all labels
                $('.nav1').removeClass('active');
                
                // Add the class to the clicked label
                $(this).addClass('active');
            });
        });
    </script>
</html>