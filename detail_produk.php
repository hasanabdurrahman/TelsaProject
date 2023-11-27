<?php
session_start();

// Check if the username is set in the session
if(isset($_SESSION['username'])) {
  $username = $_SESSION['username']; // Retrieve the username from the session
  // Now $username is accessible in this file
} 
  require_once 'connect.php';

  $produk = []; // Inisialisasi array kosong

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_produk_peternaks WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $produk = $result->fetch_assoc();
    } else {
      // Handle kasus ketika produk tidak ditemukan.
      echo "Produk tidak ditemukan";
      exit;
    }
  } else {
    // Handle kasus ketika tidak ada ID produk yang diberikan.
    echo "ID Produk tidak diberikan";
    exit;
  }

  $sqlSemuaProduk = "SELECT * FROM tb_produk_peternaks WHERE id <> $id";
  $resultSemuaProduk = $conn->query($sqlSemuaProduk);
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

    <title>Detail Produk - <?php echo $produk['kategori_produk']; ?></title>

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
  .kanan{
    list-style: decimal;
  }

  .custom-radio input:checked + span {
    background-color: #F5762F; /* Gantilah dengan warna yang diinginkan */
    color: #fff; /* Gantilah dengan warna teks yang kontras */
  }

  .gambar-produk-bawah{
    max-width: 100%;
    margin-top: 5px;
    min-width: 100%;
    max-height: 150px;
    min-height: 150px;
    object-fit: cover;
    border-radius: 5px;
  }

  .detail{
    max-height: 310px;
  }

  .jaminan{
    margin-top: -155px;
  }
</style>
<body>
    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="homeagen.php"
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
              <a class="nav-link" href="homeagen.php">Beranda</a>
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
                <p><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?></p>
              </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Navbar End -->
    
  <!-- Konten HTML untuk halaman detail produk berada di sini -->
  <div class="container konten">
      <div class="row">
          <div class="col-6">
              <img class="gambar-produk" src="<?php echo $produk['gambar'] ?>" alt="">
              <div class="row bawah">
                <div class="col-4"><img class="gambar-produk-bawah" src="<?php echo $produk['gambar'] ?>" alt=""></div>
                <div class="col-4"><img class="gambar-produk-bawah" src="<?php echo $produk['gambar'] ?>" alt=""></div>
                <div class="col-4"><img class="gambar-produk-bawah" src="<?php echo $produk['gambar'] ?>" alt=""></div>
              </div>
          </div>
          <div class="col-6 card-orange detail">
              <h2><?php echo $produk['kategori_produk']; ?></h2>
              <p class="hemat">hemat 10%</p>
              <p class="harga">Rp.<?php echo $produk['harga']; ?></p>
              <div class="row">
                  <div class="col-3">
                      <img class="rating" src="image/rating.png" alt="">
                  </div>

                  <div class="col-9">
                      <p class="terjual"><?php echo $produk['terjual'] ?> Terjual</p>
                  </div>

                  <div class="col-3">
                      <img class="rating" src="image/kiri.png" alt="">
                  </div>

                  <div class="col-9">
                      <img src="image/like.png" alt="" class="like">
                      <img src="image/forward.png" alt="" class="like">
                      <img src="image/wa.png" alt="" class="like">
                  </div>
              </div>
          </div>
      </div>

      <div class="row jaminan">
          <div class="col-6 card-orange ms-auto mt-3 d-flex">
              <div class="row">
                  <div class="col-1">
                      <img src="image/verif.png" alt="" width="30px">
                  </div>

                  <div class="col-11">
                      <span>Jaminan Belanja Aman</span><br>
                      <span>Barang tidak sesuai dan rusak, Uang kembali !</span>
                  </div>
              </div>
          </div>
      </div>

      <div class="row">
          <div class="col-6 card-orange ms-auto mt-3">
              <h2>Pilih Varian</h2>
              <div class="row">
  <div class="col-12">
    <label class="custom-radio">
      <input class="jenis" type="radio" name="varian" id="gr" value="500">
      <span class="var">500 g</span>
    </label>

    <label class="custom-radio">
      <input class="jenis" type="radio" name="varian" id="kg" value="1000">
      <span class="var">1 kg</span>
    </label>
  </div>
</div>

          </div>
      </div>

      <div class="row">
          <div class="col-6 card-orange ms-auto mt-3 d-flex">
              <div class="plus-minus-buttons">
                <button onclick="decrement()">-</button>
                <input type="number" class="number-input" id="quantity" value="1" min="1" max="<?php echo $produk['stok'] ?>" >
                <button onclick="increment()">+</button>
            </div>
            <a href="#" class="btn-orange" id="beliSekarang">Beli Sekarang</a>
            <a href="chart.php" class="btn-orange">Masukkan Keranjang</a>
          </div>
      </div>

      <div class="row">
          <div class="col-12">
              <h2>Penjelasan dan Petunjuk Penyimpanan</h2>
            </div>
        </div>
        
        <div class="row">
            <div class="col-6 card-orange mt-3 d-flex">
                <div class="row">
                    <div class="col-12">
                        <h2>Deskripsi</h2>
                    </div>

                    <div class="col-12">
                        Pada dasarnya, telur ayam negeri dihasilkan dari jenis ayam leghorn atau ayam ras yang dikembangbiakkan di peternakan. Ayam leghorn mendapatkan pakan yang sudah diberi vitamin dan nutrisi tambahan. Telur ayam ini memiliki ukuran yang lebih besar, yakni sekitar 40-50 gram.
                    </div>
                    
                    <div class="col-12 mt-4">
                        Untuk satu butir telur mengandung 12,5 gram protein, 10 gram lemak, 1 gram karbohidrat, 150 kalori. Telur ayam negeri memiliki kandungan protein tinggi dan kalori rendah sehingga sangat baik bagi anda yang sedang berusaha menurunkan berat badan. telur ayam negeri cukup direbus saja dan makan bersama sayuran hijau akan membuat perut anda kenyang lebih lama dan tidak mudah lapar.
                    </div>
                </div>    
          </div>

          <div class="col-6 card-orange mt-3 d-flex">
              <div class="row">
                    <div class="col-12">
                        <h2>Petunjuk Penyimpanan</h2>
                    </div>

                    <div class="col-12">
                        <ul class="kanan">
                          <li>Simpan Telur di dalam Kulkas</li>
                          <li>Simpan Telur di dalam Wadah yang Tepat</li>
                          <li>Simpan Telur dengan Sisi yang Benar</li>
                          <li>Hindari menggosok Telur</li>
                          <li>Jangan Cuci Telur Sebelum Disimpan</li>
                          <li>Konsumsi Telur dalam Waktu yang Tepat</li>
                        </ul>
                    </div>
                </div>    
          </div>
      </div>

      <div class="row">
          <div class="col-12 mt-3 d-flex">
              <h2>Barang Serupa Lainnya</h2>
          </div>
          <div class="col-2">
            <div class="grid">
      <?php
        // Tampilkan semua produk kecuali yang sedang ditampilkan berdasarkan ID
        while ($similarProduct = mysqli_fetch_assoc($resultSemuaProduk)) { ?>
          <article>
            <a href="detail_produk.php?id=<?php echo $similarProduct['id'] ?>">
              <div class="image">
                <img src="<?php echo $similarProduct["gambar"] ?>" name="gambar" id="gambar" alt="" width="300px" height="300px">
              </div>
              <div class="caption">
                <p class="rate">
                  <i class="fas fa-fw fa-regular fa-star"></i>
                  <i class="fas fa-fw fa-regular fa-star"></i>
                  <i class="fas fa-fw fa-regular fa-star"></i>
                  <i class="fas fa-fw fa-regular fa-star"></i>
                  <i class="fas fa-fw fa-regular fa-star"></i>
                </p>
                <p class="product_name" name="kategori_produk" id="kategori_produk"><b><?php echo $similarProduct["kategori_produk"];?></b></p>
                <p class="price" name="harga" id="harga">Rp <?php echo $similarProduct["harga"];?> /kg</p>
                <p class="description" name="deskripsi" id="deskripsi"><?php echo $similarProduct["deskripsi"];?></p>
                <p class="stok" name="stok" name="stok">stok: <?php echo $similarProduct["stok"];?></p>
              </div>
            </a>
          </article>
      <?php } ?>
    </div>
      </div>
  </div>

  <!-- Tambahkan footer dan script sesuai kebutuhan -->
  <script>
      function increment() {
      // Dapatkan elemen input
      var inputElement = document.getElementById('quantity');
      // Dapatkan nilai saat ini dan tambahkan 1
      var currentValue = parseInt(inputElement.value, 10);
      var maxValue = parseInt(inputElement.getAttribute('max'), 10);
      if (currentValue < maxValue) {
        inputElement.value = currentValue + 1;
      }
    }

    function decrement() {
      // Dapatkan elemen input
      var inputElement = document.getElementById('quantity');
      // Dapatkan nilai saat ini dan kurangkan 1, tetapi minimum 0
      var currentValue = parseInt(inputElement.value, 10);
      var minValue = parseInt(inputElement.getAttribute('min'), 10);
      if (currentValue > minValue) {
        inputElement.value = currentValue - 1;
    }
    }
  </script>

<script>
  // Mendapatkan elemen-elemen yang diperlukan
  var varianRadio = document.querySelectorAll('input[name="varian"]');
  var hargaElement = document.querySelector('.harga');

  // Variabel untuk menyimpan harga yang dihitung
  var calculatedPrice;

  // Mendengarkan perubahan pada radio button varian
  varianRadio.forEach(function (radio) {
    radio.addEventListener('change', function () {
      // Memperbarui harga sesuai dengan varian yang dipilih
      if (radio.value === '1000') {
        // Jika varian 1000g dipilih
        calculatedPrice = <?php echo $produk['harga']; ?>;
        hargaElement.textContent = 'Rp.' + calculatedPrice;
      } else if (radio.value === '500') {
        // Jika varian 500g dipilih
        calculatedPrice = <?php echo $produk['harga'] / 2; ?>;
        hargaElement.textContent = 'Rp.' + calculatedPrice;
      }
    });
  });

  // Fungsi untuk mengubah harga berdasarkan varian yang terpilih saat halaman dimuat
  function updateHarga() {
    var varianTerpilih = document.querySelector('input[name="varian"]:checked');
    if (varianTerpilih && varianTerpilih.value === '500') {
      calculatedPrice = <?php echo $produk['harga'] / 2; ?>;
      hargaElement.textContent = 'Rp.' + calculatedPrice;
    }
  }

  // Panggil fungsi updateHarga saat halaman dimuat
  document.addEventListener('DOMContentLoaded', updateHarga);

  // Fungsi untuk mengubah harga di tampilan selanjutnya
  function updateHargaSelanjutnya() {
    // Mendapatkan nilai varian yang dipilih
    var selectedVarian = document.querySelector('input[name="varian"]:checked');

    // Mendapatkan nilai kuantitas
    var quantity = document.getElementById('quantity').value;

    // Jika tidak ada varian yang dipilih
    if (!selectedVarian) {
      alert('Pilih varian terlebih dahulu.');
      return;
    }

    var calculatedPrice;
    if (selectedVarian.value === '1000') {
      calculatedPrice = <?php echo $produk['harga']; ?>;
    } else if (selectedVarian.value === '500') {
      calculatedPrice = <?php echo $produk['harga'] / 2; ?>;
    }

    // Menampilkan harga baru di tampilan selanjutnya
    // Mengonkatenasi parameter URL dengan menggunakan encodeURIComponent
var urlParams = 'gambar=' + encodeURIComponent('<?php echo $produk['gambar']; ?>') +
    '&varian=' + selectedVarian.value +
    '&quantity=' + quantity +
    '&harga=' + encodeURIComponent(calculatedPrice) +
    '&nama_produk=' + encodeURIComponent('<?php echo $produk['kategori_produk']; ?>');

// Membuat URL lengkap
var fullURL = 'pembayaran.php?' + urlParams;

// Mengarahkan pengguna ke URL yang dihasilkan
window.location.href = fullURL;

// Menampilkan alert
alert('Harga yang harus dibayar: Rp.' + calculatedPrice * quantity);

  }

  // Memanggil fungsi updateHargaSelanjutnya saat tombol "Beli Sekarang" diklik
  document.getElementById('beliSekarang').addEventListener('click', updateHargaSelanjutnya);
</script>



</body>
</html>
