
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ram Bhanawase & Associates</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="includes/css/header.css">
    <link rel="stylesheet" href="includes/css/footer.css">
    <link rel="stylesheet" href="user/css/home.css">
    <link rel="stylesheet" href="user/css/services.css">
    <link rel="stylesheet" href="user/css/keypoints.css">
    <link rel="stylesheet" href="user/css/about.css">
    <link rel="stylesheet" href="user/css/contact.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style media="screen">
         #myBtn {
          display: none;
          position: fixed;
          bottom: 20px;
          right: 0px;
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

          #myBtn:hover {
          background-color: #555;
          }

          #myBtn1{
            position: fixed;
            bottom: 100px;
            right: 0px;
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

            #myBtn1:hover {
              background-color: #555;
            }

    </style>
  </head>
  <body>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>
    <a href="https://wa.me/918421185133?text=Hello,%20I%20want%20to%20talk%20with%20you." target="_blank"><button id="myBtn1" title="Contact on whatsapp"><i class="fa fa-whatsapp"></i></button></a>

    <div class="model0">
      <?php include 'includes/header.php'; ?>
    </div>
    <div class="model1">
      <?php include 'user/home.php'; ?>
    </div>
    <div class="model2">
      <?php include 'user/services.php'; ?>
    </div>
    <div class="model3">
      <?php include 'user/kaypoints.php'; ?>
    </div>
    <div class="model4">
      <?php include 'user/about.php'; ?>
    </div>
    <div class="model5">
      <?php include 'user/contact.php'; ?>
    </div>
    <div class="model6">
      <?php include 'includes/footer.php'; ?>
    </div>


    <script>
      //Get the button
      var mybutton = document.getElementById("myBtn");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;

      }
     </script>
  </body>
</html>
