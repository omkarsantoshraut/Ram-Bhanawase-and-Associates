<?php include 'includes/config.php'; ?>
<!DOCTYPE html>

<!-- --------------------------------------------------------------------------------------------------------------- -->
  <?php
    if (isset($_POST['inquiry_submit'])) {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $mobile = $_POST['mobile'];
      $email = $_POST['email'];
      $message = $_POST['msg'];
      date_default_timezone_set('Asia/Kolkata');
      $time = date('h:i:s');
      $date = date("d/m/Y");



        $sql1 = "INSERT INTO inquiries (fname, lname, mobile, mail, message, inquiry_date, inquiry_time) VALUES ('$fname', '$lname', '$mobile', '$email', '$message', '$date', '$time')";
        if(mysqli_query($conn, $sql1)){
          ?> <script type="text/javascript">
            alert("We have recorded your inquiry. we will get in touch with you shortly.")
          </script> <?php
        }
        else{
          ?> <script type="text/javascript">
            alert("Something went wrong");
          </script> <?php
        }
        // Add to newsletter
        $sqlemail = "SELECT email FROM newsletter WHERE email = '$email'";
        $num = mysqli_fetch_array(mysqli_query($conn, $sqlemail));
        if($num > 0){

        }
        else{
          $sql = "INSERT INTO newsletter (id, email) VALUES ('', '$email')";
          if(mysqli_query($conn, $sql)){

          }
          else{
          }
        }

      }
  ?>
<!-- --------------------------------------------------------------------------------------------------------------- -->





<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home | Ram Bhanawase & Associates</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .form_container{
          width: 100%;
        }
        .form_container form input,
        .form_container form textarea{
          width: 80%;
          margin-left: 10%;
          margin-right: 10%;
          margin-top: 1%;
          margin-bottom: 1%;
          padding: 1%;
        }
        .form_container form input{
          text-align: center;
        }
        #inquiry_button{
            border: 0;
            background-color: lightblue;
            border-radius: 5px;
        }
        #inquiry_button:hover{
            font-weight: bold;
            color: white;
            background-color: blue;
            box-shadow: 1px 1px 10px 1px red;
        }
        /*-----------------------------------------------------------------*/
    .rotate{
      transform:rotate(-7deg);
      -ms-transform:rotate(-90deg);
      -moz-transform:rotate(-90deg);
      -webkit-transform:rotate(-90deg);
      -o-transform:rotate(-90deg);
    }
    #myBtn2 {
      position: fixed;
      bottom: 250px;
      right: -3%;
      z-index: 99;
      font-size: 18px;
      border: none;
      outline: none;
      background-color: green;
      color: white;
      cursor: pointer;
      padding: 15px;
      border-radius: 4px;
     }

     #myBtn2:hover {
        box-shadow: 1px 1px 10px 1px red;
     }


        @media screen and (max-width: 1040px) {
          #myBtn2 {
            right: -5%;
            }
        }

        @media screen and (max-width: 800px) {
          #myBtn2 {
            right: -7%;
            padding: 10px;
            }
        }


        @media screen and (max-width: 600px) {
          #myBtn2 {
            right: -10%;
            padding: 5px;
            }

        }

        @media screen and (max-width: 300px) {
          #myBtn2 {
            right: -9%;
            font-size: 16px;
            }
        }
    </style>
  </head>
  <body style="background-color:#EBF5FB">
      <button class="rotate" id="myBtn2" title="Send inquiry" onclick="document.getElementById('id01').style.display='block'">Send Enquiry</button>

      <div class="w3-container">
      <div id="id01" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-card-4">
          <header class="w3-container w3-teal">
            <span onclick="document.getElementById('id01').style.display='none'"
            class="w3-button w3-large w3-display-topright">&times;</span>
            <h2 style="text-align:center;">Ram Bhanawase & Associates</h2> <hr>
            <h3 style="text-align:center;">Make your inquiry</h3>
          </header>
          <div class="form_container" style = "width: 100%;">
            <form class="" method="post">
              <input type="text" name="fname" value="" placeholder="First Name" required>
              <input type="text" name="lname" value="" placeholder="Last Name" required>
              <input type="number" name="mobile" value="" min="1000000000" max="9999999999" placeholder="Mobile Number" required>
              <input type="email" name="email" value="" placeholder="Email" required>
              <textarea name="msg" rows="8" cols="80" placeholder="Type your message here..." required></textarea>
              <input type="submit" name="inquiry_submit" id="inquiry_button" value="SEND">
            </form>
          </div>
          <footer class="w3-container w3-teal">
            <p style="text-align:center;">After receiving your enquiry to us, we will get in touch with you.</p>
          </footer>
        </div>
      </div>
    </div>





    <div class="slideshow-container">
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <?php
          $sql = "SELECT * FROM image_slider WHERE id = 1";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_array($result)){
         ?>
        <img src="slider_image/<?php echo $row['filename']; ?>" style="width:100%">
        <div class="text">
          <h2><?php echo $row['image_title']; ?></h2>
          <button type="button" onclick="document.getElementById('id01').style.display='block'" name="button"><?php echo $row['button_title']; ?></button>
        </div>
      <?php } ?>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
          <?php
            $sql = "SELECT * FROM image_slider WHERE id = 2";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
           ?>
          <img src="slider_image/<?php echo $row['filename']; ?>" style="width:100%">
          <div class="text">
            <h2><?php echo $row['image_title']; ?></h2>
            <button type="button" onclick="document.getElementById('id01').style.display='block'" name="button"><?php echo $row['button_title']; ?></button>
          </div>
          <?php } ?>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <?php
          $sql = "SELECT * FROM image_slider WHERE id = 3";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_array($result)){
         ?>
        <img src="slider_image/<?php echo $row['filename']; ?>" style="width:100%">
        <div class="text">
          <h2><?php echo $row['image_title']; ?></h2>
          <button type="button" onclick="document.getElementById('id01').style.display='block'" name="button"><?php echo $row['button_title']; ?></button>
        </div>
      <?php } ?>
      </div>
    </div>


    <script>
      var slideIndex = 0;
      showSlides();
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for(i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if(slideIndex > slides.length) {
          slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 4000); // Change image every 4 seconds
      }
    </script>



    <div class="container1">
      <div class="col1">
        <div class="who_we_are">
          <h1>Who we are?</h1>
          <p>
            We are a team at RamBhanawase & Associate delivering a service and some facilities of CA. Dummy text is text that is used in the publishing industry
            or by web designers to occupy the space which will later be filled with 'real' content. This is required when, for example, the final text is not yet
            available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics when writing melodies in
            order to have a 'ready-made' text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.
          </p>
        </div>
        <div class="Why_to_choose_us">
          <h1>Why to choose us?</h1>
          <p>
            Dummy text is also used to demonstrate the appearance of different typefaces and layouts, and in general the content of dummy text is nonsensical.
            Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns
             and repetitions in texts.
           </p>
           <ul>
             <li>We want to give our helping hand to you.</li>
             <li>We are really very much interested to provide you our services.</li>
             <li>We are 24 X 7 available for you.</li>
             <li>We are well experienced at Ram Bhanawase & Associate.</li>
           </ul>
        </div>
      </div>
      <div class="col2">
        <h1>Our guidelines</h1>
        <marquee width="100%" direction="up" scrollamount="3" height="370px" onMouseOver="this.stop()" onMouseOut="this.start()">
          <?php
            $sql = "SELECT * FROM guideline";
            $result = mysqli_query($conn, $sql);
            $product_count = mysqli_num_rows ($result);
            if($product_count > 0){
              while($row = mysqli_fetch_array($result)){
                ?>
                  <a href="guide/<?php echo $row['filename']; ?>"><h2><?php echo $row['title']; ?></h2> </a>
                  <a href="guide/<?php echo $row['filename']; ?>"> <p><?php echo $row['description']; ?></p></a>
                  <hr style="border-top: 1px solid red;">
                <?php
              }
            }

          ?>
        </marquee>
      </div>
    </div>



    <!-- <script src="js/home.js" charset="utf-8"></script> -->
  </body>
</html>
