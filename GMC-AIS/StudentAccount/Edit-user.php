<?php
// Include your database connection code or any necessary configuration
include '../includes/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you are passing the student ID via POST
    $Student_ID = $_POST['Student_ID'];

    // Perform your database select operation to fetch user data
    // Example: Select from users table where Student_ID matches
    $query = "SELECT * FROM student_account WHERE Student_ID = $Student_ID";

    // Execute the query
    $result = $con->query($query);

    if ($result->num_rows > 0) {
        // Fetch user data
        $userData = $result->fetch_assoc();

        // You can process and return the user data as needed
        echo json_encode(['success' => true, 'data' => $userData]);
    } else {
        echo json_encode(['success' => false, 'message' => 'User not found']);
    }

    // Close the database connection
    $con->close();
} else {
    // Handle invalid request method
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>
