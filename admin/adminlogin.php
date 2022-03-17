<?php

    $login=false;
    $showError=false;
    if($_SERVER["REQUEST_METHOD"] =="POST"){
    include 'database/dbconnect.php';
    $uname=$_POST["username"];
 
      $sql = "SELECT * From adminregister where username='$_POST[username]' AND pass='$_POST[pass]'";
        $result = mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        if($num == 1){
          $login = true;
          session_start();
          $_SESSION['loggedin']=true;
          $_SESSION['username']=$username;
          header("location:index.php");
        }

   
    else{
      $showError = "Invalid Credentials !!";
    }
   }
  
?>

<!DOCTYPE html>
 
<html>
<head>
<meta charset="ISO-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login and Registration form example</title>
 
 <style>

 	body{
    margin: 0px;
    padding: 0px;
    text-align:center;
    width: 100%;
    background-image: url('img2.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    background-color: black;
    }
     
    input[type=text], input[type=password]{
    width:20%;
    padding:7px 10px;
    margin: 10px 0;
    display:inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    }
     
    button{
    background-color:#4CAF50;
    width: 10%;
    padding: 9px 5px;
    margin:10px 0px 0px 35px;
    cursor:pointer;
    border:none;
    color:#ffffff;
    font-size: 15px;
    font-weight: bold;
    }
     
    button:hover{
    opacity:0.8;
    }
     
    #un,#ps{
    font-family:'Lato', sans-serif;
    color: white;
    }
 
 
    #container{
        position: absolute;
        color: white;
        top:0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        width:600;
        height: 300px;
        text-align: center;
    }
a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: pink;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}

 </style>
 
</head>
<body>

    <?php
   
    if($login){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
      </div> ';
    }

    if($showError){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> '.$showError.'
        </div> ';
      }
      ?>
 
<div id="container">
<form method="post" action="adminlogin.php">
 
<div class="border-box">
<h1>Admin Login</h1>
<label for="uname" id="un">Username:</label>
<input type="text" name="username" placeholder="Enter Username" id="uname" required><br/>
 
<label for="upass" id="ps">Password:</label>
<input type="password" name="pass" placeholder="Enter Password" id="upass" required><br/>
 
<button type="submit" value="Login"  id="submit">Login</button><br><br><br>
 
</div>
 
</form>
</div>
 
</body>
</html>