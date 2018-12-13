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
<form action="./insert.php" method="POST">

	<fieldset>
	 	Name:<br>
		<input type="text" name="in_name" placeholder="Enter Data"><br>
		Extension:<br>
		<input type="text" name="in_extension" placeholder="Enter Data"><br>
		Type:<br>
		<input type="text" name="in_type" placeholder="Enter Data"><br>
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
// THIS IS THE QUERY PHP SCRIPT FOR OUTPUT FIELDS //

require_once('./connection.php');


// Queries all info from profile table.
$outname = $_GET["out_name"];
$namequery = "SELECT * FROM profile WHERE name='$outname';";
$nameresult = mysqli_query($dbc, $namequery);


// Queries all extension info from profile table.
$outextension = $_GET["out_extension"];
$extquery = "SELECT * FROM profile WHERE extension='$outextension';";
$extresult = mysqli_query($dbc, $extquery);




// Query for Name Values.
if ($nameresult->num_rows > 0) {
	  echo "<table>
	  			<tr>
	  				<th>ID</th>
	  				<th>Name</th>
	  				<th>Extension</th>
	  				<th>Type</th>
	  			</tr>";
	  			
   // output data of each row
   while($namerow = $nameresult->fetch_assoc()) {
	   echo "<tr>
			   <td>" . $namerow["id"]. "</td>
			   <td>" . $namerow["name"]. "</td>
			   <td>" . $namerow["extension"]. "</td>
			   <td>". $namerow["type"]."</td>
	   		</tr>";

   }
   echo "</table>";
} 


//Query for Extension Values..
if ($extresult->num_rows > 0) {
	echo "<table>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Extension</th>
					<th>Type</th>
				</tr>";
				
 // output data of each row
 while($extrow = $extresult->fetch_assoc()) {
	 echo "<tr>
			 <td>" . $extrow["id"]. "</td>
			 <td>" . $extrow["name"]. "</td>
			 <td>" . $extrow["extension"]. "</td>
			 <td>". $extrow["type"]."</td>
			 </tr>";

 }
 echo "</table>";
} 



$dbc->close();

?> 




</body>
</html>
