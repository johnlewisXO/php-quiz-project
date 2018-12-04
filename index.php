<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>My PHP-Quiz</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/styles.css"/>
	<script src="main.js"></script>

</head>
<body>

 	<header>
		<h1>Generalized!</h1>

		<p>Take this general knowledge quiz to test yourself.</p>

		<img src="img/quiz.gif" alt="">
	</header>

	<?php 

	session_start();

	$questions = array(
		1 => array(
			'Question' => '1. CSS stands for',
			'Answers' => array(
				'A' => 'Computer Styled Sections',
				'B' => 'Cascading Style Sheets',
				'C' => 'Crazy Solid Shapes'
			),
			'CorrectAnswer' => 'B'
		),
		2 => array(
			'Question' => '2. What is the Capital of the Philippines',
			'Answers' => array(
				'A' => 'Cebu City',
				'B' => 'Davao City',
				'C' => 'Manila City'
			),
			'CorrectAnswer' => 'C'
		),
		3 => array(
			'Question' => '3. What is the Capital of the Czech Republic?',
			'Answers' => array(
				'A' => 'Brussels',
				'B' => 'Prague',
				'C' => 'Menova'
			),
			'CorrectAnswer' => 'B'
		),
		4 => array(
			'Question' => '4. Who is the president of South Africa?',
			'Answers' => array(
				'A' => 'Thabo Mbeki',
				'B' => 'Jacob Zuma',
				'C' => 'Cyril Ramaphosa'
			),
			'CorrectAnswer' => 'C'
		),
		5 => array(
			'Question' => '5. Which country holds 1/4 of the worlds oil reserves?',
			'Answers' => array(
				'A' => 'Iran',
				'B' => 'Saudi Arabia',
				'C' => 'China'
			),
			'CorrectAnswer' => 'B'
		),
		6 => array(
			'Question' => '6. How many planets are there in our solar system?',
			'Answers' => array(
				'A' => '10',
				'B' => '34',
				'C' => '9'
			),
			'CorrectAnswer' => 'C'
		),
		7 => array(
			'Question' => '7. What is the correct term used for the lie detector test used by law enforcement?',
			'Answers' => array(
				'A' => 'Polygraph',
				'B' => 'Metagraph',
				'C' => 'Xylograph'
			),
			'CorrectAnswer' => 'A'
		),
		8 => array(
			'Question' => '8. Who is the record holder of the NBA 6 rings title?',
			'Answers' => array(
				'A' => 'Kyrie Irving',
				'B' => 'James LeBron',
				'C' => 'Michael Jordan'
			),
			'CorrectAnswer' => 'C'
		),
		9 => array(
			'Question' => '9. Who invented the telephone?',
			'Answers' => array(
				'A' => 'Albert Einstein',
				'B' => 'Alexander Graham Bell',
				'C' => 'Charles Darwin'
			),
			'CorrectAnswer' => 'B'
		),
		10 => array(
			'Question' => '10. What gets bigger the more you take away from it, and smaller the more you add to it?',
			'Answers' => array(
				'A' => 'Grave',
				'B' => 'Sky',
				'C' => 'Wall'
			),
			'CorrectAnswer' => 'A'
		),
		11 => array(
			'Question' => '11. Who is the person responsible for creating Facebook?',
			'Answers' => array(
				'A' => 'Donald Trump',
				'B' => 'Mark Zuckerberg',
				'C' => 'Jim Parsons'
			),
			'CorrectAnswer' => 'B'
		),
		12 => array(
			'Question' => '12. How many months in a year have 28 days?',
			'Answers' => array(
				'A' => '1',
				'B' => '3',
				'C' => '12'
			),
			'CorrectAnswer' => 'C'
		),
		13 => array(
			'Question' => '13. What is heavier: a pound of feathers or a pound of stones?',
			'Answers' => array(
				'A' => 'The feathers',
				'B' => 'The stones',
				'C' => 'Exactly the same'
			),
			'CorrectAnswer' => 'C'
		),
		14 => array(
			'Question' => '14. A farmer has twenty bananas and sells all of them except for seven. How many does he have left?',
			'Answers' => array(
				'A' => '7',
				'B' => '13',
				'C' => '0'
			),
			'CorrectAnswer' => 'A'
		),
		15 => array(
			'Question' => '15. What breaks and never falls, and what falls and never breaks?',
			'Answers' => array(
				'A' => 'Day breaks and night falls',
				'B' => 'Glass',
				'C' => 'Sky'
			),
			'CorrectAnswer' => 'A'
		),
		16 => array(
			'Question' => '16. Which country is the largest consumer of gold?',
			'Answers' => array(
				'A' => 'America',
				'B' => 'England',
				'C' => 'India'
			),
			'CorrectAnswer' => 'C'
		),
		17 => array(
			'Question' => '17. Which holy scripture book is the most translated worldwide? ',
			'Answers' => array(
				'A' => 'Quran',
				'B' => 'Bible',
				'C' => 'Yellow Page'
			),
			'CorrectAnswer' => 'B'
		),
		18 => array(
			'Question' => '18. What is the most stolen object of all time?',
			'Answers' => array(
				'A' => 'Bread',
				'B' => 'Lighter',
				'C' => 'Cellphone'
			),
			'CorrectAnswer' => 'B'
		),
		19 => array(
			'Question' => '19. What is the popular nintendo game of the two plumber brothers?',
			'Answers' => array(
				'A' => 'Mario Bros',
				'B' => 'Snow Bros',
				'C' => 'Black bros'
			),
			'CorrectAnswer' => 'A'
		),
		20 => array(
			'Question' => '20. What can be broken but cannot be held?',
			'Answers' => array(
				'A' => 'Glass',
				'B' => 'Feelings',
				'C' => 'Promise'
			),
			'CorrectAnswer' => 'C'
		),
	);

	if (isset($_POST['answers'])){
		$answers = $_POST['answers']; // Get submitted answers.
		$counter = '0';

		// Checking the answers 
		// $questionsno variable used for determining correct answer 
		foreach ($questions as $questionsno => $value){

			// echo the question
			echo $value['Question'].'<br />';

			if ($answers[$questionsno] != $value['CorrectAnswer']){
				echo 'You answered: <span style="color: red;">'.$value['Answers'][$answers[$questionsno]].'</span><br>'; // Replace style with a class
				echo 'Correct answer: <span style="color: green;">'.$value['Answers'][$value['CorrectAnswer']].'</span>';
			} else {
				echo 'Correct answer: <span style="color: green;">'.$value['Answers'][$answers[$questionsno]].'</span><br>'; // Replace style with a class
				echo 'You are correct: <span style="color: green;">'.$value['Answers'][$answers[$questionsno]].'</span>'; $counter++;

			}

			?> 

		<section class="results"> 
			<?php
			// echo line break and horizontal breaks
			echo '<br /><hr><br />'; 
				if ($counter=="") { 
					$counter='0';
					$results = "Come on! Try harder!Your score: $counter/20"; 
				} 
				else { 
						$results = "Your score: $counter/20"; 
					}
				}  ?>
		</section>  
			
			<?php

			// echo results
			echo $results;

	} else {  
	?>
	<section class="main">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="quiz">
		
			<!-- loop for determining correct or incorrect answer -->
			<?php foreach ($questions as $questionsno => $value){ ?>
			<section class="box" >
				<h3><?php echo $value['Question']; ?></h3>
			
				<?php 
					foreach ($value['Answers'] as $letter => $answer){ 
					$label= 'question-'.$questionsno.'-answers-'.$letter;
				?>

				<section class="block">
					<div class="answers">
						<input type="radio" name="answers[<?php echo $questionsno; ?>]" id="<?php echo $label; ?>" value="<?php echo $letter; ?>" required/>
						<label class="option" for="<?php echo $label; ?>"><?php echo $letter; ?>) <?php echo $answer; ?> </label>
					</div>
				</section>
				<?php } ?>
			</section>
			

			<?php } ?>
		</section>
			<input class="submit" type="submit" value="Submit Quiz" required/>

		</form>
		<?php 
		}
		?>

		<footer>
			&copy John Paul Lewis | 2018
		</footer>
	
	
</body>
</html>