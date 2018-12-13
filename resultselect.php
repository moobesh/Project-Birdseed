<?php



require_once('./connection.php');

// Queries all info from profile table.
$query = "SELECT * FROM profile WHERE ;";
$result = mysqli_query($dbc, $query);

$dbc->close();

?> 
