<?php

$data    = $_POST["data"];
$data    = json_decode("$data", true);

$codes =$data["codes"];
$qtys =$data["qtys"];

//just echo an item in the array
$userId = $data["info"][0];
$name = $data["info"][1];
$address = $data["info"][2];
$phone = $data["info"][3];

$conn = mysqli_connect("localhost","root","","shop");

$query = "INSERT INTO `users_data` (`userid`, `name`, `address`, `phone`) VALUES ('$userId', '$name', '$address', '$phone')";

	
	$query2 = "INSERT INTO `receipts` (`sn`, `userid`, `name`, `date`) VALUES (NULL, '$userId', '$name', CURRENT_TIMESTAMP)";
	
	for ($x=0;$x < count($codes); $x++){
					$query3 = "INSERT INTO `sellings` (`sn`, `userid`, `product`, `quantity`, `date`) VALUES (NULL, '$userId', '$codes[$x]', '$qtys[$x]', CURRENT_TIMESTAMP)";
					
					$succ3 =$conn->query($query3);
	}
	
	
	$succ = $conn->query($query);
	$succ2 = $conn->query($query2);

	echo "succ";

?>
