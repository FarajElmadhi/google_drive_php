<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location: Login_Admin.php');
    exit();
}

// $title = '';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?? 'taflish'; ?></title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/addition.css">

    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->


  <link rel="stylesheet" href="css/AdminLTE.min.css">
    <!-- <link rel="stylesheet" href="dist/css/albasha.css"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <link href="css/style.css" rel="stylesheet" type="text/css" />

</head>


<body>
     <div class="top-bar">
       <div class="top-bar-right">
          <div class="w1"> <a href="index.php">الرئيسية</a>  <a href="../index.php"> زيارة الموقع</a>
          <a class='text-center' href="logout.php">تسجيل خروج</a>
          </div>
        </div>
     </div>


