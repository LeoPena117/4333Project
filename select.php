<!DOCTYPE html>
<html>
<head>
	<title>Select</title>
</head>
<body>
	<form method="POST" action="">
		<select name="senator">
		<?php

		$sql = "SELECT Id, Name FROM upforreelection";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	?>
		    		<option value=<?=$row['Id']?>><?=$row['Name']?></option>
		    	<?php
		    }
		}  ?>
		</select>
		<button class="btn btn-primary" name="Choose">Choose</button>
	</form>
<?php
	if(isset($_POST['Choose'])){
		$senator=$_POST['senator'];
		$select = "SELECT Name, State, Party FROM upforreelection WHERE Id = $senator";
		$result = $conn->query($select);
		$row = $result->fetch_assoc();
		if ($result->num_rows > 0) {
			echo $row["Name"]." is from ".$row["State"]." and is a ".$row["Party"];
		}
		die();
	}
?>

</body>
</html>