<?php

include "config.php";

$sql_command = "SELECT * FROM plays";
$result =  mysqli_query($db, $sql_command);

while ($rows = mysqli_fetch_assoc($result))
{
    $play_id = $rows['play_id'];
    $game_id = $rows['game_id'];
    $user_id = $rows['user_id'];
    $date = $rows['date'];
    $time_played = $rows['time_played'];
    $bought_price = $rows['bought_price'];
    echo $play_id . " " . $game_id . " " . $user_id . " " . $date . " " . $time_played . " " . $bought_price;
}

?>

<form>
<div class="form-group">
<label for="inputName">Name</label>
<input name="user_name" type="text" class="form-control" id="inputName" placeholder="Enter name of the user">
</div>
<div class="form-group">
<label for="inputSurname">Surname</label>
<input name="user_surname" type="text" class="form-control" id="inputSurname" placeholder="Enter surname of the user">
</div>
<div class="form-group">
<label for="inputSuCoin">SuPlay coin</label>
<input name="user_coin" type="number" class="form-control" id="inputSuCoin" placeholder="Enter suplay coin of the user">
</div>
<div class="form-group">
<label for="inputBirthDate">Birth date</label>
<input name="user_birthdate" type="date" class="form-control" id="inputBirthDate" placeholder="Enter birthdate of the user">
</div>
<div class="form-group">
<label for="inputEmail">Email</label>
<input name="user_email" type="email" class="form-control" id="inputEmail" placeholder="Enter email of the user">
</div>
<div class="form-group">
<label for="inputPhonenumber">Phone number</label>
<input name="user_phonenumber" type="text" class="form-control" id="inputPhonenumber" placeholder="Enter phone number of the user">
</div>
<div class="form-group">
<label for="inputRegion">Region</label>
<input name="user_region" type="text" class="form-control" id="inputRegion" placeholder="Enter email of the user">
</div>
<button type="submit" class="btn btn-success w-100">Submit</button>
</form>