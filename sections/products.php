<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <!-- Include your CSS file -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Include jQuery or your preferred library for AJAX requests -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <main>
    <script>
        $(document).ready(function () {
            // Add click event handler for "Build your PC Now!" links
            $('.link.has-before').on('click', function (e) {
                e.preventDefault();
                // Redirect to games-list.php when the link is clicked
                window.location.href = './pages/products-list.php';
            });
        });
    </script>
 <!-- Products Section -->
 <section class="section Products" aria-label="Products" id="products">
  <div class="container">

    <h2 class="h2 section-title" data-reveal="bottom">
      SHOP</span>
    </h2>

    <p class="section-text" data-reveal="bottom">
    <h2>You can now shop directly from this website or visit our physical shop in Nairobi.</h2>
    <p>Scroll left-right to view some of the latest Products we have in stock.
    </p>
    <div class="scrollable-container">
      <ul class="computers-list">
        <!-- Card 1 -->
        <li data-reveal="bottom">
          <div class="computers-card">
            <figure class="card-banner img-holder">
              <img src="./assets/images/PROD 1.png" alt="Product 1" class="img-cover">
            </figure>

            <div class="card-content">
              <a href="#" class="card-tag">Product 1</a>
              <h3 class="h3">
                <a href="#" class="card-title">Product 1</a>
              </h3>
              Ksh 250
              <a href="#" class="link has-before">Buy Now!</a>
            </div>
          </div>
        </li>

        <!-- Card 2 -->
        <li data-reveal="bottom">
          <div class="computers-card">
            <figure class="card-banner img-holder">
              <img src="./assets/images/PROD 2.png" alt="Product 2" class="img-cover">
            </figure>

            <div class="card-content">
              <a href="#" class="card-tag">Product 2</a>
              <h3 class="h3">
                <a href="#" class="card-title">Product 2</a>
              </h3>
            Ksh 900
              <a href="#" class="link has-before">Buy Now!</a>
            </div>
          </div>
        </li>
        <!-- Card 3 -->
        <li data-reveal="bottom">
          <div class="computers-card">
            <figure class="card-banner img-holder">
              <img src="./assets/images/PROD 3.png" alt="Product 3" class="img-cover">
            </figure>

            <div class="card-content">
              <a href="#" class="card-tag">Product 2 </a>
              <h3 class="h3">
                <a href="#" class="card-title">Product 2 </a>
              </h3>
              Ksh 750
              <a href="#" class="link has-before">Buy Now!</a>
            </div>
          </div>
        </li>

        <!-- Card 4 -->
        <li data-reveal="bottom">
          <div class="computers-card">
            <figure class="card-banner img-holder">
              <img src="./assets/images/PROD 4.png" alt="Product 4" class="img-cover">
            </figure>

            <div class="card-content">
              <a href="#" class="card-tag">Product 4 </a>
              <h3 class="h3">
                <a href="#" class="card-title">Product 4</a>
              </h3>
              Ksh 45O
              <a href="#" class="link has-before">Buy Now!</a>
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