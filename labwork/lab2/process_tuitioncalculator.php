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




