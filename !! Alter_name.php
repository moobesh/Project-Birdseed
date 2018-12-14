// WORK IN PROGRESS SHOWING CONVERSION ERROR NEEDS INVESTIGATING.

<?php
// THIS IS THE INPUT PHP SCRIPT FOR OUTPUT FIELDS //

require_once('./connection.php');

//UPDATES NAME FIELD FROM SUBMIT
$alterext = $_POST["alter_extension"];
$altername = $_POST["alter_name"];

//SELECT ID QUERY FROM $_POST
$queryid = "SELECT id FROM profile WHERE extension='$alterext';";
$queryid_result = mysqli_query($dbc, $queryid);


// UPDATE FUNCTION
$alterdata = "UPDATE profile SET name ='$altername' WHERE id ='$queryid_result' ;";

if ($dbc->query($alterdata) === TRUE) {
   
    echo "New record altered successfully";
   
} else {
    echo "Error: " . $alterdata . "<br>" . $dbc->error;
}

$dbc->close();



//UPDATE employees
//SET last_name = 'Johnson'
//WHERE employee_id = 10;

?> 

