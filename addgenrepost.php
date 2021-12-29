<?php

include "config.php";


if (isset($_POST['game']))
{
    $genre = $_POST['genre'];
    $game = $_POST['game'];

    $sql_statement = "INSERT INTO belongs_to(game_id, genre_id) VALUES($game, $genre)";
    $result = mysqli_query($db, $sql_statement);

    header ("Location: games.php");
}

else
{
    echo "The form is not set.";
}

?>