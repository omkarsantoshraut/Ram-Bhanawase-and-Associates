


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/about.css">
  </head>
  <body>
    <?php
      $sql = "SELECT * FROM about";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_array($result)){
        ?>
          <div class="aboutback" id="aboutus">
            <div class="about">
              <div class="about1">
                <h1>About Us</h1>
                <p>
                  <?php echo $row['about_us']; ?>
                </p>
              </div>
              <div class="about2">
                <h1>Our Vision</h1>
                <p>
                  <?php echo $row['vision']; ?>
                </p>
              </div>
              <div class="about3">
                <h1>Our Mision</h1>
                <p>
                  <?php echo $row['mission']; ?>
                </p>
              </div>
            </div>
          </div>
        <?php
      }
     ?>

  </body>
</html>
