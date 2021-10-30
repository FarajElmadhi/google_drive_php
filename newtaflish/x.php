<?php

$model = 'SM-A300F';

include 'conect.php';

// $stmt = $connect->prepare(" SELECT * FROM `samsung_device` WHERE Model = ?");
// $stmt->execute(array($model));
// $roms = $stmt->fetch();


// function updateView($table){

//     $stmt = $connect->prepare("SELECT view FROM `$table`  WHERE  Model = ? ");

//     $stmt->execute(array($model));
//     $roms = $stmt->fetch();
//     $new_view = intval($roms['view']) + 1;
    
//        $stmt = $connect->prepare("UPDATE samsung_device SET view = ?  WHERE Model = ?");
//        $stmt->execute(array($new_view, $model));

// }


// updateView('samsung_device');

// $full_path =  $_SERVER['PHP_SELF'];

// $a = explode('/', strval($full_path));

// echo $full_path;

// echo $a[count($a) -1];


// print_r(count($array) -1);


// foreach($roms as $row){

//     $r = rand(1276, 9876);
//     $s = 0 ;
//     if($row['view'] != NULL){ $s = intval($row['view']) + $r; }
// $id = $row['Did'];

//    $stmt = $connect->prepare("UPDATE samsung_device SET view = ?  WHERE Did = ?");
//    $stmt->execute(array($s, $id));

// }