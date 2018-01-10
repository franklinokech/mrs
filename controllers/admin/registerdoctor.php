<?php
require_once('../../configs/dbConfig.php');
require_once('../../controllers/functions.php');
if (isset($_POST['btnregister'])) {
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

}
?>
