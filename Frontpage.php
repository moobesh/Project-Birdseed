<!DOCTYPE html>
<html>
<header>
	<style type="text/css">
		
		table, th, td {
    border: 1px solid black;
}
	</style>
<title> TELEPHONY MANAGEMENT SOLUTION </title>
</header>

<body>
<h1> TELEPHONY MANAGEMENT SOLUTION </h1>

<h4>Input</h4>
<form method="POST">

	<fieldset>
	 	Name:<br>
		<input type="text" name="in_name" placeholder="Enter Data"><br>
		Extension:<br>
		<input type="text" name="in_extension" placeholder="Enter Data"><br>
		<input type="submit" name="in_submit" value="Submit">
	</fieldset>

</form>

<h4>Output</h4>
<form method="GET">

	<fieldset>
	 	Name:<br>
		<input type="text" name="out_name" placeholder="Enter Data"><br>
		Extension:<br>
		<input type="text" name="out_extension" placeholder="Enter Data"><br>
		<input type="submit" name="out_submit" value="Submit">
	</fieldset>

</form>


<h4>RESULTS</h4>

<?php
require_once('./connection.php');


// Queries all info from profile table.
$outname = $_GET["out_name"];
$query = "SELECT * FROM profile WHERE name='$outname';";
$result = mysqli_query($dbc, $query);
$noquery = "SELECT * FROM profile WHERE name = 'NULL';";
$noresults = mysqli_query($dbc, $noquery);


// Queries all extension info from profile table.
$outextension = $_GET["out_extension"];
$query = "SELECT * FROM profile WHERE extension='$outextension';";
$result = mysqli_query($dbc, $query);
$noquery = "SELECT * FROM profile WHERE extension = 0;";
$noresults = mysqli_query($dbc, $noquery);

if ($result->num_rows > 0) {
	  echo "<table>
	  			<tr>
	  				<th>ID</th>
	  				<th>Name</th>
	  				<th>Extension</th>
	  				<th>Type</th>
	  			</tr>";
	  			
   // output data of each row
   while($row = $result->fetch_assoc()) {
	   echo "<tr>
			   <td>" . $row["id"]. "</td>
			   <td>" . $row["name"]. "</td>
			   <td>" . $row["extension"]. "</td>
			   <td>". $row["type"]."</td>
	   		</tr>";

   }
   echo "</table>";
} else {
   if ($noresults->num_rows > 0) {
	  echo "<table>
	  			<tr>
	  				<th>ID</th>
	  				<th>Name</th>
	  				<th>Extension</th>
	  				<th>Type</th>
	  			</tr>";
	  			
   // output data of each row
   while($row = $noresults->fetch_assoc()) {
	   echo "<tr>
			   <td>" . $row["id"]. "</td>
			   <td>" . $row["name"]. "</td>
			   <td>" . $row["extension"]. "</td>
			   <td>". $row["type"]."</td>
	   		</tr>";

   } 

}  
} echo "</table>";


$dbc->close();

?> 

</body>
</html>