<?php

    include "calcuclass.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="calcu.php" method="POST">
        <label for="num">Input 1st number:</label>
        <input type="number" id="num" name="num" required>
        <br>

        <label for="oper">addition</label>
        <input type="radio" name="operation" value="addition">
        </input> <br>

        <label for="oper">subtraction</label>
        <input type="radio" name="operation" value="subtraction">
        </input> <br>

        <label for="num2">Input 2nd number:</label>
        <input type="number" id="num2" name="num2" required>

        <input type="submit" name="sub" value="Submit">
    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"] === "POST"){
            if(isset($_POST['sub']) && isset($_POST['operation'])){
                $calc = new calculator($_POST['num'], $_POST['num2'], $_POST['operation']);
                echo $calc->executee();
            } else {
                echo ("ENTER VALUE");
            }
        }

    ?>

</body>
</html>