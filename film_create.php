<?php
require 'includes/connect.php';
echo "<body style='background-color:#C084EA'>";
echo "<p><a href='index.php'>Terug</a></p>" ;

if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
};

    echo  "<form method='post' action='./film_add.php'>";
    echo  "<p>Title <input type='text' name='TitleA'></p>";
    echo  "<p>Duur <input type='float' name='DuurA'></p>";
    echo  "<p>Datum <input type='date' name='DateA'></p>";
    echo  "<p>Country <input type='text' name='CountryA'></p>";
    echo  "<p>Description <textarea type='text' name='DescriptionA' 
    rows='15' cols='40'></textarea></p>";
    echo  "<p>Video <input type='text' name='VideoA'></p>";    
    echo  "<input type='submit' value='Add'>";
    echo  "</form>";


?>