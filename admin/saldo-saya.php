<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/header.css" />

    <!--== Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pangolin&family=Poppins&family=Potta+One:wght@400;500&display=swap"
      rel="stylesheet"
    />

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="image/telsa.png" type="image/x-icon" />
    <title>Admin | Saldo Saya</title>
  </head>
  <body>
    <div class="row card-base">
      <div class="nama-produk">
        <p>Saldo Saya</p>
      </div>
    </div>
    <div class="row card-base">
      <div class="card-kat2 me-2">
        <img src="../image/saldo-saya.png" alt="Image" />
        <div class="card-content">
          <p class="title">Penarikan Dana</p>
          <p class="description">Atur diskon produk dari toko</p>
        </div>
      </div>
      <div class="card-kat2 me-2">
        <img src="../image/saldo-saya.png" alt="Image" />
        <div class="card-content">
          <p class="title">Transaksi</p>
          <p class="description">Atur diskon produk dari toko</p>
        </div>
      </div>
      <div class="card-kat2 me-2">
        <img src="../image/saldo-saya.png" alt="Image" />
        <div class="card-content">
          <p class="title">Penghasilan Saya</p>
          <p class="description">Atur diskon produk dari toko</p>
        </div>
      </div>
    </div>
    <div class="row card-base">
      <div class="card-kat mb-3">
        Tarik dana ke
        <select name="tarikDana" id="tarikDana">
          <option value="bankA">BCA</option>
          <option value="bankB">Mandiri</option>
          <option value="bankC">BRI</option>
        </select>
      </div>
      <div class="card-kat mb-3">
        Jumlah penarikan dana
        <input
          class="mt-1 mb-1"
          type="text"
          name="harga"
          id="harga"
          placeholder="Masukkan jumlah penarikan dana"
          required
        />
      </div>
      <button type="submit" class="btn-orange">Konfirmasi</button>
    </div>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
  ></script>
</html>