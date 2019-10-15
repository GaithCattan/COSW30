<?php include('includes/header.php'); ?>




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

$Color = "green";
$fontsize = "60px";

 
 $operator = $_POST['operator'];

switch($operator) {
  case "addition":
   echo '<div style=" text-align: center; background-color: white; border-style: inset; border-color: grey ; Color:'.$Color.' ; font-size:'.$fontsize.' ">'  .$value1 . " + " . $value2 . " = ". addOp($value1,$value2) . '</div>';
   break;
  case "subtraction":
   echo '<div style=" text-align: center; background-color: white; border-style: inset; border-color: grey ; Color:'.$Color.' ; font-size:'.$fontsize.' ">'  .$value1 . " - " . $value2 . " = ". subOp($value1,$value2) . '</div>';
   break;
  case "multiplication":
   echo '<div style=" text-align: center; background-color: white; border-style: inset; border-color: grey ; Color:'.$Color.' ; font-size:'.$fontsize.' ">'  .$value1 . " * " . $value2 . " = ". multiOp($value1,$value2) . '</div>';
   break;
  case "division":
   echo '<div style=" text-align: center; background-color: white; border-style: inset; border-color: grey ; Color:'.$Color.' ; font-size:'.$fontsize.' ">'  .$value1 . " / " . $value2 . " = ". divOp($value1,$value2) . '</div>';
   break;   
  default:
   echo "Something Went Wrong";
} 



/*

text-align: center; font-size: 60px; margin-top: 40px;
              border-radius: 25px; margin-left: auto; margin-right: auto;
              background-color: white;
   
*/
 
 
 ?>
 
 


<?php include('includes/footer.php'); ?>