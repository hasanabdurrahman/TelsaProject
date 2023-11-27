<?php
  require_once 'connect.php';
  $sql = "SELECT * FROM tb_produk_peternaks";
  $all_product = $conn->query($sql);
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

    <title>Telsa | Produk</title>

    <!--== Fonts ==-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pangolin&family=Poppins&family=Potta+One:wght@400;500&display=swap"
      rel="stylesheet"
    />

    <style>
      .kupon2{
        margin-bottom: 50px;
        margin-top: 20px;
      }
    </style>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="image/telsa.png" type="image/x-icon" />
  </head>
  <body>
    
    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="homedistributor.php"
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

    <!-- Hero Section Start -->

    <section class="hero" id="home">
      <main class="content">
        <div class="container">
          <div class="home row">
            <div class="col-lg-6 col-12 teks">
              <h1 class="judul1">Belanja di</h1>
              <h1 class="judul2">Telsa Aja</h1>
              <br />
              <p class="judul3">
                Makmurkan peternak telur lokal, murah, hemat, dan berkualitas.
              </p> 
              <div class="yuk-button">
                <div class="yuk">
                  <p class="judul4">
                    Yuk Belanja
                  </p>
                </div>
                <div class="button">
                  <a href="order.php"><button type="submit" class="btn">Disini!</button></a>
                </div>
              </div>
            </div>
            <div class="img-home col-lg-6 col-12 text-end d-none d-sm-block">
              <img src="image/home.png" alt="homefoto1" width="600" />
            </div>
          </div>
        </div>
      </main>
    </section>
    <!-- Hero Section End -->

    <!-- Menu2 Section Start -->

    <section class="menu2" id="home">
      <main class="content">
        <div class="judul5">
          <h1>Produk Telsa</h1>
        </div>
        <div class="search col-md-6">
          <form class="search-bar">
            <input type="text" class="form-control search-input" placeholder="Cari Produk">
            <button type="search" class="btn2">Cari</button>
          </form>
        </div>
        <div class="grid">
          <?php while($row = mysqli_fetch_assoc($all_product)) { ?>
            <article>
              <a href="detail_produk.php?id=<?php echo $row['id']?>">
              <div class="image">
                <img src="<?php echo $row["gambar"]?>" name="gambar" id="gambar" alt="" width="300px" height="300px">
              </div>
              <div class="caption">
                <p class="rate">
                  <i class="fas fa-fw fa-regular fa-star"></i>
                  <i class="fas fa-fw fa-regular fa-star"></i>
                  <i class="fas fa-fw fa-regular fa-star"></i>
                  <i class="fas fa-fw fa-regular fa-star"></i>
                  <i class="fas fa-fw fa-regular fa-star"></i>
                </p>
                <p class="product_name" name="kategori_produk" id="kategori_produk"><b><?php echo $row["kategori_produk"];?></b></p>
                <p class="price" name="harga" id="harga">Rp <?php echo $row["harga"];?> /kg</p>
                <p class="description" name="deskripsi" id="deskripsi"><?php echo $row["deskripsi"];?></p>
                <p class="stok" name="stok" name="stok">stok: <?php echo $row["stok"];?></p>
              </div>
              </a>
            </article>
          <?php } ?>
        </div>
      </main>
    </section>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <p class="text-start">Ambil Vouchermu Disini</p>
        </div>
        <div class="col-12">
          <img src="image/kupon1.png" alt="" width="100%">
        </div>
        <div class="col-12">
          <img class="kupon2" src="image/kupon2.png" alt="" width="100%">
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
