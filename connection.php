 <?php
 
$servername = "localhost";
$username = "php_admin";
$password = "5elfPHP123";
$database = "tele_mgmt";

// Create connection
$dbc = new mysqli($servername, $username, $password, $database);

// Check connection
if ($dbc->connect_error) {
    die("Connection failed: " . $dbc->connect_error);
}

?> 