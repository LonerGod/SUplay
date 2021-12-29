<?php

include "config.php";


if (isset($_POST['hardware_requirement']))
{
    $hardware = $_POST['hardware_requirement'];

    $sql_statement = "DELETE FROM hardware_requirement WHERE requirement_id=$hardware;";
    
    $result = mysqli_query($db, $sql_statement);

    header ("Location: hardwarerequirements.php");
}

else
{
    echo "The form is not set.";
}

?>