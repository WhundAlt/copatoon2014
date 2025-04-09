<!DOCTYPE html>
<html>
<head>
	<title>Club Penguin Times</title>
	<style>
	    body { background-color: #FFFFCC; height: 100%; margin: 0; }
	    embed { position: absolute; top: 0; bottom: 0; left: 0; right: 0; margin: auto; }
        label { color: black; }
        #nextlast a { display: inline-block; }
        #top { text-align: center; }
	</style>
</head>
<body>
 <div id="top"><br />
	<form action="index.php">
		<label for="id">Issue Number:</label>
        <input id="id" max="265" min="1" name="id" type="number" value="<?php echo $_GET['id'] ?>">
        <input type="submit" value="Submit">
	</form><br />
   <div id="nextlast">
    <a href="index.php?id=<?php echo $_GET['id'] - 1 ?>"><button>Last Issue</button></a>
    <a href="index.php?id=<?php echo $_GET['id'] + 1 ?>"><button>Next Issue</button></a>
    <embed height="480" src="News<?php echo $_GET['id'] ?>.swf" width="760">
   </div>
 </div>
</body>
</html>