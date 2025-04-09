<!DOCTYPE html>
<html>
<head>
	<title>Club Penguin Books</title>
	<style>
	    body { background-color: white; height: 100%; margin: 0; }
	    label { color: black; }
        td { text-align: center; }
        h2 { font-family: "Arial Black", Gadget, sans-serif; }
	</style>
</head>
<body>
	<center>
		<embed height="480" src="<?php echo $_GET['lang'] . "/books/" . $_GET['book'] . ".swf" ?>" width="760">
		<h2>Bookshelf</h2>
		<table border="1" class="tftable">
			<tr>
                <td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=dare"><img src="dare.png" alt="Truth or Dare" height="150"></a></td>
				<td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=EPF-handbook"><img src="EPF-handbook.png" alt="EPF Handbook" height="150"></a></td>
				<td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=fairyfables"><img src="fairyfables.png" alt="Fairy Fables" height="150"></a></td>
				<td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=franky"><img src="franky.png" alt="Franky's First Show" height="150"></a></td>
				<td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=give_tour"><img src="give_tour.png" alt="How to be a Great Tour Guide" height="150"></a></td>
			</tr>
			<tr>
				<td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=journal"><img src="journal.png" alt="The Journal of Captain Rockhopper" height="150"></a></td>
				<td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=spice"><img src="spice.png" alt="The Spice of Life" height="150"></a></td>
				<td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=stowaway"><img src="stowaway.png" alt="Rockhopper and the Stowaway" height="150"></a></td>
				<td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=tales07"><img src="tales07.png" alt="Penguin Tales Volume 1" height="150"></a></td>
				<td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=tales08"><img src="tales08.png" alt="Penguin Tales Volume 2" height="150"></a></td>
			</tr>
			<tr>
                <td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=tales09"><img src="tales09.png" alt="Penguin Tales Volume 3" height="150"></a></td>
				<td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=xmas_book1"><img src="xmas_book1.png" alt="A Penguin Christmas Carol" height="150"></a></td>
				<td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=xmas_book2"><img src="xmas_book2.png" alt="Christmas on Rockhopper Island" height="150"></a></td>
				<td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=xmas_book3"><img src="xmas_book3.png" alt="Puffle Pals Adventures: Music Makes Magic" height="150"></a></td>
				<td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=year0506"><img src="year0506.png" alt="Club Penguin Yearbook 2005-2006" height="150"></a></td>
			</tr>
			<tr>
                <td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=year0607"><img src="year0607.png" alt="Club Penguin Yearbook 2006-2007" height="150"></a></td>
				<td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=year0708"><img src="year0708.PNG" alt="Club Penguin Yearbook 2007-2008" height="150"></a></td>
				<td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=year0809"><img src="year0809.PNG" alt="Club Penguin Yearbook 2008-2009" height="150"></a></td>
				<td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=year0910"><img src="year0910.PNG" alt="Club Penguin Yearbook 2009-2010" height="150"></a></td>
				<td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=year1011"><img src="year1011.PNG" alt="Club Penguin Yearbook 2010-2011" height="150"></a></td>
			</tr>
			<tr>
				<td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=year1112"><img src="year1112.PNG" alt="Club Penguin Yearbook 2011-2012" height="150"></a></td>
				<td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=year1213"><img src="year1213.PNG" alt="Club Penguin Yearbook 2012-2013" height="150"></a></td>
				<td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=year1314"><img src="year1314.PNG" alt="Club Penguin Yearbook 2013-2014" height="150"></a></td>
				<td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=year1415"><img src="year1415.PNG" alt="Club Penguin Yearbook 2014-2015" height="150"></a></td>
				<td><a href="index.php?lang=<?php echo $_GET['lang']?>&book=year1516"><img src="year1516.PNG" alt="Club Penguin Yearbook 2015-2016" height="150"></a></td>
			</tr>
		</table>
	</center>
</body>
</html>