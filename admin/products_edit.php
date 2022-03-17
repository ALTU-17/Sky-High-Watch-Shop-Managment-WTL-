<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('security.php');
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> EDIT Product </h6>
    </div>
    <div class="card-body">
    <?php

        if(isset($_POST['edit_btn']))
        {
            $id = $_POST['edit_id'];
            
            $query = "SELECT * FROM products WHERE id='$id' ";
            $query_run = mysqli_query($conn, $query);

            foreach($query_run as $row)
            {
                ?>

                    <form action="products_code.php" method="POST">

                        <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                        <div class="form-group">
                            <label> Image </label>
                            <input type="file" name="edit_image" value="css/images/<?php echo $row['image'] ?>" class=""
                                placeholder="">
                        </div>
                        <div class="form-group">
                            <label> Name </label>
                            <input type="text" name="edit_name" value="<?php echo $row['name'] ?>" class="form-control"
                                placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label> Brandname </label>
                            <input type="text" name="edit_brand_name" value="<?php echo $row['brand_name'] ?>" class="form-control"
                                placeholder="Enter Brandname">
                        </div>
                        <div class="form-group">
                            <label> Price </label>
                            <input type="text" name="edit_price" value="<?php echo $row['price'] ?>" class="form-control"
                                placeholder="Enter Price">
                        </div>

                        <a href="products.php" class="btn btn-danger"> CANCEL </a>
                        <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

                    </form>
                    <?php
            }
        }
    ?>
    </div>
</div>
</div>

</div>

<?php 
include('includes/scripts.php'); 
include('includes/footer.php'); 
?>