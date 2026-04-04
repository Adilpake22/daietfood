<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Menu | Diet Shastra</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>


<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("localhost", "root", "", "diet_shastra");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ensure your 'orders' table has a 'status' column (e.g., Pending, Completed, Cancelled)
$sql = "SELECT * FROM orders ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<div class="order-container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="section-title">Order History</h2>
        <span class="badge bg-soft-primary text-primary"><?php echo $result->num_rows; ?> Total Orders</span>
    </div>

    <div class="table-responsive custom-table-card">
        <table class="table table-hover align-middle mb-0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Contact Info</th>
                    <th>Order Details</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Logic for Status Badge Colors
                        $status = $row['status'] ?? 'Pending'; // Default if empty
                        $statusClass = 'status-pending';
                        if ($status == 'Completed') $statusClass = 'status-completed';
                        if ($status == 'Cancelled') $statusClass = 'status-cancelled';

                        echo "<tr>";
                        echo "<td><span class='fw-bold text-muted'>#".$row['id']."</span></td>";
                        echo "<td><div class='fw-bold'>".$row['customer_name']."</div></td>";
                        echo "<td>
                                <div class='small text-dark'>".$row['phone']."</div>
                                <div class='small text-muted text-truncate' style='max-width: 150px;'>".$row['address']."</div>
                              </td>";
                        echo "<td><span class='text-wrap' style='font-size: 0.9rem;'>".$row['order_details']."</span></td>";
                        echo "<td><span class='fw-bold text-success'>₹".$row['total_price']."</span></td>";
                        echo "<td><span class='status-badge ".$statusClass."'>".$status."</span></td>";
                        echo "<td><small class='text-muted'>".date('d M Y, h:i A', strtotime($row['created_at']))."</small></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7' class='text-center py-5 text-muted'>No orders found in the system.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<style>
/* Container styling */
.order-container {
    max-width: 1200px;
    margin: 40px auto;
    padding: 20px;
}

.section-title {
    font-weight: 700;
    color: #2d3436;
}

/* Card Table Styling */
.custom-table-card {
    background: #ffffff;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    border: 1px solid #f0f0f0;
    overflow: hidden;
}

.table thead th {
    background-color: #f8f9fa;
    border-bottom: 2px solid #eee;
    padding: 15px 20px;
    color: #636e72;
    text-transform: uppercase;
    font-size: 0.75rem;
    letter-spacing: 1px;
}

.table tbody td {
    padding: 15px 20px;
    border-bottom: 1px solid #f8f9fa;
    color: #2d3436;
}

/* Status Badges */
.status-badge {
    padding: 6px 12px;
    border-radius: 8px;
    font-size: 0.8rem;
    font-weight: 600;
    display: inline-block;
}

.status-pending { background-color: #fff4e6; color: #fd7e14; }
.status-completed { background-color: #ebfbee; color: #40c057; }
.status-cancelled { background-color: #fff5f5; color: #fa5252; }

/* General Badge */
.bg-soft-primary {
    background-color: #e7f5ff;
    padding: 8px 16px;
    border-radius: 50px;
    font-size: 0.85rem;
}
</style>



</body>
</html>
 <?php include 'footer.php'; ?>


<?php include 'footer.php'; ?>
 <tbody>
                <?php
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Logic for Status Badge Colors
                        $status = $row['status'] ?? 'Pending'; // Default if empty
                        $statusClass = 'status-pending';
                        if ($status == 'Completed') $statusClass = 'status-completed';
                        if ($status == 'Cancelled') $statusClass = 'status-cancelled';

                        echo "<tr>";
                        echo "<td><span class='fw-bold text-muted'>#".$row['id']."</span></td>";
                        echo "<td><div class='fw-bold'>".$row['customer_name']."</div></td>";
                        echo "<td>
                                <div class='small text-dark'>".$row['phone']."</div>
                                <div class='small text-muted text-truncate' style='max-width: 150px;'>".$row['address']."</div>
                              </td>";
                        echo "<td><span class='text-wrap' style='font-size: 0.9rem;'>".$row['order_details']."</span></td>";
                        echo "<td><span class='fw-bold text-success'>₹".$row['total_price']."</span></td>";
                        echo "<td><span class='status-badge ".$statusClass."'>".$status."</span></td>";
                        echo "<td><small class='text-muted'>".date('d M Y, h:i A', strtotime($row['created_at']))."</small></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7' class='text-center py-5 text-muted'>No orders found in the system.</td></tr>";
                }
                ?>
            </tbody>
