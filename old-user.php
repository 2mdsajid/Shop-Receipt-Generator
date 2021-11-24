<?php

$id = $_POST["result"];
$conn = mysqli_connect("localhost","root","","shop");

if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  

$data ="SELECT * FROM `users_data` WHERE userid=$id";

$res = mysqli_query($conn,$data);
$rows = mysqli_fetch_assoc($res);

if ($rows) {
$json = json_encode(array("name"=>$rows["name"],"address"=>$rows["address"],"phone"=>$rows["phone"]));

echo $json;

} else {
				echo "errr";
}



?>
