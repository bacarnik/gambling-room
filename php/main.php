<?php
    session_start();

    $users = [];
    if(isset($_POST['login'])){
        $_SESSION['users'] = [
            $_POST['username1'],
            $_POST['username2'],
            $_POST['username3']
        ];
    }  

    $user1 = $_SESSION['users'][0];
    $user2 = $_SESSION['users'][1];
    $user3 = $_SESSION['users'][2];

    $_SESSION['rolls'] = [1, 1, 1];

    if(isset($_POST['submit'])){
        $_SESSION['rolls'] = [
            rand(1,6),
            rand(1,6),
            rand(1,6)
        ];
    }

    $rolls = $_SESSION['rolls']
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/style_main.css">
    <title>Gambling Room</title>
</head>

<body>
    <div id="container">
        <h1>Gambling Room</h1>
        <div id="game-container">
            <div id="users-container">
                <div class="user-card">
                    <?php echo htmlspecialchars($user1); ?>
                    <img class="img-small" src="../img/dice<?php echo $rolls[0]?>.gif">
                    <?php echo $rolls[0]?>
                </div>
                <div class="user-card">
                    <?php echo htmlspecialchars($user2); ?>
                    <img class="img-small" src="../img/dice<?php echo $rolls[1]?>.gif">
                    <?php echo $rolls[1]?>
                </div>
                <div class="user-card">
                    <?php echo htmlspecialchars($user3); ?>
                    <img class="img-small" src="../img/dice<?php echo $rolls[2]?>.gif">
                    <?php echo $rolls[2]?>
                </div>
            </div>
            <hr>
            <img id="img-main" src="../img/dice-anim.gif"><hr>
            <form action="" method="POST">
                <button type="submit" name="submit" id="roll-button" >ROLL THE DICE</button>
            </form>
        </div>
    </div>
</body>
</html>