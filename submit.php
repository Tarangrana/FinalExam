<?php
include("./includes/conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO string_info (message) VALUES ('$message')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Message added successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>