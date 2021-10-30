<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: Login_Admin.php');
    exit();
}
@include '../Connections/conect.php';

$do = isset($_GET['do']) ? $_GET['do'] : 'home';


if($do == 'sadevice'){

$m= $_POST['m'];
$mn = $_POST['mn'];
$stmt = $connect->prepare(" INSERT INTO samsung_device (Model, Model_Name) VALUES (:zm, :zmn)");
$stmt->execute(array( 'zm' => $m, 'zmn' => $mn,));


}elseif($do == 'stocklink'){
$c = 'SAMSUNG';
    $m= $_POST['m'];
    $mn = $_POST['mn'];
    $b= $_POST['b'];
    $v= $_POST['v'];
    $p= $_POST['p'];
    $r= $_POST['r'];
    $i= $_POST['i'];
    $l= $_POST['l'];




    
    $stmt = $connect->prepare(" INSERT INTO offecial 
    (Companny,Modell, Model_Name, Besband, Vrsion, Protect, Languages, About, Link1 ) 
    VALUES (:zc, :zm, :zmn, :zb, :zv, :zp, :zr, :zi, :zl)");
    $stmt->execute(array(
        'zc' => $c,
        'zm' => $m,
        'zmn' => $mn,
         'zb' => $b,
         'zv' => $v,
         'zp' => $p,
         'zr' => $r,
         'zi' => $i,
         'zl' => $l,
        
        ));
    
    
    }elseif($do == '4link'){
        $c = 'SAMSUNG';
            $m= $_POST['m'];
            $mn = $_POST['mn'];
            $b= $_POST['b'];
            $v= $_POST['v'];
            $p= $_POST['p'];
            $r= $_POST['r'];
            $i= $_POST['i'];
            $l= $_POST['l'];
        
        
        
        
            
            $stmt = $connect->prepare(" INSERT INTO fourfiles 
            (Companny,Model, Model_Name, Besband, Vrsion, Protect, Languages, About, Link1 ) 
            VALUES (:zc, :zm, :zmn, :zb, :zv, :zp, :zr, :zi, :zl)");
            $stmt->execute(array(
                'zc' => $c,
                'zm' => $m,
                'zmn' => $mn,
                 'zb' => $b,
                 'zv' => $v,
                 'zp' => $p,
                 'zr' => $r,
                 'zi' => $i,
                 'zl' => $l,
                
                ));
            
            
            }elseif($do == 'combilink'){
        $c = 'SAMSUNG';
            $m= $_POST['m'];
            $mn = $_POST['mn'];
            $b= $_POST['b'];
            // $v= $_POST['v'];
            $p= $_POST['p'];
            // $r= $_POST['r'];
            $i= $_POST['i'];
            $l= $_POST['l'];
        
        
        
        
            
            $stmt = $connect->prepare(" INSERT INTO combination 
            (Companny,Model, Model_Name, Besband, Protect, About, Link1 ) 
            VALUES (:zc, :zm, :zmn, :zb, :zp, :zi, :zl)");
            $stmt->execute(array(
                'zc' => $c,
                'zm' => $m,
                'zmn' => $mn,
                 'zb' => $b,
                 'zp' => $p,
                 'zi' => $i,
                 'zl' => $l,
                
                ));
            
            
            }elseif($do == 'certlink'){
                $c = 'SAMSUNG';
                    $m= $_POST['m'];
                    $mn = $_POST['mn'];
                    $b= $_POST['b'];
                    // $v= $_POST['v'];
                    // $p= $_POST['p'];
                    // $r= $_POST['r'];
                    $i= $_POST['i'];
                    $l= $_POST['l'];
                
                
                
                
                    
                    $stmt = $connect->prepare(" INSERT INTO `cert` 
                    (company,model, model_name, key_id, imei, link ) 
                    VALUES (:zc, :zm, :zmn, :zb,  :zi, :zl)");
                    $stmt->execute(array(
                        'zc' => $c,
                        'zm' => $m,
                        'zmn' => $mn,
                         'zb' => $b,
                         'zi' => $i,
                         'zl' => $l,
                        
                        ));
                    
                    
                    }elseif($do == 'rootlink'){
                        $c = 'SAMSUNG';
                            $m= $_POST['m'];
                            $mn = $_POST['mn'];
                            $v= $_POST['v'];
                            $b= $_POST['b'];
                            // $p= $_POST['p'];
                            // $r= $_POST['r'];
                            $i= $_POST['i'];
                            $l= $_POST['l'];
                        
                        
                        
                        
                            
                            $stmt = $connect->prepare(" INSERT INTO `root` 
                            (Companny,Model, Model_Name, `Version`, Mod_Root, About, Link1 ) 
                            VALUES (:zc, :zm, :zmn, :zv, :zb, :zi, :zl)");
                            $stmt->execute(array(
                                'zc' => $c,
                                'zm' => $m,
                                'zmn' => $mn,
                                 'zv' => $v,
                                 'zb' => $b,
                                 'zi' => $i,
                                 'zl' => $l,
                                
                                ));
                            
                            
                            }elseif($do == 'modemlink'){
                                $c = 'SAMSUNG';
                                    $m= $_POST['m'];
                                    $mn = $_POST['mn'];
                                    $b= $_POST['b'];
                                    $v= $_POST['v'];
                                    $p= $_POST['p'];
                                    // $r= $_POST['r'];
                                    $i= $_POST['i'];
                                    $l= $_POST['l'];
                                
                                
                                
                                
                                    
                                    $stmt = $connect->prepare(" INSERT INTO modem 
                                    (Companny,Model, Model_Name, Besband, `Version`, Protect, About, Link1 ) 
                                    VALUES (:zc, :zm, :zmn, :zb, :zv, :zp, :zi, :zl)");
                                    $stmt->execute(array(
                                        'zc' => $c,
                                        'zm' => $m,
                                        'zmn' => $mn,
                                         'zb' => $b,
                                         'zv' => $v,
                                         'zp' => $p,
                                         'zi' => $i,
                                         'zl' => $l,
                                        
                                        ));
                                    
                                    
                                    }elseif($do == 'sa4device'){

    $m= $_POST['m'];
    $mn = $_POST['mn'];
    $stmt = $connect->prepare(" INSERT INTO rom4_device (Model, Model_Name) VALUES (:zm, :zmn)");
    $stmt->execute(array( 'zm' => $m, 'zmn' => $mn,));
    
    
    }elseif($do == 'combdevice'){

        $m= $_POST['m'];
        $mn = $_POST['mn'];
        $stmt = $connect->prepare(" INSERT INTO combination_device (Model, Model_Name) VALUES (:zm, :zmn)");
        $stmt->execute(array( 'zm' => $m, 'zmn' => $mn,));
        
        
        }elseif($do == 'certdevice'){

            $m= $_POST['m'];
            $mn = $_POST['mn'];
            $k = $_POST['k'];

            $stmt = $connect->prepare(" INSERT INTO cert_device (model, model_name, keyid ) VALUES (:zm, :zmn, :zk)");
            $stmt->execute(array( 'zm' => $m, 'zmn' => $mn,'zk' => $k));
            
            
            }elseif($do == 'rootdevice'){

                $m= $_POST['m'];
                $mn = $_POST['mn'];
                $stmt = $connect->prepare(" INSERT INTO root_device (Model, Model_Name) VALUES (:zm, :zmn)");
                $stmt->execute(array( 'zm' => $m, 'zmn' => $mn,));
                
                
                }
                elseif($do == 'modemdevice'){

                    $m= $_POST['m'];
                    $mn = $_POST['mn'];
                    $c= 'SAMSUNG-MODEM';
                    $stmt = $connect->prepare(" INSERT INTO modem_device (Companny, Model, Model_Name) VALUES (:zc, :zm, :zmn)");
                    $stmt->execute(array( 'zc'=>$c, 'zm' => $m, 'zmn' => $mn,));
                    
                    
                    }

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
?>





</html>



