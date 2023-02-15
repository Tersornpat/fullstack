<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fullstack";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully <br>";

$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
  echo "ID: " . $row["IDCust"]. " - Name: " . $row["CustName"]. " " . $row["Sex"]." ". $row["Address"]. " ".$row["Tel"]. "<br>";
}

$conn->close();
?>