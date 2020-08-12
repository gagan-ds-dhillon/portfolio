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
      <?php
      include 'includes/masthead.php';
      ?>

      <div class="container-fluid">
        <h2 id="catalog mb-0">Welcome to my portfolio.</h2>
        <p class="lead">This is me being creative.</p>
        <div class="row my-4 mb-5">
          <div class="col-12 col-md-4 home-cat cat-1"  onclick="window.open('portfolio.php?data-prod=ps','_self');">
            <div></div>
            <div><a href="portfolio.php?data-prod=ps" class="text-white"><h2>Posters</h2></a></div>
          </div>
          <div class="col-12 col-md-4 home-cat cat-2"  onclick="window.open('portfolio.php?data-prod=pg','_self');">
            <div></div>
            <div><a href="portfolio.php?data-prod=pg" class="text-white"><h2>Photography</h2></a></div>
          </div>
          <div class="col-12 col-md-4 home-cat cat-3" onclick="window.open('portfolio.php?data-prod=ve','_self');">
            <div></div>
            <div><a href="portfolio.php?data-prod=ve" class="text-white"><h2>Video Editing</h2></a></div>
          </div>
        </div>
      </div>

    </main>

    <?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
    ?>

  </body>
</html>