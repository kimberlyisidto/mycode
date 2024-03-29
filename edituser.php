<?php
include 'job_operations.php'; // Include your job operations file

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["operation"]) && $_POST["operation"] == "edit") {
    // Get form data
    $id = $_POST["edit_id"];
    $position = $_POST["edit_position"];
    $description = $_POST["edit_description"];

    // Call the function to edit a job vacancy
    $result = editJobVacancy($id, $position, $description);

    // Handle the result
    if ($result === true) {
        echo "Job edited successfully!";
    } else {
        echo "Error: " . $result;
    }
}
?>
