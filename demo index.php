<!--end of carousel-->
	<!--Cards start-->


	<hr>

	<i><div class="container">
		<h2 style="color:#FFD700;">♕ Rolex </h2><br></i>
		<div class="row"> </div>
		<div class="col-4"> </div>
		
		
		<?php
$sql="SELECT * FROM products WHERE brand_name='Rolex'"; 
$result=mysqli_query($conn,$sql);

if($result)
{
	?>
		<section>
		<?php
if(mysqli_num_rows($result)>0)
{
  while($row = mysqli_fetch_array($result)) 
  {
    ?>
	<ul>
	<li>
    <div style="background-color:white" align="center">
    <th>
    <p hidden><?php echo $row['id']; ?></p>
	
    <div class="image"><img src="<?php echo $row['image']; ?>" width="250" height="200"></div>
    <p> Item Name:<b> <span><?php echo $row['name']; ?></span><br/></b>
        Brand Name: <b> <span><?php echo $row['brand_name']; ?></span> </b>
    <p class="price"> Price: <strong><?php echo $row["price"]."Rs"; ?></strong></p>
      <form method='post' action="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>"> 
       <button class="btn btn-warning">Add to cart</button>
	   </form>
	   <form method='post' action="Billing.php">
	   <button class="btn btn-primary">Buy Now</button>
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

</section>
<?php
}
?>
	
	
	<div class="container">
		<h2 style="color:#FFD700;">Fastrack</h2><br>
		<div class="row">
		<div class='col-lg-3 col-md-3 col-sm-3 col-12'> 
		<?php
$sql="SELECT * FROM products WHERE brand_name='Fastrack'"; 
$result=mysqli_query($conn,$sql);

if($result)
{
	?>
		<section>
		<?php
if(mysqli_num_rows($result)>0)
{
  while($row = mysqli_fetch_array($result)) 
  {
    ?>
	<ul>
	<li>
    <div style="background-color:white" align="center">
    <th>
    <p hidden><?php echo $row['id']; ?></p><br>
    <div class="image"><img src="<?php echo $row['image']; ?>" width="250" height="200"></div>
    <p> Item Name: <b><span><?php echo $row['name']; ?></span> <br> </b>
             Brand Name: <b> <span><?php echo $row['brand_name']; ?></span> </br> </b>
   
    <p class="price"> Price: <strong><?php echo $row["price"]."Rs"; ?></strong></p>
      <form method='post' action="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>"> 
       <button class="btn btn-warning">Add to cart</button>
	   </form>
	   <form method='post' action="Billing.php">
	   <button class="btn btn-primary">Buy Now</button>
	   </form>
  
    </th>
    </div>
	</li>
	</ul>
	</div>
	 <?php
    }
} 
else
{
  echo "0 result";
}
?>
</section>
<?php
}
?>
			
			
			
			
			
		</div>
	</div>
	<hr>
	<!--Fashion-->
	<div class="container">
		<h2 style="color:#FFD700;">RADO</h2><br>
		<div class="row">
		<div class='col-lg-3 col-md-3 col-sm-3 col-12'> 
		<?php
$sql="SELECT * FROM products WHERE brand_name='RADO'"; 
$result=mysqli_query($conn,$sql);

if($result)
{
	?>
		<section>
		<?php
if(mysqli_num_rows($result)>0)
{
  while($row = mysqli_fetch_array($result)) 
  {
    ?>
	<ul>
	<li>
    <div style="background-color:white" align="center">
    <th>
    <p hidden><?php echo $row['id']; ?></p><br>
    <div class="image"><img src="<?php echo $row['image']; ?>" width="250" height="200"></div>
    <p> Item Name: <b> <span><?php echo $row['name']; ?></span> <br></b>
        Brand Name: <b> <span><?php echo $row['brand_name']; ?></span></br>  </b>
    <p class="price"> Price: <strong><?php echo $row["price"]."Rs"; ?></strong></p>
      <form method='post' action="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>"> 
       <button class="btn btn-warning">Add to cart</button>
	   </form>
	   <form method='post' action="Billing.php">
	   <button class="btn btn-primary">Buy Now</button>
	   </form>
  
    </th>
    </div>
	</li>
	</ul>
	</div>
	 <?php
    }
} 
else
{
  echo "0 result";
}
?>
</section>
<?php
}
?>
			
			
			
			
		<hr>
		<form method="post">
		<div class="container">
		<h2 style="color:#FFD700;">SONATA</h2><br>
		<div class="row">
		<div class='col-lg-3 col-md-3 col-sm-3 col-12'> 
		<?php
$sql="SELECT * FROM products WHERE brand_name='SONATA'"; 
$result=mysqli_query($conn,$sql);

if($result)
{
	?>
		<section>
		<?php
if(mysqli_num_rows($result)>0)
{
  while($row = mysqli_fetch_array($result)) 
  {
    ?>
	<ul>
	<li>
    <div style="background-color:white" align="center">
    <th>
    <p hidden><?php echo $row['id']; ?></p><br>
    <div class="image"><img src="<?php echo $row['image']; ?>" width="250" height="200"></div><br>
    <p> Item Name: <b> <span><?php echo $row['name']; ?></span><br/> </b>
        Brand Name: <b> <span><?php echo $row['brand_name']; ?></span> </b>
    <p class="price"> Price: <strong><?php echo $row["price"]."Rs"; ?></strong></p>
      <form method='post' action="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>"> 
       <button class="btn btn-warning">Add to cart</button>
	   </form>
	   <form method='post' action="Billing.php">
	   <button class="btn btn-primary">Buy Now</button>
	   </form>
  
    </th>
    </div>
	</li>
	</ul>
	</div>
	 <?php
    }
} 
else
{
  echo "0 result";
}
?>
	</div>
	</div>
	</div>
	</form>
</section>
<?php
}
?>
			
			
			
			
			
	
</body>
</html>