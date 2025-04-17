<?php
include("includes/header.php");
include("includes/conn.php");

echo "<h3>All Records</h3><ul>";

$sql = "SELECT * FROM string_info";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>String_ID: " . $row['string_id'] . " - Message: " . $row['message'] . "
        </li>";
    }
} else {
    echo "<li>No records found.</li>";
}
echo "</ul>";
?>

<br><hr>
<h3>Delete a Record by ID</h3>
<form method="POST" action="delete.php">
    <input type="number" name="delete_id" required>
    <input type="submit" value="Delete">
</form>
