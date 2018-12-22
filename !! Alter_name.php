<?php
// THIS IS THE INPUT PHP SCRIPT FOR OUTPUT FIELDS //

require_once('./connection.php');




//UPDATES NAME FIELD FROM SUBMIT
$today = date_default_timezone_set("UTC");
$today = date("d.m.Y_H:i:s");

$alterext = $_POST["alter_extension"];
$altername = $_POST["alter_name"];
$altertype = $_POST["alter_type"];

// UPDATE FUNCTION
$alterdata = "UPDATE profile SET name ='$altername', timestamp='$today', type ='$altertype' WHERE extension='$alterext' ;";

if ($dbc->query($alterdata) === TRUE) {
   
    echo "New record altered successfully";
   
} else {
    echo "Error: " . $alterdata . "<br>" . $dbc->error;
}

// Query Update
$altquery = "SELECT * from profile WHERE extension='$alterext';";
$altquery_result = mysqli_query($dbc, $altquery);

//TABLE CREATION FOR RESULTS
if ($altquery_result->num_rows > 0) {
    //table creation
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Extension</th>
                <th>Type</th>
                <th>Last Modified</th>
            </tr>";
                
// output data of each row
while($queryname_row = $altquery_result->fetch_assoc()) {
    echo "<tr>
            <td>" . $queryname_row["name"]. "</td>
            <td>" . $queryname_row["extension"]. "</td>
            <td>" . $queryname_row["type"]."</td>
            <td>" . $queryname_row["timestamp"]."</td>
          </tr>";

}
    echo "</table>";
}

//back button

$dbc->close();

?> 
<html>
<form>
<input type="button" value="Home" name="home" onclick="window.location.href='http://SLFD0359/tele_mgmt/Grant/Frontpage.php'"
</form>
</html>
