<?php
// THIS IS THE INPUT PHP SCRIPT FOR OUTPUT FIELDS //

require_once('./connection.php');

$insertname = $_POST["in_name"];
$inserttext = $_POST["in_extension"];
$inserttype = $_POST["in_type"];


$insertdata = "INSERT INTO profile VALUES (NULL,'$insertname', $inserttext,'$inserttype');";

if ($dbc->query($insertdata) === TRUE) {
   
    echo "New record created successfully";
   
} else {
    echo "Error: " . $insertdata . "<br>" . $dbc->error;
}


$dbc->close();

?> 
