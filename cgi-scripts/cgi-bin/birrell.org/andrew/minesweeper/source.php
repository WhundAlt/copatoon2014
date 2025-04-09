<!DOCTYPE HTML>
<html manifest="manifest.php">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=440">
<link href="minesweeper.css" rel=stylesheet>
<style type="text/css">
.smileys {
	margin: 1em;
	text-align: center;
	background-color: #cccccc;
}
.smileys img {
	padding: 0.25em;
	vertical-align: middle;
	width: 24px;
	height: 24px;
}
</style>
<title>Minesweeper source code</title>
</head>
<body>
<div class="main limited">
<div class=title>
Minesweeper Source Code
</div>
For educational purposes, you may read the source code of this program.
If you want to do anything other than read it, and execute it on this web
site, ask <a href="../me/">me</a> for permission.
<p>
The HTML comes in three top-level pages
(<a href="lister.php?file=index.php">index.php</a>,
<a href="lister.php?file=intermediate.php">intermediate.php</a>, and
<a href="lister.php?file=expert.php">expert.php</a>).
From the browser&rsquo;s view, each of these is static HTML,
but on the server they each used a script (<a href="lister.php?file=minesweeper.php">minesweeper.php</a>) to construct the playing area.
<p>
The game play is implemented entirely in your browser, by the client-side script (<a href="lister.php?file=minesweeper.js">minesweeper.js</a>).
<p>
The page layout is controlled by a style sheet
(<a href="lister.php?file=minesweeper.css">minesweeper.css</a>).
The graphics use some Unicode characters (&ldquo;&#x221E;&rdquo;, 
&ldquo;&#x2600;&rdquo;, and &ldquo;&#x00D7;&rdquo;)
and the smiley images:
<div class=smileys>
<img src="bored.gif" alt=bored>&nbsp;
<img src="erasing.gif" alt=erasing>&nbsp;
<img src="happy.gif" alt=happy>&nbsp;
<img src="sad.gif" alt=sad>
</div>
There&rsquo;s also this page (<a href="lister.php?file=source.php">source.php</a>),
and some files related to my overall site design.
<hr class=decoration>
<div style="font-style: italic">
<a class=goHomeLink href="../" title="Andrew&rsquo;s Home Page">Home</a>
<a href="./">Introduction</a> &hellip;
<a href="intermediate.php">Intermediate</a> &hellip;
<a href="expert.php">Expert</a>
</div>
</div>
</body>
</html>
