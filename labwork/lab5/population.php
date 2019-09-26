<!doctype html>
<html>
    <head>
         <meta charset="utf-8">
         <title>Population Table</title>
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
          table, th, td {border: 1px solid black; text-align: center;}
        </style>
            
    </head>
    <body>

    <div id="container">

    <h1>Population Table</h1>

    <div id="texting">


<?php

    $population = array('New York, New York' => '8,622,698',
                        'Los Angeles, California' => '3,999,759',
                        'Chicago, Illinois' => '2,716,450',
                        'Houston, Texas' => '2,312,717',
                        'Phoenix, Arizona' => '1,626,078',
                        'Philadelphia, Pennsylvania' => '1,580,863',
                        'San Antonio, Texas' => '1,511,946',
                        'San Diego, California' => '1,419,516',
                        'Dallas, Texas' => '1,341,075',
                        'San Jose, California' => '1,035,317',
                        'Austin, Texas' => '950,715',
                        'Jacksonville, Florida' => '892,062',
                        'San Francisco' => '884,363',
                        'Columbus' => '879,170',
                        'Fort Worth' => '874,168');


    echo "<h2>Order By Population</h2>";
    echo "<table>

            <tr>
                <td colspan='8'>The 15 Most Populous Cities as of July 1, 2017</td>
            </tr>
            <tr>
                <th>Rank</th>
                <th>City, State</th>
                <th>2017 total population</th>
            </tr>";
        $i = 1;
        foreach ($population as $key => $value ) {
            print "<td>$i</td><td>$key</td><td>$value</td></tr>\n";
            $i++;
        }


    echo "</table>";



    ksort($population, SORT_NATURAL | SORT_FLAG_CASE);

    echo "<h2>Order By City Name</h2>";
    echo "<table>

            <tr>
                <td colspan='8'>The 15 Most Populous Cities as of July 1, 2017</td>
            </tr>
            <tr>
                <th>Rank</th>
                <th>City, State</th>
                <th>2017 total population</th>
            </tr>";
        $i = 1;
        foreach ($population as $key => $value ) {
            print "<td>$i</td><td>$key</td><td>$value</td></tr>\n";
            $i++;
        }


    echo "</table>";

//////////////////////////// return link //////////////////////////// 

    echo "<br><br><br>";

    echo " <a href=\"https://cosw30gaith.herokuapp.com/labwork/lab5/favoritequote.html\"><button>Return To Previous Page</button></a>";




/*

print "<table>\n";
foreach ($population as $key => $value) {
    print "<td>$key</td><td>$value</td></tr>\n";
}



print "<th>City, State</th>";
print "<th>2017 total population</th>";


$i = 0;       // index used to control when to add new row (incremented to each loop)
// Traverse the array with FOREACH
foreach($aray AS $key=>$val) {
  $html_table .= '<td>' .$key. ' - '. $val. '</td>';       // adds key-value in columns in table
  $i++;

  // If the number of columns is completed for a row (rest of division of $i to $nr_col is 0)
  // Closes the current row, and begins another row
  $col_to_add = $i % $nr_col;
  if($col_to_add == 0) { $html_table .= '</tr><tr>'; }
}





    print "<table>\n";
    foreach ($population as $key => $value) {
        print "<tr><td>$key</td><td>$value</td></tr>\n";
        }

    print '</table>';



                    
    foreach($population as $key => $value) {
        echo "<p>$key Value: $value</p>";
    }
                    
         
         
         
         */           
                    
?>



    </div>
    </div>
    </body>
    

</html>