<?php

include "config.php";


if (isset($_POST['genre_name']))
{
    $genre_name = $_POST['genre_name'];

    $sql_statement = "INSERT INTO genre(genre_name) VALUES('$genre_name')";
    $result = mysqli_query($db, $sql_statement);

    header ("Location: genres.php");
}

else
{
    echo "The form is not set.";
}

?>