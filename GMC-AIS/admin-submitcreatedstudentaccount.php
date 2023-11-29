<?php
// Function to generate a unique ID
function generateUniqueID() {
    // Replace this with your logic to generate a unique ID
    // For example, you can use a timestamp and a random number
    return mt_rand(1000, 9999);
}

// Function to generate a user ID with a dynamic prefix based on the year
function generateUserID($uniqueID, $year) {
    return $year . "-" . $uniqueID;
}

// Rest of your code remains unchanged
include 'includes/connection.php';

// Your existing code for form data retrieval
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve form data
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $middlename = $_GET['middlename'];
    $contactnum = $_GET['user-contactnum'];
    $branch = $_GET['branch'];
    $strand = $_GET['strand'];
    $gender = $_GET['user-gender'];
    $year = $_GET['year'];
    $section = $_GET['section'];

    // Generate a unique ID
    $uniqueID = generateUniqueID();

    // Generate a user ID with a dynamic prefix based on the year
    $userID = generateUserID($uniqueID, $year);

    // Check if the generated user ID already exists
    $existingCheckQuery = "SELECT COUNT(*) as count FROM student_account WHERE Student_ID = '$userID'";
    $result = $con->query($existingCheckQuery);

    if ($result && $result->fetch_assoc()['count'] > 0) {
        // If the user ID already exists, generate a new one
        $uniqueID = generateUniqueID();
        $userID = generateUserID($uniqueID, $year);
    }

    // Perform SQL insertion with the generated user ID
    $sql = "INSERT INTO `student_account`(`Student_ID`, `Student_Fname`, `Student_Lname`, `Student_Mname`, `Student_Section`, `Student_Year`,
            `Student_Strand`, `Student_Cnumber`, `Student_Email`,`Student_Password`, `Student_Username`, `Student_ParentInfo`, `Student_Gender`)
            VALUES ('$userID', '$firstname', '$lastname', '$middlename', '$section', '$year', '$strand', '$contactnum', 'dummy@email.com', 'dummy_password', 'dummy_username', '1', '$gender')";

    if ($con->query($sql) === TRUE) {
        // Redirect to the success page after successful insertion
        header("Location: admin-dboard.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

// Close the database connection
$con->close();
?>
