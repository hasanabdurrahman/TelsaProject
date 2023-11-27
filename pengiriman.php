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
    <link rel="stylesheet" href="kategori.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <title>Telsa | Pengiriman</title>

    <!--== Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pangolin&family=Poppins&family=Potta+One:wght@400;500&display=swap"
      rel="stylesheet"
    />

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="image/telsa.png" type="image/x-icon" />
  </head>
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
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="order.php">Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tracking.php">Tracking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data.php">Data</a>
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
              <a
                class="nav-link2 nav-contact active"
                aria-current="page"
                href="help.php"
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

    <!-- Bantuan Start -->
    <div class="container-landing">
      <div class="container">
        <div class="container text-center">
          <h3>Hai, Apa yang bisa kami bantu?</h3>
        </div>
      </div>
    </div>
    
    <a href="help.php">
        <h5>Kembali ke Pusat Bantuan</h5>
    </a>
    <style>
         a {
          color: transparent;
        }
    </style>
    <h1>Pengiriman</h1>

    <div class="main">
        <div class="faq-container">
            <div class="faq">
                <h3 class="faq-title">Bagaimana cara melacak status pengiriman pesanan saya?</h3>
                <p class="faq-text">
                    Anda dapat melacak status pengiriman pesanan pada fitur Tracking
                    pada menu navigasi website ini. 
                </p>

            <button class="faq-toggle">
                <i class="fas fa-chevron-up"></i>
                <i class="fas fa-chevron-down"></i>
            </button>
            </div>

            <div class="faq">
                <h3 class="faq-title">Bagaimana saya mengetahui pesanan sudah dikirim?</h3>
                <p class="faq-text">
                    Setelah Anda telah melakukan pemesanan dan pembayaran, maka pesanan Anda
                    akan diproses dan Anda juga dapat melihat status pesanan Anda di menu Tracking.
                </p>

            <button class="faq-toggle">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-chevron-up"></i>
            </button>
            </div>

            <div class="faq">
                <h3 class="faq-title">Apakah ada nomor pelacakan untuk pesanan saya?</h3>
                <p class="faq-text">
                    Jika pesanan sudah dibayar dan siap antar, maka Anda akan diberikan 
                    nomor resi yang nantinya dapat di lihat di fitur Tracking
                </p>

            <button class="faq-toggle">
                <i class="fas fa-chevron-up"></i>
                <i class="fas fa-chevron-down"></i>
            </button>
            </div>

            <div class="faq">
                <h3 class="faq-title">Apakah barang bisa dikirim pada tanggal merah?</h3>
                <p class="faq-text">
                    Pengiriman pada tanggal merah atau hari libur di tiadakan, karena toko tutup.
                </p>

            <button class="faq-toggle">
                <i class="fas fa-chevron-up"></i>
                <i class="fas fa-chevron-down"></i>
            </button>
            </div>
        </div>
    </div>
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

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="main.js"></script>
  </body>
</html>