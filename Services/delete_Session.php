<?php
$output1=0;
 session_start();

 $helper = array_keys($_SESSION);
 foreach ($helper as $key){
        unset($_SESSION[$key]);
 }


 $output2= array('valid1'=>$output1);
  echo json_encode($output2);
?>