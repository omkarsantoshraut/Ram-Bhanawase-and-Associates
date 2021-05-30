<?php
  session_start();
  $msg = "";
  include('../includes/config.php');
  if(strlen($_SESSION['alogin'])==0)
  {
  header('location:admin_login.php');
  }
  else{

    if(isset($_POST['service_submit'])){
      $description = $_POST['service_description'];

      $filename = $_FILES["service_file"]["name"];
      $tempname = $_FILES["service_file"]["tmp_name"];
      $folder = "../video/".$filename;

      $sql = "INSERT INTO video (id, description, filename) VALUES ('', '$description', '$filename')";
      mysqli_query($conn, $sql);

      if (move_uploaded_file($tempname, $folder))  {
        ?>
          <script type="text/javascript">
            alert('Video added successfully!');
          </script>
        <?php
      }else{
        ?>
          <script type="text/javascript">
            alert('Failed to upload Video. Try again.');
          </script>
        <?php
      }

    }


    if(isset($_POST['button_service'])){
      $id = $_POST['id'];
      $sql = "DELETE FROM video WHERE id = '$id'";
      if(mysqli_query($conn, $sql)){
        ?>
          <script type="text/javascript">
            alert('Video deleted successfully!');
          </script>
        <?php
      }
      else{
        ?>
          <script type="text/javascript">
            alert('Something wend wrong!');
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
    <link rel="stylesheet" href="css/video.css">
    <link rel="stylesheet" href="../includes/css/admin_header.css">
  </head>
  <body>
    <?php include '../includes/admin_header.php' ?>

    <div class="services">
      <form class="" action="" method="post" enctype="multipart/form-data">
        <h1>Add Video</h1>
        <textarea name="service_description" rows="8" cols="80" placeholder="Enter description of the Video..." required></textarea>
        <input type="file" name="service_file" value="" required>
        <button type="submit" name="service_submit">Add Video</button>
      </form>
    </div>
    <hr>

    <div class="active_service">

      <table>
        <caption><h1>Active services on website</h1></caption>
        <tr>
          <th>Description</th>
          <th>See Video</th>
          <th>Delete file</th>
        </tr>

        <?php
            $sql = "SELECT * FROM video";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
              ?>
                <tr>
                  <td><?php echo $row['description'] ?></td>
                  <td>
                    <video controls>
                      <source src="../video/<?php echo $row['filename']; ?>" type="video/mp4">
                    </video>
                  </td>
                  <td>
                    <form class="" action="" method="post">
                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                      <button type="submit" name="button_service">Delete</button>
                    </form>
                  </td>
                </tr>
              <?php
            }
         ?>


      </table>
    </div>


    <div class="foot">
      <p>Copyright | Ram Bhanawase & Associates. All rights reserved.</p>
    </div>

  </body>
</html>

<?php } ?>
