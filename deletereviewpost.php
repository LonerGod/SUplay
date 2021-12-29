<?php

include "config.php";


if (isset($_POST['review']))
{
    $review = $_POST['review'];

    $sql_statement = "DELETE FROM reviews WHERE review_id=$review;";
    
    $result = mysqli_query($db, $sql_statement);

    header ("Location: reviews.php");
}

else
{
    echo "The form is not set.";
}

?>