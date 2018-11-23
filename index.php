<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/styles.css">
	<title>Generalized</title>
</head>
<body id="test">
	<header class="header">
		<h1>Generalized!</h1>
		<p>Take this general knowledge quiz to test yourself on current and historical world events.</p>
		<img src="img/quizTime.png" alt="">
	
	</header>

	<form action='results.php' method="post">


<?php

	// declared multi-dimensional array
	// inner arrays had 4 options for input
	$quizPieces = array(

		array('quiz' => 'what is the name of the nuclear plant that was permanently shut down follwing the horrific nuclear meltdown in ukraine?', 
		'moskovia', 
		'milnerton', 
		'chernobyl', 
		'brussles'),

		array('quiz' => 'What is the capital of Czech Republic?', 
		'ostrava', 
		'prague', 
		'pilsen', 
		'olomouc'),

		array('quiz' => 'What gets bigger the more you take away from it , and smaller the more you put in it?', 
		'ocean', 
		'sky', 'grave', 
		'house'),

		array('quiz' => 'Who is the monarch of the united kingdom?', 
		'Queen Elizabeth', 
		'Prince Harry', 
		'Prince William', 
		'Evelyn Rothschild'),

		array('quiz' => 'What is the value of pi, correct to 4 decimal places?', '3.1435', 
		'3.4126', 
		'3.1479', 
		'3.1415'),

		array('quiz' => 'Write the scientific name for lie detector which is used by the police for proving lies?', 
		'polygraph', 
		'liargraph', 'xylograph', 
		'mentagraph'),

		array('quiz' => 'What is the name of military intelligence organization of israel?', 
		'mi6', 
		'fsb', 
		'mossad', 
		'nypd'),

		array('quiz' => 'Which virus causes bleeding in the body due to the destruction of blood vessels?', 
		'ebola', 
		'tb', 
		'hiv', 
		'swine flu'),

		array('quiz' => 'Which woman is selected in us senate firstly?', 'michelle obama', 
		'hillary rodham clinton', 
		'ellen de generes', 
		'oprah winfrey'),

		array('quiz' => 'Which country has the world’s one-fourth oil reserve?', 'iran', 
		'nigeria', 
		'china', 
		'saudi arabia'),

		array('quiz' => 'Which is the biggest city of washington state?', 
		'seattle', 
		'denver', 
		'california', 
		'new york'),

		array('quiz' => 'What is the date of world aids day?', 
		'5 november', 
		'18 july', 
		'1 december', 
		'23 april'),

		array('quiz' => 'Who is the first black president of usa?', 
		'will smith', 
		'barack obama', 
		'donald trump', 
		'sean paul'),

		array('quiz' => 'Which is the purest water of nature?', 
		'rain water', 
		'ocean water', 
		'drain water', 
		'tap water'),

		array('quiz' => 'Name the pope who had visited most countries?', 
		'pope escobar', 
		'john paul 2', 
		'jean baptiste', 'jerry lorenzo'),

		array('quiz' => 'The next day of christmas commonly known as?', 
		'fun day ', 
		'new years day', 
		'the best day', 
		'boxing day'),

		array('quiz' => 'Which holy scripture is the most translated in the world?', 'quran', 
		'yellow pages', 
		'book of hours', 
		'bible'),

		array('quiz' => 'Which is the largest consumer country of gold?', 
		'england', 
		'india', 
		'south africa', 
		'saudi arabia'),

		array('quiz' => 'Who is the legendary keeper of the nba 6 rings title?', 'Jimmy Carter', 
		'James LeBron', 
		'Chris Bosch', 
		'Michael Jordan'),

		array('quiz' => 'How many planets are there in our solar system?', 
		'9', 
		'12', 
		'10', 
		'35')
		
	);

?>
<?php

	// implemented for loop for calculating number of correct answers

	for ($input = 0; $input < count($quizPieces); $input++) { ?>
	
	 <!-- used a section as a container for array data  -->
	<section class='box'>
			<h2>
				Question <span class="num"> <?php echo $input+1 ?> </span>
			</h2>
			<p>
				<!-- return quiz total answers answered with a paragraph tag -->
				<?php echo $quizPieces[$input]['quiz']; ?>
			</p>
			<section class='grid'>
			<?php 
				$x = 0;
			for ($n = $input*4; $n < ($input+1)*4; $n++) { 

				?>
				<input type='radio' name="<?php echo $input; ?>" value="<?php echo $x ?>" id="<?php echo $n ?>"><label class="option" for="<?php echo $n ?>"><?php echo $quizPieces[$input][$x] ?></label>
			<?php
					$x++; 
		
		} ?>

			<!-- radio input used for chosing options in the quiz array -->
			<input type="radio" name="<?php echo $input; ?>" value="4" checked="checked">
			</section>
		</section>

	<?php }
?>
		<!-- submit input used for results submission in the array -->
	<section class="submit">
		<h2>Submit Your Results!</h2>
			<input type="submit" value="Submit!">
	</section>
	</form>

	<footer> &copy John Paul Lewis | 2018</footer>

</body>
</html>