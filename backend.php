<?php
session_start();

// Database connection (Replace with your credentials)
$host = 'localhost';
$user = 'root';
$password = ''; // Replace with your DB password
$dbname = 'your_database';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Login Handler
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'login') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password, role FROM users WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->bind_result($id, $storedPassword, $role);

    if ($stmt->fetch() && $password === $storedPassword) {
        $_SESSION['user_id'] = $id;
        $_SESSION['role'] = $role;
        echo json_encode(['status' => 'success', 'role' => $role]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid credentials']);
    }

    $stmt->close();
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'signup') {
    $email = $_POST['email'];
    $role = $_POST['role'] ?? 'user'; // Default role is 'user'

    $stmt = $conn->prepare("INSERT INTO users (email, role) VALUES (?, ?)");
    $stmt->bind_param('ss', $email, $role);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error creating account']);
    }

    $stmt->close();
    exit;
}

// Logout Handler
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'logout') {
    session_destroy();
    echo json_encode(['status' => 'success']);
    exit;
}

// Create Password Handler
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'create_password') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
    $stmt->bind_param('ss', $password, $email);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error updating password']);
    }

    $stmt->close();
    exit;
}

// Admin Check Handler
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
    echo json_encode(['status' => 'success', 'message' => 'Admin privileges granted']);
} else if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_SESSION['role']) && $_SESSION['role'] === 'user') {
    echo json_encode(['status' => 'success', 'message' => 'User privileges granted']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'No privileges']);
}

$conn->close();
?>
