<?php
@include '../../Connections/conect.php';


$stmt = $connect->prepare(" SELECT * FROM nokiadevice ORDER BY Model ASC");
$stmt->execute();
$roms = $stmt->fetchAll();

$s = $connect->prepare(" SELECT * FROM ads_head WHERE id=?");
$s->execute(array(1));
$ads = $s->fetch();
   

?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Download Flashes and firmware for nokia all version and all language">
<meta name="keywords" content="nokia firmware,nokia flashe,rom nokia,hard reset nokia,format nokia,recovery nokia,repaire nokia,fix imei nokia, nokia imei null,repaire imei nokia">
<title>Nokia Flashes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1  user-scalable=no">

<link rel="shortcut icon" href="../../images/icon.png">
<link rel="stylesheet" href="../../css/bootstrap.css"/>
<link rel="stylesheet" href="../../css/animate.css"/>
<link rel="stylesheet" href="../../css/hover.css"/>
<link rel="stylesheet" href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="../../css/bootstrap-social.css"/>
<link rel="stylesheet" href="../../css/ltr.css"/>
<!-- IE Meta -->
<meta http-equiv="X-UA-Combatible" content="IE=edge">
<!-- For Mobile Responsive -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no user-scalable=no">
<script src="../../js/html5shiv.min.js"></script>
<script src="../../js/respond.min.js"></script>
<?php echo $ads['header']; ?>

</head>
<body>
<!-- AddToAny END -->
<!-- بداية الشريط العلوي -->
<div class="continer">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="../../index.php"><span class="glyphicon glyphicon-home

"></span> HOME</a></li>
          <li><a href="../Contact.php"> <span class="glyphicon glyphicon-envelope
"></span> CONTACT US</a></li>
          <li><a href="http://blog.taflish.com/"><span class="glyphicon glyphicon-edit
"></span> BLOG</a></li>
          <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-globe"
></span> LANGUAGE <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li class="arabic"> <a  href="../../AR/Nokia/Flashes.php">العربية</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="">English</a></li>
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
        <div class="carousel-caption"><img class="img-responsive" src="../../images/logo1.png"> </div>
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
          <div> <small>Powered by <a style="color:#ff0" href="">Taflish Script</a> Version 2.1 | &copy; 2017 - 2018, all rights reserved.</small> </div>
        </div>
      </div>
      <div class="item">
        <div class="carousel-caption"><img class="img-responsive" src="../../images/logo1.png"></div>
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
          <li class="dropdown  "> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SAMSUNG<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../Samsung/Rom_Samsung.php">STOCK ROOM</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../Samsung/Rom4_Samsung.php">4 FILES ROM</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../Samsung/Combination.php">COMBINATION ROM</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../Samsung/Root.php">ROOT & RECOVERY</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../Samsung/Modem.php">MODEM FILES </a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../Samsung/Cert-Samsung.php">CERT FILES </a></li>
            </ul>
          </li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SONY<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../Sony/Rom.php">STOCK ROM</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../Sony/Lock_Remove.php">LOCK REMOVE FTF FILES</a></li>
            </ul>
          </li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">APPLE<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../Apple/Firmware.php">FIRMWARE IPSW</a></li>
            </ul>
          </li>
          <li class="dropdown active"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NOKIA<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="Flashes.php">FLASH FILES</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <form class="navbar-form navbar-left" action="../Search.php" method="post">
            <div class="form-group">
              <input name="search" type="text" class="form-control wow pulse "  placeholder="Search...">
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
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="ads-avarege">
        <?php echo $ads['ads_main']; ?>
      </div>
    </div>
  </div>
</div>
<!-- /ADS AREA -->
<!-- بداية الجدول -->
<div  class="content" >
  <!-- table for mobile -->
  <!-- table for mobile -->
  <div class="mobile">
    <div class="row">
      <div class="col-xs-12 visible-xs">
        <div class="all-device-mobile">
          <h4 class="wow flash" data-wow-duration="4s" data-wow-iteration="100" >STOCK FLASHES FOR NOKIA DEVICE</h4>
        </div>
        <?php  foreach($roms as $row){ ?>
          <div class="mobile-table btn-block text-center "> <a href="View_Flashes.php?Model=<?php echo $row['Model']; ?>">  <div class="file-type ">FLASH FILE<p><pr> <span class="glyphicon glyphicon glyphicon-eye-open"></span> <?php echo $row['view']; ?></p></div> <?php echo $row['Model_Name']; ?> - <?php echo $row['Model']; ?> </a></div>
          <?php }   ?>
      </div>
    </div>
    <div>
      <!-- /.table for mobile-->
      <!-- /.table for mobile-->
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12  hidden-xs">
          <div class="main-table">
            <div class="all-device ">
              <h4 class="wow flash" data-wow-duration="4s" data-wow-iteration="100" >STOCK FLASHES FOR NOKIA DEVICE</h4>
            </div>
            <table class="table text-capitalize">
              <thead>
                <tr>
                  <th><h4> VIEWS </h4></th>
                  <th><h4> COMPANY / TYPE </h4></th>
                  <th><h4>MODEL NAME</h4></th>
                  <th><h4>MODEL</h4></th>
                  <th><h4>DOWNLOAD</h4></th>
                </tr>
              </thead>
              <tbody>
                <?php  foreach($roms as $row){ ?>
                  <tr>
                    <td><h4> <span class="glyphicon glyphicon glyphicon-eye-open"></span> <?php echo $row['view']; ?></h4></td>
                    <td><h4><?php echo $row['Companny']; ?>  ( FLASH FILE ) </h4></td>
                    <td><h4><?php echo $row['Model_Name']; ?></h4></td>
                    <td><h4><?php echo $row['Model']; ?></h4></td>
                    <td><a class="link-main" href="View_Flashes.php?Model=<?php echo $row['Model']; ?>" >VIEW <span class="fa fa-chevron-right"> </span></a></td>
                  </tr>
                  <?php }    ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="footer-area">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="ads-footer"><?php echo $ads['ads_footer']; ?> </div>
    </div>
      </div>
</div>
<!-- FOOTER -->
 <?php @include('../../layout/footer.php'); ?>

<!-- .container ENDS -->
</div>
<script src="../../js/jquery-3.3.1.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/plugines.js"></script>
<a id="back-to-top" href="#" class="btn btn-warning  btn-lg back-to-top" role="button" title="Go To Top Page" data-toggle="tooltip" data-placement="left"><span class="fa fa-angle-double-up "></span></a>
</body>
</html>
