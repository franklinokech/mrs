<?php
require_once('../controllers/functions.php');
require_once('../configs/dbConfig.php');
require_once('../configs/security.php');
require_once('../resources/passwordhashlib/lib/password.php');
//chech if user submit form
if (isset($_POST['submit'])) {
  //declare POST variables
  $fname=escape(strtoupper($_POST['fname']));
  $lname=escape(strtoupper($_POST['lname']));
  $username=escape($_POST['uname']);
  $email=escape($_POST['email']);
  $dob=escape($_POST['dob']);
  $phone=escape(strtoupper($_POST['mobilephone']));
  $postalAddress=escape(strtoupper($_POST['postalAddress']));
  $password=escape($_POST['password']);
  $cpassword=escape($_POST['cpassword']);

  //check if the passwords match
  $result=strcmp($password, $cpassword);
  if ($result==0) {
    //hash the password
    $passHash=password_hash($password,PASSWORD_BCRYPT);
    $formData = array(
    'P_Ssn' => NULL,
    'P_ID' => $username,
    'P_Password'=>$passHash,
    'P_Fname'=>$fname,
    'P_Lname'=>$lname,
    'P_DOB'=>$dob,
    'P_Phone'=>$phone,
    'P_Email'=>$email,
    'P_Address'=>$postalAddress,
   );
    $tablename="Patient";//the database table to insert the form data
    //call the row insert function to insert form data
    if(dbRowInsert($tablename,$formData)){
      echo "Patient Registration Is Successfull";
  }else{
    echo "error".mysql_error();
  }
    
  }//end of if passwords match
  else{
    echo "Passwords Do Not Match";
  }//end of password do not match
}


?>