<?php
include 'i.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $id = $_POST['bikrant_id']; // Ensure this is either auto-incremented or provided properly
    $name = $_POST['bikrant_name'];
    $password = $_POST['bikrant_password'];
    $gender = $_POST['bikrant_gender'];
    $contact = $_POST['bikrant_contact'];
    $email = $_POST['bikrant_email'];
    $course = $_POST['bikrant_course'];

    // Check if the ID is auto-incremented; if so, don't use it in the query
    if (empty($id)) {
        // If the 'id' column is auto-incremented, exclude it from the INSERT statement
        $sql = "INSERT INTO crud_table (name, password, gender, contact, email, course) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssssss', $name, $password, $gender, $contact, $email, $course);
    } else {
        // If 'id' needs to be provided, use it in the INSERT statement
        $sql = "INSERT INTO crud_table (id, name, password, gender, contact, email, course) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('issssss', $id, $name, $password, $gender, $contact, $email, $course);
    }

    // Execute the query
    if ($stmt->execute()) {
        echo "Data inserted successfully!";
    } else {
        echo "Error inserting data: " . $stmt->error;
    }
}
?>
