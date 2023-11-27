<?php
  require_once 'connect.php';
  $sql = "SELECT * FROM produk_peternak";
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
    .maps2{
        width: 100%;
        height: 500px;
        margin-bottom: 50px;
        margin-top: 128px;
    }
    </style>

    <title>Telsa |  Maps Distributor</title>

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
              <a class="nav-link" href="homeagen.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="order.php"
                >Order</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tracking.php">Tracking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="dataagen.php">Distributor</a>
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
                <p>Niissahk</p>
              </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Navbar End -->

    <!-- Hero Section Start -->
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

                $distributor_id = $_GET['id'];

                // Query database untuk mengambil alamat berdasarkan ID agen
                $sql = "SELECT latitude, longitude FROM distributor WHERE id = $distributor_id";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $latitude = $row["latitude"];
                    $longitude = $row["longitude"];

                    echo '<iframe class="maps2" src="https://www.google.com/maps?q=' . $latitude . ',' . $longitude . '&hl=id&z=18&output=embed" class="maps"></iframe>';
                } else {
                    echo "Tidak ada data alamat untuk agen ini.";
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
  </body>
</html>
