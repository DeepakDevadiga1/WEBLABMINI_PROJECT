<?php
$uname=$_GET['name'];
$pass=$_GET['pass'];
session_start();
if (!isset($_SESSION['islogin'])) {

  $_SESSION['islogin']=true;
  $_SESSION['username']=$uname;
}
?>