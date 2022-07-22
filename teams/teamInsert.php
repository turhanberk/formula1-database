<?php

include "../config.php";

if (isset($_POST['teamName'])){

$teamName = $_POST['teamName'];
$teamPoint = $_POST['teamPoint'];
$championships = $_POST['championships'];
$foundingYear = $_POST['foundingYear'];

echo($teamName." ".$teamPoint." ".$championships." ".$foundingYear);

$sql_statement = "INSERT INTO Team(teamName, teamPoint, championships, foundingYear)
					VALUES ('$teamName',$teamPoint,$championships,$foundingYear)";

$result = mysqli_query($db, $sql_statement);
echo($result);
header ("Location: teamEditPage.php");

}

else
{

	echo "The form is not set.";

}


?>