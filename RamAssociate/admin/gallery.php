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
      $filename = $_FILES["service_file"]["name"];
      $tempname = $_FILES["service_file"]["tmp_name"];
      $folder = "../photos/".$filename;

      $sql = "INSERT INTO photos (id, filename) VALUES ('', '$filename')";
      mysqli_query($conn, $sql);

      if (move_uploaded_file($tempname, $folder))  {
        ?>
          <script type="text/javascript">
            alert('Photos added successfully!');
          </script>
        <?php
      }else{
        ?>
          <script type="text/javascript">
            alert('Failed to upload Photo. Try again.');
          </script>
        <?php
      }

    }


    if(isset($_POST['button_service'])){
      $id = $_POST['id'];
      $sql = "DELETE FROM photos WHERE id = '$id'";
      if(mysqli_query($conn, $sql)){
        ?>
          <script type="text/javascript">
            alert('Photo deleted successfully!');
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
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="../includes/css/admin_header.css">
  </head>
  <body>
    <?php include '../includes/admin_header.php' ?>

    <div class="services">
      <form class="" action="" method="post" enctype="multipart/form-data">
        <h1>Add Photo</h1>
        <input type="file" name="service_file" value="" required>
        <button type="submit" name="service_submit">Add Photo</button>
      </form>
    </div>
    <hr>

    <div class="active_service">

      <table>
        <caption><h1>Active services on website</h1></caption>
        <tr>
          <th>See Photo</th>
          <th>Delete file</th>
        </tr>

        <?php
            $sql = "SELECT * FROM photos";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
              ?>
                <tr>
                  <td>
                    <img src="../photos/<?php echo $row['filename']; ?>" alt="" height="250px" width="250px">
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
