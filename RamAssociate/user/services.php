<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/services.css">
  </head>
  <body style="background-color:#EBF5FB">
    <div class="services" id="services">
      <h1>Our Services</h1>
      <?php
        $sql = "SELECT * FROM services";
        $result = mysqli_query($conn, $sql);
        $product_count = mysqli_num_rows($result);
        if($product_count > 0){
          while($row = mysqli_fetch_array($result)){
            ?>
            <div class="service">
              <img src="services/<?php echo $row['filename']; ?>" alt="">
              <h2><?php echo $row['title'] ?></h2>
              <p><?php echo $row['description'] ?></p>
            </div>
            <?php
          }
        }
      ?>
    </div>
  </body>
</html>
