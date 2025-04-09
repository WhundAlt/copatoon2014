/*  Shell Styles  */
a
{
	text-decoration:none;
}
html{
	height:100%;
    margin:0;
    padding:0;
	background-image: url("images/Backgroundgradient.png");
    background-repeat:repeat;
	background-attachment:fixed;
	background-repeat:repeat-x;
	background-color:#6d9db7;
}

body {
	margin-left:0px;
	margin-top:0px;
	margin-right:0px;
	margin-bottom:0px;
	/*height:100%;*/
	text-align: center;
	font-family: Tahoma;
	color: #000000;
}

div {
	margin:0;
	padding:0;
}

div.container {
	margin-left: auto;
	margin-right: auto;
	position: relative;
	width: 904px;
	min-height: 500px;
	height: auto;
	text-align: justify;
	z-index: 1;
}

div.header{
	margin-left: auto;
	margin-right: auto;
	width: 904px;
	height: 75px;
	text-align: justify;
	z-index: 1;
	background-image: url("images/header.png");
	background-repeat: no-repeat;
}

div.middle{
	height:520px;
	clear:both;
	margin-left: auto;
	margin-right: auto;
	position: relative;
	width: 904px;

	text-align: justify;
	z-index: 1;
	background-image: url("images/middle.png");
	background-repeat: repeat-y;
}

div.logo
{
	height: 34px;
	left: -1px;
	position: relative;
    top: -2px;
    width: 202px;
}

div.message
{
    line-height: 11px;
    position: relative;
    top: -2px;
	width: 477px;
	padding-left: 4px;
}

div.footer{
	margin-left:auto;
	margin-right:auto;
	background: url(images/footer.png) no-repeat;
	padding-top:11px;
	width: 904px;

	font-size: 9px;
	font-family: Arial;
	color: #ffffff;
	line-height:14px;

}

div.footerLeft
{
	margin-left:6px;
	float:left;
	background: url(images/footer_backdrop_left.png) repeat-x;
	width:14px;
	height:61px;
}

div.footerRight
{
	margin-right:6px;
	float:right;
	background: url(images/footer_backdrop_right.png) repeat-x;
	width:14px;
	height:61px;
}

div.footerMiddle
{
	background: url("images/footer_backdrop.png") no-repeat scroll 0 0 transparent;
    height: 56px;
    margin-left: 6px;
    padding: 9px 9px 0 10px;
    width: 892px;
}

table.footerTable
{
	padding:7px;

}
div.projectPage
{
	position:relative;
	top:-6px;
	left:-3px;
}
.projectPage div.button
{
	background: url('images/project_btn_normal.png') no-repeat;

	width:143px;
	height:22px;

	padding-top:13px;
	text-align:center;
}
.projectPage div.button:hover
{
	background: url('images/project_btn_hover.png') no-repeat;
}
.projectPage a div.button:hover
{
	color:#FFF;
}

.projectPage a div.button
{
	color: #6D9DB7;
	text-decoration:none;
    font-family: Tahoma;
    font-size: 8pt;
    font-weight: bold;
}

div.footMessage
{
	font-family:arial;
	text-align:center;

	padding:7.5px 20px;
}

div.footMessage span
{
	padding-left:40px;
	width:200px;
	text-align:right;
	position:relative;
}

div.footMessage a, div.footMessage a:visited
{
	font-size:9px;
	font-family:Tahoma;
	text-align:left;
	font-weight:bolder;
	color:white;
	text-decoration:none;
}

/*  Menu  */
div.menu{
	position: absolute;
	width: 580px;
	height:75px;
}

div.menu ul {
	margin: 0;
	padding-top: 3px;
	padding-left: 11px;
}

div.menu ul li {
	float: left;
	list-style: none;
}

div.menu ul li a{
	margin-top: 30px;
	color: #6d9db7;
	font-family: Tahoma;
	font-size: 8pt;
	font-weight: bold;
	float:left;
	/*background-image:url("images/tab.png");*/
	background-repeat:no-repeat;
	background-position:0px 0px;
	width:91px;
	height:24px;
	text-align: center;
	padding-top: 6px;
	text-decoration: none;
}

div.menu ul li a:hover{
	color: #6d9db7;
	background-image:url("images/tabover.png");
	text-decoration: none;
}

div.menu ul li.cur a{
	color: #FFFFFF;
	background-image:url("images/tabactive.png");
	background-repeat:no-repeat;
	background-position:0px 0px;
	text-decoration: none;
}

div.menu ul li.home a{
	margin-top: 0px;
	width:178px;
	height:60px;
	background-image: none;
	color: #000000;
	background-repeat:no-repeat;
	background-position:0px 0px;
	text-decoration: none;
}

div.menu ul li.home a:hover{
	background-image: url("images/logoover.png");
}

/*  header login  */

div.profiles1{
	float:right;
	position:absolute;
	font-family: Tahoma;
	font-size: 8pt;
	padding: 0px 0px 0px 0px;
	margin-top: 19px;
	margin-left: 650px;
	width:230px;
	height:55px;
	color:#4D8298;
}

div.profiles2{
	float:right;
	position:absolute;
	font-family: Tahoma;
	font-size: 8pt;
	padding: 0px 0px 0px 0px;
	margin-top: 10px;
	margin-left: 650px;
	width:230px;
	height:55px;
	color:#4D8298;
}
.profiles2 table td
{
	padding:2px;	<!-- PHPBB Fix! -->
}


.formoneone{
	position:absolute;
	height: 21px;
	width: 50px;
	top: 2px;
}

.formtwoone{
	position:absolute;
	height: 21px;
	left: 51px;
}

.formthreeone{
	position:absolute;
	height: 21px;
	left: 160px;
}

.formonetwo{
	position:absolute;
	height: 21px;
	top: 25px;
}

.formtwotwo{
	position:absolute;
	height: 21px;
	left: 51px;
	top: 23px;
}

.formthreetwo{
	position:absolute;
	height: 21px;
	left: 160px;
	top: 23px;
}

input{

	border: none;
	background-color: transparent;
}

label.loginheader{
	font-size: 8pt;
	color: #4d8298;
	font-family: Tahoma;
}

input.textbox{
	padding-top: 4px;
	padding-left: 4px;
	padding-bottom: 0px;
	padding-right: 4px;
	font-size: 8pt;
	font-family: Tahoma;
	width: 99px;
	/*height: 13px;*/
}

.textboxbox{
	background-image: url("images/form/inputbox.png");
	width: 107px;
	height: 21px;
	padding: 0px;
	background-repeat: none;
}



input.smallbutton{
	cursor:hand;
	cursor:pointer;
	background-image: url("images/form/button.png");
	width: 67px;
	height: 21px;
	font-size: 8pt;
	font-family: Tahoma;
	color: #4d8298;
}

input.smallbutton :hover{
	background-image: url("images/form/buttonover.png");
	color: #4d8298;
}

/*  Pages  */

div.noborder{
	position: relative;
	left: 22px;
	width: 860px;

}

div.gamewindow{
	height: 520px;
}

.projectpage{
	margin: 0px 0px 0px 0px;
	border: none;
	width: 860px;
	height: 520px;
}

div.text1 {
	margin-left:305px;
	margin-right:1px;
	margin-top:74px;
	padding-right:20px;
	width:605px;
	height:434px;
	overflow:auto;
	position:absolute;
	font-family: Tahoma;
	font-size: 8pt;
	z-index:3;
}

.logoieea{
	display: block;
	width: 194px;
	height: 20px;
	/*position: relative;*/
	/*margin-left: 311px !important;
	margin-left: 355px ;
	margin-top: 23px !important;
	margin-top: 8px;*/
	background-image: url("images/logoieea.jpg");
}

img {
	border: none;
}

div.loginplay{
	position:absolute;
	left: 250px;
	top: 90px;
	height:226px !important;
	width:282px !important;
	height:293px;
	width:352px;
	background-image: url("images/registerwindow.png");
	padding: 32px 35px 35px 35px;

}

#homepage{
	background-image: url("images/splashbackground.jpg");
	height:520px;
}

#homepage .enerCitiesButton
{
	position:absolute;
	top:314px;
	left:533px;

	width:157px;
	height:53px;

	background:none;

	cursor:pointer;
}
#homepage .facebookButton
{
	position:absolute;
	top:384px;
	left:533px;

	width:157px;
	height:53px;

	background:none;

	padding:0;

	cursor:pointer;
}
#homepage .registerButton
{

	position:absolute;
	top:323px;
	left:773px;

	background:none;

	width:47px;
	height:23px;

	padding:0;

	cursor:pointer;
}

#homepage .registerButton:hover
{
	background: url(images/registermouseover.jpg) no-repeat;
}

#homepage .enerCitiesButton:hover
{
	background: url(images/enercitiesmouseover.jpg) no-repeat;
}

#homepage .facebookButton:hover
{
	background: url(images/facebookmouseover.jpg) no-repeat;
}


font.title{
	font-size: 15pt;
	font-family: Tahoma;
	color: #1d546b;
}

font.text{
	font-size: 10pt;
	font-family: Tahoma;
	color: #1d546b;
}

font.registertext {
	font-size: 13pt;
	font-family: Tahoma;
	color: #ffffff;
}


.facebookButton, .registerButton
{
	font-size:13pt;
	font-family:Tahoma;
	text-align:center;
	color:#FFFFFF;

	text-decoration:none;
}

.facebookButton
{
	padding:5px 17px 10px 17px;
	background: url(images/facebookbutton.png) no-repeat;
}
.facebookButton:hover
{
	background: url(images/facebookbuttonmouseover.png) no-repeat;
}

.registerButton
{
	padding:5px 25px 10px 25px;
	background: url(images/registerbutton.png) no-repeat;
}

.registerButton:hover
{
	background: url(images/registerbuttonmouseover.png) no-repeat;
}

.loginContainer
{
	font-family:Tahoma;
	font-size:8pt;
	background: url(images/homebackground.jpg) no-repeat;

	height:520px;
}
.loginBar
{

	position:relative;
	top:200px;

	margin-left:auto;
	margin-right:auto;


	font-size:13pt;
	color:#4d8298;
	background: url(images/pleaseloginwindow.png) no-repeat;
	width:403px;
	height:75px;

	padding:26px 0px 20px 00px;
	text-align:center;
}

.loginBar a, .loginBar a:visited
{
	text-decoration:none;
	color:#ff6800;
}
.loginBar a:hover
{
	text-decoration:underline;
}
#unityFrame
{
	width:100%;
	height:520px;
	overflow:hidden;
	border:0px solid black;
}
.highscorepage
{
	font-family: "Tahoma", arial;
	font-size:11px;

	height:500px;

	background: url(http://enercities.eu/shell/assets/images/homebackground.jpg) no-repeat;
	padding-top:20px;
}

.highscorewindow
{
	background: url(http://enercities.eu/shell/assets/images/highscorewindow.png) no-repeat;
	width:520px;
	height:380px;
	margin-left:auto;
	margin-right:auto;

	padding:0px 0px 0px 13px;
}

.highscorewindow table
{
	font-family: Arial;
	font-weight:bold;
	width:500px;
}

.highscorewindow th
{
	text-align:left;
	padding-bottom:10px;
	font-size:16px;
	color:#7594A9;
}

.highscorewindow td
{
	color:#517180;
	font-size:13px;
	padding:6px 6px 6px 0px;
}

.highscorewindow .rank
{
	padding-left:20px;
}

.highscorewindow a
{
	text-decoration:none;
	color:#517180;
	font-size:13px;
}

.alt
{
	background: url(http://enercities.eu/shell/assets/images/columnbackground.png);
}

.buttonbar a
{
	text-decoration:none;
	font-family: Tahoma, arial;
	color:white;
	font-weight:bold;
}
.buttonbar div:hover a
{
	color:black;
}

.buttonbar
{
	width:249px;
	margin-left:auto;
	margin-right:auto;
}

.buttonbar div
{
	text-align:center;

	width:84px;
	height:25px;

	padding-top:5px;

	float:left;
}

.buttonbar .leftButton
{
	background: url(http://enercities.eu/shell/assets/images/buttonbar_leftbutton_normal.png) no-repeat;
}
.buttonbar .leftButton:hover, .buttonbar .leftActive
{
	background: url(http://enercities.eu/shell/assets/images/buttonbar_leftbutton_mouseover.png) no-repeat;
}

.buttonbar .middleButton
{
	background: url(http://enercities.eu/shell/assets/images/buttonbar_middlebutton_normal.png) no-repeat;
	width:81px;
}
.buttonbar .middleButton:hover, .buttonbar .middleActive
{
	background: url(http://enercities.eu/shell/assets/images/buttonbar_middlebutton_mouseover.png) no-repeat;
	width:81px;
}


.buttonbar .rightButton
{
	background: url(http://enercities.eu/shell/assets/images/buttonbar_rightbutton_normal.png) no-repeat;
}

.buttonbar .rightButton:hover, .buttonbar .rightActive
{
	background: url(http://enercities.eu/shell/assets/images/buttonbar_rightbutton_mouseover.png) no-repeat;
}
