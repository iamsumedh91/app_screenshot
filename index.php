<!DOCTYPE html>
<html ng-app = "angularApp">
<?php
  if(isset($_POST['img_val']))
  {
    screen();
  }
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">

  <title>ScreenShot App</title>

  <!-- Bootstrap CSS -->    
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="assets/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="assets/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="assets/css/style1.css?version=109" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/style-responsive.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  <script src="//code.angularjs.org/1.3.0-rc.1/angular-route.min.js"></script>
  <script src = "//code.angularjs.org/1.6.4/angular-cookies.js"></script>
  
  <script src="html2canvas/base64.js"></script>
  <script src="html2canvas/canvas2image.js"></script>
  <script src="html2canvas/html2canvas.js"></script>
  <script src="html2canvas/jquery.plugin.html2canvas.js"></script>
  <script src="assets/js/app.js"></script>
</head>
<body ng-controller = "Home">

  <form method="POST" enctype="multipart/form-data" id="myForm" action="index.php">
    <input type="hidden" name="img_val" id="img_val" value="" />
    <!--<input type="submit" value="Take a Screenshot" onclick="capture();" />-->
  </form>
  <a href="#bookmark">Go to bookmark!</a>
  <div id="targetDiv">
    <div id="secondaryDiv">
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
  </div>
  <div id="bookmark">
    <h1>This one is second Div</h1>
    <h1>This one is second Div</h1>
    <h1>This one is second Div</h1>
  </div>
  <div id="tertionaryDiv">
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
    <h1>This is to be screenshot</h1>
    <p>This one is also Captured</p>
  </div>
  </div>
  <?php
  function screen()
  {
    //Show the image
    //echo '<img src="'.$_POST['img_val'].'" />';
 
    //Get the base-64 string from data
    $filteredData=substr($_POST['img_val'], strpos($_POST['img_val'], ",")+1);
 
    //Decode the string
    $unencodedData=base64_decode($filteredData);

    //Save the image
    $filename = 'img_'.date('Y-m-d-H-s').'.png';
    file_put_contents($filename, $unencodedData);
  }
?> 
</body>

</html>