<?php 


	$conn = new mysqli('localhost','root','', 'agendacbt');
	
	if ($conn->error) {
		echo $error -> $conn->connect_error;
	}

	mysqli_set_charset($conn,"utf8");
	
 ?>