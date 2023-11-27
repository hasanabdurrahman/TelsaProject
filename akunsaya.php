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

    <title>Telsa | Akun Saya</title>

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
              <a class="nav-link" href="home.php">Beranda</a>
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
                <p>Dany Fadhilah</p>
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
    <h1>Akun Saya</h1>

    <div class="main">
        <div class="faq-container">
            <div class="faq">
                <h3 class="faq-title">Bagaimana cara mengubah informasi pada Akun Saya?</h3>
                <p class="faq-text">
                    Untuk mengubah informasi pada akun bisa dilakukan 
                    dengan mengunjungi menu profil yang tersedia lalu 
                    pilih edit untuk dapat melakukan pengubahan  
                </p>

            <button class="faq-toggle">
                <i class="fas fa-chevron-up"></i>
                <i class="fas fa-chevron-down"></i>
            </button>
            </div>

            <div class="faq">
                <h3 class="faq-title">Apakah bisa mendaftar akun dengan email yang sama?</h3>
                <p class="faq-text">
                    Email yang telah terdaftar tidak dapat di daftarkan 
                    ulang di akun telsa. Pengguna harus mendaftarkan email 
                    yang lain agar dapat menggunakan website ini
                </p>

            <button class="faq-toggle">
                <i class="fas fa-chevron-up"></i>
                <i class="fas fa-chevron-down"></i>
            </button>
            </div>

            <div class="faq">
                <h3 class="faq-title">Bagaimana cara untuk logout dari akun saya?</h3>
                <p class="faq-text">
                    Untuk logout dari akun dapat dijumpai di menu akun, jika 
                    kita klik menu tersebut akan keluar pilihan logout dan batal.
                    Pengguna hanya memilih pilihan logout, maka akun sudah ter-logout.
                </p>
            <button class="faq-toggle">
                <i class="fas fa-chevron-up"></i>
                <i class="fas fa-chevron-down"></i>
            </button>
            </div>

            <div class="faq">
                <h3 class="faq-title">Apakah saya dapat menggunakan akun saya untuk melacak riwayat pesanan?</h3>
                <p class="faq-text">
                    Bisa, setiap akun yang terdaftar pada website kami dapat menggunakan fitur yang tersedia
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