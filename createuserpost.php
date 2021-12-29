<?php

include "config.php";


if (isset($_POST['user_name']))
{
    $name = $_POST['user_name'];
    $user_surname = $_POST['user_surname'];
    $user_coin = $_POST['user_coin'];
    $user_birthdate = $_POST['user_birthdate'];
    $user_email = $_POST['user_email'];
    $user_phonenumber = $_POST['user_phonenumber'];
    $user_region = $_POST['user_region'];

    $sql_statement = "INSERT INTO player(name,surname,suplay_coin,birth_date,email,phone_number,region) VALUES('$name','$user_surname', $user_coin, $user_birthdate, '$user_email', $user_phonenumber, '$user_region')";
    $result = mysqli_query($db, $sql_statement);

    header ("Location: users.php");
}

else
{
    echo "The form is not set.";
}

?>