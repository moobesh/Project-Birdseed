 <?php

 require_once('./connection.php');

// Queries all info from profile table.
$query = "SELECT * FROM profile ;";
$result = mysqli_query($dbc, $query);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  "|| id: " . $row["id"]. " || Name: " . $row["name"]. " || Ext: " . $row["extension"]. " || Type: ". $row["type"]. " <br>";
    }
} else {
    echo "0 results";
}
$dbc->close();
?> 
