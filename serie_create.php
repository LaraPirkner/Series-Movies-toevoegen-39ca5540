<?php
require 'includes/connect.php';
echo "<body style='background-color:#C084EA'>";
echo "<p><a href='index.php'>Terug</a></p>" ;

if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
};

    echo  "<form method='post' action='./series_add.php'>";
    echo  "<p>Title <input type='text' name='TitleA'></p>";
    echo  "<p>Rating <input type='float' name='RatingA'></p>";
    echo  "<p>Seasons <input type='number' name='SeasonA'></p>";
    echo  "<p>Country <input type='text' name='CountryA'></p>";
    echo  "<p>Language <input type='text' name='LanguageA'></p>";
    echo  "<p>Awards <input type='text' name='AwardsA'></p>";
    echo  "<p>Description <textarea type='text' name='DescriptionA' 
    rows='15' cols='40'></textarea></p>";
    echo  "<input type='submit' value='Add'>";
    echo  "</form>"; 
    
?>