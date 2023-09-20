  <!DOCTYPE html>
  <html lang="en">
<head>
   <!-- 
        - favicon
      -->
      <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

</head>

  <body id="top">

    <!--- #HEADER-->
    <?php include 'includes/header.php'; ?>
    <main>
      <article>
        <!-- - #HERO-->
        <?php include 'includes/hero.php'; ?>


        <!-- Computer Section -->
        <?php include 'sections/computers.php'; ?>


        <!-- Gaming Section -->
        
        <?php include 'sections/games.php'; ?>

 <!-- Products Section -->
 <?php include 'sections/products.php'; ?>


      </article>
    </main>





    <!-- 
      - #FOOTER
    -->


    <?php include 'includes/footer.php'; ?>




    <!-- 
      - #BACK TO TOP
    -->

    <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
      <ion-icon name="arrow-up-outline" aria-hidden="true"></ion-icon>
    </a>





    <!-- 
      - #CUSTOM CURSOR
    -->

    <div class="cursor" data-cursor></div>





    <!-- 
      - custom js link
    -->
    <script src="./assets/js/script.js"></script>

    <!-- 
      - ionicon link
    -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  </body>

  </html>