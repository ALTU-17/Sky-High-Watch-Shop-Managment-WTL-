<?php
session_start();
include('security.php');

if(isset($_POST['registerbtn']))
{
    $name = $_POST['name'];
    $brand_name = $_POST['brand_name'];
    $price = $_POST['price'];
    $image = $_POST['image'];


            $query = "INSERT INTO products (image,name,brand_name,price) VALUES ('$image','$name','$brand_name','$price')";
            $query_run = mysqli_query($conn, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Product Added";
                $_SESSION['success_code'] = "success";
                header('Location: products.php');
            }
            else 
            {
                $_SESSION['status'] = "Product Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: products.php');  
            }
    }

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $name = $_POST['edit_name'];
    $brand_name = $_POST['edit_brand_name'];
    $price = $_POST['edit_price'];
    $image = $_POST['edit_image'];

    $query = "UPDATE products SET image='$image',name='$name',brand_name='$brand_name',price=' $price' WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        $_SESSION['success_code'] = "success";
        header('Location: products.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: products.php'); 
    }
}

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM products WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Deleted";
        $_SESSION['success_code'] = "success";
        header('Location: products.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Deleted";       
        $_SESSION['status_code'] = "error";
        header('Location: products.php'); 
    }    
}

?>