<?php

include "config.php";


if (isset($_POST['game']))
{
    $language = $_POST['language'];
    $game = $_POST['game'];

    $sql_statement = "INSERT INTO supports(game_id, language_id) VALUES($game, $language)";
    $result = mysqli_query($db, $sql_statement);

    header ("Location: games.php");
}

else
{
    echo "The form is not set.";
}

?>