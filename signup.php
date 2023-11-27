<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link rel="stylesheet" href="_css/signup.css" />

  <title>Telsa | Signup</title>

  <!--== Fonts ==-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Pangolin&family=Poppins&family=Potta+One:wght@400;500&display=swap" rel="stylesheet" />

  <!--== Favicon ==-->
  <link rel="shortcut icon" href="image/telsa.png" type="image/x-icon" />
</head>

<body>
  <div class="container">
    <div class="image justify-content-center">
      <h1>CREATE YOUR ACCOUNT</h1>
    </div>

    <div class="signup">
      <div class="img-logo">
        <a href="signin.php">
          <img class="img-fluid5" src="image/back.png" alt="logo" width="50" />
        </a>
      </div>
      <h2>Sign Up</h2>

      <form class="form-signup col-lg-9 align-item-center" action="" method="POST">


        <?php


        session_start();

        include("connect.php");

        if (isset($_POST["submit"])) {
          // Your existing code to retrieve form data
          $firstname  = $_POST['first-name'];
          $lastname   = $_POST['last-name'];
          $email      = $_POST['email'];
          $password   = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
          $status     = $_POST['status'];

          // Check if the email already exists
          $check_query = "SELECT * FROM tb_users WHERE email = '$email'";
          $result = mysqli_query($conn, $check_query);

          if (mysqli_num_rows($result) > 0) {
            // Email already exists, show error message or redirect
            $_SESSION['error'] = "The email has already been registered";
            header("Location: signup.php");
            exit();
          }


          // Continue with registration if email doesn't exist
          // Your existing code for inserting new user data into the database
          $query  = "INSERT INTO tb_users (first_name, last_name, email, password, status) VALUES ('$firstname', '$lastname', '$email', '$password', '$status')";
          mysqli_query($conn, $query);

          echo "<script>alert('Data Added Successfully'); document.location.href = 'signin.php';</script>";
        }
        ?>
        <!-- Display error message -->
        <?php if (isset($_SESSION['error'])) : ?>
          <div class="alert alert-danger"><?php echo $_SESSION['error']; ?></div>
          <?php unset($_SESSION['error']); ?>
        <?php endif; ?>


        <div class="form-group name">
          <div class="mb-3">
            <label for="">First Name <span class="color-red">*</span></label>
            <input type="text" class="first-name form-control" id="first-name" name="first-name" placeholder="First Name" required />
          </div>
          <div class="mb-3">
            <label for="">Last Name</label>
            <input type="text" class="last-name form-control" id="last-name" name="last-name" placeholder="Last Name" />
          </div>
        </div>

        <div class="mb-3">
          <label for=""> Email <span class="color-red">*</span> </label>
          <input type="text" class="email form-control" id="email" name="email" placeholder="example@gmail.com" required />
        </div>

        <div class="mb-3">
          <label for=""> Password <span class="color-red">*</span> </label>
          <input type="password" class="password form-control" id="password" name="password" placeholder="Password" required />
        </div>

        <div class="mb-3">
          <label for=""> Status <span class="color-red">*</span> </label>
          <select class="form-select" id="status" name="status">
            <option value="customer">Customer</option>
            <option value="Peternak">Peternak</option>
            <option value="Distributor">Distributor</option>
            <option value="Agen">Agen</option>
          </select>
        </div>

        <!-- Hidden input untuk token CSRF (tambahkan sesuai kebutuhan) -->
        <input type="hidden" name="csrf_token" value="token_anda_di_sini" />

        <button type="submit" name="submit" class="btn">Create</button>
      </form>
    </div>
  </div>

  <!-- Hero Section End -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="main.js"></script>
</body>

</html>