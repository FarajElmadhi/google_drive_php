<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: Login_Admin.php');
    exit();
}
@include '../Connections/conect.php';

$company = isset($_GET['company']) ? $_GET['company'] : 'home';
$type = isset($_GET['type']) ? $_GET['type']: 'home';
$id = isset($_GET['id']) ? $_GET['id']: 'home';
$d = isset($_GET['d']) ? $_GET['d']: 'home';

if($company == 'samsung'){

if($type == 'stock'){

    if($d == 'device'){

        $stmt = $connect->prepare("DELETE FROM samsung_device WHERE Did = :zid");
        $stmt->bindParam(":zid" , $id);
        $stmt->execute();
    }elseif($d == 'link') {
        
        $stmt = $connect->prepare("DELETE FROM offecial WHERE `Oid` = :zid");
        $stmt->bindParam(":zid" , $id);
        $stmt->execute();


    }
}elseif($type == '4'){

    if($d == 'device'){

        $stmt = $connect->prepare("DELETE FROM rom4_device WHERE r4did = :zid");
        $stmt->bindParam(":zid" , $id);
        $stmt->execute();
    }elseif($d == 'link') {
        
        $stmt = $connect->prepare("DELETE FROM fourfiles WHERE `Fid` = :zid");
        $stmt->bindParam(":zid" , $id);
        $stmt->execute();


    }
}elseif($type == 'comb'){

    if($d == 'device'){

        $stmt = $connect->prepare("DELETE FROM combination WHERE Cid = :zid");
        $stmt->bindParam(":zid" , $id);
        $stmt->execute();
    }elseif($d == 'link') {
        
        $stmt = $connect->prepare("DELETE FROM combination WHERE `Cid` = :zid");
        $stmt->bindParam(":zid" , $id);
        $stmt->execute();


    }
}elseif($type == 'cert'){

    if($d == 'device'){

        $stmt = $connect->prepare("DELETE FROM cert_device WHERE cedid = :zid");
        $stmt->bindParam(":zid" , $id);
        $stmt->execute();
    }elseif($d == 'link') {
        
        $stmt = $connect->prepare("DELETE FROM `cert` WHERE `ceid` = :zid");
        $stmt->bindParam(":zid" , $id);
        $stmt->execute();


    }
}elseif($type == 'root'){

    if($d == 'device'){

        $stmt = $connect->prepare("DELETE FROM root_device WHERE rdid = :zid");
        $stmt->bindParam(":zid" , $id);
        $stmt->execute();
    }elseif($d == 'link') {
        
        $stmt = $connect->prepare("DELETE FROM `root` WHERE `ROid` = :zid");
        $stmt->bindParam(":zid" , $id);
        $stmt->execute();


    }
}elseif($type == 'modem'){

    if($d == 'device'){

        $stmt = $connect->prepare("DELETE FROM modem_device WHERE mdid = :zid");
        $stmt->bindParam(":zid" , $id);
        $stmt->execute();
    }elseif($d == 'link') {
        
        $stmt = $connect->prepare("DELETE FROM `modem` WHERE `MOid` = :zid");
        $stmt->bindParam(":zid" , $id);
        $stmt->execute();


    }
}


}

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
?>





</html>



