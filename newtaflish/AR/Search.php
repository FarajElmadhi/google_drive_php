<?php
@include '../Connections/conect.php';


$s = $connect->prepare(" SELECT * FROM ads_head WHERE id=?");
$s->execute(array(1));
$ads = $s->fetch();
?>



<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="الموقع الشامل لتحميل الرومات والفلاشات والروت لجميع أنواع الجوالات, سامسونج , سوني , ايفون , نوكيا , أندرويد , والمزيد ..">
<meta name="keywords" content="سامسوني,سامسونغ,سوني,غالاكسي,إكسبريا,أندرويد,روم,جوال,Samsung,Sony,Galaxy,Xperia,Android,Rom,Mobileوnokia,root,iphone,htc,jailbreak,جلبريكو,الروماتالرسمية ,رومات سامسونج">
<title>البحث</title>
<meta name="viewport" content="width=device-width, initial-scale=1  user-scalable=no">
<link rel="shortcut icon" href="../images/icon.png">
<link rel="stylesheet" href="../css/bootstrap.css"/>
<link rel="stylesheet" href="../css/animate.css"/>
<link rel="stylesheet" href="../css/hover.css"/>
<link rel="stylesheet" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="../css/bootstrap-social.css"/>
<link rel="stylesheet" href="../css/ltr.css"/>
<link rel="stylesheet" href="../css/rtl.css"/>

<!-- IE Meta -->
<meta http-equiv="X-UA-Combatible" content="IE=edge">
<!-- For Mobile Responsive -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no user-scalable=no">
<script src="../js/html5shiv.min.js"></script>
<script src="../js/respond.min.js"></script>
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
         <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span> اللغة <span class="glyphicon glyphicon-globe"
></span></a>
            <ul class=" dropdown-menu" >
              <li class="arabic text-right" ><a href="../AR/Samsung/Rom_Samsung.php">العربية</a></li>
              <li role="separator" class="divider"></li>
              <li><a class="text-right" href="index.php">English</a></li>
            </ul>
          </li>
          
          
          <li><a href="http://blog.taflish.com/"> المدونة <span class="glyphicon glyphicon-edit
"></span></a></li>
<li><a href="Contact.php">  اتصل بنا <span class="glyphicon glyphicon-envelope
"></span></a></li>
<li class="active"><a href="../index.php"> الرئيسية <span class="glyphicon glyphicon-home

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
        <div class="carousel-caption"><img class="img-responsive" src="../images/logo1.png">
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
        <div class="carousel-caption"><img class="img-responsive" src="../images/logo1.png"></div>
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
         
         
          <li class="dropdown"  dir="rtl"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">نوكيا<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a class="text-right " href="Nokia/Flashes.php"  >فلاشات نوكيا</a></li>
            </ul>
          </li>
          
          
          <li class="dropdown" dir="rtl"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">آبــل<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a class="text-right"  href="Apple/Firmware.php">فيرمويرات آبل </a></li>
            </ul>
          </li>
           <li class="dropdown" dir="rtl"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">سوني<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a class="text-right"  href="Sony/Rom.php">رومات سوني الرسمية</a></li>
              <li role="separator" class="divider"></li>
              <li><a class="text-right"  href="Sony/Lock_Remove.php">ملفات ضبط المصنع </a></li>
            </ul>
          </li>
           <li class="dropdown  " dir="rtl"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">سامسونج<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a   class="text-right" href="Samsung/Rom_Samsung.php">رومات رسمية</a></li>
              <li role="separator" class="divider"></li>
              <li><a  class="text-right" href="Samsung/Rom4_Samsung.php">رومات 4 ملفات</a></li>
              <li role="separator" class="divider"></li>
              <li><a  class="text-right" href="Samsung/Combination.php">رومات كومبينيشن</a></li>
              <li role="separator" class="divider"></li>
              <li><a class="text-right"  href="Samsung/Root.php">روت وركفري</a></li>
              <li role="separator" class="divider"></li>
              <li><a  class="text-right" href="Samsung/Modem.php">ملفات مودم </a></li>
              <li role="separator" class="divider"></li>
              <li><a class="text-right"  href="Samsung/Cert-Samsung.php">ملفات سيرت </a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav ">
          <form class="navbar-form navbar-left" action="Search.php" method="post">
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

<br><br><br><br>

        <h1 class="text-center"  style="color:red; margin:0; font-size:100px; line-height:150px; font-weight:bold;">404</h1>
<h2 class="text-center" style="margin-top:20px;font-size: 30px;">Not Found
</h2>
<p class="text-center">The resource requested could not be found on this server!</p>  
   <br><br><br>
  <!-- FOOTER -->
 <?php @include('../layout/footer.php'); ?>

<!-- .container ENDS -->
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/plugines.js"></script>
<a id="back-to-top" href="#" class="btn btn-warning  btn-lg back-to-top" role="button" title="الى اعلى الصفحة" data-toggle="tooltip" data-placement="left"><span class="fa fa-angle-double-up "></span></a>
</body>
</html>
