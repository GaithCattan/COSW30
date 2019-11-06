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
    <title>My First CRUD</title>
</head>
<body>
    <h1>Create a New User</h1>
    <form action="crud.php" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name"><br>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name"><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email"><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br>

        <button>Register</button>
    </form>




    <h2>Output a List of The Users</h2>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
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
</body>
</html>