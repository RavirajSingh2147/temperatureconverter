<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Temperature</title>
</head>
<body>
	<header>
		<h1>Temperature Converter </h1>
		<div class="main_div">
			<div class="left_div">
				<img src="icon.jpg">
			</div>
			<div class="Right_div">
				<form method="POST">
				<input type="text" name="num1" placeholder="Enter the number" class="input1">
				<div class="selection">
					<label>Celsius</label>
					<input type="radio" name="units" value="cel">

					<label>Fahrenheit</label>
					<input type="radio" name="units" value="feh">
				</div>
				<input type="submit" name="Submit" value="Convert Now" class="btn">
				</form>
				<div>
					<p>
						<?php
							if (isset($_POST['Submit'])) {
								$num1=$_POST['num1'];
								$temp=$_POST['units'];
								if ($temp == "cel") {
									$result= $num1 * 9 / 5 + 32;
									echo "The conversion of Celsius to Fahrenheit is {$result}  ";
								}else{
									$result= ($num1 - 32) * 5 / 9;
									echo "The conversion of Fahrenheit to Celsius is {$result}  ";
								}

	
							}
						?>
					</p>
				</div>
			</div>
		</div>
	</header>
</body>
</html>


