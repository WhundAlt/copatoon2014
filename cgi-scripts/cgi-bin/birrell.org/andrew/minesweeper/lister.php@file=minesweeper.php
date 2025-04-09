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

<title>minesweeper.php</title>
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
Source of &ldquo;minesweeper.php&rdquo;.
<div class=right>
46 lines, 1.9 KBytes. &nbsp;
Last modified 6:32 pm, 3rd May 2016 PDT.
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
<span class=n>    9 </span> // PHP to generate the playing area HTML                                  //
<span class=n>   10 </span> //                                                                        //
<span class=n>   11 </span> // Usage:                                                                 //
<span class=n>   12 </span> //   $cols = 8;                                                           //
<span class=n>   13 </span> //   $rows = 8;                                                           //
<span class=n>   14 </span> //   require(&quot;minesweeper.php&quot;);                                          //
<span class=n>   15 </span> //                                                                        //
<span class=n>   16 </span> ////////////////////////////////////////////////////////////////////////////
<span class=n>   17 </span> 
<span class=n>   18 </span> if (!isset($cols) || !isset($rows)) {
<span class=n>   19 </span>     exit(&quot;Minesweeper.php: missing parameter(s)&quot;);
<span class=n>   20 </span> }
<span class=n>   21 </span> 
<span class=n>   22 </span> ?&gt;
<span class=n>   23 </span> &lt;!-- The following HTML is generated by a script.  See ./source.php --&gt;
<span class=n>   24 </span> &lt;TABLE ID=sqTable onmouseup=&quot;return false&quot;&gt;
<span class=n>   25 </span> &lt;TR&gt;&lt;TD CLASS=score COLSPAN=&lt;?php echo $cols?&gt;&gt;
<span class=n>   26 </span> &lt;DIV CLASS=counter ID=mines&gt;&amp;nbsp;&lt;/DIV&gt;
<span class=n>   27 </span> &lt;DIV CLASS=counter ID=timer&gt;&amp;nbsp;&lt;/DIV&gt;
<span class=n>   28 </span> &lt;IMG ID=smiley SRC=&quot;erasing.gif&quot; ALT=&quot;&quot;
<span class=n>   29 </span>     onmousedown=&quot;return clickSmiley(event)&quot;&gt;
<span class=n>   30 </span> &lt;/TD&gt;&lt;/TR&gt;
<span class=n>   31 </span> &lt;?php
<span class=n>   32 </span>     for ($row = 0; $row &lt; $rows; $row++) { ?&gt;
<span class=n>   33 </span> &lt;TR&gt;
<span class=n>   34 </span> &lt;?php
<span class=n>   35 </span>         for ($col = 0; $col &lt; $cols; $col++) { ?&gt;
<span class=n>   36 </span> &lt;TD CLASS=sq ID=&quot;sq-&lt;?php echo $row * $cols + $col ?&gt;&quot;
<span class=n>   37 </span>   onmousedown=&quot;return clickSq(event,&lt;?php echo $row * $cols + $col ?&gt;)&quot;
<span class=n>   38 </span>   &gt;&amp;nbsp;&lt;/TD&gt;
<span class=n>   39 </span> &lt;?php
<span class=n>   40 </span>         } ?&gt;
<span class=n>   41 </span> &lt;/TR&gt;
<span class=n>   42 </span> &lt;?php
<span class=n>   43 </span> }
<span class=n>   44 </span> ?&gt;
<span class=n>   45 </span> &lt;/TABLE&gt;
<span class=n>   46 </span> &lt;!-- End of script-generated HTML --&gt;
</div>
<div class=pad><span class=n>      </span></div>
<div class=cr>End of listing</div>
</div> <!-- inner -->
</div> <!-- outer -->
</body>
</html>
