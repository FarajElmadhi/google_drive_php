<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: Login_Admin.php');
    exit();
}
@include '../Connections/conect.php';

@include 'layout/header.php';

$type = isset($_GET['type']) ? $_GET['type'] : 'home';

if ($type == 'home') {

    header('location: index.php');
    exit();

} elseif ($type == 'STOCK') {

    $stmt = $connect->prepare(" SELECT * FROM samsung_device ORDER BY `Did` DESC");
    $stmt->execute();
    $stock = $stmt->fetchAll();
    ?>
              <button type="button"  class="btn btn-block btn-primary" data-toggle="modal" data-target="#modalAddStockDevice" data-whatever="@mdo"><i class="fa fa-folder fw-r10"></i>اضافة جهاز للروم الرسمي </button>



<div class="container-folder">
    <?php foreach ($stock as $v) {
        
        $m = $v['Model'];
        $mn = $v['Model_Name'];

        ?>
  <div class="col-md-12 col-xs-12 ">
    <div class="folder-img">
        <a href="show.php?&c=sam&t=stock&m=<?php echo $v['Model']; ?>&mn=<?php echo $v['Model_Name']; ?>" >
        <img src="images/folder.png" class="img-responsive folder-image"  >
        <span class="folder-name"><?php echo '[' . $v['Did'] . '] ' . 'SAMSUNG STOCK ROM - ' . $v['Model_Name'] . ' - ' . $v['Model']; ?>
</span>

        </a>

        <button type="button" data-href="delete.php?company=samsung&type=stock&d=device&id=<?php echo $v['Did']; ?>"  class="btn bg-maroon btn-sm" data-toggle="modal" data-target="#confirm-delete" data-whatever="@edit"><i class="fa fa-remove"></i>  حذف  </button>
        <button type="button" data-href="add.php?do=stocklink&m=<?php echo $m;?>&mn=<?php  echo $mn;?>&id=<?php echo $v['Did']; ?>" class="btn bg-blue btn-sm" data-toggle="modal" data-target="#modalAddStockLink" data-whatever="@mdo"><i class="fa fa-folder fw-r10"></i>اضافة  روم  </button>

      </div>

  </div>

      <?php }?>
</div>



<!-- ==========================\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\===================== -->

<?php
} elseif ($type == '4FILES') {

    $stmt = $connect->prepare(" SELECT * FROM  rom4_device ORDER BY `r4did` DESC");
    $stmt->execute();
    $four = $stmt->fetchAll();
    ?>
              <button type="button"  class="btn btn-block btn-primary" data-toggle="modal" data-target="#modalAdd4Device" data-whatever="@mdo"><i class="fa fa-folder fw-r10"></i>اضافة جهاز للروم الرباعي </button>



<div class="container-folder">
    <?php foreach ($four as $v) {
        
        
        $m = $v['Model'];
        $mn = $v['Model_Name'];
        
        ?>
  <div class="col-md-12 col-xs-12 ">
    <div class="folder-img">
        <a href="show.php?&c=sam&t=flink&m=<?php echo $v['Model']; ?>&mn=<?php echo $v['Model_Name']; ?>" >
        <img src="images/folder.png" class="img-responsive folder-image"  >
        <span class="folder-name"><?php echo '[' . $v['r4did'] . '] ' . 'SAMSUNG 4 Files ROM - ' . $v['Model_Name'] . ' - ' . $v['Model']; ?>
</span>

        </a>
        <button type="button" data-href="delete.php?company=samsung&type=4&d=device&id=<?php echo $v['r4did']; ?>"  class="btn bg-maroon btn-sm" data-toggle="modal" data-target="#confirm-delete" data-whatever="@edit"><i class="fa fa-remove"></i>  حذف  </button>
        <button type="button" data-href="add.php?do=4link&m=<?php echo $m;?>&mn=<?php  echo $mn;?>&id=<?php echo $v['Did']; ?>" class="btn bg-blue btn-sm" data-toggle="modal" data-target="#modalAdd4Link" data-whatever="@mdo"><i class="fa fa-folder fw-r10"></i>اضافة  روم  </button>

      </div>

  </div>

      <?php }?>
</div>
<!-- ==========================\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\===================== -->

<!-- ==========================\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\===================== -->

<?php
} elseif ($type == 'COMBINATION') {

    $stmt = $connect->prepare(" SELECT * FROM  combination_device ORDER BY `cdid` DESC");
    $stmt->execute();
    $four = $stmt->fetchAll();
    ?>
              <button type="button"  class="btn btn-block btn-primary" data-toggle="modal" data-target="#modalAddCombDevice" data-whatever="@mdo"><i class="fa fa-folder fw-r10"></i>اضافة جهاز  كومبينيشن </button>



<div class="container-folder">
    <?php foreach ($four as $v) {
        
        $m = $v['Model'];
        $mn = $v['Model_Name'];
        
        ?>
  <div class="col-md-12 col-xs-12 ">
    <div class="folder-img">
        <a href="show.php?&c=sam&t=comb&m=<?php echo $v['Model']; ?>&mn=<?php echo $v['Model_Name']; ?>" >
        <img src="images/folder.png" class="img-responsive folder-image"  >
        <span class="folder-name"><?php echo '[' . $v['cdid'] . '] ' . 'SAMSUNG COMBINATION ROM - ' . $v['Model_Name'] . ' - ' . $v['Model']; ?>
</span>

        </a>
        <button type="button" data-href="delete.php?company=samsung&type=comb&d=device&id=<?php echo $v['cdid']; ?>"  class="btn bg-maroon btn-sm" data-toggle="modal" data-target="#confirm-delete" data-whatever="@edit"><i class="fa fa-remove"></i>  حذف  </button>
        <button type="button" data-href="add.php?do=comblink&m=<?php echo $m;?>&mn=<?php  echo $mn;?>&id=<?php echo $v['cdid']; ?>" class="btn bg-blue btn-sm" data-toggle="modal" data-target="#modalAddCombLink" data-whatever="@mdo"><i class="fa fa-folder fw-r10"></i>اضافة  كمبينيشن  </button>

      </div>

  </div>

      <?php }?>
</div>
<!-- ==========================\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\===================== -->


<?php
} elseif ($type == 'CERT') {

    $stmt = $connect->prepare(" SELECT * FROM  cert_device ORDER BY `cedid` DESC");
    $stmt->execute();
    $four = $stmt->fetchAll();
    ?>
              <button type="button"  class="btn btn-block btn-primary" data-toggle="modal" data-target="#modalAddCertDevice" data-whatever="@mdo"><i class="fa fa-folder fw-r10"></i>اضافة جهاز  سيرت </button>



<div class="container-folder">
    <?php foreach ($four as $v) {
        
        $m = $v['model'];
        $mn = $v['model_name'];
        
        ?>
  <div class="col-md-12 col-xs-12 ">
    <div class="folder-img">
        <a href="show.php?&c=sam&t=cert&m=<?php echo $v['model']; ?>&mn=<?php echo $v['model_name']; ?>" >
        <img src="images/folder.png" class="img-responsive folder-image"  >
        <span class="folder-name"><?php echo '[' . $v['cedid'] . '] ' . 'SAMSUNG CERT - ' . $v['model_name'] . ' - key id:  ' . $v['keyid'] . ' - ' . $v['model']; ?>
</span>

        </a>
        <button type="button" data-href="delete.php?company=samsung&type=cert&d=device&id=<?php echo $v['cedid']; ?>"  class="btn bg-maroon btn-sm" data-toggle="modal" data-target="#confirm-delete" data-whatever="@edit"><i class="fa fa-remove"></i>  حذف  </button>
        <button type="button" data-href="add.php?do=certlink&m=<?php echo $m;?>&mn=<?php  echo $mn;?>&id=<?php echo $v['cedid']; ?>" class="btn bg-blue btn-sm" data-toggle="modal" data-target="#modalAddCertLink" data-whatever="@mdo"><i class="fa fa-folder fw-r10"></i>اضافة  سيرت  </button>

      </div>

  </div>

      <?php }?>
</div>
<!-- ==========================\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\===================== -->

<?php
} elseif ($type == 'ROOT') {

    $stmt = $connect->prepare(" SELECT * FROM  root_device ORDER BY `rdid` DESC");
    $stmt->execute();
    $four = $stmt->fetchAll();
    ?>
              <button type="button"  class="btn btn-block btn-primary" data-toggle="modal" data-target="#modalAddRootDevice" data-whatever="@mdo"><i class="fa fa-folder fw-r10"></i>اضافة جهاز  روت </button>



<div class="container-folder">
    <?php foreach ($four as $v) {
          $m = $v['Model'];
          $mn = $v['Model_Name'];
          
        ?>
  <div class="col-md-12 col-xs-12 ">
    <div class="folder-img">
        <a href="show.php?&c=sam&t=root&m=<?php echo $v['Model']; ?>&mn=<?php echo $v['Model_Name']; ?>" >
        <img src="images/folder.png" class="img-responsive folder-image"  >
        <span class="folder-name"><?php echo '[' . $v['rdid'] . '] ' . 'SAMSUNG Root  - ' . $v['Model_Name'] . ' - ' . $v['Model']; ?>
</span>

        </a>
        <button type="button" data-href="delete.php?company=samsung&type=root&d=device&id=<?php echo $v['rdid']; ?>"  class="btn bg-maroon btn-sm" data-toggle="modal" data-target="#confirm-delete" data-whatever="@edit"><i class="fa fa-remove"></i>  حذف  </button>
        <button type="button" data-href="add.php?do=rootlink&m=<?php echo $m;?>&mn=<?php  echo $mn;?>&id=<?php echo $v['rdid']; ?>" class="btn bg-blue btn-sm" data-toggle="modal" data-target="#modalAddRootLink" data-whatever="@mdo"><i class="fa fa-folder fw-r10"></i>اضافة  root  </button>

      </div>

  </div>

      <?php }?>
</div>
<!-- ==========================\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\===================== -->




<?php
} elseif ($type == 'MODEM') {

    $stmt = $connect->prepare(" SELECT * FROM  modem_device ORDER BY `mdid` DESC");
    $stmt->execute();
    $four = $stmt->fetchAll();
    ?>
              <button type="button"  class="btn btn-block btn-primary" data-toggle="modal" data-target="#modalAddModemDevice" data-whatever="@mdo"><i class="fa fa-folder fw-r10"></i>اضافة جهاز  مودم </button>



<div class="container-folder">
    <?php foreach ($four as $v) {
          $m = $v['Model'];
          $mn = $v['Model_Name'];
          
        ?>
  <div class="col-md-12 col-xs-12 ">
    <div class="folder-img">
        <a href="show.php?&c=sam&t=modem&m=<?php echo $v['Model']; ?>&mn=<?php echo $v['Model_Name']; ?>" >
        <img src="images/folder.png" class="img-responsive folder-image"  >
        <span class="folder-name"><?php echo '[' . $v['mdid'] . '] ' . 'SAMSUNG MODEM  - ' . $v['Model_Name'] . ' - ' . $v['Model']; ?>
</span>

        </a>
        <button type="button" data-href="delete.php?company=samsung&type=modem&d=device&id=<?php echo $v['mdid']; ?>"  class="btn bg-maroon btn-sm" data-toggle="modal" data-target="#confirm-delete" data-whatever="@edit"><i class="fa fa-remove"></i>  حذف  </button>
        <button type="button" data-href="add.php?do=modemlink&m=<?php echo $m;?>&mn=<?php  echo $mn;?>&id=<?php echo $v['mdid']; ?>" class="btn bg-blue btn-sm" data-toggle="modal" data-target="#modalAddModemLink" data-whatever="@mdo"><i class="fa fa-folder fw-r10"></i>اضافة  modem  </button>

      </div>

  </div>

      <?php }?>
</div>
<!-- ==========================\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\===================== -->








<?php

}

@include 'layout/footer.php';

?>










</html>



