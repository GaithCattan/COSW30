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


$delete_query = "DELETE FROM Customers WHERE user_id='$id'";


$delete_result = mysqli_query($connection, $update_query);

if($update_result) {
    header('Location: crud.php');
} else {
    echo 'No delete happen';
}