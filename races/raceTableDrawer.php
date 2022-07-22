<!DOCTYPE html>
<html>
<head>
	<title>RACES</title>

<style>
  #formulaBackground {
    background: rgb(120,120,120);
    background: linear-gradient(270deg, rgba(18, 131, 255, 0.79) 0%, rgba(176,176,176,1) 70%);
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
<tr> <th> DRIVER NUMBER </th> <th> GP NAME </th> <th>POSITION</th> <th style="width:5%">DELETE</th> </tr> 
</thead>
<tbody>
<?php

include "../config.php";

$sql_statement = "SELECT * FROM racesIn";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $driverNumber = $row['driverNumber'];
  $gpName = $row['gpName'];
  $position = $row['position'];

	echo "<tr>" . "<td>" . $driverNumber . "</td>" . "<td>" . $gpName . "</td>" . "<td>" . $position . "</td>" . "<td style='width: 4.5em'>" . '<form action="raceDelete.php" method="POST"> <button name="driverNumber" value="'.$driverNumber.'">DELETE</button>  <input type=hidden name="gpName" value="'.$gpName.'">  </form>' . "</td>" ."</tr>";
}

?>

</tbody>
</table>
</div>

</body>
</html>
