<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('security.php');
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="products_code.php" method="POST">

        <div class="modal-body">


            <div class="form-group">
                <label> Image </label>
                <input type="file" name="image" class="" placeholder="" required>
            </div>
            <div class="form-group">
                <label> Name </label>
                <input type="text" name="name" class="form-control" placeholder="Enter Brandname" required>
            </div>
            <div class="form-group">
                <label> Brandname </label>
                <input type="text" name="brand_name" class="form-control" placeholder="Enter Name" required>
            </div>
            <div class="form-group">
                <label> Price </label>
                <input type="text" name="price" class="form-control" placeholder="Enter Price" required>
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"><h3>Products</h3> 
            <div style="text-align: right">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <a href="products_search.php" type="submit" name="search_btn" class="btn btn-secondary"> Search</a>
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add 
            </button>
    </h6>
  </div>

  <div class="card-body">

   <?php

    if(isset($_SESSION['success']) && $_SESSION['success'] !='')
    {
      echo '<h3>' .$_SESSION['success'].'</h3>';
      unset($_SESSION['success']);

    }

   ?>

    <?php

    if(isset($_SESSION['status']) && $_SESSION['status'] !='')
    {
      echo '<h3>' .$_SESSION['status'].'</h3>';
      unset($_SESSION['status']);

    }

    ?>

    <?php

    if(isset($_SESSION['warning']) && $_SESSION['warning'] !='')
    {
      echo '<h3>' .$_SESSION['warning'].'</h3>';
      unset($_SESSION['warning']);

    }

    ?>


<div class="table-responsive">

    <?php
        $query = "SELECT * FROM products";
        $query_run = mysqli_query($conn, $query);
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
            if(mysqli_num_rows($query_run) > 0)        
              {
                while($row = mysqli_fetch_assoc($query_run))
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
          ?>
        
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>