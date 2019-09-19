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

    <h1>Tuition Calculator</h1>

<?php


/////////////////// assign values to the variables


$residency = $_POST['residency'];
$units_num = $_POST['units'];
$total_1 = $residency * $units_num;

$health_fee = 20;
$services_card = $_POST['services_card'];
$parking_permit = $_POST['parking_permit'];

$total_2 = $total_1 + $health_fee + $services_card + $parking_permit;

$scholarship_award = rand(0,$total_1);

$total_3 = $total_2 - $scholarship_award;


echo "Cost of Tuition: $units_num units * $$residency = <b>$$total_1</b>";
echo "<br>";
echo "<h2>Extra Fees: </h2>";
echo "Student Health Fee: $$health_fee";
echo "<br>";
echo "College Services card: $$services_card";
echo "<br>";
echo "Parking Permit: $$parking_permit";
echo "<br><br>";
echo "<h2>Final Cost: </h2>";
echo "Total Registration Costs: <b>$$total_2</b>";
echo "<br>";
echo "Scholarship Award: $$scholarship_award";
echo "<br><br>";
echo "Total College Balance Due: <b>$$total_3</b>";


?>


    </div>
    </div>
    </body>
    
    <footer>
        <p>&copy; 2019 by Gaith Cattan</p>
    </footer>

</html>

