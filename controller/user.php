<?php
require ('db.php');

$method = "getUserListPage";


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
    //返回用户分页数据----------------------------------------------------------------------------------------
    $sql="select * from user";
    //执行查询并获取查询结果
    $result = $conn->sql($sql);
    //输出受影响数据行数
    $num=$conn->getResultNum($sql);
    echo "影响的行数：".$num;
    //读取并输出记录
    while ($row = mysqli_fetch_assoc($result)){
        echo "{$row['name']} ";
        echo "{$row['password']}";
    }
}
$conn->close();