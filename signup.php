<?php
require_once 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    try {
        // Check if email already exists
        $check_stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $check_stmt->bind_param("s", $email);
        $check_stmt->execute();
        $result = $check_stmt->get_result();

        if ($result->num_rows > 0) {
            echo json_encode(['status' => 'error', 'message' => 'Email already exists']);
            exit;
        }

        // Insert the user (without password yet)
        $role = 'user';
        $stmt = $conn->prepare("INSERT INTO users (email, role) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $role);

        if ($stmt->execute()) {
            echo json_encode(['status' => 'success', 'message' => 'Sign-up successful']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error creating account']);
        }
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
    }
}
?>
