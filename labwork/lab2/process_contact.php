<?php


/////////////////// check if the required fields are empty

    if(!empty($_POST['full_name']) && !empty($_POST['email']))
    {

    echo '<h2>Congratulation you have registered correctly.</h2>';


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
    echo "Full Name: $full_name";
    echo "<br>";
    echo "Email: $email";
    echo "<br>";
    echo "Gender: $gender";
    echo "<br>";
    echo "Age: $age_range";
    echo "<br>";
    echo "contribution: $contribution_amount";
    echo "<br>";

/////////////////// print mailing list check box

    if(isset($_POST['$mailing_list']))
    { echo "Mailing List: Yes.";
        }
    else {
      echo "Mailing List: No.";
        }   
    echo "<br>";


/// print the checkbox interests

    if(empty($interests))
        { echo("You didn't select any interests."); }
    else
        { $N = count($interests);
        echo("You selected $N interest(s): ");
            for($i=0; $i < $N; $i++)
            { echo($interests[$i] . " "); }
        }

    echo "<br>";

///////////////////

    echo "Comment: $comment";
    echo "<br>";

/////////////////// incomplete form message

    }
    else {
        echo '<h2>Incomplete form. Please try again.</h2>';

    }


?>




