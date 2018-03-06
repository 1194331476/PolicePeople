<?php
require ('db.php');

$method = $_GET['method'];


if($method == "addUser"){
   $data = $_POST['data'];
   $sql = "INSERT INTO user (username, truename, sex)
            VALUES ('"+$data['username']+"', '"+$data['truename']+"', '"+$data['sex']+"')";
   echo $conn->query($sql);
   /* if ($conn->query($sql) === TRUE) {
       echo "success";
   } else {
       echo "error";
   } */
   /* $conn->close();
   echo json_encode($data); */
}