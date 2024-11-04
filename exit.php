<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['UserId'];
    $email = $_POST['Email'];

    $sql = "UPDATE visitors SET out_time = NOW() WHERE email = '$email' AND id = '$userId'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
