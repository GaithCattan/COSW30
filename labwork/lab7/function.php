<?php
 function addOp($a = 0, $b = 0)
 {
 return ($a + $b);
 }
 $value1 = $_POST['value1'];
 $value2 = $_POST['value2'];
//////////////////////////////////////////////////////
 function subOp($a = 0, $b = 0)
 {
 return ($a - $b);
 }
 $value1 = $_POST['value1'];
 $value2 = $_POST['value2'];
//////////////////////////////////////////////////////
 function multiOp($a = 0, $b = 0)
 {
 return ($a * $b);
 }
 $value1 = $_POST['value1'];
 $value2 = $_POST['value2'];
//////////////////////////////////////////////////////
 function divOp($a = 0, $b = 0)
 {
 return ($a / $b);
 }
 $value1 = $_POST['value1'];
 $value2 = $_POST['value2'];
//////////////////////////////////////////////////////



?>

 <?php
 
 $oparetor = $_POST['operator'];



    if(isset($_POST['operator']) && isset($_POST['value1']) && isset($_POST['value2']))
    {
     
     
      echo $value1 . " + " . $value2 . " = ";
 echo addOp($value1,$value2) . "<br><br>";
 
 
 
 echo $value1 . " - " . $value2 . " = ";
 echo subOp($value1,$value2) . "<br><br>";
 
 
 echo $value1 . " * " . $value2 . " = ";
 echo multiOp($value1,$value2) . "<br><br>";
 
 
 echo $value1 . " / " . $value2 . " = ";
 echo divOp($value1,$value2) . "<br><br>";
     
     
     
     
     
    }
    else {
      echo "Please Fill up The Fields";
        }  

 
 
 

 
 
 ?>