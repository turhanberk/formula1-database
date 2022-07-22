<?php

include "../config.php";

if (isset($_POST['driverNumber'])){

$driverNumber = $_POST['driverNumber'];
$gpName = $_POST['gpName'];
$position = $_POST['position'];

$sql_statement = "INSERT INTO racesIn(driverNumber, gpName, position)
					VALUES ($driverNumber,'$gpName',$position)";

$result = mysqli_query($db, $sql_statement);
echo($result);

if($result!=1){

	echo '<script>
	alert("You have a foreign key error or a primary key duplication! Make sure Driver Number and GP exists in DB and combinations are unique here!");
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

}


?>