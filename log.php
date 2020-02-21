<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <link type="text/css" rel="stylesheet" href="css/log-style.css">
    <link type="text/css" rel="stylesheet" href="css/nav.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = new mysqli('127.0.0.1','s1919788','j9YxLg46Q5','s1919788');
    if ($conn->connect_error){
        echo '数据库连接失败！';
        exit(0);
    }else{
        if ($username == ''){
            echo '<script>alert("请输入用户名！");history.go(-1);</script>';
            exit(0);
        }
        if ($password == ''){
            echo '<script>alert("请输入密码！");history.go(-1);</script>';
            exit(0);
        }
        $sql = "select username,password from flower where username = '$_POST[username]' and password = '$_POST[password]'";
        $result = $conn->query($sql);
        $number = mysqli_num_rows($result);
        if ($number) {
			$_SESSION["username"]=$username; //
            echo '<script>window.location="index.html";</script>';
        } else {
            echo '<script>alert("用户名或密码错误！");history.go(-1);</script>';
        }
    }
?>
</body>
</html>