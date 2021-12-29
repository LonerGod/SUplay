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
                <a href="createlanguages.php" class="btn btn-success text-white">Create language</a>
                <a href="index.php" class="btn btn-primary text-white">Back to main page</a>
            </div>

            <div class="col-md-12 mt-2">
              <form action = 'searchlanguage.php' method="post">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="">Search as name:</span>
                    </div>
                    <input name = "languagesearch" type="text" class="form-control">
                    <button type="submit" class="btn btn-primary text-white">Search</button>
                  </div>
                  </form>
            </div>
            <table class="table table-hover mt-3">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    include "config.php";


                    if (isset($_POST['languagesearch']))
                    {
                        $language = $_POST['languagesearch'];

                        $sql_statement = "SELECT  * FROM language WHERE language_name LIKE '$language%';";

                        $result = mysqli_query($db, $sql_statement);
                    
                        while ($rows = mysqli_fetch_assoc($result))
                        {
                            $language_id = $rows['language_id'];
                            $language_name = $rows['language_name'];
                            echo "<tr>" . "<th scope='row'>" . $language_id . "</th>" . "<th>" . $language_name . "<th><form method=post action=deletelanguagepost.php><button name=language value=$language_id type='submit' class='btn btn-danger'> X </button></form></th>". "</tr>";
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