<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align = "center">Webboard Thanawat</h1><hr>
    <p align = "center">ต้องการดูกระทู้หมายเลข <?php echo $_GET["id"]; ?></p>
    <p align = "center"><?php 
        if(($_GET["id"])%2 == 0)
            echo "เป็นกระทู้หมายเลขคู่";
        else
            echo "เป็นกระทู้หมายเลขคี่";
    ?></p>
    <table style="border:2px solid black; width:40%" align="center">
        <tr><td style="background-color:#6CD2FE;">แสดงความคิดเห็น</td></tr>
        <tr><td><textarea name="comment" cols="85" rows="10"></textarea></td></tr>
        <tr><td align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
    </table>
    <p style="text-align: center;"><a href = "index.php"><ins>กลับไปหน้าหลัก</ins></a> </p>
</body>
</html>