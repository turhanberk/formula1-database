<?php 

include "../config.php";

if (isset($_POST['driverNumber'])){

$driverNumber = $_POST['driverNumber'];
$gpName = $_POST['gpName'];

$sql_statement = "DELETE FROM racesIn WHERE driverNumber = '$driverNumber' AND gpName = '$gpName'";

$result = mysqli_query($db, $sql_statement);


if($result!=1){

	echo '<script>
	alert("You are trying to delete a record that is a foreign key in another table! Deletion rejected!");
	window.location.href="raceEditPage.php";
	</script>';
}
else{
	header ("Location: raceEditPage.php");
}

}

else
{

	echo "The form is not set.";
	header ("Location: raceEditPage.php");

}

?>