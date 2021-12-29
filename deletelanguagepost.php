<?php

include "config.php";


if (isset($_POST['language']))
{
    $game = $_POST['language'];

    $sql_statement = "DELETE FROM language WHERE language_id=$game;";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: languages.php");
}

else
{
    echo "The form is not set.";
}

?>