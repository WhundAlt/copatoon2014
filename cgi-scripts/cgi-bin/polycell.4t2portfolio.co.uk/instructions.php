																	<!--
     -------------------------------------------------
     © 4T2 Multimedia 2020     Web: www.4T2.co.uk

                               WE ARE THE SOLUTION ...
     -------------------------------------------------
																	-->

<HTML>
<HEAD>
<TITLE>Polycell - Instructions</TITLE>
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
<TABLE CELLPADDING=5 CELLSPACING=0 BORDER=0 WIDTH=450><TR><TD><FONT FACE=VERDANA SIZE=1><!-- COPY EVERYTHING AFTER HERE UP TO CONTENT BEGIN! --><FONT SIZE=2><CENTER><IMG SRC=/images/template/gamelogo.gif WIDTH=440 HEIGHT=53 BORDER=0 ALT='The Smooth Mover Challenge'></CENTER><BR>
<IMG SRC=/images/template/screenshot.jpg WIDTH=204 HEIGHT=136 BORDER=0 ALT='Screen shot of level 3' ALIGN=RIGHT>Before the decorator completes his quote you must prepare the walls for painting, proving you are more than capable of doing the job on your own and giving you a legitimate excuse to go and watch the football whilst it dries.
<BR><BR>
All you have to do is focus on the job at hand and not be distracted by "nag demons".  If you listen to the voices you never know what chore you’ll end up completing instead of watching the football.
<DIV ALIGN=RIGHT><!-- BUTTON START --><TABLE CELLPADDING=0 CELLSPACING=0 BORDER=0><TR><TD><FONT FACE=VERDANA SIZE=1><B>Next ::</B></FONT></TD><TD><IMG SRC=/images/blank.gif WIDTH=10 HEIGHT=25 BORDER=0></TD><TD ALIGN=RIGHT><A HREF=/instructions.php@sid=&page=2><IMG SRC=/images/template/go.gif WIDTH=18 HEIGHT=18 BORDER=0></A></TD><TD><IMG SRC=/images/blank.gif WIDTH=5 HEIGHT=25 BORDER=0></TD></TR><TR><TD COLSPAN=4><IMG SRC=/images/blank.gif WIDTH=1 HEIGHT=1 BORDER=0></TD></TR></TABLE><!-- BUTTON END --></DIV></FONT><!-- COPY EVERYTHING BELOW CONTENT HERE! -->
</FONT></TD></TR></TABLE>
</TD>
<TD><IMG SRC=/images/template/right.gif WIDTH=7 HEIGHT=300 BORDER=0 ALT=''></TD>
</TR>
<TR><TD COLSPAN=3><IMG SRC=/images/template/bottom.gif WIDTH=465 HEIGHT=4 BORDER=0 ALT=''></TD></TR>
<TR VALIGN=TOP><TD COLSPAN=3>
<TABLE CELLPADDING=0 CELLSPACING=0 BORDER=0 WIDTH=100%><TR><TD><A HREF=/instructions.php?sid=><IMG SRC=/images/menu/instructions_over.gif WIDTH=109 HEIGHT=34 BORDER=0 ALT='Instructions' NAME=instructions></A></TD><TD><A HREF=/play.php?sid= onMouseOver="javascript:hilight('play','play_on');" onMouseOut="javascript:hilight('play','play');"><IMG SRC=/images/menu/play.gif WIDTH=46 HEIGHT=34 BORDER=0 ALT='Play' NAME=play></A></TD><TD><A HREF=/scores.php?sid= onMouseOver="javascript:hilight('scores','scores_on');" onMouseOut="javascript:hilight('scores','scores');"><IMG SRC=/images/menu/scores.gif WIDTH=115 HEIGHT=34 BORDER=0 ALT='Scores' NAME=scores></A></TD><TD><A HREF=/challenge_friend.php?sid= onMouseOver="javascript:hilight('challenge_friend','challenge_friend_on');" onMouseOut="javascript:hilight('challenge_friend','challenge_friend');"><IMG SRC=/images/menu/challenge_friend.gif WIDTH=134 HEIGHT=34 BORDER=0 ALT='Challenge Friend' NAME=challenge_friend></A></TD><TD><A HREF=/prizes.php?sid= onMouseOver="javascript:hilight('prizes','prizes_on');" onMouseOut="javascript:hilight('prizes','prizes');"><IMG SRC=/images/menu/prizes.gif WIDTH=61 HEIGHT=34 BORDER=0 ALT='Prizes' NAME=prizes></A></TD></TR></TABLE>
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