<?php

class Database{
	public $con; 
	public function __construct(){
		$this->con = mysqli_connect("localhost", "admin", "root", "attendance");
				if (mysqli_connect_errno()) {
			echo"Error: could not connect to database.";
			exit;
		}
	}
}

$obj = new Database();

?>

<!-- <?php
$servername   = "localhost";
$database = "attendance";
$username = "admin";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  echo "Connected successfully";
?> -->
