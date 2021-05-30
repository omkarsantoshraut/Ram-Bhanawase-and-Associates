<?php
  session_start();
  $_SESSION['errmsg']= "";
 ?>
<?php
  if(isset($_POST['login_submit'])){
    $username = $_POST['username'];
    $password = $_POST['pass'];
    include '../includes/config.php';
    $sql1 = "SELECT * FROM admin_login WHERE username = '$username' and password = '$password'";
    $num = mysqli_fetch_array(mysqli_query($conn, $sql1));
    if($num > 0){
      $_SESSION['alogin']=$_POST['username'];
      ?>
        <script type="text/javascript">
          window.location.href = "admin_dashboard.php";
        </script>
      <?php
    }
    else{
      $_SESSION['errmsg'] = "Invalid Username or Password!";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login | Ram Bhanawase & Associates</title>
    <link rel="stylesheet" href="css/admin_login.css">
  </head>
  <body>
    <div class="header">
      <div class="logo">
        <img src="../img/logo.jpg" alt="Image not found...">
      </div>
      <div class="name">
        Admin Login | Ram Bhanawase & Associates
      </div>
    </div>

    <div class="login">
      <div class="login_form">
        <form class="" action="" method="post">
          <p>Admin Login</p>
          <label for="" style="color:red; font-size:18px;"> <?php echo $_SESSION['errmsg']; ?> </label>
          <input type="email" name="username" value="" placeholder="Enter email id" required>
          <input type="password" name="pass" value="" placeholder="Enter password" required>
          <button type="submit" name="login_submit">Login</button>
        </form>
      </div>
    </div>


    <div class="foot">
      <p>Copyright | Ram Bhanawase & Associates. All rights reserved.</p>
    </div>
  </body>
</html>
