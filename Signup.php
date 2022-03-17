<?php
	
  
    include 'dbconnect.php';
   
    
    if(isset($_POST['submit']))
	{
    $sql = "INSERT INTO users(username,password,mobileno,address) VALUES ('".$_POST['username']."', '".$_POST['password']."', '".$_POST['mobileno']."','".$_POST['address']."')";
    

      if(mysqli_query($conn,$sql))
	  {
		  echo "Record Inserted Successfully...";
	  }
      else
	  {
		  echo "Could not inserted...";
	  }
	}
	
  
?>



<!doctype html>
<html>

<head>

<title> Sigin up </title> 

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>

<body>



<form class="box" action="index.php" method="post">
<h1>Sign up</h1>
    <input type="text" name="username" placeholder="Username">
	<input type="password" name="password" placeholder="Create password">
            <input type="text" name="mobileno" placeholder="Mobile No.">
                <input type="text" name="address" placeholder="Full Adress">

    
    <input type="submit" name="submit" value="Signup">

</form>


</body>

</html>