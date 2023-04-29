<?php @include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <!-- font link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- css -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'header.php'; ?>
<section class="signup-form">
  <div class="signup-form-form">
 
    <form action="includes/login.inc.php" method="post"> 
      <label><h1>Login</h1></label>
      <input type="text" name="uid" placeholder="Username/Email...">
      <input type="password" name="pwd" placeholder="Password...">
      <button type="submit" name="submit">Login</button>
    </form>
  </div>
  <?php
    /* Error Message */
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "wronglogin") {
        echo "<p>Wrong login!</p>";
      }
    }
  ?>
</section>
	<!-- js link -->
	<script src="js/script.js"></script>

</body>
</html>