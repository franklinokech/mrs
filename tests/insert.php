<?php 
require_once('../configs/dbConfig.php');
//check if this page has received any form data
if (isset($_POST['name'])) {
  $name=$_POST['name'];
  $message=$_POST['message'];
  $sql="INSERT INTO `tbl_form` ( `name`, `message`) VALUES ('".$name."', '".$message."')";
  if (mysqli_query($conn,$sql)) {
    echo "Message Saved";
  }else{
    echo "failed";
  }
}
?>