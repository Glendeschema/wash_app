<?php
include 'scripts/db_config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carwash Management System</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header>
        <h1>Carwash Management System</h1>
    </header>
    
    <div class="container">
        <h2>Available Services</h2>
        <table>
            <thead>
                <tr>
                    <th>Service Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM services";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['service_name']}</td>
                                <td>{$row['description']}</td>
                                <td>\${$row['price']}</td>
                                <td><a href='book.php?service_id={$row['id']}' class='btn'>Book Now</a></td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No services available</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>