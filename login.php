<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .center{text-align: center;}
        table th{
            text-align: left;color:black;background-color: #6CD2FE;   
        }
    </style>
</head>
<body>
    <h1 class="center">Webboard Thanawat</h1><hr>
    <form action="verify.php" method="post">
        <table style="border:2px solid black; width:40%" align="center">
            <tr><th colspan="2">เข้าสู่ระบบ</th></tr>
            <tr><td>Login</td><td><input type="text" name="login" size="30"></td></tr>
            <tr><td>Password</td><td><input type="password" name="password" size="30"></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="Login"></td></tr>
        </table>
    </form>
    <p style="text-align: center;">ถ้ายังไม่ได้เป็นสมาชิก<a href = "register.php"><ins>กรุณาสมัครสมาชิก</ins></a> </p>
</body>
</html>