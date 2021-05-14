<?php
include 'Database.php';
session_start();
$uname=$_SESSION['username'];

$info="SELECT ID from signin where UserName= '".$uname."'";
$res=mysqli_query($sql,$info);
$arr= mysqli_fetch_array($res);

 $cart="SELECT * from usercart where tradid=".$arr['ID']."";

 





?>