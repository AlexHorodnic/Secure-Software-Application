<?php
// Initialize the session
session_start();
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'secure_app');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/8891f6df96.js" crossorigin="anonymous"></script>
    <title>Login / Logout Application</title>
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="favicon.ico" type="ico">
  </head>
  <body>
      <div class="container">
          <div class="row row1">
              <div class="col-6 my-auto">
                <div>Login / Logout Application</div>
              </div>
              <div class="col-6 my-auto" style="text-align: right;">
                    <button type="button" class="btn btn-primary"><a href="logout.php">Log Out</a></button>
              </div>
          </div>
          <div class="row row2">
                <div class="col-12">
                    <?php
                          if(isset($_SESSION['username'])){
                            echo "Welcome {$_SESSION['username']}!";
                          }
                    ?>
                </div>
          </div>
          <div class="row row4 justify-content-center">REGISTERED USERS</div>
          <div class="row row3 justify-content-center">
          <div style="padding-right: 51px;">
                        <?php
                            $result = mysqli_query($link,"SELECT id FROM users");

                            while($row = mysqli_fetch_array($result)) 
                            {
                            echo "<div>ID | " . $row['id'] . "</div>";
                            }
                        ?>
                </div>
                <div style="padding-right: 51px;">
                        <?php
                            $result = mysqli_query($link,"SELECT username FROM users");

                            while($row = mysqli_fetch_array($result)) 
                            {
                            echo "<div>Username | " . $row['username'] . "</div>";
                            }
                        ?>
                </div>
                <div >
                        <?php
                            $result = mysqli_query($link,"SELECT last_login FROM users");

                            while($row = mysqli_fetch_array($result)) 
                            {
                            echo "<div>Last Login | " . $row['last_login'] . "</div>";
                            }
                        ?>
                </div>
          </div>
      </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
    </style>
</html>