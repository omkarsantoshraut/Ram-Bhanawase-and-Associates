<?php
  session_start();
  include '../includes/config.php';
  if(strlen($_SESSION['alogin'])==0)
  {
  header('location:admin_login.php');
  }
  else{
    if(isset($_POST['img1_submit'])){
      $img_title = $_POST['img_title'];
      $button_title = $_POST['button_title'];

      $filename = $_FILES["img1"]["name"];
      $tempname = $_FILES["img1"]["tmp_name"];
      $folder = "../slider_image/".$filename;

      $sql = "UPDATE image_slider SET image_title = '$img_title', button_title = '$button_title', filename = '$filename' WHERE id = 1";
      mysqli_query($conn, $sql);

      if (move_uploaded_file($tempname, $folder))  {
        ?>
          <script type="text/javascript">
            alert('Image uploaded successfully!');
          </script>
        <?php
      }else{
        ?>
          <script type="text/javascript">
            alert('Failed to upload image. Try again.');
          </script>
        <?php
      }

    }

    if(isset($_POST['img2_submit'])){
      $img_title = $_POST['img_title'];
      $button_title = $_POST['button_title'];

      $filename = $_FILES["img1"]["name"];
      $tempname = $_FILES["img1"]["tmp_name"];
      $folder = "../slider_image/".$filename;

      $sql = "UPDATE image_slider SET image_title = '$img_title', button_title = '$button_title', filename = '$filename' WHERE id = 2";
      mysqli_query($conn, $sql);

      if (move_uploaded_file($tempname, $folder))  {
        ?>
          <script type="text/javascript">
            alert('Image uploaded successfully!');
          </script>
        <?php
      }else{
        ?>
          <script type="text/javascript">
            alert('Failed to upload image. Try again.');
          </script>
        <?php
      }

    }

    if(isset($_POST['img3_submit'])){
      $img_title = $_POST['img_title'];
      $button_title = $_POST['button_title'];

      $filename = $_FILES["img1"]["name"];
      $tempname = $_FILES["img1"]["tmp_name"];
      $folder = "../slider_image/".$filename;

      $sql = "UPDATE image_slider SET image_title = '$img_title', button_title = '$button_title', filename = '$filename' WHERE id = 3";
      mysqli_query($conn, $sql);

      if (move_uploaded_file($tempname, $folder))  {
        ?>
          <script type="text/javascript">
            alert('Image uploaded successfully!');
          </script>
        <?php
      }else{
        ?>
          <script type="text/javascript">
            alert('Failed to upload image. Try again.');
          </script>
        <?php
      }

    }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../includes/css/admin_header.css">
    <link rel="stylesheet" href="css/image_slider.css">
  </head>
  <body>
    <?php include '../includes/admin_header.php' ?>

    <div class="img_slide">
      <fieldset>
        <legend>Slide 1</legend>
        <form class="" action=" " method="post" enctype="multipart/form-data">
          <?php

            $sql = "SELECT * FROM image_slider WHERE id = 1";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
          ?>
          <fieldset>
            <legend>Title of the image (Appear on the Image)</legend>
            <textarea name="img_title" rows="8" cols="80" placeholder="Title of the image..." style="width:100%; border:0;"> <?php echo $row['image_title']; ?> </textarea>
          </fieldset>
          <fieldset>
            <legend>Title of the button</legend>
            <textarea name="button_title" rows="8" cols="80" placeholder="Title of the button" style="width:100%; border:0;"><?php echo $row['button_title']; ?></textarea>
          </fieldset>
          <fieldset>
            <legend>Current Image</legend>
                 <img src="../slider_image/<?php echo $row['filename']; ?>" alt="Image not Found..." width="250px" height="250px;">
            <?php
              }
            ?>
          </fieldset>
          <fieldset>
            <legend>Upload new Image</legend>
            <input type="file" name="img1" value="">
          </fieldset>

          <button type="submit" name="img1_submit">Submit</button>
          <a href="admin_dashboard.php"> <button type="button" name="button">Go back</button> </a>
        </form>
      </fieldset>
    </div>

    <div class="img_slide">
      <fieldset>
        <legend>Slide 2</legend>
        <form class="" action=" " method="post" enctype="multipart/form-data">
          <?php
            $sql = "SELECT * FROM image_slider WHERE id = 2";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
          ?>
          <fieldset>
            <legend>Title of the image (Appear on the Image)</legend>
            <textarea name="img_title" rows="8" cols="80" placeholder="Title of the image..." style="width:100%; border:0;"> <?php echo $row['image_title']; ?> </textarea>
          </fieldset>
          <fieldset>
            <legend>Title of the button</legend>
            <textarea name="button_title" rows="8" cols="80" placeholder="Title of the button" style="width:100%; border:0;"><?php echo $row['button_title']; ?></textarea>
          </fieldset>
          <fieldset>
            <legend>Current Image</legend>
                 <img src="../slider_image/<?php echo $row['filename']; ?>" alt="Image not Found..." width="250px" height="250px;">
            <?php
              }
            ?>
          </fieldset>
          <fieldset>
            <legend>Upload new Image</legend>
            <input type="file" name="img1" value="">
          </fieldset>

          <button type="submit" name="img2_submit">Submit</button>
          <a href="admin_dashboard.php"> <button type="button" name="button">Go back</button> </a>
        </form>
      </fieldset>
    </div>

    <div class="img_slide">
      <fieldset>
        <legend>Slide 3</legend>
        <form class="" action=" " method="post" enctype="multipart/form-data">
          <?php
            $sql = "SELECT * FROM image_slider WHERE id = 3";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
          ?>
          <fieldset>
            <legend>Title of the image (Appear on the Image)</legend>
            <textarea name="img_title" rows="8" cols="80" placeholder="Title of the image..." style="width:100%; border:0;"> <?php echo $row['image_title']; ?> </textarea>
          </fieldset>
          <fieldset>
            <legend>Title of the button</legend>
            <textarea name="button_title" rows="8" cols="80" placeholder="Title of the button" style="width:100%; border:0;"><?php echo $row['button_title']; ?></textarea>
          </fieldset>
          <fieldset>
            <legend>Current Image</legend>
                 <img src="../slider_image/<?php echo $row['filename']; ?>" alt="Image not Found..." width="250px" height="250px;">
            <?php
              }
            ?>
          </fieldset>
          <fieldset>
            <legend>Upload new Image</legend>
            <input type="file" name="img1" value="">
          </fieldset>

          <button type="submit" name="img3_submit">Submit</button>
          <a href="admin_dashboard.php"> <button type="button" name="button">Go back</button> </a>
        </form>
      </fieldset>
    </div>


    <div class="foot">
      <p>Copyright | Ram Bhanawase & Associates. All rights reserved.</p>
    </div>

  </body>
</html>

<?php
 }
 mysqli_close($conn);
?>
