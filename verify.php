<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <h1 align = "center" >Webboard Thanawat</h1><hr>
    <div align = "center">
        <?php 
            $login=$_POST["login"];
            $pasword=$_POST["password"];
            if($login == "admin" && $pasword == "ad1234")
                echo "ยินดีต้อนรับคุณ ADMIN";
            elseif($login == "member" && $pasword == "mem1234")
                echo "ยินดีต้อนรับคุณ MEMBER"; 
            else
                echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง" ;
        
        ?>
    </div>
    <p style="text-align: center;"><a href = "index.php"><ins>กลับไปหน้าหลัก</ins></a> </p>
</body>
</html>