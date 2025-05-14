<?php
include('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $donor_name = $_POST['donor_name'];
    $amount = $_POST['amount'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO donations (donor_name, amount) VALUES (?, ?)");
    $stmt->bind_param("sd", $donor_name, $amount);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Thank you for your donation!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
