<?php
include 'stock/stock.php';
include 'web-service/collect-and-print-data.php';
?>
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Store Catalog</title>

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
        <h2 id="catalog">Contact Me</h2>
        <form>
          <div class="row">
              <div class="col-12 offset-md-1 col-md-5">
                  <div class="form-group">
                      <label for="name">
                          Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter name" required="required">
                  </div>
                  <div class="form-group">
                      <label for="email">
                          Email Address</label>
                      <div class="input-group">
                          <input type="email" class="form-control" id="email" placeholder="Enter email" required="required"></div>
                  </div>
                  <div class="form-group">
                      <label for="subject">
                          Subject</label>
                      <select id="subject" name="subject" class="form-control" required="required">
                          <option value="na" selected="">Choose One:</option>
                          <option value="feedback">Feedback</option>
                          <option value="general">General</option>
                          <option value="hire">Hire</option>
                      </select>
                  </div>
              </div>
              <div class="col-12 col-md-4">
                  <div class="form-group">
                      <label for="name">
                          Message</label>
                      <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
                  </div>
              </div>
              <div class="col-12 offset-md-1 col-md-8">
                  <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                      Send Message</button>
              </div>
          </div>
          </form>
      </div>

    </main>

    <?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
    ?>

  </body>
</html>