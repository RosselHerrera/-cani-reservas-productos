<?php
// Credenciales
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

echo  "<br>";

$sqlS = "SELECT STOCKQTY FROM `stock` WHERE PRODCOD = 'V042220'";
$resultS = mysqli_query($conn, $sqlS);

if (mysqli_num_rows($resultS) > 0) {
    
	while($row = mysqli_fetch_assoc($resultS)) {
	
	$stock = $row["STOCKQTY"];
	
	echo "STOCK CONSOLIDADO " . $stock ;
	
	} 	
 } 
 
echo  "<br>";

$sqlC = "SELECT MOVQTY FROM `movimientos` WHERE ID = 2";
$result4 = mysqli_query($conn, $sqlC);

if (mysqli_num_rows($result4) > 0) {
    
	while($row = mysqli_fetch_assoc($result4)) {
	
	$stockmovimiento = $row["MOVQTY"];
	
	echo "STOCK MOVIMIENTO " . $stockmovimiento ;
	
	} 	
 } 
 
 echo  "<br>";
 echo  "======================";
 $actualizado = $stock - $stockmovimiento;
 echo "<b>STOCK ACTUALIZADO " . $actualizado . "</b>";