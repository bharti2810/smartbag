<?php

$servername = "fdb17.biz.nf";
$username = "2383683_smartbag";
$password = "bhartiarora2810";

$conn = new mysqli($servername,$username,$password);

if($conn->connect_error){
	die("connection failed: ".$conn->connect_error);
}

mysqli_select_db($conn,'2383683_smartbag');

echo "connected to DB";

?>