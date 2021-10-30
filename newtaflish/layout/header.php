<?php

$s = $connect->prepare(" SELECT * FROM ads_head WHERE id=?");
$s->execute(array(1));
$ads = $s->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo $description; ?>">
<meta name="keywords" content="<?php echo $keywords; ?>">
<link rel="shortcut icon" href="<?php echo $route; ?>images/icon.png">
<link rel="stylesheet" href="<?php echo $route; ?>css/bootstrap.css"/>
<link rel="stylesheet" href="<?php echo $route; ?>css/animate.css"/>
<link rel="stylesheet" href="<?php echo $route; ?>css/hover.css"/>
<link rel="stylesheet" href="<?php echo $route; ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="<?php echo $route; ?>css/bootstrap-social.css"/>
<link rel="stylesheet" href="<?php echo $route; ?>css/ltr.css"/>
<meta http-equiv="X-UA-Combatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no user-scalable=no">
<meta name="msvalidate.01" content="998B45419581B6B61E1C1C604BA64DF2" />
<script src="<?php echo $route; ?>js/html5shiv.min.js"></script>
<script src="<?php echo $route; ?>js/respond.min.js"></script>
<?php echo $ads['header']; ?>
</head>
<body>
<div class="continer">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo $route; ?>index.php"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
          <li><a href="<?php echo $route; ?>EN/Contact.php"> <span class="glyphicon glyphicon-envelope"></span> CONTACT US</a></li>
          <li><a href="http://blog.taflish.com/"><span class="glyphicon glyphicon-edit"></span> BLOG</a></li>
          <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-globe"></span> LANGUAGE <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li class="arabic"><a href="<?php echo $route; ?>AR/Samsung/Rom_Samsung.php">العربية</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="<?php echo $route; ?>index.php">English</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><i><a href="https://wwww.facebook.com/taflish1" class="fa fa-facebook fa-2x"></a> </i><i><a href="https://twitter.com/taflish_com" class="fa fa-twitter fa-2x"></a></i><i><a href="https://www.youtube.com/channel/UCnZJHDhMtwDygiXydCsFE1Q" class="fa fa-youtube fa-2x  "></a></i></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- بداية اللوغو -->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <div class="carousel-caption"><img class="img-responsive" src="<?php echo $route; ?>images/logo1.png"> </div>
      </div>
      <div class="item">
        <div class="carousel-caption"> <br>
          <br>
          <br>
          <br>
          <br>
          <h2>Taflish<small style="color:#ff0">.<sub>com</sub></small></h2>
          <h3>Easy Download Rom & Firmware For All Device .</h3>
          <br>
          <br>
          <br>
          <div> <small>Powered by <a style="color:#ff0" href="">Taflish Script</a> Version 2.1 | &copy; 2017 - <?php echo date('Y'); ?>, all rights reserved.</small> </div>
        </div>
      </div>
      <div class="item">
        <div class="carousel-caption"><img class="img-responsive" src="<?php echo $route; ?>images/logo1.png"></div>
      </div>
    </div>
    <!-- Controls -->
  </div>
  <!--بداية شريط القائمة -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
        <ul class="nav navbar-nav">
          <li class="dropdown <?php if($active == 'samsung') echo 'active'; ?> "> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SAMSUNG<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo $route; ?>EN/Samsung/Rom_Samsung.php">STOCK ROOM</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="<?php echo $route; ?>EN/Samsung/Rom4_Samsung.php">4 FILES ROM</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="<?php echo $route; ?>EN/Samsung/Combination.php">COMBINATION ROM</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="<?php echo $route; ?>EN/Samsung/Root.php">ROOT & RECOVERY</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="<?php echo $route; ?>EN/Samsung/Modem.php">MODEM FILES </a></li>
              <li role="separator" class="divider"></li>
              <li><a href="<?php echo $route; ?>EN/Samsung/Cert-Samsung.php">CERT FILES </a></li>
            </ul>
          </li>
          <li class="dropdown <?php if($active == 'sony') echo 'active'; ?>"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SONY<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo $route; ?>EN/Sony/Rom.php">STOCK ROM</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="<?php echo $route; ?>EN/Sony/Lock_Remove.php">LOCK REMOVE FTF FILES</a></li>
            </ul>
          </li>
          <li class="dropdown <?php if($active == 'apple') echo 'active'; ?>"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">APPLE<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo $route; ?>EN/Apple/Firmware.php">FIRMWARE IPSW</a></li>
            </ul>
          </li>
          <li class="dropdown <?php if($active == 'nokia') echo 'active'; ?>"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NOKIA<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo $route; ?>EN/Nokia/Flashes.php">FLASH FILES</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <form class="navbar-form navbar-left" action="<?php  echo $route; ?>EN/Search.php" method="post">
            <div class="form-group">
              <input name="search" type="text" class="form-control "  placeholder="Search...">
            </div>
          </form>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</div>
<!-- ADS AREA -->
<div class="avarege-area">
  <div class="row">
      <div class="ads-avarege"> <?php echo $ads['ads_main']; ?> </div>

  </div>
</div>