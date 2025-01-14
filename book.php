<?php
include 'scripts/db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customer_name = $conn->real_escape_string($_POST['customer_name']);
    $service_id = (int)$_POST['service_id'];
    $date_time = $conn->real_escape_string($_POST['date_time']);

    $sql = "INSERT INTO bookings (customer_name, service_id, date_time) VALUES ('$customer_name', $service_id, '$date_time')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Booking successful!'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Error: ' . $conn->error);</script>";
    }
}
?>

<form method="POST">
    <label for="customer_name">Name:</label>
    <input type="text" name="customer_name" required>
    <label for="service_id">Service ID:</label>
    <input type="number" name="service_id" required>
    <label for="date_time">Date and Time:</label>
    <input type="datetime-local" name="date_time" required>
    <button type="submit">Book</button>
</form>

