<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>xcode.no | NOT robot</title>
  <link rel="stylesheet" href="css/x.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
</head>
<body>
  <h1 id="logoH1" class="animated flipInX">xCode.no | NOT robot</h1>
  <p>The new Netlify without server!</p>

  <form action="notrobot.php" method="get">
    <h2>Google recaptcha tester</h2>
    <input type="text" name="testerx" value="123">
    <label for="testerx"></label>
    <div class="g-recaptcha" data-sitekey="6Lcg1HwUAAAAAI-RSpRwzR9wStmpQtnVsbKF_u6n"></div>
    <button type="submit" name="button">Send form</button>
  </form>

  <?php
  if(isset($_GET["g-recaptcha-response"])) {
    echo "<p>G-recaptcha-response: ". $_GET["g-recaptcha-response"] ."</p>";
  }

  ?>
  <div class="rightTop">
    <p id="dater"></p>
  </div>

  <script src="js/x.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

</body>

</html>
