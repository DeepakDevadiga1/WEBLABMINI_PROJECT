<?php
session_start();

include ('../DatabaseConnection/Database.php');
$uname=$_SESSION['username'];
$info="SELECT ID from signin where UserName='".$uname."'";
$res=mysqli_query($sql,$info);
$arr= mysqli_fetch_array($res);

$cart="SELECT * from usercart where tradid=".$arr['ID']."";


?>
<!DOCTYPE html>
<html  lang="en"  >
<head>
	<title>HOME</title>
	<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1"> 
	<!-- <link rel="stylesheet" type="text/css" href="home.css"> -->
	<!-- Bottstrape------------------------------------------------------------------------------- -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrape -------------------------------------------------------------------------- -->
     <script src='https://kit.fontawesome.com/a076d05399.js'></script> 
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- Angular --------------------------------------------------------------------------------------------------------- -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.2/angular.min.js"></script>
</head>
<body>
    <div id="Cart" class="container tab-pane" >
    <!-- <h1>Order Details:</h1> -->
<?php
if($sth = $sql->query($cart))
{
  while ($row = $sth->fetch_assoc()) {
  $image=$row['Image'];
  $productname=$row['ProductName'];
  $productlocation=$row['ProductLocation'];
  $Destlocation=$row['DeliveryLocation'];
  $mobno=$row['MOBILENO'];

  
echo '<hr><div>
                  <img src="../Services/images/'.$image.'" style="width: 200px;height: 200px;" /> 
                  <label style="display:block">Product Name: '.$productname.'</label>
                  <label style="display:block">Product Location: '.$productlocation.'</label> 
                  <label style="display:block">Delivery Location: '.$Destlocation.'</label> 
                  <label style="display:block"> Mobile No: '.$mobno.'</label> 
                  
        </div><hr>';
   echo '<br/>';
    }
    $sth->free();
}
?>
</div>
</body>