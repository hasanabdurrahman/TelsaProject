<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link rel="stylesheet" href="_css/home.css" />
  <link rel="stylesheet" href="homebaru.css" />

  <title>Telsa | Home Distributor</title>

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
      <a class="navbar-brand" href="homedistributor.php"><img src="image/telsa.png" alt="logo" class="img-fluid" width="140" height="30" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="homedistributor.php">Beranda</a>
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
            <a class="nav-contact" ><img src="image/help-menu.png" alt="contact" class="img-fluid2" width="30" height="30" /></a>
          </li>
          <li class="nav-profil">
          <li class="nav-profil1" id="profile-image">
            <img src="image/profile.png" alt="signin" width="30" height="30">
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
              <input class="search form-control-sm col-6 me-3" type="search" placeholder="Masukkan katakunci" aria-label="Search">
              <button class="btn" type="submit">Cari</button>
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
          <h2 class="title4 mb-5">Apa itu telur dan manfaatnya </h2>
          <div class="col-lg-6 col-12 teks">
            <div class="grid mt-5">
              <article>
                <h2 class="title">Apa itu telur? </h2>
                <div class="konten">
                  <p class="desc">Telur merupakan salah satu bahan pangan umum yang digunakan di seluruh dunia. Selain itu, telur juga sumber protein hewani selain dari daging, ikan dan susu. Terdapat 3 komponen utama yang banyak seklai manfaatnya.</p>
                </div>
              </article>
            </div>
          </div>
          <div class="img-home2 col-lg-6 col-12 text-end d-none d-sm-block">
            <div class="grid mt-5">
              <article>
                <h2 class="title">Manfaat Telur? </h2>
                <div class="konten">
                  <p class="desc">Manfaat dari telur yaitu dapat meningkatkan energi, memperkuat daya tahan tubuh, menjaga kekuatan otot, menjaga kesehatan otak, meningkatkan kesehatan mata, dan mampu setiap sel dan jaringan penyusun tubuh.</p>
                </div>
              </article>
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
      <h2 class="title2 mb-5">Jenis - Jenis Telur</h2>
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-item active">
          <div class="home3 row mt-5">
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
        <!-- Start about-info Area -->
        <section class="price-area section-gap">

          <section id="peta" class="about-info-area section-gap">
            <div class="container">

              <div class="row align-items-center">
                <div id="map" style="width:100%;height:480px;"></div>
                <script src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initMap "></script>

                <script type="text/javascript">
                  function initialize() {

                    var mapOptions = {
                      zoom: 10.2,
                      center: new google.maps.LatLng(-6.5951867, 106.7094901),
                      disableDefaultUI: false
                    };

                    var mapElement = document.getElementById('map');

                    var map = new google.maps.Map(mapElement, mapOptions);

                    setMarkers(map, officeLocations);

                  }

                  var officeLocations = [
                    <?php
                    $data = file_get_contents('http://127.0.0.1:8080/telsalengkap/ambildata.php');
                    $no = 1;
                    if (json_decode($data, true)) {
                      $obj = json_decode($data);
                      foreach ($obj->results as $item) {
                    ?>[<?php echo $item->id ?>, '<?php echo $item->nama ?>', '<?php echo $item->alamat ?>', <?php echo $item->longitude ?>, <?php echo $item->latitude ?>],
                    <?php
                      }
                    }
                    ?>
                  ];

                  function setMarkers(map, locations) {
                    var globalPin = 'img/marker.png';

                    for (var i = 0; i < locations.length; i++) {

                      var office = locations[i];
                      var myLatLng = new google.maps.LatLng(office[4], office[3]);
                      var infowindow = new google.maps.InfoWindow({
                        content: contentString
                      });

                      var contentString =
                        '<div id="content">' +
                        '<div id="siteNotice">' +
                        '</div>' +
                        '<h5 id="firstHeading" class="firstHeading">' + office[1] + '</h5>' +
                        '<div id="bodyContent">' +
                        '<a href=detail.php?id=' + office[0] + '>Info Detail</a>' +
                        '</div>' +
                        '</div>';

                      var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map,
                        title: office[1],
                        icon: 'img/markermap.png'
                      });

                      google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
                    }
                  }

                  function getInfoCallback(map, content) {
                    var infowindow = new google.maps.InfoWindow({
                      content: content
                    });
                    return function() {
                      infowindow.setContent(content);
                      infowindow.open(map, this);
                    };
                  }

                  initialize();
                </script>

              </div>


            </div>
          </section>
          <!-- End about-info Area -->

</body>

</html>