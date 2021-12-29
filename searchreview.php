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
                <a href="createreviews.php" class="btn btn-success text-white">Create review</a>
                <a href="index.php" class="btn btn-primary text-white">Back to main page</a>
            </div>

            <div class="col-md-12 mt-2">
              <form action= 'searchreview.php' method = "post" >
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="">Search as name:</span>
                    </div>
                    <input name = "searchreview" type="text" class="form-control">
                    <button type="submit" class="btn btn-primary text-white">Search</button>
                  </div>
                  </form>
            </div>
            <table class="table table-hover mt-3">
                <thead>
                  <tr>
                    <th scope="col">Game</th>
                    <th scope="col">User</th>
                    
                    <th scope="col">Review comment</th>
                    <th scope="col">Review point</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    include "config.php";


                    if (isset($_POST['searchreview']))
                    {
                        $comment = $_POST['searchreview'];

                        $sql_command = "SELECT player.name as 'name1', game.name as 'name', reviews.review_comment, reviews.review_point, reviews.review_id FROM reviews, player, game WHERE reviews.game_id = game.game_id AND reviews.player_id = player.player_id AND (reviews.review_comment LIKE '$comment%')";

                        $result = mysqli_query($db, $sql_command);
                        
                        while ($rows = mysqli_fetch_assoc($result))
                        {
                            $game_id = $rows['name'];
                            $review_id= $rows['review_id'];
                            $user_id = $rows['name1'];
                            $review_comment = $rows['review_comment'];
                            $review_point = $rows['review_point'];
                            echo "<tr>" . "<th scope='row'>" . $game_id . "</th>" . "<th>" . $user_id . "</th>" . "<th>" . $review_comment . "</th>".  "<th>" . $review_point . "<th><form method=post action=deletereviewpost.php><button name=review value=$review_id type='submit' class='btn btn-danger'> X </button></form></th>". "</tr>";
                        }
                    }

                    else
                    {
                        echo "The form is not set.";
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