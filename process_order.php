<?php
// 1. Database Configuration
$servername = "localhost";
$username   = "root";         // Your DB username
$password   = "";             // Your DB password
$dbname     = "diet_shastra"; // Your Database name

// 2. Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 3. Process the POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sanitize and get data from form
    $name    = $_POST['name'];
    $phone   = $_POST['phone'];
    $address = $_POST['address'];
    $items   = $_POST['order_details'];
    $total   = $_POST['total_price'];

    // 4. Prepare and Bind to prevent SQL Injection
// In process_order.php
$stmt = $conn->prepare("INSERT INTO orders (customer_name, phone, address, order_details, total_price) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssssd", $_POST['name'], $_POST['phone'], $_POST['address'], $_POST['order_details'], $_POST['total_price']);

    if ($stmt->execute()) {
        // Success: The JavaScript on your page will handle the WhatsApp redirect 
        // after this script confirms the data is saved.
        echo "Order successfully saved to database.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>