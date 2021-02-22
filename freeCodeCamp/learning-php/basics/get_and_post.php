<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--    
        get is visible in the url and 
        post hides and send the information 
        to the server. the data does not live in the browser 
        it is sent as oppsoed to get.
        -->
    <form action="get_and_post.php" method="post">
        Password: <input type="password" name="password">
        <input type="submit"> </input>
    </form>
    <?php
    echo $_POST["password"];
    ?>
</body>

</html>