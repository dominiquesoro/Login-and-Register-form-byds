<?php 

    // définit les variables et définit des valeurs vides
    // define variables and set to empty values;
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
/*

<?php
require('db.php');
// When form submitted, insert values into the database.
if (isset($_REQUEST['username'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con, $username);
    
    $email    = stripslashes($_REQUEST['email']);
    $email    = mysqli_real_escape_string($con, $email);

    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);

    $query    = "INSERT into `users` (username, password, email)
                    VALUES ('$username', '" . md5($password) . "', '$email')";
    $result   = mysqli_query($con, $query);
    if ($result) {
        echo "<div class='form'>
                <h3>You are registered successfully.</h3><br/>
                <p class='link'>Click here to <a href='login.php'>Login</a></p>
                </div>";
    } else {
        echo "<div class='form'>
                <h3>Required fields are missing.</h3><br/>
                <p class='link'>Click here to <a href='register.php'>registration</a> again.</p>
                </div>";
        }
    } else {
?>


*/




$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

?>