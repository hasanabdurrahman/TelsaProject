<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link rel="stylesheet" href="help.css" />

  <title>Telsa | Help</title>

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
      <a class="navbar-brand" href="home.php"><img src="image/telsa.png" alt="logo" class="img-fluid" width="140" height="30" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px">
          <li class="nav-item">
            <a class="nav-link" href="homedistributor.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="order.php">Produk</a>
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
            <a class="nav-chart" href="chart.php"><img src="image/cart-menu.png" alt="chart" class="img-fluid1" width="30" height="30" /></a>
          </li>
          <li class="nav-button">
            <a class="nav-link2 nav-contact active" aria-current="page" href="help.php"><img src="image/help-menu.png" alt="contact" class="img-fluid2" width="30" height="30" /></a>
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
            <p></p>
          </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Navbar End -->

  <!-- Bantuan Start -->
  <div class="container-landing">
    <div class="container">
      <div class="container text-center">
        <h3>Hai, Apa yang bisa kami bantu?</h3>
      </div>
    </div>
  </div>

  <section class="section">
    <div class="Kategori">
      <h5>Kategori</h5>
    </div>
  </section>
  <div class="container">
    <div class="row row-cols-4">
      <!--Card 1-->
      <div class="card">
        <img src="image/akunsaya.png" class="card-img-top" alt="..." />
        <a href="akunsaya.php" style="text-decoration: none">Akun Saya</a>
      </div>
      <!--Card 1-->
      <!--Card 2-->
      <div class="card">
        <img src="image/pemesanan.png" class="card-img-top" alt="..." />
        <a href="pemesanan.php" style="text-decoration: none">Pemesanan</a>
      </div>
      <!--Card 2-->
      <!--Card 3-->
      <div class="card">
        <img src="image/pengiriman.png" class="card-img-top" alt="..." />
        <a href="pengiriman.php" style="text-decoration: none">Pengiriman</a>
      </div>
      <!--Card 3-->
      <!--Card 4-->
      <div class="card">
        <img src="image/pembayaran.png" class="card-img-top" alt="..." />
        <a href="pembayaran.php" style="text-decoration: none">Pembayaran</a>
      </div>
      
      
    </div>
  </div>
  <section class="section">
    <div class="question">
      <h5>Hal-hal yang sering ditanyakan</h5>
    </div>
    <div class="list-question">
      <span class="question-link"><a href="pembayaran.php" style="text-decoration: none">Apa saja metode pembayaran yang tersedia di Telsa?</a></span>
      <hr />
      <span class="question-link"><a href="pemesanan.php" style="text-decoration: none">Bagaimana cara melihat tracking pemesanan Saya?</a></span>
      <hr />
      <span class="question-link"><a href="akunsaya.php" style="text-decoration: none">Bagaimana cara mengubah informasi pada akun saya?</a></span>
      <hr />
      <!--Card 5-->
      <div class="card">
        <img src="image/kotakpesan.png" class="card-img-top" alt="..." />
        <a href="chat_bot.php" style="text-decoration: none">Chat Bot</a>
      </div>
    </div>
    <style>
      a {
        color: black;
      }
    </style>
  </section>

  <!-- Bantuan End -->

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