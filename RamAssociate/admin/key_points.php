<?php
  session_start();
  $msg = "";
  include('../includes/config.php');
  if(strlen($_SESSION['alogin'])==0)
  {
  header('location:admin_login.php');
  }
  else{

    if(isset($_POST['key_submit'])){
      $point = $_POST['key_point'];

      $sql = "INSERT INTO key_points (id, point) VALUES ('', '$point')";
      if(mysqli_query($conn, $sql)){
        ?>
          <script type="text/javascript">
            alert('Key point added successfully!');
          </script>
        <?php
      }
      else{
        ?>
          <script type="text/javascript">
            alert('Key point not added. Please try again');
          </script>
        <?php
      }

    }


    if(isset($_POST['button_key'])){
      $id = $_POST['id'];
      $sql = "DELETE FROM key_points WHERE id = '$id'";
      if(mysqli_query($conn, $sql)){
        ?>
          <script type="text/javascript">
            alert('key point deleted successfully!');
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
    <link rel="stylesheet" href="css/key_points.css">
    <link rel="stylesheet" href="../includes/css/admin_header.css">
  </head>
  <body>
    <?php include '../includes/admin_header.php' ?>

    <div class="key">
      <form class="" action="" method="post" enctype="multipart/form-data">
        <h1>Add key point</h1>
        <input type="text" name="key_point" value="" placeholder="Enter your key point..." required>
        <button type="submit" name="key_submit">Add key point</button>
      </form>
    </div>
    <hr>

    <div class="active_keys">

      <table>
        <caption><h1>Active Key points on website</h1></caption>
        <tr>
          <th>key points</th>
          <th>Delete point</th>
        </tr>

        <?php
            $sql = "SELECT * FROM key_points";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
              ?>
                <tr>
                  <td><?php echo $row['point'] ?></td>
                  <td>
                    <form class="" action="" method="post">
                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                      <button type="submit" name="button_key">Delete</button>
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
