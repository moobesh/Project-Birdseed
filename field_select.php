<?php
require_once('./connection.php');

//Setting empty values
$outname = $outextension = "";
// Queries all info from profile table.

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $outname = out_name($_GET["name"]);
    $outextension = out_name($_GET["extension"]);

  }
  



$query = "SELECT * FROM profile ;";
$result = mysqli_query($dbc, $query);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "|| id: " . $row["id"]. " || Name: " . $row["name"]. " || Ext: " . $row["extension"]. " || Type: ". $row["type"]. " ";
    }
} else {
    echo "0 results";
}
$dbc->close();




?>