<?php 
// require_once 'func.php';
require 'vendor/autoload.php';

session_start(); //Start the session
$client = new Google_Client();
$client->setAuthConfig('client_secret.json');
$client->addScope(array(Google_Service_Drive::DRIVE, Google_Service_Drive::DRIVE_FILE,Google_Service_Drive::DRIVE_METADATA_READONLY));

if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    $client->setAccessToken($_SESSION['access_token']);
    $drive_service = new Google_Service_Drive($client);

    $files_list = $drive_service->files->listFiles(array('fields' => 'files(id, name, webViewLink, webContentLink, mimeType, size)','pageSize' => 1000));

    $result = array();
    foreach ($files_list->getFiles() as $file) {
      //   $result[$file->getId()] = $file->getName() . $file->getWebContentLink();
    
      array_push($result,[
         'id'=> $file->getId(),
         'name' => $file->getName(),
         'link' => $file->getWebContentLink(),
         'type' => $file->getMimeType(),
         'size' => number_format( $file->getSize() / 1000000000 , 2). 'GB'
      ]);
    }
    echo '<pre>';

    print_r(($result));
    echo '</pre>';


    // change permissions

    $permissions = new Google_Service_Drive_Permission(array(
      'role' => 'reader',
      'type' => 'anyone',
   ));
 
   try {
      $r = $drive_service->permissions->create('10BoL5ZkI_1W0K9Gf0wY6-OtjCqt04wJG', $permissions);
      print_r($r);
   } catch (Exception $e) {
      $r = $e->getMessage();
      print_r($r);

   }
 
} else {
    $redirect_uri = 'http://localhost/drive/oauth2callback.php';
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}   



   
 