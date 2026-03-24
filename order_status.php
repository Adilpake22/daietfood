<?php
$conn = new mysqli("localhost", "root", "", "your_database");

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM orders WHERE id=$id");
$order = $result->fetch_assoc();
?>

<h2>Order Status</h2>

<p><strong>Status:</strong> <?php echo $order['status']; ?></p>

<?php if($order['status'] == 'Accepted') { ?>
    <p><strong>Delivery Date:</strong> <?php echo $order['delivery_date']; ?></p>
    <p><strong>Delivery Boy:</strong> <?php echo $order['delivery_boy']; ?></p>
    <p><strong>Contact:</strong> <?php echo $order['delivery_number']; ?></p>
<?php } ?>

<?php if($order['status'] == 'Rejected') { ?>
    <p style="color:red;">Sorry, item is Out of Stock.</p>
<?php } ?>

<?php if($order['status'] == 'Pending') { ?>
    <p>Please wait for admin confirmation.</p>
<?php } ?>