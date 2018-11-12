<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "senators";
//###############Database Connection stuff#############################
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//#####################################################################

//Dash Buttons
	if(isset($_POST["insert"])) {
		require_once("insert.php");
		die();
	}
	else if(isset($_POST["delete"])){
		require_once("delete.php");
		die();
	}
	else if(isset($_POST["edit"])){
		require_once("edit.php");
		die();
	}
	else if(isset($_POST["select"])){
		require_once("select.php");
		die();
	}
	else if(isset($_POST["Choose"])){
		require_once("select.php");
		die();
	}


//Interior Buttons
	if(isset(($_POST["new"]))){
			$Name = $_POST["name"];
			$Party = $_POST["party"];
			//$aName = mysql_real_escape_string($Name);
		//	$aParty = mysql_real_escape_string($Party);
			$sql = "INSERT INTO allsenators (Name,Party) VALUES ('$Name','$Party')";
		if (mysqli_query($conn, $sql)) {
		    echo "New record created successfully";
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}		
	}
//New Table
	if(isset(($_POST["newTable"]))){
		require_once("TableChoose.php");
		die();
	}

	if(isset(($_POST["TableFields"]))){
		$columns=$_POST["Col"];
		require_once("TableCreate.php");
		die();
	}
	if(isset($_POST["TableSubmit"])){
		$sql = "CREATE TABLE ".$_POST['tName']." (";

		for($i=0;$i<count($_POST["fields"]);$i++){
			if($_POST['fields'][$i]=="ID" || $_POST['PK']){
				$sql .= $_POST['fields'][$i]." ".$_POST['type'][$i]."(".$_POST['length'][$i].") UNSIGNED AUTO_INCREMENT PRIMARY KEY,";
			}
			else{
				$sql .= $_POST['fields'][$i]." ".$_POST['type'][$i]."(".$_POST['length'][$i].") NOT NULL,";
			}
		}
		$sql=rtrim($sql,',');
		$sql.=")";

		if (mysqli_query($conn, $sql)) {
		    echo "New record created successfully";
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}	
	}



require_once("Dash.php");
?>