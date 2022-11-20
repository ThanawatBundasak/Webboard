<?php
    session_start();
    $topic = $_POST['topic'];
    $content = $_POST['comment'];
    $category = $_POST['category'];
    $user_id = $_SESSION['id'];
    
    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
    $sql="INSERT INTO post (title,content,post_date,cat_id,user_id) VALUES ('$topic','$content',NOW(),$category,$user_id)";
    $conn->exec($sql);
    $conn = null;
    header("location:index.php");
?>