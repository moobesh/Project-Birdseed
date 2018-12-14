<?php
// THIS IS THE INPUT PHP SCRIPT FOR OUTPUT FIELDS //

require_once('./connection.php');

//UPDATES NAME FIELD FROM SUBMIT
$alterext = $_POST["alter_extension"];
$altername = $_POST["alter_name"];


// UPDATE FUNCTION
$alterdata = "UPDATE profile SET name ='$altername' WHERE extension='$alterext' ;";

if ($dbc->query($alterdata) === TRUE) {
   
    echo "New record altered successfully";
   
} else {
    echo "Error: " . $alterdata . "<br>" . $dbc->error;
}

$dbc->close();



?> 

