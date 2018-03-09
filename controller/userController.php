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
    //分页查询用户方法-------------------------------------------------------------------------------------
    $pageNum = $_POST['pageNum'];
    $strat = ($pageNum-1)*10;
    $sql="select * from user limit ".$strat.",10";
    $result = mysqli_query($conn,$sql); 
    $i = 0;
    while($obj = mysqli_fetch_object($result)){
        $json['data'][$i] = $obj;
        ++$i;
    }
    $sql = "select * from user";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    $json['dataNum'] = $num;
    echo json_encode($json);
    // 释放结果集 
    mysqli_free_result($result);
}
$conn->close();