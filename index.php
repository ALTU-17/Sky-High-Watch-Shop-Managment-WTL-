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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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


	</style>
</head>

<body style="background-color:Black";>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet">
	<div class="container-fluid">
		<!--Nav Bar  <fixed-top ye dalna hai>   -->
		<nav class="navbar  navbar-expand-lg navbar navbar-dark bg-dark ">
			<a class="navbar-brand" href="#"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
				aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
				<b><span class="navbar-toggler-icon"></span></button>
			<a class="navbar-brand" href="OnlineShoping.html" style="color:#00BFFF; font-size:220%;">SKY HIGH-</a></b>
						<b><a class="navbar-brand" href="OnlineShoping.html" style="color:#FFD700; font-size:220%;"> WATCH SHOP</a></b>

			<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="Rolex.php">Rolex <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Fast track.php">Fastrack <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Sonata.php">Sonata <span class="sr-only">(current)</span></a>
					</li>
					
					
					<li class="nav-item active">
						<a class="nav-link" href="TrackOrder.jpg">TrackOrder <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="login.php">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Signup.php">Signup</a>
					</li>
					<li class="nav-item ACTIVE">
						<a class="nav-link" href="viewCart.php">
						
                           <i class="fa fa-shopping-cart" style="font-size:25px"></i></a>

					</li>
				</ul>
			</div>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
			</form>
		</nav>
		<!-- End of Nav Bar -->
		<!-- carousel -->
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">


					<img src="rolex.jpeg"
						class="d-block w-100" alt="...">

				</div>

				<div class="carousel-item">
					<img src="Rado.jpg" class="d-block w-100"
						alt="...">
				</div>
				<div class="carousel-item">
					<img src="fastrack.jpg"
						alt="...">
				</div>
				<div class="carousel-item">
					<img src="so77.WEBP"
						alt="...">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
	<!--end of carousel-->
	<!--Cards start-->


	<hr>


	<B><div class="container">
		<h2 style="color:#FFD700;"> <FONT FACE ="BEDROCK" SIZE="6"> ♕ Rolex </FONT></h2><br></B>
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
    <div class="image"><img src="<?php echo $row['image']; ?>" width="215" height="200"></div>
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


<!--Fashion-->			
<hr>
			<div class="container">
		<h2 style="color:#FFD700;"> <FONT FACE ="BEDROCK" SIZE="6"> SONATA </FONT> </h2><br>
		<div class="row">
		
		<?php
$sql="SELECT * FROM products WHERE brand_name='SONATA'"; 
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
    <div class="image"><img src="<?php echo $row['image']; ?>" width="215" height="200"></div>
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

<!--Fashion-->
<hr>
<div class="container">
		<B><h2 style="color:#FFD700;"> <FONT FACE ="BEDROCK" SIZE="6"> RADO </FONT> </h2><br></B>
		<div class="row">
		
		<?php
$sql="SELECT * FROM products WHERE brand_name='RADO'"; 
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
    <div class="image"><img src="<?php echo $row['image']; ?>" width="215" height="200"></div>
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

<!--End of cards---->
<HR>
<div class="container">
	<B>	<h2 style="color:#FFD700;"> <FONT FACE ="BEDROCK" SIZE="6">  Fastrack </FONT> </h2><br></B>
		<div class="row">
		
		<?php
$sql="SELECT * FROM products WHERE brand_name='Fastrack'"; 
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
    <div class="image"><img src="<?php echo $row['image']; ?>" width="215" height="200"></div>
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
	
	<center><h1 style="Background-color:#191970;color:lightcyan">This project &COPY; Rights by Sk Altamash</h1></center>			

</body>
</html>