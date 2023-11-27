
<?php
$id = $_GET['id'];
include_once "ambildata_id.php";
$obj = json_decode($data);
$id = "";
$nama = "";
$alamat = "";
$deskripsi = "";
$telpon = "";
$lat = "";
$long = "";
$img = "";
foreach ($obj->results as $item) {
  $id .= $item->id;
  $nama .= $item->nama;
  $alamat .= $item->alamat;
  $deskripsi .= $item->deskripsi;
  $telpon .= $item->telp;
  $lat .= $item->latitude;
  $long .= $item->longitude;
  $img .= $item->image;
}
?>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initMap"></script>

<script>
  function initialize() {
    var myLatlng = new google.maps.LatLng(<?php echo $lat ?>, <?php echo $long ?>);
    var mapOptions = {
      zoom: 13,
      center: myLatlng
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var contentString = '<div id="content">' +
      '<div id="siteNotice">' +
      '</div>' +
      '<h1 id="firstHeading" class="firstHeading"><?php echo $nama ?></h1>' +
      '<div id="bodyContent">' +
      '<p><?php echo $alamat ?></p>' +
      '</div>' +
      '</div>';

    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });

    var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Maps Info',
      icon: 'img/markermap.png'
    });
    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map, marker);
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>

<!-- start banner Area -->
<section class="about-banner relative">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">

      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->
<!-- Start about-info Area -->
<section class="about-info-area section-gap">
  <div class="container" style="padding-top: 120px;">
    <div class="row">

      <div class="col-md-7" data-aos="fade-up" data-aos-delay="200">
        <div class="panel panel-info panel-dashboard">
          <div class="panel-heading centered">
            <h2 class="panel-title"><strong>Informasi Lokasi  </strong></h4>
          </div>
          <div class="panel-body">
            <table class="table">
              <tr>
                <!-- <th>Item</th> -->
                <th>Detail</th>
              </tr>
              <tr>
                <td>
                  <h5><?php echo $img?></h5>
              </tr>
              <tr>
              <tr>
                <td>Nama Toko</td>
                <td>
                  <h5><?php echo $nama ?></h5>
                </td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>
                  <h5><?php echo $alamat ?></h5>
                </td>
              </tr>
              <tr>
                <td>Deskripsi</td>
                <td>
                  <h5><?php echo $deskripsi ?></h5>
                </td>
              </tr>
              <tr
              >
                <td>Nomor telfon</td>
                <td>
                  <h5><?php echo $telpon ?></h5>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>

      <div class="col-md-5" data-aos="zoom-in">
        <div class="panel panel-info panel-dashboard">
          <div class="panel-heading centered">
            <h2 class="panel-title"><strong>Lokasi</strong></h4>
          </div>
          <div class="panel-body">
            <div id="map-canvas" style="width:100%;height:380px;"></div>
          </div>
        </div>
      </div>
</section>
<!-- End about-info Area -->