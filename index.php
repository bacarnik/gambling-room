<?php
    session_start();
    $users = [];
    if(isset($_POST['submit'])){
        $users = [['username1' => $_POST['username1']], ['username2' => $_POST['username2']], ['username3' => $_POST['username3']]];
    }  

    $_SESSION['users'] = $users;
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style_index.css">
    <title>Gambling Room</title>
</head>

<body>
    <div id="container">
        <div id="input-container">
            <form action="php/main.php" method="POST">

                <h1>Enter usernames</h1>
                <div id="users-container">
                    <div class="user-group">
                        <label>USER 1:</label>
                        <input type="text" name="username1" placeholder="Enter name" required>
                    </div>

                    <div class="user-group">
                        <label>USER 2:</label>
                        <input type="text" name="username2" placeholder="Enter name" required>
                    </div>

                    <div class="user-group">
                        <label>USER 3:</label>
                        <input type="text" name="username3" placeholder="Enter name" required>
                    </div>
                </div>

                <button type="submit" id="play-button" >Play</button>
            </form>
        </div>
    </div>
</body>

</html>