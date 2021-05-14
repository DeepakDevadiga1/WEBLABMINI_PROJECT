<?php


//index.php

//Include Configuration File
include('config.php');

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
  if (!isset($_SESSION['islogin'])) {

  $_SESSION['islogin']=true;
  $_SESSION['username']=$data['given_name'];;
}
 }

}


if(!isset($_SESSION['access_token']))
{

 $login_button = ' href="'.$google_client->createAuthUrl().'"';
}

if (isset($_SESSION['islogin'])) {
    header("Location:../main/main.php");
    exit; // <- don't forget this!
}

?>
<!DOCTYPE html>

<html lang="en" ng-app="Login">
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="login.css">

	<!-- Bootstrape -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- Bootstrape -->

	<!-- Angular -->
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.2/angular.min.js"></script>
	<script type="text/javascript" src="login.js"></script>
	<!-- Aangular -->
</head>
<body ng-controller="mycontr" style="background-color: hsl(89, 43%, 51%);">
	<div id=""class="p-3 mb-2 bg-white text-white main-panel">
		<div class="sub-panel" style="margin-top: 25px">
			<div class="user-panel">
				<input type="text" class="form-control" ng-model="uname" placeholder="Username">
			</div>
			<div class="pass-panel">
				<input type="text"  class="form-control" ng-model="pass" placeholder="Password " >
			</div>
			<div >
				<button  class="btn btn-success" ng-click="validate()" style="width: 100%;">Login</button>
			</div>
			<div class="container signin" style=" margin-top:10px;text-align: center;">
                 <p style="color: grey;">Not registered ?<a href="../signin/signin.php">Create an account</a></p>
            </div>
            <hr></hr>
            <?php
            echo'<div class="col-md-12"><a  class="btn btn-lg btn-google btn-block text-uppercase btn-outline" href="'.$google_client->createAuthUrl().'"><img src="https://img.icons8.com/color/16/000000/google-logo.png" > Signup Using Google</a></div>'
            ?>
		</div>
	</div>

</body>
</html>