<!DOCTYPE html>
<html>
<head>
	<title>TEAM EDIT</title>

<style>

.form-inline {  
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline input {
  vertical-align: middle;
  margin: 10px 50px 10px 27px;
  width: 200px;
  padding: 10px 10px;
  background-color: #fff;
  border: 4px solid #ddd;
}

.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 4px solid #ddd;
  color: white;
  cursor: pointer;
}

.form-inline button:hover {
  background-color: royalblue;
}

@media (max-width: 900px) {
  .form-inline input {
    margin: 10px 0;
  }
  
  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}

div {
  border-radius: 5px;
  background-color: rgba(255, 255, 255, 0);
  padding: 20px;
}
.dbInfo {
  text-align: center;
  color: white;
  font-family: Gill Sans,Gill Sans MT,Calibri,sans-serif; 
}

#logo{ 
	position:absolute; 
	top:4%; 
	left:2%; 
  z-index: 10;
} 

#goback{ 
	position:absolute; 
	top:3.5%; 
	left:78%; 
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
<body style="background:linear-gradient(270deg, rgba(167,0,0,1) 0%, rgba(176,176,176,1) 70%)">

<div id="logo"> 
    <svg id="Layer_5" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 550 99.66" width="80%"><defs><style>.cls-1{fill:#e00;}.cls-2{font-size:26.4px;fill:#f9f9f9;font-family:Formula1-Display-Bold, Formula1;font-weight:700;}.cls-3{letter-spacing:-0.04em;}.cls-4{letter-spacing:-0.15em;}.cls-5{letter-spacing:-0.01em;}</style></defs><path class="cls-1" d="M68.59,38.8,38.44,68.1H0L47.85,20.5C65.62,2.91,74.18,0,104.48,0H224.25l-26,25.54H108c-22.65,0-27.47,1.7-39.36,13.26Zm125.79-9.22H108.44c-22.79,0-26.4,1.77-36.73,12.13L45.37,68.1H81.05l8.49-8.51c5.6-5.61,8.14-6.18,19.4-6.18h61.65Zm9.27,38.52L271.82,0H229.49l-68,68.1Z" transform="translate(0 0)"/><path d="M550,76.61v1.7" transform="translate(0 0)"/><path class="cls-1" d="M376.65,48.66h38.86V19.44H376.65Zm9.69-19.51h19.4v9.72h-19.4Z" transform="translate(0 0)"/><path class="cls-1" d="M550,48.66V38.94h-5.31V19.44A19.44,19.44,0,0,0,525.3,0H381a24.17,24.17,0,0,0-19.4,9.72A24.4,24.4,0,0,0,342.18,0H288.8V9.72h53.38a14.61,14.61,0,0,1,0,29.22h-34v9.72h49.05a23.83,23.83,0,0,0,4.39,9.72H298.57V43.77a14.58,14.58,0,0,1,14.58-14.62h34V19.44H288.8v9.71h4.89a24.37,24.37,0,0,0-4.89,14.62V68.1h72.84V58.38A24.36,24.36,0,0,0,381,68.1h29.09a24.44,24.44,0,0,0,14.58-4.9v4.9H550V58.38H434.41V43.77A14.58,14.58,0,0,1,449,29.15h34V19.44H433.91a23.77,23.77,0,0,0-4.39-9.72h48.56a14.61,14.61,0,0,1,0,29.22h-34v9.72H525.3V19.44H502.08A20.12,20.12,0,0,0,499,9.72h26.27a9.48,9.48,0,0,1,3.71.73,9.69,9.69,0,0,1,6,9V48.59H550ZM410.13,58.38H381a14.67,14.67,0,0,1-5.59-1.11,14.61,14.61,0,0,1-7.89-7.91,14.67,14.67,0,0,1-1.11-5.59V24.33a14.76,14.76,0,0,1,1.11-5.6,14.52,14.52,0,0,1,13.48-9h29.09a14.42,14.42,0,0,1,5.58,1.1,14.57,14.57,0,0,1,9,13.51V43.77a14.58,14.58,0,0,1-14.58,14.61ZM515.6,38.94H499a22,22,0,0,0,3.11-9.72h13.52v9.72Z" transform="translate(0 0)"/><text class="cls-2" transform="translate(331.85 94.65)"><tspan class="cls-3">D</tspan><tspan class="cls-4" x="23.38" y="0">A</tspan><tspan class="cls-4" x="41.38" y="0">T</tspan><tspan x="58.6" y="0">A</tspan><tspan class="cls-5" x="82.09" y="0">B</tspan><tspan x="102.86" y="0">ASE</tspan></text></svg>
</div> 

<div id="goback"> 
<svg onclick="window.location.href = '../index.php'" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80%" x="0px" y="0px" viewBox="0 0 221.2 39.4" style="enable-background:new 0 0 221.2 39.4;" xml:space="preserve"> <style type="text/css"> .st0{fill:#FFFFFF;} .st1{font-family:'Formula1-Display-Bold';} .st2{font-size:29px;} .st3{font-size:37px;} #Layer_1{cursor: pointer;} </style> <text transform="matrix(1 0 0 1 19.0044 28.4741)" class="st0 st1 st2">MAIN PAGE </text> <text transform="matrix(1 0 0 1 -2.098083e-04 32.3751)" class="st0 st1 st3">&lt;</text> </svg>
</div> 



<div align="center">
<p class = "dbInfo" style = "font-size: 50px;font-weight: 700;margin-top:0.3%;margin-bottom:0%">FORMULA 1 TEAM EDIT</p>
<br>
<br>
<p class = "dbInfo" style = "font-size: 25px;font-weight: 400;margin-top:0.3%;margin-bottom:0%;margin-left: 1.5%">Here you can <b>insert</b> an instance by filling the boxes below or <b>delete</b> an instance by clicking DELETE from the Team table.</p>

<?php 
include "teamTableDrawer.php";
?>

<form class="form-inline" action="teamInsert.php" method="POST">
 
  <input type="text" id="teamName" name="teamName" placeholder="Team Name" required><br><br>
  <input type="number" min=0 id="teamPoint" name="teamPoint" placeholder="Team Point" required><br><br>
  <input type="number" min=0 id="championships" name="championships" placeholder="Championships" required><br><br>
  <input type="number" min=1900 id="foundingYear" name="foundingYear" placeholder="Founding Year" required><br><br>
 
  <button type="submit">INSERT</button>

</form>
</div>
</body>
</html>