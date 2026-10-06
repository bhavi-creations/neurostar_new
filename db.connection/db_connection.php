
<?php
// Database connection details
$servername = "localhost";
// Determine if the server is localhost
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    $username = "root";
    $password = "";
    $dbname = "neurostar";
} 
else {
    
        $username = "neurostarhospita";
    $password = "D18hqhEubleOcP3";
    $dbname = "neurostarhospital";
    
}
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




