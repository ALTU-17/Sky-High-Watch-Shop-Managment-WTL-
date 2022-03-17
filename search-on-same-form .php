<html>
<head>

 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;400&display=swap" rel="stylesheet">


<style>

  *{
        margin:0; padding: 0;
        font-family: 'Josefin Sans', sans-serif;
      }

</style>
</head>
<body bgcolor="lightyellow">
<h2 align = "center">SEARCH RESULTS</h2>
<?php
$conn = mysqli_connect("localhost","root","root","altamash") or die("Cannot connect");
?>

<form id="form" action="<?php $PHP_SELF ?>" method="post" class="text-center">
<input type="text" name="name" />
<input type ="submit" name="search" value="search" class="btn btn-primary"/>
</form>
<?php
if(isset($_POST["search"]))
{
    $name1 = $_POST["name"];
    if($name1==NULL)
    {
        echo "Dont enter null values";
    }
    else
    {
        mysqli_select_db($conn,"fymca") or die("Cannot select the database".mysqli_error($conn));
       
    $result1 = mysqli_query($conn,"select id,name,emp_salary from emp5 ") or die("Cant select".mysqli_error($conn));
   //$result1 = mysqli_query($conn,"select id,name,emp_salary from emp5 where name= '".$name1."'") or die("Cant select".mysqli_error($conn));
    }

    echo "
    <section>
      
    <div class='container-fluid'>
    <h1 class='text-center pt-5'>Data</h1>  
    <hr class='w-25 mx-auto pt-5'>
    <div class='row mb-5 text-center'>     
      ";

    while($array = mysqli_fetch_row($result1))
    {

echo " <div class='col-lg-3 col-md-3 col-sm-6 col-12'> 
          <div class='card' style='width:200px'>
           <img class='card-img-top' src='ro1.jpg' alt='Card image' >
            <div class='card-body bg-success'>
              <h4 class='card-title'>CGL</h4>";


       echo "   <p class='card-text'>".$array[0]." <br>".$array[1]."<br>".$array[2]."<br></p>";
        
echo "         <a href='#' class='btn btn-primary'>See Profile</a>
          </div>
      </div>
    </div>   
 ";

}
echo " </div>
    </div>
</section>
";
}

?>


<a href="index.php" align = center>HOME</a>
</body>
</html>