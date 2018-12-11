################### PHP SELECT ####################################################################################################
# 1.0 11-12-19 GM - created test php script, extracts all connect of the profiles db table.
#
###################################################################################################################################

 <?php
$servername = "localhost";
$username = "php_admin";
$password = "5elfPHP123";
$dbname = "tele_mgmt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM profile ;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "|| id: " . $row["id"]. " || Name: " . $row["name"]. " || Ext: " . $row["extension"]. " || Type: ". $row["type"]. " ";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 

