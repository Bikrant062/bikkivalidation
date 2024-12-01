<?php
include 'i.php'; // Connect to the database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect data from the form
    $id = $_POST['bikrant_id'];
    $name = $_POST['bikrant_name'];
    $password = $_POST['bikrant_password'];
    $gender = $_POST['bikrant_gender'];
    $contact = $_POST['bikrant_contact'];
    $email = $_POST['bikrant_email'];
    $course = $_POST['bikrant_course'];

    // Prepare SQL query
    $sql = "UPDATE crud_table SET name=?, password=?, gender=?, contact=?, email=?, course=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssssi', $name, $password, $gender, $contact, $email, $course, $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Data updated successfully!";
    } else {
        echo "Error updating data or no changes made.";
    }
    $stmt->close();
} else {
    echo "Invalid request method.";
}
$conn->close(); // Close the connection
?>
