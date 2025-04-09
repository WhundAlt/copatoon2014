<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=7,IE=9" />
<title>あへくりっく あへ子 | ケチャップ味のマヨネーズ</title>
<meta name="description" content="エロいクリックゲームだよ" />
<!-- OGP tag -->
<meta property="og:title" content="あへくりっく あへ子 | ケチャップ味のマヨネーズ" />
<meta property="og:type" content="product" />
<meta property="og:url" content="http://www.tomatama.com/" />
<meta property="og:site_name" content="ケチャップ味のマヨネーズ" />
<meta property="og:description" content="エロいクリックゲームだよ" />
<meta property="og:country-name" content="日本" />
<!-- //OGP tag -->

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/lightbox-form.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/jquery.simplemodal.1.4.4.min.js"></script>


<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/jQuery.Cookie.css" />
<link rel="stylesheet" href="css/lightbox-form.css" type="text/css" media="screen" />
</head>






<script>
var t=0;
var buyCount=0;
var chinco=0;

$(document).ready(function() {
	(function Aheloop(){setTimeout(Aheloop, 1000);render();})();

	var over18 = jQuery.cookie('over18');
	if(over18 !== "Yes"){confirm();}
	$('.remove_cookie').click(function(){$.cookie('over18','',{ expires: 0 });location.reload();});


	$('#play_bgm0').click(function(){funBGM(0);});
	$('#play_bgm1').click(function(){funBGM(1);});
	$('#play_bgm2').click(function(){funBGM(2);});


})

var bosyu=0;
var bosyu1=0;
var bosyu2=0;
var bosyu3=0;
$(document).ready(function() {(function BosyuColor(){setTimeout(BosyuColor, 15);bbr();})();})
function bbr() {
	for(var i=1;i<=15;i++){
		var k=bosyu-i*6;
		k=k%96;
		if(k>80){
			bosyu1=15;bosyu2=(95-k);bosyu3=0;
		}else if(k>=64){
			bosyu1=(k-64);bosyu2=15;bosyu3=0;
		}else if(k>=48){
			bosyu1=0;bosyu2=15;bosyu3=(63-k);
		}else if(k>=32){
			bosyu1=0;bosyu2=(k-32);bosyu3=15;
		}else if(k>=16){
			bosyu1=(31-k);bosyu2=0;bosyu3=15;
		}else{
			bosyu1=15;bosyu2=0;bosyu3=k;
		}
		var str = String(bosyu1.toString(16))+String(bosyu2.toString(16))+String(bosyu3.toString(16));
		$('#cb'+i).css('color','#'+str);
	//	$('#test').html(str);
	}
	bosyu++;
	t++;
	if(chinco==1){
		fun_chin_mv();
	}
}





function confirm(){
	jQuery('#modal').modal({
		opacity:90,
		overlayCss:{backgroundColor:"#000"},
		containerId: 'confirm_modal',
		position: ["30%",],
		onShow: function(dialog){
			var modal = this;
			jQuery('.yes',dialog.data[0]).click(function(){
				var clifetime = new Date();
				clifetime.setTime(clifetime.getTime()+(3*24*60*60*1000));//3日
				jQuery.cookie('over18','Yes',{ expires: clifetime });
				modal.close();
			});
		}
	});
}


//曲再生だよー
function funBGM(s) {
	bgm = parseFloat(s);
	var audio1 = document.getElementById('bgm1');
	var audio2 = document.getElementById('bgm2');
	$('#play_bgm0').css('background-color','#fff');
	$('#play_bgm1').css('background-color','#fff');
	$('#play_bgm2').css('background-color','#fff');
	if(bgm==0){
		$('#play_bgm0').css('background-color','#ffa500');
		audio1.pause();
		audio2.pause();
	}
	if(bgm==1){
		$('#play_bgm1').css('background-color','#ffa500');
		audio2.pause();
		audio1.play();
	}
	if(bgm==2){
		$('#play_bgm2').css('background-color','#ffa500');
		audio1.pause();
		audio2.play();
	}
}




function render() {
	var p = parseFloat(0+$("#p").html());

	var a2 = [0,0.1,0.5,2,10,40,100,400,5000,100000];		//増加量

	var u01 = parseFloat(0+$("#u01").html());
	var u02 = parseFloat(0+$("#u02").html());
	var u03 = parseFloat(0+$("#u03").html());
	var u04 = parseFloat(0+$("#u04").html());
	var u05 = parseFloat(0+$("#u05").html());
	var u06 = parseFloat(0+$("#u06").html());
	var u07 = parseFloat(0+$("#u07").html());
	var u08 = parseFloat(0+$("#u08").html());
	var u09 = parseFloat(0+$("#u09").html());

	var ttl02 = parseFloat(0+$("#ttl02").html());
	var ttl03 = parseFloat(0+$("#ttl03").html());


	//各種倍率
	var u01r = 1;
	var u02r = 1;
	var u03r = 1;
	var u04r = 1;
	var u05r = 1;
	var u06r = 1;
	var u07r = 1;
	var u08r = 1;
	var u09r = 1;


	//実績の表示----
	for (i=1;i<=9;i++){
		a = parseFloat(0+$("#st_item_a0"+i).html());
		if(a==2){
			$("#get_a0"+i).css("display", "block");$("#get_d_a0"+i).css("display", "none");
			u01r = u01r * 5;
		}else if(a==1){
			$("#get_a0"+i).css("display", "none");$("#get_d_a0"+i).css("display", "block");
		}else{
			$("#get_a0"+i).css("display", "none");$("#get_d_a0"+i).css("display", "none");
		}
	}
	for (i=1;i<=5;i++){
		a = parseFloat(0+$("#st_item_b0"+i).html());
		if(a==2){
			$("#get_b0"+i).css("display", "block");$("#get_d_b0"+i).css("display", "none");
			u02r = u02r * 2;
		}else if(a==1){
			$("#get_b0"+i).css("display", "none");$("#get_d_b0"+i).css("display", "block");
		}else{
			$("#get_b0"+i).css("display", "none");$("#get_d_b0"+i).css("display", "none");
		}
		a = parseFloat(0+$("#st_item_c0"+i).html());
		if(a==2){
			$("#get_c0"+i).css("display", "block");$("#get_d_c0"+i).css("display", "none");
			u03r = u03r * 2;
		}else if(a==1){
			$("#get_c0"+i).css("display", "none");$("#get_d_c0"+i).css("display", "block");
		}else{
			$("#get_c0"+i).css("display", "none");$("#get_d_c0"+i).css("display", "none");
		}
		a = parseFloat(0+$("#st_item_d0"+i).html());
		if(a==2){
			$("#get_d0"+i).css("display", "block");$("#get_d_d0"+i).css("display", "none");
			u04r = u04r * 2;
		}else if(a==1){
			$("#get_d0"+i).css("display", "none");$("#get_d_d0"+i).css("display", "block");
		}else{
			$("#get_d0"+i).css("display", "none");$("#get_d_d0"+i).css("display", "none");
		}
		a = parseFloat(0+$("#st_item_e0"+i).html());
		if(a==2){
			$("#get_e0"+i).css("display", "block");$("#get_d_e0"+i).css("display", "none");
			u05r = u05r * 2;
		}else if(a==1){
			$("#get_e0"+i).css("display", "none");$("#get_d_e0"+i).css("display", "block");
		}else{
			$("#get_e0"+i).css("display", "none");$("#get_d_e0"+i).css("display", "none");
		}
		a = parseFloat(0+$("#st_item_f0"+i).html());
		if(a==2){
			$("#get_f0"+i).css("display", "block");$("#get_d_f0"+i).css("display", "none");
			u06r = u06r * 2;
		}else if(a==1){
			$("#get_f0"+i).css("display", "none");$("#get_d_f0"+i).css("display", "block");
		}else{
			$("#get_f0"+i).css("display", "none");$("#get_d_f0"+i).css("display", "none");
		}
		a = parseFloat(0+$("#st_item_g0"+i).html());
		if(a==2){
			$("#get_g0"+i).css("display", "block");$("#get_d_g0"+i).css("display", "none");
			u07r = u07r * 2;
		}else if(a==1){
			$("#get_g0"+i).css("display", "none");$("#get_d_g0"+i).css("display", "block");
		}else{
			$("#get_g0"+i).css("display", "none");$("#get_d_g0"+i).css("display", "none");
		}
		a = parseFloat(0+$("#st_item_h0"+i).html());
		if(a==2){
			$("#get_h0"+i).css("display", "block");$("#get_d_h0"+i).css("display", "none");
			u08r = u08r * 2;
		}else if(a==1){
			$("#get_h0"+i).css("display", "none");$("#get_d_h0"+i).css("display", "block");
		}else{
			$("#get_h0"+i).css("display", "none");$("#get_d_h0"+i).css("display", "none");
		}
		a = parseFloat(0+$("#st_item_i0"+i).html());
		if(a==2){
			$("#get_i0"+i).css("display", "block");$("#get_d_i0"+i).css("display", "none");
			u09r = u09r * 2;
		}else if(a==1){
			$("#get_i0"+i).css("display", "none");$("#get_d_i0"+i).css("display", "block");
		}else{
			$("#get_i0"+i).css("display", "none");$("#get_d_i0"+i).css("display", "none");
		}
	}
	//実績の表示----

	upr = 0;
	upr = upr + u01 * u01r * a2[1];
	upr = upr + u02 * u02r * a2[2];
	upr = upr + u03 * u03r * a2[3];
	upr = upr + u04 * u04r * a2[4];
	upr = upr + u05 * u05r * a2[5];
	upr = upr + u06 * u06r * a2[6];
	upr = upr + u07 * u07r * a2[7];
	upr = upr + u08 * u08r * a2[8];
	upr = upr + u09 * u09r * a2[9];


	p = p  + upr;
	p  = Math.floor(p * 10) / 10;

	ttl02 = ttl02  + upr;
	if(p>ttl03){ttl03=p;}

	$("#p").html(p);
	$("#upr").html(upr);
	$("#uprP").html(separate(upr));
	$("#ttl02").html(ttl02);
	$("#ttl03").html(ttl03);

	
	$("#ttl01r").html(separate($("#ttl01").html()));
	$("#ttl02r").html(separate(Math.floor(ttl02)));
	$("#ttl03r").html(separate(ttl03));
	$("#golden_cnt_r").html(separate($("#golden_cnt").html()));
	$("#p_r").html(separate(p));


	Kai_kisekae();		//着せ替え実績の解除

	//クリック可能になったら色を変えるよー
	for (i=0;i<=9;i++){
		f=parseFloat(0+$("#f0"+i).html());
		if(f>p){
			$("#up0"+i).css("background-color", "#ddd");
		} else {
			$("#up0"+i).css("background-color", "#fff");
		}
	}

	//ゴールデンアヘ
	Fun_golden();

	//オートセーブ
	Fun_AutoSeve();


	buyCount=buyCount+1;	//読み込み時にアイテムが買えてしまうバグの対策

};

//オートセーブ
function Fun_AutoSeve(){
	var autoseve = parseFloat(0+$("#autoseve").html());
	if(autoseve==0){autoseve=60;}else{autoseve=autoseve-1;}
	$("#autoseve").html(autoseve);
	if(autoseve==1){fun_save(0);}	//60秒ごとにオートセーブするよ－＾＾
}



//ゴールデンアヘ
function Fun_golden(){
	var golden = parseFloat(0+$("#golden").html());
	if(golden==0){golden=300;}else{golden=golden-1;}
	$("#golden").html(golden);
	if(golden==1){
		var x = $('body').width();
		var y = $('body').height();
		xr = Math.random() * x * 0.9;
		yr = parseFloat(800 * Math.random());
		if(yr>y){yr=y;}
		//ゴールデンあへを表示
		var ahe = $('<div>').addClass('block').append($('<img>').attr('src', 'aks/g-ahe.png'));
		ahe.css('left', xr);
		ahe.css('top' , yr);
		ahe.css('position' , 'absolute');
		ahe.css('z-index' , '1000');
		ahe.attr('id', 'golden-ahe');
		ahe.on("click", { class: "addClick" }, function() {Fun_golden_ck();});
		ahe.hide().fadeIn(2000).delay(4000).fadeOut(4000, function () { $(this).remove(); });
		$('body').append(ahe);
		return ahe;
	}
}

//ゴールデンアヘがクリックされた！
function Fun_golden_ck(){
	var p = parseFloat(0+$("#p").html());
	var ttl02 = parseFloat(0+$("#ttl02").html());
	var ttl03 = parseFloat(0+$("#ttl03").html());
	var golden_cnt = parseFloat(0+$("#golden_cnt").html());

	//２割増やす
	p2 = parseFloat(p * 0.2);
	p = p + p2;
	ttl02 = ttl02 + p2;
	if(p>ttl03){ttl03=p;}
	$("#p").html(p);
	$("#ttl02").html(ttl02);
	$("#ttl03").html(ttl03);
	$("#p_r").html(separate(p));

	$("#golden-ahe").css("display", "none");	//Gアヘを消す
	$("#golden_cnt").html(golden_cnt+1);		//Gあへカウント
}


//着せ替え実績の解除
function Kai_kisekae() {
	var t = "";
	var ttl03 = parseFloat(0+$("#ttl03").html());	//総あへ数
	var u01 = parseFloat(0+$("#u01").html());
	var u02 = parseFloat(0+$("#u02").html());
	var u03 = parseFloat(0+$("#u03").html());
	var u04 = parseFloat(0+$("#u04").html());
	var u05 = parseFloat(0+$("#u05").html());
	var u06 = parseFloat(0+$("#u06").html());
	var u07 = parseFloat(0+$("#u07").html());
	var u08 = parseFloat(0+$("#u08").html());
	var u09 = parseFloat(0+$("#u09").html());

	$("#kk_body1").css("display", "none");
	$("#kk_body2").css("display", "none");
	$("#kk_face1").css("display", "none");
	$("#kk_face2").css("display", "none");
	$("#kk_face3").css("display", "none");
	$("#kk_face4").css("display", "none");
	$("#kk_pt").css("display", "none");
	$("#kk_nawa").css("display", "none");
	$("#kk_ts1").css("display", "none");
	$("#kk_ts2").css("display", "none");
	$("#kk_ts3").css("display", "none");
	$("#kk_ts4").css("display", "none");
	$("#kk_ts5").css("display", "none");
	$("#kk_ts6").css("display", "none");
	$("#kk_ss1").css("display", "none");
	$("#kk_ss2").css("display", "none");
	$("#kk_ss3").css("display", "none");
	$("#kk_mj1").css("display", "none");
	$("#kk_mj2").css("display", "none");
	$("#kk_mj3").css("display", "none");
	$("#kk_dr1").css("display", "none");
	$("#kk_dr2").css("display", "none");
	$("#kk_dr3").css("display", "none");
	$("#kk_dl1").css("display", "none");
	$("#kk_dl2").css("display", "none");
	$("#kk_dl3").css("display", "none");
	$("#kk_dm1").css("display", "none");
	$("#kk_dm2").css("display", "none");
	$("#kk_dm3").css("display", "none");
	$("#kk_dd1").css("display", "none");
	$("#kk_dd2").css("display", "none");
	$("#kk_dd3").css("display", "none");
	$("#kk_dd4").css("display", "none");
	$("#kk_ap1").css("display", "none");
	$("#kk_ap2").css("display", "none");
	$("#kk_ra1").css("display", "none");
	$("#kk_ra2").css("display", "none");
	$("#kk_ra3").css("display", "none");
	$("#kk_ra4").css("display", "none");
	$("#kk_rb1").css("display", "none");
	$("#kk_rb2").css("display", "none");
	$("#kk_rb3").css("display", "none");
	$("#kk_rb4").css("display", "none");
	$("#kk_rc1").css("display", "none");
	$("#kk_rc2").css("display", "none");
	$("#kk_rc3").css("display", "none");
	$("#kk_rc4").css("display", "none");
	$("#kk_rc5").css("display", "none");
	$("#kk_rc6").css("display", "none");
	$("#kk_rc7").css("display", "none");
	$("#kk_rc8").css("display", "none");
	$("#kk_rc9").css("display", "none");
	$("#kk_rc10").css("display", "none");
	$("#kk_rd1").css("display", "none");
	$("#kk_rd2").css("display", "none");
	$("#kk_rd3").css("display", "none");
	$("#kk_rd4").css("display", "none");
	$("#kk_rd5").css("display", "none");
	$("#kk_rd6").css("display", "none");
	$("#kk_rd7").css("display", "none");
	$("#kk_rd8").css("display", "none");
	$("#kk_rd9").css("display", "none");
	$("#kk_rd10").css("display", "none");
	$("#kk_cl1").css("display", "none");
	$("#kk_cl2").css("display", "none");
	$("#kk_cl3").css("display", "none");
	$("#kk_cl4").css("display", "none");
	$("#kk_cl5").css("display", "none");
	$("#kk_cl6").css("display", "none");
	$("#kk_cl7").css("display", "none");
	$("#kk_cl8").css("display", "none");
	$("#kk_cl9").css("display", "none");

	if(ttl03>=10000000){$("#kk_face4").css("display", "inline");t=t+"アヘ顔 Lv5<br>";}
	if(ttl03>=1000000) {$("#kk_face3").css("display", "inline");t=t+"アヘ顔 Lv4<br>";}
	if(ttl03>=100000)  {$("#kk_face2").css("display", "inline");t=t+"アヘ顔 Lv3<br>";}
	if(ttl03>=10000)   {$("#kk_face1").css("display", "inline");t=t+"アヘ顔 Lv2<br>";}
	if(ttl03>=1000000) {$("#kk_mj3").css("display", "inline");t=t+"また汁 Lv3<br>";}
	if(ttl03>=100000)  {$("#kk_mj2").css("display", "inline");t=t+"また汁 Lv2<br>";}
	if(ttl03>=10000)   {$("#kk_mj1").css("display", "inline");t=t+"また汁 Lv1<br>";}
	if(ttl03>=50000)   {$("#kk_body2").css("display", "inline");t=t+"裸体<br>";}
	if(ttl03>=1000)    {$("#kk_body1").css("display", "inline");t=t+"乳首立つ<br>";}
	if(ttl03>=10000)   {$("#kk_pt").css("display", "inline");t=t+"パンツ無し<br>";}
	if(u08>=1)         {$("#kk_nawa").css("display", "inline");t=t+"縄<br>";}
	if(u07>=100){$("#kk_ts6").css("display", "inline");t=t+"貞操帯 エラー<br>";}
	if(u07>=75) {$("#kk_ts5").css("display", "inline");t=t+"貞操帯 LvMAX<br>";}
	if(u07>=50) {$("#kk_ts4").css("display", "inline");t=t+"貞操帯 Lv4<br>";}
	if(u07>=25) {$("#kk_ts3").css("display", "inline");t=t+"貞操帯 Lv3<br>";}
	if(u07>=10) {$("#kk_ts2").css("display", "inline");t=t+"貞操帯 Lv2<br>";}
	if(u07>=1)  {$("#kk_ts1").css("display", "inline");t=t+"貞操帯 Lv1<br>";}
	if(u09>=100){$("#kk_ss3").css("display", "inline");t=t+"生きてる貞操帯 Lv3<br>";}
	if(u09>=50) {$("#kk_ss2").css("display", "inline");t=t+"生きてる貞操帯 Lv2<br>";}
	if(u09>=1)  {$("#kk_ss1").css("display", "inline");t=t+"生きてる貞操帯 Lv1<br>";}
	if(u06>=20) {$("#kk_dr3").css("display", "inline");$("#kk_dl3").css("display", "inline");$("#kk_dm3").css("display", "inline");t=t+"電マ Lv3<br>";}
	if(u06>=10) {$("#kk_dr2").css("display", "inline");$("#kk_dl2").css("display", "inline");$("#kk_dm2").css("display", "inline");t=t+"電マ Lv2<br>";}
	if(u06>=1)  {$("#kk_dr1").css("display", "inline");$("#kk_dl1").css("display", "inline");$("#kk_dm1").css("display", "inline");t=t+"電マ Lv1<br>";}
	if(u03>=30) {$("#kk_dd4").css("display", "inline");t=t+"ディルド Lv4<br>";}
	if(u03>=20) {$("#kk_dd3").css("display", "inline");t=t+"ディルド Lv3<br>";}
	if(u03>=10) {$("#kk_dd2").css("display", "inline");t=t+"ディルド Lv2<br>";}
	if(u03>=1)  {$("#kk_dd1").css("display", "inline");t=t+"ディルド Lv1<br>";}
	if(u05>=10) {$("#kk_ap2").css("display", "inline");t=t+"アナルパール Lv2<br>";}
	if(u05>=1)  {$("#kk_ap1").css("display", "inline");t=t+"アナルパール Lv1<br>";}
	if(u02>=200){$("#kk_rc10").css("display", "inline");$("#kk_rd10").css("display", "inline");t=t+"ローター 10x2<br>";}
	if(u02>=175){$("#kk_rc9").css("display", "inline");$("#kk_rd9").css("display", "inline");t=t+"ローター 9x2<br>";}
	if(u02>=150){$("#kk_rc8").css("display", "inline");$("#kk_rd8").css("display", "inline");t=t+"ローター 8x2<br>";}
	if(u02>=125){$("#kk_rc7").css("display", "inline");$("#kk_rd7").css("display", "inline");t=t+"ローター 7x2<br>";}
	if(u02>=100){$("#kk_rc6").css("display", "inline");$("#kk_rd6").css("display", "inline");t=t+"ローター 6x2<br>";}
	if(u02>=75) {$("#kk_rc5").css("display", "inline");$("#kk_rd5").css("display", "inline");t=t+"ローター 5x2<br>";}
	if(u02>=50) {$("#kk_rc4").css("display", "inline");$("#kk_rd4").css("display", "inline");t=t+"ローター 4x2<br>";}
	if(u02>=25) {$("#kk_rc3").css("display", "inline");$("#kk_rd3").css("display", "inline");t=t+"ローター 3x2<br>";}
	if(u02>=10) {$("#kk_rc2").css("display", "inline");$("#kk_rd2").css("display", "inline");t=t+"ローター 2x2<br>";}
	if(u02>=1)  {$("#kk_rc1").css("display", "inline");$("#kk_rd1").css("display", "inline");t=t+"ローター 1x2<br>";}
	if(u02>=100){$("#kk_ra4").css("display", "inline");$("#kk_rb4").css("display", "inline");t=t+"ローター乳首 4x2<br>";}
	if(u02>=50) {$("#kk_ra3").css("display", "inline");$("#kk_rb3").css("display", "inline");t=t+"ローター乳首 3x2<br>";}
	if(u02>=25) {$("#kk_ra2").css("display", "inline");$("#kk_rb2").css("display", "inline");t=t+"ローター乳首 2x2<br>";}
	if(u02>=1)  {$("#kk_ra1").css("display", "inline");$("#kk_rb1").css("display", "inline");t=t+"ローター乳首 1x2<br>";}
	if(u04>=150){$("#kk_cl9").css("display", "inline");t=t+"栗 Lv9<br>";}
	if(u04>=100){$("#kk_cl8").css("display", "inline");t=t+"栗 Lv8<br>";}
	if(u04>=75) {$("#kk_cl7").css("display", "inline");t=t+"栗 Lv7<br>";}
	if(u04>=50) {$("#kk_cl6").css("display", "inline");t=t+"栗 Lv6<br>";}
	if(u04>=40) {$("#kk_cl5").css("display", "inline");t=t+"栗 Lv5<br>";}
	if(u04>=30) {$("#kk_cl4").css("display", "inline");t=t+"栗 Lv4<br>";}
	if(u04>=20) {$("#kk_cl3").css("display", "inline");t=t+"栗 Lv3<br>";}
	if(u04>=10) {$("#kk_cl2").css("display", "inline");t=t+"栗 Lv2<br>";}
	if(u04>=1)  {$("#kk_cl1").css("display", "inline");t=t+"栗 Lv1<br>";}
	if(t.length<1){t="解除はありません<br>";}
	$("#kisekae").html(t);
}


//--------------------------------------
//あへアニメ
function showAhe(x, y, wh,zoom, type) {
	var ahe = $('<div>').addClass('block').append($('<img>').attr('src', 'img/ahe.png').css('zoom', zoom).css('-moz-transform', 'scale(' + zoom + ',' + zoom + ')'));
	ahe.css('left', x);
	ahe.css('top' , y);
	ahe.css('position' , 'absolute');
	ahe.css('z-index' , '100');
	ahe.css('-moz-opacity' , 0.8);
	ahe.css('opacity' , 0.8);
	ahe.hide().fadeIn(1).animate({ top: y - 50},{duration:900,queue:false}).fadeOut(600, function () { $(this).remove(); });
	$('#ahe_area').append(ahe);
	return ahe;
}

//クリック時のアヘ顔
function showAheGao() {
	var s = $("input[name='r_face']:checked").val();
	var img0 = 'aks/body/w0'+s+'.png';
	var img1 = 'aks/body/w0'+s+'r.png';
	$('#target_img_exp').attr('src',img1);
	$('#target_img_exp').delay(250).queue(function() {$(this).attr('src',img0).dequeue();$(this).queue([]);$(this).stop();});
	//queueとstopでキュー空にしないと連打でエラーになる
}



//クリックだ！
function fun_c(){

	//あへ声を表示するキャンバスサイズ※ahe_areaのwidth:height
	var w = $('#ahe_area').width();
	var h = $('#ahe_area').height();

	var p = parseFloat(0+$("#p").html());
	var ttl01 = parseFloat(0+$("#ttl01").html());
	var ttl02 = parseFloat(0+$("#ttl02").html());

	var st_item_a01 = parseFloat(0+$("#st_item_a01").html());
	var st_item_a02 = parseFloat(0+$("#st_item_a02").html());
	var st_item_a03 = parseFloat(0+$("#st_item_a03").html());
	var st_item_a04 = parseFloat(0+$("#st_item_a04").html());

	//クリック時のアヘ顔------------　※
	if($('#ahm0').attr("checked")){
		showAheGao();

		//あへ声アニメ------------
		var x = Math.random() * w;
		var y = Math.random() * h;
		var wh = 20 + Math.random() * 80;
		var type = Math.floor(Math.random() * 5);
		var zoom = 0.3 + Math.random() * 0.9;
		showAhe(x, y, wh,zoom, type);

	}

	//解除された実績による増加率
	var r = 1;
	for (i=1;i<=9;i++){
		a = parseFloat(0+$("#st_item_a0"+i).html());
		if(a==2){
			$("#get_a0"+i).css("display", "block");$("#get_d_a0"+i).css("display", "none");
			r = r * 5;
		}
	}

	p=p+r;
	ttl02=ttl02+r;
	$("#krt").html(r);
	$("#krtP").html(separate(r));



	ttl01++;
	p  = Math.floor(p * 10) / 10;
	ttl01  = Math.floor(ttl01 * 10) / 10;
	ttl02  = Math.floor(ttl02 * 10) / 10;

	$("#p").html(p);
	$("#ttl01").html(ttl01);
	$("#ttl02").html(ttl02);
	$("#p_r").html(separate(p));
}




//自動増加だ！
function fun_up(id){
	var int_id = parseFloat(id);
	var p = parseFloat(0+$("#p").html());
	var u = parseFloat(0+$("#u0"+id).html());
	var f = parseFloat(0+$("#f0"+id).html());

	var a1 = [0,15,100,500,3000,10000,40000,200000,1800000,120000000];		//必要係数

	//buyCountはページ読み込み時にアイテムが買えてしまうバグの対策
	if(p>=f && buyCount>4){
		u++;
		p = p - f;
		$("#u0"+id).html(u);
		$("#p").html(p);
		$("#p_r").html(separate(p));

		//実績解除
		if(int_id==1){
			if(u==1){$("#st_item_a01").html("1");}
			if(u==10){$("#st_item_a02").html("1");}
			if(u==25){$("#st_item_a03").html("1");}
			if(u==50){$("#st_item_a04").html("1");}
			if(u==75){$("#st_item_a05").html("1");}
			if(u==100){$("#st_item_a06").html("1");}
			if(u==125){$("#st_item_a07").html("1");}
			if(u==150){$("#st_item_a08").html("1");}
			if(u==200){$("#st_item_a09").html("1");}
		} else if(int_id==2){
			if(u==10){$("#st_item_b01").html("1");}
			if(u==25){$("#st_item_b02").html("1");}
			if(u==50){$("#st_item_b03").html("1");}
			if(u==75){$("#st_item_b04").html("1");}
			if(u==100){$("#st_item_b05").html("1");}
		} else if(int_id==3){
			if(u==10){$("#st_item_c01").html("1");}
			if(u==25){$("#st_item_c02").html("1");}
			if(u==50){$("#st_item_c03").html("1");}
			if(u==75){$("#st_item_c04").html("1");}
			if(u==100){$("#st_item_c05").html("1");}
		} else if(int_id==4){
			if(u==10){$("#st_item_d01").html("1");}
			if(u==25){$("#st_item_d02").html("1");}
			if(u==50){$("#st_item_d03").html("1");}
			if(u==75){$("#st_item_d04").html("1");}
			if(u==100){$("#st_item_d05").html("1");}
		} else if(int_id==5){
			if(u==10){$("#st_item_e01").html("1");}
			if(u==25){$("#st_item_e02").html("1");}
			if(u==50){$("#st_item_e03").html("1");}
			if(u==75){$("#st_item_e04").html("1");}
			if(u==100){$("#st_item_e05").html("1");}
		} else if(int_id==6){
			if(u==10){$("#st_item_f01").html("1");}
			if(u==25){$("#st_item_f02").html("1");}
			if(u==50){$("#st_item_f03").html("1");}
			if(u==75){$("#st_item_f04").html("1");}
			if(u==100){$("#st_item_f05").html("1");}
		} else if(int_id==7){
			if(u==10){$("#st_item_g01").html("1");}
			if(u==25){$("#st_item_g02").html("1");}
			if(u==50){$("#st_item_g03").html("1");}
			if(u==75){$("#st_item_g04").html("1");}
			if(u==100){$("#st_item_g05").html("1");}
		} else if(int_id==8){
			if(u==10){$("#st_item_h01").html("1");}
			if(u==25){$("#st_item_h02").html("1");}
			if(u==50){$("#st_item_h03").html("1");}
			if(u==75){$("#st_item_h04").html("1");}
			if(u==100){$("#st_item_h05").html("1");}
		} else if(int_id==9){
			if(u==10){$("#st_item_i01").html("1");}
			if(u==25){$("#st_item_i02").html("1");}
			if(u==50){$("#st_item_i03").html("1");}
			if(u==75){$("#st_item_i04").html("1");}
			if(u==100){$("#st_item_i05").html("1");}
		}
	}

	//複利計算
	for (i=0;i<=9;i++){
		f = a1[i];
		u = parseFloat(0+$("#u0"+i).html());
		if (u>0){
			for (ii=1;ii<=u;ii++){f = Math.ceil(f * 1.15);}
		}
		$("#f0"+i).html(f);
		$("#f0"+i+"p").html(separate(f));

	}
}

//実績解除だ！
function fun_break(cd,kakaku){
	//解除にかかる「あへ」
	var kakaku = parseFloat(kakaku);
	var p = parseFloat(0+$("#p").html());
	if(p >= kakaku){
		p = p - kakaku;
		$("#p").html(p);
		$("#p_r").html(separate(p));
		$("#"+cd).html("2");
	}
}







//セーブだ！
function fun_save(s){

	//s=1任意セーブ/s=0オートセーブ
	var vl = "";

	vl += "?room=room002";
	vl += "&p="+ parseFloat(0+$("#p").html());
	vl += "&a1="+ parseFloat(0+$("#u01").html());
	vl += "&a2="+ parseFloat(0+$("#u02").html());
	vl += "&a3="+ parseFloat(0+$("#u03").html());
	vl += "&a4="+ parseFloat(0+$("#u04").html());
	vl += "&a5="+ parseFloat(0+$("#u05").html());
	vl += "&a6="+ parseFloat(0+$("#u06").html());
	vl += "&a7="+ parseFloat(0+$("#u07").html());
	vl += "&a8="+ parseFloat(0+$("#u08").html());
	vl += "&a9="+ parseFloat(0+$("#u09").html());

	vl += "&t1="+ parseFloat(0+$("#ttl01").html());
	vl += "&t2="+ parseFloat(0+$("#ttl02").html());
	vl += "&t3="+ parseFloat(0+$("#ttl03").html());
	vl += "&t4="+ parseFloat(0+$("#golden_cnt").html());

	vl += "&v1="+ parseFloat(0+$("#st_item_a01").html());
	vl += "&v2="+ parseFloat(0+$("#st_item_a02").html());
	vl += "&v3="+ parseFloat(0+$("#st_item_a03").html());
	vl += "&v4="+ parseFloat(0+$("#st_item_a04").html());
	vl += "&v5="+ parseFloat(0+$("#st_item_a05").html());
	vl += "&v6="+ parseFloat(0+$("#st_item_a06").html());
	vl += "&v7="+ parseFloat(0+$("#st_item_a07").html());
	vl += "&v8="+ parseFloat(0+$("#st_item_a08").html());
	vl += "&v9="+ parseFloat(0+$("#st_item_a09").html());
	vl += "&v10="+ parseFloat(0+$("#st_item_b01").html());
	vl += "&v11="+ parseFloat(0+$("#st_item_b02").html());
	vl += "&v12="+ parseFloat(0+$("#st_item_b03").html());
	vl += "&v13="+ parseFloat(0+$("#st_item_b04").html());
	vl += "&v14="+ parseFloat(0+$("#st_item_b05").html());
	vl += "&v15="+ parseFloat(0+$("#st_item_c01").html());
	vl += "&v16="+ parseFloat(0+$("#st_item_c02").html());
	vl += "&v17="+ parseFloat(0+$("#st_item_c03").html());
	vl += "&v18="+ parseFloat(0+$("#st_item_c04").html());
	vl += "&v19="+ parseFloat(0+$("#st_item_c05").html());
	vl += "&v20="+ parseFloat(0+$("#st_item_d01").html());
	vl += "&v21="+ parseFloat(0+$("#st_item_d02").html());
	vl += "&v22="+ parseFloat(0+$("#st_item_d03").html());
	vl += "&v23="+ parseFloat(0+$("#st_item_d04").html());
	vl += "&v24="+ parseFloat(0+$("#st_item_d05").html());
	vl += "&v25="+ parseFloat(0+$("#st_item_e01").html());
	vl += "&v26="+ parseFloat(0+$("#st_item_e02").html());
	vl += "&v27="+ parseFloat(0+$("#st_item_e03").html());
	vl += "&v28="+ parseFloat(0+$("#st_item_e04").html());
	vl += "&v29="+ parseFloat(0+$("#st_item_e05").html());
	vl += "&v30="+ parseFloat(0+$("#st_item_f01").html());
	vl += "&v31="+ parseFloat(0+$("#st_item_f02").html());
	vl += "&v32="+ parseFloat(0+$("#st_item_f03").html());
	vl += "&v33="+ parseFloat(0+$("#st_item_f04").html());
	vl += "&v34="+ parseFloat(0+$("#st_item_f05").html());
	vl += "&v35="+ parseFloat(0+$("#st_item_g01").html());
	vl += "&v36="+ parseFloat(0+$("#st_item_g02").html());
	vl += "&v37="+ parseFloat(0+$("#st_item_g03").html());
	vl += "&v38="+ parseFloat(0+$("#st_item_g04").html());
	vl += "&v39="+ parseFloat(0+$("#st_item_g05").html());
	vl += "&v40="+ parseFloat(0+$("#st_item_h01").html());
	vl += "&v41="+ parseFloat(0+$("#st_item_h02").html());
	vl += "&v42="+ parseFloat(0+$("#st_item_h03").html());
	vl += "&v43="+ parseFloat(0+$("#st_item_h04").html());
	vl += "&v44="+ parseFloat(0+$("#st_item_h05").html());
	vl += "&v45="+ parseFloat(0+$("#st_item_i01").html());
	vl += "&v46="+ parseFloat(0+$("#st_item_i02").html());
	vl += "&v47="+ parseFloat(0+$("#st_item_i03").html());
	vl += "&v48="+ parseFloat(0+$("#st_item_i04").html());
	vl += "&v49="+ parseFloat(0+$("#st_item_i05").html());

	if(s=="1"){
		$("#bloc_save").css("display", "block");
		$("#bloc_load").css("display", "none");
	}
//	document.ifre.location.href = "save.php" + vl;
	document.getElementById("ifre").src = "save.php" + vl;	//FFはこっちでないとだめ！

}


//-----------

function fun_body(s){
	if(s==1){
		$('#target_img_body').attr('src','aks/body/b01.png');
		//強制的に縄は解除
		$("#r_nawa1").prop("checked",true);
		$('#t_sbi_s2').attr('src','aks/parts/none.png');
	} else if(s==2){
		$('#target_img_body').attr('src','aks/body/b02.png');
		//強制的に縄は解除
		$("#r_nawa1").prop("checked",true);
		$('#t_sbi_s2').attr('src','aks/parts/none.png');
	} else if(s==3){
		$('#target_img_body').attr('src','aks/body/b03.png');
		//強制的に服からローター解除
		$("#r_rd0").prop("checked",true);
		$('#t_sbi_rd').attr('src','aks/parts/none.png');
	}
}
function fun_face(s){
	if(s==1){
		$('#target_img_head').attr('src','aks/body/h01.png');
		$('#target_img_exp').attr('src','aks/body/w01.png');
	} else if(s==2){
		$('#target_img_head').attr('src','aks/body/h02.png');
		$('#target_img_exp').attr('src','aks/body/w02.png');
	} else if(s==3){
		$('#target_img_head').attr('src','aks/body/h03.png');
		$('#target_img_exp').attr('src','aks/body/w03.png');
	} else if(s==4){
		$('#target_img_head').attr('src','aks/body/h04.png');
		$('#target_img_exp').attr('src','aks/body/w04.png');
	} else if(s==5){
		$('#target_img_head').attr('src','aks/body/h05.png');
		$('#target_img_exp').attr('src','aks/body/w05.png');
	}
}

function fun_pt(s){
	if(s==1){
		$('#t_sbi_s1').attr('src','aks/parts/s01.png');
	} else {
		$('#t_sbi_s1').attr('src','aks/parts/none.png');
	}
}
function fun_nawa(s){
	if(s==1){
		$('#t_sbi_s2').attr('src','aks/parts/s02.png');
		//強制的に服を脱がす
		$("#r_body3").prop("checked",true);
		$("#r_rd0").prop("checked",true);
		$('#target_img_body').attr('src','aks/body/b03.png');
		$('#t_sbi_rd').attr('src','aks/parts/none.png');
	} else {
		$('#t_sbi_s2').attr('src','aks/parts/none.png');
	}
}
function fun_ts(s){
	if(s==1){
		$('#t_sbi_ts').attr('src','aks/parts/ts01.png');
	} else if(s==2){
		$('#t_sbi_ts').attr('src','aks/parts/ts02.png');
	} else if(s==3){
		$('#t_sbi_ts').attr('src','aks/parts/ts03.png');
	} else if(s==4){
		$('#t_sbi_ts').attr('src','aks/parts/ts04.png');
	} else if(s==5){
		$('#t_sbi_ts').attr('src','aks/parts/ts05.png');
	} else if(s==6){
		$('#t_sbi_ts').attr('src','aks/parts/ts06.png');
	} else {
		$('#t_sbi_ts').attr('src','aks/parts/none.png');
	}
}
function fun_ss(s){
	if(s==1){
		$('#t_sbi_ss').attr('src','aks/parts/ss01.png');
	} else if(s==2){
		$('#t_sbi_ss').attr('src','aks/parts/ss02.png');
	} else if(s==3){
		$('#t_sbi_ss').attr('src','aks/parts/ss03.png');
	} else {
		$('#t_sbi_ss').attr('src','aks/parts/none.png');
	}
}
function fun_mj(s){
	if(s==1){
		$('#t_sbi_mj').attr('src','aks/parts/mj01.png');
	} else if(s==2){
		$('#t_sbi_mj').attr('src','aks/parts/mj02.png');
	} else if(s==3){
		$('#t_sbi_mj').attr('src','aks/parts/mj03.png');
	} else {
		$('#t_sbi_mj').attr('src','aks/parts/none.png');
	}
}
function fun_dr(s){
	if(s==1){
		$('#t_sbi_dr').attr('src','aks/parts/dr01.png');
	} else if(s==2){
		$('#t_sbi_dr').attr('src','aks/parts/dr02.png');
	} else if(s==3){
		$('#t_sbi_dr').attr('src','aks/parts/dr03.png');
	} else {
		$('#t_sbi_dr').attr('src','aks/parts/none.png');
	}
}
function fun_dl(s){
	if(s==1){
		$('#t_sbi_dl').attr('src','aks/parts/dl01.png');
	} else if(s==2){
		$('#t_sbi_dl').attr('src','aks/parts/dl02.png');
	} else if(s==3){
		$('#t_sbi_dl').attr('src','aks/parts/dl03.png');
	} else {
		$('#t_sbi_dl').attr('src','aks/parts/none.png');
	}
}
function fun_dm(s){
	if(s==1){
		$('#t_sbi_dm').attr('src','aks/parts/dm01.png');
	} else if(s==2){
		$('#t_sbi_dm').attr('src','aks/parts/dm02.png');
	} else if(s==3){
		$('#t_sbi_dm').attr('src','aks/parts/dm03.png');
	} else {
		$('#t_sbi_dm').attr('src','aks/parts/none.png');
	}
}

function fun_dd(s){
	if(s==1){
		$('#t_sbi_dd').attr('src','aks/parts/dd01.png');
	} else if(s==2){
		$('#t_sbi_dd').attr('src','aks/parts/dd02.png');
	} else if(s==3){
		$('#t_sbi_dd').attr('src','aks/parts/dd03.png');
	} else if(s==4){
		$('#t_sbi_dd').attr('src','aks/parts/dd04.png');
	} else {
		$('#t_sbi_dd').attr('src','aks/parts/none.png');
	}
}
function fun_ap(s){
	if(s==1){
		$('#t_sbi_ap').attr('src','aks/parts/ap01.png');
	} else if(s==2){
		$('#t_sbi_ap').attr('src','aks/parts/ap02.png');
	} else {
		$('#t_sbi_ap').attr('src','aks/parts/none.png');
	}
}
function fun_ra(s){
	if(s>0){
		$('#t_sbi_ra').attr('src','aks/parts/ra0'+s+'.png');
	} else {
		$('#t_sbi_ra').attr('src','aks/parts/none.png');
	}
}
function fun_rb(s){
	if(s>0){
		$('#t_sbi_rb').attr('src','aks/parts/rb0'+s+'.png');
	} else {
		$('#t_sbi_rb').attr('src','aks/parts/none.png');
	}
}
function fun_rc(s){
	if(s==10){
		$('#t_sbi_rc').attr('src','aks/parts/rc10.png');
	} else if(s>0){
		$('#t_sbi_rc').attr('src','aks/parts/rc0'+s+'.png');
	} else {
		$('#t_sbi_rc').attr('src','aks/parts/none.png');
	}
}
function fun_rd(s){
	if(s==10){
		$('#t_sbi_rd').attr('src','aks/parts/rd10.png');
		//強制的に服を着せる
		$("#r_body2").prop("checked",true);
		$("#r_nawa1").prop("checked",true);
		$('#target_img_body').attr('src','aks/body/b02.png');
		$('#t_sbi_s2').attr('src','aks/parts/none.png');
	} else if(s>0){
		$('#t_sbi_rd').attr('src','aks/parts/rd0'+s+'.png');
		//強制的に服を着せる
		$("#r_body2").prop("checked",true);
		$("#r_nawa1").prop("checked",true);
		$('#target_img_body').attr('src','aks/body/b02.png');
		$('#t_sbi_s2').attr('src','aks/parts/none.png');
	} else {
		$('#t_sbi_rd').attr('src','aks/parts/none.png');
	}
}
function fun_cl(s){
	if(s>0){
		$('#t_sbi_cl').attr('src','aks/parts/cl0'+s+'.png');
	} else {
		$('#t_sbi_cl').attr('src','aks/parts/none.png');
	}
}


// 正規表現でセパレート
function separate(num){
	return String(num).replace( /(\d)(?=(\d\d\d)+(?!\d))/g, '$1,');
}


//チンコゆらゆら 20150524
function fun_chin_open(s){
	if(s==1){
		chinco=1;
		$("#ahe_chinco").slideDown('normal');
		$("#chin_open").slideUp('normal');
		$("#chin_syasei").slideDown('normal');
		$("#chin_close").slideDown('normal');
	}else{
		chinco=0;
		$("#ahe_chinco").slideUp('normal');
		$("#chin_open").slideDown('normal');
		$("#chin_syasei").slideUp('normal');
		$("#chin_close").slideUp('normal');

	}
}
function fun_chin_mv(){
	var rx = 380+(Math.random()*5-2.5);
	var ry = 420+(Math.random()*5-2.5);
	if(t%40==0){
		$('#ahe_chinco').animate({left: rx,top: ry}, 300);
	}
}
//射精 20150524
function funSyasei(){
	var x = 20+Math.random()*300;
	var y = Math.random()*700;
	var zoom = 0.4 + Math.random() * 0.4;
	img = parseInt(Math.random() * 6) + 1;
	var ahe = $('<div>').addClass('sperm').append($('<img>').attr('src', 'img/seki0'+img+'.png').css('zoom', zoom).css('-moz-transform', 'scale(' + zoom + ',' + zoom + ')'));
	ahe.css('left', x);
	ahe.css('top' , y);
	ahe.css('position' , 'absolute');
	ahe.css('z-index' , '100');
	ahe.css('-khtml-opacity' , 0.95);
	ahe.css('-moz-opacity' , 0.95);
	ahe.css('opacity' , 0.95);
	ahe.hide().fadeIn(10).delay(6000).animate({top:y+10},{duration:1500,queue:false}).fadeOut(1200,function(){$(this).remove();});
	$('#ahe_white').append(ahe);

	$('#img_chinco1').css('display','none');
	$('#img_chinco2').css('display','block');
	setTimeout(function() {
		$('#img_chinco1').css('display','block');
		$('#img_chinco2').css('display','none');
	},20);




}
</script>



<body OnLoad="render();fun_up(0)">

<div id="test"></div>


<div id="all">
	<div id="contents_click">

<input type="button" value="着せ替え あへ子" onClick="openbox('着せ替え あへ子', 1)" style="margin:5px 0 0 10px;width:200px;height:32px;">

<div id="shadowing"></div>
<div id="box">
	<span id="boxtitle"></span>





	<table>
		<tr>
			<td>体</td>
			<td>
				<span id="kk_body2"><input type="radio" value="3" name="r_body" id="r_body3" OnChange="fun_body(this.value);"> 裸体 </span>
				<input type="radio" value="1" name="r_body" id="r_body1" OnChange="fun_body(this.value);" checked> 着衣 
				<span id="kk_body1"><input type="radio" value="2" name="r_body" id="r_body2" OnChange="fun_body(this.value);"> 着衣(乳首立ち) </span>
			</tb>
		</tr>
		<tr>
			<td>あへ顔</td>
			<td>
				<input type="radio" value="1" name="r_face" OnChange="fun_face(this.value);" checked> Lv1 
				<span id="kk_face1"><input type="radio" value="2" name="r_face" OnChange="fun_face(this.value);"> Lv2 </span>
				<span id="kk_face2"><input type="radio" value="3" name="r_face" OnChange="fun_face(this.value);"> Lv3 </span>
				<span id="kk_face3"><input type="radio" value="4" name="r_face" OnChange="fun_face(this.value);"> Lv4 </span>
				<span id="kk_face4"><input type="radio" value="5" name="r_face" OnChange="fun_face(this.value);"> Lv5 </span>
			</tb>
		</tr>
		<tr>
			<td>パンツ</td>
			<td>
				<span id="kk_pt"><input type="radio" value="0" name="r_pt" OnChange="fun_pt(this.value);"> 無し </span>
				<input type="radio" value="1" name="r_pt" OnChange="fun_pt(this.value);" checked> 有り 
			</tb>
		</tr>
		<tr>
			<td>縄</td>
			<td>
				<input type="radio" value="0" name="r_nawa" id="r_nawa1" OnChange="fun_nawa(this.value);" checked> 無し 
				<span id="kk_nawa"><input type="radio" value="1" name="r_nawa" id="r_nawa2" OnChange="fun_nawa(this.value);"> 有り </span>
			</tb>
		</tr>
		<tr>
			<td>貞操帯</td>
			<td>
				<input type="radio" value="0" name="r_ts" OnChange="fun_ts(this.value);" checked> 無し 
				<span id="kk_ts1"><input type="radio" value="1" name="r_ts" OnChange="fun_ts(this.value);"> Lv1 </span>
				<span id="kk_ts2"><input type="radio" value="2" name="r_ts" OnChange="fun_ts(this.value);"> Lv2 </span>
				<span id="kk_ts3"><input type="radio" value="3" name="r_ts" OnChange="fun_ts(this.value);"> Lv3 </span>
				<span id="kk_ts4"><input type="radio" value="4" name="r_ts" OnChange="fun_ts(this.value);"> Lv4 </span>
				<span id="kk_ts5"><input type="radio" value="5" name="r_ts" OnChange="fun_ts(this.value);"> LvMAX </span>
				<span id="kk_ts6"><input type="radio" value="6" name="r_ts" OnChange="fun_ts(this.value);"> エラー </span>
			</tb>
		</tr>
		<tr>
			<td>生きてる貞操帯</td>
			<td>
				<input type="radio" value="0" name="r_ss" OnChange="fun_ss(this.value);" checked> 無し 
				<span id="kk_ss1"><input type="radio" value="1" name="r_ss" OnChange="fun_ss(this.value);"> Lv1 </span>
				<span id="kk_ss2"><input type="radio" value="2" name="r_ss" OnChange="fun_ss(this.value);"> Lv2 </span>
				<span id="kk_ss3"><input type="radio" value="3" name="r_ss" OnChange="fun_ss(this.value);"> Lv3 </span>
			</tb>
		</tr>
		<tr>
			<td>また汁</td>
			<td>
				<input type="radio" value="0" name="r_mj" OnChange="fun_mj(this.value);" checked> 無し 
				<span id="kk_mj1"><input type="radio" value="1" name="r_mj" OnChange="fun_mj(this.value);"> Lv1 </span>
				<span id="kk_mj2"><input type="radio" value="2" name="r_mj" OnChange="fun_mj(this.value);"> Lv2 </span>
				<span id="kk_mj3"><input type="radio" value="3" name="r_mj" OnChange="fun_mj(this.value);"> Lv3 </span>
			</tb>
		</tr>
		<tr>
			<td>電マ(右)</td>
			<td>
				<input type="radio" value="0" name="r_dr" OnChange="fun_dr(this.value);" checked> 無し 
				<span id="kk_dr1"><input type="radio" value="1" name="r_dr" OnChange="fun_dr(this.value);"> Lv1 </span>
				<span id="kk_dr2"><input type="radio" value="2" name="r_dr" OnChange="fun_dr(this.value);"> Lv2 </span>
				<span id="kk_dr3"><input type="radio" value="3" name="r_dr" OnChange="fun_dr(this.value);"> Lv3 </span>
			</tb>
		</tr>
		<tr>
			<td>電マ(左)</td>
			<td>
				<input type="radio" value="0" name="r_dl" OnChange="fun_dl(this.value);" checked> 無し 
				<span id="kk_dl1"><input type="radio" value="1" name="r_dl" OnChange="fun_dl(this.value);"> Lv1 </span>
				<span id="kk_dl2"><input type="radio" value="2" name="r_dl" OnChange="fun_dl(this.value);"> Lv2 </span>
				<span id="kk_dl3"><input type="radio" value="3" name="r_dl" OnChange="fun_dl(this.value);"> Lv3 </span>
			</tb>
		</tr>
		<tr>
			<td>電マ(股間)</td>
			<td>
				<input type="radio" value="0" name="r_dm" OnChange="fun_dm(this.value);" checked> 無し 
				<span id="kk_dm1"><input type="radio" value="1" name="r_dm" OnChange="fun_dm(this.value);"> Lv1 </span>
				<span id="kk_dm2"><input type="radio" value="2" name="r_dm" OnChange="fun_dm(this.value);"> Lv2 </span>
				<span id="kk_dm3"><input type="radio" value="3" name="r_dm" OnChange="fun_dm(this.value);"> Lv3 </span>
			</tb>
		</tr>
		<tr>
			<td>ディルド</td>
			<td>
				<input type="radio" value="0" name="r_dd" OnChange="fun_dd(this.value);" checked> 無し 
				<span id="kk_dd1"><input type="radio" value="1" name="r_dd" OnChange="fun_dd(this.value);"> Lv1 </span>
				<span id="kk_dd2"><input type="radio" value="2" name="r_dd" OnChange="fun_dd(this.value);"> Lv2 </span>
				<span id="kk_dd3"><input type="radio" value="3" name="r_dd" OnChange="fun_dd(this.value);"> Lv3 </span>
				<span id="kk_dd4"><input type="radio" value="4" name="r_dd" OnChange="fun_dd(this.value);"> Lv4 </span>
			</tb>
		</tr>
		<tr>
			<td>アナルパール</td>
			<td>
				<input type="radio" value="0" name="r_ap" OnChange="fun_ap(this.value);" checked> 無し 
				<span id="kk_ap1"><input type="radio" value="1" name="r_ap" OnChange="fun_ap(this.value);"> Lv1 </span>
				<span id="kk_ap2"><input type="radio" value="2" name="r_ap" OnChange="fun_ap(this.value);"> Lv2 </span>
			</tb>
		</tr>
		<tr>
			<td>ローター(右)</td>
			<td>
				<input type="radio" value="0" name="r_ra" OnChange="fun_ra(this.value);" checked> 無し 
				<span id="kk_ra1"><input type="radio" value="1" name="r_ra" OnChange="fun_ra(this.value);"> 1 </span>
				<span id="kk_ra2"><input type="radio" value="2" name="r_ra" OnChange="fun_ra(this.value);"> 2 </span>
				<span id="kk_ra3"><input type="radio" value="3" name="r_ra" OnChange="fun_ra(this.value);"> 3 </span>
				<span id="kk_ra4"><input type="radio" value="4" name="r_ra" OnChange="fun_ra(this.value);"> 4 </span>
			</tb>
		</tr>
		<tr>
			<td>ローター(左)</td>
			<td>
				<input type="radio" value="0" name="r_rb" OnChange="fun_rb(this.value);" checked> 無し 
				<span id="kk_rb1"><input type="radio" value="1" name="r_rb" OnChange="fun_rb(this.value);"> 1 </span>
				<span id="kk_rb2"><input type="radio" value="2" name="r_rb" OnChange="fun_rb(this.value);"> 2 </span>
				<span id="kk_rb3"><input type="radio" value="3" name="r_rb" OnChange="fun_rb(this.value);"> 3 </span>
				<span id="kk_rb4"><input type="radio" value="4" name="r_rb" OnChange="fun_rb(this.value);"> 4 </span>
			</tb>
		</tr>
		<tr>
			<td>ローター(足)</td>
			<td>
				<input type="radio" value="0" name="r_rc" OnChange="fun_rc(this.value);" checked> 無し 
				<span id="kk_rc1"><input type="radio" value="1" name="r_rc" OnChange="fun_rc(this.value);"> 1 </span>
				<span id="kk_rc2"><input type="radio" value="2" name="r_rc" OnChange="fun_rc(this.value);"> 2 </span>
				<span id="kk_rc3"><input type="radio" value="3" name="r_rc" OnChange="fun_rc(this.value);"> 3 </span>
				<span id="kk_rc4"><input type="radio" value="4" name="r_rc" OnChange="fun_rc(this.value);"> 4 </span>
				<span id="kk_rc5"><input type="radio" value="5" name="r_rc" OnChange="fun_rc(this.value);"> 5 </span>
				<span id="kk_rc6"><input type="radio" value="6" name="r_rc" OnChange="fun_rc(this.value);"> 6 </span>
				<span id="kk_rc7"><input type="radio" value="7" name="r_rc" OnChange="fun_rc(this.value);"> 7 </span>
				<span id="kk_rc8"><input type="radio" value="8" name="r_rc" OnChange="fun_rc(this.value);"> 8 </span>
				<span id="kk_rc9"><input type="radio" value="9" name="r_rc" OnChange="fun_rc(this.value);"> 9 </span>
				<span id="kk_rc10"><input type="radio" value="10" name="r_rc" OnChange="fun_rc(this.value);"> 10 </span>
			</tb>
		</tr>
		<tr>
			<td>ローター(服から)</td>
			<td>
				<input type="radio" value="0" name="r_rd" id="r_rd0" OnChange="fun_rd(this.value);" checked> 無し 
				<span id="kk_rd1"><input type="radio" value="1" name="r_rd" id="r_rd1" OnChange="fun_rd(this.value);"> 1 </span>
				<span id="kk_rd2"><input type="radio" value="2" name="r_rd" id="r_rd2" OnChange="fun_rd(this.value);"> 2 </span>
				<span id="kk_rd3"><input type="radio" value="3" name="r_rd" id="r_rd3" OnChange="fun_rd(this.value);"> 3 </span>
				<span id="kk_rd4"><input type="radio" value="4" name="r_rd" id="r_rd4" OnChange="fun_rd(this.value);"> 4 </span>
				<span id="kk_rd5"><input type="radio" value="5" name="r_rd" id="r_rd5" OnChange="fun_rd(this.value);"> 5 </span>
				<span id="kk_rd6"><input type="radio" value="6" name="r_rd" id="r_rd6" OnChange="fun_rd(this.value);"> 6 </span>
				<span id="kk_rd7"><input type="radio" value="7" name="r_rd" id="r_rd7" OnChange="fun_rd(this.value);"> 7 </span>
				<span id="kk_rd8"><input type="radio" value="8" name="r_rd" id="r_rd8" OnChange="fun_rd(this.value);"> 8 </span>
				<span id="kk_rd9"><input type="radio" value="9" name="r_rd" id="r_rd9" OnChange="fun_rd(this.value);"> 9 </span>
				<span id="kk_rd10"><input type="radio" value="10" name="r_rd" id="r_rd10" OnChange="fun_rd(this.value);"> 10 </span>
			</tb>
		</tr>
		<tr>
			<td>栗</td>
			<td>
				<input type="radio" value="0" name="r_cl" OnChange="fun_cl(this.value);" checked> 無し 
				<span id="kk_cl1"><input type="radio" value="1" name="r_cl" OnChange="fun_cl(this.value);"> Lv1 </span>
				<span id="kk_cl2"><input type="radio" value="2" name="r_cl" OnChange="fun_cl(this.value);"> Lv2 </span>
				<span id="kk_cl3"><input type="radio" value="3" name="r_cl" OnChange="fun_cl(this.value);"> Lv3 </span>
				<span id="kk_cl4"><input type="radio" value="4" name="r_cl" OnChange="fun_cl(this.value);"> Lv4 </span>
				<span id="kk_cl5"><input type="radio" value="5" name="r_cl" OnChange="fun_cl(this.value);"> Lv5 </span>
				<span id="kk_cl6"><input type="radio" value="6" name="r_cl" OnChange="fun_cl(this.value);"> Lv6 </span>
				<span id="kk_cl7"><input type="radio" value="7" name="r_cl" OnChange="fun_cl(this.value);"> Lv7 </span>
				<span id="kk_cl8"><input type="radio" value="8" name="r_cl" OnChange="fun_cl(this.value);"> Lv8 </span>
				<span id="kk_cl9"><input type="radio" value="9" name="r_cl" OnChange="fun_cl(this.value);"> Lv9 </span>
			</tb>
		</tr>
	</table>

	<div style="width:100%;text-align:center;margin-top:15px;">
		<input type="button" name="cancel" value="閉じる" onClick="closebox()" style="width:160px;height:35px;">
	</div>

</div>


<style>
#chin_open{cursor:pointer;}
#chin_close{cursor:pointer;display:none;}
#chin_syasei{cursor:pointer;display:none;margin:10px 0 0 0;}
</style>
		<div id="chinco_block" style="margin:10px 0 0 10px;">
			<div OnClick='fun_chin_open(1);' id="chin_open">Chinco Open</div>
			<div OnClick='fun_chin_open(0);' id="chin_close">Chinco Close</div>
			<div id="chin_syasei">
				<div id="fire" OnClick='funSyasei();'><img src="img/sya01.jpg" /></div>
			</div>
		</div>




		<div id="item_list">アイテムショップ</div>



		<div class="item_data" id="up01" OnClick='fun_up(1);'>
			<div class="item_img"><img src="aks/item_a01.png" ></div>
			<div class="item_text">
				<div class="item_name">カーソル</div>
				<div class="item_kakaku"><span id="f01" style="display:none;">15</span><span id="f01p"></span> あへ</div>
				<div class="item_get">所持数： <span id="u01">0</span> 個</div>
			</div>
		</div>


		<div class="item_data" id="up02" OnClick='fun_up(2);'>
			<div class="item_img"><img src="aks/item_b01.png" ></div>
			<div class="item_text">
				<div class="item_name">ローター</div>
				<div class="item_kakaku"><span id="f02" style="display:none;">100</span><span id="f02p"></span> あへ</div>
				<div class="item_get">所持数： <span id="u02">0</span> 個</div>
			</div>
		</div>


		<div class="item_data" id="up03" OnClick='fun_up(3);'>
			<div class="item_img"><img src="aks/item_c01.png" ></div>
			<div class="item_text">
				<div class="item_name">バイブ</div>
				<div class="item_kakaku"><span id="f03" style="display:none;">500</span><span id="f03p"></span> あへ</div>
				<div class="item_get">所持数： <span id="u03">0</span> 個</div>
			</div>
		</div>


		<div class="item_data" id="up04" OnClick='fun_up(4);'>
			<div class="item_img"><img src="aks/item_d01.png" ></div>
			<div class="item_text">
				<div class="item_name">媚薬</div>
				<div class="item_kakaku"><span id="f04" style="display:none;">3000</span><span id="f04p"></span> あへ</div>
				<div class="item_get">所持数： <span id="u04">0</span> 個</div>
			</div>
		</div>



		<div class="item_data" id="up05" OnClick='fun_up(5);'>
			<div class="item_img"><img src="aks/item_e01.png" ></div>
			<div class="item_text">
				<div class="item_name">アナルパール</div>
				<div class="item_kakaku"><span id="f05" style="display:none;">10000</span><span id="f05p"></span> あへ</div>
				<div class="item_get">所持数： <span id="u05">0</span> 個</div>
			</div>
		</div>

		<div class="item_data" id="up06" OnClick='fun_up(6);'>
			<div class="item_img"><img src="aks/item_f01.png" ></div>
			<div class="item_text">
				<div class="item_name">電マ</div>
				<div class="item_kakaku"><span id="f06" style="display:none;">40000</span><span id="f06p"></span> あへ</div>
				<div class="item_get">所持数： <span id="u06">0</span> 個</div>
			</div>
		</div>


		<div class="item_data" id="up07" OnClick='fun_up(7);'>
			<div class="item_img"><img src="aks/item_g01.png" ></div>
			<div class="item_text">
				<div class="item_name">貞操帯</div>
				<div class="item_kakaku"><span id="f07" style="display:none;">200000</span><span id="f07p"></span> あへ</div>
				<div class="item_get">所持数： <span id="u07">0</span> 個</div>
			</div>
		</div>

		<div class="item_data" id="up08" OnClick='fun_up(8);'>
			<div class="item_img"><img src="aks/item_h01.png" ></div>
			<div class="item_text">
				<div class="item_name">縄</div>
				<div class="item_kakaku"><span id="f08" style="display:none;">1800000</span><span id="f08p"></span> あへ</div>
				<div class="item_get">所持数： <span id="u08">0</span> 個</div>
			</div>
		</div>

		<div class="item_data" id="up09" OnClick='fun_up(9);'>
			<div class="item_img"><img src="aks/item_i01.png" ></div>
			<div class="item_text">
				<div class="item_name">生きてる貞操帯</div>
				<div class="item_kakaku"><span id="f09" style="display:none;">120000000</span><span id="f09p"></span> あへ</div>
				<div class="item_get">所持数： <span id="u09">0</span> 個</div>
			</div>
		</div>


		<p>■着せ替え実績解除			<div id="kisekae" style="margin:5px 0 0 10px;"></div>
		</p>


		<p>
			<span style="font-weight:bold;">Version 1.03.06</span>：チンコ機能追加<br>
			<span style="font-weight:bold;">Version 1.03.05</span>：音声再生バグ修正<br>
			<span style="font-weight:bold;">Version 1.03.04</span>：初期化ボタンを非表示にしました<br>
			<span style="font-weight:bold;">Version 1.03.03</span>：英語一部訂正<br>
			<span style="font-weight:bold;">Version 1.03.02</span>：ページ読み込み時にブラウザの読み込みが遅延するとアイテムが無料で購入できるバグ修正<br>
			<span style="font-weight:bold;">Version 1.03.01</span>：英語一部訂正<br>
			<span style="font-weight:bold;">Version 1.03.00</span>：英語バージョンリリース<br>
			<span style="font-weight:bold;">Version 1.02.04</span>：セーブ時の19桁以上非対応バグ修正/あへ表示OFF機能追加<br>
			<span style="font-weight:bold;">Version 1.02.03</span>：数字22桁以上対応(e+表記で若干誤差有り)<br>
			<span style="font-weight:bold;">Version 1.02.02</span>：文字修正<br>
			<span style="font-weight:bold;">Version 1.02.01</span>：全部数字にカンマ区切り付けた/文字修正とかとか<br>
			<span style="font-weight:bold;">Version 1.02.00</span>：FFでセーブできない不具合修正/アイテムの価格+1ないと購入できない不具合修正/BGM設置/数字にカンマ区切り付けた<br>



<br>
【解説】<br>
Apt:アヘポイント。１クリックあたりのあへ数<br>
ApS:Ahe per second。１秒あたりのあへ数<br>
ゴールデンあへをクリックすると、あへが２割増えるぞ！<br>
着せ替え実績解除をしたら、左上の「着せ替え あへ子」から着せ替えをしよう！<br>
<br>
バグとかみつけたら、<a href="http://www.tomatama.com/bbs/?cd=gah1" target="_blank">あへくりっく公式掲示板</a>にご連絡ください。<br>



		</p>





		<p><a href="/goods/as02.php" target="_blank"><img src="/goods/bn/as02/bn_as02_200x70.jpg" alt="オナニー大好き少女のオナニー禁止地獄" width="200" height="70" /></a></p>
		<p><a href="/goods/as01.php" target="_blank"><img src="/goods/bn/as01/bn_as01_200x70.jpg" alt="触手服" width="200" height="70" /></a></p>
		<p><img src="aks/bn_ahecl_200x70.jpg" width="200" height="70" alt="あへくりっく" /></p>
		<p><img src="aks/bn_ahecl_200x40.jpg" width="200" height="40" alt="あへくりっく" /></p>




	</div>
	<div id="contents_main" style="background-image:url('aks/bg/bg001.jpg');background-repeat: no-repeat;">


		<div id="bloc_autosave" style="display:none;background-color:#fff;">
			<iframe src="" style="width:1px;height:1px;" name="ifre_auto" id="ifre_auto"></iframe><br>
		</div>
		<div id="bloc_save" style="display:none;background-color:#fff;">
			以下のセーブテキストを保存してください<br>
			別のパソコンからもつづきを再開できます <a href="#" OnClick='$("#bloc_save").css("display", "none");'>閉じる</a><br>
			<iframe src="" style="width:90%;height:60px;" name="ifre" id="ifre"></iframe><br>
		</div>
		<div id="bloc_load" style="display:none;background-color:#fff;">
			<form action="./room002.php" method="POST">
	ロードします<br>
	セーブテキストを入力して、「ロード」ボタンを押してください <a href="#" OnClick='$("#bloc_load").css("display", "none");'>閉じる</a><br>

			<textarea name="load_data" style="width:90%;height:60px;"></textarea><br>
			<input type="submit" value="ロードする">
			<input type="hidden" name="s" value="1">
			<input type="hidden" name="la" value="0">
			</form>
		</div>

<style>
#ahe_white{position:absolute;top:0px;left:100px;z-index:91;width:370px;height:780px;}
#ahe_chinco{position:absolute;top:420px;left:380px;z-index:92;display:none;}
#img_chinco2{display:none;}



#ahe_body{position: absolute; top: 0px; left: 70px;z-index:10;}
#ahe_head{position: absolute; top: 0px; left: 70px;z-index:60;}
#ahe_exp {position: absolute; top: 0px; left: 70px;z-index:61;}
#sbi_s1{position: absolute; top: 0px; left: 70px;z-index:41;}
#sbi_s2{position: absolute; top: 0px; left: 70px;z-index:42;}
#sbi_ts{position: absolute; top: 0px; left: 70px;z-index:43;}
#sbi_ss{position: absolute; top: 0px; left: 70px;z-index:44;}
#sbi_mj{position: absolute; top: 0px; left: 70px;z-index:45;}
#sbi_dr{position: absolute; top: 0px; left: 70px;z-index:51;}
#sbi_dl{position: absolute; top: 0px; left: 70px;z-index:52;}
#sbi_dm{position: absolute; top: 0px; left: 70px;z-index:46;}
#sbi_dd{position: absolute; top: 0px; left: 70px;z-index:47;}
#sbi_ap{position: absolute; top: 0px; left: 70px;z-index:11;}
#sbi_ra{position: absolute; top: 0px; left: 70px;z-index:32;}
#sbi_rb{position: absolute; top: 0px; left: 70px;z-index:33;}
#sbi_rc{position: absolute; top: 0px; left: 70px;z-index:34;}
#sbi_rd{position: absolute; top: 0px; left: 70px;z-index:35;}
#sbi_cl{position: absolute; top: 0px; left: 70px;z-index:31;}
</style>

		<div style="background-color:#fff;"><span id="p_r">0</span> あへ</div>
<span id="p" style="display:none;">0</span>

		<div id="ahe_area" OnClick='fun_c();'>
			<div id="ahe_body"><img src="aks/body/b01.png" id="target_img_body" title="あへ子" alt="あへ子" width="447" height="800"></div>
			<div id="ahe_head"><img src="aks/body/h01.png" id="target_img_head" title="あへ子" alt="あへ子" width="447" height="800"></div>
			<div id="ahe_exp" ><img src="aks/body/w01.png" id="target_img_exp" title="あへ子" alt="あへ子" width="447" height="800"></div>
			<!-- アイテム -->
			<div id="sbi_s1" ><img src="aks/parts/s01.png" id="t_sbi_s1" title="あへ子" alt="あへ子" width="447" height="800"></div><!-- パンツ -->
			<div id="sbi_s2" ><img src="aks/parts/none.png" id="t_sbi_s2" title="あへ子" alt="あへ子" width="447" height="800"></div><!-- 緊縛 -->
			<div id="sbi_ts" ><img src="aks/parts/none.png" id="t_sbi_ts" title="あへ子" alt="あへ子" width="447" height="800"></div><!-- 貞操帯 -->
			<div id="sbi_ss" ><img src="aks/parts/none.png" id="t_sbi_ss" title="あへ子" alt="あへ子" width="447" height="800"></div><!-- 触手貞操帯 -->
			<div id="sbi_mj" ><img src="aks/parts/none.png" id="t_sbi_mj" title="あへ子" alt="あへ子" width="447" height="800"></div><!-- また汁 -->
			<div id="sbi_dr" ><img src="aks/parts/none.png" id="t_sbi_dr" title="あへ子" alt="あへ子" width="447" height="800"></div><!-- 電マr -->
			<div id="sbi_dl" ><img src="aks/parts/none.png" id="t_sbi_dl" title="あへ子" alt="あへ子" width="447" height="800"></div><!-- 電マl -->
			<div id="sbi_dm" ><img src="aks/parts/none.png" id="t_sbi_dm" title="あへ子" alt="あへ子" width="447" height="800"></div><!-- 電マm -->
			<div id="sbi_dd" ><img src="aks/parts/none.png" id="t_sbi_dd" title="あへ子" alt="あへ子" width="447" height="800"></div><!-- ディルド -->
			<div id="sbi_ap" ><img src="aks/parts/none.png" id="t_sbi_ap" title="あへ子" alt="あへ子" width="447" height="800"></div><!-- アナルパール -->
			<div id="sbi_ra" ><img src="aks/parts/none.png" id="t_sbi_ra" title="あへ子" alt="あへ子" width="447" height="800"></div><!-- ローター -->
			<div id="sbi_rb" ><img src="aks/parts/none.png" id="t_sbi_rb" title="あへ子" alt="あへ子" width="447" height="800"></div><!-- ローター -->
			<div id="sbi_rc" ><img src="aks/parts/none.png" id="t_sbi_rc" title="あへ子" alt="あへ子" width="447" height="800"></div><!-- ローター -->
			<div id="sbi_rd" ><img src="aks/parts/none.png" id="t_sbi_rd" title="あへ子" alt="あへ子" width="447" height="800"></div><!-- ローター -->
			<div id="sbi_cl" ><img src="aks/parts/none.png" id="t_sbi_cl" title="あへ子" alt="あへ子" width="447" height="800"></div><!-- くり -->

			<div id="ahe_white"></div>
			<div id="ahe_chinco"><img src="img/chinco1.png" id="img_chinco1" title="chinco" alt="chinco" width="180" height="265"><img src="img/chinco2.png" id="img_chinco2" title="chinco" alt="chinco" width="180" height="265"></div>

		</div>

<br>


<div class="get_img" id="get_d_a01"><img src="aks/item_a01.png" OnClick='fun_break("st_item_a01",100);' OnMouseOver='$("#get_img_txt").html("100あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_a02"><img src="aks/item_a02.png" OnClick='fun_break("st_item_a02",400);' OnMouseOver='$("#get_img_txt").html("400あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_a03"><img src="aks/item_a03.png" OnClick='fun_break("st_item_a03",10000);' OnMouseOver='$("#get_img_txt").html("10,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_a04"><img src="aks/item_a04.png" OnClick='fun_break("st_item_a04",500000);' OnMouseOver='$("#get_img_txt").html("500,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_a05"><img src="aks/item_a05.png" OnClick='fun_break("st_item_a05",50000000);' OnMouseOver='$("#get_img_txt").html("50,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_a06"><img src="aks/item_a06.png" OnClick='fun_break("st_item_a06",500000000);' OnMouseOver='$("#get_img_txt").html("500,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_a07"><img src="aks/item_a07.png" OnClick='fun_break("st_item_a07",5000000000);' OnMouseOver='$("#get_img_txt").html("5,000,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_a08"><img src="aks/item_a08.png" OnClick='fun_break("st_item_a08",50000000000);' OnMouseOver='$("#get_img_txt").html("50,000,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_a09"><img src="aks/item_a09.png" OnClick='fun_break("st_item_a09",5000000000000);' OnMouseOver='$("#get_img_txt").html("5,000,000,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>

<div class="get_img" id="get_d_b01"><img src="aks/item_b01.png" OnClick='fun_break("st_item_b01",100);' OnMouseOver='$("#get_img_txt").html("100あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_b02"><img src="aks/item_b02.png" OnClick='fun_break("st_item_b02",10000);' OnMouseOver='$("#get_img_txt").html("10,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_b03"><img src="aks/item_b03.png" OnClick='fun_break("st_item_b03",100000);' OnMouseOver='$("#get_img_txt").html("100,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_b04"><img src="aks/item_b04.png" OnClick='fun_break("st_item_b04",1000000);' OnMouseOver='$("#get_img_txt").html("1,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_b05"><img src="aks/item_b05.png" OnClick='fun_break("st_item_b05",50000000);' OnMouseOver='$("#get_img_txt").html("50,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>

<div class="get_img" id="get_d_c01"><img src="aks/item_c01.png" OnClick='fun_break("st_item_c01",1000);' OnMouseOver='$("#get_img_txt").html("1,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_c02"><img src="aks/item_c02.png" OnClick='fun_break("st_item_c02",10000);' OnMouseOver='$("#get_img_txt").html("10,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_c03"><img src="aks/item_c03.png" OnClick='fun_break("st_item_c03",100000);' OnMouseOver='$("#get_img_txt").html("100,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_c04"><img src="aks/item_c04.png" OnClick='fun_break("st_item_c04",1000000);' OnMouseOver='$("#get_img_txt").html("1,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_c05"><img src="aks/item_c05.png" OnClick='fun_break("st_item_c05",250000000);' OnMouseOver='$("#get_img_txt").html("250,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>

<div class="get_img" id="get_d_d01"><img src="aks/item_d01.png" OnClick='fun_break("st_item_d01",30000);' OnMouseOver='$("#get_img_txt").html("30,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_d02"><img src="aks/item_d02.png" OnClick='fun_break("st_item_d02",300000);' OnMouseOver='$("#get_img_txt").html("300,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_d03"><img src="aks/item_d03.png" OnClick='fun_break("st_item_d03",3000000);' OnMouseOver='$("#get_img_txt").html("3,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_d04"><img src="aks/item_d04.png" OnClick='fun_break("st_item_d04",30000000);' OnMouseOver='$("#get_img_txt").html("30,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_d05"><img src="aks/item_d05.png" OnClick='fun_break("st_item_d05",1500000000);' OnMouseOver='$("#get_img_txt").html("1,500,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>

<div class="get_img" id="get_d_e01"><img src="aks/item_e01.png" OnClick='fun_break("st_item_e01",100000);' OnMouseOver='$("#get_img_txt").html("100,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_e02"><img src="aks/item_e02.png" OnClick='fun_break("st_item_e02",1000000);' OnMouseOver='$("#get_img_txt").html("1,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_e03"><img src="aks/item_e03.png" OnClick='fun_break("st_item_e03",10000000);' OnMouseOver='$("#get_img_txt").html("10,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_e04"><img src="aks/item_e04.png" OnClick='fun_break("st_item_e04",100000000);' OnMouseOver='$("#get_img_txt").html("100,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_e05"><img src="aks/item_e05.png" OnClick='fun_break("st_item_e05",5000000000);' OnMouseOver='$("#get_img_txt").html("5,000,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>

<div class="get_img" id="get_d_f01"><img src="aks/item_f01.png" OnClick='fun_break("st_item_f01",400000);' OnMouseOver='$("#get_img_txt").html("400,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_f02"><img src="aks/item_f02.png" OnClick='fun_break("st_item_f02",4000000);' OnMouseOver='$("#get_img_txt").html("4,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_f03"><img src="aks/item_f03.png" OnClick='fun_break("st_item_f03",40000000);' OnMouseOver='$("#get_img_txt").html("40,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_f04"><img src="aks/item_f04.png" OnClick='fun_break("st_item_f04",400000000);' OnMouseOver='$("#get_img_txt").html("400,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_f05"><img src="aks/item_f05.png" OnClick='fun_break("st_item_f05",20000000000);' OnMouseOver='$("#get_img_txt").html("20,000,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>

<div class="get_img" id="get_d_g01"><img src="aks/item_g01.png" OnClick='fun_break("st_item_g01",2000000);' OnMouseOver='$("#get_img_txt").html("2,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_g02"><img src="aks/item_g02.png" OnClick='fun_break("st_item_g02",20000000);' OnMouseOver='$("#get_img_txt").html("20,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_g03"><img src="aks/item_g03.png" OnClick='fun_break("st_item_g03",200000000);' OnMouseOver='$("#get_img_txt").html("200,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_g04"><img src="aks/item_g04.png" OnClick='fun_break("st_item_g04",2000000000);' OnMouseOver='$("#get_img_txt").html("2,000,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_g05"><img src="aks/item_g05.png" OnClick='fun_break("st_item_g05",100000000000);' OnMouseOver='$("#get_img_txt").html("100,000,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>

<div class="get_img" id="get_d_h01"><img src="aks/item_h01.png" OnClick='fun_break("st_item_h01",15000000);' OnMouseOver='$("#get_img_txt").html("15,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_h02"><img src="aks/item_h02.png" OnClick='fun_break("st_item_h02",150000000);' OnMouseOver='$("#get_img_txt").html("150,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_h03"><img src="aks/item_h03.png" OnClick='fun_break("st_item_h03",1500000000);' OnMouseOver='$("#get_img_txt").html("1,500,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_h04"><img src="aks/item_h04.png" OnClick='fun_break("st_item_h04",15000000000);' OnMouseOver='$("#get_img_txt").html("15,000,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_h05"><img src="aks/item_h05.png" OnClick='fun_break("st_item_h05",850000000000);' OnMouseOver='$("#get_img_txt").html("850,000,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>

<div class="get_img" id="get_d_i01"><img src="aks/item_i01.png" OnClick='fun_break("st_item_i01",1200000000);' OnMouseOver='$("#get_img_txt").html("1,200,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_i02"><img src="aks/item_i02.png" OnClick='fun_break("st_item_i02",10000000000);' OnMouseOver='$("#get_img_txt").html("10,000,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_i03"><img src="aks/item_i03.png" OnClick='fun_break("st_item_i03",100000000000);' OnMouseOver='$("#get_img_txt").html("100,000,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_i04"><img src="aks/item_i04.png" OnClick='fun_break("st_item_i04",1200000000000);' OnMouseOver='$("#get_img_txt").html("1,200,000,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>
<div class="get_img" id="get_d_i05"><img src="aks/item_i05.png" OnClick='fun_break("st_item_i05",65000000000000);' OnMouseOver='$("#get_img_txt").html("65,000,000,000,000あへ必要です")' OnMouseOut='$("#get_img_txt").html("")'></div>




<style>
.bgmb{
	border:1px solid #555;
	padding:0 2px;
	margin:0 2px;
	background-color:#fff;
	font-weight:bold;
	cursor:pointer;
}
#play_bgm0{background-color:#ffa500;}
</style>


<div id="get_img_txt"></div>

	</div>
	<div id="contents_pelf">


		<div class="pelf_main">

			<a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.tomatama.com/click/room002.php" data-lang="ja">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script><br>

日本語 
<a href="./room002e.php?la=1">ENGLISH</a><br>



			<input type="button" value="save" OnClick="fun_save(1);">
			<input type="button" value="load" OnClick='$("#bloc_save").css("display", "none");$("#bloc_load").css("display", "block");'><br>

			<input type="checkbox" value="1" id="rformC" OnClick='if($(this).prop("checked")){$("#rform").css("display", "inline");}else{$("#rform").css("display", "none");}'> 初期化ボタンを表示			<div id="rform" style="display:none;">
			<form action="./room002.php" method="POST">
			<input type="submit" value="初期化">
			<input type="hidden" name="cookiedel" value="1" />
			<input type="hidden" name="la" value="0" />
			</form>
			</div>
			<br>
			<br>

			※<span id="autoseve">0</span>秒後にセーブします<br>




			<span class="bgmb" id="play_bgm0">BGM STOP</span>
			<span class="bgmb" id="play_bgm1">BGM1</span>
			<span class="bgmb" id="play_bgm2">BGM2</span><br>
			※BGM読込に時間がかかります<br>

			<input type="radio" name="bgi" value="0" id="bgi0" OnClick="$('#contents_main').css('background-image','none');">背景 Off
			<input type="radio" name="bgi" value="1" id="bgi1" OnClick="$('#contents_main').css('background-image','url(aks/bg/bg001.jpg)');" checked>背景 On<br>
			<input type="radio" name="ahm" value="0" id="ahm0" checked>あへ On
			<input type="radio" name="ahm" value="1" id="ahm1" >あへ Off<br>

			<div>Apt <span id="krt" style="display:none;">1</span><span id="krtP">1</span></div>
			<div>ApS <span id="upr" style="display:none;">0</span><span id="uprP">0</span></div>
			<br>
<table>
	<tr>
		<td style="background-color:#ddd;">総クリック数</td>
	</tr>
	<tr>
		<td style="text-align:right;"><span id="ttl01r"></span></td>
	</tr>
	<tr>
		<td style="background-color:#ddd;">トータルアヘ数</td>
	</tr>
	<tr>
		<td style="text-align:right;"><span id="ttl02r"></span></td>
	</tr>
	<tr>
		<td style="background-color:#ddd;">最大アヘ数</td>
	</tr>
	<tr>
		<td style="text-align:right;"><span id="ttl03r"></span></td>
	</tr>
	<tr>
		<td style="background-color:#ddd;">ゴールデンあへ</td>
	</tr>
	<tr>
		<td style="text-align:right;"><span id="golden_cnt_r"></span></td>
	</tr>
</table>



<div style="display:none;">
<span id="ttl01">0</span>
<span id="ttl02">0</span>
<span id="ttl03">0</span>
<span id="golden_cnt">0</span>
</div>

		</div>


		<div class="get_item" id="get_a01"><div class="get_img"><img src="aks/item_a01.png" ></div><div class="get_text">強化クリック Apt×5 強くCしちゃうぞ</div></div>
		<div class="get_item" id="get_a02"><div class="get_img"><img src="aks/item_a02.png" ></div><div class="get_text">ダブルクリック Apt×5 乳首WCしちゃうぞ</div></div>
		<div class="get_item" id="get_a03"><div class="get_img"><img src="aks/item_a03.png" ></div><div class="get_text">トリプルクリック Apt×5 乳首TCしちゃうぞ</div></div>
		<div class="get_item" id="get_a04"><div class="get_img"><img src="aks/item_a04.png" ></div><div class="get_text">イエロークリック Apt×5 黄色いクリック</div></div>
		<div class="get_item" id="get_a05"><div class="get_img"><img src="aks/item_a05.png" ></div><div class="get_text">ピンククリック Apt×5 ピンクなクリック</div></div>
		<div class="get_item" id="get_a06"><div class="get_img"><img src="aks/item_a06.png" ></div><div class="get_text">闇のクリック Apt×5 闇の力でクリック</div></div>
		<div class="get_item" id="get_a07"><div class="get_img"><img src="aks/item_a07.png" ></div><div class="get_text">炎のクリック Apt×5 燃えろクリック力</div></div>
		<div class="get_item" id="get_a08"><div class="get_img"><img src="aks/item_a08.png" ></div><div class="get_text">クリックを強いられているンだ！ Apt×5</div></div>
		<div class="get_item" id="get_a09"><div class="get_img"><img src="aks/item_a09.png" ></div><div class="get_text">友達クリック Apt×5 友達！</div></div>
		<div class="get_item" id="get_b01"><div class="get_img"><img src="aks/item_b01.png" ></div><div class="get_text">スーパーローター<br>×2 アルカリ乾電池</div></div>
		<div class="get_item" id="get_b02"><div class="get_img"><img src="aks/item_b02.png" ></div><div class="get_text">イエローローター<br>×2 ビリビリするぞ</div></div>
		<div class="get_item" id="get_b03"><div class="get_img"><img src="aks/item_b03.png" ></div><div class="get_text">闇のローター<br>×2 暗黒の力が今…</div></div>
		<div class="get_item" id="get_b04"><div class="get_img"><img src="aks/item_b04.png" ></div><div class="get_text">炎のローター<br>×2 燃えるローター</div></div>
		<div class="get_item" id="get_b05"><div class="get_img"><img src="aks/item_b05.png" ></div><div class="get_text">黄金ローター<br>×2 伝説の……</div></div>
		<div class="get_item" id="get_c01"><div class="get_img"><img src="aks/item_c01.png" ></div><div class="get_text">スーパーディルド<br>×2 ぶるぶるぶる</div></div>
		<div class="get_item" id="get_c02"><div class="get_img"><img src="aks/item_c02.png" ></div><div class="get_text">イエローディルド<br>×2 びりびりびり</div></div>
		<div class="get_item" id="get_c03"><div class="get_img"><img src="aks/item_c03.png" ></div><div class="get_text">闇のディルド<br>×2 おそろしい……</div></div>
		<div class="get_item" id="get_c04"><div class="get_img"><img src="aks/item_c04.png" ></div><div class="get_text">炎のディルド<br>×2 熱い！熱い！</div></div>
		<div class="get_item" id="get_c05"><div class="get_img"><img src="aks/item_c05.png" ></div><div class="get_text">黒ディルド<br>×2 極悪</div></div>
		<div class="get_item" id="get_d01"><div class="get_img"><img src="aks/item_d01.png" ></div><div class="get_text">スーパー媚薬<br>×2 やばい</div></div>
		<div class="get_item" id="get_d02"><div class="get_img"><img src="aks/item_d02.png" ></div><div class="get_text">イエロー媚薬<br>×2 すごくやばい</div></div>
		<div class="get_item" id="get_d03"><div class="get_img"><img src="aks/item_d03.png" ></div><div class="get_text">闇の媚薬<br>×2 めちゃやばい</div></div>
		<div class="get_item" id="get_d04"><div class="get_img"><img src="aks/item_d04.png" ></div><div class="get_text">炎の媚薬<br>×2 ごっつやばい</div></div>
		<div class="get_item" id="get_d05"><div class="get_img"><img src="aks/item_d05.png" ></div><div class="get_text">黄金媚薬<br>×2 あへあへ</div></div>
		<div class="get_item" id="get_e01"><div class="get_img"><img src="aks/item_e01.png" ></div><div class="get_text">スーパーパール<br>×2 出し入れすごいの</div></div>
		<div class="get_item" id="get_e02"><div class="get_img"><img src="aks/item_e02.png" ></div><div class="get_text">イエローパール<br>×2 中でごりごり</div></div>
		<div class="get_item" id="get_e03"><div class="get_img"><img src="aks/item_e03.png" ></div><div class="get_text">闇のパール<br>×2 今までにない快楽を</div></div>
		<div class="get_item" id="get_e04"><div class="get_img"><img src="aks/item_e04.png" ></div><div class="get_text">炎のパール<br>×2 お尻から熱いのが！</div></div>
		<div class="get_item" id="get_e05"><div class="get_img"><img src="aks/item_e05.png" ></div><div class="get_text">黒パール<br>×2 海外仕様</div></div>
		<div class="get_item" id="get_f01"><div class="get_img"><img src="aks/item_f01.png" ></div><div class="get_text">スーパー電マ<br>×2 電力アップ</div></div>
		<div class="get_item" id="get_f02"><div class="get_img"><img src="aks/item_f02.png" ></div><div class="get_text">イエロー電マ<br>×2 エコモード搭載</div></div>
		<div class="get_item" id="get_f03"><div class="get_img"><img src="aks/item_f03.png" ></div><div class="get_text">闇の電マ<br>×2 永久電池式</div></div>
		<div class="get_item" id="get_f04"><div class="get_img"><img src="aks/item_f04.png" ></div><div class="get_text">炎の電マ<br>×2 60度まで上がります</div></div>
		<div class="get_item" id="get_f05"><div class="get_img"><img src="aks/item_f05.png" ></div><div class="get_text">黄金電マ<br>×2 工業用</div></div>
		<div class="get_item" id="get_g01"><div class="get_img"><img src="aks/item_g01.png" ></div><div class="get_text">スーパー貞操帯<br>×2 がっちりガード</div></div>
		<div class="get_item" id="get_g02"><div class="get_img"><img src="aks/item_g02.png" ></div><div class="get_text">イエロー貞操帯<br>×2 多い日も安心</div></div>
		<div class="get_item" id="get_g03"><div class="get_img"><img src="aks/item_g03.png" ></div><div class="get_text">闇の貞操帯<br>×2 じゅっぼじゅっぼする</div></div>
		<div class="get_item" id="get_g04"><div class="get_img"><img src="aks/item_g04.png" ></div><div class="get_text">炎の貞操帯<br>×2 お仕置きモードで燃える</div></div>
		<div class="get_item" id="get_g05"><div class="get_img"><img src="aks/item_g05.png" ></div><div class="get_text">黄金貞操帯<br>×2 常に清潔を保ちます</div></div>
		<div class="get_item" id="get_h01"><div class="get_img"><img src="aks/item_h01.png" ></div><div class="get_text">スーパー縄<br>×2 脱初心者</div></div>
		<div class="get_item" id="get_h02"><div class="get_img"><img src="aks/item_h02.png" ></div><div class="get_text">イエロー縄<br>×2 どんな縛りも自由自在</div></div>
		<div class="get_item" id="get_h03"><div class="get_img"><img src="aks/item_h03.png" ></div><div class="get_text">闇の縄<br>×2 秋葉原で売ってる</div></div>
		<div class="get_item" id="get_h04"><div class="get_img"><img src="aks/item_h04.png" ></div><div class="get_text">炎の縄<br>×2 熱いの！すごく熱いの！</div></div>
		<div class="get_item" id="get_h05"><div class="get_img"><img src="aks/item_h05.png" ></div><div class="get_text">黒縄<br>×2 締まる。やばい。</div></div>
		<div class="get_item" id="get_i01"><div class="get_img"><img src="aks/item_i01.png" ></div><div class="get_text">量産型<br>×2 どんきで売ってる</div></div>
		<div class="get_item" id="get_i02"><div class="get_img"><img src="aks/item_i02.png" ></div><div class="get_text">失敗作R115<br>×2 岡山県の研究所</div></div>
		<div class="get_item" id="get_i03"><div class="get_img"><img src="aks/item_i03.png" ></div><div class="get_text">マイケル<br>×2 人なつっこい</div></div>
		<div class="get_item" id="get_i04"><div class="get_img"><img src="aks/item_i04.png" ></div><div class="get_text">########<br>×2 -*-*-*-*-*-*-</div></div>
		<div class="get_item" id="get_i05"><div class="get_img"><img src="aks/item_i05.png" ></div><div class="get_text">佐藤<br>×2 宇宙から来た</div></div>



		<div class="copy_text">

			<a href="/click/omake/u18/" target="_blank"><img src="/click/omake/u18/img/bn_ahe2_j1.jpg" /></a><br>
			<a href="/click/mmc.php" target="_blank"><img src="/click/m_img/bn_mmc.jpg" /></a><br>







			presented by <a href="http://www.tomatama.com/" target="_blank"><img src="/img/bn88x31.gif" alt="ケチャップ味のマヨネーズ" width="88" height="31" /></a><br>
			イラスト：<a href="http://www.pixiv.net/member.php?id=91029" target="_blank">あかいししろいし</a><br>
			背景画像：<a href="http://www5d.biglobe.ne.jp/~gakai/" target="_blank">きまぐれアフター</a><br>
			BGM1：<a href="http://dova-s.jp/bgm/play535.html" target="_blank">暗い森の奥で</a><br>
			BGM2：<a href="http://dova-s.jp/bgm/play1696.html" target="_blank">日常的ラグタイム</a><br>

<br>
			<a href="http://www.tomatama.com/bbs/?cd=gah1" target="_blank">→あへくりっく公式掲示板</a>
		</div>


	</div>
</div>
<div style="display:none">
	<div id="golden">0</div>
	<div id="st_item_a01">0</div>
	<div id="st_item_a02">0</div>
	<div id="st_item_a03">0</div>
	<div id="st_item_a04">0</div>
	<div id="st_item_a05">0</div>
	<div id="st_item_a06">0</div>
	<div id="st_item_a07">0</div>
	<div id="st_item_a08">0</div>
	<div id="st_item_a09">0</div>
	<div id="st_item_b01">0</div>
	<div id="st_item_b02">0</div>
	<div id="st_item_b03">0</div>
	<div id="st_item_b04">0</div>
	<div id="st_item_b05">0</div>
	<div id="st_item_c01">0</div>
	<div id="st_item_c02">0</div>
	<div id="st_item_c03">0</div>
	<div id="st_item_c04">0</div>
	<div id="st_item_c05">0</div>
	<div id="st_item_d01">0</div>
	<div id="st_item_d02">0</div>
	<div id="st_item_d03">0</div>
	<div id="st_item_d04">0</div>
	<div id="st_item_d05">0</div>
	<div id="st_item_e01">0</div>
	<div id="st_item_e02">0</div>
	<div id="st_item_e03">0</div>
	<div id="st_item_e04">0</div>
	<div id="st_item_e05">0</div>
	<div id="st_item_f01">0</div>
	<div id="st_item_f02">0</div>
	<div id="st_item_f03">0</div>
	<div id="st_item_f04">0</div>
	<div id="st_item_f05">0</div>
	<div id="st_item_g01">0</div>
	<div id="st_item_g02">0</div>
	<div id="st_item_g03">0</div>
	<div id="st_item_g04">0</div>
	<div id="st_item_g05">0</div>
	<div id="st_item_h01">0</div>
	<div id="st_item_h02">0</div>
	<div id="st_item_h03">0</div>
	<div id="st_item_h04">0</div>
	<div id="st_item_h05">0</div>
	<div id="st_item_i01">0</div>
	<div id="st_item_i02">0</div>
	<div id="st_item_i03">0</div>
	<div id="st_item_i04">0</div>
	<div id="st_item_i05">0</div>
</div>







<!-- クリック時の顔の読み込みを早くする -->
<div style="opacity: 0.1;">
<img src="aks/body/w01r.png" width="1">
<img src="aks/body/w02r.png" width="1">
<img src="aks/body/w03r.png" width="1">
<img src="aks/body/w04r.png" width="1">
<img src="aks/body/w05r.png" width="1">
</div>

<div style="display:none;">

<audio src="bgm/kuramori.mp3" preload="auto" loop="loop" id="bgm1"></audio>
<audio src="m_img/ragtime.mp3" preload="auto" loop="loop" id="bgm2"></audio>


</div>





<a class="remove_cookie" style="font-size:13px;">成人向け認証解除</a>




<div id="modal">
<p>
このサイトは成人向けの情報を含みます。<br />
18歳未満の方の閲覧を固くお断りいたします。<br />
<br />
あなたは18歳以上ですか？<br />



<br />
</p>
<ul>
<li><a class="yes">18歳以上です</a></li>
<li><a class="no" href="http://www.yahoo.co.jp/">違います</a></li>
</ul>
</div>



<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-39919135-1', 'tomatama.com');
ga('send', 'pageview');
</script>
</body>
</html>