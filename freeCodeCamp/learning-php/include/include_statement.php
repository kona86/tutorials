<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include Statement</title>
</head>

<body>
    <?php
    $title = "My post";
    $author = "Nnamdi";
    include "./article_header.php";
    include "./vars.php";

    echo "Nnamdi is $my_height_in_feet. in feet.";
    
    ?>
</body>

</html>