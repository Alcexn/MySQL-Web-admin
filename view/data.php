<?php
// 连接到数据库
$servername = "infra.zeabur.com:30808";
$username = "root";
$password = "0796VZxa24DQ";
$dbname = "mydatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 获取表中的所有行
$sql = "SELECT * FROM TEST";
$result = $conn->query($sql);
$rows = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
}

// 如果表单提交了，更新数据
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE TEST SET name='$name', email='$email' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "数据已更新";
    } else {
        echo "更新数据时出错: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>编辑表格</title>
    <!-- 引入 Bootstrap 样式 -->
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">编辑表格</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>名称</th>
                    <th>邮箱</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row) ?>
                <tr>
                    <td>
                        <?php echo $row["id"]; ?>
                    </td>
                    <td>
                        <?php echo $row["name"]; ?>
                    </td>
                    <td>
                        <?php echo $row["email"]; ?>
                    </td>
                    <td>
                        <!-- 弹出模态框以编辑数据 -->
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                            data-target="#editModal<?php echo $row["id"]; ?>">编辑</button>
                        <!-- 删除数据 -->
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
                            style="display: inline-block;">
                            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                            <button type="submit" class="btn btn-danger btn-sm">删除</button>
                        </form>
                    </td>
                </tr>
                <!-- 模态框用于编辑数据 -->
                <div class="modal fade" id="editModal<?php echo $row["id"]; ?>" tabindex="-1" role="dialog"
                    aria-labelledby="editModalLabel<?php echo $row["id"]; ?>" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">