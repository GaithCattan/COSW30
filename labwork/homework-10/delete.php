<?php

include('database.php');

$id = $_GET['id'];

$delete_query = "DELETE FROM USER_CATTAN WHERE user_id= '$id' ";


$delete_result = mysqli_query($connection, $delete_query);

if($delete_result) {
    header('Location: crud.php');
} else {
    echo 'No delete happen';
}