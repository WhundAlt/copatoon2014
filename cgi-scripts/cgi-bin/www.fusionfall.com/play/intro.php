<head>
	<title>Cartoon Network Universe: FusionFall</title>
</head>

<body>
	<center>
		<img src="img/bg_globalnav_blueline.png"/>
		<div id="introcontainer">

			<a href="main.php">
				<img id="skipbutton" src="img/btn_skip_off.png" onmouseover="this.src='img/btn_skip_on.png';" onmouseout="this.src='img/btn_skip_off.png';"/></a>
			<br/>
			<video width="704" height="396" oncanplay="this.play(); this.volume= 0.2" onended="window.location = 'main.php'">
				<source src="intro.mp4" type="video/mp4"/>
			</video>
		</div>
	</center>
</body>

<style>
body {
	background-repeat: repeat-x;
	background-color: black;
	background-image: url("img/bg_unitygame.jpg");
	margin: 0px;
}

#introcontainer {
	background: url("img/bg_unitygame4.png") center / auto no-repeat;
	text-align: center;
	width: 1057px;
	height: 651px;
	margin-top: 6px;
}

#skipbutton {
	position: relative;
	left: 420px;
	top: 15px;
}

#introcontainer video {
	position: relative;
	margin-top: 84px;
}

a:link {color: black;}      /* unvisited link */
a:visited {color: black;}   /* visited link */
a:hover {color: black;}     /* mouse over link */
a:active {color: black;}    /* selected link */

</style>