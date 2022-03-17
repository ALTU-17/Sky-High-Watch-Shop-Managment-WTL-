<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2></h2>
  <form id="form"  method="post">
    <div class="form-group">
      <label for="Username">Username:</label>
      <input type="Username" class="form-control" id="Username" placeholder="Username" name="Username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <div class="btn-group">
  <button type="submit" class="btn btn-primary">Login</button>
 
</div>
<div class="btn-group">
  <button type="button" class="btn btn-primary">Cancel</button>
 
</div>
  </form>
</div>
  <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "altamash";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} // Select registration database.

            if(isset($_POST['Username']) && !empty($_POST['Username']) AND isset($_POST['pswd']) && !empty($_POST['pswd'])){
                //$UserID = mysqli_escape_string($_POST['Username']);
                //$PIN = mysqli_escape_string(md5($_POST['pswd']));
                  $UserID = $_POST['Username'];
                $PIN = $_POST['pswd'];
                $search = mysqli_query($conn,"SELECT username,password FROM login WHERE username='".$_POST['Username']."' AND password='".$_POST['pswd']."'") or die(mysqli_error($conn)); 
                $match  = mysqli_num_rows($search);
                
                if($match > 0){
                   
                  echo "<script>
                    alert('Login successful');
                    location.replace('index.php');
                    </script>


                  ";


                  // header("location:onlineapp.html");
                    //$msg = 'Login Complete! Thanks';
                }else{ 
                  echo "
                  <script>
                    alert('Login Failed! Please make sure that you enter the correct details and that you have activated your account');
                    </script>
                    ";
                }
            }


        ?>

</body>
</html>
