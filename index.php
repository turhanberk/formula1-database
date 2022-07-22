<!DOCTYPE html>
<html>
<head>
<title>FORMULA-1 2021 DATABASE</title>
<link rel="stylesheet" href="css/teamsMenu.css">
<link rel="stylesheet" href="css/driversMenu.css">
<link rel="stylesheet" href="css/GPsMenu.css">
<link rel="stylesheet" href="css/carsMenu.css">
<link rel="stylesheet" href="css/racesMenu.css">
<style>
#formulaBackground {
  background: rgb(113,41,47);
  background: radial-gradient(circle, rgb(117, 18, 26) 20%, rgba(3,3,4,1) 100%);
}

#logo{ 
	position:fixed; 
	top:3%; 
	left:3%; 
  z-index: 10;
} 

#supportFlag{ 
	position:fixed; 
	top:85%; 
	left:83%; 
  width: 8%;
  z-index: 10;
} 

.supportText {
  color: white;
  font-family: Gill Sans,Gill Sans MT,Calibri,sans-serif; 
  position:fixed; 
	top:85%; 
	left:90%; 
  z-index: 10;
  text-align: center;
}


#f1car {
  position:fixed; 
  top: 20%;
  display: block;
  width: 80%;
  left: 10%;
}

.dbInfo {
  text-align: center;
  color: white;
  font-family: Gill Sans,Gill Sans MT,Calibri,sans-serif; 
}


#footer {
        position: fixed;
        bottom: 0%;
        width: 100%;
        margin-bottom: 5px;
    }


</style>
</head>
<body id="formulaBackground">
  
  <div id="logo"> 
    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 550 99.66" width="80%"><defs><style>.cls-1{fill:#e00;}.cls-2{font-size:26.4px;fill:#f9f9f9;font-family:Formula1-Display-Bold, Formula1;font-weight:700;}.cls-3{letter-spacing:-0.04em;}.cls-4{letter-spacing:-0.15em;}.cls-5{letter-spacing:-0.01em;}</style></defs><path class="cls-1" d="M68.59,38.8,38.44,68.1H0L47.85,20.5C65.62,2.91,74.18,0,104.48,0H224.25l-26,25.54H108c-22.65,0-27.47,1.7-39.36,13.26Zm125.79-9.22H108.44c-22.79,0-26.4,1.77-36.73,12.13L45.37,68.1H81.05l8.49-8.51c5.6-5.61,8.14-6.18,19.4-6.18h61.65Zm9.27,38.52L271.82,0H229.49l-68,68.1Z" transform="translate(0 0)"/><path d="M550,76.61v1.7" transform="translate(0 0)"/><path class="cls-1" d="M376.65,48.66h38.86V19.44H376.65Zm9.69-19.51h19.4v9.72h-19.4Z" transform="translate(0 0)"/><path class="cls-1" d="M550,48.66V38.94h-5.31V19.44A19.44,19.44,0,0,0,525.3,0H381a24.17,24.17,0,0,0-19.4,9.72A24.4,24.4,0,0,0,342.18,0H288.8V9.72h53.38a14.61,14.61,0,0,1,0,29.22h-34v9.72h49.05a23.83,23.83,0,0,0,4.39,9.72H298.57V43.77a14.58,14.58,0,0,1,14.58-14.62h34V19.44H288.8v9.71h4.89a24.37,24.37,0,0,0-4.89,14.62V68.1h72.84V58.38A24.36,24.36,0,0,0,381,68.1h29.09a24.44,24.44,0,0,0,14.58-4.9v4.9H550V58.38H434.41V43.77A14.58,14.58,0,0,1,449,29.15h34V19.44H433.91a23.77,23.77,0,0,0-4.39-9.72h48.56a14.61,14.61,0,0,1,0,29.22h-34v9.72H525.3V19.44H502.08A20.12,20.12,0,0,0,499,9.72h26.27a9.48,9.48,0,0,1,3.71.73,9.69,9.69,0,0,1,6,9V48.59H550ZM410.13,58.38H381a14.67,14.67,0,0,1-5.59-1.11,14.61,14.61,0,0,1-7.89-7.91,14.67,14.67,0,0,1-1.11-5.59V24.33a14.76,14.76,0,0,1,1.11-5.6,14.52,14.52,0,0,1,13.48-9h29.09a14.42,14.42,0,0,1,5.58,1.1,14.57,14.57,0,0,1,9,13.51V43.77a14.58,14.58,0,0,1-14.58,14.61ZM515.6,38.94H499a22,22,0,0,0,3.11-9.72h13.52v9.72Z" transform="translate(0 0)"/><text class="cls-2" transform="translate(331.85 94.65)"><tspan class="cls-3">D</tspan><tspan class="cls-4" x="23.38" y="0">A</tspan><tspan class="cls-4" x="41.38" y="0">T</tspan><tspan x="58.6" y="0">A</tspan><tspan class="cls-5" x="82.09" y="0">B</tspan><tspan x="102.86" y="0">ASE</tspan></text></svg>
  </div> 

  <div class="dropdown-races">
    <button class="dropbtn-races">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40%" viewBox="0 0 778.7 159.8" style="enable-background:new 0 0 778.7 159.8;" xml:space="preserve"> <style type="text/css"> .st0{fill:#FFFFFF;} .st1{font-family:'Formula1-Display-Regular';} .st2{font-size:150px;} </style> <text transform="matrix(1 0 0 1 0 131.25)" class="st0 st1 st2">RACES</text> <text transform="matrix(6.123234e-17 1 -1 6.123234e-17 647.4683 46.4836)" class="st0 st1 st2">&gt;</text> </svg>
    </button>
    <div class="dropdown-content-races">
    <a href="races/raceSearchPage.php"> 
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 576.1 159.8" style="enable-background:new 0 0 576.1 159.8;" xml:space="preserve"> <style type="text/css"> .st0{font-family:'Formula1-Display-Regular';} .st1{font-size:150px;} </style> <text transform="matrix(1 0 0 1 0 131.25)" class="st0 st1">search</text> </svg>
   </a>
    <a href="races/raceEditPage.php">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 333.6 159.8" style="enable-background:new 0 0 333.6 159.8;" xml:space="preserve"> <style type="text/css"> .st0{font-family:'Formula1-Display-Regular';} .st3{font-size:90px;} </style> <text transform="matrix(1 0 0 1 0 131.25)" class="st0 st3">edit</text> </svg>
    </a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40%" viewBox="0 0 778.7 159.8" style="enable-background:new 0 0 778.7 159.8;" xml:space="preserve"> <style type="text/css"> .st0{fill:#FFFFFF;} .st1{font-family:'Formula1-Display-Regular';} .st2{font-size:150px;} </style> <text transform="matrix(1 0 0 1 0 131.25)" class="st0 st1 st2">TEAMS</text> <text transform="matrix(6.123234e-17 1 -1 6.123234e-17 647.4683 46.4836)" class="st0 st1 st2">&gt;</text> </svg>
    </button>
    <div class="dropdown-content">
    <a href="teams/teamSearchPage.php"> 
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 576.1 159.8" style="enable-background:new 0 0 576.1 159.8;" xml:space="preserve"> <style type="text/css"> .st0{font-family:'Formula1-Display-Regular';} .st1{font-size:150px;} </style> <text transform="matrix(1 0 0 1 0 131.25)" class="st0 st1">search</text> </svg>
   </a>
    <a href="teams/teamEditPage.php">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 333.6 159.8" style="enable-background:new 0 0 333.6 159.8;" xml:space="preserve"> <style type="text/css"> .st0{font-family:'Formula1-Display-Regular';} .st3{font-size:90px;} </style> <text transform="matrix(1 0 0 1 0 131.25)" class="st0 st3">edit</text> </svg>
    </a>
    </div>
  </div>

  <div class="dropdown-drivers">
    <button class="dropbtn-drivers">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="46%" viewBox="0 0 882.8 159.8" style="enable-background:new 0 0 882.8 159.8;" xml:space="preserve"> <style type="text/css"> .st0{font-family:'Formula1-Display-Regular';} .st1{font-size:150px;} </style> <text transform="matrix(1 0 0 1 0 131.25)" class="st0 st1">DRIVERS</text> <text transform="matrix(6.123234e-17 1 -1 6.123234e-17 751.5327 51.7366)" class="st0 st1">&gt;</text> </svg>
   </button>
    <div class="dropdown-content-drivers">
    <a href="drivers/driverSearchPage.php"> 
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 576.1 159.8" style="enable-background:new 0 0 576.1 159.8;" xml:space="preserve"> <style type="text/css"> .st0{font-family:'Formula1-Display-Regular';} .st1{font-size:150px;} </style> <text transform="matrix(1 0 0 1 0 131.25)" class="st0 st1">search</text> </svg>
   </a>
    <a href="drivers/driverEditPage.php">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 333.6 159.8" style="enable-background:new 0 0 333.6 159.8;" xml:space="preserve"> <style type="text/css"> .st0{font-family:'Formula1-Display-Regular';} .st3{font-size:90px;} </style> <text transform="matrix(1 0 0 1 0 131.25)" class="st0 st3">edit</text> </svg>
    </a>
    </div>
  </div>


  <div class="dropdown-GPs">
    <button class="dropbtn-GPs">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 475.8 159.8" width="29%" style="enable-background:new 0 0 475.8 159.8;" xml:space="preserve"> <style type="text/css"> .st0{font-family:'Formula1-Display-Regular';} .st1{font-size:150px;} </style> <text transform="matrix(1 0 0 1 0 131.25)" class="st0 st1">GPs</text> <text transform="matrix(6.123234e-17 1 -1 6.123234e-17 344.5327 51.7366)" class="st0 st1">&gt;</text> </svg>
    </button>
    <div class="dropdown-content-GPs">
    <a href="gps/gpSearchPage.php"> 
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 576.1 159.8" style="enable-background:new 0 0 576.1 159.8;" xml:space="preserve"> <style type="text/css"> .st0{font-family:'Formula1-Display-Regular';} .st1{font-size:150px;} </style> <text transform="matrix(1 0 0 1 0 131.25)" class="st0 st1">search</text> </svg>
   </a>
    <a href="gps/gpEditPage.php">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 333.6 159.8" style="enable-background:new 0 0 333.6 159.8;" xml:space="preserve"> <style type="text/css"> .st0{font-family:'Formula1-Display-Regular';} .st3{font-size:90px;} </style> <text transform="matrix(1 0 0 1 0 131.25)" class="st0 st3">edit</text> </svg>
    </a>
    </div>
  </div>

  <div class="dropdown-cars">
    <button class="dropbtn-cars">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 620.8 159.8" width="35%" style="enable-background:new 0 0 620.8 159.8;" xml:space="preserve"> <style type="text/css"> .st0{font-family:'Formula1-Display-Regular';} .st1{font-size:150px;} </style> <text transform="matrix(1 0 0 1 0 131.25)" class="st0 st1">CARS</text> <text transform="matrix(6.123234e-17 1 -1 6.123234e-17 489.5327 46.7366)" class="st0 st1">&gt;</text> </svg>
</button>
    <div class="dropdown-content-cars">
    <a href="cars/carSearchPage.php"> 
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 576.1 159.8" style="enable-background:new 0 0 576.1 159.8;" xml:space="preserve"> <style type="text/css"> .st0{font-family:'Formula1-Display-Regular';} .st1{font-size:150px;} </style> <text transform="matrix(1 0 0 1 0 131.25)" class="st0 st1">search</text> </svg>
   </a>
    <a href="cars/carEditPage.php">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 333.6 159.8" style="enable-background:new 0 0 333.6 159.8;" xml:space="preserve"> <style type="text/css"> .st0{font-family:'Formula1-Display-Regular';} .st3{font-size:90px;} </style> <text transform="matrix(1 0 0 1 0 131.25)" class="st0 st3">edit</text> </svg>
    </a>
    </div>
  </div>

  <img src="https://i.ibb.co/S0qfvwZ/F1-Ferrari-Background-PNG-Image.png" id="f1car">


<p class = "dbInfo" style = "font-size: 40px;font-weight: 700;margin-top: 35%; margin-bottom: 2%">Welcome to CS306 Formula 1 2021 Database</p>

<?php 

include "config.php"; // Makes mysql connection

$sql_statement = "SELECT SUM(TABLE_ROWS) 
FROM INFORMATION_SCHEMA.TABLES 
WHERE TABLE_SCHEMA = 'formula1_2021'";
$result = mysqli_query($db, $sql_statement); // Executing query
$row = mysqli_fetch_assoc($result);// Iterating the result
$totalRow = $row['SUM(TABLE_ROWS)']; 

$sql_statement = "SELECT COUNT(*)
FROM information_schema.tables
WHERE table_schema = 'formula1_2021';";

$result = mysqli_query($db, $sql_statement); // Executing query

$row = mysqli_fetch_assoc($result);// Iterating the result
$totalTable = $row['COUNT(*)']; 


echo "<p class = 'dbInfo' style = 'font-size: 30px;font-weight: 400;margin-top:0%; margin-bottom: 0%'> There are currently <b>". $totalTable . "</b> tables in the database with total <b>" . $totalRow . "</b> entries.</p>"
?>

<p class = "dbInfo" style = "font-size: 20px;font-weight: 100;margin-top: 1%;%">You can query a <b>search</b> or <b>edit</b> the tables from entities at the top of the page.</p>

<div id = "footer" style="  font-family: Gill Sans,Gill Sans MT,Calibri,sans-serif;vertical-align:bottom;">
      <span style="font-size:13px; margin-left: 10px; vertical-align:bottom;color:#ffffff"> © Berk Turhan - 25324</span>
</div>

<div id="supportFlag"> 
<a href="support/supportPage.php">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106 106"><defs><style>.cls-1a{fill:#fff;}.cls-2a{opacity:0.1;}.cls-3a{fill:#171c1f;}</style></defs><title>checkered-flag</title><g id="Checkered-Flag"><g id="Fill"><path class="cls-1a" d="M58.62,5.1C43.5,8.92,26.5,16.5,9,5.29V65.12c17.5,11.21,34.5,3.63,49.62-.19C73.75,60.48,87,59.79,97,70.1V10.27C87,0,73.75.65,58.62,5.1Z"/></g><g id="Shadows" class="cls-2a"><path d="M76.63,57.86c-5.34,0-11.24,1-18.5,3.15-2.23.56-4.45,1.19-6.79,1.86C44.15,64.9,36.7,67,29.12,67A34.21,34.21,0,0,1,11,62v2a34.21,34.21,0,0,0,18.12,5c7.58,0,15-2.11,22.22-4.15,2.34-.66,4.55-1.29,6.79-1.85,7.26-2.14,13.16-3.15,18.5-3.15,7.21,0,13.26,1.91,18.37,5.8v-2C89.89,59.76,83.84,57.86,76.63,57.86Z"/></g><g id="Outline"><path class="cls-3a" d="M98.44,8.87C92.66,2.9,85.52,0,76.63,0,71.29,0,65.39,1,58.13,3.14,55.9,3.71,53.58,4.36,51.35,5,44.15,7,36.7,9.15,29.12,9.15A34.21,34.21,0,0,1,11,4.13V2A2,2,0,0,0,7,2V104a2,2,0,0,0,4,0V68.58A38,38,0,0,0,29.12,73C37.26,73,45,70.81,52.44,68.7c2.31-.66,4.5-1.28,6.75-1.85a62.8,62.8,0,0,1,17.44-3c7.75,0,13.94,2.5,18.93,7.65A2,2,0,0,0,99,70.11V10.25A2,2,0,0,0,98.44,8.87ZM95,65.66c-5.11-3.9-11.16-5.8-18.37-5.8-5.34,0-11.24,1-18.5,3.15-2.23.56-4.45,1.19-6.79,1.85C44.15,66.9,36.7,69,29.12,69A34.21,34.21,0,0,1,11,64V8.74a38,38,0,0,0,18.12,4.4C37.26,13.14,45,11,52.44,8.84c2.31-.66,4.5-1.28,6.75-1.85A62.81,62.81,0,0,1,76.63,4C84.09,4,90.11,6.31,95,11.08Z"/></g><g id="Black"><path class="cls-3a" d="M53,7.61c-4.67,1.32-9.33,2.65-14,3.53V26.33c4.67-.88,9.33-2.21,14-3.53Zm-42,0V22.8a34.47,34.47,0,0,0,14,4.42V12A34.47,34.47,0,0,1,11,7.61ZM95,66.38V51.19a34.47,34.47,0,0,0-14-4.42V62A34.47,34.47,0,0,1,95,66.38ZM95,37V22.8a34.47,34.47,0,0,0-14-4.42V32.58A34.47,34.47,0,0,1,95,37ZM11,37V51.19a34.47,34.47,0,0,0,14,4.42V41.41A34.47,34.47,0,0,1,11,37ZM53,65.38c4.67-1.32,9.33-2.65,14-3.53V47.66c-4.67.88-9.33,2.21-14,3.53ZM39,40.53V54.72c4.67-.88,9.33-2.21,14-3.53V37C48.33,38.32,43.67,39.65,39,40.53ZM25,55.61V70.77l1.16.11a51.34,51.34,0,0,0,12.84-1V54.72A49.86,49.86,0,0,1,25,55.61ZM81,18.39V3.19a49.86,49.86,0,0,0-14,.88V19.27A49.86,49.86,0,0,1,81,18.39ZM67,33.46V47.66a49.85,49.85,0,0,1,14-.88V32.58A49.85,49.85,0,0,0,67,33.46ZM39,40.53V26.33a49.86,49.86,0,0,1-14,.88V41.41A49.85,49.85,0,0,0,39,40.53Zm28-7.07V19.27c-4.67.88-9.33,2.21-14,3.53V37C57.67,35.67,62.33,34.35,67,33.46Z"/></g></g></svg>
</a>
</div> 

<div id="supportText"> 
<a href="support/supportPage.php">
<p class = "supportText" style = "font-size: 25px;font-weight:400;margin-top:1%" >SUPPORT PAGE!</p>
</a>
</div> 

</body>
</html>

