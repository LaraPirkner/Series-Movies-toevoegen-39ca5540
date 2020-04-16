<?php
    require 'includes/connect.php';
    
    $title=$_POST['TitleA'];
    $rating=$_POST['RatingA'];
    $description=$_POST['DescriptionA'];
    $awards=$_POST['AwardsA'];
    $seasons=$_POST['SeasonA'];
    $country=$_POST['CountryA'];
    $language=$_POST['LanguageA'];


    $sql="INSERT INTO series SET Title=? , Rating=?,
    Description=?, Awards=?, Season=?, Country=?, Language=?";
    $stnt=$pdo->prepare($sql);
    $stnt->execute([$title,$rating,$description,
    $awards,$seasons,$country,$language]);

    echo "<body style='background-color:#C084EA'>";
    echo "<p><a href='index.php'>Terug</a></p>" ;

?>