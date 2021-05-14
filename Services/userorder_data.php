<?php
 if (isset($_POST['upload'])) { 
  
    $image= $_FILES['uplodedimage']['name'];
    $temp = $_FILES['uplodedimage']['tmp_name'];  
     $file_to_saved = "images/".$image; //Documents folder, should exist in       your host in there you're going to save the file just uploaded
    move_uploaded_file($temp, $file_to_saved);
    
    

    session_start();
    $uname=$_SESSION['username'];


    $product =$_POST["Product"];
    $product_loc =$_POST["poduct_location"];
    $delivery_loc =$_POST["delivery_location"];
    $mobile =$_POST["mobile"];

    include '../DatabaseConnection/Database.php';

         $sql2="SELECT ID from signin where UserName= '".$uname."'";
         $res=mysqli_query($sql,$sql2);
         $arr= mysqli_fetch_array($res);
  
        // Get all the submitted data from the form 
        $sql1 = "INSERT INTO usercart(tradid,ProductName,ProductLocation,DeliveryLocation,MOBILENO,Image) VALUES(".$arr['ID'].",'".$product."','".$product_loc."','".$delivery_loc."','".$mobile."','".$image."')"; 
  
        // Execute query 
       if ($sql->query($sql1) === TRUE) {
           header("Location:../Payment/payment/payment.php");
              exit; // <- don't forget this!
       } else {
        echo "Error: " . $sql1 . "<br>" . $sql->error;
        }
           
  $sql->close(); 
}
  
?> 
  