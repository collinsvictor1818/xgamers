<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
    <!-- Include jQuery or your preferred library for AJAX requests -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <main>
        <section class="section games" aria-label="Games" id="games">
            <div class="container">
                <h2 class="h2 section-title" data-reveal="bottom">Games</h2>
                <p class="section-text" data-reveal="bottom">
                <h2>Recent PC Games</h2>
                <p>Scroll left-right to view some of the latest games we have in stock.</p>
                <div class="scrollable-container">
                    <!-- Wrap the game cards in a horizontal scrollable container -->
                    <div class="games-list">


                        <!-- Game Card 2 -->
                        <div class="games-card" data-game-id="1">
                            <img src="assets/images/fifa2.jpeg" alt="Game 1">
                            <h3 class="card-title">Fifa 23</h3>
                            <p class="card-description">A short description of Game 1 goes here.</p>
                        </div>

                        <!-- Game Card 1 -->
                        <div class="games-card">
                            <img src="assets/images/fifa2.jpeg" alt="Game 1">
                            <h3 class="card-title">Fifa 23</h3>
                            <p class="card-description">A short description of Game 1 goes here.</p>
                        </div>
                        <!-- Game Card 2 -->
                        <div class="games-card">
                            <img src="assets/images/Cyberpunk.jpeg" alt="Game 2">
                            <h3 class="card-title">Cyberpunk</h3>
                            <p class="card-description">A short description of Game 2 goes here.</p>
                        </div>
                        <!-- Game Card 1 -->



                        <!-- Game Card 2 -->
                        <div class="games-card">
                            <img src="assets/images/Cyberpunk.jpeg" alt="Game 2">
                            <h3 class="card-title">Cyberpunk</h3>
                            <p class="card-description">A short description of Game 2 goes here.</p>
                        </div>
                        <!-- Game Card 1 -->
                        <div class="games-card">
                            <img src="assets/images/fifa2.jpeg" alt="Game 1">
                            <h3 class="card-title">Fifa 23</h3>
                            <p class="card-description">A short description of Game 1 goes here.</p>
                        </div>

                        <!-- Game Card 2 -->
                        <div class="games-card">
                            <img src="assets/images/Cyberpunk.jpeg" alt="Game 2">
                            <h3 class="card-title">Cyberpunk</h3>
                            <p class="card-description">A short description of Game 2 goes here.</p>
                        </div>
                        <!-- Game Card 1 -->
                        <div class="games-card">
                            <img src="assets/images/fifa2.jpeg" alt="Game 1">
                            <h3 class="card-title">Fifa 23</h3>
                            <p class="card-description">A short description of Game 1 goes here.</p>
                        </div>




                        <!-- Add more game cards as needed -->
                    </div>
                </div>
                </p>
            </div>
        </section>
    </main>
    <script>
        $(document).ready(function () {
            // Function to handle card clicks
            function handleCardClick(event) {
                // Get the game ID from the clicked card
                const gameId = $(this).data('game-id');

                // Check if gameId is valid (you can define your own validation logic here)
                if (isValidGameId(gameId)) {
                    // Navigate to details.php with the game ID as a query parameter
                    window.location.href = `sections/details.php?gameId=${gameId}`;
                } else {
                    // Handle the case where the game ID is not valid (e.g., show an error message)
                    alert('Invalid game ID');
                }
            }

            // Add a click event listener to all game cards
            $('.games-card').on('click', handleCardClick);

            // Example function to validate game ID (customize as needed)
            function isValidGameId(gameId) {
                // Implement your validation logic here (e.g., check if it's a positive integer)
                return !isNaN(gameId) && parseInt(gameId) > 0;
            }
        });
    </script>


</body>

</html>