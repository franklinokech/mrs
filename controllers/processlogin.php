<?php
  session_start();
  require_once('functions.php');
  require_once('../configs/dbConfig.php');
  require_once('../configs/security.php');
  require_once("../resources/passwordhashlib/lib/password.php");

  if(isset($_POST['submit'])){
    $username=escape($_POST['Username']);
    $password=escape($_POST['password']);
    

    //check if the user is admin
    $sql="SELECT admin.a_ssn,admin.username,admin.password FROM admin WHERE admin.username='".$username."' ";
    //execute query
    $query_run=mysqli_query($conn,$sql);

    //check if numbers of rows is equal to one
    $num_rows=mysqli_num_rows($query_run);

    if ($num_rows==1) {
      while ($rowAdmin=mysqli_fetch_assoc($query_run)) {
        $adminSsn=$rowAdmin['a_ssn'];
        $adminUsername=$rowAdmin['username'];
        $adminPass=$rowAdmin['password'];
        if(password_verify($password,$adminPass)){

           $_SESSION["admiSsn"]=$adminSsn;
           $_SESSION['adminUsername']=$adminUsername;
          header('location:../views/admin/');
        }//end of valid admin credentials
        else{
          echo "Invalid Username Or Password";
        }//end of invalid credentials
        
      }
    }//end of if user is admin
    elseif ($num_rows==0) {
      //check if user is a doctor
      $sql="SELECT Doctor.D_Ssn,Doctor.D_Fname,Doctor.D_Id,Doctor.D_Password,Doctor.P_Status FROM Doctor WHERE Doctor.D_Id='".$username."'";
      //run query
      $query_run=mysqli_query($conn,$sql);
      
      //check numbers of rows returned
      $num_rows=mysqli_num_rows($query_run);
      if ($num_rows==1) {
        while ($row=mysqli_fetch_assoc($query_run)) {
          $doctSsn=$row['D_Ssn'];
          $doctFname=$row['D_Fname'];
          $doctPassword=$row['D_Password'];
          $doctPasswordStatus=$row['P_Status'];
          if(password_verify($password,$doctPassword)){
              //check if doctor has changed the default password
              if ($doctPasswordStatus==0) {
            header('location:../views/doctor/channgepassword.php');
              }else{
               $_SESSION['doctname']=$doctFname;
            header('location:../views/doctor/doctordashboard.php');
              }
        }else{
          echo "Invalid Username Or Password";
        }
      }
      }//end of if user is a doctor
      elseif ($num_rows==0) {
        //check if user is a patient
        $sql="SELECT Patient.P_Ssn,Patient.P_ID,Patient.P_Password,Patient.P_Fname FROM Patient WHERE Patient.P_ID='".$username."'";
        //execute query
        $query_run=mysqli_query($conn,$sql);
        //check number of rows returned
        $num_rows=mysqli_num_rows($query_run);
        if ($num_rows==1) {
          while ($row=mysqli_fetch_assoc($query_run)) {
            $pSsn=$row['P_Ssn'];
            $pId=$row['P_ID'];
            $pName=$row['P_Fname'];
            $pPassword=$row['P_Password'];
            if (password_verify($password,$pPassword)) {
              $_SESSION['fname']=$pName;
              header('location:../views/patient/patientdashboard.php');
            }else{
              echo "Invalid Username Or Password";
            }
            
          }
        }//end of if user is patient
        elseif($num_rows==0){
          echo "Invalid Username Or Password";
          
        }//invalid credentials
      }
      
    }

  }
?>