<?php
class Movie
{
    public $title;
    private $rating;
    function   __construct($title, $rating)
    {
        $this->title = $title;
        $this->set_rating($rating);
    }
    function get_rating()
    {
        return $this->rating;
    }
    function set_rating($rating)
    {
        if ($rating == "G" || $rating == "PG" || $rating == "NR" || $rating == "PG-13")
            $this->rating = $rating;
        else $this->rating = "NR";
    }
}
$avengers = new Movie("avengers", "G");
$love_hurts = new Movie("Love Hurts", 3.7);

echo $avengers->get_rating();
echo "<br>";
echo $love_hurts->get_rating();
