<?php

include "config.php";


if (isset($_POST['devcomp_name']))
{
    $devcomp_name = $_POST['devcomp_name'];

    $sql_statement = "INSERT INTO development_company(company_name) VALUES('$devcomp_name')";
    $result = mysqli_query($db, $sql_statement);

    header ("Location: developmentcompanies.php");
}

else
{
    echo "The form is not set.";
}

?>