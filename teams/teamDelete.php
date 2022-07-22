<?php 

include "../config.php";

if (isset($_POST['teamName'])){

$selection = $_POST['teamName'];

$sql_statement = "DELETE FROM Team WHERE teamName = '$selection'";

$result = mysqli_query($db, $sql_statement);

if($result!=1){

	echo '<script>
	alert("You are trying to delete a record that is a foreing key in another table! Deletion rejected!");
	window.location.href="teamEditPage.php";
	</script>';
}
else{
	header ("Location: teamEditPage.php");
}

}

else
{

	echo "The form is not set.";
	header ("Location: teamEditPage.php");

}

?>