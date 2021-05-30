<?php
  $msg = 'Fill this form to getting touch with us.';
?>
<!-- --------------------------------------------------------------------------------------------------------------- -->
<!-- Storing the email ids of newsletter -->
  <?php
    if (isset($_POST['contact_submit'])) {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $mobile = $_POST['mobile'];
      $email = $_POST['mail'];
      date_default_timezone_set('Asia/Kolkata');
      $time = date('h:i:s');
      $date = date("d/m/Y");

      include 'includes/config.php';

        $sql1 = "INSERT INTO contacts (fname, lname, mobile, mail, contact_date, contact_time) VALUES ('$fname', '$lname', '$mobile', '$email', '$date', '$time')";
        if(mysqli_query($conn, $sql1)){
          $msg = "We have got your request. We will contact you shortly.";
        }
        else{
          $msg = "something went wrong, try again.";
        }
        // Add to newsletter
        $sqlemail = "SELECT email FROM newsletter WHERE email = '$email'";
        $num = mysqli_fetch_array(mysqli_query($conn, $sqlemail));
        if($num > 0){

        }
        else{
          $sql = "INSERT INTO newsletter (email) VALUES ('$email')";
          if(mysqli_query($conn, $sql)){

          }
          else{
          }
        }
        //
        mysqli_close($conn);
      }
  ?>
<!-- --------------------------------------------------------------------------------------------------------------- -->


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/contact.css">
  </head>
  <body>
    <div class="contactback" id="contactus">
      <div class="contact_form">
        <form class="" action="#contactus" method="post">
          <h1>Contact Us</h1>
          <p id="msg" style="background-color:black;"> <?php echo $msg; ?> </p> <br><br>
          <input type="text" name="fname" value="" placeholder="First Name" required>
          <input type="text" name="lname" value="" placeholder="Last Name" required>
          <input type="number" name="mobile" maxlength="10" min="1000000000" max="9999999999" value="" placeholder="Mobile" required>
          <input type="email" name="mail" value="" placeholder="Mail">
          <button type="submit" name="contact_submit">Submit</button>
        </form>
    </div>
    </div>

    <div class="map">
      <div class="mapouter">
        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Ram%20Bhanawase%20%26%20Associates%2C%20Office%20No.%20110%2C%20Vision%20One%20Mall%2C%20Bhumkar%20Chowk%2C%20Pune-Mumbai%20Highway%2C%20Wakad%2C%20Pune%2C%20Maharashtra%20411057%20India&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
      </div>
      <div class="hours">
        <h1>Working Hours</h1>
          <div class="day">
            Mon:
          </div>
          <div class="time">
            10:00 AM – 7:00 PM
          </div>
          <div class="day">
            Tue:
          </div>
          <div class="time">
            10:00 AM – 7:00 PM
          </div>
          <div class="day">
            Wed:
          </div>
          <div class="time">
            10:00 AM – 7:00 PM
          </div>
          <div class="day">
            Thu:
          </div>
          <div class="time">
            10:00 AM – 7:00 PM
          </div>
          <div class="day">
            Fri:
          </div>
          <div class="time">
            10:00 AM – 7:00 PM
          </div>
          <div class="day">
            Sat:
          </div>
          <div class="time">
            10:00 AM – 7:00 PM
          </div>
          <div class="day">
            Sun:
          </div>
          <div class="time">
            Closed
          </div>
      </div>
    </div>


  </body>
</html>
