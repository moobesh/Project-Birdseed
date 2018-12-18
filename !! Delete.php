<?php
// THIS IS THE INPUT PHP SCRIPT FOR OUTPUT FIELDS //

require_once('./connection.php');

$delname = $_POST["del_name"];
$delext = $_POST["del_extension"];


$deldata = "DELETE FROM profile WHERE extension='$delext';";

if ($dbc->query($deldata) === TRUE) {
   
    echo "Record deleted successfully";
   
} else {
    echo "Error: " . $deldata . "<br>" . $dbc->error;
}


$dbc->close();

?> 

<html>
<form>
<input type="button" value="Home" name="home" onclick="window.location.href='http://SLFD0359/tele_mgmt/Grant/Frontpage.php'"
</form>
</html>
