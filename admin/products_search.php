<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('security.php');
?>

<div class="container-fluid">
<div class="card shadow mb-4">
<div class="card-header py-3">
<!-- Topbar Search -->
<form method='post' class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Search for...">
                <input type="submit" name="submit" class="btn btn-primary" value="Search" />
          </form>
</div>

            <div class="table-responsive">

<?php 
if(isset($_POST['submit'])) 
{
  $str = $_POST["search"];
  $sth = "SELECT * FROM products WHERE name like '%$str%' OR brand_name like '%$str%'";
  $result=mysqli_query($conn,$sth);
 if($result)
 {
     ?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th> Id </th>
        <th> Image </th>
        <th> Name </th>
        <th> Brandname </th>
        <th> Price </th>
        <th>EDIT </th>
        <th>DELETE </th>
      </tr>
    </thead>
    <tbody>
    <?php
        if(mysqli_num_rows($result) > 0)        
          {
            while($row = mysqli_fetch_array($result))
          {
        ?>
 
      <tr>
        <td><?php  echo $row['id']; ?></td>
        <td><img src="<?php  echo $row['image']; ?>" width="152" height="83"></td>
        <td><?php  echo $row['name']; ?></td>
        <td><?php  echo $row['brand_name']; ?></td>
        <td><?php  echo $row['price']; ?></td>
        <td>
            <form action="products_edit.php" method="post">
                <input type="hidden" name="edit_id" value="<?php  echo $row['id']; ?>">
                <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
            </form>
        </td>
        <td>
            <form action="products_code.php" method="post">
              <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
              <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
            </form>
        </td>
      </tr>
      <?php
                } 
            }
            else {
                  echo "No Record Found";
                 }
 }
  else
{
  echo "Name does not exist";
}
}
?>

</div>
</div>
</div>
<?php
include('includes/scripts.php');
?>