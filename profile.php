<?php
include_once 'connect.php';

// Ambil data dari database
$sql = "SELECT * FROM tb_user"; // Ganti dengan nama tabel Anda
$result = $conn->query($sql);

// Fetch the result once
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}

// Tutup koneksi
$conn->close();
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
      <link rel="stylesheet" href="akun.css" />

      <title>Telsa | Profile</title>

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
      <!-- Hero Section Start -->

      <div class="container">
          <div class="row akun">
              <div class="col-05">
                <img src="image/user.png" alt="">
            </div>
            <div class="col-11 akun-saya">
                <p>Akun Saya</p>
              </div>
          </div>

          <div class="row profile">
              <div class="row">
                  <div class="col-2">
                    <?php
                        if (isset($row['image'])) {
                            echo "<img src='image/{$row['image']}.png' alt='profile'>";
                        }
                    ?>
                  </div>
                  <div class="col-10">
                    <?php
                    if (isset($row['nama']) && isset($row['email'])) {
                        echo "<h2>{$row['first_name']}</h2>";
                        echo "<h2>{$row['Email']}</h2>";
                    }
                    ?>
                      <div class="row">
                          <div class="col-6 btn-profile">
                              <a href="#" class="btn-orange">Ubah Profil</a>
                              <a href="#" class="btn-orange keluar">Keluar</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="row d-flex justify-content-center">
                <div class="col-8 pesanan">
                    <div class="row">
                        <div class="col-3">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <img class="img-pesanan" src="image/packing.png" alt="">
                                </div>
                                <div class="col-12 text-center">
                                    <h5>Dikemas</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <img class="img-pesanan" src="image/expedition.png" alt="">
                                </div>
                                <div class="col-12 text-center">
                                    <h5>Dikirim</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <img class="img-pesanan" src="image/star.png" alt="">
                                </div>
                                <div class="col-12 text-center">
                                    <h5>Penilaian Saya</h5>
                                </div>
                            </div>
                        </div><div class="col-3">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <img class="img-pesanan" src="image/heart.png" alt="">
                                </div>
                                <div class="col-12 text-center">
                                    <h5>Produk Disukai</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
        
          <div class="row">
              <div class="col-7 card-krem">
                <div class="row ubah-profil">
                        <h5>Ubah Profil</h5>
                    <div class="col-12">
                        <label for="nama">Nama Lengkap</label>
                    </div>
                    <div class="col-12">
                        <?php
                    if (isset($row['nama'])){
                        echo "<input type='text' name='nama' id='nama' placeholder='{$row['nama']}' class='text-center w-100'>";
                    }
                    ?>
                    </div>

                    <div class="col-12">
                        <label for="kelamin">Jenis Kelamin</label>
                    </div>
                    <div class="col-12">
                        <input type="radio" name="kelamin" id="lk" value="Laki-Laki" <?php echo ($row['jenis-kelamin'] == 'Laki-Laki') ? 'checked' : ''; ?>>
                        <label for="lk">Laki-Laki</label>
                        <input type="radio" name="kelamin" id="pr" value="Perempuan" <?php echo ($row['jenis-kelamin'] == 'Perempuan') ? 'checked' : ''; ?>>
                        <label for="pr">Perempuan</label>
                    </div>

                    <div class="col-12">
                        <label for="tgl-lahir">Tanggal Lahir</label>
                    </div>
                    <div class="col-12">
                        <input type="date" name="tgl-lahir" id="tgl-lahir" class="text-center w-100"value="<?php echo isset($row['tanggal-lahir']) ? $row['tanggal-lahir'] : ''; ?>">
                    </div>

                    <div class="col-12">
                        <label for="telp">No. Telepon</label>
                    </div>
                    <div class="col-12">
                        <?php
                            if (isset($row['no-telp'])){
                                echo "<input type='text' name='telp' id='telp' placeholder='{$row['no-telp']}' class='text-center w-100'>";
                            }
                        ?>
                    </div>

                    <div class="col-12">
                        <label for="email">Email</label>
                    </div>
                    <div class="col-12">
                        <?php
                            if (isset($row['email'])){
                                echo "<input type='text' name='email' id='email' placeholder='{$row['email']}' class='text-center w-100'>";
                            }
                        ?>
                    </div>
                </div>
                </div>

                <div class="col-4 card-krem d-flex ms-auto">
                <div class="row ubah-profil">
                        <h5>Akun dan Keamanan</h5>
                    <div class="col-12">
                        <label for="username">Username</label>
                    </div>
                    <div class="col-12">
                        <?php
                            if (isset($row['username'])){
                                echo "<input type='text' name='username' id='username' placeholder='{$row['username']}' class='text-center w-100'>";
                            }
                        ?>
                    </div>

                    <div class="col-12">
                        <label for="hp">No. Handphone</label>
                    </div>
                    <div class="col-12">
                        <?php
                            if (isset($row['no-telp'])){
                                echo "<input type='text' name='telp' id='telp' placeholder='{$row['no-telp']}' class='text-center w-100'>";
                            }
                        ?>
                    </div>

                    <div class="col-12">
                        <label for="email">Email</label>
                    </div>
                    <div class="col-12">
                        <?php
                            if (isset($row['email'])){
                                echo "<input type='text' name='email' id='email' placeholder='{$row['email']}' class='text-center w-100'>";
                            }
                        ?>
                    </div>

                    <div class="col-12">
                        <label for="pwd">Ganti Password</label>
                    </div>
                    <div class="col-12">
                        <?php
                            if (isset($row['password'])){
                                echo "<input type='password' name='pwd' id='pwd' placeholder='{$row['password']}' class='text-center w-100'>";
                            }
                        ?>
                    </div>
                </div>
                </div>
          </div>

          <div class="row button">
              <div class="col-12">
                  <a href="" class="btn-orange">Unggah</a>
                  <a href="" class="btn-orange">Beranda</a>
              </div>
          </div>
      </div>

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