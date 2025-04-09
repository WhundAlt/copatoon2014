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

<title>source.php</title>
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
Source of &ldquo;source.php&rdquo;.
<div class=right>
68 lines, 2 KBytes. &nbsp;
Last modified 12:01 am, 18th September 2016 PDT.
</div>
</div> <!-- cr -->
<div class=pad><span class=n>      </span></div>
<div class=source><span class=n>    1 </span> &lt;?php	// Emacs settings: -*- mode: Fundamental; tab-width: 4; -*-
<span class=n>    2 </span> 
<span class=n>    3 </span> function oneFile($name) {
<span class=n>    4 </span>     // Output an anchor tag for listing the given file
<span class=n>    5 </span>     ?&gt;
<span class=n>    6 </span> &lt;a href=&quot;lister.php?file=&lt;?php echo htmlentities(urlencode($name)) ?&gt;&quot;&gt;&lt;?php
<span class=n>    7 </span>     echo htmlentities($name) ?&gt;&lt;/a&gt;&lt;?php
<span class=n>    8 </span> }
<span class=n>    9 </span> 
<span class=n>   10 </span> ?&gt;
<span class=n>   11 </span> &lt;!DOCTYPE HTML&gt;
<span class=n>   12 </span> &lt;html manifest=&quot;manifest.php&quot;&gt;
<span class=n>   13 </span> &lt;head&gt;
<span class=n>   14 </span> &lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=utf-8&quot;&gt;
<span class=n>   15 </span> &lt;meta name=&quot;viewport&quot; content=&quot;width=440&quot;&gt;
<span class=n>   16 </span> &lt;link href=&quot;minesweeper.css&quot; rel=stylesheet&gt;
<span class=n>   17 </span> &lt;style type=&quot;text/css&quot;&gt;
<span class=n>   18 </span> .smileys {
<span class=n>   19 </span>     margin: 1em;
<span class=n>   20 </span>     text-align: center;
<span class=n>   21 </span>     background-color: #cccccc;
<span class=n>   22 </span> }
<span class=n>   23 </span> .smileys img {
<span class=n>   24 </span>     padding: 0.25em;
<span class=n>   25 </span>     vertical-align: middle;
<span class=n>   26 </span>     width: 24px;
<span class=n>   27 </span>     height: 24px;
<span class=n>   28 </span> }
<span class=n>   29 </span> &lt;/style&gt;
<span class=n>   30 </span> &lt;title&gt;Minesweeper source code&lt;/title&gt;
<span class=n>   31 </span> &lt;/head&gt;
<span class=n>   32 </span> &lt;body&gt;
<span class=n>   33 </span> &lt;div class=&quot;main limited&quot;&gt;
<span class=n>   34 </span> &lt;div class=title&gt;
<span class=n>   35 </span> Minesweeper Source Code
<span class=n>   36 </span> &lt;/div&gt;
<span class=n>   37 </span> For educational purposes, you may read the source code of this program.
<span class=n>   38 </span> If you want to do anything other than read it, and execute it on this web
<span class=n>   39 </span> site, ask &lt;a href=&quot;../me/&quot;&gt;me&lt;/a&gt; for permission.
<span class=n>   40 </span> &lt;p&gt;
<span class=n>   41 </span> The HTML comes in three top-level pages
<span class=n>   42 </span> (&lt;?php oneFile(&quot;index.php&quot;) ?&gt;,
<span class=n>   43 </span> &lt;?php oneFile(&quot;intermediate.php&quot;) ?&gt;, and
<span class=n>   44 </span> &lt;?php oneFile(&quot;expert.php&quot;) ?&gt;).
<span class=n>   45 </span> From the browser&amp;rsquo;s view, each of these is static HTML,
<span class=n>   46 </span> but on the server they each used a script (&lt;?php oneFile(&quot;minesweeper.php&quot;)
<span class=n>   47 </span> ?&gt;) to construct the playing area.
<span class=n>   48 </span> &lt;p&gt;
<span class=n>   49 </span> The game play is implemented entirely in your browser, by the client-side sc
<span class=n>      </span> ript (&lt;?php oneFile(&quot;minesweeper.js&quot;) ?&gt;).
<span class=n>   50 </span> &lt;p&gt;
<span class=n>   51 </span> The page layout is controlled by a style sheet
<span class=n>   52 </span> (&lt;?php oneFile(&quot;minesweeper.css&quot;) ?&gt;).
<span class=n>   53 </span> The graphics use some Unicode characters (&amp;ldquo;&amp;#x221E;&amp;rdquo;, 
<span class=n>   54 </span> &amp;ldquo;&amp;#x2600;&amp;rdquo;, and &amp;ldquo;&amp;#x00D7;&amp;rdquo;)
<span class=n>   55 </span> and the smiley images:
<span class=n>   56 </span> &lt;div class=smileys&gt;
<span class=n>   57 </span> &lt;img src=&quot;bored.gif&quot; alt=bored&gt;&amp;nbsp;
<span class=n>   58 </span> &lt;img src=&quot;erasing.gif&quot; alt=erasing&gt;&amp;nbsp;
<span class=n>   59 </span> &lt;img src=&quot;happy.gif&quot; alt=happy&gt;&amp;nbsp;
<span class=n>   60 </span> &lt;img src=&quot;sad.gif&quot; alt=sad&gt;
<span class=n>   61 </span> &lt;/div&gt;
<span class=n>   62 </span> There&amp;rsquo;s also this page (&lt;?php oneFile(&quot;source.php&quot;) ?&gt;),
<span class=n>   63 </span> and some files related to my overall site design.
<span class=n>   64 </span> &lt;hr class=decoration&gt;
<span class=n>   65 </span> &lt;?php require(&quot;mlinks-php.txt&quot;) ?&gt;
<span class=n>   66 </span> &lt;/div&gt;
<span class=n>   67 </span> &lt;/body&gt;
<span class=n>   68 </span> &lt;/html&gt;
</div>
<div class=pad><span class=n>      </span></div>
<div class=cr>End of listing</div>
</div> <!-- inner -->
</div> <!-- outer -->
</body>
</html>
