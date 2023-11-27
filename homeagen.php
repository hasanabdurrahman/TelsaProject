<?php
session_start(); // Start the session
$firstName = isset($_SESSION['first_name']) ? $_SESSION['first_name'] : '';
file_put_contents('homeumum.txt', "Username: $firstName, FN: $_SESSION\n", FILE_APPEND);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link rel="stylesheet" href="_css/home.css" />
  <link rel="stylesheet" href="homebaru.css" />

  <title>Telsa | Home Agen</title>

  <!--== Fonts ==-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Pangolin&family=Poppins&family=Potta+One:wght@400;500&display=swap" rel="stylesheet" />

  <!--== Favicon ==-->
  <link rel="shortcut icon" href="image/telsa.png" type="image/x-icon" />
</head>

<body>

  <!-- Navbar Start -->

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="homeagen.php"><img src="image/telsa.png" alt="logo" class="img-fluid" width="140" height="30" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="homeagen.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="order.php">Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tracking.php">Tracking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="datadistributor.php">Distributor</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-button">
            <a class="nav-chart" href="chart.php"><img src="image/cart-menu.png" alt="chart" class="img-fluid1" width="30" height="30" /></a>
          </li>
          <li class="nav-button">
            <a class="nav-contact" href="help.php"><img src="image/help-menu.png" alt="contact" class="img-fluid2" width="30" height="30" /></a>
          </li>
          <li class="nav-profil">
          <li class="nav-profil1" id="profile-image">
            <img src="image/profile.png" alt="signin" width="30" height="30" />
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
          </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Navbar End -->

  <!-- Hero Section Start -->

  <section class="hero" id="home">
    <main class="content">
      <div class="container">
        <div class="home row">
          <div class="col-lg-6 col-12 teks">
            <h1 class="judul1">Telur Lokal</h1>
            <h1 class="judul2">Sehat</h1><br />
            <p class="judul3">Cari kualitas telur terbaik dari peternak hanya di Telsa</p><br />
            <p>
            <form class="d-flex" role="search">
              <input class="search form-control-sm col-6 me-3" type="search" placeholder="Search" aria-label="Search">
              <button class="btn" type="submit">Search</button>
            </form>
            </p>
          </div>
          <div class="img-home col-lg-6 col-12 text-end d-none d-sm-block">
            <img src="image/home.png" alt="homefoto1" width="600">
          </div>
        </div>
      </div>
    </main>
  </section>

  <!-- Hero Section End -->

  <!-- Menu2 Section Start -->

  <section class="menu2" id="home">
    <main class="content">
      <div class="container">
        <div class="home2 row">
          <div class="col-lg-6 col-12 teks">
            <div class="grid">
              <article>
                <h2 class="title">Apa itu telur? </h2>
                <div class="konten">
                  <p class="desc">Telur merupakan salah satu bahan pangan umum yang digunakan di seluruh dunia. Selain itu, telur juga sumber protein hewani selain dari daging, ikan dan susu. Terdapat 3 komponen utama yang banyak seklai manfaatnya.</p>
                </div>
              </article>
              <article>
                <h2 class="title">Manfaat Telur? </h2>
                <div class="konten">
                  <p class="desc">Manfaat dari telur yaitu dapat meningkatkan energi, memperkuat daya tahan tubuh, menjaga kekuatan otot, menjaga kesehatan otak, meningkatkan kesehatan mata, dan mampu setiap sel dan jaringan penyusun tubuh.</p>
                </div>
              </article>
            </div>
          </div>
          <div class="img-home2 col-lg-6 col-12 text-end d-none d-sm-block">
            <img src="image/telur1.png" alt="homefoto2" width="450">
            <div class="paragraf-container">
              <p>Mau beli telur?</p>
              <a class="order" href="order.php"><button class="btn2" type="button">Klik disini</button></a>
            </div>
          </div>
        </div>
      </div>
    </main>
  </section>

  <!-- Menu2 Section End -->

  <!-- Menu3 Section Start -->

  <section class="menu3" id="home">
    <main class="content">
      <h2 class="title2">Jenis - Jenis Telur</h2>
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-item active">
          <div class="home3 row">
            <div class="grid2 grid">
              <p class="subjudul">Telur Ayam Kampung</p>
              <div class="img-home3 col-lg-6 col-12 teks">
                <img src="image/telur2.png" alt="homefoto3" width="300">
              </div>
              <div class="konten-home3 col-lg-6 col-12 text-end d-none d-sm-block">
                <h2 class="subjudul2">Kandungan</h3>
                  <div class="grid3 grid">
                    <p class="desc2">Telur ayam mengandung nutrisi essensial yang relatif tinggi. Selain itu, ayam kampung mengandung vitamin A, vitamin E, lemak omega 3 (linolenat), protein, lemak, fosfor, zat besi dan zink.</p>
                  </div>
                  <h2 class="subjudul3">Manfaat</h3>
                    <div class="grid3 grid">
                      <p class="desc2">Mengonsumsi telur ayam kampung dapat meningkatkan energi karena terdapat kandungan protein dan lemak. Telur ayam kampung dapat menjaga kekuatan otot dan memperkuat daya tahan tubuh.</p>
                    </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="home3 row">
            <div class="grid2 grid">
              <p class="subjudul">Telur Ayam Omega-3</p>
              <div class="img2-home3 col-lg-6 col-12 teks">
                <img src="image/telur3.png" alt="homefoto3" width="300">
              </div>
              <div class="konten-home3 col-lg-6 col-12 text-end d-none d-sm-block">
                <h2 class="subjudul2">Kandungan</h3>
                  <div class="grid3 grid">
                    <p class="desc2">Telur ayam mengandung nutrisi essensial yang relatif tinggi. Selain itu, kuning telur omega 3 dapat mengandung hingga 6 persen asam lemak</p>
                  </div>
                  <h2 class="subjudul3">Manfaat</h3>
                    <div class="grid3 grid">
                      <p class="desc2">Mengonsumsi telur omega 3 dapat membantu meningkatkan kekuatan tulang di dalam tubuh. Kandungan omega 3 dalam telur jenis ini mampu mencegah terjadinya osteoporosis di kemudian hari.</p>
                    </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <img src="image/previous.png" alt="previous" class="previous" width="30" height="30" aria-hidden="true" />
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <img src="image/next.png" alt="contact" class="next" width="30" height="30" aria-hidden="true" />
          <span class="visually-hidden">Previous</span>
        </button>
      </div>
    </main>
  </section>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <center>
          <h2 class="title4">Galeri foto telur</h2>
          <a class="order" href="order.php"><button class="btn2" type="button">Kunjungi Toko</button></a>
        </center>
      </div>
    </div>
    <div class="row">
      <div class="col-3">
        <img src="image/galeri (1).jpg" alt="" width="90%">
      </div>
      <div class="col-3">
        <img src="image/galeri (2).jpg" alt="" width="90%">
      </div>
      <div class="col-3">
        <img src="image/galeri (3).jpg" alt="" width="90%">
      </div>
      <div class="col-3">
        <img src="image/galeri (4).jpg" alt="" width="90%">
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <h2 class="title2">Peta</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-6">
        <img src="image/toko 3.png" alt="" width="100%">
      </div>
      <div class="col-6">
        <div class="col-12">
          <p class="text-start t-orange">Lokasi</p>
        </div>
        <div class="col-12">
          <input type="search" class="cari">
        </div>
        <div class="col-12">
          <center>
            <a href="#"><button class="cari2">Cari</button></a>
          </center>
        </div>
        <div class="col-12">
          <p class="text-start t-orange">Data Lokasi</p>
        </div>
        <div class="col-12">
          <div class="row">
            <div class="col-6">
              <div class="card-lokasi-hijau">
                <div class="row">
                  <div class="col-3">
                    <img src="image/datalokasi.png" alt="">
                  </div>
                  <div class="col-9">
                    <p class="text-start">Jl. Raya Mayor Oking Jaya Atmaja No.58 B, Ciriung, Kec. Cibinong, Bogor District, West Java 16917</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card-lokasi-orange">
                <div class="row">
                  <div class="col-3">
                    <img src="image/datalokasi.png" alt="">
                  </div>
                  <div class="col-9">
                    <p class="text-start">Ruko Mutiara Depok, Jl. Tole Iskandar, Sukmajaya, Depok City, West Java 16412</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card-lokasi-orange">
                <div class="row">
                  <div class="col-3">
                    <img src="image/datalokasi.png" alt="">
                  </div>
                  <div class="col-9">
                    <p class="text-start">Jl. KSR Dadi Kusmayadi No.19, Sukahati, Kec. Cibinong, Bogor District, West Java 16913</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card-lokasi-hijau">
                <div class="row">
                  <div class="col-3">
                    <img src="image/datalokasi.png" alt="">
                  </div>
                  <div class="col-9">
                    <p class="text-start">Jl. Pandu Raya No.73, RT.02/RW.16, Tegal Gundil, Bogor City, West Java 16152</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Menu2 Section End -->

  <!-- Footer -->
  <footer class="sticky-footer">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; Telsa 2023 All Right</span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="main.js"></script>
</body>

</html>