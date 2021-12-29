<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>SUPLAY</title>
  </head>
  <body>
    

    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <a href="creategame.php" class="btn btn-success text-white">Create game</a>
                <a href="addgenre.php" class="btn btn-success text-white">Add genre for game</a>
                <a href="addlanguage.php" class="btn btn-success text-white">Add language for game</a>
                <a href="addhardwarerequirement.php" class="btn btn-success text-white">Add hardware requirement for game</a>
                <a href="index.php" class="btn btn-primary text-white">Back to main page</a>
            </div>

            <div class="col-md-12 mt-2">,
              <form action='searchgame.php' method="post">
                
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="">Search as name:</span>
                    </div>
                    <input name="gamesearch" type="text" class="form-control">
                    <button type="submit" class="btn btn-primary text-white">Search</button>
                  </div>
                  </form>
            </div>
            <table class="table table-hover mt-3">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Average rate</th>
                    <th scope="col">Release date</th>
                    <th scope="col">Total time played</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                <?php

                    include "config.php";
                    $sql_command = "SELECT * FROM game";
                    $result =  mysqli_query($db, $sql_command);
                    while ($rows = mysqli_fetch_assoc($result))
                    {
                        $game_id = $rows['game_id'];
                        $name = $rows['name'];
                        $avr_rate = $rows['avr_rate'];
                        $release_date = $rows['release_date'];
                        $time_played = $rows['time_played'];
                        echo "<tr>" . "<th scope='row'>" . $game_id . "</th>" . "<th>" . $name . "</th>" . "<th>" . $avr_rate . "</th>".  "<th>" . $release_date . "</th>". "<th>" . $time_played . "</th>" . "<th><form method=post action=deletegamepost.php><button name=game value=$game_id type='submit' class='btn btn-danger'> X </button></form></th>". "</tr>";
                    }
                    ?>
                </tbody>
              </table>
        </div>
    
    </div>
    
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>