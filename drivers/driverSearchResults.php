<?php 

include "../config.php";

if (!isset($_POST['attributes'])){

    header ("Location: DriverSearchPage.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>SEARCH RESULTS</title>

<style>
  #formulaBackground {
    background: rgb(120,120,120);
    background: linear-gradient(270deg, rgba(0,0,0,1) 0%, rgba(176,176,176,1) 70%);
}

.table-container {
    height: 30em;
}
table {
    display: flex;
    flex-flow: column;
    height: 100%;
    width: 90%;
    font-family: Gill Sans,Gill Sans MT,Calibri,sans-serif; 
    background-color:rgb(178, 178, 178,0);
    border-collapse: collapse ;
    /* margin-top:50em; */
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

#goback{ 
	position:absolute; 
	top:6%; 
	left:78%; 
  z-index: 10;
} 
.dbInfo {
  text-align: center;
  color: white;
  font-family: Gill Sans,Gill Sans MT,Calibri,sans-serif; 
}

#logo{ 
	position:absolute; 
	top:5%; 
	left:2%; 
  z-index: 10;
} 

@font-face {
    font-family: "Formula1-Display-Bold";
    src: url("../fonts/Formula1-Bold.woff") format("woff");
    }

    @font-face {
    font-family: "Formula1-Display-Regular";
    src: url("../fonts/Formula1-Regular.woff") format("woff");
    }
</style>

</head>
<body id="formulaBackground">

<div id="logo"> 
    <svg id="Layer_5" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 550 99.66" width="80%"><defs><style>.cls-1{fill:#e00;}.cls-2{font-size:26.4px;fill:#f9f9f9;font-family:Formula1-Display-Bold, Formula1;font-weight:700;}.cls-3{letter-spacing:-0.04em;}.cls-4{letter-spacing:-0.15em;}.cls-5{letter-spacing:-0.01em;}</style></defs><path class="cls-1" d="M68.59,38.8,38.44,68.1H0L47.85,20.5C65.62,2.91,74.18,0,104.48,0H224.25l-26,25.54H108c-22.65,0-27.47,1.7-39.36,13.26Zm125.79-9.22H108.44c-22.79,0-26.4,1.77-36.73,12.13L45.37,68.1H81.05l8.49-8.51c5.6-5.61,8.14-6.18,19.4-6.18h61.65Zm9.27,38.52L271.82,0H229.49l-68,68.1Z" transform="translate(0 0)"/><path d="M550,76.61v1.7" transform="translate(0 0)"/><path class="cls-1" d="M376.65,48.66h38.86V19.44H376.65Zm9.69-19.51h19.4v9.72h-19.4Z" transform="translate(0 0)"/><path class="cls-1" d="M550,48.66V38.94h-5.31V19.44A19.44,19.44,0,0,0,525.3,0H381a24.17,24.17,0,0,0-19.4,9.72A24.4,24.4,0,0,0,342.18,0H288.8V9.72h53.38a14.61,14.61,0,0,1,0,29.22h-34v9.72h49.05a23.83,23.83,0,0,0,4.39,9.72H298.57V43.77a14.58,14.58,0,0,1,14.58-14.62h34V19.44H288.8v9.71h4.89a24.37,24.37,0,0,0-4.89,14.62V68.1h72.84V58.38A24.36,24.36,0,0,0,381,68.1h29.09a24.44,24.44,0,0,0,14.58-4.9v4.9H550V58.38H434.41V43.77A14.58,14.58,0,0,1,449,29.15h34V19.44H433.91a23.77,23.77,0,0,0-4.39-9.72h48.56a14.61,14.61,0,0,1,0,29.22h-34v9.72H525.3V19.44H502.08A20.12,20.12,0,0,0,499,9.72h26.27a9.48,9.48,0,0,1,3.71.73,9.69,9.69,0,0,1,6,9V48.59H550ZM410.13,58.38H381a14.67,14.67,0,0,1-5.59-1.11,14.61,14.61,0,0,1-7.89-7.91,14.67,14.67,0,0,1-1.11-5.59V24.33a14.76,14.76,0,0,1,1.11-5.6,14.52,14.52,0,0,1,13.48-9h29.09a14.42,14.42,0,0,1,5.58,1.1,14.57,14.57,0,0,1,9,13.51V43.77a14.58,14.58,0,0,1-14.58,14.61ZM515.6,38.94H499a22,22,0,0,0,3.11-9.72h13.52v9.72Z" transform="translate(0 0)"/><text class="cls-2" transform="translate(331.85 94.65)"><tspan class="cls-3">D</tspan><tspan class="cls-4" x="23.38" y="0">A</tspan><tspan class="cls-4" x="41.38" y="0">T</tspan><tspan x="58.6" y="0">A</tspan><tspan class="cls-5" x="82.09" y="0">B</tspan><tspan x="102.86" y="0">ASE</tspan></text></svg>
</div> 

<div id="goback"> 
<svg onclick="window.location.href = 'driverSearchPage.php'" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80%" x="0px" y="0px" viewBox="0 0 261.2 39.4" style="enable-background:new 0 0 221.2 39.4;" xml:space="preserve"> <style type="text/css"> .st0{fill:#FFFFFF;} .st1{font-family:'Formula1-Display-Bold';} .st2{font-size:29px;} .st3{font-size:37px;} #Layer_1{cursor: pointer;} </style> <text transform="matrix(1 0 0 1 19.0044 28.4741)" class="st0 st1 st2">SEARCH PAGE</text> <text transform="matrix(1 0 0 1 -2.098083e-04 32.3751)" class="st0 st1 st3">&lt;</text> </svg>
</div> 

<div align="center" class="table-container">

<p class = "dbInfo" style = "font-size: 50px;font-weight: 700;margin-top:2%;margin-bottom:0%">DRIVER SEARCH RESULTS</p>

<br>
<br>
<br>

<p class = "dbInfo" style = "font-size: 25px;font-weight: 400;margin-top:0.3%;margin-bottom:3%;margin-left: 1.5%">Here is the result of your <b>search</b>. You can query a new search by clicking <b>search page</b> above. </p>


<table>

<thead> 
<tr> <th> DRIVER NUMBER </th> <th> DRIVER NAME </th> <th>TEAM NAME</th> <th>POINTS</th> <th>PODIUMS</th> <th>CHAMPIONSHIPS</th> <th>SEASONS</th> <th>CAR ID</th> </tr> 
</thead>
<tbody>
<?php
include "../config.php";

function validatesAsInt($number)
{
    $number = filter_var($number, FILTER_VALIDATE_INT);
    return ($number !== FALSE);
}

$attributeSelection = $_POST['attributes'];
$operationSelection = $_POST['operation'];
$valueSelection = $_POST['value'];


if (validatesAsInt($valueSelection)){ // you have an integer in value

  if($attributeSelection!="driverName" && $attributeSelection!="teamName"){ // you have integer and do not search for string

    if($operationSelection == "smallerEqual"){

    $sql_statement = "SELECT * FROM Driver_drivenBy_drivesFor WHERE $attributeSelection <= $valueSelection";

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
    
      echo "<tr>" . "<td>" . $driverNumber . "</td>" . "<td>" . $driverName . "</td>" . "<td>" . $teamName . "</td>" . "<td>" . $points . "</td>" . "<td>" . $podiums . "</td>" ."<td>" . $championships . "</td>" ."<td>" . $seasons . "</td>" ."<td>" . $carID . "</td>" ."</tr>";
    }

    }
    elseif($operationSelection == "equal"){

    $sql_statement = "SELECT * FROM Driver_drivenBy_drivesFor WHERE $attributeSelection = $valueSelection";

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
    
      echo "<tr>" . "<td>" . $driverNumber . "</td>" . "<td>" . $driverName . "</td>" . "<td>" . $teamName . "</td>" . "<td>" . $points . "</td>" . "<td>" . $podiums . "</td>" ."<td>" . $championships . "</td>" ."<td>" . $seasons . "</td>" ."<td>" . $carID . "</td>" ."</tr>";
    }
    

    }
    else{

    $sql_statement = "SELECT * FROM Driver_drivenBy_drivesFor WHERE $attributeSelection >= $valueSelection";

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
    
      echo "<tr>" . "<td>" . $driverNumber . "</td>" . "<td>" . $driverName . "</td>" . "<td>" . $teamName . "</td>" . "<td>" . $points . "</td>" . "<td>" . $podiums . "</td>" ."<td>" . $championships . "</td>" ."<td>" . $seasons . "</td>" ."<td>" . $carID . "</td>" ."</tr>";
    }

    
}

  }
  else{ // you search for string value which cannot be an integer

    echo '<script>
    alert("You tried to search Driver Name or Team Name with numerical value! Only enter string values to search Driver or Team!");
    window.location.href="driverSearchPage.php";
    </script>';

  }

}

else{ //you have a string value as your value

  if($attributeSelection!="driverName" && $attributeSelection!="teamName"){
    echo '<script>
    alert("You tried to search Driver Number, Point, Podium, Championship, Season or Car ID with a string value! Only enter integer values to search these!");
    window.location.href="driverSearchPage.php";
    </script>';
  }
  else{

    if($operationSelection != "equal"){
      echo '<script>
      alert("You tried to search a Driver Name or Team Name with greater or smaller operations! Only use equal to operation for string search!");
      window.location.href="driverSearchPage.php";
      </script>';

    }
    else{

      $sql_statement = "SELECT * FROM Driver_drivenBy_drivesFor WHERE $attributeSelection = '$valueSelection'";

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
      
        echo "<tr>" . "<td>" . $driverNumber . "</td>" . "<td>" . $driverName . "</td>" . "<td>" . $teamName . "</td>" . "<td>" . $points . "</td>" . "<td>" . $podiums . "</td>" ."<td>" . $championships . "</td>" ."<td>" . $seasons . "</td>" ."<td>" . $carID . "</td>" ."</tr>";
      }
    }
  }

}


?>

</tbody>
</table>
</div>

</body>
</html>
