<?php
	$servername = 'localhost';
	$user = 'id15447441_tsf';
	$pass = '9aPXMUfVwpD}lOH^';
	$dbname = 'tsf';

	$conn = mysqli_connect($servername,$user,$pass,$dbname);

	if(!$conn){
		die("Could Not Connect to the database".mysqli_connect_error());
	}
mysqli_select_db($conn, "id15447441_tsf16");

?>