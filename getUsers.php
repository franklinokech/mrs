<?php 
include "configs/dbConfig.php";

$departid = $_POST['depart'];   // department id

$sql = "SELECT id,name FROM users WHERE department=".$departid;

$result = mysqli_query($conn,$sql);

$users_arr = array();

while( $row = mysqli_fetch_array($result) ){
    $userid = $row['id'];
    $name = $row['name'];

    $users_arr[] = array("id" => $userid, "name" => $name);
}

// encoding array to json format
echo json_encode($users_arr);
?>