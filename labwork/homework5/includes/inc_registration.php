<?php
$first_name = "";
$last_name = "";
$email = "";
$password = "";
$confirm_password = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Procees our form and validate it
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
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
    if(empty($confirm_password)) {
      echo  "Confirm your password please";
      echo '<br>';
    }
}
    if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password']))
    {
 // validate the password with the confirm password
    if ($password == $confirm_password){
        echo '<h3>Congratulation you have registered correctly.</h3>';
    }
    else {
        echo '<h3>Password do not match. Please try again.</h3>';
    }
    }
    else {
        echo "<h3>Please Enter Your Information</h3>";
    }
?>

    <main>
        <h1>MAIN CONTENT REGISTER PAGE</h1>

        <form action="register.php" method="POST">
            <label for="first_name">First Name</label>
            <input type="first_name" id="first_name" name="first_name" placeholder="" value="<?php echo $first_name ?>">
            <br><br>
            <label for="last_name">Last Name</label>
            <input type="last_name" id="last_name" name="last_name" placeholder="" value="<?php echo $last_name ?>">
            <br><br>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="example@mail.com" value="<?php echo $email ?>">
            <br><br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="" value="<?php echo $password ?>">
            <br><br>
            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="" value="<?php echo $confirm_password ?>">
            <br><br>
            <input type="submit" name="submit" value="Submit"/>
    </main>