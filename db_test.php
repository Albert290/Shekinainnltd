<?php
include 'components/connect.php';

try {
    // Test connection
    $query = $conn->query("SELECT 1");
    echo "Database connection is successful.";
} catch (PDOException $e) {
    // Catch and display errors
    echo "Database connection failed: " . $e->getMessage();
}
?>
