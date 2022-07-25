<!DOCTYPE html>
<html>
<head>
	<title>CARS</title>

<style>
  #formulaBackground {
    background: rgb(120,120,120);
    background: linear-gradient(270deg, rgba(158, 0, 169, 0.78) 0%, rgba(176,176,176,1) 70%);
}

.table-container {
    height: 25em;
}
table {
    display: flex;
    flex-flow: column;
    height: 125%;
    width: 101%;
    font-family: Gill Sans,Gill Sans MT,Calibri,sans-serif; 
    background-color:rgb(178, 178, 178,0);
    border-collapse: collapse;
}
table thead {
    /* head takes the height it requires, 
    and it's not scaled when table is resized */
    flex: 0 0 auto;
    width: calc(100% + 0.1em);

}
table tbody {
    /* body takes all the remaining available space */
    flex: 1 1 auto;
    display: block;
    overflow-y: scroll;

}
table tbody tr {
    left: 100px;
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

@font-face {
    font-family: "Formula1-Display-Bold";
    src: url("../fonts/Formula1-Bold.woff") format("woff");
    }

    @font-face {
    font-family: "Formula1-Display-Regular";
    src: url("../fonts/Formula1-Regular.woff") format("woff");
    }

    * { 
  -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
  -moz-box-sizing: border-box;    /* Firefox, other Gecko */
  box-sizing: border-box;         /* Opera/IE 8+ */
}

</style>

</head>
<body id="formulaBackground">

<div align="center" class="table-container">

<table>

<thead> 
<tr> <th> CAR ID </th> <th> CAR ENGINE </th> <th>CHASSIS LENGTH</th> <th> BODY COLOR</th> <th style="width:5.9%">DELETE</th> </tr> 
</thead>
<tbody>
<?php

include "../config.php";

$sql_statement = "SELECT * FROM Car";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $carID = $row['carID'];
  $carengine = $row['carengine'];
  $carlength =  $row['carlength'];
  $color = $row['color'];

	echo "<tr>" . "<td>" . $carID . "</td>" . "<td>" . $carengine . "</td>" . "<td>" . $carlength . "</td>" . "<td>" . $color . "</td>" ."<td style='width: 5em;'>" . '<form action="carDelete.php" method="POST"> <button name="carID" style = "margin-left:3px;" value="'.$carID.'">DELETE</button> </form>' . "</td>" ."</tr>";
}

?>

</tbody>
</table>
</div>

</body>
</html>
