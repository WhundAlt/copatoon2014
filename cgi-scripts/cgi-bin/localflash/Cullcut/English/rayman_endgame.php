<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CONGRATULATIONS!</title>
</head>
<?php
//Receives the variables from Flash file
$score = $_POST['_level0.affichescore'];
$level = $_POST['_level0.affichelevel'];
$kill = $_POST['_level0.affichekilled'];
$text = '<br>Congratulations! You reached level '. $level .'.<br>You scored '. $score .'points and killed '. $kill .' robo-pirates!<br>Hero. You deserve delicious spaghetti. We call it buoni gli spaghetti. Go eat some.<br>Or post your score on the forum if you think you scored big. We will see about that. Heh heh heh...<br>';
?>
<body>
<?php
//Prints the variables in HTML.
echo($text);
?>
</body>
</html>