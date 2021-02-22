<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo max(3, 5);
    echo "<br>";
    function get_max($num1, $num2)
    {
        if ($num1 > $num2) return $num1;
        else if ($num2 > $num1) return $num2;
        else return $num1;
    }
    echo max(5, 5) === get_max(5, 5);
    ?>
</body>

</html>