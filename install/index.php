<?php
echo " <br><br><br> ";
?>
<!doctype html>
<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://npm.elemecdn.com/lxgw-wenkai-webfont@1.1.0/lxgwwenkai-regular.css"/>
    </head>
    <body>
    <style>
/*全局字体*/
*{font-family:LXGW WenKai}
*{font-weight:bold}
body {font-family: LXGW WenKai;}
body
{ 
    background-image:url(https://api.hurricanmaple.repl.co/genshin);
}
h1 {
    text-align: center;
    
    color: #A7C942;
    
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 25px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
  border-radius:25px;
}

div {
  border-radius: 20px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 300px;
  height: 720px;
  margin:0 auto;
}
</style>
<body>

<h1> </h1>

<div>
  <h1>程序安装</h1>
  <form action=" " method="post">
    <label for="fname">MySQL连接地址</label>
    <input type="text" id="fname" name="dbhost" placeholder="示例: example.com:3306 (带端口)">
    <label for="fname">MySQL 用户名</label>
    <input type="text" id="fname" name="dbuser" placeholder="示例: root">
  <label for="fname">MySQL 密码</label>
    <input type="text" id="fname" name="dbpass" placeholder="MySQL 管理员密码">
    <p>myadmin 数据配置:<p/>
  <label for="fname">数据库</label>
    <input type="text" id="fname" name="dbname" placeholder="如: myadmin 不填则自动创建">
  <label for="fname">数据表前缀</label>
    <input type="text" id="fname" name="db" placeholder="如: _myadmin">
    <label for="fname">用户名</label>
    <input type="text" id="fname" name="user" placeholder="如:admin">

    <label for="lname">密码</label>
    <input type="password" id="lname" name="password" placeholder="管理员密码">

    
    <input type="submit" value="安装">
    
  </form>
  <br><br>

</div>
</html>
<?php
if (isset($_POST['user'])) {
    $admin=$_POST["user"];
    $pass=$_POST["password"];
    $dbhost=$_POST["dbhost"];
    $dbuser=$_POST["dbuser"];
    $dbpass=$_POST["dbpass"];
    // 创建连接
    $conn = new mysqli($dbhost,     $dbuser, $dbpass);
 
    // 检测连接
    if ($conn->connect_error) {
        echo "错误";
        } 
     echo "连接成功";
     $arr = array('admin' => $admin, 'password' => $pass, 'dbhost' => $dbhost, 'dbuser' => $dbuser, 'dbpass' => $dbpass);
     echo json_encode($arr);
     
}
?>