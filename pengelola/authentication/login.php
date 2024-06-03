<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | SKPB-Facility</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="57x57" href="../../public/img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../../public/img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../../public/img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../../public/img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../../public/img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../../public/img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../../public/img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../../public/img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../../public/img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="../../public/img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../public/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../../public/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../public/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="../../public/img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;600;800&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;500;700;800&display=swap" rel="stylesheet">
</head>

<style>
  .bg-custom {
    /* background-image: url(../assets/img//bg-mission.webp) !important; */
    background-repeat: no-repeat !important;
    background-position: center center !important;
    background-size: cover !important;
  }

  body {
    font-family: "Manrope", sans-serif !important;
  }

  .link-custom:hover {
    font-weight: bold !important;
    color: rgb(0, 81, 255) !important;
  }
</style>

<body class="bg-custom hold-transition login-page">




  <?php
  require '../function.php';

  if (isset($_POST["login"])) {

   $email = $_POST["email"];
   $password = hash('sha256', $_POST["password"]);
    
    $result = mysqli_query($db, "SELECT * FROM `admin` WHERE password='$password' AND email='$email'");
    
    // cek username
    if (mysqli_num_rows($result) > 0) {

      $row = mysqli_fetch_assoc($result);

      session_start();
      $_POST['email'] = $email;
      $_POST['password'] = $password;
      $_SESSION['status'] = "login";
      $_SESSION['id'] = $row['id'];
      echo '<script>
    swal("Selamat Datang", "Login Berhasil!", "success")
    .then((value) => {
    window.location.href = "../index.php";
    });
    </script>';
      

      exit();
    } else {
      echo "<script>
      swal('Gagal Login', 'Username atau password salah, atau terjadi error pada server', 'error');
      </script>";
    }
    

  
  }

  ?>

  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="../../index2.html" class="h1">Admin <b>SKPB</b></a>
        <!-- <img src="../dist/image//Logo_SKPB-biru.png" style="width: 240px !important;" alt=""> -->
      </div>
      <div class="card-body">
        <!-- <center><a href="../../index.php" class="mt-4 link-custom text-center" style="color: black; text-align:center !important"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
            </svg> Kembali ke Halaman Utama</a></center> -->
        <p class="mt-2 login-box-msg">Selamat Datang Admin! <br><b>Silahkan Login</b></p>
        <form action="login.php" method="post">
          <div class="input-group mb-3">
            <input required type="email" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input required type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- <div class="col-8">
              <div class="icheck-primary">
                <p class="mb-1">
                  <a class="link-custom" href="register.php">Belum Punya Akun?</a>
                </p>
              </div>
            </div> -->
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" name="login" class="btn btn-primary btn-block">Masuk</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <!-- <p class="mb-1">
          <a class="link-custom" href="../../public/pengembangan.php">Lupa Password</a>
        </p> -->

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>