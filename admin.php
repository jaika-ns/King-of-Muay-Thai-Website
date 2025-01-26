<?php
// Database configuration
$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'muay_thai_visa';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start(); // Start the session

// Increment view counter
if (isset($_SESSION['views'])) {
    $_SESSION['views'] += 1;
} else {
    $_SESSION['views'] = 1; // Initialize view counter
}

// Check if view limit is reached
if ($_SESSION['views'] > 3) {
    session_unset(); // Clear session data
    session_destroy(); // Destroy the session
    header("Location: home.php?message=session_expired"); // Redirect to login with a message
    exit();
}

// Update status logic
if (isset($_POST['update_status'])) {
    $id = $_POST['id'];
    $new_status = $_POST['status'];
    $sql = "UPDATE training_form SET status = '$new_status' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        $message = "Status updated successfully!";
    } else {
        $message = "Error: " . $conn->error;
    }
}

// Delete record logic
if (isset($_POST['delete_record'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM training_form WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        $message = "Record deleted successfully!";
    } else {
        $message = "Error: " . $conn->error;
    }
}

// Fetch table data
$sql = "SELECT * FROM training_form";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Update Visa Status</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: rgb(24, 25, 46);
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .header a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            background-color: #e63946;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .header a:hover {
            background-color: #d62828;
        }
        .container {
            width: 90%;
            margin: 40px auto;
            align-items: center;
            display: flex;
            flex-direction: column;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
            width: fit-content;
        }
        th {
            background-color: rgb(24, 25, 46);
            color: white;
            text-transform: uppercase;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e9ecef;
        }
        select, button {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
        }
        select {
            width: 150px;
        }
        button {
            background-color: #ffcc00;
            color: black;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #e6b800;
        }
        .delete-button {
            background-color: #e63946;
            color: white;
        }
        .delete-button:hover {
            background-color: #d62828;
        }
        .message {
            text-align: center;
            color: green;
            margin: 10px 0;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="header">
    <img src="images/KMT_Logo.png" alt="Logo">
    <h1>Admin Panel</h1>
    <a href="logout.php">Logout</a>
</div>

<div class="container">
    <h2>Admin Panel - Update Visa Status</h2>
    <?php if (isset($message)): ?>
        <p class="message"><?= $message; ?></p>
    <?php endif; ?>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Country</th>
            <th>Preferred Start Date</th>
            <th>Package Interest</th>
            <th>Current Status</th>
            <th>Update Status</th>
            <th>Delete</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= htmlspecialchars($row['first_name']); ?></td>
                    <td><?= htmlspecialchars($row['last_name']); ?></td>
                    <td><?= htmlspecialchars($row['email']); ?></td>
                    <td><?= htmlspecialchars($row['phone_number']); ?></td>
                    <td><?= htmlspecialchars($row['country']); ?></td>
                    <td><?= $row['preferred_start_date']; ?></td>
                    <td><?= $row['package_interest']; ?></td>
                    <td><?= $row['status']; ?></td>
                    <td>
                        <form method="POST">
                            <input type="hidden" name="id" value="<?= $row['id']; ?>">
                            <select name="status">
                                <option value="Pending" <?= $row['status'] == 'Pending' ? 'selected' : ''; ?>>Pending</option>
                                <option value="Under Review" <?= $row['status'] == 'Under Review' ? 'selected' : ''; ?>>Under Review</option>
                                <option value="Approved" <?= $row['status'] == 'Approved' ? 'selected' : ''; ?>>Approved</option>
                                <option value="Rejected" <?= $row['status'] == 'Rejected' ? 'selected' : ''; ?>>Rejected</option>
                                <option value="Completed" <?= $row['status'] == 'Completed' ? 'selected' : ''; ?>>Completed</option>
                            </select>
                            <button type="submit" name="update_status">Update</button>
                        </form>
                    </td>
                    <td>
                        <form method="POST">
                            <input type="hidden" name="id" value="<?= $row['id']; ?>">
                            <button type="submit" name="delete_record" class="delete-button">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="11">No records found.</td>
            </tr>
        <?php endif; ?>
    </table>
</div>

</body>
</html>

<?php
$conn->close();
?>
