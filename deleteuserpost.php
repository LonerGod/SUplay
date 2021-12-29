<?php

include "config.php";


if (isset($_POST['player_id']))
{
    $player = $_POST['player_id'];

    $sql_statement = "DELETE FROM player WHERE player_id=$player;";
    
    $result = mysqli_query($db, $sql_statement);

    header ("Location: users.php");
}

else
{
    echo "The form is not set.";
}

?>