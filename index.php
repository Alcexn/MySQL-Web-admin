<?php
$file_path = 'install/install.sock';

if (file_exists($file_path)) {

} else {
  // 跳转到指定的 URL
  header("Location: /install.php");
  // 立即退出脚本
  exit();
}

if (isset($_COOKIE["admin"]))
  echo "true";
else
  header("Location: admin/login.php");
// 立即退出脚本
exit();
?>
// 前端代码
<!DOCTYPE html>
<html lang="zh">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="css/index.css">
  <title>mysql admin</title>
</head>