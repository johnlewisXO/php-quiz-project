<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Results</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<header>
		<h1>Quizzed Off!</h1>
	</header>
<?php
	$answers = array('3', '2', '3', '1', '4', '1', '3', '1', '2', '4', '1', '3', '3', '1', '2', '4', '4', '2', '4', '3');

	$count=0;

	if (isset($_POST)) {
		$results = array();
		foreach ($answers as $answer) {
	
				if ($_POST[$count] == $answer) {
					array_push($results, $answer);
				}
				$count++;
	 	}
		$total = count($results);
			switch ($total) {
				case ($total < 5):
					?>
						<section class="bad">	
							<div class="score"><?php echo $total; ?><span>/20</span></div>

							<h1>
								Come On!
												
							</h1>
							<p>
								Ugh... Are you even trying?
							</p>
						</section>
					<?php
					break;

				case ($total < 10 && $total >= 5):
					?>
						<section class="bad">	
							<div class="score"><?php echo $total; ?><span>/20</span></div>

							<h1>
								Oof!											
							</h1>
							<p>
								Maybe you should try a little harder next time.	
							</p>
						</section>
					<?php
					break;
				
				case ($total >= 10 && $total < 16):
					?>
						<section class="okay">	
							<div class="score"><?php echo $total; ?><span>/20</span></div>

							<h1>
								Uhm...
							</h1>
							<p>
								Somebody forgot to do their homework. This is terribly un-Evan-like of you.
							</p>
						</section>
					<?php
					break;

				case ($total >= 16) :
					?>
						<section class="excellent">
							<div class="score"><?php echo $total; ?><span>/20</span></div>
							<h1>
								Congratulations
							</h1>
							<p>
								This is excellent, however, even though you've just achieved a perfect score I'm sure Evan would have found some way to achieve better.
							</p>
						</section>
					<?php
					break;

				

		}
	}
?>

	<section class="submit">
		<form action="index.php" method="post">
		<h2>Retake Test</h2>
		<input type="submit" value="Retake">
		
		</form>
	</section>
	
</body>
</html>