
<?php
 
 
$names = ['Gaith','Eric','John','George','Maria'];



function greeting ($nametest) {
    echo '<p>Hello my name is '.$nametest.'</p>';
}

/*
greeting("Mario");
greeting("Gaith");
greeting("Eric");
greeting("George");
*/


foreach ($names as $name) {
    greeting($name);
}



//<p>Hello my name is Gaith</p>
//<p>Hello my name is Eric</p>
//<p>Hello my name is John</p>
//<p>Hello my name is George</p>
//<p>Hello my name is Maria</p>

?>
