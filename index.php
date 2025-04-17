<?php
include("./includes/header.php");
?>

<body>
<form method="POST" action="submit.php">
    <h2>Enter a message (max 50 characters):</h2>
    <input type="text" name="message" maxlength="50" required>
    <button type="submit">Submit</button>
</form>

<br><br>

<a href="showAll.php">Show all records</a>

</body>
</html>
