<!doctype html>
<html>
    <head>
         <meta charset="utf-8">
         <title>Tuition Calculator</title>
        <style>
          body {background-color: black; background-image: url("https://upload.wikimedia.org/wikipedia/commons/f/fa/LBCC_LAC_Bldg_A.jpg");
                background-position: center;
                background-repeat: no-repeat;}
          h1 {text-align: center; font-size: 60px; margin-top: 40px;
              border-radius: 25px; margin-left: auto; margin-right: auto;
              background-color: white;}
          #container {width: 900px;	margin-left: auto;	margin-right: auto;	padding-top: 50px;	padding-bottom: 150px; border-radius: 25px;	background-color: #DA6B40;}
          #texting {width: 500px; display: block; margin-left: auto; margin-right: auto;}
          input[type=submit] {background-color: #33733F; border: none; border-radius: 10px;  color: white;  padding: 16px 32px;  text-decoration: none;  margin: 4px 2px;  cursor: pointer;}
          footer {font-size: 1.5em; color: white; text-align: center; margin-top: 11%;}
        </style>
            
    </head>
    <body>

    <div id="container">
    <div id="texting">

    <h1>Simple Calculator</h1>


<?php
 function addOp($a, $b)
 {
 return ($a + $b);
 }
 $value1 = $_POST['value1'];
 $value2 = $_POST['value2'];
//////////////////////////////////////////////////////
 function subOp($a, $b)
 {
 return ($a - $b);
 }
 $value1 = $_POST['value1'];
 $value2 = $_POST['value2'];
//////////////////////////////////////////////////////
 function multiOp($a, $b)
 {
 return ($a * $b);
 }
 $value1 = $_POST['value1'];
 $value2 = $_POST['value2'];
//////////////////////////////////////////////////////
 function divOp($a, $b)
 {
 return ($a / $b);
 }
 $value1 = $_POST['value1'];
 $value2 = $_POST['value2'];
//////////////////////////////////////////////////////



?>

 <?php

 
 $operator = $_POST['operator'];

switch($operator) {
  case "addition":
   echo $value1 . " + " . $value2 . " = ";
   echo addOp($value1,$value2) . "<br><br>";  
   break;
  case "subtraction":
   echo $value1 . " - " . $value2 . " = ";
   echo subOp($value1,$value2) . "<br><br>";
   break;
  case "multiplication":
   echo $value1 . " * " . $value2 . " = ";
   echo multiOp($value1,$value2) . "<br><br>";   
   break;
  case "division":
   echo $value1 . " / " . $value2 . " = ";
   echo divOp($value1,$value2) . "<br><br>";  
   break;   
  default:
   echo "Something Went Wrong";
} 


 
 
 ?>
 
 
     </div>
    </div>
    </body>
    
    <footer>
        <p>&copy; 2019 by Gaith Cattan</p>
    </footer>

</html>