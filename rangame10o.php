<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="rangame10o.css">
<?php require 'ranfunc10o.php'; ?>
<title>Random Day</title>
</head>
<body>

<h1>Hey Hey it's RANDOM Day!</h1>
<div id="genrand"><?php genrand(); ?></div>
<div id="showrand">Test to see if random number is set: <?php echo $r; ?></div>

</body>
</html>