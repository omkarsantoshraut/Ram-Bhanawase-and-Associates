<?php
  session_start();

  include('../includes/config.php');
  if(strlen($_SESSION['alogin'])==0)
  {
  header('location:admin_login.php');
  }
  else{
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/admin_dashboard.css">
    <link rel="stylesheet" href="../includes/css/admin_header.css">
  </head>
  <body>
    <?php include '../includes/admin_header.php' ?>

    <div class="change_pass">
      <fieldset>
        <legend>Change Password</legend>
        <a href="change_password.php" target="_blank"> <button type="button" name="button">Change Password</button> </a>
      </fieldset>
    </div><hr>

    <div class="edit">
      <h2>Edit Website</h2><hr>
      <div class="home">
        <fieldset>
          <legend>Edit Home Section</legend>
          <a href="image_slider.php" target="_blank"> <button type="button" name="button">Edit Image Slider</button> </a>
          <a href="guide.php" target="_blank"> <button type="button" name="button">Add guideline</button> </a>
        </fieldset>
      </div><hr>

      <div class="service">
        <fieldset>
          <legend>Edit Services</legend>
          <a href="edit_services.php" target="_blank"> <button type="button" name="button">Add/ delete Services</button> </a>
        </fieldset>
      </div><hr>

      <div class="key">
        <fieldset>
          <legend>Edit key points</legend>
          <a href="key_points.php" target="_blank"> <button type="button" name="button">Add/ delete Services</button> </a>
        </fieldset>
      </div><hr>

      <div class="about">
        <fieldset>
          <legend>Edit About us | Our Vision | Our Mission</legend>
          <a href="about.php" target="_blank"> <button type="button" name="button">Edit About Us Section</button> </a>
        </fieldset>
      </div><hr>

      <div class="links">
        <fieldset>
          <legend>Edit Usefull Links</legend>
          <a href="usefull_links.php" target="_blank"> <button type="button" name="button">Add/Delete usefull links</button> </a>
        </fieldset>
      </div><hr>

      <div class="gallery">
        <fieldset>
          <legend>Add/Delete photos and videos</legend>
          <a href="gallery.php" target="_blank"> <button type="button" name="button">Add/Delete photos in gallery</button> </a>
          <a href="video.php" target="_blank"> <button type="button" name="button">Add/Delete videos in gallery</button> </a>
        </fieldset>
      </div>
    </div>
    <hr>



    <div class="foot">
      <p>Copyright | Ram Bhanawase & Associates. All rights reserved.</p>
    </div>
  </body>
</html>

<?php } ?>
