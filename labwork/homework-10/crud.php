<?php
// Add the database connection
include('database.php');
/*
*   CHECK IF THE FORM HAS BEEN SUBMITTED AND INSERT
*   NEW USER INTO THE DATABASE
*/

/*

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];

    $insert_query = "INSERT INTO USER_CATTAN (first_name, last_name, email, password)
                    VALUES ('$first_name', '$last_name', '$email', '$password')";
    $result = mysqli_query($connection, $insert_query);

    if($result) {
        echo 'New user added to the database';
    } else {
        echo 'Error entery';
    }

}

*/

//////////////////////////////

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Procees our form and validate it
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // validate
    if(empty($first_name)) {
      echo  "Enter your first name please";
      echo '<br>';
    }
    if(empty($last_name)) {
      echo  "Enter your last name please";
      echo '<br>';
    }
    if(empty($email)) {
      echo  "Enter your email please";
      echo '<br>';
    }
    if(empty($password)) {
      echo  "Enter your password please";
      echo '<br>';
    }
}

    if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        $insert_query = "INSERT INTO USER_CATTAN (first_name, last_name, email, password)
                    VALUES ('$first_name', '$last_name', '$email', '$password')";
        $result = mysqli_query($connection, $insert_query);

        if($result) {
            echo 'New user added to the database';
        }
         else {
            echo 'Error entery';
        }
    }





//////////////////////////////



/*
*   QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE
*/

// Create your query
$query = 'SELECT * FROM USER_CATTAN';


// Run your query
$result = mysqli_query($connection, $query);


// Check if the database returned anything
if($result) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //print_r($rows);
    // Output the results

} else {
    // Output an error
    echo 'this is not working';
}
?>


<!doctype html>
<html>
<head>
        <meta charset="utf-8">
        <title>My First CRUD</title>
        <style>
          body {background-color: blue;
                background-position: center;
                background-repeat: no-repeat;}
          h1 {text-align: center; font-size: 30px; margin-top: 40px;
              border-radius: 25px; margin-left: 20%; margin-right: 20%;
              background-color: grey;}
          #container {width: 900px;	margin-left: auto;	margin-right: auto;	padding-top: 50px;	padding-bottom: 150px; border-radius: 25px;	background-color: #00EBCC; text-align:center;}
          #texting {width: 500px; display: block; margin-left: auto; margin-right: auto; text-align: center;}
          input[type=submit] {background-color: grey; border: none; border-radius: 10px;  color: white;  padding: 16px 32px;  text-decoration: none;  margin: 4px 2px;  cursor: pointer;}
          table, th, td {border: 1px solid black; text-align: center;}
          footer {font-size: 1.5em; color: white; text-align: center; margin-top: 11%;}
        </style>
</head>



<body>

    <div id="container">

    <h1>Create a New User</h1>



    <form action="crud.php" method="POST">
        <label for="first_name"><b>First Name: &nbsp&nbsp&nbsp</b></label>
        <input type="text" id="first_name" name="first_name" placeholder="" value="<?php echo $first_name ?>"><br><br>

        <label for="last_name"><b>Last Name: &nbsp&nbsp&nbsp</b></label>
        <input type="text" id="last_name" name="last_name" placeholder="" value="<?php echo $last_name ?>"><br><br>

        <label for="email"><b>Email: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
        <input type="email" id="email" name="email" placeholder="example@mail.com" value="<?php echo $email ?>"><br><br>

        <label for="password"><b>Password: &nbsp&nbsp&nbsp&nbsp</b></label>
        <input type="password" id="password" name="password"><br><br>

        <input type="submit" name="submit" value="Submit"/>
    </form>


    <div id="texting">

    <h2>Users List</h2>
    <table>
        <thead>
            <tr>
                <th bgcolor="grey">First Name</th>
                <th bgcolor="grey">Last Name</th>
                <th bgcolor="grey">Email</th>
                <th bgcolor="grey">Password</th>
            </tr>
        </thead>
        <tbody>

        <?php
        foreach($rows as $row) {
        echo '<tr>
                <td>'.$row['first_name'].'</td>
                <td>'.$row['last_name'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['password'].'</td>
            </tr>';
        }
        ?>

        </tbody>
    </table>


    </div>
    </div>
    </body>

    <footer>
        <p>&copy; 2019 by Gaith Cattan</p>
    </footer>

</html>