<?php

include "config.php";


if (isset($_POST['game']))
{
    $requirement = $_POST['requirement'];
    $game = $_POST['game'];

    $sql_statement = "INSERT INTO requires(game_id, requirement_id) VALUES($game, $requirement)";
    $result = mysqli_query($db, $sql_statement);

    header ("Location: games.php");
}

else
{
    echo "The form is not set.";
}

?>