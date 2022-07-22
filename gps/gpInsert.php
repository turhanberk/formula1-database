<?php

include "../config.php";

if (isset($_POST['gpName'])){

$gpName = $_POST['gpName'];
$circuitName = $_POST['circuitName'];
$winner = $_POST['winner'];
$weather = $_POST['weather'];
$fastestLap = $_POST['fastestLap'];

$sql_statement = "INSERT INTO grandPrix(gpName, circuitName, winner, weather, fastestLap)
					VALUES ('$gpName','$circuitName',$winner, '$weather', '$fastestLap')";

$result = mysqli_query($db, $sql_statement);
echo($result);

if($result!=1){

	echo '<script>
	alert("You have a foreign key error or a primary key duplication! Make sure winner exist as a Driver in DB and GP names are unique here!");
	window.location.href="gpEditPage.php";
	</script>';
}
else{
	header ("Location: gpEditPage.php");
}

}

else
{

	echo "The form is not set.";

}


?>