<?php
    
    function setQuestions($conn){
        if (isset($_POST['questionSubmit'])){
                 $uid = $_POST['uid'];
                  $date = $_POST['date'];
                   $message = $_POST['message'];
                   
                   $sql = "Inserts INTO questions (uid, date, message) VALUES( '$uid', '$date', '$message')";
                   
                   //$result = mysqli_connect($conn, $sql);
                  $result = $conn->query($sql);

        }
    }
    