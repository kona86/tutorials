<?php
class Chef
{
    function makeChicken()
    {
        echo "The chef made a cooked chicked.";
    }

    function makeSalad()
    {
        echo "The chef made a salad.";
    }
    function makeSpecialDish()
    {
        echo "The chef made bbq ribs.";
    }
}

class ItalianChef extends Chef
{
    function makePasta()
    {
        echo "Making a Pasta";
    }
    function makeSpecialDish()
    {
        echo "The chef made chicken params.";
    }
}

$my_italian_chef = new ItalianChef();
echo "<br>";
$my_italian_chef->makeChicken();
echo "<br>";
$my_italian_chef->makeSalad();
