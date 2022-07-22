<!DOCTYPE html>
<html>
<head>
	<title>DRIVERS</title>

<style>
  #formulaBackground {
    background: rgb(120,120,120);
    background: linear-gradient(270deg, rgba(255, 169, 12, 0.79) 0%, rgba(176,176,176,1) 70%);
}

.table-container {
    height: 25em;
}
table {
    display: flex;
    flex-flow: column;
    height: 100%;
    width: 100%;
    font-family: Gill Sans,Gill Sans MT,Calibri,sans-serif; 
    background-color:rgb(178, 178, 178,0);
    border-collapse: collapse;
}
table thead {
    /* head takes the height it requires, 
    and it's not scaled when table is resized */
    flex: 0 0 auto;
    width: calc(100% - 0.2em);

}
table tbody {
    /* body takes all the remaining available space */
    flex: 1 1 auto;
    display: block;
    overflow-y: scroll;

}
table tbody tr {
    left:100px;
    width: 100%;
}

table thead,
table tbody tr {
    display: table;
    table-layout: fixed;
}

table td, table th {
    padding: 0.3em;
    border: 1px solid lightgrey;
}
table th {
    border: 4px solid grey;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

tr:nth-child(odd) {
  background-color: rgb(178, 178, 178);
}

</style>

</head>
<body id="formulaBackground">

<div align="center" class="table-container">

<table>

<thead> 
<tr> <th> DRIVER NUMBER </th> <th> DRIVER NAME </th> <th>TEAM NAME</th> <th>POINTS</th> <th>PODIUMS</th> <th>CHAMPIONSHIPS</th> <th>SEASONS</th> <th>CAR ID</th>   <th style="width:5%">DELETE</th> </tr> 
</thead>
<tbody>
<?php

include "../config.php";

$sql_statement = "SELECT * FROM Driver_drivenBy_drivesFor";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $driverNumber = $row['driverNumber'];
  $driverName = $row['driverName'];
  $championships = $row['championships'];
  $points = $row['points'];
  $podiums = $row['podiums'];
  $carID = $row['carID'];
  $seasons = $row['seasons'];
  $teamName = $row['teamName'];

	echo "<tr>" . "<td>" . $driverNumber . "</td>" . "<td>" . $driverName . "</td>" . "<td>" . $teamName . "</td>" . "<td>" . $points . "</td>" . "<td>" . $podiums . "</td>" ."<td>" . $championships . "</td>" ."<td>" . $seasons . "</td>" ."<td>" . $carID . "</td>" ."<td style='width: 4.5em'>" . '<form action="driverDelete.php" method="POST"> <button name="driverNumber" value="'.$driverNumber.'">DELETE</button>  </form>' . "</td>" ."</tr>";
}

?>

</tbody>
</table>
</div>

</body>
</html>
