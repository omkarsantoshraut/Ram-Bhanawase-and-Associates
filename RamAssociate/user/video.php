<?php include '../includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/video.css">
    <link rel="stylesheet" href="../includes/css/footer.css">
    <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>
    <style>
        body{
            margin:0;
            padding:0;
        }
        .name{
          margin-top: -4%;
          position: sticky;
          top:0;
        }
        .name p{
          text-align: center;
          font-family: 'Akronim';
          font-size: 50px;
          color: white;
          background-image: linear-gradient(to right, black, red);
        }
        .last{
            position: relative;
            clear:both;
            width:100%;
        }

        .copyright{
            width: 96%;
          }

        @media screen and (max-width: 1040px) {
            .name{
                margin-top: -6%;
            }
        }

        @media screen and (max-width: 800px) {
          .name{
              margin-top:-7%;
          }
        }

        @media screen and (max-width: 400px) {
          .name{
              margin-top:-8px;
          }
        }


    </style>
  </head>
  <body>
      <div class="name">
      <p>Ram Bhanawase & Associates</p>
    </div>

    <div class="gal">
      <h1>Our Gallery</h1>
      <?php
        $sql = "SELECT * FROM video";
        $result = mysqli_query($conn, $sql);
        $product_count = mysqli_num_rows($result);
        if($product_count > 0){
          while($row = mysqli_fetch_array($result)){
            ?>
            <div class="gallery">
                <video controls>
                  <source src="../video/<?php echo $row['filename']; ?>" type="video/mp4">
                </video>
                <a href="../video/<?php echo $row['filename']; ?>" target="_blank" style="text-decoration: none; color:black;"><p><?php echo $row['description']; ?> </p></a>
            </div>
            <?php
          }
        }
      ?>


    </div>

    <div class="last">
        <?php include '../includes/footer.php'; ?>
    </div>


  </body>
</html>
