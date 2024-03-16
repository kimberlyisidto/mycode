<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="display_record.css" />
    <style></style>
    <title>Display Records</title>
</head>
<body>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-image: linear-gradient(to left, rgb(7, 116, 25), rgb(113, 225, 233));
}

        </style>
    <main>
        <header>
            <img src="lag.png" alt="logo">
            <a href="admin.php" class="goback-button">&#x2190;</a>
            <h2> Applicant List and Tracking</h2>
        </header>
        <div class="container">
            <div class="records box">
                <?php
                include('config.php');
                $query = "SELECT * FROM form";
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    echo "<table>";
                    echo "<tr><th>ID</th><th>Full Name</th><th>Email Address</th><th>Job Role</th><th>Phone Number</th><th>TOR File</th><th>Resume File</th><th>Action</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['full_name'] . "</td>";
                        echo "<td>" . $row['email_address'] . "</td>";
                        echo "<td>" . $row['job_role'] . "</td>";
                        echo "<td>" . $row['phone_number'] . "</td>";
                        echo "<td><a href='test.php?id=" .  $row['tor_file'] . "' onclick=\"test')\">Test</a></td>";
                        echo "<td>" . $row['resume_file'] . "</td>";
                        echo "<td><a href='delete.php?id=" . $row['id'] . "' onclick=\"return confirm('Are you sure you want to delete this record?')\">Delete</a></td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No records found";
                }
                $conn->close();
                ?>
            </div>
        </div>
    </main>
</body>
</html>
