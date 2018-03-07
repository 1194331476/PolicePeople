<?php
$mysql_conf = array(
    'host'    => '127.0.0.1:3306', 
    'db'      => 'policepeople', 
    'db_user' => 'root', 
    'db_pwd'  => 'root', 
);
 
// 创建连接
$conn = new mysqli($mysql_conf['host'], $mysql_conf['db_user'], $mysql_conf['db_pwd'],$mysql_conf['db']);

// 检测连接
/* if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
echo "连接成功"; */
?>