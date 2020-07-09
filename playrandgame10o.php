<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="randcss10o.css">
<?php require 'randfunc10o.php'; ?>
<title>Random Day</title>
</head>
<body>

<h1>Hey Hey it's RANDOM Day!</h1>
<p>Can you guess the random number (1-1000) in 10 tries?</p>
<div id="genrand"><?php genrand(); ?></div>
<div id="showrand">Test to see if random number is set: <?php echo $r; ?></div>

</body>
</html>