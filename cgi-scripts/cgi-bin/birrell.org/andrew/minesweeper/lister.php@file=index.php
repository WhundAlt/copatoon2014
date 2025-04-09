<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=656">

<style type="text/css"><!--

A:link { color: #000099; }
A:active { color: #ff0000; }
A:visited { color: #000099; }
A:hover { color: #006600; }

body {
	margin: 0px;
	padding: 0px;
	-webkit-text-size-adjust: 100%;
	-moz-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
}
.outer {
	position: absolute;
	top: 0px;
	bottom: 8px; /* allows for .divider height */
	width: 100%;
}
.divider, .dividerHighlight {
    border: 2px outset #dddddd;
    background-color: #bbbbbb;
    height: 4px;
    cursor: pointer;
}
.dividerHighlight {
	border-style: inset !important;
}
.inner {
	overflow: auto;
	-webkit-overflow-scrolling: touch;
}
#topPart {
	height: 50%;
	display: none;
}
#bottomPart {
	height: 100%;
}
.cr {
	background-color: #999999;
	color: #ffffff;
	border-top: 2px #cccccc ridge;
	border-bottom: 2px #cccccc ridge;
	padding-left: 1em;
	padding-right: 1em;
	font-size: 0.75em;
	line-height: 1.5;
}
.right {
	float: right;
}
.source, .pad {
	white-space: pre;
	font-family: monospace, courier, "courier new", lucida;
	font-size: 13px;
}
div.pad {
	line-height: 0.5em;
	overflow: hidden;
}
span.n {
	background-color: #bbbbbb;
	color: #ffffff;
	border-left: 1px #999999 solid;
	border-right: 1px #999999 solid;
}
@media screen and (max-device-width: 500px) {
	/* disable the split-screen machinery so that UI hiding and landscape
	   mode work nicely on the iPhone */
	.outer {
		position: static;
	}
	.divider {
		display: none;
	}
}
--></style>

<script type="text/javascript"><!--

var cloned = false;
var divided = false;
var savedPos = 0;

function splitUnsplit() {
    // Flip between split and un-split views
    //
    var topPart = document.getElementById("topPart");
    var bottomPart = document.getElementById("bottomPart");
	if (!cloned) {
		// topPart.innerHTML = bottomPart.innerHTML;
		var children = bottomPart.childNodes;
		for (var i = 0; i < children.length; i++) {
			topPart.appendChild(children[i].cloneNode(true));
		}
		cloned = true;
	}
    if (divided) {
		savedPos = topPart.scrollTop;
        topPart.style.display = "none";
        bottomPart.style.height = "100%";
    } else {
        topPart.style.display = "block";
        bottomPart.style.height = "50%";
		topPart.scrollTop = savedPos;
    }
    divided = !divided;
    return false;
}

function mouseDown(elt) {
	elt.className = "dividerHighlight";
	return true;
}

function mouseUpOut(elt) {
	elt.className = "divider";
	return true;
}

--></script>

<title>index.php</title>
</head>

<body>
<div class=outer>
<div id=topPart class=inner></div>
<div class=divider
	title="Click to split or un-split the window"
	onmousedown="return mouseDown(this)"
	onmouseup="return mouseUpOut(this)"
	onmouseout="return mouseUpOut(this)"
	onclick="return splitUnsplit()">
</div>
<div id=bottomPart class=inner>
<div class=cr>
Source of &ldquo;index.php&rdquo;.
<div class=right>
75 lines, 2.8 KBytes. &nbsp;
Last modified 12:02 am, 18th September 2016 PDT.
</div>
</div> <!-- cr -->
<div class=pad><span class=n>      </span></div>
<div class=source><span class=n>    1 </span> &lt;?php // Emacs settings: -*- mode: Fundamental; tab-width: 4; -*-
<span class=n>    2 </span> 
<span class=n>    3 </span> ////////////////////////////////////////////////////////////////////////////
<span class=n>    4 </span> //                                                                        //
<span class=n>    5 </span> // Minesweeper, implemented in JavaScript                                 //
<span class=n>    6 </span> //                                                                        //
<span class=n>    7 </span> // Copyright 1998-2007, Andrew D. Birrell                                 //
<span class=n>    8 </span> //                                                                        //
<span class=n>    9 </span> // PHP for main page                                                      //
<span class=n>   10 </span> //                                                                        //
<span class=n>   11 </span> ////////////////////////////////////////////////////////////////////////////
<span class=n>   12 </span> 
<span class=n>   13 </span> $cols = 8;
<span class=n>   14 </span> $rows = 8;
<span class=n>   15 </span> $mines = 10;
<span class=n>   16 </span> 
<span class=n>   17 </span> header(&quot;Content-Type: text/html; charset=UTF-8&quot;);
<span class=n>   18 </span> 
<span class=n>   19 </span> ?&gt;
<span class=n>   20 </span> &lt;!DOCTYPE HTML&gt;
<span class=n>   21 </span> &lt;HTML manifest=&quot;manifest.php&quot;&gt;
<span class=n>   22 </span> &lt;HEAD&gt;
<span class=n>   23 </span> &lt;META HTTP-EQUIV=&quot;Content-Type&quot; CONTENT=&quot;text/html; charset=UTF-8&quot;&gt;
<span class=n>   24 </span> &lt;META NAME=&quot;Description&quot; CONTENT=&quot;The classic Minesweeper game, with
<span class=n>   25 </span> three difficulty levels, running entirely in your web browser. Works
<span class=n>   26 </span> when you are offline. No ads.&quot;&gt;
<span class=n>   27 </span> &lt;meta name=&quot;viewport&quot; content=&quot;width=440&quot;&gt;
<span class=n>   28 </span> &lt;SCRIPT TYPE=&quot;text/javascript&quot; SRC=&quot;minesweeper.js&quot;&gt;&lt;/SCRIPT&gt;
<span class=n>   29 </span> &lt;LINK HREF=&quot;minesweeper.css&quot; REL=stylesheet&gt;
<span class=n>   30 </span> &lt;style type=&quot;text/css&quot;&gt;
<span class=n>   31 </span> #sqTable {
<span class=n>   32 </span>     float: right;
<span class=n>   33 </span>     margin-left: 1em;
<span class=n>   34 </span> }
<span class=n>   35 </span> &lt;/style&gt;
<span class=n>   36 </span> &lt;TITLE&gt;Minesweeper in Javascript&lt;/TITLE&gt;
<span class=n>   37 </span> &lt;/HEAD&gt;
<span class=n>   38 </span> &lt;BODY onload=&quot;init(&lt;?php echo &quot;$cols, &quot; . ($cols*$rows) . &quot;, $mines&quot; ?&gt;)&quot;&gt;
<span class=n>   39 </span> &lt;DIV CLASS=&quot;main limited&quot;&gt;
<span class=n>   40 </span> &lt;?php require(&quot;minesweeper.php&quot;) ?&gt;
<span class=n>   41 </span> &lt;DIV CLASS=title&gt;
<span class=n>   42 </span> &lt;IMG SRC=&quot;../titles/minesweeper.png&quot; ALT=&quot;Minesweeper&quot;&gt;
<span class=n>   43 </span> &lt;/DIV&gt;
<span class=n>   44 </span> Clear the mines!
<span class=n>   45 </span> Expose squares one at a time by clicking on them.
<span class=n>   46 </span> If the square you click on is vacant, you'll get to see how many of its
<span class=n>   47 </span> neighbors have mines in them (0 through 8);
<span class=n>   48 </span> but if the square has a mine in it, all the mines will explode.
<span class=n>   49 </span> &lt;P&gt;
<span class=n>   50 </span> Shift-click (or right-click) on a square to flag it as a suspected mine. 
<span class=n>   51 </span> Do it again to mark it as questionable, and again to clear the mark.
<span class=n>   52 </span> When you've exposed all the vacant squares, you win.
<span class=n>   53 </span> If a mine explodes, you lose.
<span class=n>   54 </span> Click on the face to start a new game.
<span class=n>   55 </span> &lt;P&gt;
<span class=n>   56 </span> The left-hand counter shows the number of mines less the number of squares
<span class=n>   57 </span> that you've flagged (correctly or not).
<span class=n>   58 </span> &lt;P&gt;
<span class=n>   59 </span> The version on this page is 8 by 8 with 10 mines.
<span class=n>   60 </span> See also the &lt;A HREF=&quot;intermediate.php&quot;&gt;intermediate&lt;/A&gt;
<span class=n>   61 </span> (16 by 16 with 40 mines) and &lt;A HREF=&quot;expert.php&quot;&gt;expert&lt;/A&gt;
<span class=n>   62 </span> (30 by 16 with 99 mines) versions.
<span class=n>   63 </span> &lt;!-- There's also an &lt;A HREF=&quot;java.html&quot;&gt;older version&lt;/A&gt;,
<span class=n>   64 </span> which was written in Java. --&gt;
<span class=n>   65 </span> &lt;/P&gt;
<span class=n>   66 </span> This program is written in Javascript, by
<span class=n>   67 </span> &lt;A HREF=&quot;../me/&quot;&gt;Andrew Birrell&lt;/A&gt;.
<span class=n>   68 </span> You are welcome to read its &lt;A HREF=&quot;source.php&quot;&gt;source code&lt;/A&gt;.
<span class=n>   69 </span> Use at your own risk!
<span class=n>   70 </span> &lt;HR CLASS=decoration&gt;
<span class=n>   71 </span> &lt;?php require(&quot;../parts/goHome-php.txt&quot;) ?&gt;
<span class=n>   72 </span> &amp;nbsp;
<span class=n>   73 </span> &lt;/DIV&gt;
<span class=n>   74 </span> &lt;/BODY&gt;
<span class=n>   75 </span> &lt;/HTML&gt;
</div>
<div class=pad><span class=n>      </span></div>
<div class=cr>End of listing</div>
</div> <!-- inner -->
</div> <!-- outer -->
</body>
</html>
