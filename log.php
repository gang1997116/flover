<?php session_start();?>

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
        echo 'fail to access the database！';
        exit(0);
    }else{
        if ($username == ''){
            echo '<script>alert("Please enter your email address.");history.go(-1);</script>';
            exit(0);
        }
        if ($password == ''){
            echo '<script>alert("Please enter your password！");history.go(-1);</script>';
            exit(0);
        }
        $sql = "select username,password from userinfo where username = '$_POST[username]' and password = '$_POST[password]'";
        $result = $conn->query($sql);
        $number = mysqli_num_rows($result);
        if ($number) {
			$_SESSION["username"]=$username; //
            echo '<script>window.location="index.php";</script>';
        } else {
            echo '<script>alert("Please re-enter your email address and password.");history.go(-1);</script>';
        }
    }
?>
</body>
</html>