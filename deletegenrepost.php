<?php

include "config.php";


if (isset($_POST['genre']))
{
    $genre = $_POST['genre'];

    $sql_statement = "DELETE FROM genre WHERE genre_id=$genre;";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: genres.php");
}

else
{
    echo "The form is not set.";
}

?>