<?php 
@include 'newtaflish/Connections/conect.php';

$id =  isset($_GET['id'])? $_GET['id']: 0;

if($id == 0){
$stmt = $connect->prepare(" SELECT * FROM tmp WHERE done = 0 LIMIT 1 ");
$stmt->execute();
$tmp = $stmt->fetch();
echo 'Begin ...............';
header("Refresh:5; url=add.php?id=". $tmp['id']);

}else{
    $stmt = $connect->prepare(" SELECT * FROM tmp WHERE id  = ? ");
    $stmt->execute(array($id));
    $tmp = $stmt->fetch();  
$model = $tmp['model'];
$baseband = $tmp['baseband'];
$region = $tmp['region'];
$link = $tmp['link'];

       
      $url = 'https://samfw.com/firmware/'. $model .'/'. $region .'/'. $baseband;
      $site_html=  file_get_contents($url);
         $matches=null;
         preg_match_all('~<\s*meta\s+property="(og:[^"]+)"\s+content="([^"]*)~i',     $site_html,$matches);
         $ogtags=array();
         for($i=0;$i<count($matches[1]);$i++)
         {
             $ogtags[$matches[1][$i]]=$matches[2][$i];
         }

         $info =  $ogtags['og:description'];
      $iex = explode(' ', $info);

$find_index = array_search($model, $iex);
$model_name = '';
for($f= 0; $f < $find_index; $f++){
   $model_name .=  $iex[$f] . ' ';

}
       $v = array_search('samsung',array_values($iex));
       $version = trim($iex[$v - 1], ')');
       


echo $id . '_' . $model_name . ' [' ;
echo $version . ']<br>';

$c = 'SAMSUNG';
$p = ' ';
$i = '';

$stmt = $connect->prepare(" SELECT * FROM samsung_device WHERE Model  = ? ");
$stmt->execute(array($model));
$device = $stmt->fetchAll();  
$count=$stmt->rowCount();
if($count == 0){

    $stmt = $connect->prepare(" INSERT INTO samsung_device 
(Company,Model, Model_Name) 
VALUES (:zc, :zm, :zmn)");
$stmt->execute(array(
    'zc' => $c,
    'zm' => $model,
    'zmn' => $model_name
    
    ));
}


$stmt = $connect->prepare(" INSERT INTO offecial 
(Companny,Modell, Model_Name, Besband, Vrsion, Protect, Languages, About, Link1 ) 
VALUES (:zc, :zm, :zmn, :zb, :zv, :zp, :zr, :zi, :zl)");
$stmt->execute(array(
    'zc' => $c,
    'zm' => $model,
    'zmn' => $model_name,
     'zb' => $baseband,
     'zv' => $version,
     'zp' => $p,
     'zr' => $region,
     'zi' => $i,
     'zl' => $link,
    
    ));
    $stmt = $connect->prepare(" UPDATE tmp set done = 1 WHERE id = ?") ;
    $stmt->execute(array($id));

    $stmt = $connect->prepare(" SELECT `id` FROM tmp WHERE done = 0 LIMIT 1 ");
    $stmt->execute();
    $tmpo = $stmt->fetch();
    echo $tmpo['id'];
    header("Refresh:1; url=add.php?id=". $tmpo['id']);
    // header("Location: add.php?id=". $tmpo['id']);

  

    // echo $id . ' -> '.  $model. ' ' . $model_name .' '. $version. ' ' . $baseband . ' ' . $region . ' ' . $link .'<br>';
}


// $stmt = $connect->prepare(" INSERT INTO offecial 
// (model, baseband, region, link ) 
// VALUES ( :zm, :zb, :zr, :zl)");
// $stmt->execute(array(
//     'zm' => $model,
//      'zb' => $baseband,
//      'zr' => $region,
//      'zl' => $link,
    
//     ));