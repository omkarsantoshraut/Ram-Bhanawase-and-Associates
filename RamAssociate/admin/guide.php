<?php
  session_start();
  $msg = "";
  include('../includes/config.php');
  if(strlen($_SESSION['alogin'])==0)
  {
  header('location:admin_login.php');
  }
  else{

    if(isset($_POST['guide_submit'])){
      $title = $_POST['guide_title'];
      $description = $_POST['guide_description'];

      $filename = $_FILES["guide_file"]["name"];
      $tempname = $_FILES["guide_file"]["tmp_name"];
      $folder = "../guide/".$filename;

      $sql = "INSERT INTO guideline (id, title, description, filename) VALUES ('', '$title', '$description', '$filename')";
      mysqli_query($conn, $sql);

      if (move_uploaded_file($tempname, $folder))  {
        ?>
          <script type="text/javascript">
            alert('Guideline added successfully!');
          </script>
        <?php
      }else{
        ?>
          <script type="text/javascript">
            alert('Failed to upload guideline. Try again.');
          </script>
        <?php
      }

    }


    if(isset($_POST['button_guide'])){
      $id = $_POST['id'];
      $sql = "DELETE FROM guideline WHERE id = '$id'";
      if(mysqli_query($conn, $sql)){
        ?>
          <script type="text/javascript">
            alert('Guideline deleted successfully!');
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
    <link rel="stylesheet" href="css/guide.css">
    <link rel="stylesheet" href="../includes/css/admin_header.css">
  </head>
  <body>
    <?php include '../includes/admin_header.php' ?>

    <div class="guide">
      <form class="" action="" method="post" enctype="multipart/form-data">
        <h1>Add guideline</h1>
        <input type="text" name="guide_title" value="" placeholder="Enter title..." required>
        <textarea name="guide_description" rows="8" cols="80" placeholder="Enter description of the guideline..." required></textarea>
        <input type="file" name="guide_file" value="" required>
        <button type="submit" name="guide_submit">Add guideline</button>
      </form>
    </div>
    <hr>

    <div class="active_guidelines">

      <table>
        <caption><h1>Active guidelines on website</h1></caption>
        <tr>
          <th>Title</th>
          <th>Description</th>
          <th>See file</th>
          <th>Delete file</th>
        </tr>

        <?php
            $sql = "SELECT * FROM guideline";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
              ?>
                <tr>
                  <td><?php echo $row['title'] ?></td>
                  <td><?php echo $row['description'] ?></td>
                  <td>
                    <a href="../guide/<?php echo $row['filename']; ?>" target="_blank">see pdf</a>
                  </td>
                  <td>
                    <form class="" action="" method="post">
                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                      <button type="submit" name="button_guide">Delete</button>
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
