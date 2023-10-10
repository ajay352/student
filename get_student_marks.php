<?php
// Database connection code here

if (isset($_GET['student_id'])) {
    $studentId = $_GET['student_id'];
    
    // Fetch student marks from the database
    // Perform the SQL SELECT operation here

    // Assuming you have fetched the data into an associative array $marks
    $marks = [
        "Tamil" => 80,
        "English" => 90,
        "Math" => 75,
        // Add more subjects and marks as needed
    ];

    // Send the marks data as JSON response
    echo json_encode($marks);
} else {
    echo "Invalid request.";
}
?>
