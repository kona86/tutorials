<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>

<body>
    <?php
    $CharacterName = "Nnamdi";
    $age = 19;
    echo "<h1>my name is $CharacterName</h1>";
    echo "<p>I am $age years old.</p>";

    $mystr = "GIRAFFE ACADEMY";
    echo strtoupper($mystr); // uppercase
    echo "<br>"; // 

    echo strlen($mystr); //strlen
    echo "<br>"; // 

    echo $mystr[1];  //slice
    echo "<br>"; // 
    echo str_replace("GIRAFFE", "PANDA", $mystr); //
    echo "<br>"; // 

    echo substr($mystr,8);
    ?>
</body>

</html>