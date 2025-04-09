<html>
<head>
  <title>About The Python Challenge</title>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-346180-19"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-346180-19');
</script>

  <link rel="stylesheet" type="text/css" href="pc/style.css">

<script language="javascript">
function changeImage(name, newone) {
	if (document.images) {
		oldsrc=document[name].src;
		document[name].src = oldsrc.substring(0,oldsrc.length-5)+newone+'.jpg';
	}
}

function preloadImages() {
	var i;
	prImages = new Array();
	for (i=0; i < preloadImages.arguments.length; i++)
		{
			prImages[i] = new Image(); 
			prImages[i].src = preloadImages.arguments[i];
		}	
}

</script>

</head>

<body 
onLoad="preloadImages('buttons/about_b2.jpg','buttons/home_b2.jpg', 'buttons/forum_b2.jpg','buttons/guestbook_b2.jpg','buttons/solutions_b2.jpg','buttons/faq_b2.jpg')">

<center>
	<a href="index.php"><img src="buttons/home_b1.jpg" 
name="home" target="main" border="0" onMouseOver="changeImage('home', '2')" onMouseOut="changeImage('home', '1')"/></a>
	<a href="about.php"><img src="buttons/about_b1.jpg" name="about" target="main" border="0" onMouseOver="changeImage('about', '2')" onMouseOut="changeImage('about', '1')"/></a>
	<a href="faq.php"><img src="buttons/faq_b1.jpg" name="faq" 
border="0" onMouseOver="changeImage('faq', '2')" onMouseOut="changeImage('faq', '1')"/></a>
	<a href="https://groups.google.com/forum/#!forum/python-challenge" target="_blank"><img src="buttons/forum_b1.jpg" 
name="forum" border="0" onMouseOver="changeImage('forum', '2')" 
onMouseOut="changeImage('forum', '1')"/></a>
	<a href="http://wiki.pythonchallenge.com/" target="_blank"><img src="buttons/solutions_b1.jpg" name="solutions" border="0" onMouseOver="changeImage('solutions', '2')" onMouseOut="changeImage('solutions', '1')"/></a>
	<a href="guestbook/"><img src="buttons/guestbook_b1.jpg" name="guestbook" border="0" onMouseOver="changeImage('guestbook', '2')" onMouseOut="changeImage('guestbook', '1')"/></a>
<table>
<tr>
<td valign="top">
<br><br>
<center>
<img src="logo.jpg"><br><br>
<table width="50%">
<tr><td>
<center>
<font color="gold">
<p>Python Challenge is a game in which each level can be solved by a bit 
of (<a href="http://www.python.org">Python</a>) programming.

<p>The Python Challenge was written by <a href="http://www.thesamet.com/">Nadav Samet</a>.

<p>All levels can be solved by straightforward and very short<sup>1</sup> scripts.

<p>Python Challenge welcomes programmers of all languages. You will be 
able to solve most riddles in any programming language, but some of them 
will require Python.

<p>Sometimes you'll need extra modules. All can be downloaded for free from the internet.

<p>It is just for fun - nothing waits for you at the end.

<p>Keep the scripts you write - they might become useful.

<br><br></center>
<sup>1</sup> well, except of level 32.<br>
</td></tr></table>
</td><td>
<br><br>
<script type="text/javascript"><!--
google_ad_client = "pub-9393140612616722";
google_ad_width = 160;
google_ad_height = 600;
google_ad_format = "160x600_as";
google_ad_type = "text_image";
google_ad_channel ="";
google_color_border = ["FF9900","B4D0DC"];
google_color_bg = ["FFCC00","ECF8FF"];
google_color_link = ["0000FF","0000CC"];
google_color_url = ["0000FF","008000"];
google_color_text = ["000000","6F6F6F"];
//--></script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</td></tr>
</table>

<center>
</body>
</html>
