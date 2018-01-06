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

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
 <form method="POST" action="">
   Name<input type="text" name="dname"><br>
   Age<input type="text" name="dage"><br>
   <input type="submit" name="btnregister" value="Submit">
 </form>
</body>
</html