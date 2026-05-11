document.addEventListener("DOMContentLoaded", function() {
    let timeLeft = 10; 
    const timerElement = document.getElementById('seconds');

    const countdown = setInterval(function() {
        timeLeft--;
        
        // Posodobimo številko v HTML-ju
        if (timerElement) {
            timerElement.textContent = timeLeft;
        }

        if (timeLeft <= 0) {
            clearInterval(countdown);
            window.location.href = "../index.php?reset=true";
        }
    }, 1000); 

});