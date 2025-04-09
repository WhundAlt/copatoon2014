<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"> 
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>CSS experiment: pixel art</title>
		
		
		<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.8.0r4/build/reset/reset-min.css" />
		<style type="text/css">
			html, body {
				width:100%;
				height:100%;
				background-color:#000;
			}
		
			html, body, div {
				padding:0;
				margin:0;
				border:none;
			}
			
			div#base {
				float:left;
				width:240px;
				height:240px;				
				background-color:#fff;
			}
			
			div#base a{
				float:left;
				width:30px;
				height:30px;
				padding:0;
				margin:0;
				font-size:0px;
				background-color:#fff;
			}
			
			div#base a:hover, div#base a:focus{
				background-color:#ccc;
			}
			
			div#base a:visited{
				background-color:#333;
			}
			
			iframe {
				width:1px;
				height:1px;
				display:none;
			}
			
			h1 {
				font-size: 14px;
				font-weight: bold;
			}
			
			h2 {
				font-size: 14px;
				font-weight: normal;
			}
			
			p {
				margin: 5px 0;
				font-size: 12px;
				color: #CCC;
			}
			
			div#info {
				background-color: #666;
				float: left;
				color: #fff;
				margin: 0;
				padding: 10px;
				width: 256px;
				font-family:Verdana, Geneva, Arial, Helvetica, sans-serif;
			}
			
			div#info form{
				background-color: #555;
				padding: 10px;
				margin: 30px auto;
			}
			
			div#info form *{
				display: block;
				padding: 0;
				margin: 0;
			}
			
			div#info form select, div#info form input {
				margin: 0 0 10px 0;
			}
			
			div#info a{
				color: #fff;
			}
		</style>
		
	</head>
	<body>
		
		<div id="base"><a href='?dummy=99leR8-0' target='dummyFrame'></a><a href='?dummy=99leR8-1' target='dummyFrame'></a><a href='?dummy=99leR8-2' target='dummyFrame'></a><a href='?dummy=99leR8-3' target='dummyFrame'></a><a href='?dummy=99leR8-4' target='dummyFrame'></a><a href='?dummy=99leR8-5' target='dummyFrame'></a><a href='?dummy=99leR8-6' target='dummyFrame'></a><a href='?dummy=99leR8-7' target='dummyFrame'></a><a href='?dummy=99leR8-8' target='dummyFrame'></a><a href='?dummy=99leR8-9' target='dummyFrame'></a><a href='?dummy=99leR8-10' target='dummyFrame'></a><a href='?dummy=99leR8-11' target='dummyFrame'></a><a href='?dummy=99leR8-12' target='dummyFrame'></a><a href='?dummy=99leR8-13' target='dummyFrame'></a><a href='?dummy=99leR8-14' target='dummyFrame'></a><a href='?dummy=99leR8-15' target='dummyFrame'></a><a href='?dummy=99leR8-16' target='dummyFrame'></a><a href='?dummy=99leR8-17' target='dummyFrame'></a><a href='?dummy=99leR8-18' target='dummyFrame'></a><a href='?dummy=99leR8-19' target='dummyFrame'></a><a href='?dummy=99leR8-20' target='dummyFrame'></a><a href='?dummy=99leR8-21' target='dummyFrame'></a><a href='?dummy=99leR8-22' target='dummyFrame'></a><a href='?dummy=99leR8-23' target='dummyFrame'></a><a href='?dummy=99leR8-24' target='dummyFrame'></a><a href='?dummy=99leR8-25' target='dummyFrame'></a><a href='?dummy=99leR8-26' target='dummyFrame'></a><a href='?dummy=99leR8-27' target='dummyFrame'></a><a href='?dummy=99leR8-28' target='dummyFrame'></a><a href='?dummy=99leR8-29' target='dummyFrame'></a><a href='?dummy=99leR8-30' target='dummyFrame'></a><a href='?dummy=99leR8-31' target='dummyFrame'></a><a href='?dummy=99leR8-32' target='dummyFrame'></a><a href='?dummy=99leR8-33' target='dummyFrame'></a><a href='?dummy=99leR8-34' target='dummyFrame'></a><a href='?dummy=99leR8-35' target='dummyFrame'></a><a href='?dummy=99leR8-36' target='dummyFrame'></a><a href='?dummy=99leR8-37' target='dummyFrame'></a><a href='?dummy=99leR8-38' target='dummyFrame'></a><a href='?dummy=99leR8-39' target='dummyFrame'></a><a href='?dummy=99leR8-40' target='dummyFrame'></a><a href='?dummy=99leR8-41' target='dummyFrame'></a><a href='?dummy=99leR8-42' target='dummyFrame'></a><a href='?dummy=99leR8-43' target='dummyFrame'></a><a href='?dummy=99leR8-44' target='dummyFrame'></a><a href='?dummy=99leR8-45' target='dummyFrame'></a><a href='?dummy=99leR8-46' target='dummyFrame'></a><a href='?dummy=99leR8-47' target='dummyFrame'></a><a href='?dummy=99leR8-48' target='dummyFrame'></a><a href='?dummy=99leR8-49' target='dummyFrame'></a><a href='?dummy=99leR8-50' target='dummyFrame'></a><a href='?dummy=99leR8-51' target='dummyFrame'></a><a href='?dummy=99leR8-52' target='dummyFrame'></a><a href='?dummy=99leR8-53' target='dummyFrame'></a><a href='?dummy=99leR8-54' target='dummyFrame'></a><a href='?dummy=99leR8-55' target='dummyFrame'></a><a href='?dummy=99leR8-56' target='dummyFrame'></a><a href='?dummy=99leR8-57' target='dummyFrame'></a><a href='?dummy=99leR8-58' target='dummyFrame'></a><a href='?dummy=99leR8-59' target='dummyFrame'></a><a href='?dummy=99leR8-60' target='dummyFrame'></a><a href='?dummy=99leR8-61' target='dummyFrame'></a><a href='?dummy=99leR8-62' target='dummyFrame'></a><a href='?dummy=99leR8-63' target='dummyFrame'></a></div>
		<div id="info">
			<h1>CSS experiment: pixel art</h1>
			<p>
				Author: <a href="http://www.onthewings.net/">Andy Li</a><br />
				Version: 2009-11-24
			</p>
			<h2>Click on the white area to draw some pixel art.<br />
			The drawing is auto stored in your browsing history (try refresh or open a new tab with same url).<br />
			Notice that there is no eraser... or you clear your browsing history :P</h2>
			<p>This is a CSS-only experiment. It works on IE(6,7,8), FireFox, Safari, Chrome, Opera and more. Keyboard natvigation(tab and enter) is supported too!</p>
			<p>PHP is used in the back-end to generate the HTML and getting a formated random id.</p>
			<p><a href="http://blog.onthewings.net/2009/11/24/css-only-experiements/">See my blog post for more info.</a></p>
			<form action="">
				<p>
					<label for="res">resolution</label>
					<select id="res" name="res">
						<option >2</option><option >3</option><option >4</option><option >5</option><option >6</option><option >7</option><option selected="selected">8</option><option >9</option><option >10</option><option >11</option><option >12</option><option >13</option><option >14</option><option >15</option><option >16</option><option >17</option><option >18</option><option >19</option><option >20</option><option >21</option><option >22</option><option >23</option><option >24</option><option >25</option><option >26</option><option >27</option><option >28</option><option >29</option><option >30</option>
					</select>
				</p>		
				<p>
					<input type="submit" value="new drawing" />
					<input type="hidden" name="rnd" value="qlyu" />
				</p>
			</form>
		</div>
		
		<iframe id="dummyFrame" name="dummyFrame" />
		<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
		try {
		var pageTracker = _gat._getTracker("UA-5072043-1");
		pageTracker._trackPageview();
		} catch(err) {}
		</script>
		
	</body>
</html>
