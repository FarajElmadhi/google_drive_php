<?php 
// require_once 'func.php';
require 'vendor/autoload.php';

session_start();

$client = new Google_Client();
$client->setAuthConfigFile('client_secret.json');
$client->setRedirectUri('http://localhost/drive/oauth2callback.php');
$client->addScope(array(Google_Service_Drive::DRIVE, Google_Service_Drive::DRIVE_FILE));


if (! isset($_GET['code'])) {
    $auth_url = $client->createAuthUrl();
    header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
} else {
    $client->authenticate($_GET['code']);
    $_SESSION['access_token'] = $client->getAccessToken();
    $redirect_uri = 'http://localhost/drive/index.php';
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}