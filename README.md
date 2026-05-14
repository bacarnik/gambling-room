# <h1 align="center">🎲 Gambling Room 🎰</h1>

<p align="center">
  <b>A sleek, PHP-powered dice game for three players featuring session-based persistence and a dynamic podium finish.</b>
</p>

---

## 🕹️ Game Preview

Experience high-stakes dice rolling with automated scoring:

* **Multiplayer Competition:** Simultaneous play for three distinct users.
* **Persistent Scoring:** Three rounds of rolling where results are summed up automatically.
* **Dynamic Visuals:** Dice faces update in real-time based on the random numbers generated.
* **Podium Logic:** Advanced sorting algorithm determines winners and places them on a 3D-styled podium.
* **Auto-Cleanup:** Integrated JavaScript timer to reset the game state after a session ends.

---

## 📁 Project Structure

The project is organized into modular directories to separate logic, styling, and assets:

```text
GAMBLING-ROOM/
├── css/
│   ├── style_index.css    # Layout for the entry form and landing page
│   ├── style_main.css     # UI for the dice rolling room and user cards
│   └── style_results.css  # Podium styling, absolute positioning, and timer UI
├── img/
│   ├── background.jpg     # Main atmospheric background image
│   ├── dice-anim.gif      # Looping animation used during the "roll" state
│   ├── dice1.gif ... 6    # Individual GIF files for each dice outcome
│   ├── icon.svg           # User avatar icon displayed on the podium
│   └── podium.avif        # High-quality podium base image
├── js/
│   └── timer.js           # JavaScript countdown logic and auto-redirect
├── php/
│   ├── main.php           # Core game logic (rolling, session sums, attempts)
│   └── results.php        # Result processing and winner sorting
├── index.php              # Entry point and session initialization
└── README.md              # Project documentation
```

🚀 ## Key Features

- **State Management:** Utilizes `$_SESSION` to track player names, total scores, and remaining attempts across multiple page refreshes.

- **Conditional Rendering:** Dice images and scores remain hidden until the first roll is initiated, ensuring a clean initial UI.

- **Absolute Podium Mapping:** The results page uses CSS absolute positioning to map player names and icons directly onto the `podium.avif` image.

- **Winner Sorting:** Employs the PHP `usort()` function with the spaceship operator (`<=>`) to rank players from highest to lowest score.

- **Smart Redirects:** The game logic prevents `Undefined Index` errors by using Null Coalescing operators and validating proper navigation flow between pages.

---

🛠️ ## Technologies Used

- **PHP 8.x** — Handles backend logic, random number generation, and session management.

- **CSS3 (Flexbox & Grid)** — Provides a responsive layout for the game room and precise positioning for the podium.

- **JavaScript (ES6)** — Controls the 10-second countdown timer and manages client-side navigation.

- **SVG Graphics** — Lightweight scalable icons for player representation.

---

🎮 ## How to Play

1. **Register**  
   Enter usernames for all three players on the home screen and click **Login**.

2. **Roll**  
   Each player has **3 attempts** to roll the dice. Click the **ROLL THE DICE** button.

3. **Accumulate**  
   Scores accumulate after every roll. The current dice face and total score are displayed on the player card.

4. **Win**  
   After the 3rd roll, players are automatically redirected to the **Results** page.

5. **Reset**  
   After 10 seconds, the countdown expires, the session is cleared, and the game redirects back to the start screen.

---

📜 ## License

This project is open-source and available under the **MIT License**.
