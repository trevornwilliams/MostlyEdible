<?php
// recipe.php
// Expects ?name=Biscuits (for example), loads 'recipes/Biscuits.md'
// Uses the Parsedown library (https://github.com/erusev/parsedown) for Markdown parsing

require 'Parsedown.php';

// Grab the requested recipe name from the URL
$recipeName = $_GET['name'] ?? '';
$mdFile     = "recipes/$recipeName.md";

$parsedown = new Parsedown();
$parsedown->setSafeMode(true); // optional, helps sanitize raw HTML

if (file_exists($mdFile)) {
  $markdownContent = file_get_contents($mdFile);
  $htmlContent     = $parsedown->text($markdownContent);
} else {
  $htmlContent     = '<p>Sorry, this recipe was not found!</p>';
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Mostly Edible – Recipe</title>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <div id="wrapper">

      <!-- HEADER -->
      <header id="mainHeader">
        <a href="index.php">
          <img src="assets/img/Logo.png" alt="Mostly Edible Logo" id="siteLogo" />
        </a>
        <h1 id="mainTitle">Recipe View</h1>

        <!-- NAVIGATION -->
        <nav id="topNav">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="recipes.php">Recipes</a></li>
            <li><a href="kitchen-tools.php">Kitchen Tools</a></li>
            <li><a href="gardening.php">Gardening</a></li>
            <li><a href="coffee-roasting.php">Coffee Roasting</a></li>
            <li><a href="about.php">About</a></li>
          </ul>
        </nav>
      </header>

      <!-- BACK TO RECIPES LINK -->
      <a id="back" href="recipes.php">← Back to All Recipes</a>

      <!-- RECIPE CONTENT -->
      <div id="content">
        <?php echo $htmlContent; ?>
      </div>

      <!-- FOOTER -->
      <footer id="footer">
        <p>© <?php echo date('Y'); ?> Mostly Edible</p>
      </footer>

    </div> <!-- /#wrapper -->

    <script src="assets/js/main.js"></script>
  </body>
</html>
