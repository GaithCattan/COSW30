<?php include('includes/header.php'); ?>




    <h1>Simple Calculator</h1>


<?php

 $value1 = $_POST['value1'];
 $value2 = $_POST['value2'];
 $operator = $_POST['operator'];



////////////////////////////////////////////////////// Functions //////////////////////////////////////////////////////

 function addOp($a, $b)
 {
 return ($a + $b);
 }

////////////////////////////////////////////////////////////////////////////////////////////////////////////
 function subOp($a, $b)
 {
 return ($a - $b);
 }

////////////////////////////////////////////////////////////////////////////////////////////////////////////
 function multiOp($a, $b)
 {
 return ($a * $b);
 }

////////////////////////////////////////////////////////////////////////////////////////////////////////////
 function divOp($a, $b)
 {
 return ($a / $b);
 }

////////////////////////////////////////////////////////////////////////////////////////////////////////////



?>

 <?php

$Color = "green";
$fontsize = "60px";


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



 
 
 ?>
 
 


<?php include('includes/footer.php'); ?>