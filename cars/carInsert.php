<?php

include "../config.php";

if (isset($_POST['carID'])){

$carID = $_POST['carID'];
$carEngine = $_POST['carEngine'];
$carlength = $_POST['carlength'];
$color = $_POST['color'];


$sql_statement = "INSERT INTO Car(carID, carEngine, carlength, color)
					VALUES ($carID,'$carEngine',$carlength, '$color')";

$result = mysqli_query($db, $sql_statement);
echo($result);

if($result!=1){

	echo '<script>
	alert("You have a primary key duplication!");
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

}


?>