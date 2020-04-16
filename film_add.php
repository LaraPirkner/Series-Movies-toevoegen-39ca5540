<?php
    require 'includes/connect.php';
    
    $title=$_POST['TitleA'];
    $duur=$_POST['DuurA'];
    $datum=$_POST['DateA'];
    $land=$_POST['CountryA'];
    $description=$_POST['DescriptionA'];
    $video=$_POST['VideoA'];

    $sql="INSERT INTO films SET Title=? , Duur=?, Datum=?, Land=?,
     Description=?, Video=? ";
    $stnt=$pdo->prepare($sql);
    $stnt->execute([$title,$duur,$datum,
    $land,$description,$video]);

    echo "<body style='background-color:#CAEA84'>";
    echo "<p><a href='index.php'>Terug</a></p>" ;

?>