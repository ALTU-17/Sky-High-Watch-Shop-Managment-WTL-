<?php
	
  
    include 'dbconnect.php';
   
    
    if(isset($_POST['submit']))
	{
    $sql = "INSERT INTO bill(fullname,email,street,city,state,zip) VALUES ('".$_POST['fullname']."', '".$_POST['email']."', '".$_POST['street']."','".$_POST['city']."','".$_POST['state']."','".$_POST['zip']."')";
    

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


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
   margin: 0px;
    text-align:center;
    width: 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    background-color: black;
}

* {
  box-sizing: border-box;
}

.row {
  color:white;
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-image: url('rolex.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 50%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
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

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body> <b>
<a class="navbar-brand" href="" style="color: #99e6ff; font-size:150%;"></a></b>
			<div class="#" id="#">
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="index.php"  method="POST">
      
        <div class="row">
          <div class="col-50">
            
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fullname" placeholder="Enter Full Name">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Enter Email">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="street" placeholder="Enter Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Enter City">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="Enter State">
              </div>
              <div class="col-50">
                <label for="zip">Zip Code</label>
                <input type="text" id="zip" name="zip" placeholder="Enter Pincode">
              </div>
            </div>
          </div>
        </div>
        <input type="submit"  name="submit" value="Proceed to Buy" class="btn">
      </form>
    </div>
  </div>
</div>

</body>
</html>