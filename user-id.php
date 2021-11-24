<?php

$name = $_POST["name"];
$conn = mysqli_connect("localhost","root","","shop");
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  

$data ="SELECT * FROM `receipts`";

$res = mysqli_query($conn,$data);

$rows = mysqli_fetch_assoc($res);

$rowcount=mysqli_num_rows($res);

echo $rowcount;


?>
