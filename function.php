<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function newCalc($x)
        {
            $newNum = $x * 0.75;
            echo "Here is 75% of What You Wrote".$newNum;

        
        }

        newCalc(100);
    ?>
</body>
</html>