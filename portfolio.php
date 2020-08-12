<?php
include 'stock/stock.php';
include 'web-service/collect-and-print-data.php';
?>
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Portfolio</title>

    <?php
    include 'includes/styles.php';
    ?>
  </head>

  <body>
    <?php
    include 'includes/navigation.php';
    ?>

    <main role="main">

      <div class="container-fluid my-5">
        <h2 id="catalog">Portfolio</h2>
        <div class="row">
          <?php
            printHTML();
          ?>
        </div>
      </div>

    </main>

    <?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
    ?>

  </body>
</html>