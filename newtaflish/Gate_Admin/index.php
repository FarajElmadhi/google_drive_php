<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: Login_Admin.php');
    exit();
}
@include '../Connections/conect.php';

@include 'layout/header.php';

$company = isset($_GET['company']) ? $_GET['company'] : 'home';

if ($company == 'home') {

    $cat = ['SAMSUNG', 'SONY', 'APPLE', 'NOKIA']
    ?>


<div class="container-folder">
    <?php foreach ($cat as $v) {?>
  <div class="  col-lg-3 col-md-3 col-sm-4 col-xs-12 no-margin ">
    <div class="folder-img">
        <a href="index.php?company=<?php echo $v; ?>" >
        <img src="images/folder.png" class="img-responsive folder-image">
        <div class="folder-name"><?php echo $v; ?></div>
        </a>
      </div>
  </div>
      <?php }?>
</div>


<?php } elseif ($company == 'SAMSUNG') {
$samsung = ['STOCK', 'COMBINATION', 'ROOT', 'CERT', 'MODEM', '4FILES'];

?>



<div class="container-folder">
    <?php foreach ($samsung as $v) {?>
  <div class="  col-lg-3 col-md-3 col-sm-4 col-xs-12 no-margin ">
    <div class="folder-img">
        <a href="samsung.php?type=<?php echo $v; ?>" >
        <img src="images/folder.png" class="img-responsive folder-image">
        <div class="folder-name"><?php echo $v; ?></div>
        </a>
      </div>
  </div>
      <?php }?>
</div>


<?php
}?>

</html>



