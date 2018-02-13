<?php 
require_once('../configs/dbConfig.php');

$name=$_POST['name'];
$message=$_POST['message'];
$dob=$_POST['dob'];

$sql="INSERT INTO `tbl_form` ( `name`, `message`, `dateofbirth`) VALUES ( '".$name."', '".$message."', '".$dob."')";
if (mysqli_query($conn,$sql)) {
  echo "Message Saved Successfully";
}else{
  echo "Failed";
}




?>