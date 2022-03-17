<?php
session_start();
?>
<?php 
include "dbconnect.php";
?>
<html lang="en">

<head>
	<title>Shoping</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<style>
		/* Make the image fully responsive */
		.carousel-inner img {
			width: 100%;
			height: 70%;
		}

		.scrollable-menu {
			height: auto;
			max-height: 580px;
			width: 400px;
			overflow-x: hidden;

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



</style>
</head>

	<!--Cards start-->
	
<!--Fashion-->			
<hr>
<div class="container">
<h2 style="color:#FFD700;">♕ Rolex </h2><br>
<div class="row">

<?php
$sql="SELECT * FROM products WHERE brand_name='Rolex'"; 
$result=mysqli_query($conn,$sql);

if($result)
{

if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_array($result)) 
{
?>
<br> </br>
<ul>
<li>
<div style="background-color:white" align="center">
<th>
<p hidden><?php echo $row['id']; ?></p>
<div class='col-lg-12'>
<div class="image"><img src="<?php echo $row['image']; ?>" width="200" height="200"></div>
<p> Item Name:<b> <span><?php echo $row['name']; ?></span><br/></b>
Brand Name: <b> <span><?php echo $row['brand_name']; ?></span> </b>
<p class="price"> Price: <strong><?php echo $row["price"].".Rs"; ?></strong></p>
<form method='post' action="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>"> 
<button class="btn btn-warning">Add to cart</button>
</form>
<form method='post' action="Billing.php">
<button class="btn btn-primary">Buy Now</button>
<br>
<br>
</form>

</th>
</div>

</li>
</ul>


<?php

}
} 
else
{
echo "0 result";
}
?>
</form>
</div>
</div>

<?php
}
?>
</style>
		</body>
		</html>
	
	