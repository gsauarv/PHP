<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel= "stylesheet" type ="text/css" href="style.css">
</head>
<body>
    

<?php
    $dayofWeek = date('w');
    switch($dayofWeek)
    {
        case 0:
            echo "<p>Sunday</p>";
        break;

        case 1:
            echo "<p>Monday</p>";
        break;

        case 2:
            echo "<p>Tuesday</p>";
        break;

        case 3:
            echo "<p>Wednesday<p>";
        break;

        case 4:
            echo "<p>Thursday</p>";
        break;

        case 5:
            echo "<p>Friday</p>";
        break;

        case 6:
            echo "<p>Saturday</p>";
        break;

      

        
    }
?>
</body>
</html>