<?php

$code = $_POST["code"];

$conn = mysqli_connect("localhost","root","","shop");

if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  

$sql ="SELECT * FROM `prices` WHERE code='$code'";

$result = mysqli_query($conn,$sql);
if ( false===$result ) {
  printf("error: %s\n", mysqli_error($conn));
}

$rows = mysqli_fetch_assoc($result);


$json = json_encode(array("name"=>$rows["item_name"],"price"=>$rows["price"]));

echo $json;


?>
