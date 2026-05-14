<?php
    session_start();

    $results = [
        ['name' => $_SESSION['users'][0], 'score' => $_SESSION['total_scores'][0]],
        ['name' => $_SESSION['users'][1], 'score' => $_SESSION['total_scores'][1]],
        ['name' => $_SESSION['users'][2], 'score' => $_SESSION['total_scores'][2]],
    ];

    // RAZVRŠČANJE (Sortiranje od največjega do najmanjšega rezultata)
    usort($results, function($a, $b) {
        return $b['score'] <=> $a['score'];
    });
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/style_results.css">
    <title>Gambling Room</title>
    <script src="../js/timer.js"></script>
</head>

<body>
    <div id="container">
        <div id="podium-container">

            <div class="podium-box second">
                <div class="user-info">
                    <img src="../img/icon.svg" class="user-icon">
                    <span class="name"><?php echo htmlspecialchars($results[1]['name']); ?></span>
                    <span class="score"><?php echo $results[1]['score']; ?> točk</span>
                </div>
            </div>

            <div class="podium-box first">
                <div class="user-info">
                    <img src="../img/icon.svg" class="user-icon">
                    <span class="name"><?php echo htmlspecialchars($results[0]['name']); ?></span>
                    <span class="score"><?php echo $results[0]['score']; ?> točk</span>
                </div>
            </div>

            <div class="podium-box third">
                <div class="user-info">
                    <img src="../img/icon.svg" class="user-icon">
                    <span class="name"><?php echo htmlspecialchars($results[2]['name']); ?></span>
                    <span class="score"><?php echo $results[2]['score']; ?> točk</span>
                </div>
            </div>                   

            <div id="timer-container">
                <div id="timer-display">
                    Vračam na začetek čez <span id="seconds">10</span>
                </div>
            </div>
            
        </div>
        <div class="info-container">
            <div class="info-icon">ⓘ</div>
            <div class="info-text">Nik Bačar 4.RB</div>
        </div>
    </div>
</body>
</html>