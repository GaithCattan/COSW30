<?php



// validate if the fields are empty
    if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['gender']) && !empty($_POST['age_range']))
    {

        echo '<h2>Congratulation you have registered correctly.</h2>';

       $full_name = $_POST['full_name'];
       $email = $_POST['email'];
       $gender = $_POST['gender'];
       $age_range = $_POST['age_range'];
       $age_rangecontribution_amount = $_POST['contribution_amount'];
       $comment = $_POST["comment"];
       $mailing_list = $_POST['mailing_list'];



    }
    else {
        echo '<h2>Incomplete form. Please try again.</h2>';
    }


?>