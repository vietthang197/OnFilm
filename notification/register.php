<?php
if(isset($_POST["Token"])){
	$token = $_POST["Token"];
	$conn = mysqli_connect("localhost","id4938575_root","12345678","id4938575_onfilm");
	$query = "INSERT INTO device_token(Token) Values ('$token') ON DUPLICATE KEY UPDATE Token = '$token'";
	mysqli_query($conn,$query);
	mysqli_close($conn);
}


?>