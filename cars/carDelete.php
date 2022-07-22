<?php 

include "../config.php";

if (isset($_POST['carID'])){

$carID = $_POST['carID'];

$sql_statement = "DELETE FROM Car WHERE carID = $carID";

$result = mysqli_query($db, $sql_statement);


if($result!=1){

	echo '<script>
	alert("You are trying to delete a record that is a foreing key in another table! Deletion rejected!");
	window.location.href="carEditPage.php";
	</script>';
}
else{
	header ("Location: carEditPage.php");
}

}

else
{

	echo "The form is not set.";
	header ("Location: carEditPage.php");

}

?>