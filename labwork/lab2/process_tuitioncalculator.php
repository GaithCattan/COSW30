<?php


/////////////////// assign values to the variables


$residency = $_POST['residency'];
$units_num = $_POST['units'];
$total_1 = $residency * $units_num;

$health_fee = 20;
$services_card = $_POST['services_card'];
$parking_permit = $_POST['parking_permit'];

$total_2 = $total_1 + $services_card + $parking_permit;


echo "Cost of Tuition: $units_num * $residency = $total_1";
echo "<br>";
echo "Student Health Fee: $$health_fee";
echo "<br>";
echo "College Services card: $$services_card";
echo "<br>";
echo "Parking Permit: $$parking_permit";
echo "<br>";
echo "Total College Balance Due: $total_2";



?>




