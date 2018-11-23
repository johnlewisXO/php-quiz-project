<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Your result!</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<header>
		<h1>Generalized!</h1>
	</header>
<?php

	// declared an array for determining the correct answer for each inner array within the multi-dimensional array
	$answers = array('2', '1', '2', '0', '3', '0', '2', '0', '1', '3', '0', '2', '2', '1', '0', '3', '3', '1', '3', '0');

	// declared a count variable for determining amount of correct answers
	$count=0;

	// for each loop used for determining amount of correct answers

	if (isset($_POST)) {

		// declared results variable for returning results or the mult-dimensional array 
		$results = array();
		foreach ($answers as $answer) {
	
				if ($_POST[$count] == $answer) {
					array_push($results, $answer);
				}
				$count++;
		 }
		 
		 // declared total variable for calculating total number of correct answers
		$total = count($results);
			switch ($total) {
				case ($total < 5):
					?>

						<!-- used section as a container for results commenting  -->
						<section class="poor">	
							<div class="result"><?php echo $total; ?><span>/20</span></div>

							<h2>Putrid</h2>
							<p>Just Putrid..</p>
						</section>
					<?php
					break;

				case ($total < 10 && $total >= 5):
					?>
						<!-- used section as a container for results commenting  -->
						<section class="poor">	

							<!-- returning the results by using total variable -->
							<div class="result"><?php echo $total; ?><span>/20</span></div>

							<h2>Try harder!</h2>
							<p>	You can do better.</p>
						</section>
					<?php
					break;
				
				case ($total >= 10 && $total < 16):
					?>

						<!-- used section as a container for results commenting  -->
						<section class="average">	
							<!-- returning the results by using total variable -->
							<div class="result"><?php echo $total; ?><span>/20</span></div>

							<h2>Almost there..</h2>
							<p>	Do some reserch on history and current events!	</p>
						</section>
					<?php
					break;

				case ($total >= 16) :
					?>

						<!-- used section as a container for results commenting  -->
						<section class="outstanding">

							<!-- returning the results by using total variable -->
							<div class="result"><?php echo $total; ?><span>/20</span></div>
							<h2>Congratulations</h2>
							<p>Great result!</p>
						</section>
						<?php
					break;
		}
	}

?> 

		

	<section class="submit">
		<form action="index.php" method="post">
		<h2>Consistency is key!</h2>

		<!-- submit input used for retaking the test option -->
		<input type="submit" value="Lets do it again">
		
		</form>
	</section>
	
</body>
</html>