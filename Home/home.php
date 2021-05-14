<?php
$valid=0;
$uname=' ';
session_start();
if(isset($_SESSION['islogin']))
{
	$valid=1;
	$uname=$_SESSION['username'];

}
$output= array('username' => $uname,'valid'=>$valid);
echo json_encode($output);
?>