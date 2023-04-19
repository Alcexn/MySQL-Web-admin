<?php
$dbhost="infra.zeabur.com:30808";
$dbuser="root";
$dbpass="0796VZxa24DQ";
// 创建连接
$conn = new mysqli($dbhost, $dbuser, $dbpass);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败");
} 


?>