<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="cal.php" method="POST">
        <input type="text" name="num1" placeholder="Number1">
        <input type="text" name="num2" placeholder="Number2">
        <select name="operator" id="">
            <option value="None">None</option>
            <option value="Add">Add</option>
            <option value="Substract">Substract</option>
            <option value="Multiply">Multiply</option>
            <option value="Divide">Divide</option>
        </select>
        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
    <p>Answer is:</p>
    <?php


    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        switch ($operator) {
            case "None":
                echo "Please select operator";
                break;
            case "Add":
                echo $num1 + $num2;
                break;
            case "Substract":
                echo $num1 - $num2;
                break;
            case "Multiply":
                echo $num1 * $num2;
                break;
            case "Divide":
                echo $num1 / $num2;
                break;
        }
    }


    ?>
</body>

</html>