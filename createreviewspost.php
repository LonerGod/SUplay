<?php

include "config.php";


if (isset($_POST['user']))
{
    $user = $_POST['user'];
    $game = $_POST['game'];
    $reviewcomment = $_POST['reviewcomment'];
    $review_point = $_POST['review_point'];

    $sql_statement = "INSERT INTO reviews(game_id, player_id, review_comment, review_point) VALUES($game, $user, '$reviewcomment', $review_point)";
    $result = mysqli_query($db, $sql_statement);

    header ("Location: reviews.php");
}

else
{
    echo "The form is not set.";
}

?>