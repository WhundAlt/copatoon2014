																	<!--
     -------------------------------------------------
     © 4T2 Multimedia 2020     Web: www.4T2.co.uk

                               WE ARE THE SOLUTION ...
     -------------------------------------------------
																	-->

<HTML>
<HEAD>
<TITLE>Polycell - Scores</TITLE>
<STYLE>
a:link 	{color: #EF3739; text-decoration: none;}
a:visited 	{color: #EF3739; text-decoration: none;}
a:active 	{color: #EF3739; text-decoration: none;}
a:hover 	{color: #EF3739; text-decoration: underline;}
.white a:link 	{color: #FFFFFF; text-decoration: none;}
.white a:visited 	{color: #FFFFFF; text-decoration: none;}
.white a:active 	{color: #FFFFFF; text-decoration: none;}
.white a:hover 	{color: #FFFFFF; text-decoration: underline;}
LI				{list-style-image: url(/images/template/bullet.gif);}
</STYLE>
<SCRIPT LANGUAGE=JavaScript>
if (document.images)
	{
	var instructions = new Image();
	instructions.src = '/images/menu/instructions.gif';
	var instructions_on = new Image();
	instructions_on.src = '/images/menu/instructions_over.gif';
	var play = new Image();
	play.src = '/images/menu/play.gif';
	var play_on = new Image();
	play_on.src = '/images/menu/play_over.gif';
	var scores = new Image();
	scores.src = '/images/menu/scores.gif';
	var scores_on = new Image();
	scores_on.src = '/images/menu/scores_over.gif';
	var challenge_friend = new Image();
	challenge_friend.src = '/images/menu/challenge_friend.gif';
	var challenge_friend_on = new Image();
	challenge_friend_on.src = '/images/menu/challenge_friend_over.gif';
	var prizes = new Image();
	prizes.src = '/images/menu/prizes.gif';
	var prizes_on = new Image();
	prizes_on.src = '/images/menu/prizes_over.gif';
	}

function hilight(reference,changeto)
	{
	if (document.images)
		{
		document[reference].src = eval(changeto + '.src');
		}
	return true;
	}

function findObj(n, d) { //v4.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=findObj(n,d.layers[i].document);
  if(!x && document.getElementById) x=document.getElementById(n); return x;
}

function ShowHideLayers() { //v3.0
  var i,p,v,obj,args=ShowHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v='hide')?'hidden':v; }
    obj.visibility=v; }
}

function HiliteMenu(thisobj) { 
alert(document.links[thisobj].style.color);
 document.links[thisobj].style.color = '<%= colorLight %>';
}

function popup(url,name,X,Y)
	{
	popPage = window.open(url,name,'status=no,location=no,resizable=no,maximize=no,minimize=no,width='+X+',height='+Y);
	}

function y2k(number)
	{
	return (number < 1000) ? number + 1900 : number;
	}

function padout(number)
	{
	return (number < 10) ? '0' + number : number;
	}

var today = new Date();
var day   = today.getDate();
var month = today.getMonth();
var year  = y2k(today.getYear());
</SCRIPT><META NAME=description VALUE="">
<META NAME=keywords VALUE="">
</HEAD>

<BODY TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 LEFTMARGIN=0 TEXT=#000000 ALINK=#EF3739 VLINK=#EF3739 LINK=#EF3739>
<CENTER>
<TABLE CELLPADDING=0 CELLSPACING=0 WIDTH=600 HEIGHT=400 BORDER=0>
<TR><TD COLSPAN=5><IMG SRC=/images/blank.gif WIDTH=1 HEIGHT=5 BORDER=0 ALT=''></TR>
<TR VALIGN=TOP>
<TD ROWSPAN=6 VALIGN=BOTTOM>
<A HREF=http://www.polycell.co.uk TARGET=_blank><IMG SRC=/images/template/logo.gif WIDTH=130 HEIGHT=96 BORDER=0 ALT='Visit the Polycell website'></A><BR>
<A HREF=/home.php><IMG SRC=/images/template/man.gif WIDTH=130 HEIGHT=298 BORDER=0 ALT='Home page'></A></TD>
<TD COLSPAN=3><IMG SRC=/images/template/top.gif WIDTH=465 HEIGHT=4 BORDER=0 ALT=''></TD>
<TD ROWSPAN=4><IMG SRC=/images/blank.gif WIDTH=5 HEIGHT=1 BORDER=0 ALT=''></TD>
</TR>
<TR VALIGN=TOP>
<TD><IMG SRC=/images/template/left.gif WIDTH=8 HEIGHT=300 BORDER=0 ALT=''></TD>
<TD>
<TABLE CELLPADDING=5 CELLSPACING=0 BORDER=0 WIDTH=450><TR><TD><FONT FACE=VERDANA SIZE=1><!-- COPY EVERYTHING AFTER HERE UP TO CONTENT BEGIN! --><TABLE CELLPADDING=0 CELLSPACING=2 BORDER=0 WIDTH=100% BGCOLOR=BLACK><TR><TD><TABLE CELLPADDING=2 CELLSPACING=0 BORDER=0 WIDTH=100%><TR><TD BGCOLOR=#0079BE><FONT FACE=VERDANA SIZE=1 COLOR=#FFFFFE><B>Rank</B></FONT></TD><TD BGCOLOR=#0079BE><FONT FACE=VERDANA SIZE=1 COLOR=#FFFFFE><B>Initials</B></FONT></TD><TD BGCOLOR=#0079BE><FONT FACE=VERDANA SIZE=1 COLOR=#FFFFFE><B>Date</B></FONT></TD><TD BGCOLOR=#0079BE><FONT FACE=VERDANA SIZE=1 COLOR=#FFFFFE><B>Completed in...</B></FONT></TD></TR>
<TR><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 1</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> DC</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 2nd June 2004</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 19.40</FONT></TD></TR>
<TR><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 2</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> L H</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 26th May 2004</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 19.65</FONT></TD></TR>
<TR><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 3</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> P H</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 24th May 2004</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 21.20</FONT></TD></TR>
<TR><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 4</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> MLR</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 26th May 2004</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 21.85</FONT></TD></TR>
<TR><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 5</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> D2o</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 14th May 2004</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 22.40</FONT></TD></TR>
<TR><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 6</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> CG</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 25th May 2004</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 24.05</FONT></TD></TR>
<TR><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 7</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> aeg</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 13th June 2004</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 27.55</FONT></TD></TR>
<TR><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 8</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> j</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 9th May 2004</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 28.05</FONT></TD></TR>
<TR><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 9</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> ELS</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 9th May 2004</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 37.00</FONT></TD></TR>
<TR><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 10</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> g</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 7th May 2004</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 41.85</FONT></TD></TR>
<TR><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 11</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> ALB</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 11th May 2004</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 42.70</FONT></TD></TR>
<TR><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 12</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> AEG</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 7th May 2004</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 43.35</FONT></TD></TR>
<TR><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 13</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> Ste</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 18th May 2004</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 43.40</FONT></TD></TR>
<TR><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 14</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> ROB</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 16th March 2007</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 47.05</FONT></TD></TR>
<TR><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 15</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> E</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 17th May 2004</FONT></TD><TD BGCOLOR=#FED322><FONT FACE=VERDANA SIZE=1> 48.25</FONT></TD></TR>
</TABLE>
</TD></TR></TABLE>
<!-- COPY EVERYTHING BELOW CONTENT HERE! -->
</FONT></TD></TR></TABLE>
</TD>
<TD><IMG SRC=/images/template/right.gif WIDTH=7 HEIGHT=300 BORDER=0 ALT=''></TD>
</TR>
<TR><TD COLSPAN=3><IMG SRC=/images/template/bottom.gif WIDTH=465 HEIGHT=4 BORDER=0 ALT=''></TD></TR>
<TR VALIGN=TOP><TD COLSPAN=3>
<TABLE CELLPADDING=0 CELLSPACING=0 BORDER=0 WIDTH=100%><TR><TD><A HREF=/instructions.php?sid= onMouseOver="javascript:hilight('instructions','instructions_on');" onMouseOut="javascript:hilight('instructions','instructions');"><IMG SRC=/images/menu/instructions.gif WIDTH=109 HEIGHT=34 BORDER=0 ALT='Instructions' NAME=instructions></A></TD><TD><A HREF=/play.php?sid= onMouseOver="javascript:hilight('play','play_on');" onMouseOut="javascript:hilight('play','play');"><IMG SRC=/images/menu/play.gif WIDTH=46 HEIGHT=34 BORDER=0 ALT='Play' NAME=play></A></TD><TD><A HREF=/scores.php?sid=><IMG SRC=/images/menu/scores_over.gif WIDTH=115 HEIGHT=34 BORDER=0 ALT='Scores' NAME=scores></A></TD><TD><A HREF=/challenge_friend.php?sid= onMouseOver="javascript:hilight('challenge_friend','challenge_friend_on');" onMouseOut="javascript:hilight('challenge_friend','challenge_friend');"><IMG SRC=/images/menu/challenge_friend.gif WIDTH=134 HEIGHT=34 BORDER=0 ALT='Challenge Friend' NAME=challenge_friend></A></TD><TD><A HREF=/prizes.php?sid= onMouseOver="javascript:hilight('prizes','prizes_on');" onMouseOut="javascript:hilight('prizes','prizes');"><IMG SRC=/images/menu/prizes.gif WIDTH=61 HEIGHT=34 BORDER=0 ALT='Prizes' NAME=prizes></A></TD></TR></TABLE>
</TD></TR>
<TR><TD COLSPAN=4 ALIGN=CENTER BACKGROUND=/images/template/footerbg.gif>
<TABLE CELLPADDING=0 CELLSPACING=0 BORDER=0 HEIGHT=23><TR VALIGN=MIDDLE>
<TD><IMG SRC=/images/blank.gif WIDTH=1 HEIGHT=23 BORDER=0 ALT=''></TD>
<TD CLASS=white><FONT FACE=VERDANA SIZE=1 COLOR=#FFFFFE>&copy; Polycell | <A HREF=/legal.php?sid=>Legal Notice</A></FONT></TD>
</TR></TABLE>
</TD></TR>
<TR><TD COLSPAN=4><IMG SRC=/images/template/slogan.gif WIDTH=470 HEIGHT=30 BORDER=0 ALT='It only takes two ticks'></TD></TR>
</TABLE>
</CENTER>
</BODY>
</HTML>