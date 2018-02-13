<?php
require_once('../../configs/dbConfig.php');
require_once('../../configs/security.php');
require_once('../functions.php');

  //declare form variables
  $txtCode=escape($_POST['txtCode']);
  $txtName=escape(strtoupper($_POST['txtName']));
  $txtRegNo=escape(strtoupper($_POST['txtRegNo']));
  $cmbLevel=escape($_POST['cmbLevel']);
  $txtCounty=escape($_POST['txtCounty']);

  /*Check if user has left some fields empty*/
  if ($txtCode=="" || $txtName=="" || $cmbLevel=="" || $txtCounty=="") {
    echo "* All Fields Are Required";
  }
  else{
      //begin a transaction to insert health facility details in table 
  try{
  $conn2->beginTransaction();
  $sqlInsertFacility="INSERT INTO `HealthFacilities` (`Code`, `Name`, `RegNo`, `Level`, `County`) VALUES ('".$txtCode."', '".$txtName."', '".$txtRegNo."', '".$cmbLevel."', '".$txtCounty."')";
  $query_run=$conn2->query($sqlInsertFacility);
  if ($query_run) {
    //insert facility details
  $conn2->commit();
  echo "Health Facility Is Registered Successfully";
  }else{
    print_r($conn2->errorInfo());
    echo "Registration failed";
  }
  
}catch (Exception $e){
  $conn2->rollback();
  
}finally{
  $conn2->connection = null;
}
  }




?>
