<?php
  session_start();
  $msg = "";
  include('../includes/config.php');
  if(strlen($_SESSION['alogin'])==0)
  {
  header('location:admin_login.php');
  }
  else{

    if(isset($_POST['link_submit'])){
      $title = $_POST['link_title'];
      $link = $_POST['link'];

      $sql = "INSERT INTO usefull_links (id, title, link) VALUES ('', '$title', '$link')";


      if (mysqli_query($conn, $sql))  {
        ?>
          <script type="text/javascript">
            alert('Link added successfully!');
          </script>
        <?php
      }else{
        ?>
          <script type="text/javascript">
            alert('Failed to add link. Try again.');
          </script>
        <?php
      }

    }


    if(isset($_POST['button_link'])){
      $id = $_POST['id'];
      $sql = "DELETE FROM usefull_links WHERE id = '$id'";
      if(mysqli_query($conn, $sql)){
        ?>
          <script type="text/javascript">
            alert('Link deleted successfully!');
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
    <link rel="stylesheet" href="css/usefull_links.css">
    <link rel="stylesheet" href="../includes/css/admin_header.css">
  </head>
  <body>
    <?php include '../includes/admin_header.php' ?>

    <div class="link">
      <form class="" action="" method="post" enctype="multipart/form-data">
        <h1>Add Usefull Link</h1>
        <input type="text" name="link_title" value="" placeholder="Enter title..." required>
        <textarea name="link" rows="8" cols="80" placeholder="Enter Link..." required></textarea>
        <button type="submit" name="link_submit">Add link</button>
      </form>
    </div>
    <hr>

    <div class="active_link">

      <table>
        <caption><h1>Active links on website</h1></caption>
        <tr>
          <th>Title</th>
          <th>link</th>
          <th>Delete link</th>
        </tr>

        <?php
            $sql = "SELECT * FROM usefull_links";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
              ?>
                <tr>
                  <td><?php echo $row['title'] ?></td>
                  <td>
                    <a href="<?php echo $row['link']; ?>" target="_blank">link</a>
                  </td>
                  <td>
                    <form class="" action="" method="post">
                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                      <button type="submit" name="button_link">Delete</button>
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
