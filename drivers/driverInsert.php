<?php

include "../config.php";

if (isset($_POST['driverNumber'])){

$driverNumber = $_POST['driverNumber'];
$driverName = $_POST['driverName'];
$championships = $_POST['championships'];
$points = $_POST['points'];
$podiums = $_POST['podiums'];
$carID = $_POST['carID'];
$seasons = $_POST['seasons'];
$teamName = $_POST['teamName'];

$sql_statement = "INSERT INTO Driver_drivenBy_drivesFor(driverNumber, driverName, championships, points, podiums, carID, seasons, teamName)
					VALUES ($driverNumber,'$driverName',$championships,$points,$podiums, $carID, $seasons, '$teamName')";


$result = mysqli_query($db, $sql_statement);

if($result!=1){

	echo '<script>
	alert("You have a foreign key error or a primary key duplication! Make sure Car ID and Team exists in DB and you do not Driver Number have duplicates here!");
	window.location.href="driverEditPage.php";
	</script>';
}
else{
	header ("Location: driverEditPage.php");
}

}

else
{

	echo "The form is not set.";

}


?>