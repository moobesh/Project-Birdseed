<!DOCTYPE html>
<html>
<header>
	<link rel="stylesheet" type="text/css" href="./css/style.css" />	
	<style type="text/css">
		
		table, th, td {
		border: .25px solid black;
		}

	</style>

	<title> TELEPHONY MANAGEMENT SOLUTION </title>
</header>

<body>
<h1>TELEPHONY MANAGEMENT SOLUTION</h1>
<h4>Input</h4>
<form action="" method="POST" class="forms">

	<fieldset>
	 	<h5>Name:</h5>
			<input type="text" name="in_name" placeholder="Enter Data">
		<h5>Extension:</h5>
			<input type="text" name="in_extension" placeholder="Enter Data">
		<h5>Type:</h5>
			<input type="text" name="in_type" placeholder="Enter Data"><br>
		<input type="submit" name="in_submit" value="Submit"><br />
	</fieldset>

</form>

<h4>Query</h4>
	<form method="GET" class="forms">

		<fieldset>
			<h5>Name:</h5>
				<input type="text" name="query_name" placeholder="Enter Data">
			<h5>Extension:</h5> 
				<input type="text" name="query_extension" placeholder="Enter Data"><br>
			<input type="submit" name="query_submit" value="Submit"><br />
		</fieldset>

	</form>

<h4>Alter</h4>
	<form method="POST" class="forms">

		<fieldset>
			<h5>Extension:</h5>
				<input type="text" name="alter_extension" placeholder="Enter Data"><label>*Required Field</label>
			<h5>Name:</h5>
				<input type="text" name="alter_name" placeholder="Enter Data">
			<h5>Type:</h5>
				<input type="text" name="alter_type" placeholder="Enter Data">
			<input type="submit" name="alter_submit" value="Submit"><br />
		</fieldset>

	</form>

<h4>Delete</h4>
	<form method="POST" class="forms">

		<fieldset>
			<h5>Name:</h5>
				<input type="text" name="delete_name" placeholder="Enter Data">
			<h5>Extension:</h5> 
				<input type="text" name="delete_extension" placeholder="Enter Data"><br>
			<input type="submit" name="delete_submit" value="Submit"><br />
		</fieldset>

	</form>


<h4>RESULTS</h4>

<?php
	// THIS IS THE QUERY PHP SCRIPT FOR OUTPUT FIELDS //
	require_once('connection.php');

	// Queries all info from profile table.
	$queryname = $_GET["query_name"];
	$queryname_query = "SELECT * FROM profile WHERE name='$queryname';";
	$queryname_result = mysqli_query($dbc, $queryname_query);

	// Queries all extension info from profile table.
	$queryext= $_GET["query_extension"];
	$queryext_query = "SELECT * FROM profile WHERE extension='$queryext';";
	$queryext_result = mysqli_query($dbc, $queryext_query);

	$noresults= "0 Results!" ;



	// Query for Name Values.
	if ($queryname_result->num_rows > 0) {
		//table creation
		echo "<table>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Extension</th>
						<th>Type</th>
					</tr>";
					
	// output data of each row
	while($queryname_row = $queryname_result->fetch_assoc()) {
		echo "<tr>
				<td>" . $queryname_row ["id"]. "</td>
				<td>" . $queryname_row["name"]. "</td>
				<td>" . $queryname_row["extension"]. "</td>
				<td>" . $queryname_row["type"]."</td>
				</tr>";

	}
		echo "</table>";

	// SPECIAL ENTRY FOR ALL INPUT IN FILE SELECTS ALL DATA.	
	} elseif ($queryname == "ALL"){
		$ALLquery = "SELECT * FROM profile;";
		$ALLquery_result = mysqli_query($dbc,$ALLquery);

		echo "<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Extension</th>
			<th>Type</th>
		</tr>";

		//table creation
		while($ALLquery_row = $ALLquery_result->fetch_assoc()) {
			echo "<tr>
					<td>" . $ALLquery_row ["id"]. "</td>
					<td>" . $ALLquery_row["name"]. "</td>
					<td>" . $ALLquery_row["extension"]. "</td>
					<td>" . $ALLquery_row["type"]."</td>
					</tr>";}
		 echo "</table>";

		}
			else {echo $noresults; };
	
	//Query for Extension Values..
	if ($queryext_result->num_rows > 0) {
		echo "<table>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Extension</th>
						<th>Type</th>
					</tr>";
					
	// output data of each row
	while($queryext_row = $queryext_result->fetch_assoc()) {
		echo "<tr>
				<td>" . $queryext_row["id"]. "</td>
				<td>" . $queryext_row["name"]. "</td>
				<td>" . $queryext_row["extension"]. "</td>
				<td>" . $queryext_row["type"]."</td>
				</tr>";

	}
	echo "</table>";
	} 

	$dbc->close();
?> 

</body>
</html>
