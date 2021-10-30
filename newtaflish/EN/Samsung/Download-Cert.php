<?php
@include '../../Connections/conect.php';

if (isset($_GET['ceid'])) {
    $id = $_GET['ceid'];
} else {
    header('location: ../../index.php');
    exit();

}
$stmt = $connect->prepare(" SELECT * FROM `cert` WHERE `ceid` = ?");
$stmt->execute(array($id));
$count = $stmt->rowCount();
$row = $stmt->fetch();

$s = $connect->prepare(" SELECT * FROM ads_head WHERE id=?");
$s->execute(array(1));
$ads = $s->fetch();

$view = $row['view'] +1;
$stmt = $connect->prepare("UPDATE `cert` SET view= ?  WHERE `ceid` = ?");
$stmt->execute(array($view, $id));

?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Download Cert File   <?php echo $row['model_name']; ?> , <?php echo $row['model']; ?> key id <?php echo $row['key_id']; ?>">
<meta name="keywords" content=" cert <?php echo $row['model_name']; ?>, imei <?php echo $row['model']; ?>, fix imei <?php echo $row['model']; ?>, clone cert <?php echo $row['model']; ?>, fix imei null <?php echo $row['model']; ?>,repaire imei null <?php echo $row['model']; ?>,cert working <?php echo $row['model']; ?>,change imei <?php echo $row['model_name']; ?>,cert work turkce <?php echo $row['model']; ?>,cert work usa <?php echo $row['model']; ?>,cert work in syria <?php echo $row['model_name']; ?>,free cert <?php echo $row['model']; ?> ">
<title>DOWNLOAD FREE CERT FILE FOR <?php echo $row['company']; ?> <?php echo $row['model_name']; ?> <?php echo $row['model']; ?>  </title>
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
              <li class="arabic"> <a  href="../../AR/Samsung/Download-Cert.php?ceid=<?php echo $row['ceid']; ?>">العربية</a></li>
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
          <li class="dropdown active "> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SAMSUNG<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="Rom_Samsung.php">STOCK ROOM</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="Rom4_Samsung.php">4 FILES ROM</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="Combination.php">COMBINATION ROM</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="Root.php">ROOT & RECOVERY</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="Modem.php">MODEM FILES </a></li>
              <li role="separator" class="divider"></li>
              <li><a href="Cert-Samsung.php">CERT FILES </a></li>
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
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NOKIA<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../Nokia/Flashes.php">FLASH FILES</a></li>
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
    <!-- /.container-fluid -->
  </nav>
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
    <div class="download-info">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12">
          <div class="col-lg-2 col-md-2 col-sm-2  hidden-xs">
            <div class="ads-side-download">
              <?php echo $ads['ads_side']; ?>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-8  col-xs-12">
            <div class="all-device">
              <h4 class="wow flash" data-wow-duration="4s" data-wow-iteration="100" >DOWNLOAD CERT FILE FOR  <?php echo $row['company']; ?>  <?php echo $row['model']; ?></h4>
            </div>
            <div class="info-device"> <br>
              <li>
                <h4> <p class="type"> <span class="glyphicon glyphicon-hand-right"> </span>   TYPE FILE : </p>  CERT FILE .</h4>
              </li>
              <br>
              <li>
                <h4> <p class="type"> <span class="glyphicon glyphicon-hand-right"> </span>   COMPANY : </p> <?php echo $row['company']; ?>  .</h4>
              </li>
              <br>
              <li>
                <h4> <p class="type"> <span class="glyphicon glyphicon-hand-right"> </span>    DEVICE NAME : </p> <?php echo $row['model_name']; ?> .</h4>
              </li>
              <br>
              <li>
                <h4> <p class="type"> <span class="glyphicon glyphicon-hand-right"> </span>    MODEL : </p> <?php echo $row['model']; ?> .</h4>
              </li>
              <br>
               <li>
                <h4> <p class="type"> <span class="glyphicon glyphicon-hand-right"> </span>    KEY ID : </p> <?php echo $row['key_id']; ?> .</h4>
              </li>
              <br>
              <li>
                <h4> <p class="type"> <span class="glyphicon glyphicon-hand-right"> </span>    DATE : </p> <?php echo $row['date']; ?> .</h4>
              </li>
              <br>
              <li>
                <h4> <p class="type"> <span class="glyphicon glyphicon-hand-right"> </span>    IMEI : </p> <?php echo $row['imei']; ?> .</h4>
              </li>
              <br>
              
              
               
               <li>
                <h4> <p class="type"> <span class="glyphicon glyphicon-hand-right"> </span>    VIEWS : </p> <?php echo $row['view']; ?> .</h4>
              </li>
              <br>
              <div class="ads-download">
                <?php echo $ads['ads_d1']; ?>
              </div>
              <br>
              <li> <a  class="link-download"   href="<?php
              
              if($row['link2']){
                  echo $row['link2'];
                  
              }else{
                  echo $row['link'];
              }
          
              ?>"><span class="glyphicon glyphicon-circle-arrow-down"> </span> DOWNLOAD <span class="glyphicon glyphicon-circle-arrow-down
"> </span></a></li>
              <br>
              <div class="ads-download">
              <?php echo $ads['ads_d2']; ?>
              </div>
              <br>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2  hidden-xs">
            <div class="ads-side-download">
              <?php echo $ads['ads_side']; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-area">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ads-footer"> <?php echo $ads['ads_match']; ?> </div>
      </div>
    </div>
  </div>
  <!-- FOOTER -->
 <?php @include('../../layout/footer.php'); ?>

  <!-- .container ENDS -->
  <script src="../../js/jquery-3.3.1.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/plugines.js"></script>
  <a id="back-to-top" href="#" class="btn btn-warning  btn-lg back-to-top" role="button" title="Go To Top Page" data-toggle="tooltip" data-placement="left"><span class="fa fa-angle-double-up "></span></a> </div>
</body>
</html>
