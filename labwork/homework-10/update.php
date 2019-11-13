<?php
// Add the database connection
include('database.php');
/*
*   CHECK IF THE URL HAS A $_GET VARIABLE CALLED ID
*/
// homework/update.php?id=3
if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    // redirect to crud.php
    header('Location: crud.php');
    exit;
}


/*
*   AFTER SUBMITTING THE UPDATE FORM, UPDATE THE INFO
*   IN THE DATABASE
*/
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];

    // Validate the inputs (check if they're empty)
    if(empty($first_name)) {
      echo  "Enter new first name please";
      echo '<br>';
    }
    if(empty($last_name)) {
      echo  "Enter new last name please";
      echo '<br>';
    }
    if(empty($email)) {
      echo  "Enter new email please";
      echo '<br>';
    }
    if(empty($password)) {
      echo  "Enter new password please";
      echo '<br>';
    }



/*    $errors = [];
//    if(failed condition) {
//        $error[] = 'Error message';
//    }
    if(empty($error)) {}
*/

if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password']))
    {


    // If they aren't empty, create and run your query
    $update_query = "UPDATE USER_CATTAN
                     SET first_name = '$first_name',
                         last_name = '$last_name',
                         email = '$email',
                         password = '$password'
                     WHERE user_id = $id";

    // Check if the database returned anything
    $update_result = mysqli_query($connection, $update_query);
        // If the UPDATE query was successful, redirect to
        // the crud.php page
        // Else, output an error message
    if($update_result) {
        header('Location: crud.php');
    } else {
    echo 'No update happen';
}

    }
}
/*
*   QUERY THE DATABASE FOR THE USER THAT HAS THE GET ID
*/
// Create your query
$query = "SELECT * FROM USER_CATTAN WHERE user_id = $id";

// Run your query
$result = mysqli_query($connection, $query);
// Check if the database returned anything
if($result) {
    // If the database query was successful, store
    // the users information into a variable
    $user = mysqli_fetch_assoc($result);
    $first_name = $user['first_name'];
    $last_name  = $user['last_name'];
    $email      = $user['email'];
    $password   = $user['password'];
} else {
    echo 'This id does not exist';
}
?>

<!doctype html>
<html>
<head>
        <meta charset="utf-8">
        <title>My Update Page</title>
        <style>
          body {background-color: blue;
                background-position: center;
                background-repeat: no-repeat;}
          h1 {text-align: center; font-size: 30px; margin-top: 40px;
              border-radius: 25px; margin-left: 20%; margin-right: 20%;
              background-color: grey;}
          #container {width: 900px;	margin-left: auto;	margin-right: auto;	padding-top: 50px;	padding-bottom: 150px; border-radius: 25px;	background-color: #00EBCC;}
          #texting {width: 500px; display: block; margin-left: auto; margin-right: auto; text-align: center;}
          input[type=submit] {background-color: grey; border: none; border-radius: 10px;  color: white;  padding: 16px 32px;  text-decoration: none;  margin: 4px 2px;  cursor: pointer;}
          table, th, td {border: 1px solid black; text-align: center; margin-left: 10%;}
          footer {font-size: 1.5em; color: white; text-align: center; margin-top: 11%;}
        </style>
</head>

<body>

    <div id="container">

    <h1>Update User</h1>

    <div id="texting">


    <form action="update.php?id=<?php echo $id ?>" method="POST">
        <label for="first_name"><b>First Name: &nbsp&nbsp&nbsp</b></label>
        <input type="text" id="first_name" name="first_name" value="<?php echo $first_name ?>"><br><br>

        <label for="last_name"><b>Last Name: &nbsp&nbsp&nbsp</b></label>
        <input type="text" id="last_name" name="last_name" value="<?php echo $last_name ?>"><br><br>

        <label for="email"><b>Email: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
        <input type="email" id="email" name="email" placeholder="example@mail.com" value="<?php echo $email ?>"><br><br>

        <label for="password"><b>Password: &nbsp&nbsp&nbsp&nbsp</b></label>
        <input type="text" id="password" name="password" value="<?php echo $password ?>"><br><br>

       <!-- <input type="hidden" name="user_id" value="<?php echo $id ?>">   -->

        <button>Update Information And Go To The Main Page</button>
    </form>

    </div>
    </div>
    </body>

    <footer>
        <p>&copy; 2019 by Gaith Cattan</p>
    </footer>

</html>
