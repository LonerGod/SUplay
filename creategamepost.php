<?php

include "config.php";


if (isset($_POST['game_name']))
{
    $name = $_POST['game_name'];
    $avr_rate = $_POST['game_avgrate'];
    $release_date = $_POST['game_releasedate'];
    $time_played = $_POST['game_timeplayed'];

    $sql_statement = "INSERT INTO game(name,avr_rate,release_date,time_played) VALUES('$name','$avr_rate', '$release_date', $time_played)";
    
    $result = mysqli_query($db, $sql_statement);

    header ("Location: games.php");
}

else
{
    echo "The form is not set.";
}

?>