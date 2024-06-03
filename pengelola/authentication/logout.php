<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Logout| SKPB-Facility</title>

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
</head>

<style>
  .bg-custom {
    /* background-image: url(../assets/img//bg-mission.webp) !important; */
    background-repeat: no-repeat !important;
    background-position: center center !important;
    background-size: cover !important;
  }

  .link-custom:hover {
    font-weight: bold !important;
    color: rgb(0, 81, 255) !important;
  }
</style>

<body class="bg-custom hold-transition login-page">


  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>


<?php 

session_start();
$_SESSION = [];
session_unset();
session_destroy();
echo '<script>
swal("Keluar", "Logout Berhasil!", "success")
.then((value) => {
window.location.href = "login.php";
});
</script>';
exit;

?>