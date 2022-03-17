<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "altamash";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, name, marks FROM stud";
$result = mysqli_query($conn, $sql);

 
 if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
//if($result || mysqli_num_rows($result) == 0){
  //  $row = mysqli_num_rows($result);

  //while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["marks"]. "<br>";
  }
} else {
  echo "0 result";
}

mysqli_close($conn);
?>