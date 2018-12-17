<?php
$conn = mysqli_connect('localhost', 'root', '', 'commentsection');

if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
}





/*$username = 'root';
$dsn      = 'mysql:host=localhost; dbname=register';
$password = '';




try{
    $db= new PDO($uid, $date, $message);
    
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "connected to the database";
}catch(PDOException $ex){
    echo "connection failed".$ex->getMessage();
}*/