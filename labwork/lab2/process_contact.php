<?php


/////////////////// check if the required fields are empty

    if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['gender']) && !empty($_POST['age_range']))
    {

    echo '<h2>Congratulations! You’ve successfully registered.</h2>';


/////////////////// assign values to the variables

       $full_name = $_POST['full_name'];
       $email = $_POST['email'];
       $gender = $_POST['gender'];
       $age_range = $_POST['age_range'];
       $contribution_amount = $_POST['contribution_amount'];
       $comment = $_POST["comment"];
       $mailing_list = $_POST['mailing_list'];
       $interests = $_POST['interests'];

/////////////////// print the input

    echo "<h2>Your Input:</h2>";
    echo "Full Name: <b>$full_name</b>";
    echo "<br><br>";
    echo "Email: <b>$email</b>";
    echo "<br><br>";
    echo "Gender: <b>$gender</b>";
    echo "<br><br>";
    echo "Age: <b>$age_range</b>";
    echo "<br><br>";
    echo "Contribution: <b>$ $contribution_amount</b>";
    echo "<br><br>";

/////////////////// print mailing list check box

    if(isset($_POST['mailing_list']) &&
       $_POST['mailing_list'] == 'on')
    { echo "Mailing List: <b>Yes.</b>";
        }
    else {
      echo "Mailing List: <b>No.</b>";
        }   
    echo "<br><br>";

/// print the checkbox interests

    if(empty($interests))
        { echo("<b>You didn't select any interests.</b>"); }
    else
        { $N = count($interests);
        echo("You have selected <b>$N</b> interest(s): ");
        echo "<br>";
            for($i=0; $i < $N; $i++)
            { echo("$i" + 1 . "-");
              echo($interests[$i] . " ");
              echo "<br>";}
        }

    echo "<br><br>";

///////////////////

    echo "Comment: $comment";
    echo "<br><br>";

/////////////////// incomplete form message

    }
    else {
        echo '<h2>Incomplete form. Please try again.</h2>';

    }


?>




