<?php

include "config.php";

$sql_command = "SELECT * FROM develops";
$result =  mysqli_query($db, $sql_command);

while ($rows = mysqli_fetch_assoc($result))
{
    $company_id = $rows['company_id'];
    $game_id = $rows['game_id'];
    echo $company_id . " " . $game_id;
}

?>

<form>
<div class="form-group">
<label for="inputCompanyId">Company id</label>
<input name="company_id" type="text" class="form-control" id="company_id" placeholder="Enter id of the company">
</div>
<div class="form-group">
<label for="inputGameID">Game id</label>
<input name="game_id" type="text" class="form-control" id="game_id" placeholder="Enter id of the game">
</div>
<button type="submit" class="btn btn-success w-100">Submit</button>
</form>