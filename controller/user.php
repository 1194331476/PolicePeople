<?php
require ('db.php');

$method = $_GET['method'];

if($method == "addUser"){
   //新增用户方法-------------------------------------------------------------------------------------------
   $data = $_POST['data'];
   $sql = "INSERT INTO user (username, truename, sex)
            VALUES ('".$data['username']."', '".$data['truename']."', '".$data['sex']."')";
   if ($conn->query($sql) == 1) {
       echo "success";
   } else {
       echo "error";
   } 
}else if($method == "getUserListPage"){
    $sql="select * from user";
    $result = mysqli_query($conn,$sql); 
    $i = 0;
    while($obj = mysqli_fetch_object($result)){
        $json[$i] = $obj;
        ++$i;
    }
    echo json_encode($json);
    // 释放结果集 
    mysqli_free_result($result);
}
$conn->close();