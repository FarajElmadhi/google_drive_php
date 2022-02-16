<?php 
// require_once 'func.php';
require 'vendor/autoload.php';
@include 'newtaflish/Connections/conect.php';

session_start(); //Start the session

$client = new Google_Client();
$client->setAuthConfig('client_secret.json');
$client->addScope(array(Google_Service_Drive::DRIVE, Google_Service_Drive::DRIVE_FILE,Google_Service_Drive::DRIVE_METADATA_READONLY));

if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    $client->setAccessToken($_SESSION['access_token']);
    $drive_service = new Google_Service_Drive($client);

    $files_list = $drive_service->files->listFiles(array(
      'q'=>"parents in '" . '1nqS_PxVS02PDD_8F6bzqtMsjyRhE24Yf' . "'",
      'fields' => 'files(id, name, webViewLink, webContentLink, mimeType, size)',
    'pageSize' => 1000,
   ));

    $result = array();

    

    foreach ($files_list->getFiles() as $file) {
      if( $file->getMimeType()  != 'application/vnd.google-apps.folder'){

      // if( $file->getMimeType()  == 'application/vnd.google-apps.folder'  ){

// ----------< Rename File >------------//
    
      // $ex = explode('_', $file->getName());
      // if($ex[0] == 'Samfw.com'){ 
      // //    if($ex[1] != 'COMBINATION'){   
      //    $newName = $ex[1] . '_' .$ex[2] . '_' .$ex[3];

      //       $dot =  explode('.', $newName);
      //       if( count($dot) == 1){
      //             $newName .=  '.zip';
               
      //       }
      //    echo $newName  . '<br>';
      //    try {
      //       $fileNewName = new Google_Service_Drive_DriveFile($client);
      //       $fileNewName->setName($newName);
        
      //       $updatedFile = $drive_service->files->update($file->getId(), $fileNewName);
        
      //       } catch (Exception $e) {
      //       print "An error occurred: " . $e->getMessage();
      //       }

      //    // }
      // }


      //------------- INSERT TO TMP --------//

// $ex = explode('_', $file->getName());
//       if($ex[0] != 'Samfw.com'){ 
//          if($ex[1] != 'COMBINATION'){   

//             $model = $ex[0];
//             $region = $ex[1];
//             $dot =  explode('.', $ex[2]);
//             $baseband = $dot[0];   
//             $link =  $file->getWebContentLink();
     


// $stmt = $connect->prepare(" INSERT INTO tmp 
// (model, baseband, region, link ) 
// VALUES ( :zm, :zb, :zr, :zl)");
// $stmt->execute(array(
//     'zm' => $model,
//      'zb' => $baseband,
//      'zr' => $region,
//      'zl' => $link,
    
//     ));
//          }
//       }
// //=========================================================//

      array_push($result,[
         'id'=> $file->getId(),
         'name' => $file->getName(),
         'link' => $file->getWebContentLink(),
         'type' => $file->getMimeType(),
         'size' => number_format( $file->getSize() / 1000000000 , 2). 'GB'
      ]);
    }
   }
    echo '<pre>';

    print_r(($result));
    echo '</pre>';


    // change permissions

   //  $permissions = new Google_Service_Drive_Permission(array(
   //    'role' => 'reader',
   //    'type' => 'anyone',
   // ));
 
   // try {
   //    $r = $drive_service->permissions->create('1lzZEGPHuZc-3zbDWqalnqzIrJzPYs_Fb', $permissions);
   //    print_r($r);
   // } catch (Exception $e) {
   //    $r = $e->getMessage();
   //    print_r($r);

   // }
 
} else {
    $redirect_uri = 'http://localhost/drive/oauth2callback.php';
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}   



   
 