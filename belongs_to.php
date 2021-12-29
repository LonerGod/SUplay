<?php

include "config.php";

$sql_command = "SELECT * FROM belongs_to";
$result =  mysqli_query($db, $sql_command);

while ($rows = mysqli_fetch_assoc($result))
{
    $game_id = $rows['game_id'];
    $genre_id = $rows['genre_id'];
    echo $game_id . " " . $genre_id;
}

?>

