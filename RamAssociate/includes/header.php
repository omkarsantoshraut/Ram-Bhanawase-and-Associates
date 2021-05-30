<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Ram Bhanawase & Associates</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>
    <link rel="stylesheet" href="css/header.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
  </head>
  <body>
    <div class="name">
      <p>Ram Bhanawase & Associates</p>
    </div>
    <div class="nav">
      <div class="outer1">
        <a href="img/logo.jpg"> <img src="img/logo.jpg" alt="Image Not Found..."> </a>
      </div>
      <div class="outer2">
        <div class="column1">
            <!-- Contact details -->
            <a href="https://wa.me/918421185133?text=Hello,%20I%20want%20to%20talk%20with%20you." target="_blank"> <p><i class="fa fa-whatsapp"></i> +91-8421185133</p> </a>
            <a href="mailto:rbtax10@gmail.com?Subject=I%20want%20to%20talk%20with%20you." target="_blank"> <p>&#9993; rbtax10@gmail.com</p> </a>
        </div>
        <div class="column2">
          <a href="https://rambhanawaseandassociates.000webhostapp.com/"> <p>Home</p> </a>
          <a href="https://rambhanawaseandassociates.000webhostapp.com/#services"> <p>Services</p> </a>
          <a href="https://rambhanawaseandassociates.000webhostapp.com/#keypoints"> <p>Key Points</p> </a>
          <a href="user/gallery.php" target="_blank"> <p>Gallery</p> </a>
          <a href="user/video.php" target="_blank"> <p>Videos</p> </a>
          <a href="https://rambhanawaseandassociates.000webhostapp.com/#aboutus"> <p>About Us</p> </a>
          <a href="https://rambhanawaseandassociates.000webhostapp.com/#contactus"> <p>Contact Us</p> </a>
        </div>
      </div>
    </div>

    <div class="nav1" id="nav1">
      <div class="res0">
        <a href="#"> <img src="img/logo.jpg" alt="Image Not Found..."> </a>
      </div>
      <div class="res1">
        <a href="#">Ram Bhanawase & Associates</a>
      </div>
      <div class="res2" onclick="showmenu()">
        &#9776;
      </div>
    </div>


    <div class="nav3" id="nav3">
      <div class="head">
        <div class="res01">
          <a href="#"> <img src="img/logo.jpg" alt="Image Not Found..."> </a>
        </div>
        <div class="res11">
          <a href="#">Ram Bhanawase & Associates</a>
        </div>
        <div class="res21" onclick="hidemenu()">
          &#9587;
        </div>
      </div>
      <br> <br><br><br>
      <div class="nav31">
        <hr>
        <a href="https://wa.me/918421185133?text=Hello,%20I%20want%20to%20talk%20with%20you." target="_blank"> <p>+91-8421185133</p> </a>
        <a href="mailto:rbtax10@gmail.com?Subject=I%20want%20to%20talk%20with%20you." target="_blank"> <p>rbtax10@gmail.com</p> </a>
      </div>
      <hr>
      <div class="nav32">
        <a href="https://rambhanawaseandassociates.000webhostapp.com/"> <p>Home</p> </a>
          <a href="https://rambhanawaseandassociates.000webhostapp.com/#services"> <p>Services</p> </a>
          <a href="https://rambhanawaseandassociates.000webhostapp.com/#keypoints"> <p>Key Points</p> </a>
           <a href="user/gallery.php" target="_blank"> <p>Gallery</p> </a>
          <a href="user/video.php" target="_blank"> <p>Videos</p> </a>
          <a href="https://rambhanawaseandassociates.000webhostapp.com/#aboutus"> <p>About Us</p> </a>
          <a href="https://rambhanawaseandassociates.000webhostapp.com/#contactus"> <p>Contact Us</p> </a>
      </div>
      <br>
    </div>

    <script type="text/javascript">
      function showmenu(){
        document.getElementById("nav1").style.display = "none";
        document.getElementById("nav3").style.display = "block";
      }
      function hidemenu(){
        document.getElementById("nav1").style.display = "block";
        document.getElementById("nav3").style.display = "none";
      }
    </script>
  </body>
</html>
