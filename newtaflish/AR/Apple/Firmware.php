<?php
@include '../../Connections/conect.php';


$stmt = $connect->prepare(" SELECT * FROM idevice ORDER BY Model ASC");
$stmt->execute();
$roms = $stmt->fetchAll();

$s = $connect->prepare(" SELECT * FROM ads_head WHERE id=?");
$s->execute(array(1));
$ads = $s->fetch();

?>
<html lang="ar">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="تحميل فيرمويرات أبل -افون وايباد وايبود وابل تي في احدث الاصدارات">
<meta name="keywords" content=" فيرموير ابفون,فلاشات ايفون,رومات ايفون,استعادة ايفون,رستور ايفون,حذف رمز ايفون,ازالة باسوورد ايفون,تجاوز قفل ايفون, تفليش ايفون,فرمتة ايفون,فورمات ايفون,فيرموير ايباد,فلاشة ايبادروم ايباد,ازالة رمز ايباد">
<title> فيرموير ابل  </title>
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
<!-- AddToAny END -->
<!-- بداية الشريط العلوي -->
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
              <li class="arabic text-right" ><a href="">العربية</a></li>
              <li role="separator" class="divider"></li>
              <li><a class="text-right" href="../../EN/Apple/Firmware.php">English</a></li>
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
          
          
          <li class="dropdown active" dir="rtl"> <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">آبــل<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a class="text-right"  href="Firmware.php">فيرمويرات آبل </a></li>
            </ul>
          </li>
           <li class="dropdown " dir="rtl"> <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">سوني<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a class="text-right"  href="../Sony/Rom.php">رومات سوني الرسمية</a></li>
              <li role="separator" class="divider"></li>
              <li><a class="text-right"  href="../Sony/Lock_Remove.php">ملفات ضبط المصنع </a></li>
            </ul>
          </li>
           <li class="dropdown" dir="rtl"> <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="text-right">سامسونج<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a   class="text-right" href="../Samsung/Rom_Samsung.php">رومات رسمية</a></li>
              <li role="separator" class="divider"></li>
              <li><a  class="text-right" href="../Samsung/Rom4_Samsung.php">رومات 4 ملفات</a></li>
              <li role="separator" class="divider"></li>
              <li><a  class="text-right" href="../Samsung/Combination.php">رومات كومبينيشن</a></li>
              <li role="separator" class="divider"></li>
              <li><a class="text-right"  href="../Samsung/Root.php">روت وركفري</a></li>
              <li role="separator" class="divider"></li>
              <li><a  class="text-right" href="../Samsung/Modem.php">ملفات مودم </a></li>
              <li role="separator" class="divider"></li>
              <li><a class="text-right"  href="../Samsung/Cert-Samsung.php">ملفات سيرت </a></li>
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
          <h4 class="wow flash" data-wow-duration="4s" data-wow-iteration="100" >IPSW آبــل فيرموير</h4>
        </div>
        <?php  foreach($roms as $row){ ?>
          <div class="mobile-table btn-block text-center "> <a href="View_Firmware.php?Model=<?php echo $row['Model']; ?>">  <div class="file-type ">فيرموير<p><pr> <span class="glyphicon glyphicon glyphicon-eye-open"></span> <?php echo $row['view']; ?></p></div> <?php echo $row['Model_Name']; ?> - <?php echo $row['Model']; ?> - <?php echo $row['Identifier']; ?>  </a></div>
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
              <h4 class="wow flash" data-wow-duration="4s" data-wow-iteration="100" >IPSW آبــل فيرموير</h4>
            </div>
            <table class="table text-capitalize">
              <thead>
                <tr>
                  <th><h4> عدد الزيارات </h4></th>
                  <th><h4>  النوع / الشركة المصنعة</h4></th>
                  <th><h4>اسم الجهاز</h4></th>
                  <th><h4>رقم الطراز</h4></th>
                   <th><h4>ID</h4></th>

                  <th><h4>عرض</h4></th>
                </tr>
              </thead>
              <tbody>
                <?php  foreach($roms as $row){ ?>
                  <tr>
                    <td><h4> <span class="glyphicon glyphicon glyphicon-eye-open"></span> <?php echo $row['view']; ?></h4></td>
                    <td><h4><?php echo $row['Company']; ?>  ( IPSW ) </h4></td>
                    <td><h4><?php echo $row['Model_Name']; ?></h4></td>
                    <td><h4><?php echo $row['Model']; ?></h4></td>
                    <td><h4><?php echo $row['Identifier']; ?></h4></td>
                    <td><a class="link-main" href="View_Firmware.php?Model=<?php echo $row['Model']; ?>" > عرض <span class="fa fa-chevron-right"> </span></a></td>
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
<a id="back-to-top" href="#" class="btn btn-warning  btn-lg back-to-top" role="button" title="الى اعلى الصفحة" data-toggle="tooltip" data-placement="left"><span class="fa fa-angle-double-up "></span></a>
</body>
</html>