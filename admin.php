<?php
$conn = new mysqli("localhost", "root", "", "your_database");
$result = $conn->query("SELECT * FROM orders ORDER BY id DESC");
?>

<h2>Admin Orders</h2>

<?php while($row = $result->fetch_assoc()) { ?>
<div style="border:1px solid #ccc; padding:15px; margin-bottom:10px;">
    <strong>Order ID:</strong> <?php echo $row['id']; ?><br>
    <strong>Name:</strong> <?php echo $row['name']; ?><br>
    <strong>Total:</strong> ₹<?php echo $row['total_price']; ?><br>
    <strong>Status:</strong> <?php echo $row['status']; ?><br><br>

    <?php if($row['status'] == 'Pending') { ?>
        <a href="update_status.php?id=<?php echo $row['id']; ?>&status=Accepted">Accept</a> |
        <a href="update_status.php?id=<?php echo $row['id']; ?>&status=Rejected">Reject</a>
    <?php } ?>
</div>
<?php } ?>