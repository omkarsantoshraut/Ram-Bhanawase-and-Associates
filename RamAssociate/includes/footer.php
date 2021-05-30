<?php
  $msg = '';
?>
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- Storing the email ids of newsletter -->
  <?php
    if (isset($_POST['submit'])) {
      $email = $_POST['email'];
      include 'config.php';
      $sqlemail = "SELECT email FROM newsletter WHERE email = '$email'";
      $num = mysqli_fetch_array(mysqli_query($conn, $sqlemail));
      if($num > 0){
        $msg = "This email already exist in our newsletter. Still, You are not getting updates from us, then contact us.";
      }
      else{
        $sql = "INSERT INTO newsletter (email) VALUES ('$email')";
        $result = mysqli_query($conn, $sql);
        if($result){
          $msg = "Successfully added your mail into our newsletter.";
        }
        else{
          $msg = "something went wrong";
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
      }
      mysqli_close($conn);
    }
  ?>
<!-- --------------------------------------------------------------------------------------------------------------- -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Rye' rel='stylesheet'>
  </head>
  <body>
    <div class="foot" id="footer">
        <div class="reach_us" onmouseover="active1()" onmouseout="passive1()">
          <h2 id="indicator1">REACH US</h2>
          <div class="address">
            <div class="icon">
              <i class="fa fa-map-marker"></i>
            </div>
            <div class="content">
              <span>
                Office No. 110, Vision One Mall,
                Bhumkar Chowk, Pune-Mumbai Highway,
                Wakad,
                Pune, Maharashtra 411057
                India.
              </span>
            </div>
          </div>
          <div class="number">
            <div class="icon">
              <i class="fa fa-phone"></i>
            </div>
            <div class="content">
              <span>
                <a href="https://wa.me/918421185133?text=Hello,%20I%20want%20to%20talk%20with%20you." target="_blank">+91-84211 85133</a>
              </span>
            </div>
          </div>
          <div class="mail">
            <div class="icon">
              <i class="fa fa-envelope"></i>
            </div>
            <div class="content">
              <span>
                <a href="mailto:rbtax10@gmail.com?Subject=I%20want%20to%20talk%20with%20you." target="_blank">rbtax10@gmail.com</a>
              </span>
            </div>
          </div>
        </div>
        <div class="Our_blogs" onmouseover="active2()" onmouseout="passive2()">
          <h2 id="indicator2">Usefull Links</h2>
          <marquee width="100%" direction="up" scrollamount="3" height="200px" onMouseOver="this.stop()" onMouseOut="this.start()">
            <?php
              $sql = "SELECT * FROM usefull_links";
              $result = mysqli_query($conn, $sql);
              $product_count = mysqli_num_rows($result);
              if($product_count > 0){
                while($row = mysqli_fetch_array($result)){
                  ?>
                    <a href="<?php echo $row['link']; ?>" target="_blank"><p style="text-align:center;"><?php echo $row['title']; ?></p></a><hr>
                  <?php
                }
              }
            ?>
          </marquee>
        </div>
        <div class="newsletter" onmouseover="active3()" onmouseout="passive3()">
          <h2 id="indicator3">NEWSLETTER</h2>
          <form class="" action="#footer" method="post">
            <label for="">Subscribe to stay connected with us. We will respect your privacy.</label><br>
            <label for="" style="color:orange;"> <?php echo $msg; ?> </label> <br>
            <input type="email" name="email" value="" placeholder="Enter Email address." required><br>
            <button type="submit" name="submit">SEND</button>
          </form>
          <div class="social_media">
            <div class="facebook">
              <a href="https://www.facebook.com/omkar.raut.94849/" class="fa fa-facebook" target="_blank"></a>
            </div>
            <div class="twitter">
              <a href="https://twitter.com/Omkar56694166" class="fa fa-twitter" target="_blank"></a>
            </div>
            <div class="linkedin">
              <a href="https://www.linkedin.com/in/omkar-raut-066379180/" class="fa fa-linkedin" target="_blank"></a>
            </div>
          </div>
        </div>
    </div>
    <div class="copyright">
      <p>copyright 2020-2022 by Ram Bhanawase & Associates. All rights reserved.</p>
    </div>


    <script type="text/javascript">
      function active1(){
        document.getElementById('indicator1').style.color = "orange";
        document.getElementById('indicator1').style.transition = ".5s";
      }
      function passive1(){
        document.getElementById('indicator1').style.color = "white";
      }
      function active2(){
        document.getElementById('indicator2').style.color = "orange";
        document.getElementById('indicator2').style.transition = ".5s";
      }
      function passive2(){
        document.getElementById('indicator2').style.color = "white";
      }
      function active3(){
        document.getElementById('indicator3').style.color = "orange";
        document.getElementById('indicator3').style.transition = ".5s";
      }
      function passive3(){
        document.getElementById('indicator3').style.color = "white";
      }
    </script>
  </body>
</html>
