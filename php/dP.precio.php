<?php
	// CONECCION
	$servername = "localhost:3306";
	$username = "pucondis_root";
	$password = "ElCani2022";
	$dbname = "pucondis_pucondistillery";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	$sqlPrecio = "SELECT `PRODPRECIO` FROM `productos` WHERE `ID` = 2";
	$result = mysqli_query($conn, $sqlPrecio);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			$sqlPrecio = $row["PRODPRECIO"];
			echo "<h1 class=card-title pricing-card-title>$" . $sqlPrecio . " <small class=text-muted fw-light>/00 CLP</small></h1>";
	  }
	} else {
	  echo "0 results";
	}		
?>