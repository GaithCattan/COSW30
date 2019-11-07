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

    // If they aren't empty, create and run your query
    $update_query = "";

    // Check if the database returned anything
        // If the UPDATE query was successful, redirect to
        // the crud.php page
        // Else, output an error message
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
    // Output an error message
}
?>

<!doctype html>
<html>
<head>
    <title>My First CRUD</title>
</head>
<body>
    <h1>Update User</h1>
    <form action="update.php?" method="POST">
        <label for="first_name"><b>First Name: &nbsp&nbsp&nbsp</b></label>
        <input type="text" id="first_name" name="first_name" value="<?php echo $first_name ?>"><br><br>

        <label for="last_name"><b>Last Name: &nbsp&nbsp&nbsp</b></label>
        <input type="text" id="last_name" name="last_name" value="<?php echo $last_name ?>"><br><br>

        <label for="email"><b>Email: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
        <input type="email" id="email" name="email" placeholder="example@mail.com" value="<?php echo $email ?>"><br><br>

        <label for="password"><b>Password: &nbsp&nbsp&nbsp&nbsp</b></label>
        <input type="password" id="password" name="password"><br><br>

        <button>Update User</button>
    </form>
</body>
</html>