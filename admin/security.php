<?php
include('database/dbconnect.php');

if($conn)
{
    // echo "Database Connected";
}
else
{
    header("Location: database/dbconnect.php");
}
?>