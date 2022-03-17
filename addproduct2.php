       
<section>
		<?php
if(mysqli_num_rows($result)>0)
{
  while($row = mysqli_fetch_array($result)) 
  {
    ?>
	<form method='post' action="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>"> 
    <div style="background-color:white" align="center">
	    	 <div class="col-sm-3">
				<div class="card">
					<img class="card-img-top"
						src="<?php echo $row['image']; ?>"
						alt="Card image cap" height="200px">
					<div class="card-body">
						
						
						<a href="#" class="btn btn-primary"><?php echo $row["price"]."Rs"; ?></a>
					</div>
				</div>
			</div>
    </div>
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