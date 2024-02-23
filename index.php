<?php

// Definition of the Movie class
class Movie
{
    // Instance variables
    public $title;
    public $director;
    public $year;

    // Constructor
    public function __construct($title, $director, $year)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
    }

    // Method to print movie information
    public function printInfo()
    {
        echo "Title: " . $this->title . "<br>";
        echo "Director: " . $this->director . "<br>";
        echo "Year: " . $this->year . "<br>";
    }
}

// Instantiation of two Movie objects
$movie1 = new Movie("The Godfather", "Francis Ford Coppola", 1972);
$movie2 = new Movie("Forrest Gump", "Robert Zemeckis", 1994);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <title>PHP OOP 1</title>
</head>

<body>

    <h2>Film 1</h2>
    <ul>
        <li>Title:
            <?= $movie1->title ?>
        </li>
        <li>Director:
            <?= $movie1->director ?>
        </li>
        <li>Year:
            <?= $movie1->year ?>
        </li>
    </ul>

    <h2>Film 2</h2>
    <ul>
        <li>Title:
            <?= $movie2->title ?>
        </li>
        <li>Director:
            <?= $movie2->director ?>
        </li>
        <li>Year:
            <?= $movie2->year ?>
        </li>
    </ul>

</body>

</html>