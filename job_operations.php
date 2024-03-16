<?php
// Function to establish database connection
function connectToDatabase() {
    // Database connection information
    $hostname = "localhost";
    $username = "root"; // Replace with your actual database username
    $password = ""; // Replace with your actual database password
    $dbname = "vacancies"; // Use the correct database name

    // Create a new database connection
    $conn = new mysqli($hostname, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

// Function to add a new job vacancy
function addJobVacancy($position, $description, $photo) {
    // Connect to the database
    $conn = connectToDatabase();

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO job_vacancies (position, description, photo) VALUES (?, ?, ?)");

    // Bind the parameters
    $stmt->bind_param("sss", $position, $description, $photo);

    // Execute the statement
    if ($stmt->execute()) {
        $response = true;
    } else {
        $response = false;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    return $response;
}

// Function to delete a job vacancy
function deleteJobVacancy($position) {
    // Connect to the database
    $conn = connectToDatabase();

    // Prepare the SQL statement
    $stmt = $conn->prepare("DELETE FROM job_vacancies WHERE position = ?");

    // Bind the parameters
    $stmt->bind_param("s", $position);

    // Execute the statement
    if ($stmt->execute()) {
        $response = true;
    } else {
        $response = false;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    return $response;
}

// Function to edit a job vacancy
function editJobVacancy($position, $description) {
    // Connect to the database
    $conn = connectToDatabase();

    // Prepare the SQL statement
    $stmt = $conn->prepare("UPDATE job_vacancies SET description = ? WHERE position = ?");

    // Bind the parameters
    $stmt->bind_param("ss", $description, $position);

    // Execute the statement
    if ($stmt->execute()) {
        $response = true;
    } else {
        $response = false;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    return $response;
}

// Function to fetch job vacancies from the database
function getJobVacancies() {
    // Connect to the database
    $conn = connectToDatabase();

    // Prepare and execute SQL query to fetch job vacancies
    $sql = "SELECT * FROM job_vacancies";
    $result = $conn->query($sql);

    // Check if there are any results
    if ($result->num_rows > 0) {
        // Fetch all rows and store them in an array
        $jobVacancies = [];
        while ($row = $result->fetch_assoc()) {
            $jobVacancies[] = $row;
        }
        // Close the database connection
        $conn->close();
        // Return the array of job vacancies
        return $jobVacancies;
    } else {
        // If no results found, return an empty array
        return [];
    }
}
?>
