<?php
  session_start();
  $msg = "";
  include('../includes/config.php');
  if(strlen($_SESSION['alogin'])==0)
  {
  header('location:admin_login.php');
  }
  else{

    if(isset($_POST['change_pass_submit'])){
      $curr_pass = $_POST['username'];
      $new_pass = $_POST['new_password'];
      $confirm_pass = $_POST['confirm_password'];
      if($new_pass != $confirm_pass){
        $msg = "New password not matched with confirm password!";
      }
      else{
        $curr_user = $_SESSION['alogin'];
        $sql = "SELECT password FROM admin_login WHERE password = '$curr_pass' && username = '$curr_user'";
        $num = mysqli_fetch_array(mysqli_query($conn, $sql));
        if($num > 0){
          $sql1 = "UPDATE admin_login set password='$new_pass' WHERE username='$curr_user'";
          if(mysqli_query($conn, $sql1)){
	        $msg="Password Changed Successfully !!";
          }
          else{
            $msg = "Something went wrong!";
          }
        }
        else{
          $msg = "Current password not matched!";
        }
      }
    }

    mysqli_close($conn);

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/change_password.css">
    <link rel="stylesheet" href="../includes/css/admin_header.css">
  </head>
  <body>
    <?php include '../includes/admin_header.php' ?>

    <div class="login">
      <div class="login_form">
        <form class="" action="" method="post">
          <p>Change Password</p>
          <label for="" style="color:red; font-size:18px;"> <?php echo $msg; ?> </label>
          <input type="password" name="username" value="" placeholder="Current password" required>
          <input type="password" name="new_password" value="" placeholder="New Password" required>
          <input type="password" name="confirm_password" value="" placeholder="Confirm Password" required>
          <button type="submit" name="change_pass_submit">Change</button>
        </form>
      </div>
    </div>


    <div class="foot">
      <p>Copyright | Ram Bhanawase & Associates. All rights reserved.</p>
    </div>

  </body>
</html>

<?php } ?>
