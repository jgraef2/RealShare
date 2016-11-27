<!DOCTYPE html>
<html>
  <head>
    <title>Real 121</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="cropit/dist/jquery.cropit.js"></script>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="cropit/css/style.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendor/device-mockups/device-mockups.css">

    <!-- Theme CSS -->
    <link href="css/new-age.css" rel="stylesheet">

    <!-- JOSH CSS -->
    <link href="css/joshcss.css" rel="stylesheet">
    <link href="css/freelancer.css" rel="stylesheet">
    <link href="css/joshs.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

    <script>
    var urlphotoid = window.location.search;
    function assignid(urlphotoid) {
      document.getElementById('photoid').value = urlphotoid;
    }
    </script>
  </head>
  <body onload="assignid(urlphotoid)">
    <div class="introt">
      Real 121
    </div>
<div class="topmenu">
  <div class="div1">
    <h1>Send One Print</h1>
  </div>
  <div class="div2">
    <h1>To Anyone</h1>
  </div>
  <div class="div3">
    <h1>For A Dollar</h1>
  </div>
</div>

<div class="image-editor" id="upload">
  <h1>2. Recipient</h1>

<!-- THIS FORM SENDS CROPPED PHOTO TO SERVER WITH FILE NAME AS VARIABLE
  <form method="POST" name="uploadForm" action="upload.php" target="_self" enctype="multipart/form-data">
    <input type="file" name ="fileToUpload" class="cropit-image-input" id="uploader">
    <div class="cropit-preview" id="cropit-previewer"></div>
    <div class="captionstyle"><input type="text" name="caption" maxlength="45"></div>
    <button type="button" class="rotate-cw" id="rotatebtn"><i class="fa fa-rotate-right fa-2x"></i></button>
    <div id="sliderdiv"><input type="range" class="cropit-image-zoom-input" id="slider"></div>
    <button type="button" class="export" style="display:none;">Export</button>
    <input type="submit" value="Submit" name='submit'>
  </form>
   -->
<!-- THIS FORM REDIRECTS TO PAYPAL WITH TYPE FIELDS & VARIABLE TO MATCH WITH PHOTO UPLOADED -->
<div class="form">
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="WLM4WJF59KMRL">
      <table id="paytab">
          <tr><td><input type="hidden" name="on0" value="Name">Full Name:</td></tr><tr><td><input type="text" name="os0" maxlength="200"></br></td></tr>
          <tr><td><input type="hidden" name="on1" value="Address">Address:</td></tr><tr><td><input type="text" name="os1" maxlength="200"></br></td></tr>
          <tr><td><input type="hidden" name="on2" value="City/State/Zip">City, State, and Zip:</td></tr><tr><td><input type="text" name="os2" maxlength="200"></br></td></tr>
          <tr><td><input type="hidden" name="on3" value="Photo ID"></td></tr><tr><td><input type="hidden" id="photoid" name="os3" maxlength="200" value=""></br></td></tr>
          <tr><td><input type="hidden" name="no_shipping" value="1"></td></tr>
      </table>
<!-- failPHP  $photoid = $_GET['photoid']; echo $photoid;  -->
      <input style="width=100vw; margin:auto; color:black;padding:20px" type="submit" src="http://ryanswarts.com/assets/gmail-button.png" width="200px" border="0" name="Send" alt="PayPal - The safer, easier way to pay online!">
      <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
  </form>
</div>

</div>
  <footer>
      <div class="container">
          <p>&copy; 2016 Josh Graef. All Rights Reserved.</p>
          <ul class="list-inline">
              <li>
                  <a href="#">Customer Service</a>
              </li>
              <li>
                  <a href="#">Contact</a>
              </li>
              <li>
                  <a href="#">FAQ</a>
              </li>
          </ul>
      </div>
  </footer>

  <script>
    $(function() {
      $
    });


    $(function() {
      $('.image-editor').cropit({
        imageState: {
          src: 'http://lorempixel.com/500/400/',
        },
      });

      $('.rotate-cw').click(function() {
        $('.image-editor').cropit('rotateCW');
      });
      $('.rotate-ccw').click(function() {
        $('.image-editor').cropit('rotateCCW');
      });
      //$('.export').click(function() {
      //  var imageData = $('.image-editor').cropit('export');
      //  window.open(imageData);
      //});
    });

//Testing solution from stack overflow
//Initiate Cropper
$('.image-editor').cropit();

//Assign Export Function
$('.export').click(function() {
    var imageData = $('.image-editor').cropit('export', {
        type: 'image/jpeg',
        quality: 1,
        originalSize: true,
    });

    //Set value of hidden input to base64
    $("#hidden_base64").val(imageData);

    //Pause form submission until input is populated
    window.setTimeout(function() {
        document.upload_form.submit();
        alert(imageData);
    }, 1000);
});
  </script>

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87818238-1', 'auto');
  ga('send', 'pageview');

</script>
  </body>
</html>
