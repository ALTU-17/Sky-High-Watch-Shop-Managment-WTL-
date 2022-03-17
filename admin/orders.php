<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('security.php');
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Orders</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    </div>
  </div>
</div>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"><h3>Orders</h3> 
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
        $query = "SELECT o.id, o.customer_id, c.name, o.total_price, o.created from orders o join customers c where o.customer_id=c.id;";
        $query_run = mysqli_query($conn, $query);
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> Id </th>
            <th> Customer id </th>
            <th> Customer Name </th>
            <th> Total Amount </th>
            <th> Date and Time </th>
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
            <td><?php  echo $row['customer_id']; ?></td>
            <td><?php  echo $row['name']; ?></td>
            <td><?php  echo $row['total_price']; ?></td>
            <td><?php  echo $row['created']; ?></td>
            <td>
                <form action="orders_code.php" method="post">
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