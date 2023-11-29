<?php
include 'includes/connection.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $Student_ID = $_POST['Student_ID'];
    $password = $_POST['password'];

    // Call the login function
    $user = login($Student_ID, $password);

    if ($user) {
        // Authentication successful, redirect to the dashboard or another page
        header("Location: student-dboard.php");
        exit();
    } else {
        // Authentication failed, redirect to the login page with an error message
        header("Location: login.php?error=1");
        exit();
    }
}
?>
