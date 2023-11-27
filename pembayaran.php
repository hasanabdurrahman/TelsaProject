<?php
  // pembayaran.php

  // Mendapatkan data varian dan kuantitas dari URL
  $gambar = isset($_GET['gambar']) ? $_GET['gambar'] : '';
  $varian = isset($_GET['varian']) ? $_GET['varian'] : '';
  $quantity = isset($_GET['quantity']) ? $_GET['quantity'] : '';
  $harga = isset($_GET['harga']) ? $_GET['harga'] : '';
  $nama = isset($_GET['nama_produk']) ? $_GET['nama_produk'] : '';
  $total = $harga * $quantity;
  $ongkir = 34000;
  $disc = 10000;
  $grand_total = $total + $ongkir - $disc;

  // Lakukan validasi atau pemrosesan lebih lanjut sesuai kebutuhan Anda

  // Contoh menampilkan informasi pembayaran
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="_css/order.css" />
    <link rel="stylesheet" href="detail_produk.css" />

    <title>Pembayaran</title>

    <!--== Fonts ==-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pangolin&family=Poppins&family=Potta+One:wght@400;500&display=swap"
      rel="stylesheet"
    />
</head>
<style>   
.img-produk {
  width: 100%;
}

.waktu{
    display: none;
}

.card-waktu{
    background-color: white;
    border: 1px solid black;
    width: 100%;
    padding: 5px;
    text-align: center;
    margin-top: 10px;
    border-radius: 5px;
}

.card-waktu img{
    max-width: 30%;
    min-width: 30%;
    max-height: 40px;
    min-height: 40px;
    object-fit: contain;
}

.pilih{
    width: 100%;
    padding: 5px;
    margin-top: 10px;
    border-radius: 5px;
}

.card-waktu.active {
    background-color: #F5762F;
    color: #ffffff;
    font-weight: bold;
}

#proteksi{
    width: 150px;
    margin-left: 10px;
    margin-top: 5px;
    height: 20px;
}

.voucher{
    margin-left: -30px;
    margin-top: 6px;
}

.voucher-kiri{
    margin-left: 72px;
}

.pesan{
    margin-left: 20px;
    width: 100%;
    padding: 5px 20px;
}

.t-orange{
    color: #FF0000;
}

.btn-full{
    width: 100%;
    padding: 20px 50px;
}

.konten{
    margin-top: 150px;
}
</style>
<body>
<!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="home.php"
          ><img
            src="image/telsa.png"
            alt="logo"
            class="img-fluid"
            width="140"
            height="30"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul
            class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
            style="--bs-scroll-height: 100px"
          >
            <li class="nav-item">
              <a class="nav-link" href="homedistributor.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="produk.php"
                >Produk</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tracking.php">Tracking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="datapeternak.php">Peternak</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-button">
              <a class="nav-chart" href="chart.php"
                ><img
                  src="image/cart-menu.png"
                  alt="chart"
                  class="img-fluid1"
                  width="30"
                  height="30"
              /></a>
            </li>
            <li class="nav-button">
              <a class="nav-contact" href="help.php"
                ><img
                  src="image/help-menu.png"
                  alt="contact"
                  class="img-fluid2"
                  width="30"
                  height="30"
              /></a>
            </li>
            <li class="nav-profil">
              <li class="nav-profil1" id="profile-image">
                <img
                  src="image/profile.png"
                  alt="signin"
                  width="30"
                  height="30"
                />
                <!-- Pop-up Menu Logout -->
                <div id="logout-popup" class="popup">
                  <ul>
                    <li class="logout">
                      <p><a href="index.php">Logout</a></p>
                    </li>
                    <li class="logout">
                      <p id="cancel-logout">Batal</p>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-profil2">
                <p></p>
              </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Navbar End -->

  <div class="container">
      <form action="POST">
      <div class="row konten">
          <div class="col-9">
              <h4>Alamat Pengiriman</h4>
          </div>
          <div class="col-3 text-end">
            <a href="#" class="">Ubah Alamat</a>
          </div>

          <div class="row card-orange">
              <div class="col-2">
                  <img src="image/map.png" alt="">
              </div>
              <div class="col-10 d-flex">
                  <div class="row"> 
                      <div class="col-3">
                          <h4></h4>
                      </div>
                      <div class="col-2">
                          <h4>0812123241</h4>
                      </div>
                      <div class="col-12">
                          <p>Jl. Citanduy No.26, Tegal Gundil, Kec. Bogor Utara, Kota Bogor, Jawa Barat, 16152, Indonesia</p>
                        </div>
                    </div>
              </div>
          </div>

          <h4 class="mt-4">Pilih waktu pengiriman</h4>
          <div class="row card-orange">
              <div class="col-3">
                <label class="card-waktu" for="time08">08.00 - 10.00 WIB</label>
                <input type="radio" name="time" id="time08" value="08:00 - 10.00" class="waktu">
              </div>
              <div class="col-3">
                <label class="card-waktu" for="time12">12.00 - 14.00 WIB</label>
                <input type="radio" name="time" id="time12" value="12:00 - 14.00" class="waktu">
              </div>
              <div class="col-3">
                <label class="card-waktu" for="time16">16.00 - 18.00 WIB</label>
                <input type="radio" name="time" id="time16" value="16:00 - 18.00" class="waktu">
              </div>
              <div class="col-3">
                <label class="card-waktu" for="time20">20.00 - 22.00 WIB</label>
                <input type="radio" name="time" id="time20" value="20:00 - 22.00" class="waktu">
              </div>
              <div class="col-3">
                <label class="card-waktu" for="time10">10.00 - 12.00 WIB</label>
                <input type="radio" name="time" id="time10" value="10:00 - 12.00" class="waktu">
              </div>
              <div class="col-3">
                <label class="card-waktu" for="time14">14.00 - 16.00 WIB</label>
                <input type="radio" name="time" id="time14" value="14:00 - 16.00" class="waktu">
              </div>
              <div class="col-3">
                <label class="card-waktu" for="time18">18.00 - 20.00 WIB</label>
                <input type="radio" name="time" id="time18" value="18:00 - 20.00" class="waktu">
              </div>
              <div class="col-3"><input type="time" name="time" id="waktu" class="pilih"></div>
          </div>

          <div class="row card-orange mt-4">
              <div class="col-2">
                  <img class="img-produk" src="<?php echo $gambar; ?>" alt="">
              </div>

              <div class="col-10">
                  <div class="row">
                      <div class="col-12">
                          <h5><?php echo $nama; ?></h6>
                      </div>
                      <div class="col-12">
                          <h5>Variasi: <?php echo $varian; ?> gr </h5>
                      </div>
                      <div class="col-12">
                          <h5>Banyaknya: <?php echo $quantity; ?></h5>
                      </div>
                      <div class="col-12">
                          <h5 class="t-orange">Rp<?php echo $total; ?></h5>
                      </div>
                  </div>
              </div>
          </div>
          
          <div class="row card-orange">
              <div class="col-1">
                  <input type="checkbox" name="proteksi" id="proteksi">
                </div>
                
                <div class="col-11">
                    <div class="row">
                        <div class="col-12">
                            <label for="proteksi">Proteksi Keamanan <br> Melindungi kerusakan yang tidak disengaja, kerusakan akibat pelayanan, dan perampokan </label>
                      </div>
                  </div>
              </div>

              <div class="col-1 mt-4 voucher-kiri">
                  <img src="image/voucher.png" alt="">
              </div>
              <div class="col-10 mt-4">
                  <h3 class="voucher">Voucher Toko</h3>
              </div>
          </div>

          <div class="row card-orange">
              <div class="col-12">
                  <h4>Opsi Pengiriman</h4>
                </div>

                <div class="col-10">
                    <h5>Kurir Pribadi</h5>
                </div>

                <div class="col-2 text-end">
                    <h5 class="t-orange">Rp<?php echo $ongkir ?></h5>
                </div>

                <div class="col-12">
                    <p>Akan diterima pada tanggal 30 Sep - 5 Okt 2023</p>
                </div>
          </div>

          <div class="row card-orange">
              <div class="col-12 d-flex">
                  <h4><label for="pesan">Pesan :</label></h4>
                  <h4><input type="text" class="pesan" name="pesan" id="pesan" placeholder="Masukkan Pesan (opsional)"></h4>
                </div>
          </div>

          <div class="row card-orange">
                <div class="col-10">
                    <h5>Total Pesanan (<?php echo $quantity ?> Produk)</h5>
                </div>

                <div class="col-2 text-end">
                    <h5 class="t-orange">Rp<?php echo $total ?></h5>
                </div>

                <div class="col-12">
                    <p>Akan diterima pada tanggal 30 Sep - 5 Okt 2023</p>
                </div>
          </div>

          <h4 class="mt-4">Metode Pembayaran</h4>

          <div class="row card-orange">
              <div class="col-3">
                <label class="card-waktu" for="cod"><img src="image/cod.png" alt=""></label>
                <input type="radio" name="pengiriman" id="cod" value="cod" class="waktu">
              </div>
              <div class="col-3">
                <label class="card-waktu" for="bca"><img src="image/bca.png" alt=""></label>
                <input type="radio" name="pengiriman" id="bca" value="bca" class="waktu">
              </div>
              <div class="col-3">
                <label class="card-waktu" for="mandiri"><img src="image/mandiri.png" alt=""></label>
                <input type="radio" name="pengiriman" id="mandiri" value="mandiri" class="waktu">
              </div>
              <div class="col-3">
                <label class="card-waktu" for="bri"><img src="image/bri.png" alt=""></label>
                <input type="radio" name="pengiriman" id="bri" value="bri" class="waktu">
              </div>
          </div>

          <h4 class="mt-4">Rincian Pembayaran</h4>

          <div class="row card-orange">
              <div class="col-10">
                  <h5>Subtotal untuk produk</h5>
              </div>

              <div class="col-2 text-end"><h5 class="t-orange">Rp<?php echo $total ?></h5></div>

              <div class="col-10">
                  <h5>Subtotal pengiriman</h5>
              </div>

              <div class="col-2 text-end"><h5 class="t-orange">Rp<?php echo $ongkir ?></h5></div>

              <div class="col-10">
                  <h5>Total diskon pengiriman</h5>
              </div>

              <div class="col-2 text-end"><h5 class="t-orange">Rp<?php echo $disc ?></h5></div>

              <div class="col-10">
                  <h5>Total pembayaran</h5>
              </div>

              <div class="col-2 text-end"><h5 class="t-orange">Rp<?php echo $grand_total ?></h5></div>
          </div>

          <div class="row card-orange mt-4 mb-5">
              <div class="col-2 ms-auto">
                  <div class="col-12"><h4>Total Pesanan</h4></div>
                  <div class="col-12 t-orange"><h5>Rp<?php echo $grand_total ?></h5></div>
              </div>
              <div class="col-2"><a href="#"><button class="btn-orange btn-full">Bayar</button></a></div>
          </div>
      </div>
      </form>
  </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get all elements with class 'card-waktu'
        var cardWaktuElements = document.querySelectorAll('.card-waktu');

        // Add click event listener to each 'card-waktu' element
        cardWaktuElements.forEach(function (cardWaktuElement) {
            cardWaktuElement.addEventListener('click', function () {
                // Remove 'active' class from all 'card-waktu' elements
                cardWaktuElements.forEach(function (element) {
                    element.classList.remove('active');
                });

                // Add 'active' class to the clicked 'card-waktu' element
                cardWaktuElement.classList.add('active');
            });
        });
    });
</script>


</html>
