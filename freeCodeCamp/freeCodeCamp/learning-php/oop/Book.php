<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
</head>

<body>
    <?php
    class Book
    {
        var $title;
        var $author;
        var $pages;
        function __construct($title, $author, $pages)
        {
            $this->title = $title;
            $this->author = $author;
            $this->pages = $pages;
        }
    }
    $book1 = new Book( "JK Rowing","Harry potter",350);
    echo $book1->pages;
    echo "<br>";
    $book2 = new Book("Last day on earth.", "Nnamdi Michael Okpala", 700);
    echo $book2->pages;

    ?>
</body>

</html>