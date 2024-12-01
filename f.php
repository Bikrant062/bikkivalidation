<?php
include 'i.php'; // Include database connection

// Fetch data from the database
$sql = "SELECT id, name, password, gender, contact, email, course FROM crud_table";
$result = $conn->query($sql);

// Check if records exist
if ($result->num_rows > 0) {
    echo "<h2>View Data</h2>";
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Password</th>
            <th>Gender</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Course</th>
          </tr>";
    
    // Output data for each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['password']}</td>
                <td>{$row['gender']}</td>
                <td>{$row['contact']}</td>
                <td>{$row['email']}</td>
                <td>{$row['course']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<h2>No records found!</h2>";
}

// Close the connection
$conn->close();
?>
