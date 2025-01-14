<?php
$conn = new mysqli('localhost', 'glen', 'Morolong1993', 'carwash_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>