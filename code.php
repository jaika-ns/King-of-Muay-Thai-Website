<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$db_server = "localhost"; 
$db_user = "root";         
$db_pass = "";            
$db_name = "muay_thai_visa";

$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = isset($_POST['first_name']) ? htmlspecialchars(trim($_POST['first_name'])) : '';
    $last_name = isset($_POST['last_name']) ? htmlspecialchars(trim($_POST['last_name'])) : '';
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $phone_number = isset($_POST['phone_number']) ? htmlspecialchars(trim($_POST['phone_number'])) : '';
    $country = isset($_POST['countr']) ? htmlspecialchars(trim($_POST['countr'])) : '';
    $preferred_start_date = isset($_POST['date']) ? htmlspecialchars(trim($_POST['date'])) : '';
    $package_interest = isset($_POST['package_interest']) ? htmlspecialchars(trim($_POST['package_interest'])) : '';

    // Check all fields
    if (!$first_name || !$last_name || !$email || !$phone_number || !$country || !$preferred_start_date || !$package_interest) {
        die("Please fill out all required fields.");
    }

    // Prepare SQL
    $stmt = $conn->prepare("INSERT INTO training_form (first_name, last_name, email, phone_number, country, preferred_start_date, package_interest) 
                            VALUES (?, ?, ?, ?, ?, ?, ?)");

    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("sssssss", $first_name, $last_name, $email, $phone_number, $country, $preferred_start_date, $package_interest);

    if ($stmt->execute()) {
        echo "Form submitted successfully!";
    } else {
        echo "Error executing query: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
