<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="user-scalable=no">
<title>Monster Musume Clicker | Ketchup AjiNo Mayonnais</title>
<meta name="description" content="Monster Musume Clicker" />
<!-- OGP tag -->
<meta property="og:title" content="Monster Musume Clicker β" />
<meta property="og:type" content="product" />
<meta property="og:url" content="http://www.tomatama.com/" />
<meta property="og:site_name" content="Ketchup AjiNo Mayonnais" />
<meta property="og:description" content="Monster Musume Clicker" />
<meta property="og:country-name" content="Japan" />
<!-- //OGP tag -->
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/md5.js"></script>




</head>
<script>
var key = 'gkstne3wndsfoj3q3saofjal35qdsaa';
key2 = CybozuLabs.MD5.calc(key);
var speed = 0;
var Version = 10000;
var s_flg =0;	//連打によるスライド切り替えの誤動作防止フラグ

var cnt = 0;	//各アニメーション用カウント

var ost = 55;	//オートセーブタイマー
var colorF=0;
var r18=0;
var bgm=0;
var se=0;
var r=12;	//roomの数
var roomno=0;	//現在選択中のルーム
var change_flg=0;	//表示中の画像0通常/1撃沈
var brbr_cnt=0;		//詳細画面でぶるぶるさせたカウント
var ar_room = new Array([],[],[],[],[],[],[],[],[],[],[]);		//部屋レベル,LV,現在調教P,現在ダメージ,出荷数,残逆数
var ar_my = new Array();	//現在金額,最大金額,総金額,総クリック,Gアイテム1,Gアイテム2,現在装備中のアイテム
var ar_member = new Array();	//メイド,バイヤー

var ar_itemM = new Array([],[],[],[],[],[],[],[],[],[],[],[],[]);		//各キャラアイテム
var ar_itemX = new Array();		//その他アイテム１
var ar_itemA = new Array();		//その他アイテム２
var ar_itemB = new Array();		//装備アイテム
var ar_itemP = new Array([],[],[],[],[],[],[],[],[],[],[],[],[]);		//キャラ別購入したアイテム（画像/声１～５）

//ボーナスポイント 各部屋　0最大HP/1販売価格/2自動調教増加/3自動回復力
var ar_BonusR = new Array([],[],[],[],[],[],[],[],[],[],[],[],[]);
//ボーナスポイント　全体　0最大HP/1販売価格
var ar_Bonus = new Array();

//怨念がおんねん
var ar_Onnen = new Array(0,0,0,0,0,0,0,0,0,0,0,0,0);

var effect_mon=0;	//もん娘effect

//各アイテムの料金　0媚薬/1体力薬/2魔法石/3リボン/4血統書I/5血統書II/6血統書III/7血統書IV/8涙/9心/10結晶/11魂
var ar_itemKKM = new Array([],
	[   1000* 1,   1000* 1,   1000* 1,   10000* 1,   10000* 1*1,   10000* 1*4,   10000* 1*32,   10000* 1*100,   10000* 1,   10000* 1*4,   10000* 1*32,   10000* 1*100],
	[   2000* 2,   2000* 2,   2000* 2,   20000* 2,   20000* 2*1,   20000* 2*4,   20000* 2*32,   20000* 2*100,   20000* 2,   20000* 2*4,   20000* 2*32,   20000* 2*100],
	[   4000* 3,   4000* 3,   4000* 3,   40000* 3,   40000* 3*1,   40000* 3*4,   40000* 3*32,   40000* 3*100,   40000* 3,   40000* 3*4,   40000* 3*32,   40000* 3*100],
	[   8000* 4,   8000* 4,   8000* 4,   80000* 4,   80000* 4*1,   80000* 4*4,   80000* 4*32,   80000* 4*100,   80000* 4,   80000* 4*4,   80000* 4*32,   80000* 4*100],
	[  16000* 5,  16000* 5,  16000* 5,  160000* 5,  160000* 5*1,  160000* 5*4,  160000* 5*32,  160000* 5*100,  160000* 5,  160000* 5*4,  160000* 5*32,  160000* 5*100],
	[  32000* 6,  32000* 6,  32000* 6,  320000* 6,  320000* 6*1,  320000* 6*4,  320000* 6*32,  320000* 6*100,  320000* 6,  320000* 6*4,  320000* 6*32,  320000* 6*100],
	[  64000* 7,  64000* 7,  64000* 7,  640000* 7,  640000* 7*1,  640000* 7*4,  640000* 7*32,  640000* 7*100,  640000* 7,  640000* 7*4,  640000* 7*32,  640000* 7*100],
	[ 128000* 8, 128000* 8, 128000* 8, 1280000* 8, 1280000* 8*1, 1280000* 8*4, 1280000* 8*32, 1280000* 8*100, 1280000* 8, 1280000* 8*4, 1280000* 8*32, 1280000* 8*100],
	[ 256000* 9, 256000* 9, 256000* 9, 2560000* 9, 2560000* 9*1, 2560000* 9*4, 2560000* 9*32, 2560000* 9*100, 2560000* 9, 2560000* 9*4, 2560000* 9*32, 2560000* 9*100],
	[ 512000*10, 512000*10, 512000*10, 5120000*10, 5120000*10*1, 5120000*10*4, 5120000*10*32, 5120000*10*100, 5120000*10, 5120000*10*4, 5120000*10*32, 5120000*10*100],
	[1024000*11,1024000*11,1024000*11,10240000*11,10240000*11*1,10240000*11*4,10240000*11*32,10240000*11*100,10240000*11,10240000*11*4,10240000*11*32,10240000*11*100],
	[2048000*12,2048000*12,2048000*12,20480000*12,20480000*12*1,20480000*12*4,20480000*12*32,20480000*12*100,20480000*12,20480000*12*4,20480000*12*32,20480000*12*100]
);

//もん娘サービス　0画像解錠/1通常セリフ/2ClickセリフA/3ClickセリフB/4虐殺セリフA/5虐殺セリフB
var ar_MMitem = new Array([],
	[ 1000000*   1*32,1000000*   1*8,1000000*   1*32,1000000*   1*128,1000000*   1*512,1000000*   1*2048],
	[ 1000000*   2*32,1000000*   2*8,1000000*   2*32,1000000*   2*128,1000000*   2*512,1000000*   2*2048],
	[ 1000000*   4*32,1000000*   4*8,1000000*   4*32,1000000*   4*128,1000000*   4*512,1000000*   4*2048],
	[ 1000000*   8*32,1000000*   8*8,1000000*   8*32,1000000*   8*128,1000000*   8*512,1000000*   8*2048],
	[ 1000000*  16*32,1000000*  16*8,1000000*  16*32,1000000*  16*128,1000000*  16*512,1000000*  16*2048],
	[ 1000000*  32*32,1000000*  32*8,1000000*  32*32,1000000*  32*128,1000000*  32*512,1000000*  32*2048],
	[ 1000000*  64*32,1000000*  64*8,1000000*  64*32,1000000*  64*128,1000000*  64*512,1000000*  64*2048],
	[ 1000000* 128*32,1000000* 128*8,1000000* 128*32,1000000* 128*128,1000000* 128*512,1000000* 128*2048],
	[ 1000000* 256*32,1000000* 256*8,1000000* 256*32,1000000* 256*128,1000000* 256*512,1000000* 256*2048],
	[ 1000000* 512*32,1000000* 512*8,1000000* 512*32,1000000* 512*128,1000000* 512*512,1000000* 512*2048],
	[ 1000000*1024*32,1000000*1024*8,1000000*1024*32,1000000*1024*128,1000000*1024*512,1000000*1024*2048],
	[ 1000000*2048*32,1000000*2048*8,1000000*2048*32,1000000*2048*128,1000000*2048*512,1000000*2048*2048]
);


//ガス室ON/OFF
var ar_GasOnOff = new Array(0,0,0,0,0,0,0,0,0,0,0,0,0);


var ar_itemKKX = new Array(1000,100000,100000000,10000000000,1000,100000,100000000,100000000000,1000,100000,100000000,100000000000,1000,100000,100000000,100000000000);
var ar_itemKKA = new Array(10000000,10000,1000000,100000000,10000000000,10000,1000000,100000000,10000000000);


var ar_itemBD = new Array([],[],[],[],[],[],[],[],[],[]);

//名前/説明/調教力/ダメージ/価格
ar_itemBD[0] = new Array('Freehand','Technician...',1,1,0);
ar_itemBD[1] = new Array('Whips1','Beginners. It is not so much hurt',5,2,2000);
ar_itemBD[2] = new Array('Egg Vibrator','Alkaline battery',10,3,20000);
ar_itemBD[3] = new Array('Vibe','Rugged, Very Rugged',20,4,96969);
ar_itemBD[4] = new Array('Anal Beads','Are acrimony',30,6,800000);
ar_itemBD[5] = new Array('Feather','Ticklish',1,0,17000000);
ar_itemBD[6] = new Array('Whips2','Painful. WARNING',10,30,20000000);
ar_itemBD[7] = new Array('Stun gun','Danger',50,8,999999999);
ar_itemBD[8] = new Array('Aphrodisiac','Experience the heaven and hell',100,16,10000000000);
ar_itemBD[9] = new Array('Magical Wand','Screaming',200,10,77777777777);




var Golden1 = 0;
var Golden2 = 0;

var khName = new Array();
var khJob = new Array();
var khText = new Array();
khName[1]='Slime Musume';
khName[2]='Elf';
khName[3]='Wolf Musume';
khName[4]='Mummy Musume';
khName[5]='Reaper Apprentice';
khName[6]='Spirit of Fire';
khName[7]='Killer machine';
khName[8]='Succubus';
khName[9]='Valkyrie';
khName[10]='Dragon Musume';
khName[11]='Angel';
khName[12]='Demon King';




khText[1]='Slime in the form of people that live in the back of the cave.<br>It eats by dissolving creatures';
khText[2]='Fairy living in the forest of spirits.<br>Live in the back of quiet forest.<br>Hate humans';
khText[3]='Half-human, half-wolf<br>It has a very scary fangs !';
khText[4]='Maids buried within the pyramid of the royal family, Attack graverobber.';
khText[5]='Apprentice of Death<br>She can\'t reach quota and her boss is always angry';
khText[6]='High-level Genie who lives in a cave of the volcano.<br>Can lit everything on fire.<br>Very cheeky !';
khText[7]='Fighter who underwent remodeling surgery<br>Has no memory of when she was human';
khText[8]='Horny demon captivating human, Human sucked dry of seman turn into mummies';
khText[9]='Uncorrupted battle maidens serving God, Fighting evil spirits with their immortal bodies';
khText[10]='Female dragon girl<br>Very strong!<br>Gaooooooooooo !';
khText[11]='Angel who lives in heaven<br>Is not interested in the human world';
khText[12]='Strongest and worst Asmodian King.<br>Even God is afraid of its power.<br>The world is shrouded in darkness by the force of the devil';






var khDamage = new Array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);	//虐殺された後の回復

var khKKmd = 1000;	//メイドの基本価格
var khKKby = 1000;	//バイヤーの基本価格
var khBnmd = 0.05;	//メイドBonus値
var khBnby = 0.05;	//バイヤーBonus値

var khItemAllBonusK = 1.2;	//全体影響アイテムの倍率(価格)
var khItemAllBonusB = 3;	//全体影響アイテムの倍率(クリックの調教力)

//click
var ClMMb = 4;		//調教基本値
var ClMMh = 1.5;	//ダメージ基本値

//複利計算の係数
var fKbp = 1.000;		//もん娘Bonus：最大調教値
var fKhp = 1.004;		//もん娘Bonus：最大HP
var fKka = 1.020;		//もん娘Bonus：奴隷売却価格
var fKDh = 1.002;		//部屋Bonus：最大調教値も増えてしまう！
var fKDt = 1.004;		//部屋Bonus：調教Speed
var fKrj = 1.003;		//部屋Bonus：回復

var fKCTP = 1.010;		//Click Torture Power
var fKCAP = 1.004;		//Click Attack Power

var fKlv = 1.10;		//奴隷レベルアップのための価格
var fKmd = 1.10;		//メイドの価格
var fKby = 1.10;		//バイヤーの価格
var fKRm = 1.10;		//調教部屋レベルアップ価格

var fOnnen = 1.100;		//怨念の回復を遅くする増加率
var DeathP = 1000;		//死んだときの基本値

var fGas = 1.020;		//ガス殺傷能力
var GasP = 100;			//ガス殺傷能力基本値


//もん子初回購入価格
var khKK = new Array(0
	,100
	,500
	,2000
	,8000
	,50000
	,250000
	,1300000
	,6000000
	,30000000
	,150000000
	,800000000
	,5000000000
);

//もん子基本最大調教値
var khB = new Array(0
	,70
	,120
	,230
	,440
	,850
	,1700
	,3400
	,7000
	,14400
	,30000
	,60000
	,123456
);
//もん子基本最大HP
var khH = new Array(0
	,100
	,110
	,130
	,150
	,180
	,240
	,300
	,380
	,500
	,700
	,1000
	,1500
);
//もん子基本調教Speed
var khD = new Array(0
	,1
	,1
	,1
	,1
	,1
	,1
	,1
	,1
	,1
	,1
	,1
	,1
);
//もん子基本回復Speed
var khJ = new Array(0
	,2
	,2
	,3
	,3
	,4
	,4
	,5
	,6
	,7
	,8
	,9
	,10
);



//もん子基本売価
var khK = new Array(0
	,10
	,25
	,80
	,210
	,600
	,1919
	,5000
	,18072
	,64564
	,200000
	,555555
	,1666666
);

//もん子調教部屋の増築価格
var khR = new Array(0
	,100
	,200*2
	,400*3
	,800*4
	,1600*5
	,3200*6
	,6400*7
	,12800*8
	,25600*9
	,51200*10
	,102400*11
	,204800*12
);




$(function(){

	fun_load();

	$('#r18a').click(function(){funR18(1);});
	$('#r18b').click(function(){funR18(2);});

	$('#ig1').click(function(){funCl(1);});
	$('#ig2').click(function(){funCl(2);});
	$('#ig3').click(function(){funCl(3);});
	$('#ig4').click(function(){funCl(4);});
	$('#ig5').click(function(){funCl(5);});
	$('#ig6').click(function(){funCl(6);});
	$('#ig7').click(function(){funCl(7);});
	$('#ig8').click(function(){funCl(8);});
	$('#ig9').click(function(){funCl(9);});
	$('#ig10').click(function(){funCl(10);});
	$('#ig11').click(function(){funCl(11);});
	$('#ig12').click(function(){funCl(12);});
	$('#buy').click(function(){funBuy();});

	$('#play_se0').click(function(){funSE(0);});
	$('#play_se1').click(function(){funSE(1);});

	$('#mm_select1').click(function(){funMMst(1);});
	$('#mm_select2').click(function(){funMMst(2);});
	$('#mm_select3').click(function(){funMMst(3);});
	$('#mm_select4').click(function(){funMMst(4);});


	$('#mLvUp').hover(function(){funLvOnMs(1);},function(){funLvOffMs(1);});
	$('#rLvUp').hover(function(){funLvOnMs(2);},function(){funLvOffMs(2);});
	$('#mLvUp').click(function(){funMLvUp();});
	$('#rLvUp').click(function(){funRLVUp();});


	$('#bt_maid').hover(function(){funBuyOnMs(1);},function(){$('#bt_maid img').attr('src', 'm_img/bt_maid1.png');});
	$('#bt_buyer').hover(function(){funBuyOnMs(2);},function(){$('#bt_buyer img').attr('src', 'm_img/bt_buy1.png');});
	$('#bt_maid').click( function(){funBuyMB(1);});
	$('#bt_buyer').click(function(){funBuyMB(2);});

	//もん娘画像/声の購入
	$('#mm_padlock').click(function(){funBuyMMitem(0);});
	$('#audio_ic1').click(function(){funBuyMMitem(1);});
	$('#audio_ic2').click(function(){funBuyMMitem(2);});
	$('#audio_ic3').click(function(){funBuyMMitem(3);});
	$('#audio_ic4').click(function(){funBuyMMitem(4);});
	$('#audio_ic5').click(function(){funBuyMMitem(5);});
	$('#mm_change').click(function(){funChangeImg();});
	$('#status_img_set2').click(function(){funBuruBuru2(0);});

	$('#gas_switch_on').click(function(){funGasOnOff(1);});
	$('#gas_switch_off').click(function(){funGasOnOff(0);});
	
	//おんねん
	$('#fabu').click(function(){OnnenFabu();});
	

	//ルームの反転
	$('#rb1').hover(function(){funRoomB1(1);},function(){funRoomB2(1);});
	$('#rb2').hover(function(){funRoomB1(2);},function(){funRoomB2(2);});
	$('#rb3').hover(function(){funRoomB1(3);},function(){funRoomB2(3);});
	$('#rb4').hover(function(){funRoomB1(4);},function(){funRoomB2(4);});
	$('#rb5').hover(function(){funRoomB1(5);},function(){funRoomB2(5);});
	$('#rb6').hover(function(){funRoomB1(6);},function(){funRoomB2(6);});
	$('#rb7').hover(function(){funRoomB1(7);},function(){funRoomB2(7);});
	$('#rb8').hover(function(){funRoomB1(8);},function(){funRoomB2(8);});
	$('#rb9').hover(function(){funRoomB1(9);},function(){funRoomB2(9);});
	$('#rb10').hover(function(){funRoomB1(10);},function(){funRoomB2(10);});
	$('#rb11').hover(function(){funRoomB1(11);},function(){funRoomB2(11);});
	$('#rb12').hover(function(){funRoomB1(12);},function(){funRoomB2(12);});


	$('#gas_all_open').click(function(){ar_GasOnOff = Array(1,1,1,1,1,1,1,1,1,1,1,1,1);});
	$('#gas_all_close').click(function(){ar_GasOnOff = Array(0,0,0,0,0,0,0,0,0,0,0,0,0);});
	$('#onnen_killer').click(function(){
		ar_Onnen = Array(0,0,0,0,0,0,0,0,0,0,0,0,0);
		ar_my[0]=0;
		khDamage[1]=0;
		khDamage[2]=0;
		khDamage[3]=0;
		khDamage[4]=0;
		khDamage[5]=0;
		khDamage[6]=0;
		khDamage[7]=0;
		khDamage[8]=0;
		khDamage[9]=0;
		khDamage[10]=0;
		khDamage[11]=0;
		khDamage[12]=0;
	});

	funSlide();
});


$(document).ready(function() {(function Aheloop(){setTimeout(Aheloop, 100);render();})();})
function render() {
	if(r18==1){

		var date1 = new Date();	//速度計測用

		cnt++;

		funBonus();		//Bonusポイント計算

		fun_playB();	//調教p自然減少
		fun_playH();	//HP回復
		fun_playD();	//虐殺された後の回復
		funMyData();	//最大金額更新
		fun_print();	//出力
		FunGolden();	//ゴールデンアヘ１
		//オープン
		if(colorF<16){
			$('body').css('background-color','#'+colorF.toString(16)+colorF.toString(16)+colorF.toString(16));
			colorF=colorF+3;
		}


		funGasAni();	//ガスアニメ
		funNew();		//NEW点滅


		var date2 = new Date();
		speed = date2.getTime()-date1.getTime();


		//effect_mon
		if($("#Effect_mon").prop('checked')){effect_mon=1;}else{effect_mon=0;}	//クリック時のeffect

	}
}

//年齢認証
function funR18(s) {
	if(s==1){
		r18=1;
		$('#r18').slideToggle('slow');
		$('#wrap').slideToggle('slow');
	}else{
		location.href="http://www.yahoo.co.jp/";	//お前は一体何しに来た？
	}
}

//曲再生だよー
function funBgmSelect() {
	var bgm = $('#bgm_set').val();
	if(bgm==0){
		document.getElementById('bgmBk').pause();
	}else{
		$('#bgmBk').attr('src','m_mp3/bgm_'+key2.substring(12, 20)+bgm+'.mp3');
		document.getElementById('bgmBk').play();
	}
}
function funSE(s) {
	se = parseFloat(s);
	$('#play_se0').css('background-color','#fff');
	$('#play_se1').css('background-color','#fff');
	if(se==0){$('#play_se0').css('background-color','#E95388');}
	if(se==1){$('#play_se1').css('background-color','#E95388');}
}


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
}


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
		$('#autosave').html('saved');
	}else{
		$('#autosave').html('Auto-save in '+ost+' seconds');
	}
}



//データを読み込みグローバル変数に挿入
function fun_load() {
	var a='';
	for(var i=1;i<=r;i++){
		a = $('#room'+i).html();
		ar_room[i] = a.split("#");		//部屋データ
		a = $('#itemM'+i).html();
		ar_itemM[i] = a.split("#");		//アイテムデータ
		a = $('#MonItem'+i).html();
		ar_itemP[i] = a.split("#");		//購入した画/声
	}
	a = $('#mydata').html();
	ar_my = a.split("#");		//マイルームデータ
	a = $('#member').html();
	ar_member = a.split("#");	//メイド＆バイヤー
	a = $('#itemX').html();
	ar_itemX = a.split("#");	//その他アイテム１
	a = $('#itemA').html();
	ar_itemA = a.split("#");	//その他アイテム２
	a = $('#itemB').html();
	ar_itemB = a.split("#");	//装備アイテム
	a = $('#OnnenSet').html();
	ar_Onnen = a.split("#");	//怨念

	//怨念が表示されないバグ修正。たぶん配列の末尾0が但しく取得できてなかったかもしれない。原因がよくわからないので苦肉の策。2015/5/14
	for(var i=0;i<=12;i++){
		if(ar_Onnen[i].length<1){ar_Onnen[i]=0;}
	}


	funBonus();		//Bonusポイント計算はロード時に行う
}

//Bonusポイントの計算
function funBonus(){
	//ボーナスポイント 各部屋　0最大HP/1販売価格/2自動調教増加/3自動回復力
	ar_BonusR = new Array([],
		[1,1,1,1],[1,1,1,1],[1,1,1,1],[1,1,1,1],
		[1,1,1,1],[1,1,1,1],[1,1,1,1],[1,1,1,1],
		[1,1,1,1],[1,1,1,1],[1,1,1,1],[1,1,1,1]
	);
	ar_Bonus = new Array(1,1);
	//ルームボーナス
	for(var i=1;i<=r;i++){
		if(ar_itemM[i][0]=='1'){ar_BonusR[i][2]=ar_BonusR[i][2]*1.2;}	//調教P×1.2
		if(ar_itemM[i][1]=='1'){ar_BonusR[i][0]=ar_BonusR[i][0]*1.5;}	//HP×1.5
		if(ar_itemM[i][2]=='1'){ar_BonusR[i][3]=ar_BonusR[i][3]*1.5;}	//回復×1.5
		if(ar_itemM[i][3]=='1'){ar_BonusR[i][1]=ar_BonusR[i][1]*2;}		//価格×2
		if(ar_itemM[i][4]=='1'){ar_BonusR[i][1]=ar_BonusR[i][1]*1.2;}		//価格×1.2
		if(ar_itemM[i][5]=='1'){ar_BonusR[i][1]=ar_BonusR[i][1]*1.2;}		//価格×1.2
		if(ar_itemM[i][6]=='1'){ar_BonusR[i][1]=ar_BonusR[i][1]*1.2;}		//価格×1.2
		if(ar_itemM[i][7]=='1'){ar_BonusR[i][1]=ar_BonusR[i][1]*1.2;}		//価格×1.2
		if(ar_itemM[i][8]=='1'){ar_BonusR[i][0]=ar_BonusR[i][0]*2;}		//HP×2
		if(ar_itemM[i][9]=='1'){ar_BonusR[i][0]=ar_BonusR[i][0]*2;}		//HP×2
		if(ar_itemM[i][10]=='1'){ar_BonusR[i][0]=ar_BonusR[i][0]*2;}	//HP×2
		if(ar_itemM[i][11]=='1'){ar_BonusR[i][0]=ar_BonusR[i][0]*2;}	//HP×2
	}
	//全体ボーナス
	if(ar_itemX[0]=='1'){ar_Bonus[1]=ar_Bonus[1]*khItemAllBonusK;}	//価格ボーナス
	if(ar_itemX[1]=='1'){ar_Bonus[1]=ar_Bonus[1]*khItemAllBonusK;}	//価格ボーナス
	if(ar_itemX[2]=='1'){ar_Bonus[1]=ar_Bonus[1]*khItemAllBonusK;}	//価格ボーナス
	if(ar_itemX[3]=='1'){ar_Bonus[1]=ar_Bonus[1]*khItemAllBonusK;}	//価格ボーナス

	if(ar_itemX[4]=='1'){ar_Bonus[0]=ar_Bonus[0]*khItemAllBonusB;}	//クリックの調教力ボーナス
	if(ar_itemX[5]=='1'){ar_Bonus[0]=ar_Bonus[0]*khItemAllBonusB;}	//クリックの調教力ボーナス
	if(ar_itemX[6]=='1'){ar_Bonus[0]=ar_Bonus[0]*khItemAllBonusB;}	//クリックの調教力ボーナス
	if(ar_itemX[7]=='1'){ar_Bonus[0]=ar_Bonus[0]*khItemAllBonusB;}	//クリックの調教力ボーナス

	if(ar_itemX[8]=='1'){ar_Bonus[1]=ar_Bonus[1]*khItemAllBonusK;}	//価格ボーナス
	if(ar_itemX[9]=='1'){ar_Bonus[1]=ar_Bonus[1]*khItemAllBonusK;}	//価格ボーナス
	if(ar_itemX[10]=='1'){ar_Bonus[1]=ar_Bonus[1]*khItemAllBonusK;}	//価格ボーナス
	if(ar_itemX[11]=='1'){ar_Bonus[1]=ar_Bonus[1]*khItemAllBonusK;}	//価格ボーナス
	if(ar_itemX[12]=='1'){ar_Bonus[1]=ar_Bonus[1]*khItemAllBonusK;}	//価格ボーナス
	if(ar_itemX[13]=='1'){ar_Bonus[1]=ar_Bonus[1]*khItemAllBonusK;}	//価格ボーナス
	if(ar_itemX[14]=='1'){ar_Bonus[1]=ar_Bonus[1]*khItemAllBonusK;}	//価格ボーナス
	if(ar_itemX[15]=='1'){ar_Bonus[1]=ar_Bonus[1]*khItemAllBonusK;}	//価格ボーナス
	if(ar_itemA[0]=='1'){ar_Bonus[1]=ar_Bonus[1]*khItemAllBonusK;}	//価格ボーナス
	if(ar_itemA[1]=='1'){ar_Bonus[1]=ar_Bonus[1]*khItemAllBonusK;}	//価格ボーナス
	if(ar_itemA[2]=='1'){ar_Bonus[1]=ar_Bonus[1]*khItemAllBonusK;}	//価格ボーナス
	if(ar_itemA[3]=='1'){ar_Bonus[1]=ar_Bonus[1]*khItemAllBonusK;}	//価格ボーナス
	if(ar_itemA[4]=='1'){ar_Bonus[1]=ar_Bonus[1]*khItemAllBonusK;}	//価格ボーナス
	if(ar_itemA[5]=='1'){ar_Bonus[1]=ar_Bonus[1]*khItemAllBonusK;}	//価格ボーナス
	if(ar_itemA[6]=='1'){ar_Bonus[1]=ar_Bonus[1]*khItemAllBonusK;}	//価格ボーナス
	if(ar_itemA[7]=='1'){ar_Bonus[1]=ar_Bonus[1]*khItemAllBonusK;}	//価格ボーナス
	if(ar_itemA[8]=='1'){ar_Bonus[1]=ar_Bonus[1]*khItemAllBonusK;}	//価格ボーナス


}


//最大金額の更新
function funMyData() {
	if(ar_my[0]>ar_my[1]){ar_my[1]=ar_my[0];}
}





//データ変数を各項目に表示
function fun_print() {
	var mon1 = 0;
	var mon2 = 0;
	for(var i=1;i<=r;i++){
		mon1 = mon1 + parseFloat(0+ar_room[i][4]);
		mon2 = mon2 + parseFloat(0+ar_room[i][5]);
		if(ar_room[i][0]=='0'){
			$('#name'+i).html('Torture room'+i+'<br>'+separate(khR[i])+' gold');
			$('#pR'+i).html('');
			$('#Lv'+i).html('');
			$('#sS'+i).html('');
			$('#sK'+i).html('');
		}else{
			$('#rb'+i).css('background-image','url("m_img/roomb_e.png")');
			$('#rb'+i).css('-moz-opacity','1');
			$('#rb'+i).css('opacity','1');
			$('#name'+i).html(khName[i]);
			$('#name'+i).css('text-decoration','underline');
			$('#name'+i).css('cursor','pointer');
			$('#pR'+i).html(separate(Math.floor(ar_room[i][0])));
			$('#Lv'+i).html('Lv'+separate(Math.floor(ar_room[i][1])));
			$('#sS'+i).html(separate(Math.floor(ar_room[i][4])));
			$('#sK'+i).html(separate(Math.floor(ar_room[i][5])));
			$('#pR'+i).html('Torture room Lv : '+separate(ar_room[i][0]));
		}
		$('#room'+i).html(ar_room[i].join('#'));
		$('#itemM'+i).html(ar_itemM[i].join('#'));
		$('#MonItem'+i).html(ar_itemP[i].join('#'));
	}
	$('#OnnenSet').html(ar_Onnen.join('#'));



	//自分の情報を更新
	$('#mydata').html(ar_my.join('#'));
	$('#yen').html(separate(Math.floor(ar_my[0])));
	$('#yen1').html(separate(Math.floor(ar_my[1])));
	$('#yen2').html(separate(Math.floor(ar_my[2])));
	$('#mon1').html(separate(Math.floor(mon1)));
	$('#mon2').html(separate(Math.floor(mon2)));
	$('#cl').html(separate(Math.floor(ar_my[3])));
	$('#gc1').html(separate(Math.floor(ar_my[4])));
	$('#gc2').html(separate(Math.floor(ar_my[5])));
	$('#yen_my').html(separate(Math.floor(ar_my[0])));
	$('#cl_my').html(separate(Math.floor(ar_my[3])));


	$('#member').html(ar_member.join('#'));
	$('#member_md').html(separate(Math.floor(ar_member[0])));
	$('#member_by').html(separate(Math.floor(ar_member[1])));
	$('#itemX').html(ar_itemX.join('#'));
	$('#itemA').html(ar_itemA.join('#'));
	$('#itemB').html(ar_itemB.join('#'));

	$('#speed').html(speed);	//スピード計測

	funBuyMBck();	//メイドとバイヤーの購入check
}

function funRoomB1(s) {
	if(ar_room[s][0]=='0'){
		if(ar_my[0]>=khR[s]){
			$('#rb'+s).css('background-image','url("m_img/room_b2.png")');
		}
	}
}
function funRoomB2(s) {
	if(ar_room[s][0]=='0'){
		$('#rb'+s).css('background-image','url("m_img/room_b1.png")');
	}
}

//ガスアニメ
function funGasAni() {
	for(var i=1;i<=12;i++){
		if(ar_GasOnOff[i]==1){
			var k = cnt%20;
			if(k>10){k=20-k;}
			$('#rb'+i).css('background-color','#ff'+k+'fff');

		}else{
			$('#rb'+i).css('background-color','#ffffff');
		}
	}

	//ルーム内のアニメ
	if(ar_GasOnOff[roomno]==1){
		var cnt_t = (cnt%20) * 0.1;
		var t=cnt_t;
		if(cnt_t>1){t=2-cnt_t;}
		$(".warning_area").css('background-position','-'+(cnt*2)+'px 0px');
		$(".warning_area_on").css('-khtml-opacity' , t);
		$(".warning_area_on").css('-moz-opacity' , t);
		$(".warning_area_on").css('opacity' , t);
		if(cnt%4==0){
			var zoom = 0.3 + Math.random() * 2.0;
			var x = Math.floor(Math.random()*360);
			var y = Math.floor(Math.random()*400);
			var ahe = $('<div>').append($('<img>').attr('src', 'm_img/gas.png').css('zoom', zoom).css('-moz-transform', 'scale(' + zoom + ',' + zoom + ')'));
			ahe.css('left', x);
			ahe.css('top' , y);
			ahe.css('position' , 'absolute');
			ahe.css('z-index' , '600');
			ahe.css('-khtml-opacity' , 0.8);
			ahe.css('-moz-opacity' , 0.8);
			ahe.css('opacity' , 0.8);
			ahe.hide().fadeIn(2000).delay(4000).fadeOut(2000, function(){$(this).remove();});
			if(change_flg==0){
				$('#status_img_set').append(ahe);
			}else{
				$('#status_img_set2').append(ahe);
			}
		}
	}else{
		$(".warning_area_on").css('-khtml-opacity' , 1);
		$(".warning_area_on").css('-moz-opacity' , 1);
		$(".warning_area_on").css('opacity' , 1);

	}

}





//奴隷を販売する
function funBuyCk(s) {
	ar_room[s][4]++;			//出荷数を増やす
	ar_room[s][2] = 0;			//調教Pリセット

	var kakaku = fuku(khK[s],ar_room[s][1],fKka);				//基本価格
	kakaku = kakaku * (1+parseFloat(0+ar_member[1])*khBnby);		//バイヤーボーナス
	kakaku = kakaku * ar_BonusR[s][1];							//アイテムボーナス(ルーム)
	kakaku = kakaku * ar_Bonus[1];								//アイテムボーナス(全体)
	ar_my[0] = parseFloat(0+ar_my[0]) + kakaku;					//所持金を増やす
	ar_my[2] = parseFloat(0+ar_my[2]) + kakaku;
}




//調教p自然減少
function fun_playB() {
	var nokori = 0;
	var pointB = 0;
	var kakaku = 0;
	var PowerB = 0;
	for(var i=1;i<=r;i++){
		if(ar_room[i][0]>0){
			if(ar_GasOnOff[i]==0){

				if(khDamage[i]==0){

					PowerB = khD[i];
					PowerB = fuku(PowerB,ar_room[i][0],fKDt);					//部屋レベルの調教Speed
					PowerB = PowerB * (1+parseFloat(0+ar_member[0])*khBnmd);		//メイドボーナス
					PowerB = PowerB * ar_BonusR[i][2];							//アイテムボーナス(ルーム)

					ar_room[i][2] = parseFloat(0+ar_room[i][2]) + PowerB;


					pointB = khB[i];	//基本値
			//		pointB = fuku(pointB,ar_room[i][1],fKbp);		//最大調教Pもん娘Bonus
					pointB = fuku(pointB,ar_room[i][0],fKDh);		//最大調教P部屋Bonus

					nokori = pointB - ar_room[i][2];			//残り調教P

					//0になったら次へ
					if(nokori<0){
						funBuyCk(i);
						nokori = pointB;
					}

					//バーの長さ
					bar = 180 - Math.floor(180 * (nokori/pointB));
					$('#pB'+i).css('width',bar);

					$('#pH'+i).css('background-color','#79C06E');
					$('#pB'+i).css('background-color','#AF0082');

					$('#ig_d'+i).css('display','none');
					$('#ig_b'+i).css('display','block');

					//画像の表示
					$('#ig_a'+i).css('display','none');
					$('#ig_b'+i).css('display','block');

				}else{

					$('#pH'+i).css('background-color','#ff0000');

					$('#ig_d'+i).css('display','block');
					$('#ig_b'+i).css('display','none');
				}
			} else {
				if(khDamage[i]==0){
					$('#pH'+i).css('background-color','#79C06E');
					$('#ig_d'+i).css('display','none');
					$('#ig_b'+i).css('display','block');
				}else{
					$('#pH'+i).css('background-color','#ff0000');
					$('#ig_d'+i).css('display','block');
					$('#ig_b'+i).css('display','none');
				}
			}
		}
	}
}


//HP自然増加
function fun_playH() {
	var nokori = 0;
	var PowerH = 0;
	for(var i=1;i<=r;i++){
		if(ar_room[i][0]>0 && khDamage[i]==0){


			hP = fuku(khH[i],ar_room[i][1],fKhp);	//最大HP
			hP = hP * ar_BonusR[i][0];				//アイテムボーナス(ルーム)

			if(ar_GasOnOff[i]==0){

				PowerH = fuku(khJ[i],ar_room[i][0],fKrj) * 0.1;		//回復Speed
				PowerH = PowerH * ar_BonusR[i][3];	//アイテムボーナス(ルーム)

				ar_room[i][3]=parseFloat(0+ar_room[i][3]) - PowerH;		//ダメージを減らす
				if(parseFloat(0+ar_room[i][3])<0){ar_room[i][3]=0;}

				nokori = parseFloat(0+hP) - ar_room[i][3];					//残りHP

				//バーの長さ
				bar = Math.floor(180 * (nokori/hP));
				$('#pH'+i).css('width',bar);

			} else {
				//ガス室がONになっている！
				var damage = fuku(GasP,ar_room[i][0],fGas) * 0.005;

				ar_room[i][3]=parseFloat(0+ar_room[i][3]) + damage;		//ダメージを増やす
				nokori = parseFloat(0+hP) - ar_room[i][3];					//残りHP

				//0になったら次へ
				if(nokori<0){
					ar_room[i][5]++;				//虐殺数を増やす
					ar_Onnen[i]++;
					nokori = hP;
					khDamage[i]=fuku(DeathP,ar_Onnen[i],fOnnen);
					ar_room[i][3]=0;

					if(se == 1){
						var dks_i = '';
						if(i==3){dks_i = Math.floor(Math.random()*3)+1;}
						if(i==4){dks_i = Math.floor(Math.random()*6)+1;}
						if(i==6){dks_i = Math.floor(Math.random()*3)+1;}
						document.getElementById('mm'+i+'_d'+dks_i).play();
					}

				}else{
					//バーの長さ
					bar = Math.floor(180 * (nokori/hP));
					$('#pH'+i).css('width',bar);

				}

			}
		}
	}
}

//虐殺された後の回復
function fun_playD() {
	for(var i=1;i<=r;i++){
		if(khDamage[i]>0){

			var a = fuku(DeathP,ar_Onnen[i],fOnnen);
			khDamage[i]=khDamage[i]-30;

			if(khDamage[i]<0){khDamage[i]=0;}
			//バーの長さ
			bar = Math.floor(180 * (a-khDamage[i])/a);

			$('#pH'+i).css('width',bar);
		}
	}
}


//クリック
function funCl(i) {
	var nokori = 0;
	var pointB = 0;
	var kakaku = 0;
	var hP = 0;

	//装備品
	var PowerB  = ClMMb * ar_itemBD[parseFloat(0+ar_my[6])][2];		//調教力基本値
	var AttackP = ClMMh * ar_itemBD[parseFloat(0+ar_my[6])][3];		//ダメージ基本値

	if(ar_room[i][0]>0){
		if(khDamage[i]==0){


			if(effect_mon==0){
				funClA(i);
				funblbl(i,0);	//ぶるぶる震わせるアニメーション
			}

			$('#rb'+i).css('background-color', '#E4007F');
			setTimeout(function(){$('#rb'+i).css('background-color', '#fff');},10);



			ar_my[3]++;	//クリック数増加




			//------------------------------------------------

			if(ar_GasOnOff[i]==0){
				//調教力(クリック)
				PowerB = PowerB * ar_Bonus[0];						//アイテムボーナス(全体)
				PowerB = fuku(PowerB,ar_room[i][0],fKCTP);					//ルームボーナス


				ar_room[i][2] = parseFloat(0+ar_room[i][2]) + PowerB;


				pointB = khB[i];	//基本値
		//		pointB = fuku(pointB,ar_room[i][1],fKbp);		//最大調教Pもん娘Bonus
				pointB = fuku(pointB,ar_room[i][0],fKDh);		//最大調教P部屋Bonus


				nokori = pointB - ar_room[i][2];	//残り調教P
				//0になったら次へ
				if(nokori<0){
					funBuyCk(i);
					nokori = pointB;
				}
				//バーの長さ
				bar = 180 - Math.floor(180 * (nokori/pointB));
				$('#pB'+i).css('width',bar);
			}

			//------------------------------------------------
			//HPを減らす
			hP = fuku(khH[i],ar_room[i][1],fKhp);	//最大HP
			hP = hP * ar_BonusR[i][0];				//アイテムボーナス(ルーム)

			AttackP = fuku(AttackP,ar_room[i][0],fKCAP);					//ルームボーナス

			ar_room[i][3]=parseFloat(0+ar_room[i][3]) + AttackP;		//蓄積ダメージ


			nokori = parseFloat(0+hP) - ar_room[i][3];					//残りHP

			//0になったら次へ
			if(nokori<0){
				ar_room[i][5]++;				//虐殺数を増やす
				ar_Onnen[i]++;
				nokori = hP;
				khDamage[i]=fuku(DeathP,ar_Onnen[i],fOnnen);
				ar_room[i][3]=0;

				if(se == 1){
					var dks_i = '';
					if(i==3){dks_i = Math.floor(Math.random()*3)+1;}
					if(i==4){dks_i = Math.floor(Math.random()*6)+1;}
					if(i==6){dks_i = Math.floor(Math.random()*3)+1;}
					document.getElementById('mm'+i+'_d'+dks_i).play();
				}

			}else{
				//バーの長さ
				bar = Math.floor(180 * (nokori/hP));
				$('#pH'+i).css('width',bar);

				if(se == 1){
					var an = Math.floor(Math.random()*12)+1;
					document.getElementById('mm'+i+'_a'+an).play();
				}
			}
		}
	}else{
		funBuy(i);		//調教部屋の購入
	}
	fun_print();	//出力
}


//「あ」表示
function funClA(s) {
	var x = 80;
	var y = 90;
	var zoom = 0.3 + Math.random() * 0.8;
	x = parseInt(Math.random() * x);
	y = parseInt(Math.random() * y);
	var ahe = $('<div>').addClass('block').append($('<img>').attr('src', 'm_img/a.png').css('zoom', zoom).css('-moz-transform', 'scale(' + zoom + ',' + zoom + ')'));
	ahe.css('left', x);
	ahe.css('top' , y);
	ahe.css('position' , 'absolute');
	ahe.css('z-index' , '10000');
	ahe.css('-khtml-opacity' , 0.8);
	ahe.css('-moz-opacity' , 0.8);
	ahe.css('opacity' , 0.8);
	ahe.hide().fadeIn(1).animate({ top: y - 50},{duration:900,queue:false}).fadeOut(600, function () { $(this).remove(); });
	$('#ig'+s).append(ahe);
	return ahe;
}

function funblbl(s,b) {
	var r1 = Math.floor(Math.random()*6)-3;
	var r2 = Math.floor(Math.random()*6)-3;
	$('#ig'+s).css('top',r1);
	$('#ig'+s).css('left',r2);
	b++;
	if(b<7){
		setTimeout(function() {funblbl(s,b);},20);
	}else{
		$('#ig'+s).css('top',0);
		$('#ig'+s).css('left',0);
	}
}


//拷問部屋購入
function funBuy(s){
	//お金があれば買えます！
	if(ar_my[0]>=khR[s]){
		ar_room[s][0]=1;
		ar_room[s][1]=1;
		ar_my[0] = ar_my[0] - khR[s];
	}
}




function funLvOnMs(s){
	if(s==1){
		var k = fuku(khKK[roomno],ar_room[roomno][1],fKlv);
		if(ar_my[0]>=k){
			$('#mLvUp img').attr('src', 'm_img/btm_lv_m2e.png');
//			$('#ue1').html(' x'+fKbp);
			$('#ue2').html(' x'+fKhp);
			$('#ue5').html(' x'+fKka);
			$('#ueMLv').html(' +1');
		}
	}
	if(s==2){
		var k = fuku(khR[roomno],ar_room[roomno][0],fKRm);
		if(ar_my[0]>=k){
			$('#rLvUp img').attr('src', 'm_img/btm_lv_r2e.png');
			$('#ue1').html(' x'+fKDh)
			$('#ue3').html(' x'+fKDt);
			$('#ue4').html(' x'+fKrj);

			$('#ue6').html(' x'+fKCTP);
			$('#ue7').html(' x'+fKCAP);
			$('#ue8').html(' x'+fGas);
			$('#ueRLv').html(' +1');
		}
	}
}
function funLvOffMs(s){
	$('#ue1').html('');
	$('#ue2').html('');
	$('#ue3').html('');
	$('#ue4').html('');
	$('#ue5').html('');
	$('#ue6').html('');
	$('#ue7').html('');
	$('#ue8').html('');
	$('#ueMLv').html('');
	$('#ueRLv').html('');
	if(s==1){
		$('#mLvUp img').attr('src', 'm_img/btm_lv_m1e.png');
	}
	if(s==2){
		$('#rLvUp img').attr('src', 'm_img/btm_lv_r1e.png');
	}
}




//もん娘LvUp
function funMLvUp(){
	var k = fuku(khKK[roomno],ar_room[roomno][1],fKlv);
	if(ar_my[0]>=k){
		$('#mLvUp').animate({'top':-5},50).animate({'top':0},50);
		ar_room[roomno][1] = parseFloat(0+ar_room[roomno][1])+1;
		ar_my[0] = ar_my[0] - k;
		printSt(roomno);
	}
	fun_print();	//出力
}


//調教部屋LvUp
function funRLVUp(){
	var k = fuku(khR[roomno],ar_room[roomno][0],fKRm);
	if(ar_my[0]>=k){
		$('#rLvUp').animate({'top':-5},50).animate({'top':0},50);
		ar_room[roomno][0] = parseFloat(0+ar_room[roomno][0])+1;
		ar_my[0] = ar_my[0] - k;
		printSt(roomno);
	}
	fun_print();	//出力
}



//ゴールデンアヘ
function FunGolden(){
	Golden1--;
	Golden2--;
	if(Golden1<1){
		Golden1 = (600*3) + Math.floor(Math.random()*1000);
	} else if(Golden1==1) {
		var x = $('body').width();
		var y = $('body').height();
		xr = Math.random() * x * 0.9;
		yr = parseFloat(660 * Math.random());
		if(yr>y){yr=y;}
		//ゴールデンあへを表示
		var ahe = $('<div>').addClass('block').append($('<img>').attr('src', 'm_img/golden1.png'));
		ahe.css('left', xr);
		ahe.css('top' , yr);
		ahe.css('position' , 'absolute');
		ahe.css('z-index' , '8000');
		ahe.attr('id', 'golden-ahe1');
		ahe.on("click", { class: "addClick" }, function() {funAhe(1);});
		ahe.hide().fadeIn(2000).delay(4000).fadeOut(4000, function () { $(this).remove(); });
		$('body').append(ahe);
		return ahe;
	}
	if(Golden2<1){
		Golden2 = (600*4) + Math.floor(Math.random()*1000);
	//	Golden2 = 60;
	} else if(Golden2==1) {
		var x = $('body').width();
		var y = $('body').height();
		xr = Math.random() * x * 0.9;
		yr = parseFloat(660 * Math.random());
		if(yr>y){yr=y;}
		//ゴールデンあへを表示
		var ahe = $('<div>').addClass('block').append($('<img>').attr('src', 'm_img/golden2.png'));
		ahe.css('left', xr);
		ahe.css('top' , yr);
		ahe.css('position' , 'absolute');
		ahe.css('z-index' , '8000');
		ahe.attr('id', 'golden-ahe2');
		ahe.on("click", { class: "addClick" }, function() {funAhe(2);});
		ahe.hide().fadeIn(2000).delay(4000).fadeOut(4000, function () { $(this).remove(); });
		$('body').append(ahe);
		return ahe;
	}
	$('#Golden1').html(Golden1);
	$('#Golden2').html(Golden2);
}


//ゴールデンアヘがクリックされた！
function funAhe(s){
	if(s==1){
		var a = Math.floor(ar_my[0]*0.1);
		ar_my[0] = parseFloat(0+ar_my[0]) + a;
		ar_my[2] = parseFloat(0+ar_my[2]) + a;
		ar_my[4]++;
		$("#golden-ahe1").css("display", "none");	//Gアヘを消す
	}
	if(s==2){
		//虐殺
		for(var i=1;i<=r;i++){
			if(ar_room[i][0]!='0'){
				khDamage[i]=fuku(DeathP,ar_Onnen[i],fOnnen);
				ar_room[i][5]++;
				ar_Onnen[i]++;
			}
		}
		ar_my[5]++;
		$("#golden-ahe2").css("display", "none");	//Gアヘを消す
		FunSplatter();
	}
	fun_print();	//出力
}

//大量虐殺アニメ
function FunSplatter(){
	var x = $('body').width();
	var y = $('body').height();
	for(i=1;i<=10;i++){
		var zoom = 1 + Math.random() * 3;
		xr = Math.random() * x * 0.9 - 500;
		yr = Math.random() * y * 0.9 - 500;
		var ti = $('<div>').append($('<img>').attr('src', 'm_img/ti.png').css('zoom', zoom).css('-moz-transform', 'scale(' + zoom + ',' + zoom + ')'));
		ti.css('left', xr);
		ti.css('top' , yr);
		ti.css('position' , 'absolute');
		ti.css('z-index' , 5000+i);
		ti.attr('id', 'golden-ahe1');
		ti.hide().fadeIn(60*i).delay(7000).fadeOut(4000, function () { $(this).remove(); });
		$('body').append(ti);
	}
}




//もん娘のステータス表示
function printSt(s){

//	var a1 = fuku(khB[s],ar_room[s][1],fKbp);
//	var a2 = fuku(khH[s],ar_room[s][1],fKhp);
//	var a3 = fuku(khD[s],ar_room[s][0],fKDt);	//調教Speedは部屋レベル依存
//	var a4 = fuku(khJ[s],ar_room[s][0],fKrj);	//回復Speedは部屋レベル依存
//	var a5 = fuku(khK[s],ar_room[s][1],fKka);
//	var a6 = Math.floor(ClMMb*(1+ar_room[s][0]*0.2)*100)/100;
//	var a7 = Math.floor(ClMMh*(1+ar_room[s][0]*0.2)*100)/100;

	var a1 = khB[s];
	var a2 = khH[s];
	var a3 = khD[s];
	var a4 = khJ[s];
	var a5 = khK[s];
	var a6 = ClMMb;
	var a7 = ClMMh;
	var lv = fuku(khKK[s],ar_room[s][1],fKlv);

	$("#stBp1").html(separate(a1));		//最大調教P
	$("#stHp1").html(separate(a2));		//最大HP
	$("#stDt1").html(separate(a3));		//調教Speed
	$("#stRj1").html(separate(a4));		//回復
	$("#stKa1").html(separate(a5));		//売価
	$("#stCTP1").html(separate(a6));		//Click調教Speed
	$("#stCAP1").html(separate(a7));		//Clickダメージ
	$("#stGas1").html(separate(GasP));		//ガス殺傷能力

	var a1b1 = Math.floor(fuku(1000,ar_room[s][1],fKbp) * fuku(1000,ar_room[s][0],fKDh)/1000)/1000;
	var a2b1 = Math.floor(fuku(1000,ar_room[s][1],fKhp))/1000;
	var a3b1 = Math.floor(fuku(1000,ar_room[s][0],fKDt))/1000;
	var a4b1 = Math.floor(fuku(1000,ar_room[s][0],fKrj))/1000;
	var a5b1 = Math.floor(fuku(1000,ar_room[s][1],fKka))/1000;

	var a6b1 = Math.floor(fuku(1000,ar_room[s][0],fKCTP))/1000;
	var a7b1 = Math.floor(fuku(1000,ar_room[s][0],fKCAP))/1000;
	var a8b1 = Math.floor(fuku(1000,ar_room[s][0],fGas))/1000;

	$("#stBp1MR").html(separate(a1b1));		//最大調教P
	$("#stHp1MR").html(separate(a2b1));		//最大HP
	$("#stDt1MR").html(separate(a3b1));		//調教Speed
	$("#stRj1MR").html(separate(a4b1));		//回復
	$("#stKa1MR").html(separate(a5b1));		//売価
	$("#stCTP1MR").html(separate(a6b1));		//Click調教Speed
	$("#stCAP1MR").html(separate(a7b1));		//Clickダメージ
	$("#stGas1MR").html(separate(a8b1));		//ガス殺傷能力


	var BonusM = 1+ar_member[0]*khBnmd;
	var BonusB = 1+ar_member[1]*khBnby;

	//ボーナスポイント 各部屋　0最大HP/1販売価格/2自動調教増加/3自動回復力
	var BonusA2 = ar_BonusR[s][0];
	var BonusA3 = ar_BonusR[s][2];
	var BonusA4 = ar_BonusR[s][3];
	var BonusA5 = ar_BonusR[s][1]*ar_Bonus[1];

	//メイドボーナス
	$("#stDt1m").html( separate(Math.floor(BonusM*1000)/1000) );
	//バイヤーボーナス
	$("#stKa1b").html( separate(Math.floor(BonusB*1000)/1000) );		//売価
	//装備ボーナス
	$("#stCTP1e").html(separate(ar_itemBD[parseFloat(0+ar_my[6])][2]));
	$("#stCAP1e").html(separate(ar_itemBD[parseFloat(0+ar_my[6])][3]));

	//アイテムボーナス
	$("#stHp1i").html( separate(Math.floor(BonusA2*100)/100) );			//最大HP
	$("#stDt1i").html( separate(Math.floor(BonusA3*100)/100) );			//調教Speed
	$("#stRj1i").html( separate(Math.floor(BonusA4*100)/100) );			//回復
	$("#stKa1i").html( separate(Math.floor(BonusA5*100)/100) );			//売価
	$("#stCTP1i").html( separate(Math.floor(ar_Bonus[0]*100)/100) );	//Click調教Speed


	$("#stBp2").html(separate(Math.floor(a1 * a1b1)));									//最大調教P
	$("#stHp2").html(separate(Math.floor(a2 * a2b1 * BonusA2)));				//最大HP
	$("#stDt2").html(separate(Math.floor(a3 * a3b1 * BonusA3*BonusM)));		//調教Speed
	$("#stRj2").html(separate(Math.floor(a4 * a4b1 * BonusA4)));				//回復
	$("#stKa2").html(separate(Math.floor(a5 * a5b1 * BonusA5*BonusB)));		//売価

	$("#stCTP2").html(separate(Math.floor(a6 * a6b1 * ar_itemBD[parseFloat(0+ar_my[6])][2]*ar_Bonus[0])));		//Click調教Speed
	$("#stCAP2").html(separate(Math.floor(a7 * a7b1 * ar_itemBD[parseFloat(0+ar_my[6])][3])));					//Clickダメージ
	$("#stGas2MR").html(separate(Math.floor(GasP*a8b1)));		//ガス殺傷能力


	$("#stLv").html(separate(Math.floor(ar_room[s][1])));		//レベル
	$("#kakakuLv").html(separate(Math.floor(lv)));				//購入価格

	$("#rbLV").html(ar_room[s][0]);
	$("#rbLVUp").html(separate(Math.floor(fuku(khR[s],ar_room[s][0],fKRm))));

}

//もん娘のステータスとアイテム切り替え
function funMMst(s){
	if(s_flg==0){
		s_flg=1;


		if(s==4){
			$('#mm_select1').html('<img src="m_img/mm_select1.jpg">');
			$('#mm_select2').html('<img src="m_img/mm_select2r.jpg">');
			$('#mm_select3').html('<img src="m_img/mm_select3.jpg">');
			$('#mm_select4').html('<img src="m_img/mm_select4ron.jpg">');


			if(ar_GasOnOff[roomno]==0){
				$("#gas_switch_on").css('background-color','#dddddd');
				$("#gas_switch_off").css('background-color','#ff4500');

			}else{
				$("#gas_switch_on").css('background-color','#ff4500');
				$("#gas_switch_off").css('background-color','#dddddd');

			}
			$("#onnen").slideUp('normal');
			$("#status1").slideUp('normal');
			$("#status2").slideUp('normal');
			$("#status3").slideUp('normal');
			$("#status4").slideUp('normal');
			$("#status5").slideUp('normal');
			$("#gas1").slideDown('normal');


		} else if(s==3){
			$('#mm_select1').html('<img src="m_img/mm_select1.jpg">');
			$('#mm_select2').html('<img src="m_img/mm_select2r.jpg">');
			$('#mm_select3').html('<img src="m_img/mm_select3on.jpg">');
			$('#mm_select4').html('<img src="m_img/mm_select4r.jpg">');
			$("#gas1").slideUp('normal');
			$("#onnen").slideUp('normal');
			setTimeout(function() {$("#status1").slideUp('normal');},400);
			setTimeout(function() {$("#status2").slideUp('fast');},240);
			setTimeout(function() {$("#status3").slideUp('fast');},120);
			setTimeout(function() {$("#status4").slideUp('fast');},0);
			setTimeout(function() {$("#status5").slideDown('slow');},500);

		} else if(s==2){
			$('#mm_select1').html('<img src="m_img/mm_select1.jpg">');
			$('#mm_select2').html('<img src="m_img/mm_select2ron.jpg">');
			$('#mm_select3').html('<img src="m_img/mm_select3.jpg">');
			$('#mm_select4').html('<img src="m_img/mm_select4r.jpg">');

			$("#status1").slideUp('normal');
			$("#status2").slideUp('normal');
			$("#status3").slideUp('normal');
			$("#status4").slideUp('normal');
			$("#status5").slideUp('normal');
			$("#onnen").slideDown('normal');
			$("#gas1").slideUp('normal');

		} else {
			$('#mm_select1').html('<img src="m_img/mm_select1on.jpg">');
			$('#mm_select2').html('<img src="m_img/mm_select2r.jpg">');
			$('#mm_select3').html('<img src="m_img/mm_select3.jpg">');
			$('#mm_select4').html('<img src="m_img/mm_select4r.jpg">');
			$("#gas1").slideUp('normal');
			$("#onnen").slideUp('normal');
			setTimeout(function() {$("#status1").slideDown('normal');},200);
			setTimeout(function() {$("#status2").slideDown('slow');},360);
			setTimeout(function() {$("#status3").slideDown('slow');},480);
			setTimeout(function() {$("#status4").slideDown('slow');},600);
			setTimeout(function() {$("#status5").slideUp('fast');},0);
		}

		setTimeout(function() {s_flg=0;},650);			//連打バグ防止用

	}
}

//ガス室ONOFF
function funGasOnOff(s){
	if(s==1){
		ar_GasOnOff[roomno]=1;
		$("#gas_switch_on").css('background-color','#ff4500');
		$("#gas_switch_off").css('background-color','#dddddd');
	}else{
		ar_GasOnOff[roomno]=0;
		$("#gas_switch_on").css('background-color','#dddddd');
		$("#gas_switch_off").css('background-color','#ff4500');
	}
}




// スライド
function funSlide(){
	$(".nameS").click(function () {

		var a = '';
		a = $(this)[0].id.split(" ")[0];	//MouseOverしているIDを取得
		a = parseFloat(0+a.split("name")[1]);

		if(ar_room[a][0]>0){
			roomno=a;

			$("#status1").css('display','none');
			$("#status2").css('display','none');
			$("#status3").css('display','none');
			$("#status4").css('display','none');
			$("#status5").css('display','none');




			setTimeout(function() {$("#status1").slideDown('normal');},300);
			setTimeout(function() {$("#status2").slideDown('slow');},460);
			setTimeout(function() {$("#status3").slideDown('slow');},580);
			setTimeout(function() {$("#status4").slideDown('slow');},700);
			$("#gas1").css('display','none');
			$("#onnen").css('display','none');


			$('#mm_select1').html('<img src="m_img/mm_select1on.jpg">');
			$('#mm_select2').html('<img src="m_img/mm_select2r.jpg">');
			$('#mm_select3').html('<img src="m_img/mm_select3.jpg">');
			$('#mm_select4').html('<img src="m_img/mm_select4r.jpg">');

			$("#status_img_set").css('display','block');
			$("#status_img_set2").css('display','none');
			change_flg=0;


			//画像と声の購入チェック
			if(ar_itemP[a][0]==1){
				$("#openMMitem1").css('display','block');
				$("#openMMitem2").css('display','none');
			}else{
				$("#openMMitem1").css('display','none');
				$("#openMMitem2").css('display','block');
				$("#MMpicturePrice").html(separate(ar_MMitem[a][0]));
			}

			//音声の表示
			for(var i=1;i<=5;i++){
				if(ar_itemP[a][i]==1){
					
					$('#audio_ic'+i).html('<img src="m_img/audio.png">');
					$('#audio_tt'+i).html('<audio src="m_mp3/mm'+a+'_s'+i+'_'+key.substring(a, a+3)+key2.substring(i, i+3)+'.mp3" preload="none" controls style="width:400px;"></audio>');
				}else{
					var txt='';
					if(i==1){txt+=khName[a]+' voice (Japanese)<br>';}
					if(i==2){txt+='Shipments (Japanese) 1,000<br>';}
					if(i==3){txt+='Shipments (Japanese) 10,000<br>';}
					if(i==4){txt+='Killed (Japanese) 100<br>';}
					if(i==5){txt+='Killed (Japanese) 1,000<br>';}
					txt+='Unlock '+separate(ar_MMitem[a][i])+' Gold';
					$('#audio_tt'+i).html(txt);
					$('#audio_ic'+i).html('<img src="m_img/padlock.png" style="cursor:pointer;">');
				}
			}


			//ステータス代入
			$("#status_img_set").html('<img src="m_img/tt'+a+'.png">');
			$("#Mname").html(khName[a]);	//名前
			$("#stText").html(khText[a]);	//説明文
			printSt(a);						//ステータスの数値

			$("#area_room").slideToggle();
			$("#area_status").slideToggle();


			OnnenPrint();
		}
	});

	$("#status_img_set").click(function () {
		$("#area_room").slideToggle();
		$("#area_status").slideToggle();
	});

	$('#mn1').click(function(){
		$('#area_room').slideDown('slow');
		$('#area_status').slideUp('slow');

		$('#area1').slideDown('slow');
		$('#area2').slideUp('slow');
		$('#area3').slideUp('slow');
		$('#area4').slideUp('slow');
		$('#area5').slideUp('slow');
		$('#area6').slideUp('slow');
		$('#area7').slideUp('slow');
		$('#area8').slideUp('slow');
		$('#area9').slideUp('slow');
		$('#area10').slideUp('slow');
		$('#area11').slideUp('slow');
		$('#area12').slideUp('slow');

		$("#rb1").css('display','none');
		$("#rb2").css('display','none');
		$("#rb3").css('display','none');
		$("#rb4").css('display','none');
		$("#rb5").css('display','none');
		$("#rb6").css('display','none');
		$("#rb7").css('display','none');
		$("#rb8").css('display','none');
		$("#rb9").css('display','none');
		$("#rb10").css('display','none');
		$("#rb11").css('display','none');
		$("#rb12").css('display','none');
		setTimeout(function() {$("#rb1").slideDown('normal');},0);
		setTimeout(function() {$("#rb2").slideDown('normal');},0);
		setTimeout(function() {$("#rb3").slideDown('normal');},0);
		setTimeout(function() {$("#rb4").slideDown('normal');},150);
		setTimeout(function() {$("#rb5").slideDown('normal');},150);
		setTimeout(function() {$("#rb6").slideDown('normal');},150);
		setTimeout(function() {$("#rb7").slideDown('normal');},300);
		setTimeout(function() {$("#rb8").slideDown('normal');},300);
		setTimeout(function() {$("#rb9").slideDown('normal');},300);
		setTimeout(function() {$("#rb10").slideDown('normal');},450);
		setTimeout(function() {$("#rb11").slideDown('normal');},450);
		setTimeout(function() {$("#rb12").slideDown('normal');},450);
	});
	$('#mn2').click(function(){

		MaidBuyer();

		$('#area1').slideUp('slow');
		$('#area2').slideDown('slow');
		$('#area3').slideUp('slow');
		$('#area4').slideUp('slow');
		$('#area5').slideUp('slow');
		$('#area6').slideUp('slow');
		$('#area7').slideUp('slow');
		$('#area8').slideUp('slow');
		$('#area9').slideUp('slow');
		$('#area10').slideUp('slow');
		$('#area11').slideUp('slow');
		$('#area12').slideUp('slow');

	});
	$('#mn3').click(function(){
		$('#itemData1').html('');
		$('#itemData2').html('');
		$('.itemMemo').html('');
		ItemPrint();	//アイテム表示
		$('#area1').slideUp('slow');
		$('#area2').slideUp('slow');
		$('#area3').slideDown('slow');
		$('#area4').slideUp('slow');
		$('#area5').slideUp('slow');
		$('#area6').slideUp('slow');
		$('#area7').slideUp('slow');
		$('#area8').slideUp('slow');
		$('#area9').slideUp('slow');
		$('#area10').slideUp('slow');
		$('#area11').slideUp('slow');
		$('#area12').slideUp('slow');
	});
	$('#mn4').click(function(){
		$('#itemData1').html('');
		$('#itemData2').html('');
		$('.itemMemo').html('');
		ItemPrint();	//アイテム表示
		$('#area1').slideUp('slow');
		$('#area2').slideUp('slow');
		$('#area3').slideUp('slow');
		$('#area4').slideDown('slow');
		$('#area5').slideUp('slow');
		$('#area6').slideUp('slow');
		$('#area7').slideUp('slow');
		$('#area8').slideUp('slow');
		$('#area9').slideUp('slow');
		$('#area10').slideUp('slow');
		$('#area11').slideUp('slow');
		$('#area12').slideUp('slow');
	});
	$('#mn5').click(function(){
		$('#itemData1').html('');
		$('#itemData2').html('');
		$('.itemMemo').html('');
		ItemPrint();	//アイテム表示
		$('#area1').slideUp('slow');
		$('#area2').slideUp('slow');
		$('#area3').slideUp('slow');
		$('#area4').slideUp('slow');
		$('#area5').slideDown('slow');
		$('#area6').slideUp('slow');
		$('#area7').slideUp('slow');
		$('#area8').slideUp('slow');
		$('#area9').slideUp('slow');
		$('#area10').slideUp('slow');
		$('#area11').slideUp('slow');
		$('#area12').slideUp('slow');
	});
	$('#mn6').click(function(){
		save();
		$('#area1').slideUp('slow');
		$('#area2').slideUp('slow');
		$('#area3').slideUp('slow');
		$('#area4').slideUp('slow');
		$('#area5').slideUp('slow');
		$('#area6').slideDown('slow');
		$('#area7').slideUp('slow');
		$('#area8').slideUp('slow');
		$('#area9').slideUp('slow');
		$('#area10').slideUp('slow');
		$('#area11').slideUp('slow');
		$('#area12').slideUp('slow');
	});
	$('#mn7').click(function(){
		$('#area1').slideUp('slow');
		$('#area2').slideUp('slow');
		$('#area3').slideUp('slow');
		$('#area4').slideUp('slow');
		$('#area5').slideUp('slow');
		$('#area6').slideUp('slow');
		$('#area7').slideDown('slow');
		$('#area8').slideUp('slow');
		$('#area9').slideUp('slow');
		$('#area10').slideUp('slow');
		$('#area11').slideUp('slow');
		$('#area12').slideUp('slow');
	});
	$('#mn8').click(function(){
		$('#area1').slideUp('slow');
		$('#area2').slideUp('slow');
		$('#area3').slideUp('slow');
		$('#area4').slideUp('slow');
		$('#area5').slideUp('slow');
		$('#area6').slideUp('slow');
		$('#area7').slideUp('slow');
		$('#area8').slideDown('slow');
		$('#area9').slideUp('slow');
		$('#area10').slideUp('slow');
		$('#area11').slideUp('slow');
		$('#area12').slideUp('slow');
	});
	$('#mn9').click(function(){
		//掲示板
		document.getElementById("ifre").src = "../bbs/simple.php?cd=gah2";
		$('#area1').slideUp('slow');
		$('#area2').slideUp('slow');
		$('#area3').slideUp('slow');
		$('#area4').slideUp('slow');
		$('#area5').slideUp('slow');
		$('#area6').slideUp('slow');
		$('#area7').slideUp('slow');
		$('#area8').slideUp('slow');
		$('#area9').slideDown('slow');
		$('#area10').slideUp('slow');
		$('#area11').slideUp('slow');
		$('#area12').slideUp('slow');
	});
	$('#mn10').click(function(){
		//掲示板
		document.getElementById("ifre").src = "../bbs/simple.php?cd=gah2";
		$('#area1').slideUp('slow');
		$('#area2').slideUp('slow');
		$('#area3').slideUp('slow');
		$('#area4').slideUp('slow');
		$('#area5').slideUp('slow');
		$('#area6').slideUp('slow');
		$('#area7').slideUp('slow');
		$('#area8').slideUp('slow');
		$('#area9').slideUp('slow');
		$('#area10').slideDown('slow');
		$('#area11').slideUp('slow');
		$('#area12').slideUp('slow');
	});
	$('#mn11').click(function(){
		//広告
		$('#area1').slideUp('slow');
		$('#area2').slideUp('slow');
		$('#area3').slideUp('slow');
		$('#area4').slideUp('slow');
		$('#area5').slideUp('slow');
		$('#area6').slideUp('slow');
		$('#area7').slideUp('slow');
		$('#area8').slideUp('slow');
		$('#area9').slideUp('slow');
		$('#area10').slideUp('slow');
		$('#area11').slideDown('slow');
		$('#area12').slideUp('slow');
	});
	$('#mn12').click(function(){
		//広告
		$('#area1').slideUp('slow');
		$('#area2').slideUp('slow');
		$('#area3').slideUp('slow');
		$('#area4').slideUp('slow');
		$('#area5').slideUp('slow');
		$('#area6').slideUp('slow');
		$('#area7').slideUp('slow');
		$('#area8').slideUp('slow');
		$('#area9').slideUp('slow');
		$('#area10').slideUp('slow');
		$('#area11').slideUp('slow');
		$('#area12').slideDown('slow');
	});
}

//調教部屋とメイドとバイヤーと画像＆声が購入可能かどうか？
function funBuyMBck(){
	var k = 0;
	k = fuku(khKK[roomno],ar_room[roomno][1],fKlv);
	if(ar_my[0]>=k){
		$('#mLvUp img').css('-khtml-opacity' , 1);
		$('#mLvUp img').css('-moz-opacity' , 1);
		$('#mLvUp img').css('opacity' , 1);
	}else{
		$('#mLvUp img').css('-khtml-opacity' , 0.5);
		$('#mLvUp img').css('-moz-opacity' , 0.5);
		$('#mLvUp img').css('opacity' , 0.5);
		$('#mLvUp img').attr('src', 'm_img/btm_lv_m1e.png');
	}
	k = fuku(khR[roomno],ar_room[roomno][0],fKRm);
	if(ar_my[0]>=k){
		$('#rLvUp img').css('-khtml-opacity' , 1);
		$('#rLvUp img').css('-moz-opacity' , 1);
		$('#rLvUp img').css('opacity' , 1);
	}else{
		$('#rLvUp img').css('-khtml-opacity' , 0.5);
		$('#rLvUp img').css('-moz-opacity' , 0.5);
		$('#rLvUp img').css('opacity' , 0.5);
		$('#rLvUp img').attr('src', 'm_img/btm_lv_r1e.png');
	}
	k = fuku(khKKmd,ar_member[0],fKmd);
	if(ar_my[0]>=k){
		$('#bt_maid img').css('-khtml-opacity' , 1);
		$('#bt_maid img').css('-moz-opacity' , 1);
		$('#bt_maid img').css('opacity' , 1);
	}else{
		$('#bt_maid img').css('-khtml-opacity' , 0.5);
		$('#bt_maid img').css('-moz-opacity' , 0.5);
		$('#bt_maid img').css('opacity' , 0.5);
		$('#bt_maid img').attr('src', 'm_img/bt_maid1.png');
	}
	k = fuku(khKKby,ar_member[1],fKby);
	if(ar_my[0]>=k){
		$('#bt_buyer img').css('-khtml-opacity' , 1);
		$('#bt_buyer img').css('-moz-opacity' , 1);
		$('#bt_buyer img').css('opacity' , 1);
	}else{
		$('#bt_buyer img').css('-khtml-opacity' , 0.5);
		$('#bt_buyer img').css('-moz-opacity' , 0.5);
		$('#bt_buyer img').css('opacity' , 0.5);
		$('#bt_buyer img').attr('src', 'm_img/bt_buy1.png');
	}

	if(roomno>0){
		k = ar_MMitem[roomno][0];
		if(ar_my[0]>=k){
			$('#mm_padlock').css('-khtml-opacity' , 1);
			$('#mm_padlock').css('-moz-opacity' , 1);
			$('#mm_padlock').css('opacity' , 1);
		}else{
			$('#mm_padlock').css('-khtml-opacity' , 0.5);
			$('#mm_padlock').css('-moz-opacity' , 0.5);
			$('#mm_padlock').css('opacity' , 0.5);
		}
		for(i=1;i<=5;i++){
			if(ar_itemP[roomno][i]==0){
				k = ar_MMitem[roomno][i];
				if(ar_my[0]>=k){
					$('#audio_ic'+i+' img').css('-khtml-opacity' , 1);
					$('#audio_ic'+i+' img').css('-moz-opacity' , 1);
					$('#audio_ic'+i+' img').css('opacity' , 1);
				}else{
					$('#audio_ic'+i+' img').css('-khtml-opacity' , 0.5);
					$('#audio_ic'+i+' img').css('-moz-opacity' , 0.5);
					$('#audio_ic'+i+' img').css('opacity' , 0.5);
				}
			}
		}
	}


	for(i=1;i<=12;i++){
		if(ar_room[i][0]=='0'){
			if(ar_my[0]>=khR[i]){
				$('#rb'+i).css('-moz-opacity',1);
				$('#rb'+i).css('opacity',1);
			}else{
				$('#rb'+i).css('-moz-opacity',0.7);
				$('#rb'+i).css('opacity',0.7);
			}
		}
	}


}

function funBuyOnMs(s){
	if(s==1){
		k = fuku(khKKmd,ar_member[0],fKmd);
		if(ar_my[0]>=k){
			$('#bt_maid img').attr('src', 'm_img/bt_maid2.png');
		}
	}
	if(s==2){
		k = fuku(khKKby,ar_member[1],fKby);
		if(ar_my[0]>=k){
			$('#bt_buyer img').attr('src', 'm_img/bt_buy2.png');
		}
	}
}




//メイドとバイヤー購入
function funBuyMB(s){
	var k=0;
	if(s==1){
		k = fuku(khKKmd,ar_member[0],fKmd);
		if(ar_my[0]>=k){
			ar_member[0]++;
			ar_my[0]=ar_my[0]-k;
			$('#bt_maid').animate({'top':-5},50).animate({'top':0},50);
			MaidBuyer();
			fun_print();	//出力

		}
	}
	if(s==2){
		k = fuku(khKKby,ar_member[1],fKby);
		if(ar_my[0]>=k){
			ar_member[1]++;
			ar_my[0]=ar_my[0]-k;
			$('#bt_buyer').animate({'top':-5},50).animate({'top':0},50);
			MaidBuyer();
			fun_print();	//出力
		}
	}
}

//メイドとバイヤー更新
function MaidBuyer(){
	var m = fuku(khKKmd,ar_member[0],fKmd);
	var b = fuku(khKKby,ar_member[1],fKby);

	m = Math.floor(m);
	b = Math.floor(b);

	$("#kakaku_md").html(separate(m)+' Gold');
	$("#kakaku_by").html(separate(b)+' Gold');

	var t='';
	var top=0;
	var left=0;
	for(var i=1;i<=ar_member[0];i++){
		top = Math.floor(Math.random()*20);
		t += '<div class="myroom_mid" style="position: absolute;z-index:200;top:'+top+'px;left:'+left+'px;width:85px;height:200px;"></div>';
		left=40*i+Math.floor(Math.random()*20);
	}
	top=0;
	left=0;
	$('#print_maid').html(t);
	t='';
	for(var i=1;i<=ar_member[1];i++){
		top = Math.floor(Math.random()*20);
		t += '<div class="myroom_bay" style="position: absolute;z-index:200;top:'+top+'px;left:'+left+'px;width:63px;height:200px;"></div>';
		left=40*i+Math.floor(Math.random()*20);
	}
	$('#print_buyer').html(t);
}

//怨念がおんねんね
function OnnenPrint(){
	var OnnenInt = ar_Onnen[roomno];
	$('.onnenboll').remove();
	for(var i=1;i<=OnnenInt;i++){
		var x = Math.floor(Math.random()*360);
		var y = Math.floor(Math.random()*400);
		var ahe = $('<div>').append($('<img>').attr('src', 'm_img/onnen.png').css('zoom', 0.6).css('-moz-transform', 'scale(0.6,0.6)'));
		ahe.addClass('onnenboll');
		ahe.css('left', x);
		ahe.css('top' , y);
		ahe.css('position' , 'absolute');
		ahe.css('z-index' , '500');
		ahe.css('-khtml-opacity' , 0.8);
		ahe.css('-moz-opacity' , 0.8);
		ahe.css('opacity' , 0.8);
		if(change_flg==0){
			$('#status_img_set').append(ahe);
		}else{
			$('#status_img_set2').append(ahe);
		}
	}
	$('#onnen_cnt').html(OnnenInt);

	$('#onnen1').html(DeathP);
	$('#onnen2').html(fuku(DeathP,ar_Onnen[roomno],fOnnen));

}
//おんねんたいじするねん
function OnnenFabu(){
	if(ar_Onnen[roomno]>0){
		//ファブったら、体力回復
		khDamage[roomno]=0;
		ar_Onnen[roomno]--;
		OnnenPrint();
	}
}

//画像/ボイス購入
function funBuyMMitem(s){
	if(ar_itemP[roomno][s]==0){
		var k = ar_MMitem[roomno][s];
		var okf = 1;

		if(s==2 && ar_room[roomno][4] < 1000) {okf = 0;}		//出荷1000
		if(s==3 && ar_room[roomno][4] < 10000){okf = 0;}		//出荷10000
		if(s==4 && ar_room[roomno][5] < 100)  {okf = 0;}		//虐殺100
		if(s==5 && ar_room[roomno][5] < 1000) {okf = 0;}		//虐殺1000

		if(ar_my[0]>=k && okf==1){
			ar_itemP[roomno][s]=1;
			ar_my[0]=ar_my[0]-k;

			if(s==0){
				$('#openMMitem2').slideUp('slow');
				setTimeout(function() {$('#openMMitem1').slideDown('normal');},250);
			}else{
				$('#audio_box'+s).slideUp('fast');
				setTimeout(function() {
					$('#audio_ic'+s).html('<img src="m_img/audio.png">');
					$('#audio_tt'+s).html('<audio src="m_mp3/mm'+roomno+'_s'+s+'_'+key.substring(roomno, roomno+3)+key2.substring(s, s+3)+'.mp3" preload="none" controls style="width:400px;"></audio>');
					$('#audio_box'+s).slideDown('slow');
				},400);
			}
		}


	}
}


function funChangeImg(){
	if(s_flg==0){
		s_flg=1;

		if(change_flg==0){
			$("#status_img_set2").html('<img src="m_img/md'+roomno+'.png" style="position: relative;top:0;left:0;">');
			$('#status_img_set').slideUp('slow');
			setTimeout(function() {$('#status_img_set2').slideDown('slow');},250);
			brbr_cnt=0;
			change_flg=1;
		}else{
			$('#status_img_set2').slideUp('slow');
			setTimeout(function() {$('#status_img_set').slideDown('slow');},250);
			change_flg=0;
		}

		setTimeout(function() {s_flg=0;},350);			//連打バグ防止用

	}
	OnnenPrint();
}

//拡大ページのぶるぶる
function funBuruBuru2(b){
	if(brbr_cnt==20){
		ar_room[roomno][5]++;		//虐殺
		ar_Onnen[roomno]++;
		khDamage[roomno]=fuku(DeathP,ar_Onnen[roomno],fOnnen);
		$("#status_img_set2").html('<img src="m_img/rip.png" style="position: relative;top:0;left:0;">');
		funClA2();
		brbr_cnt++;

		if(se == 1){
			var dks_i = '';
			if(roomno==3){dks_i = Math.floor(Math.random()*3)+1;}
			if(roomno==4){dks_i = Math.floor(Math.random()*6)+1;}
			if(roomno==6){dks_i = Math.floor(Math.random()*3)+1;}
			document.getElementById('mm'+roomno+'_d'+dks_i).play();
		}



		OnnenPrint();

	}else if(brbr_cnt<20){
		var r1 = Math.floor(Math.random()*6)-3;
		var r2 = Math.floor(Math.random()*6)-3;
		$('#status_img_set2 img').css('top',r1);
		$('#status_img_set2 img').css('left',r2);
		b++;
		if(b<7){
			setTimeout(function() {funBuruBuru2(b);},20);
		}else{
			$('#status_img_set2 img').css('top',0);
			$('#status_img_set2 img').css('left',0);
			funClA2();
			brbr_cnt++;

			if(se == 1){
				var an = Math.floor(Math.random()*12)+1;
				document.getElementById('mm'+roomno+'_a'+an).play();
			}
		}
	}
}
//拡大ページの「あ」表示
function funClA2(){
	var x = parseInt(Math.random() * 380 * (260/380));
	var y = parseInt(Math.random() * 500);
	var zoom = 0.5 + Math.random() * 0.8;
	if(brbr_cnt==20){
		//「デュクシ」表示
		var ahe = $('<div>').append($('<img>').attr('src', 'm_img/dks.png').css('zoom', 1.5).css('-moz-transform', 'scale(1.5,1.5)'));
		ahe.css('left', x);
		ahe.css('top' , y);
		ahe.css('position' , 'absolute');
		ahe.css('z-index' , '10000');
		ahe.css('-khtml-opacity' , 0.8);
		ahe.css('-moz-opacity' , 0.8);
		ahe.css('opacity' , 0.8);
		ahe.hide().fadeIn(1).animate({ top: y - 80},{duration:1500,queue:false}).fadeOut(1200, function () { $(this).remove(); });
	}else if(brbr_cnt<20){
		//「あ」表示
		var ahe = $('<div>').append($('<img>').attr('src', 'm_img/a.png').css('zoom', zoom).css('-moz-transform', 'scale(' + zoom + ',' + zoom + ')'));
		ahe.css('left', x+10);
		ahe.css('top' , y);
		ahe.css('position' , 'absolute');
		ahe.css('z-index' , '10000');
		ahe.css('-khtml-opacity' , 0.8);
		ahe.css('-moz-opacity' , 0.8);
		ahe.css('opacity' , 0.8);
		ahe.hide().fadeIn(1).animate({ top: y - 50},{duration:900,queue:false}).fadeOut(600, function () { $(this).remove(); });
	}
	$('#status_img_set2').append(ahe);
}


//アイテムデータを表示するよー
function ItemPrint(){
	var t0r='';
	var t0='';
	var t1='';
	var t2='';
	var cntH = 0;		//総販売数
	var cntB = 0;		//総虐殺数
	var cntR = 0;		//ルームを開放した数

	t0r += '<div class="itembox" onmouseover="funItemText0('+ar_my[6]+');"><img src="m_img/itemB'+ar_my[6]+'.png"></div>';

	//装備品
	for(var i=0;i<=9;i++){
		if(ar_itemB[i]=='1'){
			t0 += '<div class="itembox" onmouseover="funItemText0('+i+');" OnClick="funItemSet('+i+');"><img src="m_img/itemB'+i+'.png"></div>';
		}else{
			t1 += '<div class="itembox" onmouseover="funItemText0('+i+');" OnClick="funItemBuy(0,'+i+',0);"><img src="m_img/itemB'+i+'.png"></div>';
		}
	}

	var ck = 0;
	for(var i=1;i<=12;i++){
		for(var ii=0;ii<=11;ii++){
			if(ar_itemM[i][ii]=='1'){
				t2 += '<div class="itembox" onmouseover="funItemText1('+i+','+ii+');"><img src="m_img/itemM'+i+'_'+ii+'.png"></div>';
			}else{
				ck = 0;
				if(ii<=3  && parseFloat(0+ar_room[i][0])>0){ck = 1;}		//0-3 該当ルームが解放されている
				if(ii==4  && parseFloat(0+ar_room[i][4])>=25){ck = 1;}		//4：販売25
				if(ii==5  && parseFloat(0+ar_room[i][4])>=50){ck = 1;}		//5：販売50
				if(ii==6  && parseFloat(0+ar_room[i][4])>=75){ck = 1;}		//6：販売75
				if(ii==7  && parseFloat(0+ar_room[i][4])>=100){ck = 1;}		//7：販売100
				if(ii==8  && parseFloat(0+ar_room[i][5])>=20){ck = 1;}		//8：虐殺20
				if(ii==9  && parseFloat(0+ar_room[i][5])>=50){ck = 1;}		//9：虐殺50
				if(ii==10 && parseFloat(0+ar_room[i][5])>=100){ck = 1;}		//10：虐殺100
				if(ii==11 && parseFloat(0+ar_room[i][5])>=200){ck = 1;}		//11：虐殺200
				if(ck==1){
					t1 += '<div class="itembox" onmouseover="funItemText1('+i+','+ii+');" OnClick="funItemBuy(1,'+i+','+ii+');"><img src="m_img/itemM'+i+'_'+ii+'.png"></div>';
				}
			}
		}
		//ついでに、総販売数と総虐殺数をここでカウントしておく
		cntH=cntH+parseFloat(0+ar_room[i][4]);
		cntB=cntB+parseFloat(0+ar_room[i][5]);
		if(parseFloat(0+ar_room[i][0])>0){cntR++;}
	}

	for(var i=0;i<=15;i++){
		if(ar_itemX[i]=='1'){
			t2 += '<div class="itembox" onmouseover="funItemText2('+i+');"><img src="m_img/itemX'+i+'.png"></div>';
		}else{
			ck = 0;
			if(i==0  && parseFloat(0+ar_my[2])>=1000000){ck = 1;}				//0：総額100万以上
			if(i==1  && parseFloat(0+ar_my[2])>=100000000){ck = 1;}			//1：総額１億以上
			if(i==2  && parseFloat(0+ar_my[2])>=1000000000000){ck = 1;}		//2：総額１兆以上
			if(i==3  && parseFloat(0+ar_my[2])>=10000000000000000){ck = 1;}	//3：総額１京以上
			if(i==4  && parseFloat(0+ar_my[3])>=1000){ck = 1;}					//4：クリック千以上
			if(i==5  && parseFloat(0+ar_my[3])>=10000){ck = 1;}				//5：クリック１万以上
			if(i==6  && parseFloat(0+ar_my[3])>=100000){ck = 1;}				//6：クリック１０万以上
			if(i==7  && parseFloat(0+ar_my[3])>=1000000){ck = 1;}				//7：クリック１００万以上

			if(i==8  && cntH>=100){ck = 1;}		// 8：奴隷販売100以上
			if(i==9  && cntH>=1000){ck = 1;}		// 9：奴隷販売1000以上
			if(i==10 && cntH>=10000){ck = 1;}	//10：奴隷販売10000以上
			if(i==11 && cntH>=100000){ck = 1;}	//11：奴隷販売100000以上
			if(i==12 && cntB>=10){ck = 1;}		//12：虐殺10以上
			if(i==13 && cntB>=50){ck = 1;}		//13：虐殺50以上
			if(i==14 && cntB>=200){ck = 1;}		//14：虐殺200以上
			if(i==15 && cntB>=500){ck = 1;}		//15：虐殺500以上
			if(ck==1){
				t1 += '<div class="itembox" onmouseover="funItemText2('+i+');" OnClick="funItemBuy(2,'+i+',0);"><img src="m_img/itemX'+i+'.png"></div>';
			}
		}
	}
	for(var i=0;i<=8;i++){
		if(ar_itemA[i]=='1'){
			t2 += '<div class="itembox" onmouseover="funItemText3('+i+');"><img src="m_img/itemA'+i+'.png"></div>';
		}else{
			ck = 0;
			if(i==0 && cntR==r){ck = 1;}						//0：ルーム全解放
			if(i==1 && parseFloat(0+ar_my[4])>= 10){ck = 1;}		//1：あへ10以上
			if(i==2 && parseFloat(0+ar_my[4])>= 50){ck = 1;}		//2：あへ50以上
			if(i==3 && parseFloat(0+ar_my[4])>=100){ck = 1;}		//3：あへ100以上
			if(i==4 && parseFloat(0+ar_my[4])>=200){ck = 1;}		//4：あへ200以上
			if(i==5 && parseFloat(0+ar_my[5])>= 10){ck = 1;}		//5：皆殺し10以上
			if(i==6 && parseFloat(0+ar_my[5])>= 50){ck = 1;}		//6：皆殺し50以上
			if(i==7 && parseFloat(0+ar_my[5])>=100){ck = 1;}		//7：皆殺し100以上
			if(i==8 && parseFloat(0+ar_my[5])>=200){ck = 1;}		//8：皆殺し200以上
			if(ck==1){
				t1 += '<div class="itembox" onmouseover="funItemText3('+i+');" OnClick="funItemBuy(3,'+i+',0);"><img src="m_img/itemA'+i+'.png"></div>';
			}
		}
	}

	$('#itemData0r').html(t0r);
	$('#itemData0').html(t0);
	$('#itemData1').html(t1);
	$('#itemData2').html(t2);
}

//装備
function funItemSet(a){
	ar_my[6] = a;
	fun_print();	//出力
	ItemPrint();
}

//アイテム購入
function funItemBuy(a,b,c){
	if(a==0){
		if(ar_itemBD[b][4]>=parseFloat(0+ar_my[0])){
		}else{
			ar_my[0]=parseFloat(0+ar_my[0])-ar_itemBD[b][4];
			ar_itemB[b]=1;
		}
	}
	if(a==1){
		if(ar_itemKKM[b][c]>=parseFloat(0+ar_my[0])){
			$('.itemMemo').html(t);
		}else{
			ar_my[0]=parseFloat(0+ar_my[0])-ar_itemKKM[b][c];
			ar_itemM[b][c]=1;
		}
	}
	if(a==2){
		if(ar_itemKKX[b]>=parseFloat(0+ar_my[0])){
		}else{
			ar_my[0]=parseFloat(0+ar_my[0])-ar_itemKKX[b];
			ar_itemX[b]=1;
		}
	}
	if(a==3){
		if(ar_itemKKA[b]>=parseFloat(0+ar_my[0])){
		}else{
			ar_my[0]=parseFloat(0+ar_my[0])-ar_itemKKA[b];
			ar_itemA[b]=1;
		}
	}
	fun_print();	//出力
	ItemPrint();
}


//アイテムデータを表示するよー
function funItemText0(a){
	var t=''
	t='Fitment : '+ar_itemBD[parseFloat(a)][0]+'<br>';
	t=t+'Torture Rate : '+ar_itemBD[parseFloat(a)][2]+'<br>';
	t=t+'Damage : '+ar_itemBD[parseFloat(a)][3]+'<br>';
	t=t+ar_itemBD[parseFloat(a)][1];
	if(ar_itemB[a]=='0'){t=t+'<br>Purchase price '+separate(ar_itemBD[parseFloat(a)][4])+' Gold'}
	$('.itemMemo').html(t);
}
function funItemText1(a,b){
	var t=''
	var ttl=''
	ttl=khName[parseFloat(a)];
	if(b==0){t='Aphrodisiac for '+ttl+'<br>Gets '+ttl+' in the mood<br>Torture Rate multiplied by 1.2';}
	if(b==1){t='Stamina Elixir for '+ttl+'<br>Gives resilency to '+ttl+'<br>Max HP multiplied by 1.5';}
	if(b==2){t='Magic Stone for '+ttl+'<br>Helps '+ttl+' recover faster<br>HP Recovery Rate multiplied by 1.5';}
	if(b==3){t='Ribbon for '+ttl+'<br>Cursed Ribbon that increases the charm for '+ttl+'<br>Selling Price Doubled (multiplied by 2)';}

	if(b==4){t=ttl+' pedigree I<br>Good for you! '+ttl+' was sold 25 times<br>High quality certificate of purebred '+ttl+'<br>Selling Price multiplied by 1.2';}
	if(b==5){t=ttl+' pedigree II<br>Good for you! '+ttl+' was sold 50 times<br>Rare certificate of purebred '+ttl+'<br>Selling Price multiplied by 1.2';}
	if(b==6){t=ttl+' pedigree III<br>Good for you! '+ttl+' was sold 75 times<br>Super Rare certificate of purebred '+ttl+'<br>Selling Price multiplied by 1.2';}
	if(b==7){t=ttl+' pedigree IV<br>Good for you! '+ttl+' was sold 100 times<br>Ultra Rare certificate of purebred '+ttl+'<br>Selling Price multiplied by 1.2';}

	if(b==8){t='Tears of '+ttl+'<br>Good for you! '+ttl+' was killed 20 times<br>The bloody tears of '+ttl+'<br>Max HP doubled (multiplied by 2)';}
	if(b==9){t='Heart of '+ttl+'<br>Good for you! '+ttl+' was killed 50 times<br>Grudge heart of '+ttl+'<br>Max HP doubled (multiplied by 2)';}
	if(b==10){t='Crystal of '+ttl+'<br>Good for you! '+ttl+' was killed 100 times<br>Madness crystal of '+ttl+'<br>Max HP doubled (multiplied by 2)';}
	if(b==11){t='Soul of '+ttl+'<br>Good for you! '+ttl+' was killed 200 times<br>Crazy soul of '+ttl+'<br>Max HP doubled (multiplied by 2)';}
	if(ar_itemM[a][b]=='0'){t=t+'<br>Purchase price '+separate(ar_itemKKM[a][b])+' Gold';}
	$('.itemMemo').html(t);
}
function funItemText2(a){
 
	if(a==0){t='Coin of Happiness<br>Total sales reached 1 million<br>Congrats! Selling price multiplied by '+khItemAllBonusK+'!';}
	if(a==1){t='Bill of Happiness<br>Total sales reached 100 million<br>Congrats! Selling price multiplied by '+khItemAllBonusK+'!';}
	if(a==2){t='the dollar bag of Happiness<br>Total sales reached 1 trillion<br>Congrats! Selling price multiplied by '+khItemAllBonusK+'!';}
	if(a==3){t='bars of Happiness<br>Total sales reached 1 quadrillion<br>Congrats! Selling price multiplied by '+khItemAllBonusK+'!';}

	if(a==4){t='Single click<br>Achievement for reaching 1,000 clicks<br>Congrats! Click Torture Rate multipled by '+khItemAllBonusB+'!';}
	if(a==5){t='Double click<br>Achievement for reaching 10,000 clicks<br>Congrats! Click Torture Rate multipled by '+khItemAllBonusB+'!';}
	if(a==6){t='Triple Click<br>Achievement for reaching 100,000 clicks<br>Congrats! Click Torture Rate multipled by '+khItemAllBonusB+'!';}
	if(a==7){t='Tetris Click<br>Achievement for reaching 1 million clicks<br>Congrats! Click Torture Rate multipled by '+khItemAllBonusB+'!';}

	if(a==8){t='Prosperous business!<br>Achievement for reaching 100 Slave sales<br>Congrats! Selling price multiplied by '+khItemAllBonusK+'!';}
	if(a==9){t='Cold-blooded<br>Achievement for reaching 1,000 Slave sales<br>Congrats! Selling price multiplied by '+khItemAllBonusK+'!';}
	if(a==10){t='What Color is your blood?<br>Achievement for reaching 10,000 Slave sales<br>Congrats! Selling price multiplied by '+khItemAllBonusK+'!';}
	if(a==11){t='... Wind ... come!<br>Achievement for reaching 100,000 Slave sales<br>Congrats! Selling price multiplied by '+khItemAllBonusK+'!';}

	if(a==12){t='Killer!<br>Achievement for killing 10 Slaves<br>Congrats! Selling price multiplied by '+khItemAllBonusK+'!';}
	if(a==13){t='Executioner!<br>Achievement for killing 50 Slaves<br>Congrats! Selling price multiplied by '+khItemAllBonusK+'!';}
	if(a==14){t='Not Human!<br>Achievement for killing 200 Slaves<br>Congrats! Selling price multiplied by '+khItemAllBonusK+'!';}
	if(a==15){t='Devil<br>Achievement for killing 500 Slaves<br>Congrats! Selling price multiplied by '+khItemAllBonusK+'!';}
	if ($('#area4').css('display') == 'block'){t=t+'<br>Purchase price '+separate(ar_itemKKX[a])+' Gold';}

	$('.itemMemo').html(t);
}
function funItemText3(a){
	if(a==0){t='Sold out!<br>Unlocked all the training rooms!<br>Selling price multiplied by '+khItemAllBonusK+'!';}
	if(a==1){t='Ahe!<br>Click Ahe 10 times<br>Selling price multiplied by '+khItemAllBonusK+'!';}
	if(a==2){t='Ahe!Ahe!<br>Click Ahe 50 time<br>Selling price multiplied by '+khItemAllBonusK+'!';}
	if(a==3){t='Ahe!Ahe!Ahe!<br>Click Ahe 100 time<br>Selling price multiplied by '+khItemAllBonusK+'!';}
	if(a==4){t='Ahe!Ahe!Ahe!Ahe!<br>Click Ahe 200 time<br>Selling price multiplied by '+khItemAllBonusK+'!';}

	if(a==5){t='Genocide!<br>Click Massacre 10 times<br>Congrats! Selling price multiplied by '+khItemAllBonusK+'!';}
	if(a==6){t='Extinction crisis!<br>Click Massacre 50 times<br>Congrats! Selling price multiplied by '+khItemAllBonusK+'!';}
	if(a==7){t='Do not regret ?<br>Click Massacre 100 times<br>Congrats! Selling price multiplied by '+khItemAllBonusK+'!';}
	if(a==8){t='Love You<br>Click Massacre 200 times<br>Congrats! Selling price multiplied by '+khItemAllBonusK+'!';}
	if ($('#area4').css('display') == 'block'){t=t+'<br>Purchase price '+separate(ar_itemKKA[a])+' Gold';}
	$('.itemMemo').html(t);
}

// 正規表現でセパレート
function separate(num){
	return String(num).replace( /(\d)(?=(\d\d\d)+(?!\d))/g, '$1,');
}
//複利計算　元となる値,複利回数,係数
function fuku(a,b,c){
	a = a * 10000
	if(b>1){for (var i=1;i<b;i++){a = Math.ceil(a * c);}}
	return Math.floor(a)/10000;
	//1万をかけて割ってるのは、小さい数値だと誤差が大きすぎるため
}



//save
function save(){
	fun_print();
	if($("#room1").html().length>10){
		$('#Version').val(Version);
		$('#form_room1').val($("#room1").html());
		$('#form_room2').val($("#room2").html());
		$('#form_room3').val($("#room3").html());
		$('#form_room4').val($("#room4").html());
		$('#form_room5').val($("#room5").html());
		$('#form_room6').val($("#room6").html());
		$('#form_room7').val($("#room7").html());
		$('#form_room8').val($("#room8").html());
		$('#form_room9').val($("#room9").html());
		$('#form_room10').val($("#room10").html());
		$('#form_room11').val($("#room11").html());
		$('#form_room12').val($("#room12").html());
		$('#form_room13').val($("#room13").html());
		$('#form_room14').val($("#room14").html());
		$('#form_room15').val($("#room15").html());
		$('#form_room16').val($("#room16").html());
		$('#form_room17').val($("#room17").html());
		$('#form_room18').val($("#room18").html());
		$('#form_mydata').val($("#mydata").html());
		$('#form_member').val($("#member").html());
		$('#form_itemM1').val($("#itemM1").html());
		$('#form_itemM2').val($("#itemM2").html());
		$('#form_itemM3').val($("#itemM3").html());
		$('#form_itemM4').val($("#itemM4").html());
		$('#form_itemM5').val($("#itemM5").html());
		$('#form_itemM6').val($("#itemM6").html());
		$('#form_itemM7').val($("#itemM7").html());
		$('#form_itemM8').val($("#itemM8").html());
		$('#form_itemM9').val($("#itemM9").html());
		$('#form_itemM10').val($("#itemM10").html());
		$('#form_itemM11').val($("#itemM11").html());
		$('#form_itemM12').val($("#itemM12").html());
		$('#form_itemX').val($("#itemX").html());
		$('#form_itemA').val($("#itemA").html());
		$('#form_itemB').val($("#itemB").html());
		$('#form_MonItem1').val($("#MonItem1").html());
		$('#form_MonItem2').val($("#MonItem2").html());
		$('#form_MonItem3').val($("#MonItem3").html());
		$('#form_MonItem4').val($("#MonItem4").html());
		$('#form_MonItem5').val($("#MonItem5").html());
		$('#form_MonItem6').val($("#MonItem6").html());
		$('#form_MonItem7').val($("#MonItem7").html());
		$('#form_MonItem8').val($("#MonItem8").html());
		$('#form_MonItem9').val($("#MonItem9").html());
		$('#form_MonItem10').val($("#MonItem10").html());
		$('#form_MonItem11').val($("#MonItem11").html());
		$('#form_MonItem12').val($("#MonItem12").html());
		$('#form_OnnenSet').val($("#OnnenSet").html());
		$('#form').submit();
		setTimeout(function(){$("#save").val($('#data_save').contents().find('body').text());},800);
		ost=180;
	}
}



</script>
<style>
body{
	font-family:"Verdana", "ＭＳ Ｐゴシック","ヒラギノ角ゴPro W3","Hiragino Kaku Gothic Pro", "sans-serif";
	color: #333333;
	margin: 0 auto;
	background-color: #000;
	font-size: 13px;
	height: 100%;
}
h1{margin:0;}
table{margin: 0;padding:0;}
th{text-align:left;padding:2px 5px 0 5px;}
td{text-align:right;padding:2px 5px 0 5px;}
a{color:#FFF462;}
#footer a{color:#0073A8;}
#r18{
	padding:0;
	display:block;
	margin: 0 auto;
	width:903px;
	height:604px;
	text-align:center;
	background-color:#000;
	color:#fff;
}
.r18ck{
	color:#ffff00;
	cursor:pointer;
	text-decoration: underline;
}



#wrap{
	display:none;
	margin: 0 auto;
	width:903px;

}



#area0{
	display:block;
	margin: 0 auto;
	width:903px;
	height:104px;
}
#title{
	float:left;
	width:420px;
}
.bgmb{
	border:1px solid #555;
	padding:0 2px;
	margin:0 1px;
	background-color:#fff;
	font-weight:bold;
	cursor:pointer;
}
#play_bgm0{background-color:#ffa500;}
#play_se0{background-color:#E95388;}




#kingaku{
	float:right;
	width:480px;
	text-align:right;
}
#footer{
	display:block;
	margin: 0 auto;
	width:903px;
	border-top:solid #999 1px;
	text-align:right;
	padding-top:6px;
	margin-top:20px;
}
#area_menu{
	display:block;
	margin: 0 auto;
	width:903px;
	height:22px;
}
.menu{cursor:pointer;font-weight:bold;color:#333;}


.area{
	margin: 0 auto;
	width:903px;
	height:604px;
}

#area1{display:block;}
#area2{display:none;background-color:#000;}
#area3{display:none;background-color:#000;}
#area4{display:none;background-color:#000;}
#area5{display:none;background-color:#000;}
#area6{display:none;background-color:#000;color:#fff}
#area7{display:none;background-color:#000;color:#fff}
#area8{display:none;background-color:#000;color:#fff}
#area9{display:none;background-color:#000;color:#fff}
#area10{display:none;background-color:#000;color:#fff}
#area11{display:none;background-color:#000;color:#fff}
#area12{display:none;background-color:#000;color:#fff}


#area_room{
	display:block;
}
#area_status{
	display:none;
	background-color:#000;
	color:#fff;
}




/* ------------------ */
#area_room{
	margin: 0 auto;
	width:903px;
	height:604px;
}
.room_box{
	float:left;
	width:300px;
	height:150px;
	margin:0 1px 1px 0;
	position: static;
	padding:0;
}

#rb1{background-image:url(m_img/room_b1.png);-moz-opacity:0.7;opacity:0.7;zoom:1;}
#rb2{background-image:url(m_img/room_b1.png);-moz-opacity:0.7;opacity:0.7;zoom:1;}
#rb3{background-image:url(m_img/room_b1.png);-moz-opacity:0.7;opacity:0.7;zoom:1;}
#rb4{background-image:url(m_img/room_b1.png);-moz-opacity:0.7;opacity:0.7;zoom:1;}
#rb5{background-image:url(m_img/room_b1.png);-moz-opacity:0.7;opacity:0.7;zoom:1;}
#rb6{background-image:url(m_img/room_b1.png);-moz-opacity:0.7;opacity:0.7;zoom:1;}
#rb7{background-image:url(m_img/room_b1.png);-moz-opacity:0.7;opacity:0.7;zoom:1;}
#rb8{background-image:url(m_img/room_b1.png);-moz-opacity:0.7;opacity:0.7;zoom:1;}
#rb9{background-image:url(m_img/room_b1.png);-moz-opacity:0.7;opacity:0.7;zoom:1;}
#rb10{background-image:url(m_img/room_b1.png);-moz-opacity:0.7;opacity:0.7;zoom:1;}
#rb11{background-image:url(m_img/room_b1.png);-moz-opacity:0.7;opacity:0.7;zoom:1;}
#rb12{background-image:url(m_img/room_b1.png);-moz-opacity:0.7;opacity:0.7;zoom:1;}





.name{
	float:left;
	width:150px;
	height:25px;
	margin:0;
	padding:0;

}
.Lv{
	float:right;
	width:150px;
	height:25px;
	margin:0;
	padding:0;
	text-align:right;

}
.ig{
	float:left;
	width:100px;
	height:100px;
	margin:0;
	padding:0;
}
.pB{
	float:left;
	width:200px;
	height:25px;
	margin:0;
	padding:0;
}
.pH{
	float:left;
	width:200px;
	height:25px;
	margin:0;
	padding:0;
}
.sS{
	float:left;
	width:200px;
	height:25px;
	margin:0;
	padding:0;
	text-align:right;
}
.sK{
	float:left;
	width:200px;
	height:25px;
	margin:0;
	padding:0;
	text-align:right;
}
.pR{
	float:left;
	width:300px;
	height:25px;
	margin:0;
	padding:0;
	color:#fff;
}


.nameS{margin:5px 0 0 7px;color:#fff;}
.Lvs{margin:5px 7px 0 0;color:#fff;}
.igs{margin:5px 0 0 8px;cursor:pointer;}
.sSs{margin:0 20px 0 0;font-size:19px;}
.sKs{margin:0 20px 0 0;font-size:19px;}
.pRs{margin:4px 0 0 7px;}



.pBs{
	margin:6px 0 0 7px;
	width:185px;
	height:17px;
}
.pHs{
	margin:4px 0 0 7px;
	width:185px;
	height:17px;
}
.myroom_mid{background-image:url(m_img/cc01.png);}
.myroom_bay{background-image:url(m_img/cc02.png);}


#ig_b2{display:none;}
#ig_b3{display:none;}
#ig_b4{display:none;}
#ig_b5{display:none;}
#ig_b6{display:none;}
#ig_b7{display:none;}
#ig_b8{display:none;}
#ig_b9{display:none;}
#ig_b10{display:none;}
#ig_b11{display:none;}
#ig_b12{display:none;}

#ig_d1{display:none;}
#ig_d2{display:none;}
#ig_d3{display:none;}
#ig_d4{display:none;}
#ig_d5{display:none;}
#ig_d6{display:none;}
#ig_d7{display:none;}
#ig_d8{display:none;}
#ig_d9{display:none;}
#ig_d10{display:none;}
#ig_d11{display:none;}
#ig_d12{display:none;}



/* --- status --- */
.waku_dq{
	width:460px;
	margin:5px 0 5px 0;

	border:solid 3px #ffffff;
	border-radius: 10px;			/* CSS3 */
	-webkit-border-radius: 10px;	/* Safari,Chrome */
	-moz-border-radius: 10px;		/* Firefox */
	line-height:17px;
	font-size:15px;
	padding:10px;
}
.waku_dq2{
	width:480px;
	margin:10px 0 0 0;

	line-height:18px;
	font-size:17px;

}





#status_main{
	padding-top:10px;

}


#status_img{
	float:left;
	width:400px;
	height:540px;
	text-align:center;
}
#status_title{
	margin:7px 0 0 20px;
	width:400px;
	text-align:left;

	font-size:17px;
	font-weight:bold;
}
#status_txt{
	float:left;
	width:500px;
	height:540px;
}


#status1{
}
#status2{
}
#status3{
}
#status4{
}
#status5{
}


#buy{
	font-size:19px;
	cursor:pointer;
	font-weight:bold;
	text-decoration: underline;
}




#bosyu{font-weight:bold;}
</style>
<body OnLoad="render();">
<div id="wrap">

<div id="area0">
	<div id="title">
		<h1>MonMusume Clicker</h1>
		<div style="line-height: 100%;height:60px;">

<!--Let shipment by Torture Click the Monster Musume ! To die and too Click!<br>-->
Train the Monster Musume by clicking! But they will die if you click too fast!<br>


		</div>

	</div>
	<div id="kingaku">


		<table align="right">
			<tr valign="top">
				<th>Gold</th>
				<td><span id="yen">0</span></td>
			</tr>
			<tr valign="top">
				<th>Click</th>
				<td><span id="cl">0</span></td>
			</tr>
			<tr valign="top">
				<td colspan="2"><span id="autosave"></span> <a href="mmc.php?la=0" style="color:red;">Japanese</a> | <a href="mmce.php?la=1" style="color:red;">English</a></td>
			</tr>
			<tr valign="top">
				<td colspan="2">

<select id="bgm_set" OnChange='funBgmSelect()'>
	<option value="0">BGM stop</option>
	<option value="1">BGM1</option>
	<option value="2">BGM2</option>
	<option value="3">BGM3</option>
	<option value="4">BGM4</option>
	<option value="5">BGM5</option>
	<option value="6">BGM6</option>
	<option value="7">BGM7</option>
	<option value="8">BGM8</option>
	<option value="9">BGM9</option>
	<option value="10">BGM10</option>
	<option value="11">BGM11</option>
	<option value="12">BGM12</option>
</select> 
					<span class="bgmb" id="play_se0">SE OFF</span>
					<span class="bgmb" id="play_se1">SE ON</span>
				</td>
			</tr>


		</table>
	</div>
</div>


<div id="area_menu">
	<span class="menu" id="mn1">Torture R</span> | 
	<span class="menu" id="mn2">My R</span> | 
	<span class="menu" id="mn3">Equipment</span> | 
	<span class="menu" id="mn4">Shop</span> | 
	<span class="menu" id="mn5">Trophy</span> | 
	<span class="menu" id="mn6">Save&Load</span> | 
	<span class="menu" id="mn7">FAQ</span> | 
	<span class="menu" id="mn8">Credit</span> | 
	<span class="menu" id="mn9">BBS(Jpn)</span> | 
	<span class="menu" id="mn10">Info</span> | 
	<span class="menu" id="mn11">CM</span> | 
	<span class="menu" id="mn12">CM online</span>

</div>

<style>
.ig{
	position: static;

}
.igs{
	position: relative;
	top:0;
	left:0;
	width:90px;
	height:90px;
}



#buy_md:hover{
	background-color:#dddddd;cursor:pointer;
}
#buy_by:hover{
	background-color:#dddddd;cursor:pointer;
}


</style>


<div class="area" id="area1">

	<div class="area" id="area_room">
		<div class="room_box" id="rb1" onSelectStart = "return false;">
			<div class="name"><div class="nameS" id="name1"></div></div>
			<div class="Lv"><div class="Lvs" id="Lv1">Lv1</div></div>
			<div class="ig"><div class="igs" id="ig1"><img src="m_img/an01.gif" id="ig_b1"><img src="m_img/dead.png" id="ig_d1"></div></div>
			<div class="pB"><div class="pBs" id="pB1"></div></div>
			<div class="pH"><div class="pHs" id="pH1"></div></div>
			<div class="sS"><div class="sSs" id="sS1"></div></div>
			<div class="sK"><div class="sKs" id="sK1"></div></div>
			<div class="pR"><div class="pRs" id="pR1"></div></div>
		</div>
		<div class="room_box" id="rb2" onSelectStart = "return false;">
			<div class="name"><div class="nameS" id="name2"></div></div>
			<div class="Lv"><div class="Lvs" id="Lv2"></div></div>
			<div class="ig"><div class="igs" id="ig2"><img src="m_img/nl.png" id="ig_a2"><img src="m_img/an02.gif" id="ig_b2"><img src="m_img/dead.png" id="ig_d2"></div></div>
			<div class="pB"><div class="pBs" id="pB2"></div></div>
			<div class="pH"><div class="pHs" id="pH2"></div></div>
			<div class="sS"><div class="sSs" id="sS2"></div></div>
			<div class="sK"><div class="sKs" id="sK2"></div></div>
			<div class="pR"><div class="pRs" id="pR2"></div></div>
		</div>
		<div class="room_box" id="rb3" onSelectStart = "return false;">
			<div class="name"><div class="nameS" id="name3"></div></div>
			<div class="Lv"><div class="Lvs" id="Lv3"></div></div>
			<div class="ig"><div class="igs" id="ig3"><img src="m_img/nl.png" id="ig_a3"><img src="m_img/an03.gif" id="ig_b3"><img src="m_img/dead.png" id="ig_d3"></div></div>
			<div class="pB"><div class="pBs" id="pB3"></div></div>
			<div class="pH"><div class="pHs" id="pH3"></div></div>
			<div class="sS"><div class="sSs" id="sS3"></div></div>
			<div class="sK"><div class="sKs" id="sK3"></div></div>
			<div class="pR"><div class="pRs" id="pR3"></div></div>
		</div>
		<div class="room_box" id="rb4" onSelectStart = "return false;">
			<div class="name"><div class="nameS" id="name4"></div></div>
			<div class="Lv"><div class="Lvs" id="Lv4"></div></div>
			<div class="ig"><div class="igs" id="ig4"><img src="m_img/nl.png" id="ig_a4"><img src="m_img/an04.gif" id="ig_b4"><img src="m_img/dead.png" id="ig_d4"></div></div>
			<div class="pB"><div class="pBs" id="pB4"></div></div>
			<div class="pH"><div class="pHs" id="pH4"></div></div>
			<div class="sS"><div class="sSs" id="sS4"></div></div>
			<div class="sK"><div class="sKs" id="sK4"></div></div>
			<div class="pR"><div class="pRs" id="pR4"></div></div>
		</div>
		<div class="room_box" id="rb5" onSelectStart = "return false;">
			<div class="name"><div class="nameS" id="name5"></div></div>
			<div class="Lv"><div class="Lvs" id="Lv5"></div></div>
			<div class="ig"><div class="igs" id="ig5"><img src="m_img/nl.png" id="ig_a5"><img src="m_img/an05.gif" id="ig_b5"><img src="m_img/dead.png" id="ig_d5"></div></div>
			<div class="pB"><div class="pBs" id="pB5"></div></div>
			<div class="pH"><div class="pHs" id="pH5"></div></div>
			<div class="sS"><div class="sSs" id="sS5"></div></div>
			<div class="sK"><div class="sKs" id="sK5"></div></div>
			<div class="pR"><div class="pRs" id="pR5"></div></div>
		</div>
		<div class="room_box" id="rb6" onSelectStart = "return false;">
			<div class="name"><div class="nameS" id="name6"></div></div>
			<div class="Lv"><div class="Lvs" id="Lv6"></div></div>
			<div class="ig"><div class="igs" id="ig6"><img src="m_img/nl.png" id="ig_a6"><img src="m_img/an06.gif" id="ig_b6"><img src="m_img/dead.png" id="ig_d6"></div></div>
			<div class="pB"><div class="pBs" id="pB6"></div></div>
			<div class="pH"><div class="pHs" id="pH6"></div></div>
			<div class="sS"><div class="sSs" id="sS6"></div></div>
			<div class="sK"><div class="sKs" id="sK6"></div></div>
			<div class="pR"><div class="pRs" id="pR6"></div></div>
		</div>
		<div class="room_box" id="rb7" onSelectStart = "return false;">
			<div class="name"><div class="nameS" id="name7"></div></div>
			<div class="Lv"><div class="Lvs" id="Lv7"></div></div>
			<div class="ig"><div class="igs" id="ig7"><img src="m_img/nl.png" id="ig_a7"><img src="m_img/an07.gif" id="ig_b7"><img src="m_img/dead.png" id="ig_d7"></div></div>
			<div class="pB"><div class="pBs" id="pB7"></div></div>
			<div class="pH"><div class="pHs" id="pH7"></div></div>
			<div class="sS"><div class="sSs" id="sS7"></div></div>
			<div class="sK"><div class="sKs" id="sK7"></div></div>
			<div class="pR"><div class="pRs" id="pR7"></div></div>
		</div>
		<div class="room_box" id="rb8" onSelectStart = "return false;">
			<div class="name"><div class="nameS" id="name8"></div></div>
			<div class="Lv"><div class="Lvs" id="Lv8"></div></div>
			<div class="ig"><div class="igs" id="ig8"><img src="m_img/nl.png" id="ig_a8"><img src="m_img/an08.gif" id="ig_b8"><img src="m_img/dead.png" id="ig_d8"></div></div>
			<div class="pB"><div class="pBs" id="pB8"></div></div>
			<div class="pH"><div class="pHs" id="pH8"></div></div>
			<div class="sS"><div class="sSs" id="sS8"></div></div>
			<div class="sK"><div class="sKs" id="sK8"></div></div>
			<div class="pR"><div class="pRs" id="pR8"></div></div>
		</div>
		<div class="room_box" id="rb9" onSelectStart = "return false;">
			<div class="name"><div class="nameS" id="name9"></div></div>
			<div class="Lv"><div class="Lvs" id="Lv9"></div></div>
			<div class="ig"><div class="igs" id="ig9"><img src="m_img/nl.png" id="ig_a9"><img src="m_img/an09.gif" id="ig_b9"><img src="m_img/dead.png" id="ig_d9"></div></div>
			<div class="pB"><div class="pBs" id="pB9"></div></div>
			<div class="pH"><div class="pHs" id="pH9"></div></div>
			<div class="sS"><div class="sSs" id="sS9"></div></div>
			<div class="sK"><div class="sKs" id="sK9"></div></div>
			<div class="pR"><div class="pRs" id="pR9"></div></div>
		</div>
		<div class="room_box" id="rb10" onSelectStart = "return false;">
			<div class="name"><div class="nameS" id="name10"></div></div>
			<div class="Lv"><div class="Lvs" id="Lv10"></div></div>
			<div class="ig"><div class="igs" id="ig10"><img src="m_img/nl.png" id="ig_a10"><img src="m_img/an10.gif" id="ig_b10"><img src="m_img/dead.png" id="ig_d10"></div></div>
			<div class="pB"><div class="pBs" id="pB10"></div></div>
			<div class="pH"><div class="pHs" id="pH10"></div></div>
			<div class="sS"><div class="sSs" id="sS10"></div></div>
			<div class="sK"><div class="sKs" id="sK10"></div></div>
			<div class="pR"><div class="pRs" id="pR10"></div></div>
		</div>
		<div class="room_box" id="rb11" onSelectStart = "return false;">
			<div class="name"><div class="nameS" id="name11"></div></div>
			<div class="Lv"><div class="Lvs" id="Lv11"></div></div>
			<div class="ig"><div class="igs" id="ig11"><img src="m_img/nl.png" id="ig_a11"><img src="m_img/an11.gif" id="ig_b11"><img src="m_img/dead.png" id="ig_d11"></div></div>
			<div class="pB"><div class="pBs" id="pB11"></div></div>
			<div class="pH"><div class="pHs" id="pH11"></div></div>
			<div class="sS"><div class="sSs" id="sS11"></div></div>
			<div class="sK"><div class="sKs" id="sK11"></div></div>
			<div class="pR"><div class="pRs" id="pR11"></div></div>
		</div>
		<div class="room_box" id="rb12" onSelectStart = "return false;">
			<div class="name"><div class="nameS" id="name12"></div></div>
			<div class="Lv"><div class="Lvs" id="Lv12"></div></div>
			<div class="ig"><div class="igs" id="ig12"><img src="m_img/nl.png" id="ig_a12"><img src="m_img/an12.gif" id="ig_b12"><img src="m_img/dead.png" id="ig_d12"></div></div>
			<div class="pB"><div class="pBs" id="pB12"></div></div>
			<div class="pH"><div class="pHs" id="pH12"></div></div>
			<div class="sS"><div class="sSs" id="sS12"></div></div>
			<div class="sK"><div class="sKs" id="sK12"></div></div>
			<div class="pR"><div class="pRs" id="pR12"></div></div>
		</div>


<span id="gas_all_open">Gas All Open</span> | 
<span id="gas_all_close">Gas All Close</span>
　　　　　　
<span id="onnen_killer">Grudge ALL CLEAN</span>
<span class="red">#WARNING# You will lose all gold!</span>

　　
<input type="checkbox" id="Effect_mon" value="1" /> Effects stop	</div>




<style>
#gas_all_open{
	cursor:pointer;
	color:#AF0082;
	text-decoration: underline;
}
#gas_all_close{
	cursor:pointer;
	color:#AF0082;
	text-decoration: underline;
}
#onnen_killer{
	cursor:pointer;
	color:#AF0082;
	text-decoration: underline;
}
.red{color:red;}

table.status_table{
	margin:0;
	padding:0;
	border-collapse:collapse;
}
table.status_table th{
	font-size:13px;
	font-weight:normal;
	margin:0;
	padding:0;
}
table.status_table td{
	font-size:13px;
	font-weight:normal;
	margin:0;
	padding:0;
}

#mm_select{width:100%;height:32px;}
#mm_select1{width:103px;height:30px;background-color:#fff;float:right;margin:0 8px 0 0;cursor:pointer;}
#mm_select2{width:103px;height:30px;background-color:#fff;float:right;margin:0 8px 0 0;cursor:pointer;}
#mm_select3{width:103px;height:30px;background-color:#fff;float:right;margin:0 8px 0 0;cursor:pointer;}
#mm_select4{width:103px;height:30px;background-color:#fff;float:right;margin:0 15px 0 0;cursor:pointer;}
#mm_select5{width:103px;height:30px;background-color:#fff;float:right;margin:0 15px 0 0;cursor:pointer;}

#status_title table{
	margin:0;
	padding:0;
	border-collapse:collapse;
}
#status_title table th{
	font-size:16px;
	
}
#status_title table td{
	font-size:13px;
	font-weight:normal;
	text-align:left;
}
#status_img_set{
	position: relative;
	overflow: hidden;
	width:380px;
	height:500px;
	margin:0;
	padding:0;
}
#status_img_set2{
	position: relative;
	overflow: hidden;
	width:380px;
	height:500px;
	margin:0;
	padding:0;
}





</style>

	<div class="area" id="area_status">
		<div id="status_main">
			<div id="status_img">
				<div id="status_title">

<table style="width:360px;">
	<tr>
		<th colspan="2"><span id="Mname"></span></th>
		<td rowspan="3" style="text-align:right;">
			<div id="openMMitem2"><img src="m_img/padlock.png" style="cursor:pointer;" id="mm_padlock"><br>Unlock <span id="MMpicturePrice"></span> Gold</div>
			<div id="openMMitem1"><img src="m_img/change.png" style="cursor:pointer;" id="mm_change"></div>
		</td>
	</tr>
	<tr>
		<td width="100">MonMus Lv</td>
		<td style="text-align:right;"><span id="stLv"></span><span id="ueMLv" style="color:#ff0;"></span></td>
	</tr>
	<tr>
		<td>Room Lv</td>
		<td style="text-align:right;"><span id="rbLV"></span><span id="ueRLv" style="color:#ff0;"></span></td>
	</tr>
</table>

				</div>

				<div id="status_img_set"></div>
				<div id="status_img_set2"></div>
			</div>
			<div id="status_txt">

				<div id="mm_select">
					<div id="mm_select4" onmouseover="$('#mm_select4 img').css('opacity','0.7');" onmouseout="$('#mm_select4 img').css('opacity','1');"><img src="m_img/mm_select4r.jpg"></div>
					<div id="mm_select3" onmouseover="$('#mm_select3 img').css('opacity','0.7');" onmouseout="$('#mm_select3 img').css('opacity','1');"><img src="m_img/mm_select3.jpg"></div>
					<div id="mm_select2" onmouseover="$('#mm_select2 img').css('opacity','0.7');" onmouseout="$('#mm_select2 img').css('opacity','1');"><img src="m_img/mm_select2r.jpg"></div>
					<div id="mm_select1" onmouseover="$('#mm_select1 img').css('opacity','0.7');" onmouseout="$('#mm_select1 img').css('opacity','1');"><img src="m_img/mm_select1on.jpg"></div>
				</div>



				<div class="waku_dq" id="status1">

<table width="100%" class="status_table">
	<tr>
		<td><br></td>
		<td>Base</td>
		<td>Mm/Rm</td>
		<td>M/B/E</td>
		<td>Item</td>
	</tr>
	<tr>
		<td style="text-align:left;">DP</td>
		<td><span id="stBp1"></span></td>
		<td>x<span id="stBp1MR"></span><span id="ue1" style="color:#ff0;"></span></td>
		<td>-</td>
		<td>-</td>
	</tr>
	<tr>
		<td style="text-align:left;">HP</td>
		<td><span id="stHp1"></span></td>
		<td>x<span id="stHp1MR"></span><span id="ue2" style="color:#ff0;"></span></td>
		<td>-</td>
		<td>x<span id="stHp1i"></span></td>
	</tr>
	<tr>
		<td style="text-align:left;">Torture Rate</td>
		<td><span id="stDt1"></span></td>
		<td>x<span id="stDt1MR"></span><span id="ue3" style="color:#ff0;"></span></td>
		<td>x<span id="stDt1m"></span></td>
		<td>x<span id="stDt1i"></span></td>
	</tr>
	<tr>
		<td style="text-align:left;">Recovery Rate</td>
		<td><span id="stRj1"></span></td>
		<td>x<span id="stRj1MR"></span><span id="ue4" style="color:#ff0;"></span></td>
		<td>-</td>
		<td>x<span id="stRj1i"></span></td>
	</tr>
	<tr>
		<td style="text-align:left;">Selling price</td>
		<td><span id="stKa1"></span></td>
		<td>x<span id="stKa1MR"></span><span id="ue5" style="color:#ff0;"></span></td>
		<td>x<span id="stKa1b"></span></td>
		<td>x<span id="stKa1i"></span></td>
	</tr>
	<tr>
		<td style="text-align:left;">CTP<!--Click調教力--></td>
		<td><span id="stCTP1"></span></td>
		<td>x<span id="stCTP1MR"></span><span id="ue6" style="color:#ff0;"></span></td>
		<td>x<span id="stCTP1e"></span></td>
		<td>x<span id="stCTP1i"></span></td>
	</tr>
	<tr>
		<td style="text-align:left;">CAP<!--Clickダメージ--></td>
		<td><span id="stCAP1"></span></td>
		<td>x<span id="stCAP1MR"></span><span id="ue7" style="color:#ff0;"></span></td>
		<td>x<span id="stCAP1e"></span></td>
		<td>-</td>
	</tr>
	<tr>
		<td style="text-align:left;">Gas damage</td>
		<td><span id="stGas1"></span></td>
		<td>x<span id="stGas1MR"></span><span id="ue8" style="color:#ff0;"></span></td>
		<td>-</td>
		<td>-</td>
	</tr>
</table>
Modified value<table width="100%" class="status_table">
	<tr>
		<td style="text-align:left;">DP</td>
		<td><span id="stBp2"></span></td>
	</tr>
	<tr>
		<td style="text-align:left;">HP</td>
		<td><span id="stHp2"></span></td>
	</tr>
	<tr>
		<td style="text-align:left;">Torture Rate</td>
		<td><span id="stDt2"></span></td>
	</tr>
	<tr>
		<td style="text-align:left;">Recovery Rate</td>
		<td><span id="stRj2"></span></td>
	</tr>
	<tr>
		<td style="text-align:left;">Selling price</td>
		<td><span id="stKa2"></span></td>
	</tr>
	<tr>
		<td style="text-align:left;">CTP<!--Click調教力--></td>
		<td><span id="stCTP2"></span></td>
	</tr>
	<tr>
		<td style="text-align:left;">CAP<!--Clickダメージ--></td>
		<td><span id="stCAP2"></span></td>
	</tr>
</table>

				</div>

				<div class="waku_dq" id="status2"><span id="stText"></span></div>

				<div class="waku_dq2" id="status3">

<table width="100%">
	<tr>
		<td style="text-align:left;">Mon Musume LvUp</td>
		<td><span id="kakakuLv"></span> Gold</td>
	</tr>
	<tr>
		<td style="text-align:left;">Torture room LvUp</td>
		<td><span id="rbLVUp"></span> Gold</td>
	</tr>
</table>
				</div>
				<div id="status4" style="width: 490px;height:100px;padding:0 7px;margin:10px 0 10px 0;float:left;position:relative;"> 
					<div style="position:absolute;width:240px;height:80px;top:0;left:0;cursor:pointer;"     id="mLvUp"><img src="m_img/btm_lv_m1e.png"></div>
					<div style="position:absolute;width:240px;height:80px;top:0;left:245px;cursor:pointer;" id="rLvUp"><img src="m_img/btm_lv_r1e.png"></div>
				</div>



				<div id="status5" >

<style>
#audio_box1{width:500px;height:60px;margin-top:10px;}
#audio_box2{width:500px;height:60px;margin-top:10px;}
#audio_box3{width:500px;height:60px;margin-top:10px;}
#audio_box4{width:500px;height:60px;margin-top:10px;}
#audio_box5{width:500px;height:60px;margin-top:10px;}
#audio_ic1{float:left;width:40px;height:60px;}
#audio_ic2{float:left;width:40px;height:60px;}
#audio_ic3{float:left;width:40px;height:60px;}
#audio_ic4{float:left;width:40px;height:60px;}
#audio_ic5{float:left;width:40px;height:60px;}
#audio_tt1{float:left;width:420px;height:60px;}
#audio_tt2{float:left;width:420px;height:60px;}
#audio_tt3{float:left;width:420px;height:60px;}
#audio_tt4{float:left;width:420px;height:60px;}
#audio_tt5{float:left;width:420px;height:60px;}
</style>




					<div id="audio_box1">
						<div id="audio_ic1"></div>
						<div id="audio_tt1"></div>
					</div>
					<div id="audio_box2">
						<div id="audio_ic2"></div>
						<div id="audio_tt2"></div>
					</div>
					<div id="audio_box3">
						<div id="audio_ic3"></div>
						<div id="audio_tt3"></div>
					</div>
					<div id="audio_box4">
						<div id="audio_ic4"></div>
						<div id="audio_tt4"></div>
					</div>
					<div id="audio_box5">
						<div id="audio_ic5"></div>
						<div id="audio_tt5"></div>
					</div>



					<div style="color:#f00;">
										Note<br>
					IE9 above , FireFox, Chrome, I is compatible with Opera latest version .<br>
					Safari requires QuickTime.<br>
										</div>





				</div>



<style>
.warning_area{
	width:100%;
	height:51px;
	background-image:url('m_img/warning.png');
	background-position:0px 0px;
	margin:0;
	padding:0;
}
.warning_area_on{
	background-color:#000000;
	width:100%;
	height:60px;
	margin:0;
	padding:0;
}
</style>
				<div id="gas1" style="padding-top:20px;display:none;">

					<div class="warning_area"><div class="warning_area_on"></div></div>

					<table style="margin:20px;">
						<tr valign="top">
							<td>
								<div id="gas_switch_on"  style="border:1px solid #fff;background-color:#dddddd;color:#000;width:100px;margin:5px 10px;padding:5px;text-align:center;cursor:pointer;">Gas ON</div>
							</td>
							<td>
								<div id="gas_switch_off" style="border:1px solid #fff;background-color:#ff4500;color:#000;width:100px;margin:5px 10px;padding:5px;text-align:center;cursor:pointer;">Gas OFF</div>
							</td>
						</tr>
						<tr valign="top">
							<td colspan="2" style="text-align:left;">Killing ability:<span id="stGas2MR"></span></td>
						</tr>
					</table>

					<div class="warning_area"><div class="warning_area_on"></div></div>


				</div>
				<div id="onnen" style="padding-top:20px;display:none;">
					<p>Grudge count : <span id="onnen_cnt"></span></p>

					<div id="onnnennonnnenn">
						<img src="m_img/fabu.jpg" id="fabu" style="cursor:pointer;">
					</div>

					<div>
						The amount of blood flowing when killed<br>
						Base value:<span id="onnen1"></span><br>
						Modified value:<span id="onnen2"></span><br>
					</div>


				</div>


			</div>
		</div>
	</div>
</div>

<div class="area" id="area2" style="color:#ffffff;">



	<div style="width: 500px;padding: 0 7px;margin:20px 10px 10px 10px;float:left;"> 

		<table width="100%">
			<tr valign="top">
				<th>Clicks</th>
				<td><span id="cl_my">0</span> Click</td>
			</tr>
			<tr valign="top">
				<th>Gold</th>
				<td><span id="yen_my">0</span> Gold</td>
			</tr>
			<tr valign="top">
				<th>Max Gold</th>
				<td><span id="yen1">0</span> Gold</td>
			</tr>
			<tr valign="top">
				<th>Total number of Gold</th>
				<td><span id="yen2">0</span> Gold</td>
			</tr>
			<tr valign="top">
				<th>Total number of Sales</th>
				<td><span id="mon1">0</span> Sales</td>
			</tr>
			<tr valign="top">
				<th>Total number of Deaths</th>
				<td><span id="mon2">0</span> Deaths</td>
			</tr>
			<tr valign="top">
				<th>Maid</th>
				<td><span id="member_md">0</span></td>
			</tr>
			<tr valign="top">
				<th>Buyer</th>
				<td><span id="member_by">0</span></td>
			</tr>
			<tr valign="top">
				<th>Total number of Ahe</th>
				<td><span id="gc1">0</span> Click</td>
			</tr>
			<tr valign="top">
				<th>Total number of Killed</th>
				<td><span id="gc2">0</span> Killed</td>
			</tr>
			<tr valign="top">
				<th>Processing speed</th>
				<td><span id="speed"></span>ms</td>
			</tr>
		</table>


	</div>

	<div style="width: 300px;height:160px;padding:0 7px;margin:20px 0 10px 0;float:left;position:relative;"> 
		<div style="position:absolute;width:150px;height:150px;top:0;left:0;cursor:pointer;" id="bt_maid"><img src="m_img/bt_maid1.png" ></div>
		<div style="position:absolute;width:150px;height:150px;top:0;left:165px;cursor:pointer;" id="bt_buyer"><img src="m_img/bt_buy1.png" ></div>

		<div style="position:absolute;top:160px;left:0;">Maid Cost</div>
		<div style="position:absolute;top:180px;left:0;">Buyer Cost</div>

		<div style="position:absolute;top:160px;right:0;" id="kakaku_md"></div>
		<div style="position:absolute;top:180px;right:0;" id="kakaku_by"></div>
	</div>

	<div style="clear:both;"></div>

	<div style="position: relative;border: solid 1px #808080;width: 830px;height: 140px;padding: 5px;overflow: auto;margin:15px auto;background-image:url('m_img/bg001.jpg');"> 
		<div id="print_maid"></div>
	</div>
	<div style="position: relative;border: solid 1px #808080;width: 830px;height: 140px;padding: 5px;overflow: auto;margin:15px auto;background-image:url('m_img/bg002.jpg');"> 
		<div id="print_buyer"></div>
	</div>

</div>

<style>
.itembox{
	width:40px;
	height:40px;
	display:block;
	float:left;
	margin:5px;
	background-color:#fff;
}
.itembox img:hover{
	-moz-opacity:0.5;
	opacity:0.5;
}
.itemMemo{color:#fff;}
</style>


<div class="area" id="area3" style="padding-top:4px;">
	<div style="width: 840px;height: 22px;padding: 7px 0 0 0;margin:2px auto;color:#fff;"># Weapon Equipped</div>
	<div style="border: solid 1px #808080;width: 840px;height: 80px;padding: 7px;overflow: auto;margin:2px auto;"> 
		<div id="itemData0r"></div>
	</div>
	<div style="width: 840px;height: 22px;padding: 7px 0 0 0;margin:2px auto;color:#fff;"># Weapon Possessed</div>
	<div style="border: solid 1px #808080;width: 840px;height: 220px;padding: 7px;overflow: auto;margin:2px auto;"> 
		<div id="itemData0"></div>
	</div>
	<div class="waku_dq" style="margin:20px;width:835px;height:105px;">
		<div class="itemMemo"># Name</div>
	</div>
</div>
<div class="area" id="area4" style="padding-top:4px;">
	<div style="border: solid 1px #808080;width: 840px;height: 400px;padding: 7px;overflow: auto;margin:20px auto;"> 
		<div id="itemData1"></div>
	</div>
	<div class="waku_dq" style="margin:20px;width:835px;height:105px;">
		<div class="itemMemo"></div>
	</div>
</div>
<div class="area" id="area5" style="padding-top:4px;">
	<div style="border: solid 1px #808080;width: 840px;height: 400px;padding: 7px;overflow: auto;margin:20px auto;"> 
		<div id="itemData2"></div>
	</div>
	<div class="waku_dq" style="margin:20px;width:835px;height:105px;">
		<div class="itemMemo"></div>
	</div>
</div>



<div class="area" id="area6" style="padding-top:4px;">
	<div style="width: 840px;padding: 7px;overflow: auto;margin:10px auto;"> 



		SAVE DATA		  # If "failed to save" is displayed, please come back to this screen later.<br>

		<textarea name="save" id="save" style="width:800px;height:200px;overflow-x:hidden;"></textarea><br>
		<br>

		<form action="./mmce.php" method="POST">
		LOAD<br>
		<textarea name="load" id="load" style="width:800px;height:200px;overflow-x:hidden;"></textarea><br>
		<input type="submit" name="submit" value="Load Data">
		<input type="hidden" name="s" value="1">
		<input type="hidden" name="la" value="1">
		</form>
		<br>

		<form action="./mmce.php" method="POST">
		Reset Data<br>
		<input type="submit" value="Reset"><br>
		<input type="hidden" name="cookiedel" value="1" />
		</form>

	</div>
</div>

<style>
table.faq_table{
	width:100%;
	margin:2px 0;
	border-collapse:collapse;
}
table.faq_table th{
	width:12%;
	margin:1px 3px;
	text-align:left;
	border:1px solid #fff;
	background-color:#ddd;
	color:#000;
	line-height:13px;
}
table.faq_table td{
	margin:1px 3px;
	text-align:left;
	border:1px solid #fff;
	line-height:13px;

}
table.faq_table td.faq_t_title{
	border:none;
	margin:3px 0;
	font-weight:bold;
}
.faq_q{
	color:#F5B2B2;
	margin:6px 0 2px 0;
	padding:0;
	line-height:13px;
	
}
.faq_a{
	color:#A0D8EF;
	margin:2px 0;
	padding:0;
	line-height:13px;

}

</style>


<div class="area" id="area7" style="padding-top:4px;">
	<div style="width: 840px;padding: 5px;overflow: auto;margin:4px auto;"> 



<table class="faq_table">
	<tr>
		<th>Mon Mushume</th>
		<td>Monster Girls. Very strong.</td>
		<th>Torture R</th>
		<td>Torture Room. Room to grow Mon Mushume cherish. And try to sell if you grow.</td>
	</tr>
	<tr>
		<th>Shipments</th>
		<td>Number that selled the Mon Mushume</td>
		<th>Killed</th>
		<td>Number that killed the Mon Mushume</td>
	</tr>
	<tr>
		<th>Ahe</th>
		<td>Mon Mushume Ahe Ahe Ahe! Money in UP</td>
		<th>Killed</th>
		<td>The Killed Mon Mushume's</td>
	</tr>
	<tr>
		<th>Equipment</th>
		<td>Tool for making important to grow Mon Mushume</td>
		<th>Shop</th>
		<td>I'm selling a very affordable items</td>
	</tr>
	<tr>
		<th>Trophy</th>
		<td colspan="3">You have to save the deals items that you have bought in shop</td>
	</tr>
	<tr>
		<td class="faq_t_title" colspan="4"># Status of Mon Mushume</td>
	</tr>
	<tr>
		<th>DP</th>
		<td colspan="3">Disciplire Point. Longer Time between Shipments. Purple Bar</td>
	</tr>
	<tr>
		<th>HP</th>
		<td colspan="3">Hit Point. Physical fitness of Mon Mushume. Die when it reaches 0. Green Bar</td>
	</tr>
	<tr>
		<th>Torture Rate</th>
		<td>The Torture Rate Torture room is performed automatically</td>
		<th>Recovery Rate</th>
		<td>Resilience of Mon Mushume</td>
	</tr>
	<tr>
		<th>Selling price</th>
		<td>Selling price of Mon Mushume</td>
		<th>Base</th>
		<td>Base parameter value</td>
	</tr>
	<tr>
		<th>CTP</th>
		<td>Torture Rate of Click</td>
		<th>CAP</th>
		<td>Attack Power of Click</td>
	</tr>


	<tr>
		<th>Grudge</th>
		<td>slow down the speed of the resurrection</td>
		<th>Memorial</th>
		<td>reduce grudge</td>
	</tr>

	<tr>
		<th>Mm/Rm</th>
		<td>Parameter Bonus by MonMusume Lv and Torture Room Lv</td>
		<th>M/B/E</th>
		<td>Parameter Bonus by maid and buyers and Weapon Equipped</td>
	</tr>
	<tr>
		<th>Item</th>
		<td>Parameter Bonus by items that you have purchased</td>
		<th>Modified value</th>
		<td>Parameters of the final value</td>
	</tr>
	<tr>
		<td class="faq_t_title" colspan="4"># My room</td>
	</tr>
	<tr>
		<th>Maid</th>
		<td>Maid to Torture the Mon Mushume. 5% increase</td>
		<th>Buyer</th>
		<td>Buyers sell Mon Mushume. 5% increase</td>
	</tr>
	<tr>
		<td class="faq_t_title" colspan="4"># Equipment</td>
	</tr>
	<tr>
		<th>Torture Rate</th>
		<td>Torture Rate per click</td>
		<th>Damage P</th>
		<td>Damage Power per click</td>
	</tr>
</table>
<p class="faq_q">Q.What is this game ?</p>
<p class="faq_a">A.People were scared to Asmodian by the resurrection of Satan... (Abbreviation</p>
<p class="faq_q">Q.Wrong English Translation</p>
<p class="faq_a">A.Tell me the correct English translation by BBS. Please ...φ(:3｣∠)_</p>
<p class="faq_q">Q.If the number is greater display of "e" sticks</p>
<p class="faq_a">A.Is by design. This is the limit of the number</p></p>
<p class="faq_q">Q.No Sound</p>
<p class="faq_a">A.IE10 above , FireFox, Safari, Chrome, Opera latest version correspondence . Android and iPhone / iPad corresponding part</p>
<p class="faq_q">Q.Can I linked ? Can I introduce the BBS ?</p>
<p class="faq_a">A.Feel free to</p>
<p class="faq_q">Q.I 've found a bug</p>
<p class="faq_a">A.Reports ask the BBS</p>





	</div>
</div>




<div class="area" id="area8">


	<div style="padding:10px;">
			<span id="bosyu">
<span id="cb1">Nu</span><span id="cb2">ts</span><span id="cb3">ac</span><span id="cb4">k </span><span id="cb5">fl</span><span id="cb6">ab</span><span id="cb7">by</span><span id="cb8">yy</span><span id="cb9">yy</span><span id="cb10">yy</span><span id="cb11">yy</span><span id="cb12">yy</span><span id="cb13">yy</span><span id="cb14">yy</span><span id="cb15">yy</span>
			</span><br>
			

	<br>

<table width="100%">
	<tr valign="top">
		<td style="text-align:left;">

	BGM<br>
	Pierrot Lunaire</a><br>

	<br>

	Illustration:<br>
	83picoru<br>
	shino<br>
	misoshi-ino<br>
	kirigaya-yuji<br>
	WESTSIDE<br>


	<br>
	Voice<br>
<table>
	<tr>
		<td style="text-align:left;">Slime Musume</td>
		<td style="text-align:left;">CV： <a href="http://inukai.grrr.jp/" target="_blank">Inukai-Ao</a></td>
	</tr>
	<tr>
		<td style="text-align:left;">Elf</td>
		<td style="text-align:left;">CV： <a href="http://twitter.com/ayacell_foreign" target="_blank">Ayase-keigo</a></td>
	</tr>
	<tr>
		<td style="text-align:left;">Wolf Musume</td>
		<td style="text-align:left;">CV： <a href="http://www.voiceblog.jp/mo_mo/" target="_blank">Momoka-ren</a></td>
	</tr>
	<tr>
		<td style="text-align:left;">Mummy Musume</td>
		<td style="text-align:left;">CV： <a href="http://mochi.moo.jp/" target="_blank">Mochi-yomogi</a></td>
	</tr>
	<tr>
		<td style="text-align:left;">Reaper Apprentice</td>
		<td style="text-align:left;">CV： <a href="http://karintokarin55.seesaa.net/" target="_blank">Inoue-karin</a></td>
	</tr>
	<tr>
		<td style="text-align:left;">Spirit of Fire</td>
		<td style="text-align:left;">CV： <a href="http://kanoko46.blog.fc2.com/" target="_blank">kanoko</a></td>
	</tr>
	<tr>
		<td style="text-align:left;">Killer machine</td>
		<td style="text-align:left;">CV： <a href="http://7calmvoice.wix.com/rutolovoice" target="_blank">Nanagi-rutoro</a></td>
	</tr>
	<tr>
		<td style="text-align:left;">Succubus</td>
		<td style="text-align:left;">CV： <a href="http://poplartree.blog.fc2.com/" target="_blank">Sawano-popura</a></td>
	</tr>
	<tr>
		<td style="text-align:left;">Valkyrie</td>
		<td style="text-align:left;">CV： <a href="http://www.voiceblog.jp/geministar/" target="_blank">Yamada-jemiko</a></td>
	</tr>
	<tr>
		<td style="text-align:left;">Dragon Musume</td>
		<td style="text-align:left;">CV： <a href="http://shiho.moe.in/v/" target="_blank">Bubegawara-shiho</a></td>
	</tr>
	<tr>
		<td style="text-align:left;">Angel</td>
		<td style="text-align:left;">CV： <a href="http://mirukurumidiary.blog66.fc2.com/" target="_blank">miru-kurumi</a></td>
	</tr>
	<tr>
		<td style="text-align:left;">Demon King</td>
		<td style="text-align:left;">CV： <a href="http://gold115.u-me.jp/momo115/" target="_blank">Akiba-momoyo</a></td>
	</tr>
</table>



		</td>
		<td>

	<img src="/click/m_img/bn_mmc.jpg">
	<img src="/click/m_img/bn_mmc_e.jpg"><br>
	<img src="/click/m_img/bn_mmc_s.jpg">
	<img src="/click/m_img/bn_mmc_se.jpg"><br>

	<br>
	<br>







	<a href="/click/omake/u18/" target="_blank">Ahe-Click 2</a><br>
	<a href="/click/omake/u18/" target="_blank"><img src="/click/omake/u18/img/bn_ahe2_e1.jpg"></a><br>
	<a href="./room002.php?la=1" target="_blank">Ahe-Click</a><br>
	<a href="./room002.php?la=1" target="_blank"><img src="/click/aks/bn_ahecl_200x70e.jpg"></a><br>
	<br>
	<a href="http://www.dlsite.com/ecchi-eng/work/=/product_id/RE126968.html" target="_blank"><img src="/goods/bn/z01/bn_z01e_200x70.jpg" alt="Violated Voices" width="200" height="70" /></a><br>


<br>
presented by <a href="http://www.tomatama.com/" target="_blank"><img src="/img/bn88x31.gif" alt="Ketchup AjiNo Mayonnais" width="88" height="31" /></a><br>

		</td>
	</tr>
</table>

	<br>
	<br>



<br>
<br>







	</div>
</div>




<div class="area" id="area9">
	<div style="padding:15px;">
		<iframe src="../bbs/simple.php?cd=gah2" style="width:870px;height:570px;" name="ifre" id="ifre"></iframe><br>
	</div>
</div>


<div class="area" id="area10">
	<div style="padding:10px;">
		Ver 1.01.02 2015/04/18 A little update<br>
		Ver 1.01.01 2015/04/11 A little update<br>
		Ver 1.00.00 2015/04/04 open!!!<br>
		Ver 0.95.02 2015/02/25 CM<br>
		Ver 0.95.01 2015/02/24 GasRoom & BGM<br>
		Ver 0.94.01 2015/02/23 Grudge 're<br>
		Ver 0.93.01 2015/02/10 GasRoom<br>
		Ver 0.93.00 2015/02/09 Lot update<br>
		Ver 0.92.08 2015/02/07 A little update<br>
		Ver 0.92.07 2015/02/06 A little update<br>
		Ver 0.92.06 2015/02/05 Lot update<br>
		Ver 0.92.05 2015/02/04 A little update<br>
		Ver 0.92.04 2015/02/03 A little update<br>
		Ver 0.92.03 2015/02/02 Lot update<br>
		Ver 0.92.02 2015/01/31 A little update<br>
		Ver 0.92.01 2015/01/30 A little update<br>
		Ver 0.92.00 2015/01/29 Beta Open<br>
		Ver 0.91.00 2015/01/22 The temporary installation illustrations<br>
		Ver 0.90.00 2015/01/03 In development	</div>
</div>



<script>


function funNew(){
	if(cnt%10<5){
		$('.new').css('color','#ff0');
	}else{
		$('.new').css('color','#f00');
	}
}

</script>


<div class="area" id="area11">
	<div style="padding:10px;">

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
<a href="/goods/hp01.php" target="_blank"><img src="/goods/bn/hp01/bn_hp01_200x40.jpg" alt="腹パ" width="200" height="40" /></a><br>
<a href="/goods/as01.php" target="_blank"><img src="/goods/bn/as01/bn_as01_200x40.jpg" alt="触手" width="200" height="40" /></a><br>
				</td>
				<td>
<a href="/goods/f01.php" target="_blank"><img src="/goods/bn/f01/bn_f01_200x40.jpg" alt="絶叫" width="200" height="40" /></a><br>
<a href="/goods/k03.php" target="_blank"><img src="/goods/bn/k03/bn_k03_200x40.jpg" alt="拷問" width="200" height="40" /></a><br>
<a href="/goods/z01.php" target="_blank"><img src="/goods/bn/z01/bn_z01_200x40.jpg" alt="陵辱" width="200" height="40" /></a><br>
				</td>
			</tr>
		</table>
		<br>



<br>
<br>






	</div>

</div>



<div class="area" id="area12" style="background-color:#fff;height: auto;">


<br>

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


</div>






<div id="test"></div>

<!--
<div id="Golden1"></div>
<div id="Golden2"></div>
-->


<div style="display:none;">
<div id="room1">1#1#0#0#0#0#0#0#0#0#0</div>
<div id="room2">0#0#0#0#0#0#0#0#0#0#0</div>
<div id="room3">0#0#0#0#0#0#0#0#0#0#0</div>
<div id="room4">0#0#0#0#0#0#0#0#0#0#0</div>
<div id="room5">0#0#0#0#0#0#0#0#0#0#0</div>
<div id="room6">0#0#0#0#0#0#0#0#0#0#0</div>
<div id="room7">0#0#0#0#0#0#0#0#0#0#0</div>
<div id="room8">0#0#0#0#0#0#0#0#0#0#0</div>
<div id="room9">0#0#0#0#0#0#0#0#0#0#0</div>
<div id="room10">0#0#0#0#0#0#0#0#0#0#0</div>
<div id="room11">0#0#0#0#0#0#0#0#0#0#0</div>
<div id="room12">0#0#0#0#0#0#0#0#0#0#0</div>
<div id="room13">0#0#0#0#0#0#0#0#0#0#0</div>
<div id="room14">0#0#0#0#0#0#0#0#0#0#0</div>
<div id="room15">0#0#0#0#0#0#0#0#0#0#0</div>
<div id="room16">0#0#0#0#0#0#0#0#0#0#0</div>
<div id="room17">0#0#0#0#0#0#0#0#0#0#0</div>
<div id="room18">0#0#0#0#0#0#0#0#0#0#0</div>
<div id="mydata">0#0#0#0#0#0#0</div>
<div id="member">0#0</div>
<div id="itemM1">0#0#0#0#0#0#0#0#0#0#0#0</div>
<div id="itemM2">0#0#0#0#0#0#0#0#0#0#0#0</div>
<div id="itemM3">0#0#0#0#0#0#0#0#0#0#0#0</div>
<div id="itemM4">0#0#0#0#0#0#0#0#0#0#0#0</div>
<div id="itemM5">0#0#0#0#0#0#0#0#0#0#0#0</div>
<div id="itemM6">0#0#0#0#0#0#0#0#0#0#0#0</div>
<div id="itemM7">0#0#0#0#0#0#0#0#0#0#0#0</div>
<div id="itemM8">0#0#0#0#0#0#0#0#0#0#0#0</div>
<div id="itemM9">0#0#0#0#0#0#0#0#0#0#0#0</div>
<div id="itemM10">0#0#0#0#0#0#0#0#0#0#0#0</div>
<div id="itemM11">0#0#0#0#0#0#0#0#0#0#0#0</div>
<div id="itemM12">0#0#0#0#0#0#0#0#0#0#0#0</div>
<div id="itemX">0#0#0#0#0#0#0#0#0#0#0#0#0#0#0#0</div>
<div id="itemA">0#0#0#0#0#0#0#0#0</div>
<div id="itemB">1#0#0#0#0#0#0#0#0#0</div>
<div id="MonItem1">0#0#0#0#0#0</div>
<div id="MonItem2">0#0#0#0#0#0</div>
<div id="MonItem3">0#0#0#0#0#0</div>
<div id="MonItem4">0#0#0#0#0#0</div>
<div id="MonItem5">0#0#0#0#0#0</div>
<div id="MonItem6">0#0#0#0#0#0</div>
<div id="MonItem7">0#0#0#0#0#0</div>
<div id="MonItem8">0#0#0#0#0#0</div>
<div id="MonItem9">0#0#0#0#0#0</div>
<div id="MonItem10">0#0#0#0#0#0</div>
<div id="MonItem11">0#0#0#0#0#0</div>
<div id="MonItem12">0#0#0#0#0#0</div>
<div id="OnnenSet">0#0#0#0#0#0#0#0#0#0#0#0#0</div>
<iframe src="./mmcf.php" name="data_save" id="data_save"></iframe>
</div>






<div id="footer">


				<a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.tomatama.com/click/mmc.php" data-lang="en">Tweet</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

	<a href="http://www.tomatama.com/" target="_blank">Ketchup AjiNo Mayonnais</a><br>
<img src="m_img/room_b2.png" width="1" height="1" style="opacity:0.01;-moz-opacity:0.01;">
<img src="m_img/bt_buy2.png" width="1" height="1" style="opacity:0.01;-moz-opacity:0.01;">
<img src="m_img/bt_maid2.png" width="1" height="1" style="opacity:0.01;-moz-opacity:0.01;">
<img src="m_img/roomb_e.png" width="1" height="1" style="opacity:0.01;-moz-opacity:0.01;">
<img src="m_img/btm_lv_m2.png" width="1" height="1" style="opacity:0.01;-moz-opacity:0.01;">
<img src="m_img/btm_lv_m2e.png" width="1" height="1" style="opacity:0.01;-moz-opacity:0.01;">
<img src="m_img/btm_lv_r2.png" width="1" height="1" style="opacity:0.01;-moz-opacity:0.01;">
<img src="m_img/btm_lv_r2e.png" width="1" height="1" style="opacity:0.01;-moz-opacity:0.01;">
<img src="m_img/ti.png" width="1" height="1" style="opacity:0.01;-moz-opacity:0.01;">
<img src="m_img/rip.png" width="1" height="1" style="opacity:0.01;-moz-opacity:0.01;">
<img src="m_img/dks.png" width="1" height="1" style="opacity:0.01;-moz-opacity:0.01;">


<img src="m_img/cc01.png" width="1" height="1" style="opacity:0.01;-moz-opacity:0.01;">
<img src="m_img/cc02.png" width="1" height="1" style="opacity:0.01;-moz-opacity:0.01;">


</div>


</div>
<div id="r18">
	<p style="padding-top:200px;margin:0;">
<!--
This site is a Hentai site.<br>
Are you sure you want to enter?<br><br>
-->
This game contains adult contents.<br>
Are you over the age of majority where you live, and willing to access adult content?<br>

<!--
<span class="r18ck" id="r18a">I am HENTAI</span> | <span class="r18ck" id="r18b">I want to leave</span>
-->
<br>

<span class="r18ck" id="r18a">I am over the age of majority where I live and I wish to access adult content.</span>
<br>
<br>
<span class="r18ck" id="r18b">I am under the age of majority or I do not wish to access adult content.</span>







	</p>
</div>


<div style="display:none;">
<audio src="m_img/mm1_a1.mp3" preload="auto" loop="loop" id="bgmBk"></audio>

<audio src="m_mp3/mm1_a1.mp3" preload="auto" id="mm1_a1"></audio>
<audio src="m_mp3/mm1_a2.mp3" preload="auto" id="mm1_a2"></audio>
<audio src="m_mp3/mm1_a3.mp3" preload="auto" id="mm1_a3"></audio>
<audio src="m_mp3/mm1_a1.mp3" preload="auto" id="mm1_a4"></audio>
<audio src="m_mp3/mm1_a2.mp3" preload="auto" id="mm1_a5"></audio>
<audio src="m_mp3/mm1_a3.mp3" preload="auto" id="mm1_a6"></audio>
<audio src="m_mp3/mm1_a1.mp3" preload="auto" id="mm1_a7"></audio>
<audio src="m_mp3/mm1_a2.mp3" preload="auto" id="mm1_a8"></audio>
<audio src="m_mp3/mm1_a3.mp3" preload="auto" id="mm1_a9"></audio>
<audio src="m_mp3/mm1_a1.mp3" preload="auto" id="mm1_a10"></audio>
<audio src="m_mp3/mm1_a2.mp3" preload="auto" id="mm1_a11"></audio>
<audio src="m_mp3/mm1_a3.mp3" preload="auto" id="mm1_a12"></audio>
<audio src="m_mp3/mm2_a1.mp3" preload="auto" id="mm2_a1"></audio>
<audio src="m_mp3/mm2_a2.mp3" preload="auto" id="mm2_a2"></audio>
<audio src="m_mp3/mm2_a3.mp3" preload="auto" id="mm2_a3"></audio>
<audio src="m_mp3/mm2_a1.mp3" preload="auto" id="mm2_a4"></audio>
<audio src="m_mp3/mm2_a2.mp3" preload="auto" id="mm2_a5"></audio>
<audio src="m_mp3/mm2_a3.mp3" preload="auto" id="mm2_a6"></audio>
<audio src="m_mp3/mm2_a1.mp3" preload="auto" id="mm2_a7"></audio>
<audio src="m_mp3/mm2_a2.mp3" preload="auto" id="mm2_a8"></audio>
<audio src="m_mp3/mm2_a3.mp3" preload="auto" id="mm2_a9"></audio>
<audio src="m_mp3/mm2_a1.mp3" preload="auto" id="mm2_a10"></audio>
<audio src="m_mp3/mm2_a2.mp3" preload="auto" id="mm2_a11"></audio>
<audio src="m_mp3/mm2_a3.mp3" preload="auto" id="mm2_a12"></audio>
<audio src="m_mp3/mm3_a1.mp3" preload="auto" id="mm3_a1"></audio>
<audio src="m_mp3/mm3_a2.mp3" preload="auto" id="mm3_a2"></audio>
<audio src="m_mp3/mm3_a3.mp3" preload="auto" id="mm3_a3"></audio>
<audio src="m_mp3/mm3_a1.mp3" preload="auto" id="mm3_a4"></audio>
<audio src="m_mp3/mm3_a2.mp3" preload="auto" id="mm3_a5"></audio>
<audio src="m_mp3/mm3_a3.mp3" preload="auto" id="mm3_a6"></audio>
<audio src="m_mp3/mm3_a1.mp3" preload="auto" id="mm3_a7"></audio>
<audio src="m_mp3/mm3_a2.mp3" preload="auto" id="mm3_a8"></audio>
<audio src="m_mp3/mm3_a3.mp3" preload="auto" id="mm3_a9"></audio>
<audio src="m_mp3/mm3_a1.mp3" preload="auto" id="mm3_a10"></audio>
<audio src="m_mp3/mm3_a2.mp3" preload="auto" id="mm3_a11"></audio>
<audio src="m_mp3/mm3_a3.mp3" preload="auto" id="mm3_a12"></audio>
<audio src="m_mp3/mm4_a1.mp3" preload="auto" id="mm4_a1"></audio>
<audio src="m_mp3/mm4_a2.mp3" preload="auto" id="mm4_a2"></audio>
<audio src="m_mp3/mm4_a3.mp3" preload="auto" id="mm4_a3"></audio>
<audio src="m_mp3/mm4_a1.mp3" preload="auto" id="mm4_a4"></audio>
<audio src="m_mp3/mm4_a2.mp3" preload="auto" id="mm4_a5"></audio>
<audio src="m_mp3/mm4_a3.mp3" preload="auto" id="mm4_a6"></audio>
<audio src="m_mp3/mm4_a1.mp3" preload="auto" id="mm4_a7"></audio>
<audio src="m_mp3/mm4_a2.mp3" preload="auto" id="mm4_a8"></audio>
<audio src="m_mp3/mm4_a3.mp3" preload="auto" id="mm4_a9"></audio>
<audio src="m_mp3/mm4_a1.mp3" preload="auto" id="mm4_a10"></audio>
<audio src="m_mp3/mm4_a2.mp3" preload="auto" id="mm4_a11"></audio>
<audio src="m_mp3/mm4_a3.mp3" preload="auto" id="mm4_a12"></audio>
<audio src="m_mp3/mm5_a1.mp3" preload="auto" id="mm5_a1"></audio>
<audio src="m_mp3/mm5_a2.mp3" preload="auto" id="mm5_a2"></audio>
<audio src="m_mp3/mm5_a3.mp3" preload="auto" id="mm5_a3"></audio>
<audio src="m_mp3/mm5_a1.mp3" preload="auto" id="mm5_a4"></audio>
<audio src="m_mp3/mm5_a2.mp3" preload="auto" id="mm5_a5"></audio>
<audio src="m_mp3/mm5_a3.mp3" preload="auto" id="mm5_a6"></audio>
<audio src="m_mp3/mm5_a1.mp3" preload="auto" id="mm5_a7"></audio>
<audio src="m_mp3/mm5_a2.mp3" preload="auto" id="mm5_a8"></audio>
<audio src="m_mp3/mm5_a3.mp3" preload="auto" id="mm5_a9"></audio>
<audio src="m_mp3/mm5_a1.mp3" preload="auto" id="mm5_a10"></audio>
<audio src="m_mp3/mm5_a2.mp3" preload="auto" id="mm5_a11"></audio>
<audio src="m_mp3/mm5_a3.mp3" preload="auto" id="mm5_a12"></audio>
<audio src="m_mp3/mm6_a1.mp3" preload="auto" id="mm6_a1"></audio>
<audio src="m_mp3/mm6_a2.mp3" preload="auto" id="mm6_a2"></audio>
<audio src="m_mp3/mm6_a3.mp3" preload="auto" id="mm6_a3"></audio>
<audio src="m_mp3/mm6_a4.mp3" preload="auto" id="mm6_a4"></audio>
<audio src="m_mp3/mm6_a5.mp3" preload="auto" id="mm6_a5"></audio>
<audio src="m_mp3/mm6_a6.mp3" preload="auto" id="mm6_a6"></audio>
<audio src="m_mp3/mm6_a7.mp3" preload="auto" id="mm6_a7"></audio>
<audio src="m_mp3/mm6_a8.mp3" preload="auto" id="mm6_a8"></audio>
<audio src="m_mp3/mm6_a1.mp3" preload="auto" id="mm6_a9"></audio>
<audio src="m_mp3/mm6_a2.mp3" preload="auto" id="mm6_a10"></audio>
<audio src="m_mp3/mm6_a3.mp3" preload="auto" id="mm6_a11"></audio>
<audio src="m_mp3/mm6_a4.mp3" preload="auto" id="mm6_a12"></audio>
<audio src="m_mp3/mm7_a1.mp3" preload="auto" id="mm7_a1"></audio>
<audio src="m_mp3/mm7_a2.mp3" preload="auto" id="mm7_a2"></audio>
<audio src="m_mp3/mm7_a3.mp3" preload="auto" id="mm7_a3"></audio>
<audio src="m_mp3/mm7_a1.mp3" preload="auto" id="mm7_a4"></audio>
<audio src="m_mp3/mm7_a2.mp3" preload="auto" id="mm7_a5"></audio>
<audio src="m_mp3/mm7_a3.mp3" preload="auto" id="mm7_a6"></audio>
<audio src="m_mp3/mm7_a1.mp3" preload="auto" id="mm7_a7"></audio>
<audio src="m_mp3/mm7_a2.mp3" preload="auto" id="mm7_a8"></audio>
<audio src="m_mp3/mm7_a3.mp3" preload="auto" id="mm7_a9"></audio>
<audio src="m_mp3/mm7_a1.mp3" preload="auto" id="mm7_a10"></audio>
<audio src="m_mp3/mm7_a2.mp3" preload="auto" id="mm7_a11"></audio>
<audio src="m_mp3/mm7_a3.mp3" preload="auto" id="mm7_a12"></audio>
<audio src="m_mp3/mm8_a1.mp3" preload="auto" id="mm8_a1"></audio>
<audio src="m_mp3/mm8_a2.mp3" preload="auto" id="mm8_a2"></audio>
<audio src="m_mp3/mm8_a3.mp3" preload="auto" id="mm8_a3"></audio>
<audio src="m_mp3/mm8_a1.mp3" preload="auto" id="mm8_a4"></audio>
<audio src="m_mp3/mm8_a2.mp3" preload="auto" id="mm8_a5"></audio>
<audio src="m_mp3/mm8_a3.mp3" preload="auto" id="mm8_a6"></audio>
<audio src="m_mp3/mm8_a1.mp3" preload="auto" id="mm8_a7"></audio>
<audio src="m_mp3/mm8_a2.mp3" preload="auto" id="mm8_a8"></audio>
<audio src="m_mp3/mm8_a3.mp3" preload="auto" id="mm8_a9"></audio>
<audio src="m_mp3/mm8_a1.mp3" preload="auto" id="mm8_a10"></audio>
<audio src="m_mp3/mm8_a2.mp3" preload="auto" id="mm8_a11"></audio>
<audio src="m_mp3/mm8_a3.mp3" preload="auto" id="mm8_a12"></audio>
<audio src="m_mp3/mm9_a1.mp3" preload="auto" id="mm9_a1"></audio>
<audio src="m_mp3/mm9_a2.mp3" preload="auto" id="mm9_a2"></audio>
<audio src="m_mp3/mm9_a3.mp3" preload="auto" id="mm9_a3"></audio>
<audio src="m_mp3/mm9_a1.mp3" preload="auto" id="mm9_a4"></audio>
<audio src="m_mp3/mm9_a2.mp3" preload="auto" id="mm9_a5"></audio>
<audio src="m_mp3/mm9_a3.mp3" preload="auto" id="mm9_a6"></audio>
<audio src="m_mp3/mm9_a1.mp3" preload="auto" id="mm9_a7"></audio>
<audio src="m_mp3/mm9_a2.mp3" preload="auto" id="mm9_a8"></audio>
<audio src="m_mp3/mm9_a3.mp3" preload="auto" id="mm9_a9"></audio>
<audio src="m_mp3/mm9_a1.mp3" preload="auto" id="mm9_a10"></audio>
<audio src="m_mp3/mm9_a2.mp3" preload="auto" id="mm9_a11"></audio>
<audio src="m_mp3/mm9_a3.mp3" preload="auto" id="mm9_a12"></audio>
<audio src="m_mp3/mm10_a1.mp3" preload="auto" id="mm10_a1"></audio>
<audio src="m_mp3/mm10_a2.mp3" preload="auto" id="mm10_a2"></audio>
<audio src="m_mp3/mm10_a3.mp3" preload="auto" id="mm10_a3"></audio>
<audio src="m_mp3/mm10_a1.mp3" preload="auto" id="mm10_a4"></audio>
<audio src="m_mp3/mm10_a2.mp3" preload="auto" id="mm10_a5"></audio>
<audio src="m_mp3/mm10_a3.mp3" preload="auto" id="mm10_a6"></audio>
<audio src="m_mp3/mm10_a1.mp3" preload="auto" id="mm10_a7"></audio>
<audio src="m_mp3/mm10_a2.mp3" preload="auto" id="mm10_a8"></audio>
<audio src="m_mp3/mm10_a3.mp3" preload="auto" id="mm10_a9"></audio>
<audio src="m_mp3/mm10_a1.mp3" preload="auto" id="mm10_a10"></audio>
<audio src="m_mp3/mm10_a2.mp3" preload="auto" id="mm10_a11"></audio>
<audio src="m_mp3/mm10_a3.mp3" preload="auto" id="mm10_a12"></audio>
<audio src="m_mp3/mm11_a1.mp3" preload="auto" id="mm11_a1"></audio>
<audio src="m_mp3/mm11_a2.mp3" preload="auto" id="mm11_a2"></audio>
<audio src="m_mp3/mm11_a3.mp3" preload="auto" id="mm11_a3"></audio>
<audio src="m_mp3/mm11_a1.mp3" preload="auto" id="mm11_a4"></audio>
<audio src="m_mp3/mm11_a2.mp3" preload="auto" id="mm11_a5"></audio>
<audio src="m_mp3/mm11_a3.mp3" preload="auto" id="mm11_a6"></audio>
<audio src="m_mp3/mm11_a1.mp3" preload="auto" id="mm11_a7"></audio>
<audio src="m_mp3/mm11_a2.mp3" preload="auto" id="mm11_a8"></audio>
<audio src="m_mp3/mm11_a3.mp3" preload="auto" id="mm11_a9"></audio>
<audio src="m_mp3/mm11_a1.mp3" preload="auto" id="mm11_a10"></audio>
<audio src="m_mp3/mm11_a2.mp3" preload="auto" id="mm11_a11"></audio>
<audio src="m_mp3/mm11_a3.mp3" preload="auto" id="mm11_a12"></audio>
<audio src="m_mp3/mm12_a1.mp3" preload="auto" id="mm12_a1"></audio>
<audio src="m_mp3/mm12_a2.mp3" preload="auto" id="mm12_a2"></audio>
<audio src="m_mp3/mm12_a3.mp3" preload="auto" id="mm12_a3"></audio>
<audio src="m_mp3/mm12_a4.mp3" preload="auto" id="mm12_a4"></audio>
<audio src="m_mp3/mm12_a1.mp3" preload="auto" id="mm12_a5"></audio>
<audio src="m_mp3/mm12_a2.mp3" preload="auto" id="mm12_a6"></audio>
<audio src="m_mp3/mm12_a3.mp3" preload="auto" id="mm12_a7"></audio>
<audio src="m_mp3/mm12_a4.mp3" preload="auto" id="mm12_a8"></audio>
<audio src="m_mp3/mm12_a1.mp3" preload="auto" id="mm12_a9"></audio>
<audio src="m_mp3/mm12_a2.mp3" preload="auto" id="mm12_a10"></audio>
<audio src="m_mp3/mm12_a3.mp3" preload="auto" id="mm12_a11"></audio>
<audio src="m_mp3/mm12_a4.mp3" preload="auto" id="mm12_a12"></audio>
<audio src="m_mp3/mm1_d.mp3" preload="auto" id="mm1_d"></audio>
<audio src="m_mp3/mm2_d.mp3" preload="auto" id="mm2_d"></audio>
<audio src="m_mp3/mm3_d1.mp3" preload="auto" id="mm3_d1"></audio>
<audio src="m_mp3/mm3_d2.mp3" preload="auto" id="mm3_d2"></audio>
<audio src="m_mp3/mm4_d1.mp3" preload="auto" id="mm4_d1"></audio>
<audio src="m_mp3/mm4_d2.mp3" preload="auto" id="mm4_d2"></audio>
<audio src="m_mp3/mm4_d3.mp3" preload="auto" id="mm4_d3"></audio>
<audio src="m_mp3/mm4_d4.mp3" preload="auto" id="mm4_d4"></audio>
<audio src="m_mp3/mm4_d5.mp3" preload="auto" id="mm4_d5"></audio>
<audio src="m_mp3/mm5_d.mp3" preload="auto" id="mm5_d"></audio>
<audio src="m_mp3/mm6_d1.mp3" preload="auto" id="mm6_d1"></audio>
<audio src="m_mp3/mm6_d2.mp3" preload="auto" id="mm6_d2"></audio>
<audio src="m_mp3/mm7_d.mp3" preload="auto" id="mm7_d"></audio>
<audio src="m_mp3/mm8_d.mp3" preload="auto" id="mm8_d"></audio>
<audio src="m_mp3/mm9_d.mp3" preload="auto" id="mm9_d"></audio>
<audio src="m_mp3/mm10_d.mp3" preload="auto" id="mm10_d"></audio>
<audio src="m_mp3/mm11_d.mp3" preload="auto" id="mm11_d"></audio>
<audio src="m_mp3/mm12_d.mp3" preload="auto" id="mm12_d"></audio>


</div>


<form action="./mmcf.php" method="POST" id="form" target="data_save">
<input type="hidden" name="form_room1" id="form_room1" value="" />
<input type="hidden" name="form_room2" id="form_room2" value="" />
<input type="hidden" name="form_room3" id="form_room3" value="" />
<input type="hidden" name="form_room4" id="form_room4" value="" />
<input type="hidden" name="form_room5" id="form_room5" value="" />
<input type="hidden" name="form_room6" id="form_room6" value="" />
<input type="hidden" name="form_room7" id="form_room7" value="" />
<input type="hidden" name="form_room8" id="form_room8" value="" />
<input type="hidden" name="form_room9" id="form_room9" value="" />
<input type="hidden" name="form_room10" id="form_room10" value="" />
<input type="hidden" name="form_room11" id="form_room11" value="" />
<input type="hidden" name="form_room12" id="form_room12" value="" />
<input type="hidden" name="form_room13" id="form_room13" value="" />
<input type="hidden" name="form_room14" id="form_room14" value="" />
<input type="hidden" name="form_room15" id="form_room15" value="" />
<input type="hidden" name="form_room16" id="form_room16" value="" />
<input type="hidden" name="form_room17" id="form_room17" value="" />
<input type="hidden" name="form_room18" id="form_room18" value="" />
<input type="hidden" name="form_mydata" id="form_mydata" value="" />
<input type="hidden" name="form_member" id="form_member" value="" />
<input type="hidden" name="form_itemM1" id="form_itemM1" value="" />
<input type="hidden" name="form_itemM2" id="form_itemM2" value="" />
<input type="hidden" name="form_itemM3" id="form_itemM3" value="" />
<input type="hidden" name="form_itemM4" id="form_itemM4" value="" />
<input type="hidden" name="form_itemM5" id="form_itemM5" value="" />
<input type="hidden" name="form_itemM6" id="form_itemM6" value="" />
<input type="hidden" name="form_itemM7" id="form_itemM7" value="" />
<input type="hidden" name="form_itemM8" id="form_itemM8" value="" />
<input type="hidden" name="form_itemM9" id="form_itemM9" value="" />
<input type="hidden" name="form_itemM10" id="form_itemM10" value="" />
<input type="hidden" name="form_itemM11" id="form_itemM11" value="" />
<input type="hidden" name="form_itemM12" id="form_itemM12" value="" />
<input type="hidden" name="form_itemX" id="form_itemX" value="" />
<input type="hidden" name="form_itemA" id="form_itemA" value="" />
<input type="hidden" name="form_itemB" id="form_itemB" value="" />
<input type="hidden" name="form_MonItem1" id="form_MonItem1" value="" />
<input type="hidden" name="form_MonItem2" id="form_MonItem2" value="" />
<input type="hidden" name="form_MonItem3" id="form_MonItem3" value="" />
<input type="hidden" name="form_MonItem4" id="form_MonItem4" value="" />
<input type="hidden" name="form_MonItem5" id="form_MonItem5" value="" />
<input type="hidden" name="form_MonItem6" id="form_MonItem6" value="" />
<input type="hidden" name="form_MonItem7" id="form_MonItem7" value="" />
<input type="hidden" name="form_MonItem8" id="form_MonItem8" value="" />
<input type="hidden" name="form_MonItem9" id="form_MonItem9" value="" />
<input type="hidden" name="form_MonItem10" id="form_MonItem10" value="" />
<input type="hidden" name="form_MonItem11" id="form_MonItem11" value="" />
<input type="hidden" name="form_MonItem12" id="form_MonItem12" value="" />
<input type="hidden" name="form_OnnenSet" id="form_OnnenSet" value="" />
<input type="hidden" name="Version" id="Version" value="" />
<form>




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