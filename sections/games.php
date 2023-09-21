<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
    <!-- Include jQuery or your preferred library for AJAX requests -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<script>
        $(document).ready(function () {
            // Add click event handler for "Build your PC Now!" links
            $('.link.has-before').on('click', function (e) {
                e.preventDefault();
                // Redirect to games-list.php when the link is clicked
                window.location.href = './pages/games-list.php';
            });
        });
    </script>
<body>
    <main>
    <section class="section games" aria-label="Games" id="games">
          <div class="container">

            <h2 class="h2 section-title" data-reveal="bottom">
              Games</span>
            </h2>

            <p class="section-text" data-reveal="bottom">
            <h2>Recent PC Games</h2>
            <p>Scroll left-right to view some of the latest games we have in stock.
            </p>
            <div class="scrollable-container">
              <ul class="computers-list">
                <!-- Card 1 -->
                <li data-reveal="bottom">
                  <div class="computers-card">
                    <figure class="card-banner img-holder">
                      <img src="./assets/images/Fifa2.jpeg" alt="Fifa 23" class="img-cover">
                    </figure>

                    <div class="card-content">
                      <a href="#" class="card-tag">Fifa 23</a>
                      <h3 class="h3">
                        <a href="#" class="card-title">Fifa 23 with online PC game</a>
                      </h3>
                      <div class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true" role="img" class="md hydrated"></ion-icon>

                      <time class="card-meta-text" datetime="2022-01-01">Jan 01 2022</time>
</div>
                      <a href="#" class="link has-before">Play Now!</a>
                    </div>
                  </div>
                </li>

                <!-- Card 2 -->
                <li data-reveal="bottom">
                  <div class="computers-card">
                    <figure class="card-banner img-holder">
                      <img src="./assets/images/Hitman.jpeg" alt="Hitman 3" class="img-cover">
                    </figure>

                    <div class="card-content">
                      <a href="#" class="card-tag">Hitman 3</a>
                      <h3 class="h3">
                        <a href="#" class="card-title">Hitman 3 with online PC game</a>
                      </h3>
                      <div class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true" role="img" class="md hydrated"></ion-icon>

                      <time class="card-meta-text" datetime="2022-01-01">Jan 01 2022</time>
</div>
                      <a href="#" class="link has-before">Play Now!</a>
                    </div>
                  </div>
                </li>
                <!-- Card 3 -->
                <li data-reveal="bottom">
                  <div class="computers-card">
                    <figure class="card-banner img-holder">
                      <img src="./assets/images/Cyberpunk.jpeg" alt="CyberPunk 2077" class="img-cover">
                    </figure>

                    <div class="card-content">
                      <a href="#" class="card-tag">CyberPunk 2077 </a>
                      <h3 class="h3">
                        <a href="#" class="card-title">CyberPunk 2077 with online PC game</a>
                      </h3>
                      <div class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true" role="img" class="md hydrated"></ion-icon>

                      <time class="card-meta-text" datetime="2022-01-01">Jan 01 2022</time>
</div>
                      <a href="#" class="link has-before">Play Now!</a>
                    </div>
                  </div>
                </li>

                <!-- Card 4 -->
                <li data-reveal="bottom">
                  <div class="computers-card">
                    <figure class="card-banner img-holder">
                      <img src="./assets/images/Forza.jpeg" alt="Forza Horizon 5" class="img-cover">
                    </figure>

                    <div class="card-content">
                      <a href="#" class="card-tag">Forza Horizon 5 </a>
                      <h3 class="h3">
                        <a href="#" class="card-title">Forza Horizon 5 with online PC game</a>
                      </h3>
                      <div class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true" role="img" class="md hydrated"></ion-icon>

                      <time class="card-meta-text" datetime="2022-01-01">Jan 01 2022</time>
</div>
                      <a href="#" class="link has-before">Play Now!</a>
                    </div>
                  </div>
                </li>


              </ul>
            </div>

          </div>
        </section>

        
    </main>
   

</body>

</html>