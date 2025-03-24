<?php
// recipes.php
// Lists all the .md files found in the 'recipes/' folder.
// Adjust pattern or folder if needed.

$recipeFiles = glob('recipes/*.md'); // Find all Markdown files in 'recipes/'
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Mostly Edible – Recipes</title>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <div id="wrapper">

      <!-- HEADER -->
      <header id="mainHeader">
        <!-- LOGO -->
        <a href="index.php">
          <img src="assets/img/Logo.png" alt="Mostly Edible Logo" id="siteLogo" />
        </a>

        <!-- PAGE TITLE -->
        <h1 id="mainTitle">Recipes</h1>

        <!-- NAVIGATION -->
        <nav id="topNav">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="recipes.php" class="highlight">Recipes</a></li>
            <li><a href="kitchen-tools.php">Kitchen Tools</a></li>
            <li><a href="gardening.php">Gardening</a></li>
            <li><a href="coffee-roasting.php">Coffee Roasting</a></li>
            <li><a href="about.php">About</a></li>
          </ul>
        </nav>
      </header>

      <!-- MAIN CONTENT: Listing the recipes -->
      <section id="toc">
        <h2>All Recipes</h2>
        <ul>
          <?php if ($recipeFiles): ?>
            <?php foreach ($recipeFiles as $file): ?>
              <?php
                // e.g. 'recipes/Chicken and Dumplings.md' => 'Chicken and Dumplings.md'
                $filename   = basename($file);
                // Remove '.md'
                $recipeName = preg_replace('/\.md$/', '', $filename);
                // e.g. 'Chicken and Dumplings'
                // We can keep spaces if the .md file name has them.
                // If you prefer hyphens in filenames, you'd replace them with spaces:
                // $displayName = ucwords(str_replace('-', ' ', $recipeName));
                $displayName = $recipeName;
              ?>
              <li>
                <a href="recipe.php?name=<?php echo urlencode($recipeName); ?>">
                  <?php echo htmlspecialchars($displayName); ?>
                </a>
              </li>
            <?php endforeach; ?>
          <?php else: ?>
            <li>No recipes found! Add some .md files to the 'recipes/' folder.</li>
          <?php endif; ?>
        </ul>
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
