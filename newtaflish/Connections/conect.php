<?php
$dsn = 'mysql:host=localhost;dbname=taflish';
$user = 'root';
$pass = '';
$option = array(

    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    // PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8",

);

try {

    $connect = new PDO($dsn, $user, $pass, $option);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// @include 'UpdateViewClass.php';
// $cl= new UpdateViewClass();
// $cl->init($connect);



} catch (PDOException $e) {
    echo "Filed To Connect" . $e->getMessage();

}
