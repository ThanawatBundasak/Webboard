<?php
    session_start();
    if(!isset($_SESSION['id'])){
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
    <title>Webboard Thanawat</title>
    <style type="text/css">
        .center{text-align: center;}
    </style>
</head>
<body>
    <h1 class="center">Webboard Thanawat</h1><hr>
    <div>
        <?php
            echo "ผู้ใช้ : $_SESSION[username]" ;
        ?>
        <table style="border-collapse: collapse; width:40%">
            <tr><td>หมวดหมู่ :</td>
                <td>
                    <select name="category">
                    <option value="all">--ทั้งหมด--</option>
                    <option value="general">เรื่องทั่วไป</option>
                    <option value="study">เรื่องเรียน</option>
                    </select>
                </td>
            </tr>
            <tr><td>หัวข้อ :</td><td><input type="text" name="head" size="30"></td></tr>
            <tr><td>เนื้อหา :</td><td><textarea name="comment" cols="50" rows="10"></textarea><br><input type="submit" value="บันทึกข้อความ"></td></tr>
        </table>
    </div>       
</body>
</html>
<form>