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
    <title>Register</title>
    <style>
        table th{
            text-align: left;color:black;background-color: #6CD2FE;   
        }
    </style>
</head>
<body>
    <table style="border:2px solid black; width:40%" align="center">
        <tr><th colspan="2">กรอกข้อมูล</th></tr>
        <tr><td>ชื่อบัญชี :</td><td><input type="text" name="user" size="30"></td></tr>
        <tr><td>รหัสผ่าน :</td><td><input type="password" name="password" size="30"></td></tr>
        <tr><td>ชื่อ-นามสกุล :</td><td><input type="text" name="name" size="30"></td></tr>
        <tr><td>เพศ :</td><td>
            <input type="radio" name="gender" value="m">ชาย<br>
            <input type="radio" name="gender" value="f">หญิง<br>
            <input type="radio" name="gender" value="o">อื่นๆ<br>
        </td></tr>
        <tr><td>อีเมล :</td><td><input type="text" name="email" size="30"></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="สมัครสมาชิก"></td></tr>
    </table>
    <p style="text-align: center;"><a href = "index.html"><ins>กลับไปหน้าหลัก</ins></a> </p>
</body>
</html>