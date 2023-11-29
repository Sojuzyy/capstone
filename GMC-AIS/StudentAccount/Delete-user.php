<?php
// Include your database connection code or any necessary configuration
include '../includes/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you are passing the student ID via POST
    $Student_ID = $_POST['Student_ID'];

    // Perform your database delete operation
    // Example: Delete from users table where Student_ID matches
    $query = "DELETE FROM student_account WHERE Student_ID = $Student_ID";

    // Execute the query
    if ($con->query($query) === TRUE) {
        echo json_encode(['success' => true, 'message' => 'User deleted successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error deleting user: ' . $con->error]);
    }

    // Close the database connection
    $con->close();
} else {
    // Handle invalid request method
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>
