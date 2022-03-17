<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('security.php');
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Products</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                
                            $query = "SELECT id FROM products ORDER BY id";  
                            $query_run = mysqli_query($conn, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4> Total: '.$row.'</h4>';
                        ?>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
                
                            $query = "SELECT sum(Total_price) as total FROM orders";  
                            $query_run = mysqli_query($conn, $query);
                            $row = mysqli_fetch_assoc($query_run);
                            echo '<h4> Rs: '.$row['total'].'</h4>';
                        ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-rupee-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Sold</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
                
                $query = "SELECT sum(quantity) as Sold FROM order_items";  
                $query_run = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($query_run);
                
                echo '<h4> '.$row['Sold'].' Products </h4>';
            ?>
            </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Registered Users</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
                
                $query = "SELECT username FROM users ORDER BY username";  
                $query_run = mysqli_query($conn, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h4> Total: '.$row.'</h4>';
            ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

  <!-- Content Row -->








  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>