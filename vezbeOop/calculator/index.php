<?php

include "calculator.php";
$objectl = new cal();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="calculator.css">
</head>

<body>

    <form method="post">
        <h2>Calculator</h2>
        <br>
        <hr>
        <label for="firstNumber">Set first number</label>
        <br> <br>
        <input type="Number" name="firstNumber">
        <br> <br>
        <label for="operators">Select operator</label>
        <br><br>
        <select name="operators">
            <option>None</option>
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>

        </select>
        <br><br>
        <label for="secendNumber">Set second number</label>
        <br><br>
        <input type="Number" name="secondNumber">
        <br> <br>
        <input type="submit" name="submit" value="CALCULATE">
        <br>
        <hr>
        <br>
        <?php

        if (isset($_POST['submit'])) {


            $firstNumber  = $_POST['firstNumber'];
            $secondNumber = $_POST['secondNumber'];
            $operators = $_POST['operators'];

            if ($firstNumber == "" || $secondNumber == "" || $operators == "") {
                echo "Field Must Not Be Empty";
            } elseif ($operators == "None") {
                echo "Please select an operator";
            } elseif ($operators == "+") {
                $objectl->add($firstNumber, $secondNumber);
            } elseif ($operators == "-") {
                $objectl->sub($firstNumber, $secondNumber);
            } elseif ($operators == "*") {
                $objectl->mul($firstNumber, $secondNumber);
            } elseif ($operators == "/") {
                $objectl->div($firstNumber, $secondNumber);
            }
        }
        ?>
    </form>

</body>

</html>