<?php

include "config.php";


if (isset($_POST['cpu_model']))
{
    $cpu_model = $_POST['cpu_model'];
    $gpu_model = $_POST['gpu_model'];
    $ram = $_POST['ram'];
    $disk_space = $_POST['disk_space'];

    $sql_statement = "INSERT INTO hardware_requirement(cpu_model,gpu_model,ram,disk_space) VALUES('$cpu_model','$gpu_model', '$ram', '$disk_space')";
    
    $result = mysqli_query($db, $sql_statement);

    header ("Location: hardwarerequirements.php");
}

else
{
    echo "The form is not set.";
}

?>