<?php

include "config.php";

$sql_command = "SELECT * FROM owns";
$result =  mysqli_query($db, $sql_command);

while ($rows = mysqli_fetch_assoc($result))
{
    $play_id = $rows['play_id'];
    $user_id = $rows['user_id'];
    $achievement_id = $rows['achievement_id'];
    echo $play_id . " " . $user_id . " " . $achievement_id;
}

?>
