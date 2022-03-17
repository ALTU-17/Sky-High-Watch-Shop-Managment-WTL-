<ul>
<section>
<?php
if(mysqli_num_rows($result)>0)
{
  while($row = mysqli_fetch_array($result)) 
  {
    ?>
     <form method='post' action="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">
      <li>
    <div>
    <th>
    <p hidden><?php echo $row['id']; ?></p><br>
    <div class="image"><img src="<?php echo $row['image']; ?>" width="152" height="83"></div><br>
    <p> Item Name: <span><?php echo $row['name']; ?></span><br/>
        Brand Name: <span><?php echo $row['brand_name']; ?></span> <br/>
        Size: <span><?php echo $row['size']; ?></span>
    <p class="price">Price: <strong><?php echo $row["price"]."Rs"; ?></strong></p><br/>
       
       <button style="color:white"; class="btn btn-warning fa fa-shopping-cart ">Add to cart</button>
  
    </th>
    </div>
	</li>
    </form>

  <?php
    }
} 
else
{
  echo "0 result";
}
?>
</section>
</ul>




	<li>
    <div style="background-color:white" align="center">
    <th>
    <p hidden><?php echo $row['id']; ?></p><br>
    <div class="image"><img src="<?php echo $row['image']; ?>" width="250" height="200"></div><br>
    <p> Item Name: <span><?php echo $row['name']; ?></span><br/>
        
    <p class="price"> Price: <strong><?php echo $row["price"]."Rs"; ?></strong></p><br/>
      <form method='post' action="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>"> 
       <button class="btn btn-warning">Add to cart</button>
	   </form>
	   <form method='post' action="Billing.php">
	   <button class="btn btn-primary">Buy Now</button>
	   </form>
  
    </th>
    </div>
	</li>