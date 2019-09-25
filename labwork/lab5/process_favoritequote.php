<!doctype html>
<html>
    <head>
         <meta charset="utf-8">
         <title>Tuition Calculator</title>
        <style>
          body {background-color: black;
                background-position: center;
                background-repeat: no-repeat;}
          h1 {text-align: center; font-size: 30px; margin-top: 40px;
              border-radius: 25px; margin-left: auto; margin-right: auto;
              background-color: grey;}
          #container {width: 900px;	margin-left: auto;	margin-right: auto;	padding-top: 50px;	padding-bottom: 150px; border-radius: 25px;	background-color: green;}
          #texting {width: 500px; display: block; margin-left: auto; margin-right: auto; text-align: center;}
          input[type=submit] {background-color: blue; border: none; border-radius: 10px;  color: white;  padding: 16px 32px;  text-decoration: none;  margin: 4px 2px;  cursor: pointer;}
          footer {font-size: 1.5em; color: white; text-align: center; margin-top: 11%;}
        </style>
            
    </head>
    <body>

    <div id="container">

    <h1>Tuition Calculator</h1>

    <div id="texting">


<?php

    $text = $_POST['text'];
    $textExplode = explode(' ', $text);    
    $arryCount = count($textExplode);


//////////////////////////// print array //////////////////////////// 

    echo "<h1>Your original list is: </h1>";


    foreach($textExplode as $key => $value) {
        echo "<p>$value</p>";
    }
    echo "<h3>The number of words in your quote is: $arryCount </h3>";
    

//////////////////////////// print array alphabetized //////////////////////////// 

    sort($textExplode, SORT_NATURAL | SORT_FLAG_CASE);
    
    echo "<h1>Your alphabetized list is: </h1>";

    foreach($textExplode as $key => $value) {
        echo "<p>$value</p>";
    }

//////////////////////////// print array alphabetized in reverse //////////////////////////// 

    rsort($textExplode, SORT_NATURAL | SORT_FLAG_CASE);
    
    echo "<h1>Your reverse alphabetized list is: </h1>";

    foreach($textExplode as $key => $value) {
        echo "<p>$value</p>";
    }    
    
//////////////////////////// add three words to the array //////////////////////////// 

    array_push($textExplode, "What", "Is", "This");
    $arryCount1 = count($textExplode);    

    echo "<h1>Your new list after adding three words is: </h1>";


    foreach($textExplode as $key => $value) {
        echo "<p>$value</p>";
    }
    echo "<h3>The number of words in your quote after adding three words is: $arryCount1 </h3>";

//////////////////////////// remove first three words of the array //////////////////////////// 


    array_splice($textExplode, 0, 3);
    $arryCount2 = count($textExplode);        

    echo "<h1>Your new list after removing the first three words is: </h1>";

    foreach($textExplode as $key => $value) {
        echo "<p>$value</p>";
    }
    echo "<h3>The number of words in your quote after removing the first three words is: $arryCount2 </h3>";

//////////////////////////// return link //////////////////////////// 

    echo " <a href=\"https://0cd32b34e5164bbab8e00106b3cc302a.vfs.cloud9.us-east-1.amazonaws.com/labwork/lab5/favoritequote.html\"><button>Click here to try agin</button></a>";

?>



    </div>
    </div>
    </body>
    
    <footer>
        <p>&copy; 2019 by Gaith Cattan</p>
    </footer>

</html>