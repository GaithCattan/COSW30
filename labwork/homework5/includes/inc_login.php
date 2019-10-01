<?php
$email = "";
$password = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Procees our form and validate it
    $email = $_POST['email'];
    $password = $_POST['password'];
    // validate
    if(empty($email)) {
      echo  "Enter your email please";
      echo '<br>';
    }
    if(empty($password)) {
      echo  "Enter your password please";
      echo '<br>';
    }
}
?>

    <main>
        

        <h1>Login Form</h1>

        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="example@mail.com" value="<?php echo $email ?>">
            <br><br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="" value="<?php echo $password ?>">
            <br><br>
            <input type="submit" name="submit" value="Submit"/>
    </main>