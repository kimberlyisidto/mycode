<?php
include 'job_operations.php'; // Include your job operations file

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["operation"]) && $_POST["operation"] == "delete") {
    // Get form data
    $id = $_POST["delete_id"];

    // Call the function to delete a job vacancy
    $result = deleteJobVacancy($id);

    // Handle the result
    if ($result === true) {
        echo "Job deleted successfully!";
    } else {
        echo "Error: " . $result;
    }
}
?>
