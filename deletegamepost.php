<?php

include "config.php";


if (isset($_POST['game']))
{
    $game = $_POST['game'];

    $sql_statement = "DELETE FROM game WHERE game_id=$game;";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: games.php");
}

else
{
    echo "The form is not set.";
}

?>