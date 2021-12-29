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
                <a href="users.php" class="btn btn-secondary text-white">Back to users list</a>
                <a href="index.php" class="btn btn-primary text-white">Back to main page</a>
            </div>
            <div class="col-md-12 mt-2">
                <form action="createuserpost.php" method="post">
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