<?php
// Include the PHP file with database connection and job operations
include 'job_operations.php';

// Check if the search term is set in the POST request
if(isset($_POST['search_term'])) {
    // Fetch search query from POST request
    $searchQuery = $_POST['search_term'];

    // Perform search for job vacancies
    $searchResults = searchJobVacancies($searchQuery);

    // Filter search results based on specific job positions
    $filteredResults = filterJobPositions($searchResults, array(
        "crim faculty",
        "nursing faculty",
        "Iclean staff",
        "medical technician",
        "security guard",
        "IT faculty",
        "CE instructor",
        "registar",
        "accountant faculty"
    ));

    // Output filtered search results as JSON
    echo json_encode($filteredResults);
} else {
    // If search term is not set, return an error message
    echo json_encode(array("error" => "Search term is not set"));
}

// Function to search for job vacancies
function searchJobVacancies($query) {
    global $conn;

    // Prepare SQL statement to search for jobs
    $sql = "SELECT * FROM job_vacancies WHERE position LIKE ?";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $searchQuery = "%$query%";
    $stmt->bind_param("s", $searchQuery);

    // Execute SQL statement
    $stmt->execute();

    // Get result
    $result = $stmt->get_result();

    // Check if there are any results
    if ($result->num_rows > 0) {
        // Fetch and return search results
        $jobs = $result->fetch_all(MYSQLI_ASSOC);
        return $jobs;
    } else {
        // If no results found, return empty array
        return [];
    }
}

// Function to filter search results based on specific job positions
function filterJobPositions($jobs, $positions) {
    $filteredResults = array();

    // Iterate through each job result
    foreach ($jobs as $job) {
        // Check if the job position is in the specified positions array
        if (in_array(strtolower($job['position']), $positions)) {
            $filteredResults[] = $job;
        }
    }

    return $filteredResults;
}
?>
