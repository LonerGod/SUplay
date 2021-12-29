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
                <a href="games.php" class="btn btn-secondary text-white">Back to games list</a>
                <a href="index.php" class="btn btn-primary text-white">Back to main page</a>
            </div>
            <div class="col-md-12 mt-2">
                <form action="addlanguagepost.php" method="post">
                    <div class="form-group">
                        <label for="inputGame">Game</label>
                        <select class="custom-select" name="game" id="inputGame">
                        <?php
                            include "config.php";
                            $sql_command = "SELECT game_id, name name FROM game";
                            $result = mysqli_query($db, $sql_command);

                            while ($row = mysqli_fetch_assoc($result))
                            {
                                $game_id = $row['game_id'];
                                $game_name = $row['name'];

                                echo "<option value=$game_id>" . $game_name . "</option>";
                            }
                        ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputlanguage">Language</label>
                        <select class="custom-select" name="language" id="inputlanguage">
                        <?php
                           
                            $sql_command = "SELECT language_id, language_name FROM language";
                            $result = mysqli_query($db, $sql_command);

                            while ($row = mysqli_fetch_assoc($result))
                            {
                                $language_id = $row['language_id'];
                                $language_name = $row['language_name'];

                                echo "<option value=$language_id>" . $language_name . "</option>";
                            }
                        ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Submit</button>
                  </form>
            </div>
        </div>
    
    </div>
    
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>