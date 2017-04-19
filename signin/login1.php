<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$email = $conn->escape_string($_POST['email']);
$result = $conn->query("SELECT * FROM logindetails WHERE email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: signin/error.php");
}
else { // User exists
    $user = $result->fetch_assoc();

    if ( md5($_POST['password']) == $user['password']) {

        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['fname'];
        $_SESSION['last_name'] = $user['lname'];
        $_SESSION['active'] = $user['active'];

        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: signin/profile1.php");
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: signin/error.php");
    }
}
