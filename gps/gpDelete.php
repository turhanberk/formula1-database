<?php 

include "../config.php";

if (isset($_POST['gpName'])){

$gpName = $_POST['gpName'];

$sql_statement = "DELETE FROM grandPrix WHERE gpName = '$gpName'";

$result = mysqli_query($db, $sql_statement);

if($result!=1){

	echo '<script>
	alert("You are trying to delete a record that is a foreign key in another table! Deletion rejected!");
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
	header ("Location: gpEditPage.php");

}

?>