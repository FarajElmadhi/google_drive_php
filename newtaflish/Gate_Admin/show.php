<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: Login_Admin.php');
    exit();
}
@include '../Connections/conect.php';
@include 'layout/header.php';


$c = isset($_GET['c']) ? $_GET['c'] : 'home';
$t = isset($_GET['t']) ? $_GET['t'] : 'home';
$m= isset($_GET['m']) ? $_GET['m'] : 'home';
$mn= isset($_GET['mn']) ? $_GET['mn'] : 'home';

 
if($c== 'sam'){
    if($t=='stock'){

        $stmt = $connect->prepare(" SELECT * FROM offecial WHERE Modell = ? ");
        $stmt->execute(array($m));
        $stock = $stmt->fetchAll();
?>

<button type="button" data-href="add.php?do=stocklink&m=<?php echo $m;?>&mn=<?php  echo $mn;?>" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modalAddStockLink" data-whatever="@mdo"><i class="fa fa-folder fw-r10"></i>اضافة  روم  </button>

<div class="container-folder">
    <?php foreach ($stock as $v) {
        
        // $m = $v['Model'];
        $mn = $v['Model_Name'];

        ?>
  <div class="col-md-12 col-xs-12 ">
    <div class="folder-img">
        <a target='_blank' href="../EN/Samsung/Download_Rom.php?Oid=<?php echo $v['Oid']; ?>" >
        <img src="images/file.png" class="img-responsive folder-image"  >
        <span class="folder-name"><?php echo '[' . $v['Oid'] . '] ' . 'SAMSUNG STOCK ROM - ' . $v['Model_Name'] . ' - ' . $v['Modell'] . ' -v ' . $v['Vrsion'] . ' -Baseband: ' . $v['Besband']; ?>
</span>

        </a>

        <a target='_blank' type="button" class="btn bg-orange btn-sm" href="<?php echo $v['Link1']; ?>"> الرابط</a>

        <button type="button" data-href="delete.php?company=samsung&type=stock&d=link&id=<?php echo $v['Oid']; ?>"  class="btn bg-maroon btn-sm" data-toggle="modal" data-target="#confirm-delete" data-whatever="@edit"><i class="fa fa-remove"></i> حذف  </button>

      </div>

  </div>

      <?php }?>
</div>



<!-- ==========================\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\===================== -->



<?php
    }elseif($t=='comb'){
        
        $stmt = $connect->prepare(" SELECT * FROM combination WHERE Model = ? ");
        $stmt->execute(array($m));
        $stock = $stmt->fetchAll();
?>

<button type="button" data-href="add.php?do=comblink&m=<?php echo $m;?>&mn=<?php  echo $mn;?>" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modalAddCombLink" data-whatever="@mdo"><i class="fa fa-folder fw-r10"></i>اضافة  روم  </button>

<div class="container-folder">
    <?php foreach ($stock as $v) {
        
        // $m = $v['Model'];
        $mn = $v['Model_Name'];

        ?>
  <div class="col-md-12 col-xs-12 ">
    <div class="folder-img">
        <a target='_blank' href="../EN/Samsung/Download_Combination.php?Cid=<?php echo $v['Cid']; ?>" >
        <img src="images/file.png" class="img-responsive folder-image"  >
        <span class="folder-name"><?php echo '[' . $v['Cid'] . '] ' . 'SAMSUNG COMBINATION ROM - ' . $v['Model_Name'] . ' - ' . $v['Model'] . ' -Baseband: ' . $v['Besband']; ?>
</span>

        </a>

        <a target='_blank' type="button" class="btn bg-orange btn-sm" href="<?php echo $v['Link1']; ?>"> الرابط</a>

        <button type="button" data-href="delete.php?company=samsung&type=comb&d=link&id=<?php echo $v['Cid']; ?>" 
         class="btn bg-maroon btn-sm" data-toggle="modal" data-target="#confirm-delete" data-whatever="@edit"> حذف  </button>

      </div>

  </div>

      <?php }?>
</div>



<!-- ==========================\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\===================== -->



<?php
    }elseif($t=='flink'){
        
        $stmt = $connect->prepare(" SELECT * FROM fourfiles WHERE Model = ? ");
        $stmt->execute(array($m));
        $stock = $stmt->fetchAll();
?>

<button type="button" data-href="add.php?do=4link&m=<?php echo $m;?>&mn=<?php  echo $mn;?>" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modalAdd4Link" data-whatever="@mdo"><i class="fa fa-folder fw-r10"></i>اضافة  روم رباعي  </button>

<div class="container-folder">
    <?php foreach ($stock as $v) {
        
        // $m = $v['Model'];
        $mn = $v['Model_Name'];

        ?>
  <div class="col-md-12 col-xs-12 ">
    <div class="folder-img">
        <a target='_blank' href="../EN/Samsung/Download_Combination.php?Cid=<?php echo $v['Cid']; ?>" >
        <img src="images/file.png" class="img-responsive folder-image"  >
        <span class="folder-name"><?php echo '[' . $v['Fid'] . '] ' . 'SAMSUNG COMBINATION ROM - ' . $v['Model_Name'] . ' - ' . $v['Model'] . ' -Baseband: ' . $v['Besband']; ?>
</span>

        </a>

        <a target='_blank' type="button" class="btn bg-orange btn-sm" href="<?php echo $v['Link1']; ?>"> الرابط</a>

        <button type="button" data-href="delete.php?company=samsung&type=4&d=link&id=<?php echo $v['Fid']; ?>" 
         class="btn bg-maroon btn-sm" data-toggle="modal" data-target="#confirm-delete" data-whatever="@edit"> حذف  </button>

      </div>

  </div>

      <?php }?>
</div>



<!-- ==========================\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\===================== -->



<?php
    }elseif($t=='cert'){
        
        $stmt = $connect->prepare(" SELECT * FROM `cert` WHERE model = ? ");
        $stmt->execute(array($m));
        $stock = $stmt->fetchAll();
?>

<button type="button" data-href="add.php?do=cert&m=<?php echo $m;?>&mn=<?php  echo $mn;?>" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modalAddCertLink" data-whatever="@mdo"><i class="fa fa-folder fw-r10"></i>اضافة  سيرت  </button>

<div class="container-folder">
    <?php foreach ($stock as $v) {
        
        // $m = $v['Model'];
        $mn = $v['model_name'];

        ?>
  <div class="col-md-12 col-xs-12 ">
    <div class="folder-img">
        <a target='_blank' href="../EN/Samsung/Download-Cert.php?ceid=<?php echo $v['ceid']; ?>" >
        <img src="images/file.png" class="img-responsive folder-image"  >
        <span class="folder-name"><?php echo '[' . $v['ceid'] . '] ' . 'SAMSUNG Cert  - ' . $v['model_name'] . ' - ' . $v['model'] . ' -key id: ' . $v['key_id']; ?>
</span>

        </a>

        <a target='_blank' type="button" class="btn bg-orange btn-sm" href="<?php echo $v['link']; ?>"> الرابط</a>

        <button type="button" data-href="delete.php?company=samsung&type=cert&d=link&id=<?php echo $v['ceid']; ?>" 
         class="btn bg-maroon btn-sm" data-toggle="modal" data-target="#confirm-delete" data-whatever="@edit"> حذف  </button>

      </div>

  </div>

      <?php }?>
</div>



<!-- ==========================\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\===================== -->



<?php
    }elseif($t=='root'){
        
        $stmt = $connect->prepare(" SELECT * FROM `root` WHERE model = ? ");
        $stmt->execute(array($m));
        $stock = $stmt->fetchAll();
?>

<button type="button" data-href="add.php?do=cert&m=<?php echo $m;?>&mn=<?php  echo $mn;?>" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modalAddCertLink" data-whatever="@mdo"><i class="fa fa-folder fw-r10"></i>اضافة  سيرت  </button>

<div class="container-folder">
    <?php foreach ($stock as $v) {
        
        // $m = $v['Model'];
        $mn = $v['Model_Name'];

        ?>
  <div class="col-md-12 col-xs-12 ">
    <div class="folder-img">
        <a target='_blank' href="../EN/Samsung/Download_Root.php?ROid=<?php echo $v['ROid']; ?>" >
        <img src="images/file.png" class="img-responsive folder-image"  >
        <span class="folder-name"><?php echo '[' . $v['ROid'] . '] ' . 'SAMSUNG Cert  - ' . $v['Model_Name'] . ' - ' . $v['Model']  ?>
</span>

        </a>

        <a target='_blank' type="button" class="btn bg-orange btn-sm" href="<?php echo $v['Link1']; ?>"> الرابط</a>

        <button type="button" data-href="delete.php?company=samsung&type=root&d=link&id=<?php echo $v['ROid']; ?>" 
         class="btn bg-maroon btn-sm" data-toggle="modal" data-target="#confirm-delete" data-whatever="@edit"> حذف  </button>

      </div>

  </div>

      <?php }?>
</div>



<!-- ==========================\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\===================== -->



<?php
    }elseif($t=='modem'){
        
        $stmt = $connect->prepare(" SELECT * FROM `modem` WHERE model = ? ");
        $stmt->execute(array($m));
        $stock = $stmt->fetchAll();
?>

<button type="button" data-href="add.php?do=modemlink&m=<?php echo $m;?>&mn=<?php  echo $mn;?>" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modalAddModemLink" data-whatever="@mdo"><i class="fa fa-folder fw-r10"></i>اضافة  modem  </button>

<div class="container-folder">
    <?php foreach ($stock as $v) {
        
        // $m = $v['Model'];
        $mn = $v['Model_Name'];

        ?>
  <div class="col-md-12 col-xs-12 ">
    <div class="folder-img">
        <a target='_blank' href="../EN/Samsung/Download_Root.php?MOid=<?php echo $v['MOid']; ?>" >
        <img src="images/file.png" class="img-responsive folder-image"  >
        <span class="folder-name"><?php echo '[' . $v['MOid'] . '] ' . 'SAMSUNG Cert  - ' . $v['Model_Name'] . ' - ' . $v['Model']  ?>
</span>

        </a>

        <a target='_blank' type="button" class="btn bg-orange btn-sm" href="<?php echo $v['Link1']; ?>"> الرابط</a>

        <button type="button" data-href="delete.php?company=samsung&type=modem&d=link&id=<?php echo $v['MOid']; ?>" 
         class="btn bg-maroon btn-sm" data-toggle="modal" data-target="#confirm-delete" data-whatever="@edit"> حذف  </button>

      </div>

  </div>

      <?php }?>
</div>



<!-- ==========================\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\===================== -->



<?php
    }
}
@include 'layout/footer.php';

?>










</html>
