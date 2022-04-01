<!--  PHP  HTML -->	
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

//echo  "<br><br><br>";
//echo "Connected successfully" . "<br><br>";

$sql = "SELECT ID, PRODCOD, STOCKFECINP, STOCKQTY, STOCKFECTRX, STOCKFILLER FROM `stock` WHERE PRODCOD = 'V042220'";
$sql2 = "SELECT ID, PRODCOD, STOCKFECINP, STOCKQTY, STOCKFECTRX, STOCKFILLER FROM `stock` WHERE PRODCOD = 'V042212'";
$sql3 = "SELECT ID, PRODCOD, STOCKFECINP, STOCKQTY, STOCKFECTRX, STOCKFILLER FROM `stock` WHERE PRODCOD = 'B042212'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  //echo  "<br>";
  //echo  "<B><H4>STOCK V042220</H4></B>";
  //echo  "<br>";

  
    
  while($row = mysqli_fetch_assoc($result)) {
	  
	  $stockV042220 = $row["STOCKQTY"];
	  
  //echo "<b>ID:</b> " . $row["ID"]. " 
//		<b>- Codigo: </b>" . $row["PRODCOD"]. "			  
//		<b>- FechaStockIni: </b>" . $row["STOCKFECINP"]. " 
//		<b>- Cantidad: </b>" . $row["STOCKQTY"]. " 
//		<b>- FechaTRX: </b>" . $row["STOCKFECTRX"] . "  
//		<b>- registro: </b>" . $row["STOCKFILLER"] . "
//		<br>";		
  }
//echo  "<br>";  
} else {
  //echo "0 results";
}

$result2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result2) > 0) {
  // output data of each row
  //echo  "<br>";
  //echo  "<B><H4>STOCK V042212</H4></B>";
  //echo  "<br>";
  while($row = mysqli_fetch_assoc($result2)) {
  //echo "<b>ID:</b> " . $row["ID"]. " 
		//<b>- Codigo: </b>" . $row["PRODCOD"]. "			  
		//<b>- FechaStockIni: </b>" . $row["STOCKFECINP"]. " 
		//<b>- Cantidad: </b>" . $row["STOCKQTY"]. " 
		//<b>- FechaTRX: </b>" . $row["STOCKFECTRX"] . "  
		//<b>- registro: </b>" . $row["STOCKFILLER"] . "
		//<br>";
  }
//echo  "<br>";  
} else {
 // echo "0 results";
}

$result3 = mysqli_query($conn, $sql3);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  //echo  "<br>";
  //echo  "<B><H4>STOCK B042212</H4></B>";
  //echo  "<br>";
  while($row = mysqli_fetch_assoc($result3)) {
  //echo "<b>ID:</b> " . $row["ID"]. " 
		//<b>- Codigo: </b>" . $row["PRODCOD"]. "			  
		//<b>- FechaStockIni: </b>" . $row["STOCKFECINP"]. " 
		//<b>- Cantidad: </b>" . $row["STOCKQTY"]. " 
		//<b>- FechaTRX: </b>" . $row["STOCKFECTRX"] . "  
		//<b>- registro: </b>" . $row["STOCKFILLER"] . "
		//<br>";
  }
//echo  "<br>";  
} else {
  //echo "0 results";
}

//echo  "<br>";

$sqlS = "SELECT STOCKQTY FROM `stock` WHERE PRODCOD = 'V042220'";
$resultS = mysqli_query($conn, $sqlS);

if (mysqli_num_rows($resultS) > 0) {
    
	while($row = mysqli_fetch_assoc($resultS)) {
	
	$stock = $row["STOCKQTY"];
	
	//echo "STOCK CONSOLIDADO " . $stock ;
	
	} 	
 } 
 
//echo  "<br>";

$sqlC = "SELECT MOVQTY FROM `movimientos` WHERE ID = 2";
$result4 = mysqli_query($conn, $sqlC);

if (mysqli_num_rows($result4) > 0) {
    
	while($row = mysqli_fetch_assoc($result4)) {
	
	$stockmovimiento = $row["MOVQTY"];
	
	//echo "STOCK MOVIMIENTO " . $stockmovimiento ;
	
	} 	
 } 
 
 //echo  "<br>";
 //echo  "======================";
 
 $actualizado = $stock - $stockmovimiento;
 
 $sqlUpdate = "UPDATE `stock` SET STOCKQTY = $actualizado WHERE ID = 3";
 
 if ($conn->query($sqlUpdate) === TRUE) {
	//  echo "New record created successfully";<br>
	//  echo "<b>STOCK ACTUALIZADO " . $actualizado . "</b>";
	} else {
	//  echo "Error: " . $sqlUpdate . "<br>" . $conn->error;
	}

	}
	
  $conn->close();
  //echo  "<br>";
?>	
<!--  PHP  HTML -->
