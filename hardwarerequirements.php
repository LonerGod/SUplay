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
                <a href="createhardwarerequirements.php" class="btn btn-success text-white">Create hardware requirement</a>
                <a href="index.php" class="btn btn-primary text-white">Back to main page</a>
            </div>

            <div class="col-md-12 mt-2">
              <form action= "hrdwsearch.php" method= "post">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="">Search as name:</span>
                    </div>
                    <input name = "hrdwsearch" type="text" class="form-control">
                    <button type="submit" class="btn btn-primary text-white">Search</button>
                  </div>
                  </form>
            </div>
            <table class="table table-hover mt-3">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cpu model</th>
                    <th scope="col">Gpu model</th>
                    <th scope="col">RAM</th>
                    <th scope="col">Disk Space</th>
                    <th scope="col"></th>

                    <th></th>
                  </tr>
                </thead>
                <tbody>

                    <?php
                    
                      include "config.php";
                      $sql_command = "SELECT * FROM hardware_requirement";
                      $result =  mysqli_query($db, $sql_command);

                      while ($rows = mysqli_fetch_assoc($result))
                      {
                          $requirement_id = $rows['requirement_id'];
                          $cpu_model = $rows['cpu_model'];
                          $gpu_model = $rows['gpu_model'];
                          $ram = $rows['ram'];
                          $disk_space = $rows['disk_space'];
                          echo "<tr>" . "<th scope='row'>" . $requirement_id . "</th>" . "<th>" . $cpu_model. "</th>". "<th>" . $gpu_model. "</th>". "<th>" . $ram. "</th>". "<th>" . $disk_space. "<th><form method=post action=deletehardwarerequirementspost.php><button name=hardware_requirement value=$requirement_id type='submit' class='btn btn-danger'> X </button></form></th>". "</tr>";
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