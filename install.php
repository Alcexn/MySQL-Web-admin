<?php
if (isset($_POST['redirect'])) {
  // Redirect to install page
  header('Location: /install/index.php');
  exit;
}
?>
<?php
echo " <br><br><br> ";
?>
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://npm.elemecdn.com/lxgw-wenkai-webfont@1.1.0/lxgwwenkai-regular.css" />
</head>

<body>
  <style>
    /*全局字体*/
    * {
      font-family: LXGW WenKai
    }

    * {
      font-weight: bold
    }

    body {
      font-family: LXGW WenKai;
    }

    body {
      background-image: url(https://api.hurricanmaple.repl.co/genshin);
    }

    h1 {
      text-align: center;

      color: #A7C942;

    }

    input[type=text],
    select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 10px;
      box-sizing: border-box;
    }

    input[type=password],
    select {
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
      border-radius: 25px;
    }

    div {
      border-radius: 20px;
      background-color: #f2f2f2;
      padding: 20px;
      width: 300px;
      height: 370px;
      margin: 0 auto;
    }
  </style>

  <body>

    <h1> </h1>

    <div>
      <h1>程序安装</h1>
      <p>若您点击"下一步"则代表您已同意“用户协议”及“免责声明”
        <p/>

      <p style="text-align: center;">作者: Alcex </p>
      <?php
      $php_version = phpversion();
      echo '<p style="text-align: center;">当前版本:beta 0.1 php 版本: ' . $php_version . ' </p>';
      ?>
      <br><br><br>
      <form method="post" action=" ">
        <input type="submit" name="redirect" value="下一步">
      </form>
    </div>

</html>