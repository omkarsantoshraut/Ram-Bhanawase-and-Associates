<?php
  session_start();
  include '../includes/config.php';
  if(strlen($_SESSION['alogin'])==0)
  {
  header('location:admin_login.php');
  }
  else{
    if(isset($_POST['about_submit'])){
      $about_us = $_POST['about_us'];
      $vision = $_POST['vision'];
      $mission = $_POST['mission'];

      $sql = "UPDATE about SET about_us = '$about_us', vision = '$vision', mission = '$mission' WHERE id = 1";

      if(mysqli_query($conn, $sql)){
        ?>
          <script type="text/javascript">
            alert('About us section updated!');
          </script>
        <?php
      }
      else{
        ?>
          <script type="text/javascript">
            alert('Something went wrong!');
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
    <link rel="stylesheet" href="css/about.css">
  </head>
  <body>
    <?php include '../includes/admin_header.php' ?>

    <div class="img_slide">
      <fieldset>
        <legend>About us section</legend>
        <form class="" action=" " method="post">
          <?php

            $sql = "SELECT * FROM about";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
          ?>
          <fieldset>
            <legend>About Us</legend>
            <textarea name="about_us" rows="8" cols="80" placeholder="About Us..." style="width:100%; border:0;"> <?php echo $row['about_us']; ?> </textarea>
          </fieldset>
          <fieldset>
            <legend>Our Vision</legend>
            <textarea name="vision" rows="8" cols="80" placeholder="Our Vision" style="width:100%; border:0;"><?php echo $row['vision']; ?></textarea>
          </fieldset>
          <fieldset>
            <legend>Our Mission</legend>
              <textarea name="mission" rows="8" cols="80" placeholder="Our Mission" style="width:100%; border:0;"><?php echo $row['mission']; ?></textarea>
            <?php
              }
            ?>
          </fieldset>

          <button type="submit" name="about_submit">Submit</button>
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
