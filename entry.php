<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['Name'];
    $lastName = $_POST['Name'];
    $sex = $_POST['Sex'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $nationality = $_POST['nationality'];
    $date = $_POST['date'];
    $inTime = $_POST['in-time'];
    $outTime = $_POST['out-time'];
    $address = $_POST['Address'];
    $meeting = $_POST['meeting'];
    $card = $_POST['card'];

    $sql = "INSERT INTO visitors (first_name, last_name, sex, email, phone, nationality, visit_date, in_time, out_time, address, purpose_meeting, id_card_info)
            VALUES ('$firstName', '$lastName', '$sex', '$email', '$phone', '$nationality', '$date', '$inTime', '$outTime', '$address', '$meeting', '$card')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
