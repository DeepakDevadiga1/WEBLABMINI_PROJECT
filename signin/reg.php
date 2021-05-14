<?php
if (isset($_POST['sign'])) { 
$Fname=$_POST['name'];
$Uname=$_POST['uname'];
$pin=$_POST['phonecode'];
$MobNo=$_POST['mblno'];
$Email=$_POST['email'];
$pass=$_POST['pass'];
$address=$_POST['address'];
// session_start();
// $_SESSION['email']=$Email;


include '../DatabaseConnection/Database.php';
$query="INSERT INTO signin(ID,Name,UserName,Password,Mobile1,Address,Email,ActiveFlag) values(0,'".$Fname."','".$Uname."','".$pass."','".$MobNo."','".$address."','".$Email."',1)";
if ($sql->query($query) === TRUE) {
           header("Location:../Login/login.php");
              exit; // <- don't forget this!
       } else {
        echo "Error: " . $sql1 . "<br>" . $sql->error;
        }

  }


?>