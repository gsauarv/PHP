<?php
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p>Enter Data in the Database</p>
    <form action ="signup.php" method="POST">
        <input name="id" placeholder="Enter id" type="text">
        <input name="username" placeholder="Enter username" type="text">
        <input name="subject" placeholder="Enter subject" type = "text">
        <input name="content" placeholder="Enter Content" type="text">
       
        <button type = "submit" name= "submit">signup</button>
    </form>

   
</body>

</html>