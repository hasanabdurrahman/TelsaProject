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
    <link rel="stylesheet" href="_css/styles.css" />

    <style>
      .card {
        background-color: #FFFFFF; 
        padding: 30px; 
        margin: 0 auto;
        border: 1px solid #777777;
        border-radius: 5px; 
        width: 80%;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .profile{
        width: 100%;
        margin-bottom: 20px;
    }

    .alamat{
        width: 120px;
        border-radius: 5px;
        background-color: #EB713E;
    }

    .emp{
        margin-top: 170px;
    }

    .navbar{
      z-index: 1;
    }

    .teksjudul{
      font-family: "Potta One", cursive;
      font-size: 50pt;
      font-weight: 400;
      text-align: center;
      margin-top: 120px;
      margin-bottom: 20px;
    }

    .bgdata{
      background-image: url("image/bgdata.jpg");
      background-size: cover;
      height: 200px;
    }

    .searchdata{
      width: 400px;
      height: 50px;
      padding: 20px;
      border-radius: 5px;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: #EB713E;
      border-radius: 100%;
    }
    </style>

    <title>Telsa | Peternak</title>

    <!--== Fonts ==-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
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
              <a class="nav-link" aria-current="page" href="order.php"
                >Produk</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tracking.php">Tracking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="datapeternak.php">Peternak</a>
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


    <div class="bgdata">
      <div class="container">
        <h4 class="teksjudul">Data Peternak</h4>
        <center>
        <input type="text" id="searchdata" class="searchdata" placeholder="Cari Peternak...">
        </center>
      </div>
    </div>
<div class="container content">
        <div class="tracking">
            <?php
                include_once "connect.php";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM tb_distributors";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  $cards = [];
                    while($row = $result->fetch_assoc()) {
                      $cards[] = '<div class="col-4">
                                  <div class="card">
                                    <img class="profile" alt="profile peternak ' . $row["nama"] . '" src="image/' . $row["image"] . '.png"/>
                                    <strong>Peternak ' . $row["distrik"] . '</strong>
                                    <span>Nama: Peternak ' . $row["nama"] . '</span>
                                    <span>No telepon: ' . $row["telp"] . '</span>
                                    <span>Alamat: ' . $row["alamat"] . '</span><br>
                                    <a href="maps.php?id=' . $row["id"] . '"><button class="alamat">Lihat Alamat</button></a>
                                  </div>
                                </div>';
                    }
                    $chunks = array_chunk($cards, 3); // Membagi kartu menjadi kelompok 3

                    echo '<div id="agenCarousel" class="carousel slide">
                            <div class="carousel-inner">';
                            foreach ($chunks as $key => $chunk) {
                              $activeClass = $key === 0 ? ' active' : '';
                              echo '<div class="carousel-item' . $activeClass . '">
                                      <div class="row">' . implode('', $chunk) . '</div>
                                    </div>';
                            }
                      
                            echo '</div>
                                  <a class="carousel-control-prev" href="#agenCarousel" role="button" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                  </a>
                                  <a class="carousel-control-next" href="#agenCarousel" role="button" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                  </a>
                                </div>';
                          } else {
                            echo "<h1 class='text-center emp'>Tidak Ada Data Agen</h1>";
                          }

            $conn->close();
            ?>
        </div>
    </div>
    <!-- Hero Section End -->

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

    <script>
      const searchInput = document.getElementById("searchdata");
      const cards = document.querySelectorAll(".card");

      searchInput.addEventListener("input", function () {
        const searchTerm = searchInput.value.toLowerCase();
        cards.forEach((card) => {
          const cardText = card.innerText.toLowerCase();
          if (cardText.includes(searchTerm)) {
            card.style.display = "block";
          } else {
            card.style.display = "none";
          }
        });
      });
    </script>
  </body>
</html>
