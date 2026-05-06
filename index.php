<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="container">
        <div id="input-container">
            <form  action="process.php" method="POST">
            <div class="user-group">
                <label>User 1:</label>
                <input type="text" name="usernames[]" placeholder="Enter name" required>
            </div>
            
            <div class="user-group">
                <label>User 2:</label>
                <input type="text" name="usernames[]" placeholder="Enter name" required>
            </div>
            
            <div class="user-group">
                <label>User 3:</label>
                <input type="text" name="usernames[]" placeholder="Enter name" required>
            </div>

            <button type="submit">Play</button>
        </form>
        </div>
    </div>
</body>
</html>