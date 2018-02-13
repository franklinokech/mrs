<?php
require_once('../../configs/dbConfig.php');
require_once('../../configs/security.php');
require_once('../functions.php');


// Set the case in which to return column_names.


/*if (isset($_POST['btnregister'])) {
  $dname=$_POST['dname'];
  $dage=$_POST['dage'];

  $formData = array(
    'D_name' => $dname,
    'Age'=>$dage
   );
  //tablename
  $tablename="doctr";
  if(dbRowInsert($tablename,$formData)){
      echo "success";
  }else{
    echo "error".mysql_error();
  }

}*/
/*TEST REGISTER DOC
$sql="INSERT INTO Doctor VALUES (NULL,'31322663','mypass','0','FRANKLIN','OKECH','1994-10-31','0700520718','franklinokech@gmail.com','855-40300 homabay','Outpatient office')";
$query_run=mysqli_query($conn,$sql);

if($query_run){
  echo "success";
  //get last insert id
  
  //inser last insert into doctgender
  
  $sql2="INSERT INTO DoctorGender VALUES ('".$gendeid."','".$doctSsn."')";
  $query_run2=mysqli_query($conn,$sql2);
  if ($query_run2) {
    echo "Doctor added successfully";
  } else{
    echo "error".mysqli_error($conn);
  }
}*/

  //declare form variables
  $txtDoctID=escape($_POST['txtDoctID']);
  $txtFname=escape(strtoupper($_POST['txtFname']));
  $txtLname=escape(strtoupper($_POST['txtLname']));
  $txtDOB=escape($_POST['txtDOB']);
  $cmbGender=escape($_POST['cmbGender']);
  $txtPhone=escape($_POST['txtPhone']);
  $txtEmail=escape(strtolower($_POST['txtEmail']));
  $txtPostalAddress=escape(strtoupper($_POST['txtPostalAddress']));
  $txtCityCode=escape($_POST['txtCity']);
  $cmbDepartmentId=escape($_POST['cmbDepartment']);

  /*check if user has left some fields empty*/
  if ($txtDoctID=="" || $txtFname=="" || $txtLname=="" || $txtDOB=="" || $cmbGender=="" || $txtPhone=="" || $txtEmail=="" || $txtPostalAddress=="" || $txtCityCode=="" || $cmbDepartmentId=="") {
    echo "* All Fields Are Required";
  }
  else{
      //begin a transaction to insert doctor details in various tables 
  try{
  $conn2->beginTransaction();
  $sqlInsertDoc="INSERT INTO `Doctor`( `D_Id`, `D_Fname`, `D_Lname`, `D_DOB`, `D_Phone`, `D_Email`, `D_Address`) VALUES ('".$txtDoctID."','".$txtFname."','".$txtLname."','".$txtDOB."','".$txtPhone."','".$txtEmail."','".$txtPostalAddress."')";
  $query_run=$conn2->query($sqlInsertDoc);
  if ($query_run) {
    //insert doctor gender
  $doctSsn=$conn2->lastInsertId();//get the last autoincremented doctor ssn
  $sqlInsertDocGender="INSERT INTO DoctorGender VALUES ('".$cmbGender."','".$doctSsn."')";
  $conn2->query($sqlInsertDocGender);

  //insert doctor city
  $sqlInsertDocCity="INSERT INTO `DoctorCity` (`Postal_Code`, `D_Ssn`) VALUES ('".$txtCityCode."', '".$doctSsn."')";
  $conn2->query($sqlInsertDocCity);

  //insert doctor department
  $sqlInsertDocDepart="INSERT INTO `DoctorDepartment` (`D_Ssn`, `Dept_Id`) VALUES ('".$doctSsn."', '".$cmbDepartmentId."')";
  $conn2->query($sqlInsertDocDepart);

  $conn2->commit();
  echo "Doctor Registration Is Successful";
  
  }else{
    print_r($conn2->errorInfo());
    echo "Registration failed";
  }
  
}catch (Exception $e){
  $conn2->rollback();
  
}finally{
  $conn2->connection = null;
}
}/*End Of If User filled all fields*/




?>
