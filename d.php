<?php
include 'i.php'; // Include the database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['bikrant_name']) ? trim($_POST['bikrant_name']) : '';
    $password = isset($_POST['bikrant_password']) ? trim($_POST['bikrant_password']) : '';
    $confirmPassword = isset($_POST['bikrant_confirm_password']) ? trim($_POST['bikrant_confirm_password']) : '';
    $gender = isset($_POST['bikrant_gender']) ? $_POST['bikrant_gender'] : '';
    $contact = isset($_POST['bikrant_contact']) ? trim($_POST['bikrant_contact']) : '';
    $email = isset($_POST['bikrant_email']) ? trim($_POST['bikrant_email']) : '';
    $course = isset($_POST['bikrant_course']) ? $_POST['bikrant_course'] : '';

    // Basic validation
    $errors = [];

    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($password)) {
        $errors[] = "Password is required.";
    }
    if ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match.";
    }
    if (empty($gender)) {
        $errors[] = "Gender is required.";
    }
    if (empty($contact) || !preg_match('/^[0-9]{10}$/', $contact)) {
        $errors[] = "Valid contact number is required.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required.";
    }
    if (empty($course)) {
        $errors[] = "Course is required.";
    }

    // Display errors if validation fails
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
        exit; // Stop further execution
    }

    // Validation passed
    echo "<p style='color: green;'>Validation passed. You can now proceed to insert or update data.</p>";

    // Check the button pressed
    if (isset($_POST['insert'])) {
        // Insert data into the database
        $sql = "INSERT INTO crud_table (name, password, gender, contact, email, course) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssssss', $name, $password, $gender, $contact, $email, $course);

        if ($stmt->execute()) {
            echo "<p style='color: green;'>Data inserted successfully!</p>";
        } else {
            echo "<p style='color: red;'>Error inserting data: " . $stmt->error . "</p>";
        }
    }
}
?>
