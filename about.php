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
        <h2 id="catalog" style="text-align: center;">About Me</h2>
        <div class="text-center">
          <img src="img/gagan.jpg" class="img-fluid img-thumbnail mb-4" style="width: 250px;height: 250px;object-fit: cover;">
          <div>
            <h1>Gagandeep Singh</h1>
            <h5>Age: 24 Yrs</h5>
            <h5>Height: 6ft</h5>
            <h5>Nationality: Indian</h5>
            <h5>Mother Tongue : Punjabi</h5>
            <h5>Current Location : Canada</h5>
            <h5>Education: Bachelors in Animation,VFX and Gaming</h5>
            <h5>Profession: Video Editor and Graphic Designer</h5>
            <a class="btn btn-primary" href="resume.pdf"><i class="fa fa-external-link"></i> View Resume</a>
            <a class="btn btn-danger" href="contact.php"><i class="fa fa-envelope"></i> Contact Me</a>
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