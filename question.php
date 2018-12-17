<?php
date_default_timezone_set('Europe/Dublin');
include 'question.inc.php';
include 'dbh.inc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Title of the Question</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        
<?php
        echo "<form method = 'POST' action = '".setQuestions($conn)."'>
            <input type = 'hidden' name = 'uid' value = 'Anonymous'> 
            <input type = 'hidden' name = 'date' value = '".date('Y-m-d H:i:s')."'> 
            <textarea name = 'message'></textarea><br>
            <button type = 'submit' name = 'questionSubmit'>Post Question </button>
        </form>";
?>
    </body>
</html> 