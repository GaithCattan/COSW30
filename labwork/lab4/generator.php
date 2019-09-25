<?php


    $numParagraph = $_POST['paragraphs'];
    $text = $_POST['text'];
    
    $textExplode = explode(' ', $text);

    shuffle($textExplode);
    
    
//  $array = [ 1 => 'test', 'test'];
    
    echo "<h1>String</h1>";
    
    foreach($textExplode as $key => $value) {
        echo "<p>$key Value: $value</p>";
        //<p>1 Value: word</p>
    }

    // use the implode function to turn it back into a string
    
    $textImplode = implode(' ',$textExplode);
    echo "<p>$textImplode</p>";



    echo "<h1>Random Texts</h1>";



$text = "Bacon ipsum dolor amet shank meatball kielbasa, shoulder rump doner ground round tail pig picanha. Turkey tongue chicken, buffalo boudin tail shank shankle. Corned beef turducken strip steak, meatball chuck
sirloin spare ribs pastrami cupim. Porchetta bacon jerky ham hock tail bresaola pork chop picanha.
Jowl beef sausage pancetta meatloaf fatback. Landjaeger filet mignon jerky, pork chop pastrami kielbasa meatloaf leberkas pig boudin beef ribs. Biltong pork belly short loin tail brisket, pork loin filet mignon
buffalo bacon t-bone beef ribs rump turkey drumstick. T-bone cupim pork belly cow bacon boudin ball tip pancetta beef corned beef meatball. Cupim drumstick picanha boudin, jowl corned beef chicken tri-tip.";



  for($i = 0; $i < $numParagraph; $i++) {
        echo "<p>$text</p>";
        echo '<p>'. $text .'</p>';}



//    echo 'Text Explode';
//    print_r($textExplode);


//    $shuffleText = shuffle($textExplode);
    
//    echo 'Text Shuffled';    
//    print_r($shuffleText);
    





//Other Loops
    // foreach()
    // while()

?>

