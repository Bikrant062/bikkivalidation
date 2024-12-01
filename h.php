<?php
include 'i.php'; // Database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['bikrant_id']) ? intval($_POST['bikrant_id']) : 0;

    if ($id > 0) {
        $sql = "DELETE FROM crud_table WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Data with ID $id deleted successfully!";
        } else {
            echo "Error: No record found with ID $id.";
        }
        $stmt->close();
    } else {
        echo "Invalid ID.";
    }
}
$conn->close();
?>
