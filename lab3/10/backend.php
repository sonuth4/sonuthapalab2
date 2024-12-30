<?php
// Simulate user data for validation
$valid_userid = "admin";
$valid_password = "12345";

// Check if POST data is set
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userid = $_POST['userid'];
    $password = $_POST['password'];

    // Validate credentials
    if ($userid === $valid_userid && $password === $valid_password) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
