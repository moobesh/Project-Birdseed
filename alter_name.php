<?php
// THIS IS THE INPUT PHP SCRIPT FOR OUTPUT FIELDS

require_once('./connection.php');

//UPDATES NAME FIELD FROM SUBMIT
$alterext = $_POST["alter_extension"];
$altername = $_POST["alter_name"];
$altertype = $_POST["alter_type"];
$returns = "SELECT * FROM profile WHERE extension='$alterext';";
$queryname_returns = mysqli_query($dbc,$returns);


// UPDATE FUNCTION
$alterdata = "UPDATE profile SET name ='$altername' WHERE extension='$alterext';";
$alterdatatype = "UPDATE profile SET name ='$altertype' WHERE extension='$alterext';";

if ($dbc->query($alterdata)) {
   
    echo "name complete";
    
} 
elseif($dbc->query($altertype)){
    echo "type complete";
}
else{

    echo "Error: " . $alterdata . "<br>" . $dbc->error;

}

$dbc->close();

?> 