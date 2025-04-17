<?php
include("./includes/conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_id'])) {
    $id = intval($_POST['delete_id']);

    $sql = "DELETE FROM string_info WHERE string_id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Record deleted!'); window.location.href='showAll.php';</script>";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
