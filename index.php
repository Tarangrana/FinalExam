<?php
include("./includes/header.php");
?>

<form method="POST" action="submit.php">
    <label>Enter a message (max 50 characters):</label><br>
    <input type="text" name="message" maxlength="50" required><br><br>
    <button type="submit">Submit</button>
</form>

<br><br>

<a href="showAll.php">Show all records</a>

<?php include("./includes/footer.php"); ?>
