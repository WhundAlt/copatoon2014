<?xml version="1.0" encoding="ISO-8859-1" ?><cubeez>
<user>
<add>done</add>
<userid>PLJVT,hfATWbEhgAF2VIG0</userid>
<email>awdawd@awda.com</email>
<mail>0</mail>
<town>Manitoba</town>
<msg><![CDATA[Dear Parent, 

 Thank you for registering with Cubeez.com (http://www.cubeez.com).

Cubeez.com offers a wide range of creative and educational activities, designed to stimulate and entertain pre-schoolers whilst under the supervision of a parent.

Matching the fun, colour and magic of the popular television series, the site is a highly engaging interactive environment that allows a child to explore, play and learn all at once.  Hosted by the Cubeez - Dink, Tizzy, Doody and Bozz - children can play �animal misfits� in the �Jungle�, search the �Maze� to help the Boingles get to the Wiggywams party, interact with �Big Book� and �Learning Wall�, or visit the �Music Box� for online karaoke and sound games. There's lots of fun stuff to explore.

The website also has fun things for you and your child to do away from the computer, including paper-based activites such as 'How to make Cubeez Finger Puppets', 'Things to do on a car or train journey' in addition to a selection of colouring in sheets.  

You can also help your child make a Cubeez greeting card and if you want to reward your child for something they have achieved, you can personalise a Cubeez Certificate to give to them.

If you have added any children's information then links to their membership certificate(s) will arrive soon.

We hope you, and your children, enjoy the website and have a fun time!

See you there again soon.

From the Producers of Cubeez

If you wish to unregister at any time please contact info@cubeez.com.]]></msg>
</user>
</cubeez>
<!--
<%
email = request.querystring("email")
session("email") = request.querystring("email")
mail = request.querystring("mail")
terms = request.querystring("terms")
town = request.querystring("town")
userID = request.cookies("cubeezUserID")
set Conn = server.createobject("ADODB.Connection")
Conn.open "dsn=dsnCubeez;uid=dsnUser;pwd=h64gdw5;"
Conn.execute("newStickerBook("&userID&",'"&email&"',"&mail&","&terms&",'"&town&"')")
Conn.close


	$myBody = "Dear Parent," & vbcrlf & vbcrlf & "Thank you for registering with Cubeez.com (http://www.cubeez.com)." & vbcrlf & vbcrlf 
	$myBody .= "Cubeez.com offers a wide range of creative and educational activities, designed to stimulate and entertain pre-schoolers whilst under the supervision of a parent." & vbcrlf & vbcrlf
	$myBody .= "Matching the fun, colour and magic of the popular television series, the site is a highly engaging interactive environment that allows a child to explore, play and learn all at once.  Hosted by the Cubeez - Dink, Tizzy, Doody and Bozz - children can play �animal misfits� in the �Jungle�, search the �Maze� to help the Boingles get to the Wiggywams party, interact with �Big Book� and �Learning Wall�, or visit the �Music Box� for online karaoke and sound games. There's lots of fun stuff to explore." & vbcrlf & vbcrlf
	$myBody .= "The website also has fun things for you and your child to do away from the computer, including paper-based activites such as 'How to make Cubeez Finger Puppets', 'Things to do on a car or train journey' in addition to a selection of colouring in sheets.  " & vbcrlf & vbcrlf
	$myBody .= "You can also help your child make a Cubeez greeting card and if you want to reward your child for something they have achieved, you can personalise a Cubeez Certificate to give to them." & vbcrlf & vbcrlf
	$myBody .= "If you have added any children's information then links to their membership certificate(s) will arrive soon." & vbcrlf & vbcrlf
	$myBody .= "We hope you, and your children, enjoy the website and have a fun time!" & vbcrlf & vbcrlf
	$myBody .= "See you there again soon." & vbcrlf & vbcrlf
	$myBody .= "From the Producers of Cubeez" & vbcrlf & vbcrlf
	$myBody .= "If you wish to unregister at any time please contact info@cubeez.com."
	
	
	Dim objCDO
	Set objCDO = Server.CreateObject("CDONTS.NewMail")
	objCDO.From = "info@cubeez.com"
	objCDO.To = request.querystring("email")
	'objCDO.BCC = "cubeez@designation.com"
	objCDO.Subject = "Thank you for registering with Cubeez.com"
	objCDO.Body = $myBody
	objCDO.Send()
	Set objCDO = Nothing



%>
-->