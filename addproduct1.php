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
    <div style="background-color:white" align="center">
    <th>
    <p hidden><?php echo $row['id']; ?></p>
    <div class="image"><img src="<?php echo $row['image']; ?>" width="250" height="200"></div>
	
    <p> Item Name:<b> <span><?php echo $row['name']; ?></span><br/></b>
        Brand Name: <b> <span><?php echo $row['brand_name']; ?></span> </b>
    <p class="price"> Price: <strong><?php echo $row["price"]."Rs"; ?></strong></p>
	
       <button class="btn btn-warning">Add to cart</button><br><br>
	  
  
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