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
<script src="js/script.js"></script>
<section>
<div class="container3">
	<div class="slider">
			<div class="slides">
				<input type="radio" name="radio-btn" id="radio1">
				<input type="radio" name="radio-btn" id="radio2">
				<input type="radio" name="radio-btn" id="radio3">
				<input type="radio" name="radio-btn" id="radio4">
				<div class="slide first">
					<a href = "products.php"><img src="images/slider3.jpg" alt=""></a>
				</div>
				<div class="slide">
					<a href = "products.php"><img src="images/slider4.jpg" alt=""></a>
				</div>
				<div class="slide">
					<a href = "products.php"><img src="images/slider5.jpg" alt=""></a>
				</div>
				<div class="slide">
					<a href = "products.php"><img src="images/slider1.png" alt=""></a>
				</div>
				<div class="navigation-auto">
					<div class="auto-btn1"></div>
					<div class="auto-btn2"></div>
					<div class="auto-btn3"></div>
					<div class="auto-btn4"></div>
				</div>	
			</div>
			<div class="navigation-manual">
				<label for="radio1" class="manual-btn"></label>
				<label for="radio2" class="manual-btn"></label>
				<label for="radio3" class="manual-btn"></label>
				<label for="radio4" class="manual-btn"></label>
			</div>
	</div>
</div>

<!-- Slider  -->
	<script type="text/javascript">
		var counter = 1;
		setInterval(function(){
			document.getElementById('radio' + counter).checked = true;
			counter++;
			if(counter > 4){
				counter =1;
			}
		}, 8000);
	</script>

	<!-- js link -->
	<script src="js/script.js"></script>

</section>
</body>
</html>