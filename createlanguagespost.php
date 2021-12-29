<?php

include "config.php";


if (isset($_POST['language_name']))
{
    $language_name = $_POST['language_name'];

    $sql_statement = "INSERT INTO language(language_name) VALUES('$language_name')";
    $result = mysqli_query($db, $sql_statement);

    header ("Location: languages.php");
}

else
{
    echo "The form is not set.";
}

?>