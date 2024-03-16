<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("DELETE FROM form WHERE id = ?");

    // Bind the parameter
    $stmt->bind_param("i", $id);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect back to admin.php after successful deletion
        header("Location: admin.php");
        exit();
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

$conn->close();
?>
