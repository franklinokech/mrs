<?php

/*
Function to put a prefix to all the title tags
 */
function titlePrefix(){

  echo $titlePref="Kenya MRS | ";
  
}

/*
Function that takes form data and insert into a fiven database table
 */
function dbRowInsert($tableName,$formData){
  
  $servername = $_SERVER['HTTP_HOST'];

$username = "root";
$password = "";
$database="mrs";

// Create connection
  
 $conn = mysqli_connect($servername, $username, $password,$database);
$dB_select=  mysqli_select_db($conn,$database);


//get the column names
$fields =array_keys($formData);
//build the query
$sql = "INSERT INTO ".$tableName."
(`".implode('`,`', $fields)."`)
VALUES('".implode("','", $formData)."')";

//run and return the query result
return mysqli_query($conn,$sql);
}//end of function dbRowInsert

/*
Function to validate usernames and password of the users
 */
function validateLogin($username1,$username2,$password1,$password2){
  if ((strcmp($username1, $username2)==0) && (strcmp($password1, $password2)==0)) {
    return TRUE;
  }else{
    return FALSE;
  }
}//end of function to validate username and password


?>