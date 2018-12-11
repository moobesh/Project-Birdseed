################### PHP SELECT ####################################################################################################
# 1.0 11-12-19 GM - created test php script, extracts all connect of the profiles db table.
# 2.0 11-12-19 GM - Pushed php to get open connection from connection.php script.
###################################################################################################################################

 <?php

 require_once('./connection.php');

// Queries all info from profile table.
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

