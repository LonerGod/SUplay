<?php

include "config.php";


if (isset($_POST['gamesearch']))
{
    $game = $_POST['gamesearch'];

    $sql_statement = "SELECT FROM game WHERE name LIKE=%$game;";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: games.php");
}

else
{
    echo "The form is not set.";
}

?>