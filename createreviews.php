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
                <a href="reviews.php" class="btn btn-secondary text-white">Back to review list</a>
                <a href="index.php" class="btn btn-primary text-white">Back to main page</a>
            </div>
            <div class="col-md-12 mt-2">
                <form action="createreviewspost.php" method="post">
                    <div class="form-group">
                        <label for="inputUser">Player</label>
                        <select class="custom-select" name="user" id="inputUser">
                        <?php
                            include "config.php";
                            $sql_command = "SELECT * FROM player";
                            $result = mysqli_query($db, $sql_command);

                            while ($row = mysqli_fetch_assoc($result))
                            {
                                $player_id = $row['player_id'];
                                $name = $row['name'];
                                $surname = $row['surname'];

                                echo "<option value=$player_id>" . $name . " " . $surname . "</option>";
                            }
                        ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputGame">Game</label>
                        <select class="custom-select" name="game" id="inputGame">
                        <?php
                            $sql_command = "SELECT * FROM game";
                            $result = mysqli_query($db, $sql_command);

                            while ($row = mysqli_fetch_assoc($result))
                            {
                                $game_id = $row['game_id'];
                                $name = $row['name'];

                                echo "<option value=$game_id>" . $name . "</option>";
                            }
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputReviewComment">Review Comment</label>
                        <textarea name="reviewcomment" class="form-control" id="inputReviewComment" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputReviewPoint">Review Point</label>
                        <input name="review_point" type="number" class="form-control" id="inputReviewPoint" placeholder="Enter review point">
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