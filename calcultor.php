<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <div></div>
    <form method="GET">
        <input placeholder="Enter Number 1" type="text" name="num1">
        <input placeholder="Enter Number 2" type="text" name="num2">

        <select name="operator">
            <option>None</option>
            <option>Add</option>
            <option>Sub</option>
            <option>Mul</option>
            <option>Divide</option>
             </select>
                <br>
                <button name="submit" value="submit" type="submit">Calculate</button>
        

    </form>
    <h3>Ans:</h3>
    <?php 
        if (isset($_GET['submit']))
        {
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $operator = $_GET['operator'];

            switch($operator)
            {
                case "None":
                    echo "Select Operator";
                break;

                case "Add":
                    echo $result1+$result2;
                break;

                case "Sub":
                    echo $result1-$result2;
                break;

                case "Mul":
                    echo $result1*$result2;
                break;

                case "Divide":
                    echo $result1/$result2;
                break;

                
            }


        }
    ?>
</body>

</html>