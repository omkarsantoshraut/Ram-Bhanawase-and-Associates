
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/keypoints.css">
  </head>
  <body>
    <div class="back" id="keypoints">
        <div class="point1">
          <h1>Our Key points</h1>
          <ul>
            <?php
              $sql = "SELECT * FROM key_points";
              $result = mysqli_query($conn, $sql);
              $product_count = mysqli_num_rows($result);
              if($product_count > 0){
                while($row = mysqli_fetch_array($result)){
                  ?>
                    <li><?php echo $row['point']; ?></li>
                  <?php
                }
              }
            ?>
          </ul>
      </div>
    </div>
  </body>
</html>
