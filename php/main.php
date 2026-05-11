<?php
    session_start();

    $users = [];
    if (isset($_POST['login'])) { //login je name submit buttona u index.php
        $_SESSION['users'] = [$_POST['username1'], $_POST['username2'], $_POST['username3']];
        $_SESSION['total_scores'] = [0, 0, 0];
        $_SESSION['current_rolls'] = [0, 0, 0];
        $_SESSION['attempts'] = 3;
    }

    $user1 = $_SESSION['users'][0];
    $user2 = $_SESSION['users'][1];
    $user3 = $_SESSION['users'][2];

    if (isset($_POST['submit']) && $_SESSION['attempts'] > 0) {
        $new_rolls = [rand(1, 6), rand(1, 6), rand(1, 6)];

        $_SESSION['current_rolls'] = $new_rolls;

        for ($i = 0; $i < 3; $i++) {
            $_SESSION['total_scores'][$i] += $new_rolls[$i];
        }

        $_SESSION['attempts']--;
    }

    $rolls = $_SESSION['current_rolls'];
    $total = $_SESSION['total_scores'];
    $attempts_left = $_SESSION['attempts'];
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
                    <p><?php echo htmlspecialchars($user1); ?></p>
                    <?php if ($total[0] > 0): ?>
                        <img class="img-small" src="../img/dice<?php echo $rolls[0]; ?>.gif">
                        <p>Skupaj: <strong><?php echo $total[0]; ?></strong></p>
                    <?php endif; ?>
                </div>

                <div class="user-card">
                    <p><?php echo htmlspecialchars($user2); ?></p>
                    <?php if ($total[1] > 0): ?>
                        <img class="img-small" src="../img/dice<?php echo $rolls[1]; ?>.gif">
                        <p>Skupaj: <strong><?php echo $total[1]; ?></strong></p>
                    <?php endif; ?>
                </div>

                <div class="user-card">
                    <p><?php echo htmlspecialchars($user3); ?></p>
                    <?php if ($total[2] > 0): ?>
                        <img class="img-small" src="../img/dice<?php echo $rolls[2]; ?>.gif">
                        <p>Skupaj: <strong><?php echo $total[2]; ?></strong></p>
                    <?php endif; ?>
                </div>
            </div>

            <hr>
            <img id="img-main" src="../img/dice-anim.gif">
            <hr>

            <form action="" method="POST">
                <?php if ($attempts_left > 0): ?>
                    <button type="submit" name="submit" id="roll-button">ROLL THE DICE (<?php echo $attempts_left; ?>)</button>
                <?php else: ?>
                    <a href="results.php"><button type="button" id="roll-button">VIEW RESULTS</button></a>                
                <?php endif; ?>
            </form>
        </div>
    </div>
</body>

</html>