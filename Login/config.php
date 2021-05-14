<?php

//start session on web page
session_start();

echo "<h1>City Transist</h1>";

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('698200299776-6dsc6btrr6om4uf9phu7un8poje393ut.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('ZjGJPni0jSAHtFPgtW56RqQa');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/WEBLABMINI_PROJECT/Login/login.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>  
