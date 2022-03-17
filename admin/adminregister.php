<?php
    $showAlert=false;
    $showError=false;
    if($_SERVER["REQUEST_METHOD"] =="POST"){
    include 'database/dbconnect.php';
    $uname=$_POST["username"];

    //$exists=false;
    //check wether this username exists
    $existSql="SELECT * FROM adminregister WHERE username='$uname'";
    $result = mysqli_query($conn,$existSql);
    $numExistsRows=mysqli_num_rows($result);

    if($numExistsRows >0){

      //$exists=true;
      $showError = "Username is Already Exists";
    }
    else{
      $exists=false;
 
    if(isset($_POST['submit']))
    {
    $sql = "INSERT INTO adminregister(fname,lname,email,mobileno,username,pass,dt) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[mobileno]','$_POST[username]','$_POST[pass]',current_timestamp())";

      if(mysqli_query($conn,$sql))
      {
        $showAlert = true;
      }
      
    }
  }
  }

  
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Admin Registration</title>

<style>

body{
margin: 0px;
padding: 0px;
text-align:center;
width: 100%;
text-align: center;
background-image: url('css/images/slide2.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: 100% 100%;
align: center;
}
 
input[type=text],[type=password],[type=number]{
width: 20%;
margin: 8px 0;
padding: 7px 10px;
display: inline-block;
border:1px solid #ccc;
box-sizing: border-box;
}
 
button{
background-color:#4CAF50;
width: 10%;
padding: 9px 5px;
margin:5px 0;
cursor:pointer;
border:none;
color:#ffffff;
}
 
button:hover{
opacity:0.8;
}
 
#fn,#ln,#un,#pwd,#em,#mn,#fm,#cy{
font-family:'Lato', sans-serif;
color: white;
}
 
#em{
margin-left:30px;
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
h1#logo a {
    	align-items:center;
    display: block;
    height: 61px;
    text-indent: -4000px;
    background: url(css/images/logo.gif);
}
h1#logo {
	align-items:center;
    font-size: 0;
    line-height: 0;
    width: 248px;
    height: 61px;
    float:left;
}
h1 {
    font-size: 2em;
    font-weight: bold;
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
<h1 id="logo"><a href="#">Urban Gear</a></h1>
 <?php
 if($showAlert){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
      </div> ';
    }
    if($showError){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> '.$showError.'
        </div> ';
      }
    ?>
<div id="container">
<form action="adminregister.php" method="post">
<div class="border-box">
<h1>Admin Registration</h1>
 
<label for="r1" id="fn">First Name :</label>
<input type="text" name="fname" id="r1" placeholder="Enter First Name" required><br/>
 
<label  for="r2" id="ln">Last Name :</label>
<input type="text" name="lname" id="r2" placeholder="Enter Last Name" required><br/>

<label  for="r5" id="em">Email :</label>
<input type="text" name="email" id="r5" placeholder="Enter Email" required><br/>
 
<label  for="r6" id="mn">Mobile No :</label>
<input type="number" name="mobileno" pattern="\d*" id="r6" placeholder="Enter Mobile No" required><br/>
 
<label  for="r3" id="un">Username :</label>
<input type="text" name="username" id="r3" placeholder="Enter Username" required><br/>
 
<label  for="r4" id="pwd">Password :</label>
<input type="password" name="pass" id="r4" placeholder="Enter Password" required><br/><br/>
 
<button type="submit"  name="submit"  value="submit" id="button" >Register</button><br><br>
<a href="adminlogin.php">Login</a>
 
</form>
</div>
 
<script type="text/javascript">
function save(){
var user = document.getElementById("user").value;
var pwd = document.getElementById("pwd").value;
alert("username"+user+"password"+pwd);
}
</script>
 
</body>
</html>