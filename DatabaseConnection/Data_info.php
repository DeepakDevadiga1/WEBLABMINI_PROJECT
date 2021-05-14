<?php
include 'Database.php';
$str="select * from signin where ActiveFlag=1";
$res=mysqli_query($sql,$str);
$output=array();
while ($arr= mysqli_fetch_array($res)) {
    $output[]=array('ID'=>$arr['ID'],'Name'=>$arr['Name'],'UserName'=>$arr['UserName'],'Password'=>$arr['Password'],'Mobile1'=>$arr['Mobile1'],'Address'=>$arr['Address'],'Email'=>$arr['Email'],'ActiveFlag'=>$arr['ActiveFlag']);
}

echo json_encode($output);

?>