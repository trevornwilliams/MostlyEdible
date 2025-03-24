<?php
// index.php
// This is your home (landing) page. 
// If your server defaults to index.php, users visiting your domain root will see this page.
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Mostly Edible – Home</title>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <div id="wrapper">

      <!-- HEADER -->
      <header id="mainHeader">
        <!-- LOGO -->
        <img src="assets/img/Logo.png" alt="Mostly Edible Logo" id="siteLogo" />

        <!-- SITE TITLE -->
        <h1 id="mainTitle">Mostly Edible</h1>

        <!-- NAVIGATION -->
        <nav id="topNav">
          <ul>
            <li><a href="index.php" class="highlight">Home</a></li>
            <li><a href="recipes.php">Recipes</a></li>
            <li><a href="kitchen-tools.php">Kitchen Tools</a></li>
            <li><a href="gardening.php">Gardening</a></li>
            <li><a href="coffee-roasting.php">Coffee Roasting</a></li>
            <li><a href="about.php">About</a></li>
          </ul>
        </nav>
      </header>

      <!-- MAIN CONTENT -->
      <section id="landingIntro">
        <h2>Welcome to Mostly Edible</h2>
        <p>
          A collection of tried-and-true recipes, practical kitchen tool reviews,
          home gardening tips, and coffee roasting advice. 
          Browse our sections above to learn more!
        </p>
      </section>

      <!-- FOOTER -->
      <footer id="footer">
        <p>© <?php echo date('Y'); ?> Mostly Edible</p>
      </footer>

    </div> <!-- /#wrapper -->

    <!-- JS references if needed -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
