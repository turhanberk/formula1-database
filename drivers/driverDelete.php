<?php 

include "../config.php";

if (isset($_POST['driverNumber'])){

$driverNumber = $_POST['driverNumber'];

$sql_statement = "DELETE FROM Driver_drivenBy_drivesFor WHERE driverNumber = '$driverNumber'";

$result = mysqli_query($db, $sql_statement);

if($result!=1){

	echo '<script>
	alert("You are trying to delete a record that is a foreign key in another table! Deletion rejected!");
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
	header ("Location: driverEditPage.php");
}

?>