<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <?php
    function say_hi($name, $age)
    {
        echo "Hello $name,you are $age <br>";
    }
    say_hi("Tommy", 20);
    say_hi("Love", 21);
    say_hi("Tommy", 24);
    ?>

</body>

</html>