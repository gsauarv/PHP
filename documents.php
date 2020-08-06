<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="session.php">Home</a></li>
            <li><a href="session1.php">Contact</a></li>
        </ul>
    </nav>
    

    <?php
        $_SESSION["username"] = "saurav123";
        echo $_SESSION["username"];
        if(isset($_SESSION["username"]))
        {
            echo "<br>"."You are Logged In";
        }

        else
        {
            echo "<br>"."You Are Not Loged In";
        }
    ?>
