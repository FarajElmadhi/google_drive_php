<?php
@include '../../Connections/conect.php';

if (isset($_GET['Fid'])) {
    $id = $_GET['Fid'];
} else {
    header('location: ../../index.php');
    exit();

}
$stmt = $connect->prepare(" SELECT * FROM `fourfiles` WHERE `Fid` = ?");
$stmt->execute(array($id));
$count = $stmt->rowCount();
$row = $stmt->fetch();

$s = $connect->prepare(" SELECT * FROM ads_head WHERE id=?");
$s->execute(array(1));
$ads = $s->fetch();

$view = $row['view'] +1;
$stmt = $connect->prepare("UPDATE `fourfiles` SET view= ?  WHERE `Fid` = ?");
$stmt->execute(array($view, $id));




?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="تحميل روم رباعي - 4 ملفات - لهاتف <?php echo $row['Companny']; ?> <?php echo $row['Model_Name']; ?> <?php echo $row['Model']; ?> اصدار : <?php echo $row['Vrsion']; ?> , بيسبابند : <?php echo $row['Besband']; ?> <?php echo $row['Languages']; ?>" />
<meta name="keywords" content="روم 4 ملفات <?php echo $row['Model_Name']; ?>,روم 4 ملفات <?php echo $row['Model']; ?>,روم عربي 4 ملفات <?php echo $row['Model']; ?>, روم معرب 4 ملفات <?php echo $row['Model']; ?>, روم رسمي 4 ملفات <?php echo $row['Model']; ?>, فورمات <?php echo $row['Model']; ?>,rom <?php echo $row['Model']; ?>,rom <?php echo $row['Model_Name']; ?>,rom arabic <?php echo $row['Model']; ?>, full rom <?php echo $row['Model']; ?>,ضبط مصنع <?php echo $row['Model_Name']; ?>" />
<title>تحميل روم 4 ملفات   <?php echo $row['Model_Name']; ?>  <?php echo $row['Model']; ?> <?php echo $row['Vrsion']; ?>  <?php echo $row['Besband']; ?> <?php echo $row['Languages']; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1  user-scalable=no">

<link rel="shortcut icon" href="../../images/icon.png">


<link rel="stylesheet" href="../../css/bootstrap.css"/>
<link rel="stylesheet" href="../../css/animate.css"/>
<link rel="stylesheet" href="../../css/hover.css"/>
<link rel="stylesheet" href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="../../css/bootstrap-social.css"/>
<link rel="stylesheet" href="../../css/ltr.css"/>
<link rel="stylesheet" href="../../css/rtl.css"/>

<!-- IE Meta -->
<meta http-equiv="X-UA-Combatible" content="IE=edge">
<!-- For Mobile Responsive -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no user-scalable=no">
<script src="../../js/html5shiv.min.js"></script>
<script src="../../js/respond.min.js"></script>


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
        <ul class="nav navbar-nav navbar-right">
         <li class="dropdown"> <a class="dropdown-toggle text-right" data-toggle="dropdown" href="#"><span class="caret"></span> اللغة <span class="glyphicon glyphicon-globe"
></span></a>
            <ul class=" dropdown-menu text-right" >
              <li class="arabic text-right" ><a  href="">العربية</a></li>
              <li role="separator" class="divider"></li>
              <li><a class="text-right" href="../../EN/Samsung/Download_Rom4.php?Fid=<?php echo $row['Fid']; ?>">English</a></li>
            </ul>
          </li>
          
          
          <li><a  class="text-right" href="http://blog.taflish.com/"> المدونة <span class="glyphicon glyphicon-edit
"></span></a></li>
<li><a class="text-right" href="../Contact.php">  اتصل بنا <span class="glyphicon glyphicon-envelope
"></span></a></li>
<li class="active"><a class="text-right" href="../index.php"> الرئيسية <span class="glyphicon glyphicon-home

"></span></a></li>
         
        </ul>
        <ul class="nav navbar-nav ">
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
        <div class="carousel-caption"><img class="img-responsive" src="../../images/logo1.png">
        </div>
      </div>
      <div class="item">
        <div class="carousel-caption"> <br>
          <br>
          <br>
          <br>
          <br>
          <h2>تفليش<small style="color:#ff0">.<sub>كوم</sub></small></h2>
          <h3>. تحميل جميع أنظمة تشغيل الهواتف بسهولة</h3>
          <br>
          <br>
          <br>
          <div> <small>Powered by <a style="color:#ff0" href="">Taflish Script</a> Version 2.1 | &copy; 2017 - 2018, all rights reserved.</small> </div>  </div>
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
      <div class="navbar-header" >
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
        <ul class="nav navbar-nav navbar-right">
         
         
          <li class="dropdown"  dir="rtl"> <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">نوكيا<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a class="text-right " href="../Nokia/Flashes.php"  >فلاشات نوكيا</a></li>
            </ul>
          </li>
          
          
          <li class="dropdown" dir="rtl"> <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">آبــل<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a class="text-right"  href="../Apple/Firmware.php">فيرمويرات آبل </a></li>
            </ul>
          </li>
           <li class="dropdown" dir="rtl"> <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">سوني<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a class="text-right"  href="../Sony/Rom.php">رومات سوني الرسمية</a></li>
              <li role="separator" class="divider"></li>
              <li><a class="text-right"  href="../Sony/Lock_Remove.php">ملفات ضبط المصنع </a></li>
            </ul>
          </li>
           <li class="dropdown active " dir="rtl"> <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="text-right">سامسونج<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a   class="text-right" href="Rom_Samsung.php">رومات رسمية</a></li>
              <li role="separator" class="divider"></li>
              <li><a  class="text-right" href="Rom4_Samsung.php">رومات 4 ملفات</a></li>
              <li role="separator" class="divider"></li>
              <li><a  class="text-right" href="Combination.php">رومات كومبينيشن</a></li>
              <li role="separator" class="divider"></li>
              <li><a class="text-right"  href="Root.php">روت وركفري</a></li>
              <li role="separator" class="divider"></li>
              <li><a  class="text-right" href="Modem.php">ملفات مودم </a></li>
              <li role="separator" class="divider"></li>
              <li><a class="text-right"  href="Cert-Samsung.php">ملفات سيرت </a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav ">
          <form class="navbar-form navbar-left" action="../Search.php" method="post">
            <div class="form-group" dir="rtl">
              <input name="search" type="text" class="form-control wow pulse "   placeholder="بــحث ... ">
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
              <h4 class="wow flash" data-wow-duration="4s" data-wow-iteration="100" ><?php echo $row['Companny']; ?> - <?php echo $row['Model']; ?>  تحميل روم 4 ملفات لهاتف  </h4>
            </div>
            <div class="info-device" dir="rtl"> <br>
              <li>
                <h4> <p class="type"> <span class="glyphicon glyphicon-hand-left"> </span>   نوع الملف : </p> روم اصلاحي  ( روم 4 ملفات ) .</h4>
              </li>
              <br>
              <li>
                <h4> <p class="type"> <span class="glyphicon glyphicon-hand-left"> </span>   الشركة المصنعة : </p> <?php echo $row['Companny']; ?>  .</h4>
              </li>
              <br>
              <li>
                <h4> <p class="type"> <span class="glyphicon glyphicon-hand-left"> </span>    اسم الجهاز : </p> <?php echo $row['Model_Name']; ?> .</h4>
              </li>
              <br>
              <li>
                <h4> <p class="type"> <span class="glyphicon glyphicon-hand-left"> </span>    رقم الطراز : </p> <?php echo $row['Model']; ?> .</h4>
              </li>
              <br>
               <li>
                <h4> <p class="type"> <span class="glyphicon glyphicon-hand-left"> </span>    البيسباند : </p> <?php echo $row['Besband']; ?> .</h4>
              </li>
              <br>
               <li>
               <h4> <p class="type"> <span class="glyphicon glyphicon-hand-left"> </span>    اصدار أندرويد : </p> <?php echo $row['Vrsion']; ?> .</h4>
              </li>
              <br>
               <li>
                <h4> <p class="type"> <span class="glyphicon glyphicon-hand-left"> </span>    المنطقة : </p> <?php echo $row['Languages']; ?> .</h4>
              </li>
              <br>
               <li>
                <h4> <p class="type"> <span class="glyphicon glyphicon-hand-left"> </span>    معلومات : </p> <?php echo $row['About']; ?> .</h4>
              </li>
              <br>
                <li>
                <h4> <p class="type"> <span class="glyphicon glyphicon-hand-left"> </span>    عدد مرات التحميل : </p> <?php echo $row['view']; ?> .</h4>
              </li>
              <br>
              <div class="ads-download">
                <?php echo $ads['ads_d1']; ?>
              </div>
              <br>
              <li> <a   class="link-download" href="<?php echo $row['Link1']; ?>"><span class="glyphicon glyphicon-circle-arrow-down"> </span> DOWNLOAD <span class="glyphicon glyphicon-circle-arrow-down
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
</div>
<script src="../../js/jquery-3.3.1.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/plugines.js"></script>
<a id="back-to-top" href="#" class="btn btn-warning  btn-lg back-to-top" role="button" title="الى اعلى الصفحة" data-toggle="tooltip" data-placement="left"><span class="fa fa-angle-double-up "></span></a>
</body>
</html>