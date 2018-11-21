<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Your Score!</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<header>
		<h1>Generalized!</h1>
	</header>
<?php
	$answers = array('2', '1', '2', '0', '3', '0', '2', '0', '1', '3', '0', '2', '2', '1', '0', '3', '3', '1', '3', '0');

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

							<h2>Putrid</h2>
							<p>Just Putrid..</p>
						</section>
					<?php
					break;

				case ($total < 10 && $total >= 5):
					?>
						<section class="bad">	
							<div class="score"><?php echo $total; ?><span>/20</span></div>

							<h2>Try harder!</h2>
							<p>	You can do better.</p>
						</section>
					<?php
					break;
				
				case ($total >= 10 && $total < 16):
					?>
						<section class="okay">	
							<div class="score"><?php echo $total; ?><span>/20</span></div>

							<h2>Almost there..</h2>
							<p>	Do some reserch on history and current events!	</p>
						</section>
					<?php
					break;

				case ($total >= 16) :
					?>
						<section class="excellent">
							<div class="score"><?php echo $total; ?><span>/20</span></div>
							<h2>Congratulations</h2>
							<p>Great score!</p>
						</section>
						<?php
					break;
		}
	}

?> 

		

	<section class="submit">
		<form action="index.php" method="post">
		<h2>Consistency is key!</h2>
		<input type="submit" value="Lets do it again">
		
		</form>
	</section>
	
</body>
</html>