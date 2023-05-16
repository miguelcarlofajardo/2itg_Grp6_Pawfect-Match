<?php
session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'pwlogin';

// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (!isset($_POST['username'], $_POST['email'], $_POST['password'])) {
    // Could not get the data that should have been sent.
    exit('Please fill all the required fields!');
}

// Trim whitespace from the inputs
$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password = $_POST['password'];

// Check if any of the required fields are empty
if (empty($username) || empty($email) || empty($password)) {
    exit('Please fill all the required fields!');
}

// Prepare our SQL statement to check if the username already exists.
if ($stmt = $con->prepare('SELECT id FROM accounts WHERE username = ?')) {
    // Bind parameters (s = string), in our case the username is a string so we use "s".
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        // Username already exists.
        echo 'Username already exists, please choose a different one.';
    } else {
        // Username is available, proceed with creating the new account.
        // Prepare an SQL statement to insert the new account into the database.
        if ($stmt = $con->prepare('INSERT INTO accounts (username, email, password) VALUES (?, ?, ?)')) {
            // Hash the password before storing it in the database.
            $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            // Bind parameters (s = string).
            $stmt->bind_param('sss', $_POST['username'], $_POST['email'], $hashed_password);
            $stmt->execute();
            // Display alert message
            echo '<script>alert("Sign Up successful!");</script>';

            // Redirect to login page
            echo '<script>window.location.href = "../profile/logindex.php";</script>';
            exit;
        } else {
            // Something went wrong with the database insert.
            echo 'Could not prepare statement!';
        }
    }
    $stmt->close();
}
?>
