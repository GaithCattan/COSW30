{"filter":false,"title":"inc_login.php","tooltip":"/labwork/homework5/includes/inc_login.php","undoManager":{"mark":10,"position":10,"stack":[[{"start":{"row":0,"column":0},"end":{"row":30,"column":11},"action":"insert","lines":["<?php","$email = \"\";","$password = \"\";","if($_SERVER['REQUEST_METHOD'] == 'POST') {","    // Procees our form and validate it","    $email = $_POST['email'];","    $password = $_POST['password'];","    // validate","    if(empty($email)) {","      echo  \"Enter your email please\";","      echo '<br>';","    }","    if(empty($password)) {","      echo  \"Enter your password please\";","      echo '<br>';","    }","}","?>","","    <main>","        <h1>Sticky Form</h1>","","        <form action=\"login.php\" method=\"POST\">","            <label for=\"email\">Email</label>","            <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"email\" value=\"<?php echo $email ?>\">","            <br><br>","            <label for=\"password\">Password</label>","            <input type=\"password\" id=\"password\" name=\"password\" placeholder=\"\" value=\"<?php echo $password ?>\">","            <br><br>","            <input type=\"submit\" name=\"submit\" value=\"Submit\"/>","    </main>"],"id":1}],[{"start":{"row":19,"column":10},"end":{"row":20,"column":8},"action":"insert","lines":["","        "],"id":2}],[{"start":{"row":20,"column":8},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":21,"column":0},"end":{"row":21,"column":8},"action":"insert","lines":["        "]},{"start":{"row":21,"column":8},"end":{"row":22,"column":0},"action":"insert","lines":["",""]},{"start":{"row":22,"column":0},"end":{"row":22,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":21,"column":8},"end":{"row":22,"column":26},"action":"insert","lines":["        <div id=\"container\">","        <div id=\"texting\">"],"id":4}],[{"start":{"row":21,"column":12},"end":{"row":21,"column":16},"action":"remove","lines":["    "],"id":5},{"start":{"row":21,"column":8},"end":{"row":21,"column":12},"action":"remove","lines":["    "]}],[{"start":{"row":22,"column":0},"end":{"row":22,"column":26},"action":"remove","lines":["        <div id=\"texting\">"],"id":6}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":28},"action":"remove","lines":["        <div id=\"container\">"],"id":7},{"start":{"row":21,"column":0},"end":{"row":22,"column":0},"action":"remove","lines":["",""]},{"start":{"row":21,"column":0},"end":{"row":22,"column":8},"action":"remove","lines":["","        "]}],[{"start":{"row":22,"column":12},"end":{"row":22,"column":18},"action":"remove","lines":["Sticky"],"id":8},{"start":{"row":22,"column":12},"end":{"row":22,"column":13},"action":"insert","lines":["L"]},{"start":{"row":22,"column":13},"end":{"row":22,"column":14},"action":"insert","lines":["o"]},{"start":{"row":22,"column":14},"end":{"row":22,"column":15},"action":"insert","lines":["g"]},{"start":{"row":22,"column":15},"end":{"row":22,"column":16},"action":"insert","lines":["i"]},{"start":{"row":22,"column":16},"end":{"row":22,"column":17},"action":"insert","lines":["n"]}],[{"start":{"row":26,"column":69},"end":{"row":26,"column":74},"action":"remove","lines":["email"],"id":9},{"start":{"row":26,"column":69},"end":{"row":26,"column":70},"action":"insert","lines":["e"]},{"start":{"row":26,"column":70},"end":{"row":26,"column":71},"action":"insert","lines":["x"]},{"start":{"row":26,"column":71},"end":{"row":26,"column":72},"action":"insert","lines":["a"]},{"start":{"row":26,"column":72},"end":{"row":26,"column":73},"action":"insert","lines":["m"]},{"start":{"row":26,"column":73},"end":{"row":26,"column":74},"action":"insert","lines":["p"]},{"start":{"row":26,"column":74},"end":{"row":26,"column":75},"action":"insert","lines":["l"]},{"start":{"row":26,"column":75},"end":{"row":26,"column":76},"action":"insert","lines":["e"]}],[{"start":{"row":26,"column":76},"end":{"row":26,"column":77},"action":"insert","lines":["@"],"id":10}],[{"start":{"row":26,"column":77},"end":{"row":26,"column":78},"action":"insert","lines":["m"],"id":11},{"start":{"row":26,"column":78},"end":{"row":26,"column":79},"action":"insert","lines":["a"]},{"start":{"row":26,"column":79},"end":{"row":26,"column":80},"action":"insert","lines":["i"]},{"start":{"row":26,"column":80},"end":{"row":26,"column":81},"action":"insert","lines":["l"]},{"start":{"row":26,"column":81},"end":{"row":26,"column":82},"action":"insert","lines":["."]},{"start":{"row":26,"column":82},"end":{"row":26,"column":83},"action":"insert","lines":["c"]},{"start":{"row":26,"column":83},"end":{"row":26,"column":84},"action":"insert","lines":["o"]},{"start":{"row":26,"column":84},"end":{"row":26,"column":85},"action":"insert","lines":["m"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":26,"column":69},"end":{"row":26,"column":85},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1569909582988,"hash":"69a63f3ea3dbf1733faebed53f422ec25087455f"}