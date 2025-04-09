<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>あへくりっく２</title>
<script type="text/javascript" src="../../js/jquery-2.1.1.min.js"></script>
<style>
body{
	font-family:"Verdana", "ＭＳ Ｐゴシック","ヒラギノ角ゴPro W3","Hiragino Kaku Gothic Pro", "sans-serif";
	color: #000;
	margin: 0 auto;
	background-color: #fff;
	font-size: 13px;
	height: 100%;
}
h1{margin:0;padding:0;}
h2{margin:0;padding:0;}
a{color:#006EB0;}
table{border:0;margin:0;padding:0;}
th{text-align:left;}
#wrap{
	width:980px;
	margin: 7px auto;
}

#header{
	width :980px;
	margin:0;
}
#twitter{
	float:right;
}
#area_menu{
	width :980px;
	margin: 5px 0;
}
#area_mu1{cursor:pointer;font-weight:bold;color:#f00;}
#area_mu2{cursor:pointer;font-weight:bold;color:#006EB0;}
#area_mu3{cursor:pointer;font-weight:bold;color:#006EB0;}
#area_mu4{cursor:pointer;font-weight:bold;color:#006EB0;}
#area_mu5{cursor:pointer;font-weight:bold;color:#006EB0;}
#area_mu6{cursor:pointer;font-weight:bold;color:#006EB0;}
#area_mu7{cursor:pointer;font-weight:bold;color:#006EB0;}
#area_mu8{cursor:pointer;font-weight:bold;color:#006EB0;}
#area_mu9{cursor:pointer;font-weight:bold;color:#006EB0;}
#area_mu10{cursor:pointer;font-weight:bold;color:#006EB0;}


.slt{color:#006EB0;font-weight:bold;cursor:pointer;}
</style>


<script>
var la=0;
var t=0;			//TIME
var u=0;			//自動増加率


//変数
var ahe     = 0;		//現在のアヘ数
var ahe_all = 0;		//累積アヘ数
var ahe_max = 0;		//最大アヘ数
var ahe_g   = 0;		//ゴールデンアヘクリック数
var clc     = 0;		//総クリック数
var b_item = new Array(0,0,0,0,0,0,0,0,0,0,0);		//基本アイテム獲得数（アイテム1～10）



//実績アイテム獲得状態　0未獲得1獲得済
var t_item = new Array(
	[],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0,0,0,0,0]
);

//実績解除価格
var t_item_price = new Array(
	[],
	[0,100,400,10000,500000,50000000,500000000,5000000000,50000000000,5000000000000],
	[0,100,10000,100000,1000000,50000000],
	[0,1000,10000,100000,1000000,250000000],
	[0,30000,300000,3000000,30000000,1500000000],
	[0,100000,1000000,10000000,100000000,5000000000],
	[0,400000,4000000,40000000,400000000,20000000000],
	[0,2000000,20000000,200000000,2000000000,100000000000],
	[0,15000000,150000000,1500000000,15000000000,850000000000],
	[0,1200000000,10000000000,100000000000,1200000000000,65000000000000],
	[0,30000000000,350000000000,4000000000000,50000000000000,1000000000000000],
	[0,0,0,1000000,1000000,1000000000,10000000,100000000,1000000000000,100000000000000,100000000000000000000,1000000,1000000,1000000]
);





//flag
var r18=0;
var se1=0;	//喘ぎ声ON/OFF
var bgm=0;	//BGM状態
var ani=1;	//アニメーションONOFF
var hit=0;	//クリック時アニメflag
var viv=0;	//バイブ
var nip=0;	//乳
var Golden=120;

//着せ替え
var c_hair = 1;		//髪の色
var c_skin = 1;		//肌の色
var c_bk   = 1;		//背景画像

var ost = 55;	//オートセーブタイマー

//アイテム価格
var item_basic_price = new Array(0,15,100,500,3000,10000,40000,200000,1800000,120000000,99999999999);
//自動増加量
var item_basic_ahe   = new Array(0,0.1,0.5,2,10,40,100,400,5000,100000,1234567);




//座標
var z_body1  = new Array( 240, 160);
var z_body2  = new Array( 188, 337);
var z_body3l = new Array(-110, 373);
var z_body3r = new Array( 418, 346);

var z_goods  = new Array( 236, 362);


var z_body6l = new Array( 115, 169);
var z_body6r = new Array( 360, 154);
var z_body7  = new Array( 209, 146);
var z_hair1  = new Array( 214,  14);
var z_hair2  = new Array( 195,  14);
var z_face1  = new Array( 220,  35);
var z_face0_1  = new Array( 240, 115);
var z_face1_1  = new Array( 293, 172);
var z_face2_1  = new Array( 240,  98);
var z_face2_1h = new Array( 240,  98);





$(function(){
	fun_load();
	fun_language(la);
	render1();
	render2();
	save();		//画面表示時にセーブすることで、cookie削除回避

	$('#cps1').click(function(){fun_clc();});

});

$(document).ready(function() {(function Aheloop1(){setTimeout(Aheloop1, 1000);render1();})();})
$(document).ready(function() {(function Aheloop2(){setTimeout(Aheloop2,   50);render2();})();})
function render1() {

	if(r18==1){
		fun_look();
		fun_auto_ahe();
		Fun_golden();
		fun_trophy();

		fun_print();
	}

}
function render2() {

	if(r18==1){
		if(hit==0 && ani==1){fun_ani1();}

		fun_ani_viv();
		t++;
	}
}
function fun_ani1(){

	var h = t%20;
	if(h>10){h=20-h;}
	var r = Math.random()*2;
	var r2 = Math.random()*2;
	var r3 = Math.random()*2;
	var r4 = Math.random()*2;
	$('#body1').css('left',z_body1[0]+r).css('top',z_body1[1]+h/4);
	$('#body2').css('left',z_body2[0]+r).css('top',z_body2[1]+h/2);
	$('#body3l').css('left',z_body3l[0]+r).css('top',z_body3l[1]+h);
	$('#body3r').css('left',z_body3r[0]+r).css('top',z_body3r[1]+h);


	$('#goods').css('left',z_goods[0]+r).css('top',z_goods[1]+h);




	$('#body6l').css('left',z_body6l[0]+r).css('top',z_body6l[1]+r4);
	$('#body6r').css('left',z_body6r[0]+r).css('top',z_body6r[1]+r4);
	$('#body7').css('left',z_body7[0]+r).css('top',z_body7[1]+h/4);
	$('#hair1').css('left',z_hair1[0]+r).css('top',z_hair1[1]);
	$('#hair2').css('left',z_hair2[0]+r).css('top',z_hair2[1]);
	$('#face1').css('left',z_face1[0]+r).css('top',z_face1[1]);
	$('#face0_1').css('left',z_face0_1[0]+r).css('top',z_face0_1[1]);
	$('#face0_2').css('left',z_face0_1[0]+r).css('top',z_face0_1[1]);
	$('#face1_1').css('left',z_face1_1[0]+r).css('top',z_face1_1[1]);
	$('#face1_2').css('left',z_face1_1[0]+r).css('top',z_face1_1[1]);
	$('#face2_1').css('left',z_face2_1[0]+r).css('top',z_face2_1[1]);
	$('#face2_2').css('left',z_face2_1[0]+r).css('top',z_face2_1[1]);
	$('#face2_1h').css('left',z_face2_1h[0]+r2).css('top',z_face2_1h[1]);
	$('#face2_2h').css('left',z_face2_1h[0]+r2).css('top',z_face2_1h[1]);
	$('#img_face2_1').css('width',123).css('height',87-r3);
	$('#img_face2_2').css('width',123).css('height',87-r3);
	$('#img_face1_1').css('width',38).css('height',35-r4);
	$('#img_face1_2').css('width',38).css('height',35-r4);
	$('#img_body7').css('width',218).css('height',139-h/4);


}


//年齢認証
function funR18(s) {
	if(s==1){
		r18=1;
		$('#a0').slideUp('slow');
		$('#a1').slideDown('slow');
		$('#area_menu').slideDown('slow');
	}else{
		location.href="http://www.yahoo.co.jp/";	//お前は一体何しに来た？
	}
}






//自動アヘ増加
function fun_auto_ahe(){
	var itm = new Array(0,1,1,1,1,1,1,1,1,1,1);
	for(var i=2;i<=10;i++){
		for(var ii=1;ii<=10;ii++){
			if(t_item[i][ii]==1){
				itm[i]=itm[i]*5;
			}
		}
	}
	u=0;
	u= u + (parseFloat(b_item[1]) * parseFloat(item_basic_ahe[1]));
	u= u + (parseFloat(b_item[2]) * parseFloat(item_basic_ahe[2])) * parseFloat(itm[2]);
	u= u + (parseFloat(b_item[3]) * parseFloat(item_basic_ahe[3])) * parseFloat(itm[3]);
	u= u + (parseFloat(b_item[4]) * parseFloat(item_basic_ahe[4])) * parseFloat(itm[4]);
	u= u + (parseFloat(b_item[5]) * parseFloat(item_basic_ahe[5])) * parseFloat(itm[5]);
	u= u + (parseFloat(b_item[6]) * parseFloat(item_basic_ahe[6])) * parseFloat(itm[6]);
	u= u + (parseFloat(b_item[7]) * parseFloat(item_basic_ahe[7])) * parseFloat(itm[7]);
	u= u + (parseFloat(b_item[8]) * parseFloat(item_basic_ahe[8])) * parseFloat(itm[8]);
	u= u + (parseFloat(b_item[9]) * parseFloat(item_basic_ahe[9])) * parseFloat(itm[9]);
	u= u + (parseFloat(b_item[10])* parseFloat(item_basic_ahe[10]))* parseFloat(itm[10]);
	ahe     = parseFloat(0+ahe) + parseFloat(0+u);
	ahe_all = parseFloat(0+ahe_all) + parseFloat(0+u);
	if(ahe>ahe_max){ahe_max=ahe;}
}

//-----------------------------------------
//表示
function fun_print(){
	fun_item_price();
	fun_open_item1();
	fun_open_item2();
	ahe      = Math.round(parseFloat(ahe * 10)) / 10;		//浮動小数ゆらぎ回避
	ahe_all  = Math.round(parseFloat(ahe_all * 10)) / 10;	//浮動小数ゆらぎ回避
	ahe_max  = Math.round(parseFloat(ahe_max * 10)) / 10;	//浮動小数ゆらぎ回避
	clc      = Math.round(parseFloat(clc * 10)) / 10;		//浮動小数ゆらぎ回避

	$("#ahe_cnt").html(separate(ahe)+' ahe');
	$("#status1").html(separate(ahe)+' ahe');
	$("#status2").html(separate(ahe_max)+' ahe');
	$("#status3").html(separate(ahe_all)+' ahe');
	$("#status4").html(separate(clc)+' click');
	$("#status5").html(separate(ahe_g)+' click');
}


//現在のアイテムの価格
function fun_item_price(){

	for(var i=1;i<=10;i++){
		var a = fuku(item_basic_price[i],parseFloat(b_item[i])+1,1.15);
		a  = parseFloat(a * 10) / 10;	//小数点1位まで
		if(ahe>=a){
			$('#item_a'+i).css('background-color','#AADDFF');
			$('#item_a'+i).css('cursor','pointer');

		}else{
			$('#item_a'+i).css('background-color','#dddddd');
			$('#item_a'+i).css('cursor','default');

		}
		$('#item_a'+i+'_1').html(separate(a)+' ahe');
		$('#item_a'+i+'_2').html(separate(Math.floor(b_item[i]*10)/10)+'');
	}
}



//アイテムSHOP表示上件
function fun_open_item1(){
	if(t_item[1][1]==0 && b_item[1]>= 10){$('#s_a1_1').css('display','block');}else{$('#s_a1_1').css('display','none');}
	if(t_item[1][2]==0 && b_item[1]>= 25){$('#s_a1_2').css('display','block');}else{$('#s_a1_2').css('display','none');}
	if(t_item[1][3]==0 && b_item[1]>= 50){$('#s_a1_3').css('display','block');}else{$('#s_a1_3').css('display','none');}
	if(t_item[1][4]==0 && b_item[1]>= 75){$('#s_a1_4').css('display','block');}else{$('#s_a1_4').css('display','none');}
	if(t_item[1][5]==0 && b_item[1]>=100){$('#s_a1_5').css('display','block');}else{$('#s_a1_5').css('display','none');}
	if(t_item[1][6]==0 && b_item[1]>=125){$('#s_a1_6').css('display','block');}else{$('#s_a1_6').css('display','none');}
	if(t_item[1][7]==0 && b_item[1]>=150){$('#s_a1_7').css('display','block');}else{$('#s_a1_7').css('display','none');}
	if(t_item[1][8]==0 && b_item[1]>=175){$('#s_a1_8').css('display','block');}else{$('#s_a1_8').css('display','none');}
	if(t_item[1][9]==0 && b_item[1]>=200){$('#s_a1_9').css('display','block');}else{$('#s_a1_9').css('display','none');}
	for(var i=2;i<=10;i++){
		if(t_item[i][1]==0 && b_item[i]>= 10){$('#s_a'+i+'_1').css('display','block');}else{$('#s_a'+i+'_1').css('display','none');}
		if(t_item[i][2]==0 && b_item[i]>= 25){$('#s_a'+i+'_2').css('display','block');}else{$('#s_a'+i+'_2').css('display','none');}
		if(t_item[i][3]==0 && b_item[i]>= 50){$('#s_a'+i+'_3').css('display','block');}else{$('#s_a'+i+'_3').css('display','none');}
		if(t_item[i][4]==0 && b_item[i]>= 75){$('#s_a'+i+'_4').css('display','block');}else{$('#s_a'+i+'_4').css('display','none');}
		if(t_item[i][5]==0 && b_item[i]>=100){$('#s_a'+i+'_5').css('display','block');}else{$('#s_a'+i+'_5').css('display','none');}
	}


	if(t_item[11][3]==0 && ahe_all>= 10000) {$('#s_a11_3').css('display','block');}else{$('#s_a11_3').css('display','none');}	//s_a11_3　クスコ
	if(t_item[11][4]==0 && b_item[4]>= 10)  {$('#s_a11_4').css('display','block');}else{$('#s_a11_4').css('display','none');}	//s_a11_4　バイブピストン
	if(t_item[11][5]==0 && b_item[4]>= 100) {$('#s_a11_5').css('display','block');}else{$('#s_a11_5').css('display','none');}	//s_a11_5　バイブスピン
	if(t_item[11][6]==0 && b_item[6]>= 10)  {$('#s_a11_6').css('display','block');}else{$('#s_a11_6').css('display','none');}	//s_a11_6　胡瓜ピストン
	if(t_item[11][7]==0 && b_item[8]>= 10)  {$('#s_a11_7').css('display','block');}else{$('#s_a11_7').css('display','none');}	//s_a11_7　バイブ(極悪)ピストン
	if(t_item[11][8]==0 && b_item[8]>= 100) {$('#s_a11_8').css('display','block');}else{$('#s_a11_8').css('display','none');}	//s_a11_8　バイブ(極悪)スピン
	if(t_item[11][9]==0 && b_item[9]>= 10)  {$('#s_a11_9').css('display','block');}else{$('#s_a11_9').css('display','none');}	//s_a11_9　笛ピストン
	if(t_item[11][10]==0 && b_item[10]>= 10){$('#s_a11_10').css('display','block');}else{$('#s_a11_10').css('display','none');}	//s_a11_10　触手活性

	if(t_item[11][11]==0 && ahe_all>= 10000) {$('#s_a11_11').css('display','block');}else{$('#s_a11_11').css('display','none');}	//s_a11_3　アナルいちじく
	if(t_item[11][12]==0 && ahe_all>= 10000) {$('#s_a11_12').css('display','block');}else{$('#s_a11_12').css('display','none');}	//s_a11_3　アナル栓
	if(t_item[11][13]==0 && ahe_all>= 10000) {$('#s_a11_13').css('display','block');}else{$('#s_a11_13').css('display','none');}	//s_a11_3　アナル胡瓜

}
//獲得アイテム表示
function fun_open_item2(){
	for(var i=1;i<=11;i++){
		for(var ii=1;ii<=13;ii++){
			if(t_item[i][ii]==1){$('#s_a'+i+'_'+ii+'r').css('display','block');}else{$('#s_a'+i+'_'+ii+'r').css('display','none');}
		}
	}
}

//獲得アイテム(実績)獲得率
function fun_trophy(){
	//実績は62個
	var u=0;
	var u2=0;
	for(var i=1;i<=11;i++){
		for(var ii=1;ii<=13;ii++){
			if(t_item[i][ii]==1){u++;}
		}
	}
	if(u==65){
		u2='100.00';
	}else{
		u2=u*100/65;
		u2 = u2.toFixed(2);
	}
	$('#trophy_c').html(u+'/65 ('+ u2 +'%)');
}


//-----------------------------------------

//通常クリック
function fun_clc(){
	var bai = 1;
	for(var i=1;i<=10;i++){
		if(t_item[1][i]==1){
			bai=bai*5;
		}
	}
	ahe=ahe+bai;
	ahe_all=ahe_all+bai;
	if(ahe>ahe_max){ahe_max=ahe;}
	clc++;
	if(ani==1){
		hit=1;
		fun_eff();
		setTimeout(function(){fun_ani_cl(Math.random()*4-2,Math.random()*10-5);},0);
		setTimeout(function(){fun_ani_cl(Math.random()*4-2,Math.random()*10-5);},10);
		setTimeout(function(){fun_ani_cl(Math.random()*4-2,Math.random()*10-5);},20);
		setTimeout(function(){fun_ani_cl(Math.random()*4-2,Math.random()*10-5);},30);
		setTimeout(function(){fun_ani_cl(Math.random()*4-2,Math.random()*10-5);},40);
		setTimeout(function(){fun_ani_cl(Math.random()*4-2,Math.random()*10-5);},50);
		setTimeout(function(){fun_ani_cl(Math.random()*4-2,Math.random()*10-5);},60);
		setTimeout(function(){hit=0;},70);
	}
	if(se1==1){
		var r = parseInt(Math.random()*60)+1;
		document.getElementById('mp3_'+r).play();
	}
	fun_print();	//表示
}



//クリック時のアニメ
function fun_ani_cl(a,b){
	$('#body6l').css('left',z_body6l[0]+a).css('top',z_body6l[1]+2*b);
	$('#body6r').css('left',z_body6r[0]+a).css('top',z_body6r[1]+2*b);
	$('#body1').css('left',z_body1[0]+a).css('top',z_body1[1]+1*b);
	$('#body7').css('left',z_body7[0]+a).css('top',z_body7[1]+1*b);
	$('#body2').css('left',z_body2[0]+a).css('top',z_body2[1]+2*b);
	$('#body3l').css('left',z_body3l[0]+a).css('top',z_body3l[1]+3*b);
	$('#body3r').css('left',z_body3r[0]+a).css('top',z_body3r[1]+3*b);
	$('#goods').css('left',z_goods[0]+a).css('top',z_goods[1]+3*b);
	$('#hair1').css('left',z_hair1[0]+a).css('top',z_hair1[1]);
	$('#hair2').css('left',z_hair2[0]+a).css('top',z_hair2[1]);
	$('#face1').css('left',z_face1[0]+a).css('top',z_face1[1]);

	$('#face0_1').css('left',z_face0_1[0]+a).css('top',z_face0_1[1]);
	$('#face0_2').css('left',z_face0_1[0]+a).css('top',z_face0_1[1]);
	$('#face1_1').css('left',z_face1_1[0]+a).css('top',z_face1_1[1]);
	$('#face1_2').css('left',z_face1_1[0]+a).css('top',z_face1_1[1]);
	$('#face2_1').css('left',z_face2_1[0]+a).css('top',z_face2_1[1]);
	$('#face2_2').css('left',z_face2_1[0]+a).css('top',z_face2_1[1]);
	$('#face2_1h').css('left',z_face2_1h[0]+a).css('top',z_face2_1h[1]);
	$('#face2_2h').css('left',z_face2_1h[0]+a).css('top',z_face2_1h[1]);

	$('#face2_1h').css('display','none')
	$('#face2_2h').css('display','block')
	$('#face2_1').css('display','none')
	$('#face2_2').css('display','block')
	$('#face1_1').css('display','block')
	$('#face1_2').css('display','none')
	$('#face0_1').css('display','none')
	$('#face0_2').css('display','block')

	setTimeout(function(){
		$('#face0_1').css('display','block')
		$('#face0_2').css('display','none')
		if(viv==13){
			$('#face2_1h').css('display','none')
			$('#face2_2h').css('display','block')
			$('#face2_1').css('display','none')
			$('#face2_2').css('display','block')
		}else{
			$('#face2_1h').css('display','block')
			$('#face2_2h').css('display','none')
			$('#face2_1').css('display','block')
			$('#face2_2').css('display','none')
		}
		if(viv==2 || viv==3 || viv==5 || viv==7 || viv==8 || viv==10 || viv==13 || viv==14){
			$('#face1_1').css('display','none')
			$('#face1_2').css('display','block')
		}else{
			$('#face1_1').css('display','block')
			$('#face1_2').css('display','none')
		}
	},250);

}


//バイブアニメ
function fun_ani_viv(){
	for(var i=1;i<=5;i++){$('#nb1_'+i).css('display','none');}
	for(var i=1;i<=11;i++){$('#nb2_'+i).css('display','none');}
	for(var i=1;i<=5;i++){$('#nb3_'+i).css('display','none');}
	for(var i=1;i<=4;i++){$('#nb4_'+i).css('display','none');}
	for(var i=1;i<=5;i++){$('#nb5_'+i).css('display','none');}
	for(var i=1;i<=5;i++){$('#nb6_'+i).css('display','none');}
	$('#nb7').css('display','none');
	$('#nb8').css('display','none');
	for(var i=1;i<=7;i++){$('#nb9_'+i).css('display','none');}
	$('#nb10').css('display','none');
	if(viv==1){
		//バイブ静止
		$('#nb1_3').css('display','block');
	}else if(viv==2){
		//バイブピストン
		var t2 = t%8;
		var t2=Math.abs(4-t2)+1;
		if(t2==5){fun_j3();}
		$('#nb1_'+t2).css('display','block');
	}else if(viv==3){
		//バイブスピン
		var t2 = t%20;
		var t2=Math.abs(10-t2)+1;
		$('#nb2_'+t2).css('display','block');
	}else if(viv==4){
		//胡瓜静止
		$('#nb3_2').css('display','block');
	}else if(viv==5){
		//胡瓜ピストン
		var t2 = t%8;
		var t2=Math.abs(4-t2)+1;
		if(t2==5){fun_j3();}
		$('#nb3_'+t2).css('display','block');
	}else if(viv==6){
		//極悪静止
		$('#nb4_2').css('display','block');
	}else if(viv==7){
		//極悪ピストン
		var t2 = t%6;
		var t2=Math.abs(3-t2)+1;
		if(t2==4){fun_j3();}
		$('#nb4_'+t2).css('display','block');
	}else if(viv==8){
		//極悪スピン
		var t2 = t%8;
		var t2=Math.abs(4-t2)+1;
		$('#nb5_'+t2).css('display','block');
	}else if(viv==9){
		//縦笛静止
		$('#nb6_3').css('display','block');
	}else if(viv==10){
		//縦笛ピストン
		var t2 = t%8;
		var t2=Math.abs(4-t2)+1;
		if(t2==5){fun_j3();}
		$('#nb6_'+t2).css('display','block');
	}else if(viv==11){
		//クスコ
		$('#nb7').css('display','block');
	}else if(viv==12){
		//洗濯ばさみ
		$('#nb8').css('display','block');
	}else if(viv==13){
		//触手
		var t2 = t%12;
		var t2=Math.abs(6-t2)+1;
		if(Math.random()>0.6){fun_j3();}
		$('#nb9_'+t2).css('display','block');
	}else if(viv==14){
		//ローター
		$('#nb10').css('display','block');
	}
}


//上部メニュー
function fun_mu(s){
	//アイテム名初期化
	$('#item_text1').html('');
	$('#item_text2').html('');
	for(var i=1;i<=10;i++){
		if(s==i){
			$('#area_mu'+i).css('color','#f00');
			$('#a'+i).slideDown();
		}else{
			$('#area_mu'+i).css('color','#006EB0');
			$('#a'+i).slideUp();
		}
	}
	if(s==4){
		document.getElementById("ifre").src = "../../../bbs/simpleahe2.php?cd=ahe2";
	}
	if(s==6){
		save();
	}
}


//SHOPメニュー切り替え
function fun_ms(s){
	for(var i=1;i<=3;i++){
		if(s==i){
			$('#ms'+i).css('display','none');
			$('#ms'+i+'r').css('display','block');
			$('#s_area'+i).slideDown();
		}else{
			$('#ms'+i).css('display','block');
			$('#ms'+i+'r').css('display','none');
			$('#s_area'+i).slideUp();
		}
	}
}


//アイテムマウスオーバー
function funItemText(a,b){
	var t1='';
	var t2='';
	if(la==1){
		if(a==1 && b==1){t1='Strengthening click Apt x5 It would strongly C';}
		if(a==1 && b==2){t1='Double-click Apt x5 lead to nipple WC';}
		if(a==1 && b==3){t1='Triple-click Apt x5 lead to nipple TC';}
		if(a==1 && b==4){t1='Yellow click Apt x5 yellow click';}
		if(a==1 && b==5){t1='Pink click Apt x5 Pink click';}
		if(a==1 && b==6){t1='Click click Apt x5 Click on the power of darkness';}
		if(a==1 && b==7){t1='Click Apt x5 Burn click force of flame';}
		if(a==1 && b==8){t1='I do that are forced to click ! Apt x5';}
		if(a==1 && b==9){t1='Friends click Apt x5 friends!';}

		if(a==2 && b==1){t1='Normal Clip x2 Surprisingly hurts';}
		if(a==2 && b==2){t1='Strengthening Clip x2 Very painful';}
		if(a==2 && b==3){t1='Red Clip(Blue) x2 hurts hurts hurts';}
		if(a==2 && b==4){t1='Darkness of the Clip x2 Break off';}
		if(a==2 && b==5){t1='Phantom of the Clip x2 Painless?!';}

		if(a==3 && b==1){t1='Normal rotor x2 alkaline batteries';}
		if(a==3 && b==2){t1='Strengthening rotor x2 Biribiri';}
		if(a==3 && b==3){t1='Red rotor x2 rotor of flame';}
		if(a==3 && b==4){t1='Darkness of the rotor x2 dark force is now ...';}
		if(a==3 && b==5){t1='Phantom of the rotor x2 ... legend';}

		if(a==4 && b==1){t1='Super dildo x2 Buru Buru Buru';}
		if(a==4 && b==2){t1='Yellow dildo x2 Biri Biri Biri';}
		if(a==4 && b==3){t1='Darkness dildo x2 hot! Hot!';}
		if(a==4 && b==4){t1='Flame of the dildo x2 ... terrible';}
		if(a==4 && b==5){t1='Black dildo x2 villainy';}

		if(a==5 && b==1){t1='Normal Anal Pearl x2 Good vibes';}
		if(a==5 && b==2){t1='Strengthening Anal Pearl x2 frightful';}
		if(a==5 && b==3){t1='Red Anal Pearl x2 Hot!';}
		if(a==5 && b==4){t1='Darkness of the Anal Pearl x2 tremendous';}
		if(a==5 && b==5){t1='Phantom of the Anal Pearl x2 Enter many pieces';}

		if(a==6 && b==1){t1='Normal Cucumber x2 Delicious';}
		if(a==6 && b==2){t1='Strengthening Cucumber x2 Very tasty';}
		if(a==6 && b==3){t1='Red Cucumber x2 Painful';}
		if(a==6 && b==4){t1='Darkness of the Cucumber x2 Bitter';}
		if(a==6 && b==5){t1='Phantom of the Cucumber x2 bad';}

		if(a==7 && b==1){t1='Normal Aphrodisiac enema x2 Good feeling';}
		if(a==7 && b==2){t1='Strengthening Aphrodisiac enema x2 Ultra-comfortable';}
		if(a==7 && b==3){t1='Red Aphrodisiac enema x2 Ahe Ahe';}
		if(a==7 && b==4){t1='Darkness of the Aphrodisiac enema x2 Dangerous';}
		if(a==7 && b==5){t1='Phantom of the Aphrodisiac enema x2 Heaven';}

		if(a==8 && b==1){t1='Normal hell dildo x2 Villainy';}
		if(a==8 && b==2){t1='Strengthening hell dildo x2 Atrocious';}
		if(a==8 && b==3){t1='Red hell dildo x2 Worst';}
		if(a==8 && b==4){t1='Darkness of the hell dildo x2 Heaven';}
		if(a==8 && b==5){t1='Phantom of the hell dildo x2 Hell';}

		if(a==9 && b==1){t1='Normal Recorder x2 Marketed product';}
		if(a==9 && b==2){t1='Strengthening Recorder x2 Special order item';}
		if(a==9 && b==3){t1='Red Recorder x2 Love of that person';}
		if(a==9 && b==4){t1='Darkness of the Recorder x2 Valuables';}
		if(a==9 && b==5){t1='Phantom of the Recorder x2 Not for sale';}

		if(a==10 && b==1){t1='Normal Tentacle x2 Cute';}
		if(a==10 && b==2){t1='Strengthening Tentacle x2 Strong';}
		if(a==10 && b==3){t1='Red Tentacle x2 Burly';}
		if(a==10 && b==4){t1='Darkness of the Tentacle x2 Frightening';}
		if(a==10 && b==5){t1='Phantom of the Tentacle x2 Atrocious';}

		if(a==11 && b==3){t1='Speculum<br>Looks good in here!';}
		if(a==11 && b==4){t1='Piston dildo<br>JupoJupo';}
		if(a==11 && b==5){t1='Spin dildo<br>Round and round';}
		if(a==11 && b==6){t1='Piston Cucumber<br>Delicious!';}
		if(a==11 && b==7){t1='Piston hell dildo<br>jubojubojubo';}
		if(a==11 && b==8){t1='Spin hell dildo<br>GurunGurun';}
		if(a==11 && b==9){t1='Piston Recorder<br>Pi Pu Po!';}
		if(a==11 && b==10){t1='Active tentacle<br>vitality';}
		if(a==11 && b==11){t1='clyster<br>surge';}
		if(a==11 && b==12){t1='Anal plug<br>STOP!！';}
		if(a==11 && b==13){t1='Anal cucumber<br>Go to the back';}


		t2= '<br>' + separate(t_item_price[a][b]) + ' ahe';

	}else{

		if(a==1 && b==1){t1='強化クリック Apt×5 強くCしちゃうぞ';}
		if(a==1 && b==2){t1='ダブルクリック Apt×5 乳首WCしちゃうぞ';}
		if(a==1 && b==3){t1='トリプルクリック Apt×5 乳首TCしちゃうぞ';}
		if(a==1 && b==4){t1='イエロークリック Apt×5 黄色いクリック';}
		if(a==1 && b==5){t1='ピンククリック Apt×5 ピンクなクリック';}
		if(a==1 && b==6){t1='闇のクリック Apt×5 闇の力でクリック';}
		if(a==1 && b==7){t1='炎のクリック Apt×5 燃えろクリック力';}
		if(a==1 && b==8){t1='クリックを強いられているンだ！ Apt×5';}
		if(a==1 && b==9){t1='友達クリック Apt×5 友達！';}

		if(a==2 && b==1){t1='普通の洗濯ばさみ<br>×2 意外と痛い';}
		if(a==2 && b==2){t1='強化洗濯ばさみ<br>×2 とても痛い';}
		if(a==2 && b==3){t1='赤い洗濯ばさみ(青)<br>×2 痛い痛い痛い';}
		if(a==2 && b==4){t1='闇の洗濯ばさみ<br>×2 ちぎれる';}
		if(a==2 && b==5){t1='幻の洗濯ばさみ<br>×2 痛くない？！';}

		if(a==3 && b==1){t1='普通のローター<br>×2 アルカリ乾電池';}
		if(a==3 && b==2){t1='強化ローター<br>×2 激しすぎ！';}
		if(a==3 && b==3){t1='赤いローター<br>×2 燃えるローター';}
		if(a==3 && b==4){t1='闇のローター<br>×2 暗黒の力が今…';}
		if(a==3 && b==5){t1='幻のローター<br>×2 伝説の……';}

		if(a==4 && b==1){t1='普通のディルド<br>×2 ぶるぶるぶる';}
		if(a==4 && b==2){t1='強化ディルド<br>×2 びりびりびり';}
		if(a==4 && b==3){t1='赤いディルド<br>×2 熱い！熱い！';}
		if(a==4 && b==4){t1='闇のディルド<br>×2 おそろしい……';}
		if(a==4 && b==5){t1='幻のディルド<br>×2 極悪';}

		if(a==5 && b==1){t1='普通のアナルパール<br>いい感じ';}
		if(a==5 && b==2){t1='強化アナルパール<br>すごい';}
		if(a==5 && b==3){t1='赤いアナルパール<br>熱い';}
		if(a==5 && b==4){t1='闇のアナルパール<br>おっきい';}
		if(a==5 && b==5){t1='幻のアナルパール<br>いくらでも入る';}

		if(a==6 && b==1){t1='普通の胡瓜<br>おいしい';}
		if(a==6 && b==2){t1='強化胡瓜<br>とてもおいしい';}
		if(a==6 && b==3){t1='赤い胡瓜<br>辛い';}
		if(a==6 && b==4){t1='闇の胡瓜<br>苦い';}
		if(a==6 && b==5){t1='幻の胡瓜<br>まずい';}

		if(a==7 && b==1){t1='普通の媚薬浣腸<br>きもちいい';}
		if(a==7 && b==2){t1='強化媚薬浣腸<br>超きもちいい';}
		if(a==7 && b==3){t1='赤い媚薬浣腸<br>あへあへ';}
		if(a==7 && b==4){t1='闇の媚薬浣腸<br>やばい';}
		if(a==7 && b==5){t1='幻の媚薬浣腸<br>天国';}

		if(a==8 && b==1){t1='普通のバイブ(極悪)<br>極悪';}
		if(a==8 && b==2){t1='強化バイブ(極悪)<br>凶悪';}
		if(a==8 && b==3){t1='赤いバイブ(極悪)<br>最悪';}
		if(a==8 && b==4){t1='闇のバイブ(極悪)<br>天国';}
		if(a==8 && b==5){t1='幻のバイブ(極悪)<br>地獄';}

		if(a==9 && b==1){t1='普通の縦笛<br>市販品';}
		if(a==9 && b==2){t1='強化縦笛<br>特注品';}
		if(a==9 && b==3){t1='赤い縦笛<br>大好きなあの子の';}
		if(a==9 && b==4){t1='闇の縦笛<br>貴重品';}
		if(a==9 && b==5){t1='幻の縦笛<br>非売品';}

		if(a==10 && b==1){t1='普通の触手<br>かわいい';}
		if(a==10 && b==2){t1='強化触手<br>強い';}
		if(a==10 && b==3){t1='赤い触手<br>たくましい';}
		if(a==10 && b==4){t1='闇の触手<br>恐ろしい';}
		if(a==10 && b==5){t1='幻の触手<br>凶悪';}

		if(a==11 && b==3){t1='クスコ<br>中がよく見える';}
		if(a==11 && b==4){t1='ピストンバイブ<br>じゅぽじゅぽ';}
		if(a==11 && b==5){t1='スピンバイブ<br>くるくるくる';}
		if(a==11 && b==6){t1='ピストン胡瓜<br>おいしい';}
		if(a==11 && b==7){t1='ピストンバイブ(極悪)<br>じゅぼじゅぼじゅぼ';}
		if(a==11 && b==8){t1='スピンバイブ(極悪)<br>ぐるんぐるん';}
		if(a==11 && b==9){t1='ピストン縦笛<br>ぴっぷっぽ！';}
		if(a==11 && b==10){t1='活性触手<br>ぬるぬる動く';}
		if(a==11 && b==11){t1='浣腸<br>ゆるゆる';}
		if(a==11 && b==12){t1='アナル栓<br>ストップ！';}
		if(a==11 && b==13){t1='アナル胡瓜<br>奥まで入る';}

		t2= '<br>' + separate(t_item_price[a][b]) + 'あへ必要です';

	}


	$('#item_text1').html(t1+t2);
	$('#item_text2').html(t1);
}
//アイテム購入
function funItemSet(a,b){
	if(t_item[a][b]==0 && ahe >= t_item_price[a][b]){
		ahe = ahe - t_item_price[a][b];
		t_item[a][b]=1;
		$('#item_text1').text('');
		fun_print();
	}else{
		if(la==1){
			$('#item_text1').text('Ahe Not enough');
		}else{
			$('#item_text1').text('あへが足りません');
		}
	}
}


//文字「じゅぼ」
function fun_j3() {
	var x = 80;
	var y = 90;
	var zoom = 0.5 + Math.random() * 0.5;
	x = 200 + parseInt(Math.random()*x) + parseInt(Math.random()*2) * 160;
	y = 360 + parseInt(Math.random()*y);
	var r = parseInt(Math.random()*2)+1;
	var ahe = $('<div>').addClass('block').append($('<img>').attr('src', 'img/eff/j3'+r+'.png').css('zoom', zoom).css('-moz-transform', 'scale(' + zoom + ',' + zoom + ')'));
	ahe.css('left', x);
	ahe.css('top' , y);
	ahe.css('position' , 'absolute');
	ahe.css('z-index' , '900');
	ahe.css('-khtml-opacity' , 0.8);
	ahe.css('-moz-opacity' , 0.8);
	ahe.css('opacity' , 0.8);
	ahe.hide().fadeIn(1).animate({ top: y - 50},{duration:900,queue:false}).fadeOut(600, function () { $(this).remove(); });
	$('#cps1').append(ahe);
	var ahe2 = $('<div>').addClass('block').append($('<img>').attr('src', 'img/eff/ef2.png'));
	ahe2.css('left',200);
	ahe2.css('top' ,420);
	ahe2.css('position' , 'absolute');
	ahe2.css('z-index' , '889');
	ahe2.css('-khtml-opacity' , 0.8);
	ahe2.css('-moz-opacity' , 0.8);
	ahe2.css('opacity' , 0.8);
	ahe2.hide().fadeIn(1).animate({top:390},{duration:400,queue:false}).fadeOut(200, function(){$(this).remove();});
	$('#cps1').append(ahe2);
}

function fun_eff(){
	var x = 150;
	var y = 110;
	var zoom = 0.6 + Math.random() * 0.5;
	x = 80 + parseInt(Math.random()*x) + parseInt(Math.random()*2) * 280;
	y = 30 + parseInt(Math.random()*y);
	var ahe = $('<div>').addClass('block').append($('<img>').attr('src', 'img/eff/j21.png').css('zoom', zoom).css('-moz-transform', 'scale(' + zoom + ',' + zoom + ')'));
	ahe.css('left', x);
	ahe.css('top' , y);
	ahe.css('position' , 'absolute');
	ahe.css('z-index' , '900');
	ahe.css('-khtml-opacity' , 0.8);
	ahe.css('-moz-opacity' , 0.8);
	ahe.css('opacity' , 0.8);
	ahe.hide().fadeIn(1).animate({ top: y - 50},{duration:900,queue:false}).fadeOut(600, function () { $(this).remove(); });
	$('#cps1').append(ahe);

	var ahe2 = $('<div>').addClass('block').append($('<img>').attr('src', 'img/eff/ef1.png'));
	ahe2.css('left',86);
	ahe2.css('top' ,110);
	ahe2.css('position' , 'absolute');
	ahe2.css('z-index' , '889');
	ahe2.css('-khtml-opacity' , 0.8);
	ahe2.css('-moz-opacity' , 0.8);
	ahe2.css('opacity' , 0.8);
	ahe2.hide().fadeIn(1).animate({top:90},{duration:400,queue:false}).fadeOut(200, function(){$(this).remove();});
	$('#cps1').append(ahe2);
}

//ゴールデンアヘ
function Fun_golden(){
	Golden--;
	if(Golden<1){
		Golden = (60*2) + parseFloat(Math.random()*300);
		var x = $('body').width();
		var y = $('body').height();
		xr = Math.random() * x * 0.9;
		yr = parseFloat(800 * Math.random());
		if(yr>y){yr=y;}
		//ゴールデンあへを表示
		var gh = $('<div>').addClass('block').append($('<img>').attr('src', 'img/g-ahe.png'));
		gh.css('left', xr);
		gh.css('top' , yr);
		gh.css('position' , 'absolute');
		gh.css('z-index' , '1000');
		gh.attr('id', 'golden-ahe');
		gh.on("click", { class: "addClick" }, function() {Fun_golden_ck();});
		gh.hide().fadeIn(2000).delay(4000).fadeOut(4000, function () { $(this).remove(); });
		$('body').append(gh);
		return gh;
	}
}

//ゴールデンアヘがクリックされた！
function Fun_golden_ck(){
	ahe_g++;
	ahe=parseFloat(0+ahe)*1.2;
	ahe_all=ahe_all+parseFloat(0+ahe)*0.2;
	$("#golden-ahe").remove();
}



//状態選択
function fun_a1(s){
	var error=0;
	if(t_item[11][3]==0){if(s==11){error=1;}}	//クスコ未入手でクスコ選択
	if(t_item[11][4]==0){if(s==2){error=1;}}	//バイブピストン未入手でバイブピストン選択
	if(t_item[11][5]==0){if(s==3){error=1;}}	//バイブスピン未入手でバイブスピン選択
	if(t_item[11][6]==0){if(s==5){error=1;}}	//胡瓜ピストン未入手で胡瓜ピストン選択
	if(t_item[11][7]==0){if(s==7){error=1;}}	//極悪バイブピストン未入手で極悪バイブピストン選択
	if(t_item[11][8]==0){if(s==8){error=1;}}	//極悪バイブスピン未入手で極悪バイブスピン選択
	if(t_item[11][9]==0){if(s==10){error=1;}}	//縦笛ピストン未入手で縦笛ピストン選択
	if(t_item[11][10]==0){if(s==13){error=1;}}	//触手活性未入手で触手活性選択
	if(b_item[2]==0){if(s==12){error=1;}}	//洗濯ばさみ未入手で洗濯ばさみ選択
	if(b_item[3]==0){if(s==14){error=1;}}	//ローター未入手でローター選択
	if(b_item[4]==0){if(s==1){error=1;}}	//バイブ未入手でバイブ静止選択
	if(b_item[6]==0){if(s==4){error=1;}}	//胡瓜未入手で胡瓜静止選択
	if(b_item[8]==0){if(s==6){error=1;}}	//極悪バイブ未入手で極悪バイブ静止選択
	if(b_item[9]==0){if(s==9){error=1;}}	//縦笛未入手で縦笛静止選択
	if(error==0){
		viv=s;
		for(var i=0;i<=14;i++){$('#mu_a'+i).css('background-color','#fff');}
		$('#mu_a'+s).css('background-color','#ffff00');
		fun_ani_cl();	//顔の表情を変えるためにアニメを１回起こす
	}
}

function fun_voice(s){
	se1=s;
	for(var i=0;i<=1;i++){$('#mu_voice'+i).css('background-color','#fff');}
	$('#mu_voice'+s).css('background-color','#ffff00');
}

function fun_animation(s){
	ani=s;
	for(var i=0;i<=1;i++){$('#mu_animation'+i).css('background-color','#fff');}
	$('#mu_animation'+s).css('background-color','#ffff00');
}

function fun_skin(s){
	c_skin=s;
	for(var i=1;i<=4;i++){
		$('#mu_skin'+i).css('background-color','#fff');
		$('#b1_'+i).css('display','none');
		$('#b2_'+i).css('display','none');
		$('#b3l_'+i).css('display','none');
		$('#b3r_'+i).css('display','none');
		$('#b6l_'+i).css('display','none');
		$('#b6r_'+i).css('display','none');
		$('#body70_'+i).css('display','none');
		$('#body71_'+i).css('display','none');
		$('#body72_'+i).css('display','none');
		$('#fc_'+i).css('display','none');
	}
	$('#mu_skin'+s).css('background-color','#ffff00');
	$('#b1_'+s).css('display','block');
	$('#b2_'+s).css('display','block');
	$('#b3l_'+s).css('display','block');
	$('#b3r_'+s).css('display','block');
	$('#b6l_'+s).css('display','block');
	$('#b6r_'+s).css('display','block');
	$('#body7'+nip+'_'+s).css('display','block');
	$('#fc_'+s).css('display','block');
}

function fun_hair(s){
	c_hair=s;
	for(var i=1;i<=8;i++){
		$('#mu_hair'+i).css('background-color','#fff');
		$('#h'+i+'_1').css('display','none');
		$('#h'+i+'_2').css('display','none');
	}
	$('#mu_hair'+s).css('background-color','#ffff00');
	$('#h'+s+'_1').css('display','block');
	$('#h'+s+'_2').css('display','block');
}
function fun_under(s){
	if(s==1){
		$('#mu_under0').css('background-color','#fff');
		$('#mu_under1').css('background-color','#ff0');
		$('#mk2').css('display','block');
	}else{
		$('#mu_under0').css('background-color','#ff0');
		$('#mu_under1').css('background-color','#fff');
		$('#mk2').css('display','none');
	}
}

function fun_anal(s){
	var error=0;
	if(b_item[5]==0){if(s==1){error=1;}}	//アナルパール未入手でアナルパール選択
	if(t_item[11][11]==0){if(s==2){error=1;}}
	if(t_item[11][12]==0){if(s==3){error=1;}}
	if(t_item[11][13]==0){if(s==4){error=1;}}
	if(error==0){
		for(var i=0;i<=4;i++){
			$('#mu_anal'+i).css('background-color','#fff');
			$('#ac1_'+i).css('display','none');
		}
		$('#mu_anal'+s).css('background-color','#ff0');
		$('#ac1_'+s).css('display','block');
	}
}

function fun_nip(s){
	var error=0;
	if(b_item[2]==0){if(s==1){error=1;}}	//洗濯ばさみ未入手で洗濯ばさみ選択
	if(b_item[3]==0){if(s==2){error=1;}}	//ローター未入手でローター選択
	if(error==0){
		nip=s;
		for(var i=0;i<=2;i++){
			$('#mu_nip'+i).css('background-color','#fff');
			$('#body7'+i+'_1').css('display','none');
			$('#body7'+i+'_2').css('display','none');
			$('#body7'+i+'_3').css('display','none');
			$('#body7'+i+'_4').css('display','none');
		}
		$('#mu_nip'+s).css('background-color','#ffff00');
		$('#body7'+nip+'_'+c_skin).css('display','block');
	}
}



//lock表示
function fun_look(){
	//クスコ購入
	if(t_item[11][3]==1){
		$('#lock3_11').css('display','none');
	}else{
		$('#lock3_11').css('display','inline');
	}
	//洗濯ばさみ入手
	if(b_item[2]>0){
		$('#lock2_1').css('display','none');
		$('#lock3_12').css('display','none');
	}else{
		$('#lock2_1').css('display','inline');
		$('#lock3_12').css('display','inline');
	}
	//ローター入手
	if(b_item[3]>0){
		$('#lock2_2').css('display','none');
		$('#lock3_14').css('display','none');
	}else{
		$('#lock2_2').css('display','inline');
		$('#lock3_14').css('display','inline');
	}
	//バイブ入手
	if(b_item[4]>0){
		$('#lock3_1').css('display','none');
	}else{
		$('#lock3_1').css('display','inline');
	}


	//アナル
	if(b_item[5]>0){$('#lock1_1').css('display','none');}else{$('#lock1_1').css('display','inline');}
	if(t_item[11][11]==1){$('#lock1_2').css('display','none');}else{$('#lock1_2').css('display','inline');}
	if(t_item[11][12]==1){$('#lock1_3').css('display','none');}else{$('#lock1_3').css('display','inline');}
	if(t_item[11][13]==1){$('#lock1_4').css('display','none');}else{$('#lock1_4').css('display','inline');}



	//胡瓜入手
	if(b_item[6]>0){
		$('#lock3_4').css('display','none');
	}else{
		$('#lock3_4').css('display','inline');
	}
	//極悪入手
	if(b_item[8]>0){
		$('#lock3_6').css('display','none');
	}else{
		$('#lock3_6').css('display','inline');
	}
	//笛入手
	if(b_item[9]>0){
		$('#lock3_9').css('display','none');
	}else{
		$('#lock3_9').css('display','inline');
	}
	//バイブピストン
	if(t_item[11][4]==1){
		$('#lock3_2').css('display','none');
	}else{
		$('#lock3_2').css('display','inline');
	}
	//バイブスピン
	if(t_item[11][5]==1){
		$('#lock3_3').css('display','none');
	}else{
		$('#lock3_3').css('display','inline');
	}
	//胡瓜ピストン
	if(t_item[11][6]==1){
		$('#lock3_5').css('display','none');
	}else{
		$('#lock3_5').css('display','inline');
	}
	//極悪ピストン
	if(t_item[11][7]==1){
		$('#lock3_7').css('display','none');
	}else{
		$('#lock3_7').css('display','inline');
	}
	//極悪スピン
	if(t_item[11][8]==1){
		$('#lock3_8').css('display','none');
	}else{
		$('#lock3_8').css('display','inline');
	}
	//笛ピストン
	if(t_item[11][9]==1){
		$('#lock3_10').css('display','none');
	}else{
		$('#lock3_10').css('display','inline');
	}
	//触手活性
	if(t_item[11][10]==1){
		$('#lock3_13').css('display','none');
	}else{
		$('#lock3_13').css('display','inline');
	}
}

//アイテム購入1
function fun_item_buy1(s){
	var a = fuku(item_basic_price[s],b_item[s],1.15);
	if(ahe>=a){
		ahe=ahe-a;
		b_item[s]++;
	}
	fun_print();	//表示
}


function fun_language(s) {
	la=s;
	if(s==1){
		$('#language0').css('text-decoration','underline').css('font-weight','normal').css('color','#00A1E9');
		$('#language1').css('text-decoration','none').css('font-weight','bold').css('color','#ff0000');
		$('.j').css('display','none');
		$('.e').css('display','inline');
		$('title').text('Ahe-Click 2');
	}else{
		$('#language0').css('text-decoration','none').css('font-weight','bold').css('color','#ff0000');
		$('#language1').css('text-decoration','underline').css('font-weight','normal').css('color','#00A1E9');
		$('.j').css('display','inline');
		$('.e').css('display','none');
		$('title').text('あへくりっく２');
	}
}

//複利計算 元となる値,複利回数,係数
//1万をかけて割ってるのは、小さい数値だと誤差が大きすぎるため
function fuku(a,b,c){a =a*100;if(b>1){for(var i=1;i<b;i++){a=Math.ceil(a*c);}}return parseFloat(a)/100;}
// 正規表現でセパレート
function separate(num){return String(num).replace(/(\d)(?=(\d\d\d)+(?!\d))/g,'$1,');}




//オートセーブ
$(document).ready(function() {(function autosave(){setTimeout(autosave, 1000);ao();})();})
function ao() {
	if(ost<1){
		ost=180;
		save();
	}else{
		ost--;
	}
	if(ost==1 || ost > 175){
		if(la==1){
			$('#autosave').html('saved');
		}else{
			$('#autosave').html('セーブしました');
		}
	}else{
		if(la==1){
			$('#autosave').html('Auto-save in '+ost+' seconds');
		}else{
			$('#autosave').html('オートセーブまで後'+ost+'秒');
		}
	}
}
//save
function save(){
	fun_print();
	var a='';
	for(var i=0;i<=10;i++){
		a=a+b_item[i]+'#';
	}
	$('#form_la').val(la);
	$('#form_ahe').val(parseFloat(0+ahe));
	$('#form_ahe_all').val(parseFloat(0+ahe_all));
	$('#form_ahe_max').val(parseFloat(0+ahe_max));
	$('#form_ahe_g').val(parseFloat(0+ahe_g));
	$('#form_clc').val(parseFloat(0+clc));
	$('#form_b_item').val(a);




	for(var i=1;i<=11;i++){
		var b='';
		for(var ii=0;ii<=13;ii++){
			b=b+t_item[i][ii]+'#';
		}
		$('#form_t_item'+i).val(b);
	}


	$('#form').submit();
	setTimeout(function(){$("#save").val($('#data_save').contents().find('body').text());},800);
	ost=180;
}
//load
function fun_load() {
	la      = parseFloat(0+$('#form_la').val());
	ahe     = parseFloat(0+$('#form_ahe').val());
	ahe_all = parseFloat(0+$('#form_ahe_all').val());
	ahe_max = parseFloat(0+$('#form_ahe_max').val());
	ahe_g   = parseFloat(0+$('#form_ahe_g').val());
	clc     = parseFloat(0+$('#form_clc').val());
	var a   = $('#form_b_item').val();

	var b1 = $('#form_t_item1').val();
	var b2 = $('#form_t_item2').val();
	var b3 = $('#form_t_item3').val();
	var b4 = $('#form_t_item4').val();
	var b5 = $('#form_t_item5').val();
	var b6 = $('#form_t_item6').val();
	var b7 = $('#form_t_item7').val();
	var b8 = $('#form_t_item8').val();
	var b9 = $('#form_t_item9').val();
	var b10 = $('#form_t_item10').val();
	var b11 = $('#form_t_item11').val();
	var ar_a = new Array();
	var ar_b = new Array();

	if(a.length>11){
		b_item=a.split("#");
	}else{
		//何もしない
	}


	if(b1.length>3){t_item[1] = b1.split("#");}
	if(b2.length>3){t_item[2] = b2.split("#");}
	if(b3.length>3){t_item[3] = b3.split("#");}
	if(b4.length>3){t_item[4] = b4.split("#");}
	if(b5.length>3){t_item[5] = b5.split("#");}
	if(b6.length>3){t_item[6] = b6.split("#");}
	if(b7.length>3){t_item[7] = b7.split("#");}
	if(b8.length>3){t_item[8] = b8.split("#");}
	if(b9.length>3){t_item[9] = b9.split("#");}
	if(b10.length>3){t_item[10] = b10.split("#");}
	if(b11.length>3){t_item[11] = b11.split("#");}
	for(var i=0;i<=11;i++){
		for(var ii=0;ii<=13;ii++){
			if(t_item[i][ii]=="undefined"){
				t_item[i][ii]=0;
			}
		}
	}


}

//スマホ用フリック
/*
$('#flc_btm').bind({
	'touchstart': function(e) {
		this.touchX = event.changedTouches[0].pageX;
		this.slideX = $(this).position().left;
	},'touchmove': function(e) {
		e.preventDefault();
		this.slideX = this.slideX - (this.touchX - event.changedTouches[0].pageX );
		$(this).css({left:this.slideX});
		this.touchX = event.changedTouches[0].pageX;
	},'touchend': function(e) {
		if (this.slideX > 0) {
			this.slideX = 0;
			$('#flc_btm').animate({left:"0px"},500);
		}
		if (this.slideX < -600) {
			this.slideX = -600;
			$('#flc_btm').animate({left:"-600px"},500);
		}
	}
});
*/
$('#flc_btm').mousedown(function(e){
	this.touchX = event.pageX;
	this.slideX = $(this).position().left;
	$('#flc_btm').mousemove(function(e){
		e.preventDefault();
		this.slideX = this.slideX - (this.touchX - event.pageX );
		$(this).css({left:this.slideX});
		this.accel = (event.pageX - this.touchX) * 5;
		this.touchX = event.pageX;
	});
}).mouseup(function(e){
	this.slideX += this.accel
	$(this).animate({left : this.slideX },200,'linear');
	this.accel = 0;
	if (this.slideX > 0) {
		 this.slideX = 0;
		 $(this).animate({left:"0px"},500);
	}
	if (this.slideX < -720) {
		 this.slideX = -720;
		 $(this).animate({left:"-220px"},500);
	}
	$('#flc_btm').off("mousemove");
});

</script>
</head>
<body>
<div id="wrap">
<div id="header">
	<div id="twitter">
<a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.tomatama.com/click/omake/u18/" data-lang="ja">ツイート</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	</div>
	<h1><span class="j">あへくりっく２</span><span class="e">Ahe-Click 2</span></h1>
</div>
<p>
<span class="j">クリックでたくさんあへらせよう。</span><span class="e">Let's Click!</span>
</p>
<div style="float:right;">
<span id="ahe_cnt" style="font-weight:bold;"></span> 
<span id="language0" OnClick="fun_language(0);">Japanese</span> | <span id="language1" OnClick="fun_language(1);">English</span><br>
</div>

<div id="area_menu" style="display:none;">
	<span class="menu" id="area_mu1" OnClick="fun_mu(1);">HOME</span> | 
	<span class="menu" id="area_mu2" OnClick="fun_mu(2);">SHOP</span> | 
	<span class="menu" id="area_mu3" OnClick="fun_mu(3);"><span class="j">実績</span><span class="e">TROPHY</span></span> | 
	<span class="menu" id="area_mu4" OnClick="fun_mu(4);"><span class="j">掲示板</span><span class="e">BBS(Jpn)</span></span> | 
	<span class="menu" id="area_mu5" OnClick="fun_mu(5);">FAQ</span> | 
	<span class="menu" id="area_mu6" OnClick="fun_mu(6);"><span class="j">セーブ＆ロード</span><span class="e">Save&Load</span></span> | 
	<span class="menu" id="area_mu7" OnClick="fun_mu(7);"><span class="j">クレジット</span><span class="e">Credit</span></span> | 
	<span class="menu" id="area_mu8" OnClick="fun_mu(8);"><span class="j">音声作品</span><span class="e">VOICE</span></span> | 
	<span class="menu" id="area_mu9" OnClick="fun_mu(9);"><span class="j">広告</span><span class="e">CM</span></span> | 
	<span class="menu" id="area_mu10" OnClick="fun_mu(10);"><span class="j">広告 online</span><span class="e">CM online</span></span>
</div>




<style>
/* -- canvas -- */
#cps1{
	width:700px;
	height:600px;
	margin:0 auto;
	padding:0;
	position: relative;
	overflow: hidden;
	z-index:1;
}
#cps_img1{
	width:700px;
	height:600px;
	margin:0 auto;
	padding:0;
	position: absolute;
	top:0;
	left:0;
	z-index:10;
}
#cps_flc{
	width:400px;
	height:50px;
	margin:0 auto;
	padding:0;
	position: absolute;
	overflow:hidden;
	top:540px;
	left:10px;
	z-index:11;
	opacity:0.5;
	background-color:#f66;
	
}
#cps_img2{
	width:700px;
	height:600px;
	margin:0 auto;
	padding:0;
	position: absolute;
	top:0;
	left:0;
	z-index:20;
	opacity:0;
	background-color:#000;
}
#cps_img3{
	width:700px;
	height:600px;
	position: absolute;
	margin:0;
	padding:0;
	z-index:30;
	top:0;
	left:0;
}
#cps3{
	width:700px;
	height:600px;
	margin:0 auto;
	padding:0;
	position: relative;
	overflow: hidden;
	display:none;
}



#flc_btm{position: absolute;z-index:1;top:0px;left:0px;display:block;width:80px;height:50px;background-color:#000;}


#a0{display:block;}
#a1{display:none;}
#a2{display:none;}
#a3{display:none;}
#a4{display:none;}
#a5{display:none;}
#a6{display:none;}
#a7{display:none;}
#a8{display:none;}
#a9{display:none;}
#a10{display:none;}







#hair2 {position: absolute;z-index:200;top:14px;left:195px;display:block;}






#face2_2h{position: absolute;z-index:142;top:98px;left:240px;}
#face2_1h{position: absolute;z-index:141;top:98px;left:240px;}
#face2_2 {position: absolute;z-index:132;top:98px;left:240px;}
#face2_1 {position: absolute;z-index:131;top:98px;left:240px;}
#face1_2 {position: absolute;z-index:122;top:172px;left:293px;}
#face1_1 {position: absolute;z-index:121;top:172px;left:293px;}
#face0_2 {position: absolute;z-index:112;top:115px;left:240px;}
#face0_1 {position: absolute;z-index:111;top:115px;left:240px;}


#face1 {position: absolute;z-index:100;top:35px;left:220px;display:block;}



#body7 {position: absolute;z-index: 90;top:146px;left:209px;display:block;}

#body6r{position: absolute;z-index: 80;top:154px;left:360px;display:block;}
#body6l{position: absolute;z-index: 70;top:169px;left:115px;display:block;}



#goods {position: absolute;z-index: 50;top:364px;left:239px;display:block;}

#mk1 {position: absolute;z-index: 1;top:0px;left:0px;display:block;}
#mk2 {position: absolute;z-index: 2;top:0px;left:0px;display:block;}
#ac1 {position: absolute;z-index: 11;top:0px;left:0px;display:block;}
#ac2 {position: absolute;z-index: 21;top:0px;left:0px;display:block;}
#ac3 {position: absolute;z-index: 22;top:0px;left:0px;display:block;}





#body3r{position: absolute;z-index: 40;top:346px;left:419px;display:block;}
#body3l{position: absolute;z-index: 40;top:373px;left:-110px;display:block;}
#body2 {position: absolute;z-index: 30;top:337px;left:188px;display:block;}
#body1 {position: absolute;z-index: 20;top:160px;left:240px;display:block;}

#hair1 {position: absolute;z-index: 10;top:14px;left:214px;display:block;}

#bk{position: absolute;z-index:1;top:0px;left:0px;display:block;}





.j{display:inline;}
.e{display:none;}

#language0{cursor:pointer;text-decoration:none;font-weight:bold;color:#ff0000;}
#language1{cursor:pointer;text-decoration:underline;font-weight:normal;color:#00A1E9;}

.r18ck{color:#006EB0;text-decoration:underline;cursor:pointer;font-weight:bold;}
</style>


<div id="a0" style="padding:120px 0 200px 0;margin0 auto;width:100%;text-align:center;">





<span class="j">このゲームはエロゲームです。</span><br>
<span class="j">１８歳未満はご利用いただけません。</span><br>
<span class="e">This game contains adult contents.</span><br>
<span class="e">Are you over the age of majority where you live, and willing to access adult content?</span><br>
<br>
<span class="j">
<span class="r18ck" id="r18a" OnClick="funR18(1);">１８歳以上です</span>　|　
<span class="r18ck" id="r18b" OnClick="funR18(0);">１８歳未満です。エロとかないわー。</span>
</span>
<span class="e">
<span class="r18ck" id="r18a" OnClick="funR18(1);">I am over the age of majority where I live and I wish to access adult content.</span>
<br>
<br>
<span class="r18ck" id="r18b" OnClick="funR18(0);">I am under the age of majority or I do not wish to access adult content.</span>
</span>



</div>



<div id="a1" onSelectStart = "return false;">


<table onSelectStart = "return false;">
	<tr valign="top">
		<td width="400">

			<div id="cps1" onSelectStart = "return false;">

<!--
				<div id="cps_flc" onSelectStart = "return false;">
					<div id="flc_btm"></div>
				</div>
-->

				<div id="cps_img1" onSelectStart = "return false;">
					<div id="hair2">
						<div id="h8_2" style="display:none;"><img src="img/hair/h8_2.png" /></div>
						<div id="h7_2" style="display:none;"><img src="img/hair/h7_2.png" /></div>
						<div id="h6_2" style="display:none;"><img src="img/hair/h6_2.png" /></div>
						<div id="h5_2" style="display:none;"><img src="img/hair/h5_2.png" /></div>
						<div id="h4_2" style="display:none;"><img src="img/hair/h4_2.png" /></div>
						<div id="h3_2" style="display:none;"><img src="img/hair/h3_2.png" /></div>
						<div id="h2_2" style="display:none;"><img src="img/hair/h2_2.png" /></div>
						<div id="h1_2" style="display:block;"><img src="img/hair/h1_2.png" /></div>
					</div>

					<!-- ハイライト -->
					<div id="face2_2h" style="display:none;"><img src="img/body/f2_2h.png" /></div>
					<div id="face2_1h"><img src="img/body/f2_1h.png" /></div>
					<!-- 目 -->
					<div id="face2_2" style="display:none;"><img src="img/body/f2_2.png" id="img_face2_2" /></div>
					<div id="face2_1"><img src="img/body/f2_1.png" id="img_face2_2" /></div>
					<!-- 口 -->
					<div id="face1_2" style="display:none;"><img src="img/body/f1_2.png" id="img_face1_2" /></div>
					<div id="face1_1"><img src="img/body/f1_1.png" id="img_face1_1" /></div>
					<!-- あへ -->
					<div id="face0_2" style="display:none;"><img src="img/body/f0_2.png" /></div>
					<div id="face0_1"><img src="img/body/f0_1.png" /></div>





					<div id="face1">
						<div id="fc_4" style="display:none;"><img src="img/body/bf4.png" /></div>
						<div id="fc_3" style="display:none;"><img src="img/body/bf3.png" /></div>
						<div id="fc_2" style="display:none;"><img src="img/body/bf2.png" /></div>
						<div id="fc_1" style="display:block;"><img src="img/body/bf1.png" /></div>
					</div>

					<div id="body7">
						<div id="body72_4" style="display:none;"><img src="img/body/b4_72.png" /></div>
						<div id="body71_4" style="display:none;"><img src="img/body/b4_71.png" /></div>
						<div id="body70_4" style="display:none;"><img src="img/body/b4_70.png" /></div>
						<div id="body72_3" style="display:none;"><img src="img/body/b3_72.png" /></div>
						<div id="body71_3" style="display:none;"><img src="img/body/b3_71.png" /></div>
						<div id="body70_3" style="display:none;"><img src="img/body/b3_70.png" /></div>
						<div id="body72_2" style="display:none;"><img src="img/body/b2_72.png" /></div>
						<div id="body71_2" style="display:none;"><img src="img/body/b2_71.png" /></div>
						<div id="body70_2" style="display:none;"><img src="img/body/b2_70.png" /></div>
						<div id="body72_1" style="display:none;"><img src="img/body/b1_72.png" /></div>
						<div id="body71_1" style="display:none;"><img src="img/body/b1_71.png" /></div>
						<div id="body70_1" style="display:block;"><img src="img/body/b1_70.png" /></div>
					</div>
					<div id="body6r">
						<div id="b6r_4" style="display:none;"><img src="img/body/b4_6r.png" /></div>
						<div id="b6r_3" style="display:none;"><img src="img/body/b3_6r.png" /></div>
						<div id="b6r_2" style="display:none;"><img src="img/body/b2_6r.png" /></div>
						<div id="b6r_1" style="display:block;"><img src="img/body/b1_6r.png" /></div>
					</div>
					<div id="body6l">
						<div id="b6l_4" style="display:none;"><img src="img/body/b4_6l.png" /></div>
						<div id="b6l_3" style="display:none;"><img src="img/body/b3_6l.png" /></div>
						<div id="b6l_2" style="display:none;"><img src="img/body/b2_6l.png" /></div>
						<div id="b6l_1" style="display:block;"><img src="img/body/b1_6l.png" /></div>
					</div>


					<div id="goods">

						<div id="ac2">
							<div id="nb10" style="display:none;"><img src="img/goods/nb10.png" /></div>
							<div id="nb9_7" style="display:none;"><img src="img/goods/nb9_7.png" /></div>
							<div id="nb9_6" style="display:none;"><img src="img/goods/nb9_6.png" /></div>
							<div id="nb9_5" style="display:none;"><img src="img/goods/nb9_5.png" /></div>
							<div id="nb9_4" style="display:none;"><img src="img/goods/nb9_4.png" /></div>
							<div id="nb9_3" style="display:none;"><img src="img/goods/nb9_3.png" /></div>
							<div id="nb9_2" style="display:none;"><img src="img/goods/nb9_2.png" /></div>
							<div id="nb9_1" style="display:none;"><img src="img/goods/nb9_1.png" /></div>
							<div id="nb8" style="display:none;"><img src="img/goods/nb8.png" /></div>
							<div id="nb7" style="display:none;"><img src="img/goods/nb7.png" /></div>
							<div id="nb6_5" style="display:none;"><img src="img/goods/nb6_5.png" /></div>
							<div id="nb6_4" style="display:none;"><img src="img/goods/nb6_4.png" /></div>
							<div id="nb6_3" style="display:none;"><img src="img/goods/nb6_3.png" /></div>
							<div id="nb6_2" style="display:none;"><img src="img/goods/nb6_2.png" /></div>
							<div id="nb6_1" style="display:none;"><img src="img/goods/nb6_1.png" /></div>
							<div id="nb5_5" style="display:none;"><img src="img/goods/nb5_5.png" /></div>
							<div id="nb5_4" style="display:none;"><img src="img/goods/nb5_4.png" /></div>
							<div id="nb5_3" style="display:none;"><img src="img/goods/nb5_3.png" /></div>
							<div id="nb5_2" style="display:none;"><img src="img/goods/nb5_2.png" /></div>
							<div id="nb5_1" style="display:none;"><img src="img/goods/nb5_1.png" /></div>
							<div id="nb4_4" style="display:none;"><img src="img/goods/nb4_4.png" /></div>
							<div id="nb4_3" style="display:none;"><img src="img/goods/nb4_3.png" /></div>
							<div id="nb4_2" style="display:none;"><img src="img/goods/nb4_2.png" /></div>
							<div id="nb4_1" style="display:none;"><img src="img/goods/nb4_1.png" /></div>
							<div id="nb3_5" style="display:none;"><img src="img/goods/nb3_5.png" /></div>
							<div id="nb3_4" style="display:none;"><img src="img/goods/nb3_4.png" /></div>
							<div id="nb3_3" style="display:none;"><img src="img/goods/nb3_3.png" /></div>
							<div id="nb3_2" style="display:none;"><img src="img/goods/nb3_2.png" /></div>
							<div id="nb3_1" style="display:none;"><img src="img/goods/nb3_1.png" /></div>
							<div id="nb2_11" style="display:none;"><img src="img/goods/nb2_11.png" /></div>
							<div id="nb2_10" style="display:none;"><img src="img/goods/nb2_10.png" /></div>
							<div id="nb2_9" style="display:none;"><img src="img/goods/nb2_9.png" /></div>
							<div id="nb2_8" style="display:none;"><img src="img/goods/nb2_8.png" /></div>
							<div id="nb2_7" style="display:none;"><img src="img/goods/nb2_7.png" /></div>
							<div id="nb2_6" style="display:none;"><img src="img/goods/nb2_6.png" /></div>
							<div id="nb2_5" style="display:none;"><img src="img/goods/nb2_5.png" /></div>
							<div id="nb2_4" style="display:none;"><img src="img/goods/nb2_4.png" /></div>
							<div id="nb2_3" style="display:none;"><img src="img/goods/nb2_3.png" /></div>
							<div id="nb2_2" style="display:none;"><img src="img/goods/nb2_2.png" /></div>
							<div id="nb2_1" style="display:none;"><img src="img/goods/nb2_1.png" /></div>
							<div id="nb1_5" style="display:none;"><img src="img/goods/nb1_5.png" /></div>
							<div id="nb1_4" style="display:none;"><img src="img/goods/nb1_4.png" /></div>
							<div id="nb1_3" style="display:none;"><img src="img/goods/nb1_3.png" /></div>
							<div id="nb1_2" style="display:none;"><img src="img/goods/nb1_2.png" /></div>
							<div id="nb1_1" style="display:none;"><img src="img/goods/nb1_1.png" /></div>
						</div>


						<div id="ac1">
							<div id="ac1_1" style="display:none;"><img src="img/goods/at_pl.png" /></div>
							<div id="ac1_2" style="display:none;"><img src="img/goods/at_ic.png" /></div>
							<div id="ac1_3" style="display:none;"><img src="img/goods/at_stp.png" /></div>
							<div id="ac1_4" style="display:none;"><img src="img/goods/at_ky.png" /></div>
						</div>

						<div id="mk2" style="display:none;"><img src="img/goods/m02.png" /></div>
						<div id="mk1"><img src="img/goods/m01.png" /></div>
					</div>



					<div id="body3r">
						<div id="b3r_4" style="display:none;"><img src="img/body/b4_3r.png" /></div>
						<div id="b3r_3" style="display:none;"><img src="img/body/b3_3r.png" /></div>
						<div id="b3r_2" style="display:none;"><img src="img/body/b2_3r.png" /></div>
						<div id="b3r_1" style="display:block;"><img src="img/body/b1_3r.png" /></div>
					</div>
					<div id="body3l">
						<div id="b3l_4" style="display:none;"><img src="img/body/b4_3l.png" /></div>
						<div id="b3l_3" style="display:none;"><img src="img/body/b3_3l.png" /></div>
						<div id="b3l_2" style="display:none;"><img src="img/body/b2_3l.png" /></div>
						<div id="b3l_1" style="display:block;"><img src="img/body/b1_3l.png" /></div>
					</div>
					<div id="body2">
						<div id="b2_4" style="display:none;"><img src="img/body/b4_2.png" /></div>
						<div id="b2_3" style="display:none;"><img src="img/body/b3_2.png" /></div>
						<div id="b2_2" style="display:none;"><img src="img/body/b2_2.png" /></div>
						<div id="b2_1" style="display:block;"><img src="img/body/b1_2.png" /></div>
					</div>
					<div id="body1">
						<div id="b1_4" style="display:none;"><img src="img/body/b4_1.png" /></div>
						<div id="b1_3" style="display:none;"><img src="img/body/b3_1.png" /></div>
						<div id="b1_2" style="display:none;"><img src="img/body/b2_1.png" /></div>
						<div id="b1_1" style="display:block;"><img src="img/body/b1_1.png" /></div>
					</div>

					<div id="hair1">
						<div id="h8_1" style="display:none;"><img src="img/hair/h8_1.png" /></div>
						<div id="h7_1" style="display:none;"><img src="img/hair/h7_1.png" /></div>
						<div id="h6_1" style="display:none;"><img src="img/hair/h6_1.png" /></div>
						<div id="h5_1" style="display:none;"><img src="img/hair/h5_1.png" /></div>
						<div id="h4_1" style="display:none;"><img src="img/hair/h4_1.png" /></div>
						<div id="h3_1" style="display:none;"><img src="img/hair/h3_1.png" /></div>
						<div id="h2_1" style="display:none;"><img src="img/hair/h2_1.png" /></div>
						<div id="h1_1" style="display:block;"><img src="img/hair/h1_1.png" /></div>
					</div>




					<div id="bk"><img src="img/bk1.jpg" /></div>

<!--
					<div id="bk"><img src="img/smp.jpg" /></div>
-->
				</div>
				<div id="cps_img2"></div>
				<div id="cps_img3"></div>
			</div>
		</td>
		<td width="600">
<span id="autosave"></span><br>
<style>
.ms{float:left;cursor:pointer;width:86px;height:25px;}
#ms1{display:none;}#ms1r{display:block;}#s_area1{display:block;}
#ms2{display:block;}#ms2r{display:none;}#s_area2{display:none;}
#ms3{display:block;}#ms3r{display:none;}#s_area3{display:none;}
.item_a{
	float: left;
	width: 260px;
	height: 62px;
	border: #CCC 1px solid;
	border-radius: 5px;
	background-color: #AADDFF;
	margin: 5px 0 0 0;
	padding:0;
	color: #000;
	position: relative;
	overflow: hidden;
}

.item_a1 {position: absolute;z-index: 10;top: 7px;left :8px;display:block;}
.item_a2 {position: absolute;z-index: 20;top: 8px;left :65px;display:block;}
.item_a3 {position: absolute;z-index: 30;top:24px;right:10px;display:block;}
.item_a4 {position: absolute;z-index: 40;top:40px;right:10px;display:block;}
</style>

			<div style="width:260px;height:35px;">
				<div class="ms" OnClick="fun_ms(1);"><img src="img/ms1.png" id="ms1" /><img src="img/ms1r.png" id="ms1r" /></div>
				<div class="ms" OnClick="fun_ms(2);"><img src="img/ms2.png" id="ms2" /><img src="img/ms2r.png" id="ms2r" /></div>
				<div class="ms" OnClick="fun_ms(3);"><img src="img/ms3.png" id="ms3" /><img src="img/ms3r.png" id="ms3r" /></div>
			</div>
			<div style="width:260px;" id="s_area1">
				<div class="item_a" id="item_a1" OnClick="fun_item_buy1(1);">
					<div class="item_a1"><img src="img/item/item1.png" /></div>
					<div class="item_a2"><span class="j">カーソル</span><span class="e">Cursor</span></div>
					<div class="item_a3" id="item_a1_1">100ahe</div>
					<div class="item_a4" id="item_a1_2">5</div>
				</div>
				<div class="item_a" id="item_a2" OnClick="fun_item_buy1(2);">
					<div class="item_a1"><img src="img/item/item2.png" /></div>
					<div class="item_a2"><span class="j">洗濯ばさみ</span><span class="e">Clip</span></div>
					<div class="item_a3" id="item_a2_1">100ahe</div>
					<div class="item_a4" id="item_a2_2">5</div>
				</div>
				<div class="item_a" id="item_a3" OnClick="fun_item_buy1(3);">
					<div class="item_a1"><img src="img/item/item3.png" /></div>
					<div class="item_a2"><span class="j">ローター</span><span class="e">Vibrator</span></div>
					<div class="item_a3" id="item_a3_1">100ahe</div>
					<div class="item_a4" id="item_a3_2">5</div>
				</div>
				<div class="item_a" id="item_a4" OnClick="fun_item_buy1(4);">
					<div class="item_a1"><img src="img/item/item4.png" /></div>
					<div class="item_a2"><span class="j">バイブ</span><span class="e">Vibe</span></div>
					<div class="item_a3" id="item_a4_1">100ahe</div>
					<div class="item_a4" id="item_a4_2">5</div>
				</div>
				<div class="item_a" id="item_a5" OnClick="fun_item_buy1(5);">
					<div class="item_a1"><img src="img/item/item5.png" /></div>
					<div class="item_a2"><span class="j">アナルパール</span><span class="e">Anal Beads</span></div>
					<div class="item_a3" id="item_a5_1">100ahe</div>
					<div class="item_a4" id="item_a5_2">5</div>
				</div>
				<div class="item_a" id="item_a6" OnClick="fun_item_buy1(6);">
					<div class="item_a1"><img src="img/item/item6.png" /></div>
					<div class="item_a2"><span class="j">胡瓜</span><span class="e">Cucumber</span></div>
					<div class="item_a3" id="item_a6_1">100ahe</div>
					<div class="item_a4" id="item_a6_2">5</div>
				</div>
				<div class="item_a" id="item_a7" OnClick="fun_item_buy1(7);">
					<div class="item_a1"><img src="img/item/item7.png" /></div>
					<div class="item_a2"><span class="j">浣腸</span><span class="e">Enema</span></div>
					<div class="item_a3" id="item_a7_1">100ahe</div>
					<div class="item_a4" id="item_a7_2">5</div>
				</div>
				<div class="item_a" id="item_a8" OnClick="fun_item_buy1(8);">
					<div class="item_a1"><img src="img/item/item8.png" /></div>
					<div class="item_a2"><span class="j">バイブ(極悪)</span><span class="e">Hell Vibe</span></div>
					<div class="item_a3" id="item_a8_1">100ahe</div>
					<div class="item_a4" id="item_a8_2">5</div>
				</div>
				<div class="item_a" id="item_a9" OnClick="fun_item_buy1(9);">
					<div class="item_a1"><img src="img/item/item9.png" /></div>
					<div class="item_a2"><span class="j">笛</span><span class="e">Recorder</span></div>
					<div class="item_a3" id="item_a9_1">100ahe</div>
					<div class="item_a4" id="item_a9_2">5</div>
				</div>
				<div class="item_a" id="item_a10" OnClick="fun_item_buy1(10);">
					<div class="item_a1"><img src="img/item/item10.png" /></div>
					<div class="item_a2"><span class="j">触手</span><span class="e">Tentacle</span></div>
					<div class="item_a3" id="item_a10_1">100ahe</div>
					<div class="item_a4" id="item_a10_2">5</div>
				</div>
			</div>
			<div style="width:260px;" id="s_area2">
<div><span class="j">あへ数</span><span class="e">Ahe</span></div>
<div id="status1" style="text-align:right;"></div>
<div><span class="j">最大あへ数</span><span class="e">Max Ahe</span></div>
<div id="status2" style="text-align:right;"></div>
<div><span class="j">総あへ数</span><span class="e">Total Ahe</span></div>
<div id="status3" style="text-align:right;"></div>
<div><span class="j">クリック数</span><span class="e">Total Click</span></div>
<div id="status4" style="text-align:right;"></div>
<div><span class="j">ゴールデンあへクリック数</span><span class="e">Total Golden Ahe</span></div>
<div id="status5" style="text-align:right;"></div>
<div><span class="j">獲得実績</span><span class="e">Trophy</span></div>
<div id="trophy_c" style="text-align:right;"></div>




			</div>
			<div style="width:260px;" id="s_area3">
<style>
.mut{cursor:pointer;border-bottom:1px dotted #999;background-color:#C70067;}
.mu{cursor:pointer;border-bottom:1px dotted #999;}
</style>
<div class="mut" OnClick="$('#mu_v').slideToggle();"><span class="j">音声</span><span class="e">VOICE</span></div>
<div id="mu_v" style="display:none;">
	<div class="mu" id="mu_voice0" OnClick="fun_voice(0);" style="background-color:#ffff00;">OFF</div>
	<div class="mu" id="mu_voice1" OnClick="fun_voice(1);">ON</div>
</div>
<div class="mut" OnClick="$('#mu_ani').slideToggle();"><span class="j">アニメ</span><span class="e">Animation</span></div>
<div id="mu_ani" style="display:none;">
	<div class="mu" id="mu_animation0" OnClick="fun_animation(0);">OFF</div>
	<div class="mu" id="mu_animation1" OnClick="fun_animation(1);" style="background-color:#ffff00;">ON</div>
</div>
<div class="mut" OnClick="$('#mu_sk').slideToggle();"><span class="j">肌</span><span class="e">Skin</span></div>
<div id="mu_sk" style="display:none;">
	<div class="mu" id="mu_skin1" OnClick="fun_skin(1);" style="background-color:#ffff00;color:#000;"><span class="j">通常</span><span class="e">Yellow</span></div>
	<div class="mu" id="mu_skin2" OnClick="fun_skin(2);"><span class="j">白色</span><span class="e">White</span></div>
	<div class="mu" id="mu_skin3" OnClick="fun_skin(3);"><span class="j">褐色</span><span class="e">Brown</span></div>
	<div class="mu" id="mu_skin4" OnClick="fun_skin(4);"><span class="j">悪魔</span><span class="e">DEVIL</span></div>
</div>
<div class="mut" OnClick="$('#mu_hhr').slideToggle();"><span class="j">髪</span><span class="e">Hair</span></div>
<div id="mu_hhr" style="display:none;">
	<div class="mu" id="mu_hair1" OnClick="fun_hair(1);" style="background-color:#ffff00;color:#000;"><span class="j">茶1</span></div>
	<div class="mu" id="mu_hair2" OnClick="fun_hair(2);"><span class="j">茶2</span><span class="e">Brown2</span></div>
	<div class="mu" id="mu_hair3" OnClick="fun_hair(3);"><span class="j">青</span><span class="e">Blue</span></div>
	<div class="mu" id="mu_hair4" OnClick="fun_hair(4);"><span class="j">赤</span><span class="e">Reddish</span></div>
	<div class="mu" id="mu_hair5" OnClick="fun_hair(5);"><span class="j">緑</span><span class="e">Green</span></div>
	<div class="mu" id="mu_hair6" OnClick="fun_hair(6);"><span class="j">金</span><span class="e">Blonde</span></div>
	<div class="mu" id="mu_hair7" OnClick="fun_hair(7);"><span class="j">銀</span><span class="e">Silver</span></div>
	<div class="mu" id="mu_hair8" OnClick="fun_hair(8);"><span class="j">黒</span><span class="e">Black</span></div>
</div>
<div class="mut" OnClick="$('#mu_h').slideToggle();"><span class="j">毛</span><span class="e">UnderHair</span></div>
<div id="mu_h" style="display:none;">
	<div class="mu" id="mu_under0" OnClick="fun_under(0);" style="background-color:#ffff00;">OFF</div>
	<div class="mu" id="mu_under1" OnClick="fun_under(1);">ON</div>
</div>
<div class="mut" OnClick="$('#mu_an').slideToggle();"><span class="j">アナル</span><span class="e">anal</span></div>
<div id="mu_an" style="display:none;">
	<div class="mu" id="mu_anal0" OnClick="fun_anal(0);" style="background-color:#ffff00;"><span class="j">無し</span><span class="e">none</span></div>
	<div class="mu" id="mu_anal1" OnClick="fun_anal(1);"><span id="lock1_1">lock</span> <span class="j">アナルパール</span><span class="e">Anal Beads</span></div>
	<div class="mu" id="mu_anal2" OnClick="fun_anal(2);"><span id="lock1_2">lock</span> <span class="j">浣腸</span><span class="e">clyster</span></div>
	<div class="mu" id="mu_anal3" OnClick="fun_anal(3);"><span id="lock1_3">lock</span> <span class="j">栓</span><span class="e">Plug</span></div>
	<div class="mu" id="mu_anal4" OnClick="fun_anal(4);"><span id="lock1_4">lock</span> <span class="j">胡瓜</span><span class="e">Cucumber</span></div>



</div>
<div class="mut" OnClick="$('#mu_np').slideToggle();"><span class="j">乳</span><span class="e">nipple</span></div>
<div id="mu_np" style="display:none;">
	<div class="mu" id="mu_nip0" OnClick="fun_nip(0);" style="background-color:#ffff00;"><span class="j">無し</span><span class="e">none</span></div>
	<div class="mu" id="mu_nip1" OnClick="fun_nip(1);"><span id="lock2_1">lock</span> <span class="j">洗濯ばさみ</span><span class="e">Clip</span></div>
	<div class="mu" id="mu_nip2" OnClick="fun_nip(2);"><span id="lock2_2">lock</span> <span class="j">ローター</span><span class="e">Vibrator</span></div>
</div>

<div class="mut" OnClick="$('#mu_a').slideToggle();"><span class="j">挿入</span><span class="e">Insert</span></div>
<div id="mu_a" style="display:none;">
	<div class="mu" id="mu_a0" OnClick="fun_a1(0);" style="background-color:#ffff00;"><span class="j">無し</span><span class="e">none</span></div>
	<div class="mu" id="mu_a1" OnClick="fun_a1(1);"><span id="lock3_1">lock</span> <span class="j">バイブ静止</span><span class="e">Dildo</span></div>
	<div class="mu" id="mu_a2" OnClick="fun_a1(2);"><span id="lock3_2">lock</span> <span class="j">バイブピストン</span><span class="e">Dildo Piston</span></div>
	<div class="mu" id="mu_a3" OnClick="fun_a1(3);"><span id="lock3_3">lock</span> <span class="j">バイブスピン</span><span class="e">Dildo Spin</span></div>
	<div class="mu" id="mu_a4" OnClick="fun_a1(4);"><span id="lock3_4">lock</span> <span class="j">胡瓜静止</span><span class="e">Cucumber</span></div>
	<div class="mu" id="mu_a5" OnClick="fun_a1(5);"><span id="lock3_5">lock</span> <span class="j">胡瓜ピストン</span><span class="e">Cucumber Piston</span></div>
	<div class="mu" id="mu_a6" OnClick="fun_a1(6);"><span id="lock3_6">lock</span> <span class="j">極悪バイブ静止</span><span class="e">Hell Dildo</span></div>
	<div class="mu" id="mu_a7" OnClick="fun_a1(7);"><span id="lock3_7">lock</span> <span class="j">極悪バイブピストン</span><span class="e">Hell Dildo Piston</span></div>
	<div class="mu" id="mu_a8" OnClick="fun_a1(8);"><span id="lock3_8">lock</span> <span class="j">極悪バイブスピン</span><span class="e">Hell Spin</span></div>
	<div class="mu" id="mu_a9" OnClick="fun_a1(9);"><span id="lock3_9">lock</span> <span class="j">縦笛静止</span><span class="e">Recorder</span></div>
	<div class="mu" id="mu_a10" OnClick="fun_a1(10);"><span id="lock3_10">lock</span> <span class="j">縦笛ピストン</span><span class="e">Recorder Piston</span></div>
	<div class="mu" id="mu_a11" OnClick="fun_a1(11);"><span id="lock3_11">lock</span> <span class="j">クスコ</span><span class="e">Speculum</span></div>
	<div class="mu" id="mu_a12" OnClick="fun_a1(12);"><span id="lock3_12">lock</span> <span class="j">洗濯ばさみ</span><span class="e">Clip</span></div>
	<div class="mu" id="mu_a13" OnClick="fun_a1(13);"><span id="lock3_13">lock</span> <span class="j">触手</span><span class="e">Tentacle</span></div>
	<div class="mu" id="mu_a14" OnClick="fun_a1(14);"><span id="lock3_14">lock</span> <span class="j">ローター</span><span class="e">Vibrator</span></div>
</div>




			</div>
		</td>
	</tr>
</table>





</div>

<style>
.item_boxs{
	width:960px;
	height: 300px;
	border: #999 3px solid;
	border-radius: 9px;
	margin: 5px 0 0 0;
	padding:10px;
}
.item_text{
	width:960px;
	height: 200px;
	border: #999 3px solid;
	border-radius: 9px;
	margin: 5px 0 0 0;
	padding:10px;
	font-size:20px;
	font-weight:bold;
}
.item_box{
	float:left;width:55px;height:55px;
	cursor:pointer;
}


</style>


<!-- SHOP -->
<div id="a2">
	<div class="item_boxs">
		<div class="item_box" id="s_a1_1" onmouseover="funItemText(1,1);" OnClick="funItemSet(1,1);"><img src="img/item/s_a1_1.png"></div>
		<div class="item_box" id="s_a1_2" onmouseover="funItemText(1,2);" OnClick="funItemSet(1,2);"><img src="img/item/s_a1_2.png"></div>
		<div class="item_box" id="s_a1_3" onmouseover="funItemText(1,3);" OnClick="funItemSet(1,3);"><img src="img/item/s_a1_3.png"></div>
		<div class="item_box" id="s_a1_4" onmouseover="funItemText(1,4);" OnClick="funItemSet(1,4);"><img src="img/item/s_a1_4.png"></div>
		<div class="item_box" id="s_a1_5" onmouseover="funItemText(1,5);" OnClick="funItemSet(1,5);"><img src="img/item/s_a1_5.png"></div>
		<div class="item_box" id="s_a1_6" onmouseover="funItemText(1,6);" OnClick="funItemSet(1,6);"><img src="img/item/s_a1_6.png"></div>
		<div class="item_box" id="s_a1_7" onmouseover="funItemText(1,7);" OnClick="funItemSet(1,7);"><img src="img/item/s_a1_7.png"></div>
		<div class="item_box" id="s_a1_8" onmouseover="funItemText(1,8);" OnClick="funItemSet(1,8);"><img src="img/item/s_a1_8.png"></div>
		<div class="item_box" id="s_a1_9" onmouseover="funItemText(1,9);" OnClick="funItemSet(1,9);"><img src="img/item/s_a1_9.png"></div>
		<div class="item_box" id="s_a2_1" onmouseover="funItemText(2,1);" OnClick="funItemSet(2,1);"><img src="img/item/s_a2_1.png"></div>
		<div class="item_box" id="s_a2_2" onmouseover="funItemText(2,2);" OnClick="funItemSet(2,2);"><img src="img/item/s_a2_2.png"></div>
		<div class="item_box" id="s_a2_3" onmouseover="funItemText(2,3);" OnClick="funItemSet(2,3);"><img src="img/item/s_a2_3.png"></div>
		<div class="item_box" id="s_a2_4" onmouseover="funItemText(2,4);" OnClick="funItemSet(2,4);"><img src="img/item/s_a2_4.png"></div>
		<div class="item_box" id="s_a2_5" onmouseover="funItemText(2,5);" OnClick="funItemSet(2,5);"><img src="img/item/s_a2_5.png"></div>
		<div class="item_box" id="s_a3_1" onmouseover="funItemText(3,1);" OnClick="funItemSet(3,1);"><img src="img/item/s_a3_1.png"></div>
		<div class="item_box" id="s_a3_2" onmouseover="funItemText(3,2);" OnClick="funItemSet(3,2);"><img src="img/item/s_a3_2.png"></div>
		<div class="item_box" id="s_a3_3" onmouseover="funItemText(3,3);" OnClick="funItemSet(3,3);"><img src="img/item/s_a3_3.png"></div>
		<div class="item_box" id="s_a3_4" onmouseover="funItemText(3,4);" OnClick="funItemSet(3,4);"><img src="img/item/s_a3_4.png"></div>
		<div class="item_box" id="s_a3_5" onmouseover="funItemText(3,5);" OnClick="funItemSet(3,5);"><img src="img/item/s_a3_5.png"></div>
		<div class="item_box" id="s_a4_1" onmouseover="funItemText(4,1);" OnClick="funItemSet(4,1);"><img src="img/item/s_a4_1.png"></div>
		<div class="item_box" id="s_a4_2" onmouseover="funItemText(4,2);" OnClick="funItemSet(4,2);"><img src="img/item/s_a4_2.png"></div>
		<div class="item_box" id="s_a4_3" onmouseover="funItemText(4,3);" OnClick="funItemSet(4,3);"><img src="img/item/s_a4_3.png"></div>
		<div class="item_box" id="s_a4_4" onmouseover="funItemText(4,4);" OnClick="funItemSet(4,4);"><img src="img/item/s_a4_4.png"></div>
		<div class="item_box" id="s_a4_5" onmouseover="funItemText(4,5);" OnClick="funItemSet(4,5);"><img src="img/item/s_a4_5.png"></div>
		<div class="item_box" id="s_a5_1" onmouseover="funItemText(5,1);" OnClick="funItemSet(5,1);"><img src="img/item/s_a5_1.png"></div>
		<div class="item_box" id="s_a5_2" onmouseover="funItemText(5,2);" OnClick="funItemSet(5,2);"><img src="img/item/s_a5_2.png"></div>
		<div class="item_box" id="s_a5_3" onmouseover="funItemText(5,3);" OnClick="funItemSet(5,3);"><img src="img/item/s_a5_3.png"></div>
		<div class="item_box" id="s_a5_4" onmouseover="funItemText(5,4);" OnClick="funItemSet(5,4);"><img src="img/item/s_a5_4.png"></div>
		<div class="item_box" id="s_a5_5" onmouseover="funItemText(5,5);" OnClick="funItemSet(5,5);"><img src="img/item/s_a5_5.png"></div>
		<div class="item_box" id="s_a6_1" onmouseover="funItemText(6,1);" OnClick="funItemSet(6,1);"><img src="img/item/s_a6_1.png"></div>
		<div class="item_box" id="s_a6_2" onmouseover="funItemText(6,2);" OnClick="funItemSet(6,2);"><img src="img/item/s_a6_2.png"></div>
		<div class="item_box" id="s_a6_3" onmouseover="funItemText(6,3);" OnClick="funItemSet(6,3);"><img src="img/item/s_a6_3.png"></div>
		<div class="item_box" id="s_a6_4" onmouseover="funItemText(6,4);" OnClick="funItemSet(6,4);"><img src="img/item/s_a6_4.png"></div>
		<div class="item_box" id="s_a6_5" onmouseover="funItemText(6,5);" OnClick="funItemSet(6,5);"><img src="img/item/s_a6_5.png"></div>
		<div class="item_box" id="s_a7_1" onmouseover="funItemText(7,1);" OnClick="funItemSet(7,1);"><img src="img/item/s_a7_1.png"></div>
		<div class="item_box" id="s_a7_2" onmouseover="funItemText(7,2);" OnClick="funItemSet(7,2);"><img src="img/item/s_a7_2.png"></div>
		<div class="item_box" id="s_a7_3" onmouseover="funItemText(7,3);" OnClick="funItemSet(7,3);"><img src="img/item/s_a7_3.png"></div>
		<div class="item_box" id="s_a7_4" onmouseover="funItemText(7,4);" OnClick="funItemSet(7,4);"><img src="img/item/s_a7_4.png"></div>
		<div class="item_box" id="s_a7_5" onmouseover="funItemText(7,5);" OnClick="funItemSet(7,5);"><img src="img/item/s_a7_5.png"></div>
		<div class="item_box" id="s_a8_1" onmouseover="funItemText(8,1);" OnClick="funItemSet(8,1);"><img src="img/item/s_a8_1.png"></div>
		<div class="item_box" id="s_a8_2" onmouseover="funItemText(8,2);" OnClick="funItemSet(8,2);"><img src="img/item/s_a8_2.png"></div>
		<div class="item_box" id="s_a8_3" onmouseover="funItemText(8,3);" OnClick="funItemSet(8,3);"><img src="img/item/s_a8_3.png"></div>
		<div class="item_box" id="s_a8_4" onmouseover="funItemText(8,4);" OnClick="funItemSet(8,4);"><img src="img/item/s_a8_4.png"></div>
		<div class="item_box" id="s_a8_5" onmouseover="funItemText(8,5);" OnClick="funItemSet(8,5);"><img src="img/item/s_a8_5.png"></div>
		<div class="item_box" id="s_a9_1" onmouseover="funItemText(9,1);" OnClick="funItemSet(9,1);"><img src="img/item/s_a9_1.png"></div>
		<div class="item_box" id="s_a9_2" onmouseover="funItemText(9,2);" OnClick="funItemSet(9,2);"><img src="img/item/s_a9_2.png"></div>
		<div class="item_box" id="s_a9_3" onmouseover="funItemText(9,3);" OnClick="funItemSet(9,3);"><img src="img/item/s_a9_3.png"></div>
		<div class="item_box" id="s_a9_4" onmouseover="funItemText(9,4);" OnClick="funItemSet(9,4);"><img src="img/item/s_a9_4.png"></div>
		<div class="item_box" id="s_a9_5" onmouseover="funItemText(9,5);" OnClick="funItemSet(9,5);"><img src="img/item/s_a9_5.png"></div>
		<div class="item_box" id="s_a10_1" onmouseover="funItemText(10,1);" OnClick="funItemSet(10,1);"><img src="img/item/s_a10_1.png"></div>
		<div class="item_box" id="s_a10_2" onmouseover="funItemText(10,2);" OnClick="funItemSet(10,2);"><img src="img/item/s_a10_2.png"></div>
		<div class="item_box" id="s_a10_3" onmouseover="funItemText(10,3);" OnClick="funItemSet(10,3);"><img src="img/item/s_a10_3.png"></div>
		<div class="item_box" id="s_a10_4" onmouseover="funItemText(10,4);" OnClick="funItemSet(10,4);"><img src="img/item/s_a10_4.png"></div>
		<div class="item_box" id="s_a10_5" onmouseover="funItemText(10,5);" OnClick="funItemSet(10,5);"><img src="img/item/s_a10_5.png"></div>

		<div class="item_box" id="s_a11_3" onmouseover="funItemText(11,3);" OnClick="funItemSet(11,3);"><img src="img/item/s_a11_3.png"></div>
		<div class="item_box" id="s_a11_4" onmouseover="funItemText(11,4);" OnClick="funItemSet(11,4);"><img src="img/item/s_a11_4.png"></div>
		<div class="item_box" id="s_a11_5" onmouseover="funItemText(11,5);" OnClick="funItemSet(11,5);"><img src="img/item/s_a11_5.png"></div>
		<div class="item_box" id="s_a11_6" onmouseover="funItemText(11,6);" OnClick="funItemSet(11,6);"><img src="img/item/s_a11_6.png"></div>
		<div class="item_box" id="s_a11_7" onmouseover="funItemText(11,7);" OnClick="funItemSet(11,7);"><img src="img/item/s_a11_7.png"></div>
		<div class="item_box" id="s_a11_8" onmouseover="funItemText(11,8);" OnClick="funItemSet(11,8);"><img src="img/item/s_a11_8.png"></div>
		<div class="item_box" id="s_a11_9" onmouseover="funItemText(11,9);" OnClick="funItemSet(11,9);"><img src="img/item/s_a11_9.png"></div>
		<div class="item_box" id="s_a11_10" onmouseover="funItemText(11,10);" OnClick="funItemSet(11,10);"><img src="img/item/s_a11_10.png"></div>

		<div class="item_box" id="s_a11_11" onmouseover="funItemText(11,11);" OnClick="funItemSet(11,11);"><img src="img/item/s_a11_11.png"></div>
		<div class="item_box" id="s_a11_12" onmouseover="funItemText(11,12);" OnClick="funItemSet(11,12);"><img src="img/item/s_a11_12.png"></div>
		<div class="item_box" id="s_a11_13" onmouseover="funItemText(11,13);" OnClick="funItemSet(11,13);"><img src="img/item/s_a11_13.png"></div>
	</div>
	<div class="item_text" id="item_text1"></div>

</div>


<!-- TROPHY -->
<div id="a3">
	<div class="item_boxs">
		<div class="item_box" id="s_a1_1r" onmouseover="funItemText(1,1);" OnClick="funItemSet(1,1);"><img src="img/item/s_a1_1.png"></div>
		<div class="item_box" id="s_a1_2r" onmouseover="funItemText(1,2);" OnClick="funItemSet(1,2);"><img src="img/item/s_a1_2.png"></div>
		<div class="item_box" id="s_a1_3r" onmouseover="funItemText(1,3);" OnClick="funItemSet(1,3);"><img src="img/item/s_a1_3.png"></div>
		<div class="item_box" id="s_a1_4r" onmouseover="funItemText(1,4);" OnClick="funItemSet(1,4);"><img src="img/item/s_a1_4.png"></div>
		<div class="item_box" id="s_a1_5r" onmouseover="funItemText(1,5);" OnClick="funItemSet(1,5);"><img src="img/item/s_a1_5.png"></div>
		<div class="item_box" id="s_a1_6r" onmouseover="funItemText(1,6);" OnClick="funItemSet(1,6);"><img src="img/item/s_a1_6.png"></div>
		<div class="item_box" id="s_a1_7r" onmouseover="funItemText(1,7);" OnClick="funItemSet(1,7);"><img src="img/item/s_a1_7.png"></div>
		<div class="item_box" id="s_a1_8r" onmouseover="funItemText(1,8);" OnClick="funItemSet(1,8);"><img src="img/item/s_a1_8.png"></div>
		<div class="item_box" id="s_a1_9r" onmouseover="funItemText(1,9);" OnClick="funItemSet(1,9);"><img src="img/item/s_a1_9.png"></div>
		<div class="item_box" id="s_a2_1r" onmouseover="funItemText(2,1);" OnClick="funItemSet(2,1);"><img src="img/item/s_a2_1.png"></div>
		<div class="item_box" id="s_a2_2r" onmouseover="funItemText(2,2);" OnClick="funItemSet(2,2);"><img src="img/item/s_a2_2.png"></div>
		<div class="item_box" id="s_a2_3r" onmouseover="funItemText(2,3);" OnClick="funItemSet(2,3);"><img src="img/item/s_a2_3.png"></div>
		<div class="item_box" id="s_a2_4r" onmouseover="funItemText(2,4);" OnClick="funItemSet(2,4);"><img src="img/item/s_a2_4.png"></div>
		<div class="item_box" id="s_a2_5r" onmouseover="funItemText(2,5);" OnClick="funItemSet(2,5);"><img src="img/item/s_a2_5.png"></div>
		<div class="item_box" id="s_a3_1r" onmouseover="funItemText(3,1);" OnClick="funItemSet(3,1);"><img src="img/item/s_a3_1.png"></div>
		<div class="item_box" id="s_a3_2r" onmouseover="funItemText(3,2);" OnClick="funItemSet(3,2);"><img src="img/item/s_a3_2.png"></div>
		<div class="item_box" id="s_a3_3r" onmouseover="funItemText(3,3);" OnClick="funItemSet(3,3);"><img src="img/item/s_a3_3.png"></div>
		<div class="item_box" id="s_a3_4r" onmouseover="funItemText(3,4);" OnClick="funItemSet(3,4);"><img src="img/item/s_a3_4.png"></div>
		<div class="item_box" id="s_a3_5r" onmouseover="funItemText(3,5);" OnClick="funItemSet(3,5);"><img src="img/item/s_a3_5.png"></div>
		<div class="item_box" id="s_a4_1r" onmouseover="funItemText(4,1);" OnClick="funItemSet(4,1);"><img src="img/item/s_a4_1.png"></div>
		<div class="item_box" id="s_a4_2r" onmouseover="funItemText(4,2);" OnClick="funItemSet(4,2);"><img src="img/item/s_a4_2.png"></div>
		<div class="item_box" id="s_a4_3r" onmouseover="funItemText(4,3);" OnClick="funItemSet(4,3);"><img src="img/item/s_a4_3.png"></div>
		<div class="item_box" id="s_a4_4r" onmouseover="funItemText(4,4);" OnClick="funItemSet(4,4);"><img src="img/item/s_a4_4.png"></div>
		<div class="item_box" id="s_a4_5r" onmouseover="funItemText(4,5);" OnClick="funItemSet(4,5);"><img src="img/item/s_a4_5.png"></div>
		<div class="item_box" id="s_a5_1r" onmouseover="funItemText(5,1);" OnClick="funItemSet(5,1);"><img src="img/item/s_a5_1.png"></div>
		<div class="item_box" id="s_a5_2r" onmouseover="funItemText(5,2);" OnClick="funItemSet(5,2);"><img src="img/item/s_a5_2.png"></div>
		<div class="item_box" id="s_a5_3r" onmouseover="funItemText(5,3);" OnClick="funItemSet(5,3);"><img src="img/item/s_a5_3.png"></div>
		<div class="item_box" id="s_a5_4r" onmouseover="funItemText(5,4);" OnClick="funItemSet(5,4);"><img src="img/item/s_a5_4.png"></div>
		<div class="item_box" id="s_a5_5r" onmouseover="funItemText(5,5);" OnClick="funItemSet(5,5);"><img src="img/item/s_a5_5.png"></div>
		<div class="item_box" id="s_a6_1r" onmouseover="funItemText(6,1);" OnClick="funItemSet(6,1);"><img src="img/item/s_a6_1.png"></div>
		<div class="item_box" id="s_a6_2r" onmouseover="funItemText(6,2);" OnClick="funItemSet(6,2);"><img src="img/item/s_a6_2.png"></div>
		<div class="item_box" id="s_a6_3r" onmouseover="funItemText(6,3);" OnClick="funItemSet(6,3);"><img src="img/item/s_a6_3.png"></div>
		<div class="item_box" id="s_a6_4r" onmouseover="funItemText(6,4);" OnClick="funItemSet(6,4);"><img src="img/item/s_a6_4.png"></div>
		<div class="item_box" id="s_a6_5r" onmouseover="funItemText(6,5);" OnClick="funItemSet(6,5);"><img src="img/item/s_a6_5.png"></div>
		<div class="item_box" id="s_a7_1r" onmouseover="funItemText(7,1);" OnClick="funItemSet(7,1);"><img src="img/item/s_a7_1.png"></div>
		<div class="item_box" id="s_a7_2r" onmouseover="funItemText(7,2);" OnClick="funItemSet(7,2);"><img src="img/item/s_a7_2.png"></div>
		<div class="item_box" id="s_a7_3r" onmouseover="funItemText(7,3);" OnClick="funItemSet(7,3);"><img src="img/item/s_a7_3.png"></div>
		<div class="item_box" id="s_a7_4r" onmouseover="funItemText(7,4);" OnClick="funItemSet(7,3);"><img src="img/item/s_a7_4.png"></div>
		<div class="item_box" id="s_a7_5r" onmouseover="funItemText(7,5);" OnClick="funItemSet(7,4);"><img src="img/item/s_a7_5.png"></div>
		<div class="item_box" id="s_a8_1r" onmouseover="funItemText(8,1);" OnClick="funItemSet(8,1);"><img src="img/item/s_a8_1.png"></div>
		<div class="item_box" id="s_a8_2r" onmouseover="funItemText(8,2);" OnClick="funItemSet(8,2);"><img src="img/item/s_a8_2.png"></div>
		<div class="item_box" id="s_a8_3r" onmouseover="funItemText(8,3);" OnClick="funItemSet(8,3);"><img src="img/item/s_a8_3.png"></div>
		<div class="item_box" id="s_a8_4r" onmouseover="funItemText(8,4);" OnClick="funItemSet(8,4);"><img src="img/item/s_a8_4.png"></div>
		<div class="item_box" id="s_a8_5r" onmouseover="funItemText(8,5);" OnClick="funItemSet(8,5);"><img src="img/item/s_a8_5.png"></div>
		<div class="item_box" id="s_a9_1r" onmouseover="funItemText(9,1);" OnClick="funItemSet(9,1);"><img src="img/item/s_a9_1.png"></div>
		<div class="item_box" id="s_a9_2r" onmouseover="funItemText(9,2);" OnClick="funItemSet(9,2);"><img src="img/item/s_a9_2.png"></div>
		<div class="item_box" id="s_a9_3r" onmouseover="funItemText(9,3);" OnClick="funItemSet(9,3);"><img src="img/item/s_a9_3.png"></div>
		<div class="item_box" id="s_a9_4r" onmouseover="funItemText(9,4);" OnClick="funItemSet(9,4);"><img src="img/item/s_a9_4.png"></div>
		<div class="item_box" id="s_a9_5r" onmouseover="funItemText(9,5);" OnClick="funItemSet(9,5);"><img src="img/item/s_a9_5.png"></div>
		<div class="item_box" id="s_a10_1r" onmouseover="funItemText(10,1);" OnClick="funItemSet(10,1);"><img src="img/item/s_a10_1.png"></div>
		<div class="item_box" id="s_a10_2r" onmouseover="funItemText(10,2);" OnClick="funItemSet(10,2);"><img src="img/item/s_a10_2.png"></div>
		<div class="item_box" id="s_a10_3r" onmouseover="funItemText(10,3);" OnClick="funItemSet(10,3);"><img src="img/item/s_a10_3.png"></div>
		<div class="item_box" id="s_a10_4r" onmouseover="funItemText(10,4);" OnClick="funItemSet(10,4);"><img src="img/item/s_a10_4.png"></div>
		<div class="item_box" id="s_a10_5r" onmouseover="funItemText(10,5);" OnClick="funItemSet(10,5);"><img src="img/item/s_a10_5.png"></div>

		<div class="item_box" id="s_a11_3r" onmouseover="funItemText(11,3);" OnClick="funItemSet(11,3);"><img src="img/item/s_a11_3.png"></div>
		<div class="item_box" id="s_a11_4r" onmouseover="funItemText(11,4);" OnClick="funItemSet(11,4);"><img src="img/item/s_a11_4.png"></div>
		<div class="item_box" id="s_a11_5r" onmouseover="funItemText(11,5);" OnClick="funItemSet(11,5);"><img src="img/item/s_a11_5.png"></div>
		<div class="item_box" id="s_a11_6r" onmouseover="funItemText(11,6);" OnClick="funItemSet(11,6);"><img src="img/item/s_a11_6.png"></div>
		<div class="item_box" id="s_a11_7r" onmouseover="funItemText(11,7);" OnClick="funItemSet(11,7);"><img src="img/item/s_a11_7.png"></div>
		<div class="item_box" id="s_a11_8r" onmouseover="funItemText(11,8);" OnClick="funItemSet(11,8);"><img src="img/item/s_a11_8.png"></div>
		<div class="item_box" id="s_a11_9r" onmouseover="funItemText(11,9);" OnClick="funItemSet(11,9);"><img src="img/item/s_a11_9.png"></div>
		<div class="item_box" id="s_a11_10r" onmouseover="funItemText(11,10);" OnClick="funItemSet(11,10);"><img src="img/item/s_a11_10.png"></div>


		<div class="item_box" id="s_a11_11r" onmouseover="funItemText(11,11);" OnClick="funItemSet(11,11);"><img src="img/item/s_a11_11.png"></div>
		<div class="item_box" id="s_a11_12r" onmouseover="funItemText(11,12);" OnClick="funItemSet(11,12);"><img src="img/item/s_a11_12.png"></div>
		<div class="item_box" id="s_a11_13r" onmouseover="funItemText(11,13);" OnClick="funItemSet(11,13);"><img src="img/item/s_a11_13.png"></div>
	</div>
	<div class="item_text" id="item_text2"></div>
</div>

<!-- BBS -->
<div id="a4">
	<iframe src="../../../bbs/simpleahe2.php?cd=ahe2" style="width:960px;height:570px;" name="ifre" id="ifre"></iframe><br>
</div>

<!-- FAQ -->
<div id="a5">
<style>
.q{color:#D70035;}
.a{color:#009854;}
</style>
<p class="q">Q.<span class="j">ページを開いたときに画像がすぐに表示されません。</span><span class="e">Image does not immediately appear.</span></p>
<p class="a">A.<span class="j">読込みに時間がかかるの＞＜ 少し待ってね！</span><span class="e">loading. Please wait.</span></p>

<p class="q">Q.<span class="j">声の再生がされないときがあります。</span><span class="e">There is no sound</span></p>
<p class="a">A.<span class="j">MP3データの読込みに時間がかかるの＞＜ 何度か繰り返し聞いてると、改善します＞＜</span><span class="e">loading MP3 data. Please wait.</span></p>

<p class="q">Q.<span class="j">バグ見つけました。</span><span class="e">I found a bug</span></p>
<p class="a">A.<span class="j">掲示板で教えて下さい＞＜</span><span class="e">Please Tell me BBS.</span></p>

<p class="q">Q.<span class="j">英訳間違ってるよ！</span><span class="e">Wrong English translation</span></p>
<p class="a">A.<span class="j">掲示板で教えて下さい＞＜</span><span class="e">Please Tell me BBS.</span></p>

<p class="q">Q.<span class="j">数字がNaNと表示されている</span><span class="e">Numbers NaN</span></p>
<p class="a">A.<span class="j">バグッす。表示された場所と、ブラウザ環境を掲示板で教えてください＞＜</span><span class="e">It is a bug. Please Tell me BBS.</span></p>

<p class="q">Q.<span class="j">リンクしていい？掲示板で紹介していい？</span><span class="e">Can I linked ? Can I introduce the BBS ?</span></p>
<p class="a">A.<span class="j">ご自由にどうぞ！むしろ大歓迎！</span><span class="e">Feel free to</span></p>



</div>

<!-- SAVE & LOAD -->
<div id="a6">

	<div style="width: 840px;padding: 7px;overflow: auto;margin:10px auto;"> 
		<span class="j">セーブデータ</span><span class="e">SAVE DATA</span>
		<span class="j">※「failed to save」と表示されたらセーブ失敗です＞＜ しばらくたってからもう一度この画面表示してみてね！</span>
		<span class="e"># If "failed to save" is displayed, please come back to this screen later.</span><br>
		<textarea name="save" id="save" style="width:800px;height:200px;overflow-x:hidden;"></textarea><br><br>


		<form action="index.php" method="POST">
		<span class="j">ロード</span><span class="e">LOAD</span><br>
		<textarea name="load" id="load" style="width:800px;height:200px;overflow-x:hidden;"></textarea><br>
		<input type="submit" name="submit" value="Load Data">
		<input type="hidden" name="s" value="1">
		</form>


		<br>
		<form action="index.php" method="POST">
		<span class="j">データを初期化します</span><span class="e">Reset Data</span><br>
		<input type="submit" value="Reset"><br>
		<input type="hidden" name="cookiedel" value="1" />
		</form>
	</div>

</div>

<!-- CREDIT -->
<div id="a7">
<p>
<span class="j">
イラスト：<a href="http://www.pixiv.net/member.php?id=3042221" target="_blank">虎猫</a><br>
CV：<a href="http://shiho.moe.in/v/" target="_blank">分倍河原シホ</a><br>
<br>
素材イラスト：「佐野俊英が、あなたの専用原画マンになります」<br>
素材公開用シリアルナンバー　S/N:GJ0147344<br>
</span>
</p>
<p>
<span class="e">
CG：Toraneko<br>
Item illustrations：'Toshihide Sano will be your only Genga Man' : S/N:GJ0147344<br>
VOICE：Bubegawara-shiho<br>
</span>
</p>

<br>

<p>
<span class="j">
<img src="img/bn_ahe2_j1.jpg" /> 
<img src="img/bn_ahe2_j2.jpg" /><br>
http://www.tomatama.com/click/omake/u18/
</span>
</p>
<p>
<span class="e">
<img src="img/bn_ahe2_e1.jpg" /> 
<img src="img/bn_ahe2_e2.jpg" /><br>
http://www.tomatama.com/click/omake/u18/
</p>


</div>



<!-- VOICE -->
<div id="a8">
<a href="/goods/u18.php" target="_blank"><img src="/goods/bn/u18/bn_u18_310x105.jpg" alt="あへごえ" width="310" height="105" /></a><br>

</div>





<!-- CM -->
<div id="a9">

	<table>
		<tr valign="top">
			<td>
<span class="j"><a href="/goods2/a01.php" target="_blank"><img src="/goods2/bn/a01/bn_a01_200x70.jpg" alt="着せ替え" width="200" height="70" /></a></span>
<span class="e"><a href="http://www.dlsite.com/ecchi-eng/dlaf/=/link/work/aid/tomatama/id/RE157079.html" target="_blank"><img src="/goods2/bn/a01/bn_a01_200x70e.jpg" alt="Dress Up" width="200" height="70" /></a></span>
<br>
			</td>
			<td>




			</td>
		</tr>
	</table><br>

	<table>
		<tr valign="top">
			<td>
<a href="/goods/u11.php" target="_blank"><img src="/goods/bn/u11/bn_u11_200x70.jpg" alt="機械姦" width="200" height="70" /></a><br>
			</td>
			<td>
<a href="/goods/nk02.php" target="_blank"><img src="/goods/bn/nk02/bn_nk02_200x70.jpg" alt="肉便器" width="200" height="70" /></a>
			</td>
			<td>
<a href="/goods/as02.php" target="_blank"><img src="/goods/bn/as02/bn_as02_200x40.jpg" alt="禁止" width="200" height="40" /></a><br>
<a href="/goods/as01.php" target="_blank"><img src="/goods/bn/as01/bn_as01_200x40.jpg" alt="触手" width="200" height="40" /></a><br>
			</td>
			<td>
<a href="/goods/f01.php" target="_blank"><img src="/goods/bn/f01/bn_f01_200x40.jpg" alt="絶叫" width="200" height="40" /></a><br>
<a href="/goods/z01.php" target="_blank"><img src="/goods/bn/z01/bn_z01_200x40.jpg" alt="陵辱" width="200" height="40" /></a><br>
			</td>
		</tr>
	</table>

</div>



<!-- CM2 -->
<div id="a10">



	<div id="g_block1" style="display:block;">
	
<a href="http://www.nijiyome.jp/catch/app/?et=bn_pc_728_90_nijiyome_01.jpg&em=cpa" target="_blank"><img src="http://www.dlsite.com/img/nijiyome/pc/adult/bn_pc_728_90_nijiyome_01.jpg" alt="にじよめ - 二元美少女専門ブラウザゲーム＆ソーシャルゲーム" width="728" height="90" border="0" /></a>





<br>
<br>



<a href="http://www.nijiyome.com/catch/app/lp/333?et=bn_pc_728_90_app333_01&em=cpa" target="_blank"><img src="http://www.dlsite.com/img/nijiyome/pc/kuusen_333/bn_pc_728_90_app333_01.jpg" alt="空戦乙女-スカイヴァルキリーズ- - 戦闘機×美少女「空戦乙女-スカイヴァルキリーズ-」！" width="728" height="90" border="0" /></a>

<br>
<br>

<a href="http://www.nijiyome.com/catch/app/lp/340?et=bn_pc_728_90_app340_01&em=cpa" target="_blank"><img src="http://www.dlsite.com/img/nijiyome/pc/rickgearth_340/bn_pc_728_90_app340_01.jpg" alt="りっく☆じあ～す - 『陸自娘（りくむす）』達の司令官となり、脅威に立ち向かえ！" width="728" height="90" border="0" /></a>

<br>
<br>
<a href="http://www.nijiyome.jp/catch/app/lp/343?et=bn_pc_728_90_app343_01&em=cpa" target="_blank"><img src="http://www.dlsite.com/img/nijiyome/pc/zetsumetsu_343/bn_pc_728_90_app343_01.jpg" alt="ヒロイン絶滅計画" width="728" height="90" border="0" /></a>


<br>
<br>

<a href="http://www.nijiyome.jp/catch/app/lp/365?et=bn_pc_728_90_app365_01&em=cpa" target="_blank"><img src="http://www.dlsite.com/img/nijiyome/pc/purval_365/bn_pc_728_90_app365_01.jpg" alt="神乳×降臨☆ぷるるんヴァルキリーズ" width="728" height="90" border="0" /></a>



	</div>


</div>
<style>
.block_g{
	padding:3px 0 0 0;
	margin:3px 0 0 0;
}
.title_g{
	color:#003F8E;
	font-weight:bold;
}


</style>





<div id="test"></div>









<div style="width:100%;text-align:right;border-top:2px solid #000;margin:5px 0 20px 0;padding:5px 0;">
<a href="http://www.tomatama.com/" target="_blank"><span class="j">ケチャマヨサイト(18禁)</span><span class="e">Ketchup AjiNo Mayonnais</span></a><br>
</div>


</div>


<div style="display:none;">
<audio src="mp3/s1.mp3" preload="auto" id="mp3_1"></audio>
<audio src="mp3/s2.mp3" preload="auto" id="mp3_2"></audio>
<audio src="mp3/s3.mp3" preload="auto" id="mp3_3"></audio>
<audio src="mp3/s4.mp3" preload="auto" id="mp3_4"></audio>
<audio src="mp3/s5.mp3" preload="auto" id="mp3_5"></audio>
<audio src="mp3/s6.mp3" preload="auto" id="mp3_6"></audio>
<audio src="mp3/s7.mp3" preload="auto" id="mp3_7"></audio>
<audio src="mp3/s8.mp3" preload="auto" id="mp3_8"></audio>
<audio src="mp3/s9.mp3" preload="auto" id="mp3_9"></audio>
<audio src="mp3/s10.mp3" preload="auto" id="mp3_10"></audio>
<audio src="mp3/s11.mp3" preload="auto" id="mp3_11"></audio>
<audio src="mp3/s12.mp3" preload="auto" id="mp3_12"></audio>
<audio src="mp3/s13.mp3" preload="auto" id="mp3_13"></audio>
<audio src="mp3/s14.mp3" preload="auto" id="mp3_14"></audio>
<audio src="mp3/s1.mp3" preload="auto" id="mp3_15"></audio>
<audio src="mp3/s2.mp3" preload="auto" id="mp3_16"></audio>
<audio src="mp3/s3.mp3" preload="auto" id="mp3_17"></audio>
<audio src="mp3/s4.mp3" preload="auto" id="mp3_18"></audio>
<audio src="mp3/s5.mp3" preload="auto" id="mp3_19"></audio>
<audio src="mp3/s6.mp3" preload="auto" id="mp3_20"></audio>
<audio src="mp3/s7.mp3" preload="auto" id="mp3_21"></audio>
<audio src="mp3/s8.mp3" preload="auto" id="mp3_22"></audio>
<audio src="mp3/s9.mp3" preload="auto" id="mp3_23"></audio>
<audio src="mp3/s10.mp3" preload="auto" id="mp3_24"></audio>
<audio src="mp3/s11.mp3" preload="auto" id="mp3_25"></audio>
<audio src="mp3/s12.mp3" preload="auto" id="mp3_26"></audio>
<audio src="mp3/s13.mp3" preload="auto" id="mp3_27"></audio>
<audio src="mp3/s14.mp3" preload="auto" id="mp3_28"></audio>
<audio src="mp3/s10.mp3" preload="auto" id="mp3_29"></audio>
<audio src="mp3/s2.mp3" preload="auto" id="mp3_30"></audio>
<audio src="mp3/s3.mp3" preload="auto" id="mp3_31"></audio>
<audio src="mp3/s4.mp3" preload="auto" id="mp3_32"></audio>
<audio src="mp3/s5.mp3" preload="auto" id="mp3_33"></audio>
<audio src="mp3/s6.mp3" preload="auto" id="mp3_34"></audio>
<audio src="mp3/s7.mp3" preload="auto" id="mp3_35"></audio>
<audio src="mp3/s8.mp3" preload="auto" id="mp3_36"></audio>
<audio src="mp3/s9.mp3" preload="auto" id="mp3_37"></audio>
<audio src="mp3/s10.mp3" preload="auto" id="mp3_38"></audio>
<audio src="mp3/s11.mp3" preload="auto" id="mp3_39"></audio>
<audio src="mp3/s12.mp3" preload="auto" id="mp3_40"></audio>
<audio src="mp3/s13.mp3" preload="auto" id="mp3_41"></audio>
<audio src="mp3/s14.mp3" preload="auto" id="mp3_42"></audio>
<audio src="mp3/s1.mp3" preload="auto" id="mp3_43"></audio>
<audio src="mp3/s2.mp3" preload="auto" id="mp3_44"></audio>
<audio src="mp3/s3.mp3" preload="auto" id="mp3_45"></audio>
<audio src="mp3/s4.mp3" preload="auto" id="mp3_46"></audio>
<audio src="mp3/s5.mp3" preload="auto" id="mp3_47"></audio>
<audio src="mp3/s6.mp3" preload="auto" id="mp3_48"></audio>
<audio src="mp3/s7.mp3" preload="auto" id="mp3_49"></audio>
<audio src="mp3/s8.mp3" preload="auto" id="mp3_50"></audio>
<audio src="mp3/s9.mp3" preload="auto" id="mp3_51"></audio>
<audio src="mp3/s10.mp3" preload="auto" id="mp3_52"></audio>
<audio src="mp3/s11.mp3" preload="auto" id="mp3_53"></audio>
<audio src="mp3/s12.mp3" preload="auto" id="mp3_54"></audio>
<audio src="mp3/s13.mp3" preload="auto" id="mp3_55"></audio>
<audio src="mp3/s14.mp3" preload="auto" id="mp3_56"></audio>
<audio src="mp3/s1.mp3" preload="auto" id="mp3_57"></audio>
<audio src="mp3/s2.mp3" preload="auto" id="mp3_58"></audio>
<audio src="mp3/s3.mp3" preload="auto" id="mp3_59"></audio>
<audio src="mp3/s4.mp3" preload="auto" id="mp3_60"></audio>
<audio src="mp3/s5.mp3" preload="auto" id="mp3_61"></audio>
<audio src="mp3/s6.mp3" preload="auto" id="mp3_62"></audio>
<audio src="mp3/s7.mp3" preload="auto" id="mp3_63"></audio>
<audio src="mp3/s8.mp3" preload="auto" id="mp3_64"></audio>
<audio src="mp3/s9.mp3" preload="auto" id="mp3_65"></audio>
<audio src="mp3/s10.mp3" preload="auto" id="mp3_66"></audio>
<audio src="mp3/s11.mp3" preload="auto" id="mp3_67"></audio>
<audio src="mp3/s12.mp3" preload="auto" id="mp3_68"></audio>
<audio src="mp3/s13.mp3" preload="auto" id="mp3_69"></audio>
<audio src="mp3/s14.mp3" preload="auto" id="mp3_70"></audio>

<iframe src="save.php" name="data_save" id="data_save"></iframe>
</div>


<form action="save.php" method="POST" id="form" target="data_save">
<input type="hidden" name="form_la" id="form_la" value="0" />
<input type="hidden" name="form_ahe" id="form_ahe" value="0" />
<input type="hidden" name="form_ahe_all" id="form_ahe_all" value="0" />
<input type="hidden" name="form_ahe_max" id="form_ahe_max" value="0" />
<input type="hidden" name="form_ahe_g" id="form_ahe_g" value="0" />
<input type="hidden" name="form_clc" id="form_clc" value="0" />
<input type="hidden" name="form_b_item" id="form_b_item" value="0#0#0#0#0#0#0#0#0#0#0" />
<input type="hidden" name="form_t_item1" id="form_t_item1" value="0#0#0#0#0#0#0#0#0#0#0#0#0#0" />
<input type="hidden" name="form_t_item2" id="form_t_item2" value="0#0#0#0#0#0#0#0#0#0#0#0#0#0" />
<input type="hidden" name="form_t_item3" id="form_t_item3" value="0#0#0#0#0#0#0#0#0#0#0#0#0#0" />
<input type="hidden" name="form_t_item4" id="form_t_item4" value="0#0#0#0#0#0#0#0#0#0#0#0#0#0" />
<input type="hidden" name="form_t_item5" id="form_t_item5" value="0#0#0#0#0#0#0#0#0#0#0#0#0#0" />
<input type="hidden" name="form_t_item6" id="form_t_item6" value="0#0#0#0#0#0#0#0#0#0#0#0#0#0" />
<input type="hidden" name="form_t_item7" id="form_t_item7" value="0#0#0#0#0#0#0#0#0#0#0#0#0#0" />
<input type="hidden" name="form_t_item8" id="form_t_item8" value="0#0#0#0#0#0#0#0#0#0#0#0#0#0" />
<input type="hidden" name="form_t_item9" id="form_t_item9" value="0#0#0#0#0#0#0#0#0#0#0#0#0#0" />
<input type="hidden" name="form_t_item10" id="form_t_item10" value="0#0#0#0#0#0#0#0#0#0#0#0#0#0" />
<input type="hidden" name="form_t_item11" id="form_t_item11" value="0#0#0#0#0#0#0#0#0#0#0#0#0#0" />

</form>


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
