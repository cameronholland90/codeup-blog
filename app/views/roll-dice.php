<html>
<head>
	<title>Roll Dice</title>
</head>
<body>
	<h1><?= "Random Number: " . $rand . "</h1><h1> Your Guess: " . $guess ?></h1>
	<h2>
		<?php if ($rand == $guess) { ?>
			You guessed correctly!
		<?php } else { ?>
			You guessed wrong!
		<?php } ?>
	</h2>
</body>
</html>