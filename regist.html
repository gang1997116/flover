<?php
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $telephone = $_POST['telephone'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $date = $_POST['dob'];
        if ($username == ''){
            echo '<script>alert("Please enter your email！");history.go(-1);</script>';
            exit(0);
        }
        if ($password == ''){
            echo '<script>alert("Please enter your password");history.go(-1);</script>';
            exit(0);
        }
        if ($password != $repassword){
            echo '<script>alert("The repeat password must be the same as Password");history.go(-1);</script>';
            exit(0);
        }
		if ($telephone == ''){
            echo '<script>alert("Please enter your telephone number");history.go(-1);</script>';
            exit(0);
        }
        if ($firstname == ''){
            echo '<script>alert("Please enter your first name！");history.go(-1);</script>';
            exit(0);
        }
        if ($lastname == ''){
            echo '<script>alert("Please enter your last name！");history.go(-1);</script>';
            exit(0);
        }
        if ($date == ''){
            echo '<script>alert("Please select your date of birth！");history.go(-1);</script>';
            exit(0);
         }
        if($password == $repassword){
            $conn = new mysqli('127.0.0.1','s1919788','j9YxLg46Q5','s1919788');
            if ($conn->connect_error){
                echo 'failed to access the database！';
                exit(0);
            }else {
                $sql = "select username from userinfo where username = '$_POST[username]'";
                $result = $conn->query($sql);
                $number = mysqli_num_rows($result);
                if ($number) {
                    echo '<script>alert("this name has already exist");history.go(-1);</script>';
                } else {
                    $sql_insert = "insert into userinfo (username,password,telephone,firstname,lastname,gender,dob) values('$_POST[username]','$_POST[password]','$_POST[telephone]','$_POST[firstname]','$_POST[lastname]','$_POST[gender]','$_POST[dob]')";
                    $res_insert = $conn->query($sql_insert);
                    if ($res_insert) {
                        echo '<script>window.location="log.html";</script>';
                    } else {
                        echo "<script>alert('The system is busy, please try again later');</script>";
                    }
                }
            }
        }else{
            echo "<script>alert('submitted unsucessfully！'); history.go(-1);</script>";
        }
?>

