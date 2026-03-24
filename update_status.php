<?php
$conn = new mysqli("localhost", "root", "", "your_database");

$id = $_GET['id'];
$status = $_GET['status'];

if($status == "Accepted") {
    $conn->query("UPDATE orders SET status='Accepted',
    delivery_date='Tomorrow',
    delivery_boy='Rahul',
    delivery_number='9876543210'
    WHERE id=$id");
}
else {
    $conn->query("UPDATE orders SET status='Rejected' WHERE id=$id");
}

header("Location: admin.php");
?>