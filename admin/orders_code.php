<?php
session_start();
include('security.php');


if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM orders WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Deleted";
        $_SESSION['success_code'] = "success";
        header('Location: orders.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Deleted";       
        $_SESSION['status_code'] = "error";
        header('Location: orders.php'); 
    }    
}

?>