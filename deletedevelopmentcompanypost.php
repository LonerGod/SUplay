<?php

include "config.php";


if (isset($_POST['development_company']))
{
    $hardware = $_POST['development_company'];

    $sql_statement = "DELETE FROM development_company WHERE company_id=$hardware;";
    
    $result = mysqli_query($db, $sql_statement);

    header ("Location: developmentcompanies.php");
}

else
{
    echo "The form is not set.";
}

?>