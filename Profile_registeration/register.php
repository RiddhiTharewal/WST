<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a453be35db.js" crossorigin="anonymous"></script>
</head>
<body style="background-color: hsl(0, 0%, 96%);"><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

    <nav class="navbar navbar-fixed-top navbar-dark bg-secondary">
        <a class="navbar-brand" href="#">Profile</a>
    </nav>

    <section class="w-80 p-4 d-flex justify-content-center pb-2">
        <div style="width: 40%; margin-top: 1rem;">   
          <!-- content -->
          <div class="content">
            <div  id="register">
              <form action="register_backend.php" method="POST" enctype="multipart/form-data">
                <h2>Register for Social Media: </h2>
                <br> <br>
                <!--Name Input-->
                <div class="form-outline mb-4">
                <label class="form-label" for="name" style="margin-left: 0px;">Name</label>

                    <input type="text" name="name" class="form-control" required>
                      <div class="form-notch">
                          <div class="form-notch-leading" style="width: 9px;"></div>
                          <div class="form-notch-middle" style="width: 66.4px;"></div>
                          <div class="form-notch-trailing"></div>
                      </div>
                </div>

                <!-- Username input -->
                <div class="form-outline mb-4">
                <label class="form-label" for="username" style="margin-left: 0px;">Username</label>

                  <input type="text" name="username" id="username" class="form-control" required>
                    <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;"></div>
                        <div class="form-notch-middle" style="width: 66.4px;"></div>
                        <div class="form-notch-trailing"></div>
                    </div>
                </div>
  
                <!-- Email input -->
                <div class="form-outline mb-4">
                <label class="form-label" for="email" style="margin-left: 0px;">Email</label>

                  <input type="email" name="email" id="email" class="form-control" maxlength="255" required>
                  <div class="form-notch">
                    <div class="form-notch-leading" style="width: 9px;"></div>
                    <div class="form-notch-middle" style="width: 66.4px;"></div>
                    <div class="form-notch-trailing"></div>
                  </div>
                </div>
  
                <!-- Password input -->
                <div class="form-outline mb-4">
                <label class="form-label" for="password" style="margin-left: 0px;">Password</label>

                  <input type="password" name="password" class="form-control" maxlength="255" required>
                    <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;"></div>
                        <div class="form-notch-middle" style="width: 66.4px;"></div>
                        <div class="form-notch-trailing"></div>
                    </div>
                </div>
  
                <!--Mobile Input-->
                <div class="form-outline mb-4">
                <label class="form-label" for="mobile" style="margin-left: 0px;">Mobile</label>

                    <input type="text" name="mobile" class="form-control" minlength="10" maxlength="10" required>
                      <div class="form-notch">
                          <div class="form-notch-leading" style="width: 9px;"></div>
                          <div class="form-notch-middle" style="width: 66.4px;"></div>
                          <div class="form-notch-trailing"></div>
                      </div>
                </div>

                <!--City Input-->
                <div class="form-outline mb-4">
                <label class="form-label" for="city" style="margin-left: 0px;">City</label>

                    <input type="text" name="city" class="form-control" maxlength="255" required>
                      <div class="form-notch">
                          <div class="form-notch-leading" style="width: 9px;"></div>
                          <div class="form-notch-middle" style="width: 66.4px;"></div>
                          <div class="form-notch-trailing"></div>
                      </div>
                </div>

                <!--State Input-->
                <div class="form-outline mb-4">
                <label class="form-label" for="state" style="margin-left: 0px;">State</label>

                    <input type="text" name="state" class="form-control" maxlength="255" required>
                      <div class="form-notch">
                          <div class="form-notch-leading" style="width: 9px;"></div>
                          <div class="form-notch-middle" style="width: 66.4px;"></div>
                          <div class="form-notch-trailing"></div>
                      </div>
                </div>

                <!--Country Input-->
                <div class="form-outline mb-4">
                <label class="form-label" for="country" style="margin-left: 0px;">Country</label>

                    <input type="text" name="country" class="form-control" maxlength="255" required>
                      <div class="form-notch">
                          <div class="form-notch-leading" style="width: 9px;"></div>
                          <div class="form-notch-middle" style="width: 66.4px;"></div>
                          <div class="form-notch-trailing"></div>
                      </div>
                </div>

                <!--Education Input-->
                <div class="form-outline mb-4">
                <label class="form-label" for="education" style="margin-left: 0px;">Education</label>

                    <input type="text" name="education" class="form-control" maxlength="255" required>
                      <div class="form-notch">
                          <div class="form-notch-leading" style="width: 9px;"></div>
                          <div class="form-notch-middle" style="width: 66.4px;"></div>
                          <div class="form-notch-trailing"></div>
                      </div>
                </div>

                <!--Skills Input-->
                <div class="form-outline mb-4">
                <label class="form-label" for="skills" style="margin-left: 0px;">Skills</label>

                    <textarea name="skills" class="form-control" maxlength="255" required></textarea>
                      <div class="form-notch">
                          <div class="form-notch-leading" style="width: 9px;"></div>
                          <div class="form-notch-middle" style="width: 66.4px;"></div>
                          <div class="form-notch-trailing"></div>
                      </div>
                </div>

                <!--Interests Input-->
                <div class="form-outline mb-4">
                <label class="form-label" for="interests" style="margin-left: 0px;">Interests</label>

                    <textarea name="interests" class="form-control" maxlength="255" required></textarea>
                      <div class="form-notch">
                          <div class="form-notch-leading" style="width: 9px;"></div>
                          <div class="form-notch-middle" style="width: 66.4px;"></div>
                          <div class="form-notch-trailing"></div>
                      </div>
                </div>

                <!--Profile Picture Input-->
                <div class="form-outline mb-4">
                    <label class="form-label" for="profile" style="margin-left: 0px;" maxlength="255">Profile Picture</label>
                    <input type="file" name="profile" id="profile" class="form-control-file" style="margin-left: 40%;" required>
                      <div class="form-notch">
                          <div class="form-notch-leading" style="width: 9px;"></div>
                          <div class="form-notch-middle" style="width: 66.4px;"></div>
                          <div class="form-notch-trailing"></div>
                      </div>
                </div>
                <br>
  
                <!-- Terms and Conditions -->
                <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked="" aria-describedby="registerCheckHelpText" required>
                  <label class="form-check-label" for="registerCheck">
                    I have read and agree to the terms
                  </label>
                </div>
  
                <!-- Submit button -->
                <center>
                    <button type="submit" class="btn btn-secondary btn-block mb-3">Sign Up</button>
                </center>
              </form>
            </div>
          <!-- content -->
        </div>
    </section>


    <script>

        function validate() {
            uname = document.forms["form"]["username"].value
            email = document.forms["form"]["email"].value
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "social_media";

                //create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                //check connection
                if($conn->connect_error) {
                    die("Connection failed: ".$conn->connect_error);
                }

            ?>
        }

    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>