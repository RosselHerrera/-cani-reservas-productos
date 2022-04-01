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
    $sqlSTOCK = "SELECT `STOCKQTY` FROM `stock` WHERE `ID` = 4";
    $result = mysqli_query($conn, $sqlSTOCK);
    if (mysqli_num_rows($result) > 0) {
    	while($row = mysqli_fetch_assoc($result)) {
    		$stockQty = $row["STOCKQTY"];
    		echo "<h4 class=my-0 fw-normal>Stock Disponible " . $stockQty  . " u/c<font color=#2E9AFE></font></h4>";
      }
    } else {
      echo "0 results";
    }	
?>