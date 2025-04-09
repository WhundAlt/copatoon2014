<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="user-scalable=no">
<title>もん娘くりっかー  | ケチャップ味のマヨネーズ</title>
<meta name="description" content="もん娘くりっかー " />
<!-- OGP tag -->
<meta property="og:title" content="もん娘くりっかー β" />
<meta property="og:type" content="product" />
<meta property="og:url" content="http://www.tomatama.com/" />
<meta property="og:site_name" content="ケチャップ味のマヨネーズ" />
<meta property="og:description" content="もん娘くりっかー " />
<meta property="og:country-name" content="日本" />
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
ar_itemBD[0] = new Array('フリーハンド','テクニシャン……',1,1,0);
ar_itemBD[1] = new Array('鞭1','初心者向け。あんまり痛くないよ',5,2,2000);
ar_itemBD[2] = new Array('ローター','アルカリ乾電池',10,3,20000);
ar_itemBD[3] = new Array('バイブ','ごっついの。けっこうごっついの',20,4,96969);
ar_itemBD[4] = new Array('アナルパール','とげとげしてるの',30,6,800000);
ar_itemBD[5] = new Array('はね','くすぐったい',1,0,17000000);
ar_itemBD[6] = new Array('鞭2','めっちゃ痛い。やり過ぎ注意',10,30,20000000);
ar_itemBD[7] = new Array('スタンガン','やばい',50,8,999999999);
ar_itemBD[8] = new Array('注射','天国と地獄を味わえる',100,16,10000000000);
ar_itemBD[9] = new Array('電マ','イかせまくり',200,10,77777777777);




var Golden1 = 0;
var Golden2 = 0;

var khName = new Array();
var khJob = new Array();
var khText = new Array();
khName[1]='すら子';
khName[2]='妖精';
khName[3]='狼娘';
khName[4]='ミイラ娘';
khName[5]='死神見習い';
khName[6]='炎の精霊';
khName[7]='キラーマシン';
khName[8]='サキュバス';
khName[9]='バルキリー';
khName[10]='どら子';
khName[11]='天使';
khName[12]='魔王';




khText[1]='洞窟の奥に生息する人の形をしたスライム<br>生き物を溶かして食べてしまうぞ！';
khText[2]='精霊の森に住む妖精<br>ひっそりと森の奥で暮らす<br>人間が大嫌い';
khText[3]='狼と人間のハーフ<br>とっても怖い牙をもつぞ！';
khText[4]='王家のピラミッドに埋葬されたメイド達<br>死ぬことも出来ずよなよなピラミッドの中を徘徊し墓荒らしを襲う';
khText[5]='魂を刈る死神…の見習い<br>今月もノルマを達成できず上司に怒られる<br>「転職しようかな……」';
khText[6]='火山の洞窟に住む上級精霊<br>どんなものでも燃やしてしまうぞ！<br>とっても生意気！';
khText[7]='魔王を倒す勇者の仲間の武道家が改造された姿<br>人間だった頃の記憶はすでに無い人形';
khText[8]='人間を虜にするエッチな悪魔<br>精を搾り取られた人間はミイラのように干からびる';
khText[9]='神に仕える汚れ無き戦乙女<br>不死の肉体を持ち悪霊を退治する';
khText[10]='ドラゴンの女の子<br>とっても強いんだぞ！<br>がおー！';
khText[11]='天界に住む高貴な存在<br>人間界のことにはあまり興味がないらしい';
khText[12]='最強にして最悪の魔族の王<br>神々さえも恐れる強大な力を持つ<br>魔王の力により世界は闇に包まれる';






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
		$('#autosave').html('セーブしました');
	}else{
		$('#autosave').html('オートセーブまで後'+ost+'秒');
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
			$('#name'+i).html('調教部屋'+i+'<br>'+separate(khR[i])+' gold');
			$('#pR'+i).html('');
			$('#Lv'+i).html('');
			$('#sS'+i).html('');
			$('#sK'+i).html('');
		}else{
			$('#rb'+i).css('background-image','url("m_img/roomb.png")');
			$('#rb'+i).css('-moz-opacity','1');
			$('#rb'+i).css('opacity','1');
			$('#name'+i).html(khName[i]);
			$('#name'+i).css('text-decoration','underline');
			$('#name'+i).css('cursor','pointer');
			$('#pR'+i).html(separate(Math.floor(ar_room[i][0])));
			$('#Lv'+i).html('Lv'+separate(Math.floor(ar_room[i][1])));
			$('#sS'+i).html(separate(Math.floor(ar_room[i][4])));
			$('#sK'+i).html(separate(Math.floor(ar_room[i][5])));
			$('#pR'+i).html('調教部屋レベル ： '+separate(ar_room[i][0]));
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
			$('#mLvUp img').attr('src', 'm_img/btm_lv_m2.png');
//			$('#ue1').html(' x'+fKbp);
			$('#ue2').html(' x'+fKhp);
			$('#ue5').html(' x'+fKka);
			$('#ueMLv').html(' +1');
		}
	}
	if(s==2){
		var k = fuku(khR[roomno],ar_room[roomno][0],fKRm);
		if(ar_my[0]>=k){
			$('#rLvUp img').attr('src', 'm_img/btm_lv_r2.png');
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
		$('#mLvUp img').attr('src', 'm_img/btm_lv_m1.png');
	}
	if(s==2){
		$('#rLvUp img').attr('src', 'm_img/btm_lv_r1.png');
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
			$('#mm_select2').html('<img src="m_img/mm_select2.jpg">');
			$('#mm_select3').html('<img src="m_img/mm_select3.jpg">');
			$('#mm_select4').html('<img src="m_img/mm_select4on.jpg">');


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
			$('#mm_select2').html('<img src="m_img/mm_select2.jpg">');
			$('#mm_select3').html('<img src="m_img/mm_select3on.jpg">');
			$('#mm_select4').html('<img src="m_img/mm_select4.jpg">');
			$("#gas1").slideUp('normal');
			$("#onnen").slideUp('normal');
			setTimeout(function() {$("#status1").slideUp('normal');},400);
			setTimeout(function() {$("#status2").slideUp('fast');},240);
			setTimeout(function() {$("#status3").slideUp('fast');},120);
			setTimeout(function() {$("#status4").slideUp('fast');},0);
			setTimeout(function() {$("#status5").slideDown('slow');},500);

		} else if(s==2){
			$('#mm_select1').html('<img src="m_img/mm_select1.jpg">');
			$('#mm_select2').html('<img src="m_img/mm_select2on.jpg">');
			$('#mm_select3').html('<img src="m_img/mm_select3.jpg">');
			$('#mm_select4').html('<img src="m_img/mm_select4.jpg">');

			$("#status1").slideUp('normal');
			$("#status2").slideUp('normal');
			$("#status3").slideUp('normal');
			$("#status4").slideUp('normal');
			$("#status5").slideUp('normal');
			$("#onnen").slideDown('normal');
			$("#gas1").slideUp('normal');

		} else {
			$('#mm_select1').html('<img src="m_img/mm_select1on.jpg">');
			$('#mm_select2').html('<img src="m_img/mm_select2.jpg">');
			$('#mm_select3').html('<img src="m_img/mm_select3.jpg">');
			$('#mm_select4').html('<img src="m_img/mm_select4.jpg">');
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
			$('#mm_select2').html('<img src="m_img/mm_select2.jpg">');
			$('#mm_select3').html('<img src="m_img/mm_select3.jpg">');
			$('#mm_select4').html('<img src="m_img/mm_select4.jpg">');

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
					if(i==1){txt+=khName[a]+'音声<br>';}
					if(i==2){txt+='出荷数 1,000<br>';}
					if(i==3){txt+='出荷数 10,000<br>';}
					if(i==4){txt+='虐殺数 100<br>';}
					if(i==5){txt+='虐殺数 1,000<br>';}
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
		$('#mLvUp img').attr('src', 'm_img/btm_lv_m1.png');
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
		$('#rLvUp img').attr('src', 'm_img/btm_lv_r1.png');
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
	t='装備品：'+ar_itemBD[parseFloat(a)][0]+'<br>';
	t=t+'調教力：'+ar_itemBD[parseFloat(a)][2]+'<br>';
	t=t+'ダメージ：'+ar_itemBD[parseFloat(a)][3]+'<br>';
	t=t+ar_itemBD[parseFloat(a)][1];
	if(ar_itemB[a]=='0'){t=t+'<br>購入価格 '+separate(ar_itemBD[parseFloat(a)][4])+' Gold'}
	$('.itemMemo').html(t);
}
function funItemText1(a,b){
	var t=''
	var ttl=''
	ttl=khName[parseFloat(a)];
	if(b==0){t=ttl+'の媚薬<br>'+ttl+'をめろめろにするぞ<br>調教自動増加率が1.2倍になるぞ';}
	if(b==1){t=ttl+'の体力薬<br>'+ttl+'の回復を上げるぞ<br>最大HPが1.5倍になるぞ';}
	if(b==2){t=ttl+'の魔法石<br>'+ttl+'の回復を上げるぞ<br>自動HP増加率が1.5倍になるぞ';}
	if(b==3){t=ttl+'のリボン<br>'+ttl+'の魅力を上げる呪われたリボン<br>販売価格が2倍になるぞ';}

	if(b==4){t=ttl+'の血統書I<br>やったね！'+ttl+'を25匹売りさばいたぞ！<br>純血'+ttl+'の高品質証明書<br>販売価格がさらに1.2倍になるぞ';}
	if(b==5){t=ttl+'の血統書II<br>やったね！'+ttl+'を50匹売りさばいたぞ！<br>純血'+ttl+'のレア証明書<br>販売価格がさらに1.2倍になるぞ';}
	if(b==6){t=ttl+'の血統書III<br>やったね！'+ttl+'を75匹売りさばいたぞ！<br>純血'+ttl+'のスーパーレア証明書<br>販売価格がさらに1.2倍になるぞ';}
	if(b==7){t=ttl+'の血統書IV<br>やったね！'+ttl+'を100匹売りさばいたぞ！<br>純血'+ttl+'のウルトラレア証明書<br>販売価格がさらに1.2倍になるぞ';}

	if(b==8){t=ttl+'の涙<br>やったね！'+ttl+'を20匹〆たぞ！<br>'+ttl+'の血がにじんだ涙<br>最大HPがさらに2倍になるぞ';}
	if(b==9){t=ttl+'の心<br>やったね！'+ttl+'を50匹〆たぞ！<br>'+ttl+'の恨みが濃縮された心<br>最大HPがさらに2倍になるぞ';}
	if(b==10){t=ttl+'の結晶<br>やったね！'+ttl+'を100匹〆たぞ！<br>'+ttl+'の叫びの結晶<br>最大HPがさらに2倍になるぞ';}
	if(b==11){t=ttl+'の魂<br>やったね！'+ttl+'を200匹〆たぞ！<br>'+ttl+'の狂った魂<br>最大HPがさらに2倍になるぞ';}
	if(ar_itemM[a][b]=='0'){t=t+'<br>購入価格 '+separate(ar_itemKKM[a][b])+' Gold';}
	$('.itemMemo').html(t);
}
function funItemText2(a){
 
	if(a==0){t='幸せのコイン<br>総金額が100万を超えました。<br>おめでとう！販売価格が'+khItemAllBonusK+'倍になるぞ！';}
	if(a==1){t='幸せのお札<br>総金額が1億を超えました。<br>おめでとう！販売価格が'+khItemAllBonusK+'倍になるぞ！';}
	if(a==2){t='幸せのドル袋<br>総金額が1兆を超えました。<br>おめでとう！販売価格が'+khItemAllBonusK+'倍になるぞ！';}
	if(a==3){t='幸せの延べ棒<br>総金額が1京を超えました。<br>おめでとう！販売価格が'+khItemAllBonusK+'倍になるぞ！';}

	if(a==4){t='シングルクリック<br>1000クリック達成。<br>おめでとう！クリック調教力が'+khItemAllBonusB+'倍になるぞ！';}
	if(a==5){t='ダブルクリック<br>1万クリック達成。<br>おめでとう！クリック調教力が'+khItemAllBonusB+'倍になるぞ！';}
	if(a==6){t='トリプルクリック<br>10万クリック達成。<br>おめでとう！クリック調教力が'+khItemAllBonusB+'倍になるぞ！';}
	if(a==7){t='テトリスクリック<br>100万クリック達成。<br>おめでとう！クリック調教力が'+khItemAllBonusB+'倍になるぞ！';}

	if(a==8){t='商売繁盛！<br>奴隷販売100達成。<br>おめでとう！販売価格が'+khItemAllBonusK+'倍になるぞ！';}
	if(a==9){t='血も涙もない！<br>奴隷販売1000達成。<br>おめでとう！販売価格が'+khItemAllBonusK+'倍になるぞ！';}
	if(a==10){t='お前の血は何色だ？<br>奴隷販売1万達成。<br>おめでとう！販売価格が'+khItemAllBonusK+'倍になるぞ！';}
	if(a==11){t='・・・・風が、・・・・くる！・・・・<br>奴隷販売10万達成。<br>おめでとう！販売価格が'+khItemAllBonusK+'倍になるぞ！';}

	if(a==12){t='殺人鬼！<br>虐殺10回達成。<br>おめでとう！販売価格が'+khItemAllBonusK+'倍になるぞ！';}
	if(a==13){t='処刑人！<br>虐殺50回達成。<br>おめでとう！販売価格が'+khItemAllBonusK+'倍になるぞ！';}
	if(a==14){t='人でなし！<br>虐殺200回達成。<br>おめでとう！販売価格が'+khItemAllBonusK+'倍になるぞ！';}
	if(a==15){t='悪魔！<br>虐殺500回達成。<br>おめでとう！販売価格が'+khItemAllBonusK+'倍になるぞ！';}
	if ($('#area4').css('display') == 'block'){t=t+'<br>購入価格 '+separate(ar_itemKKX[a])+' Gold';}

	$('.itemMemo').html(t);
}
function funItemText3(a){
	if(a==0){t='完売御礼！<br>全部の調教部屋を解放させたよ！<br>販売価格が'+khItemAllBonusK+'倍になるぞ！';}
	if(a==1){t='あへ！<br>あへ10回クリック<br>販売価格が'+khItemAllBonusK+'倍になるぞ！';}
	if(a==2){t='あへあへ！<br>あへ50回クリック<br>販売価格が'+khItemAllBonusK+'倍になるぞ！';}
	if(a==3){t='あへあへあへ！<br>あへ100回クリック<br>販売価格が'+khItemAllBonusK+'倍になるぞ！';}
	if(a==4){t='あへあへあへあへ！<br>あへ200回クリック<br>販売価格が'+khItemAllBonusK+'倍になるぞ！';}
	if(a==5){t='大量虐殺！<br>皆殺し10回達成。<br>おめでとう！販売価格が'+khItemAllBonusK+'倍になるぞ！';}
	if(a==6){t='絶滅の危機！<br>皆殺し50回達成。<br>おめでとう！販売価格が'+khItemAllBonusK+'倍になるぞ！';}
	if(a==7){t='後悔はないのか？<br>皆殺し100回達成。<br>おめでとう！販売価格が'+khItemAllBonusK+'倍になるぞ！';}
	if(a==8){t='はぁと！<br>皆殺し200回達成。<br>おめでとう！販売価格が'+khItemAllBonusK+'倍になるぞ！';}
	if ($('#area4').css('display') == 'block'){t=t+'<br>購入価格 '+separate(ar_itemKKA[a])+' Gold';}
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
		<h1>もん娘くりっかー</h1>
		<div style="line-height: 100%;height:60px;">

もん娘をクリックで調教して出荷しよう！クリックしすぎると死ぬぞ！<br>


		</div>

	</div>
	<div id="kingaku">


		<table align="right">
			<tr valign="top">
				<th>所持金</th>
				<td><span id="yen">0</span></td>
			</tr>
			<tr valign="top">
				<th>クリック</th>
				<td><span id="cl">0</span></td>
			</tr>
			<tr valign="top">
				<td colspan="2"><span id="autosave"></span> <a href="mmc.php?la=0" style="color:red;">日本語</a> | <a href="mmce.php?la=1" style="color:red;">English</a></td>
			</tr>
			<tr valign="top">
				<td colspan="2">

<select id="bgm_set" OnChange='funBgmSelect()'>
	<option value="0">BGM停止</option>
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
	<span class="menu" id="mn1">調教部屋</span> | 
	<span class="menu" id="mn2">マイルーム</span> | 
	<span class="menu" id="mn3">装備</span> | 
	<span class="menu" id="mn4">ショップ</span> | 
	<span class="menu" id="mn5">実績ルーム</span> | 
	<span class="menu" id="mn6">セーブ＆ロード</span> | 
	<span class="menu" id="mn7">FAQ</span> | 
	<span class="menu" id="mn8">クレジット</span> | 
	<span class="menu" id="mn9">掲示板</span> | 
	<span class="menu" id="mn10">バージョン</span> | 
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


<span id="gas_all_open">ガス室全解放</span> | 
<span id="gas_all_close">ガス室緊急停止</span>
　　　　　　
<span id="onnen_killer">怨念全滅</span>
<span class="red">【注意】所持金が0になります</span>

　　
<input type="checkbox" id="Effect_mon" value="1" /> もん娘クリックのエフェクト停止	</div>




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
					<div id="mm_select4" onmouseover="$('#mm_select4 img').css('opacity','0.7');" onmouseout="$('#mm_select4 img').css('opacity','1');"><img src="m_img/mm_select4.jpg"></div>
					<div id="mm_select3" onmouseover="$('#mm_select3 img').css('opacity','0.7');" onmouseout="$('#mm_select3 img').css('opacity','1');"><img src="m_img/mm_select3.jpg"></div>
					<div id="mm_select2" onmouseover="$('#mm_select2 img').css('opacity','0.7');" onmouseout="$('#mm_select2 img').css('opacity','1');"><img src="m_img/mm_select2.jpg"></div>
					<div id="mm_select1" onmouseover="$('#mm_select1 img').css('opacity','0.7');" onmouseout="$('#mm_select1 img').css('opacity','1');"><img src="m_img/mm_select1on.jpg"></div>
				</div>



				<div class="waku_dq" id="status1">

<table width="100%" class="status_table">
	<tr>
		<td><br></td>
		<td>基本値(初期値)</td>
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
		<td style="text-align:left;">調教力</td>
		<td><span id="stDt1"></span></td>
		<td>x<span id="stDt1MR"></span><span id="ue3" style="color:#ff0;"></span></td>
		<td>x<span id="stDt1m"></span></td>
		<td>x<span id="stDt1i"></span></td>
	</tr>
	<tr>
		<td style="text-align:left;">回復力</td>
		<td><span id="stRj1"></span></td>
		<td>x<span id="stRj1MR"></span><span id="ue4" style="color:#ff0;"></span></td>
		<td>-</td>
		<td>x<span id="stRj1i"></span></td>
	</tr>
	<tr>
		<td style="text-align:left;">売価</td>
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
		<td style="text-align:left;">ガス殺傷力</td>
		<td><span id="stGas1"></span></td>
		<td>x<span id="stGas1MR"></span><span id="ue8" style="color:#ff0;"></span></td>
		<td>-</td>
		<td>-</td>
	</tr>
</table>
■ 補正値<table width="100%" class="status_table">
	<tr>
		<td style="text-align:left;">DP</td>
		<td><span id="stBp2"></span></td>
	</tr>
	<tr>
		<td style="text-align:left;">HP</td>
		<td><span id="stHp2"></span></td>
	</tr>
	<tr>
		<td style="text-align:left;">調教力</td>
		<td><span id="stDt2"></span></td>
	</tr>
	<tr>
		<td style="text-align:left;">回復力</td>
		<td><span id="stRj2"></span></td>
	</tr>
	<tr>
		<td style="text-align:left;">売価</td>
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
		<td style="text-align:left;">もん娘 LvUp</td>
		<td><span id="kakakuLv"></span> Gold</td>
	</tr>
	<tr>
		<td style="text-align:left;">調教部屋 LvUp</td>
		<td><span id="rbLVUp"></span> Gold</td>
	</tr>
</table>
				</div>
				<div id="status4" style="width: 490px;height:100px;padding:0 7px;margin:10px 0 10px 0;float:left;position:relative;"> 
					<div style="position:absolute;width:240px;height:80px;top:0;left:0;cursor:pointer;"     id="mLvUp"><img src="m_img/btm_lv_m1.png"></div>
					<div style="position:absolute;width:240px;height:80px;top:0;left:245px;cursor:pointer;" id="rLvUp"><img src="m_img/btm_lv_r1.png"></div>
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
										【注意】<br>
					IE9以上、FireFox、Chrome、Opera最新版に対応しています。<br>
					SafariはQuickTimeが必要です。
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
							<td colspan="2" style="text-align:left;">殺傷能力：<span id="stGas2MR"></span></td>
						</tr>
					</table>

					<div class="warning_area"><div class="warning_area_on"></div></div>


				</div>
				<div id="onnen" style="padding-top:20px;display:none;">
					<p>怨念が<span id="onnen_cnt"></span>匹おんねん...</p>

					<div id="onnnennonnnenn">
						<img src="m_img/fabu.jpg" id="fabu" style="cursor:pointer;">
					</div>

					<div>
						死んだときに流れる血の量<br>
						基本値：<span id="onnen1"></span><br>
						怨念補正：<span id="onnen2"></span><br>
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
				<th>クリック数</th>
				<td><span id="cl_my">0</span> Click</td>
			</tr>
			<tr valign="top">
				<th>所持金</th>
				<td><span id="yen_my">0</span> Gold</td>
			</tr>
			<tr valign="top">
				<th>最大所持金</th>
				<td><span id="yen1">0</span> Gold</td>
			</tr>
			<tr valign="top">
				<th>トータル獲得金額</th>
				<td><span id="yen2">0</span> Gold</td>
			</tr>
			<tr valign="top">
				<th>総出荷数</th>
				<td><span id="mon1">0</span> Sales</td>
			</tr>
			<tr valign="top">
				<th>総虐殺数</th>
				<td><span id="mon2">0</span> Deaths</td>
			</tr>
			<tr valign="top">
				<th>メイド</th>
				<td><span id="member_md">0</span></td>
			</tr>
			<tr valign="top">
				<th>バイヤー</th>
				<td><span id="member_by">0</span></td>
			</tr>
			<tr valign="top">
				<th>あへクリック数</th>
				<td><span id="gc1">0</span> Click</td>
			</tr>
			<tr valign="top">
				<th>皆殺し数</th>
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

		<div style="position:absolute;top:160px;left:0;">メイド価格</div>
		<div style="position:absolute;top:180px;left:0;">バイヤー価格</div>

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
	<div style="width: 840px;height: 22px;padding: 7px 0 0 0;margin:2px auto;color:#fff;">■ 装備武器</div>
	<div style="border: solid 1px #808080;width: 840px;height: 80px;padding: 7px;overflow: auto;margin:2px auto;"> 
		<div id="itemData0r"></div>
	</div>
	<div style="width: 840px;height: 22px;padding: 7px 0 0 0;margin:2px auto;color:#fff;">■ もってる武器</div>
	<div style="border: solid 1px #808080;width: 840px;height: 220px;padding: 7px;overflow: auto;margin:2px auto;"> 
		<div id="itemData0"></div>
	</div>
	<div class="waku_dq" style="margin:20px;width:835px;height:105px;">
		<div class="itemMemo">■ 装備品だよ！</div>
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



		セーブデータ		 ※「failed to save」と表示されたらセーブ失敗です＞＜ しばらくたってからもう一度この画面表示してみてね！<br>

		<textarea name="save" id="save" style="width:800px;height:200px;overflow-x:hidden;"></textarea><br>
		<br>

		<form action="./mmc.php" method="POST">
		ロード<br>
		<textarea name="load" id="load" style="width:800px;height:200px;overflow-x:hidden;"></textarea><br>
		<input type="submit" name="submit" value="ロード実行">
		<input type="hidden" name="s" value="1">
		<input type="hidden" name="la" value="0">
		</form>
		<br>

		<form action="./mmc.php" method="POST">
		データを初期化します<br>
		<input type="submit" value="初期化"><br>
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
		<th>もん娘</th>
		<td>モンスターむすめ。とっても強い。</td>
		<th>調教部屋</th>
		<td>もん娘を大事に育てる部屋。育てたら売りさばこう。</td>
	</tr>
	<tr>
		<th>出荷数</th>
		<td>もん娘を売りさばいた数。</td>
		<th>虐殺数</th>
		<td>もん娘を〆た数。</td>
	</tr>
	<tr>
		<th>あへ</th>
		<td>もん娘あへりまくり。所持金UP</td>
		<th>皆殺し</th>
		<td>もん娘皆殺し。</td>
	</tr>
	<tr>
		<th>装備</th>
		<td>もん娘を育てるための道具。</td>
		<th>ショップ</th>
		<td>とってもお得なアイテムを売ってるよ。</td>
	</tr>
	<tr>
		<th>実績ルーム</th>
		<td colspan="3">ショップで買ったお得なアイテムを保管してるよ。</td>
	</tr>
	<tr>
		<td class="faq_t_title" colspan="4">■ もん娘ステータス</td>
	</tr>
	<tr>
		<th>DP</th>
		<td colspan="3">Disciplire Point (調教ポイント)、もん娘を出荷するために必要な調教ポイント。紫色のバー</td>
	</tr>
	<tr>
		<th>HP</th>
		<td colspan="3">Hit Point (ヒットポイント)、もん娘の体力。０になると死ぬぞ。緑色のバー。</td>
	</tr>
	<tr>
		<th>調教力</th>
		<td>調教部屋が自動で行う調教する力</td>
		<th>回復力</th>
		<td>もん娘の回復力</td>
	</tr>
	<tr>
		<th>売価</th>
		<td>もん娘の売価</td>
		<th>基本値</th>
		<td>パラメータの初期値。</td>
	</tr>
	<tr>
		<th>CTP</th>
		<td>Click Torture Rate。1 Clickの調教力</td>
		<th>CAP</th>
		<td>Click Attack Power。1 Clickのダメージ</td>
	</tr>


	<tr>
		<th>怨念</th>
		<td>怨念が復活のスピードを遅くする</td>
		<th>供養</th>
		<td>怨念を減らす</td>
	</tr>

	<tr>
		<th>Mm/Rm</th>
		<td>もん娘Lv/調教部屋Lvボーナス。</td>
		<th>M/B/E</th>
		<td>メイドとバイヤーと装備によるパラメータボーナス。</td>
	</tr>
	<tr>
		<th>Item</th>
		<td>購入したアイテムによるパラメータボーナス。</td>
		<th>補正値</th>
		<td>各パラメータの値にメイドやバイヤーやアイテムの補正を行った後の値</td>
	</tr>
	<tr>
		<td class="faq_t_title" colspan="4">■ マイルーム</td>
	</tr>
	<tr>
		<th>メイド</th>
		<td>もん娘を調教してくれる。１メイドで5％増加</td>
		<th>バイヤー</th>
		<td>もん娘を高く売ってくれる。１バイヤーで5％増加</td>
	</tr>
	<tr>
		<td class="faq_t_title" colspan="4">■ 装備</td>
	</tr>
	<tr>
		<th>調教力</th>
		<td>1クリックあたりの基本調教値の増える量</td>
		<th>ダメージ</th>
		<td>1クリックあたりのダメージ基本量。HPが減る</td>
	</tr>
</table>
<p class="faq_q">Q.このゲームは何ですか？</p>
<p class="faq_a">A.魔王の復活により人々は魔族に怯え（略</p>
<p class="faq_q">Q.英訳ちょっとちがくね？</p>
<p class="faq_a">A.適切な英訳を掲示板で教えてください。切実。</p>
<p class="faq_q">Q.数字が大きくなると「e」の表示がつきます</p>
<p class="faq_a">A.仕様です。数字の限界です＞＜</p></p>
<p class="faq_q">Q.音が鳴らない</p>
<p class="faq_a">A.IE10以上、Chrome、FireFox、Safari、Opera最新版対応、Android/iPhone/iPadは一部対応</p>
<p class="faq_q">Q.リンクしていい？掲示板で紹介していい？</p>
<p class="faq_a">A.ご自由にどうぞ！むしろ大歓迎！</p>
<p class="faq_q">Q.何かバグみっけた</p>
<p class="faq_a">A.掲示板に報告お願いします＞＜</p>





	</div>
</div>




<div class="area" id="area8">


	<div style="padding:10px;">
			<span id="bosyu">
<span id="cb1">お</span><span id="cb2">ち</span><span id="cb3">ん</span><span id="cb4">ち</span><span id="cb5">ん</span><span id="cb6">び</span><span id="cb7">ろ</span><span id="cb8">～</span><span id="cb9">～</span><span id="cb10">～</span><span id="cb11">～</span><span id="cb12">～</span><span id="cb13">～</span><span id="cb14">～</span><span id="cb15">ん</span>
			</span><br>
			

	<br>

<table width="100%">
	<tr valign="top">
		<td style="text-align:left;">

	BGM<br>
	月に憑かれたピエロ</a><br>

	<br>

	キャラクターデザイン/魔方陣デザイン：<br>
	83ピコる<br>
	篠<br>
	みそし衣乃<br>
	桐ヶ谷ユウジ<br>
	WESTSIDE<br>


	<br>
	Voice<br>
<table>
	<tr>
		<td style="text-align:left;">すら子 </td>
		<td style="text-align:left;">CV： <a href="http://inukai.grrr.jp/" target="_blank">犬飼あお</a></td>
	</tr>
	<tr>
		<td style="text-align:left;">妖精</td>
		<td style="text-align:left;">CV： <a href="http://twitter.com/ayacell_foreign" target="_blank">綾瀬桂吾</a></td>
	</tr>
	<tr>
		<td style="text-align:left;">狼娘</td>
		<td style="text-align:left;">CV： <a href="http://www.voiceblog.jp/mo_mo/" target="_blank">桃華 れん</a></td>
	</tr>
	<tr>
		<td style="text-align:left;">ミイラ娘</td>
		<td style="text-align:left;">CV： <a href="http://mochi.moo.jp/" target="_blank">餅よもぎ</a></td>
	</tr>
	<tr>
		<td style="text-align:left;">死神見習い</td>
		<td style="text-align:left;">CV： <a href="http://karintokarin55.seesaa.net/" target="_blank">井上果林</a></td>
	</tr>
	<tr>
		<td style="text-align:left;">炎の精霊</td>
		<td style="text-align:left;">CV： <a href="http://kanoko46.blog.fc2.com/" target="_blank">かの仔</a></td>
	</tr>
	<tr>
		<td style="text-align:left;">キラーマシン</td>
		<td style="text-align:left;">CV： <a href="http://7calmvoice.wix.com/rutolovoice" target="_blank">七凪るとろ</a></td>
	</tr>
	<tr>
		<td style="text-align:left;">サキュバス</td>
		<td style="text-align:left;">CV： <a href="http://poplartree.blog.fc2.com/" target="_blank">沢野ぽぷら</a></td>
	</tr>
	<tr>
		<td style="text-align:left;">バルキリー</td>
		<td style="text-align:left;">CV： <a href="http://www.voiceblog.jp/geministar/" target="_blank">山田じぇみ子</a></td>
	</tr>
	<tr>
		<td style="text-align:left;">どら子</td>
		<td style="text-align:left;">CV： <a href="http://shiho.moe.in/v/" target="_blank">分倍河原シホ</a></td>
	</tr>
	<tr>
		<td style="text-align:left;">天使</td>
		<td style="text-align:left;">CV： <a href="http://mirukurumidiary.blog66.fc2.com/" target="_blank">みる☆くるみ</a></td>
	</tr>
	<tr>
		<td style="text-align:left;">魔王</td>
		<td style="text-align:left;">CV： <a href="http://gold115.u-me.jp/momo115/" target="_blank">秋葉モモ代</a></td>
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










	<a href="./room002.php" target="_blank">あへくりっく</a>、<a href="/click/omake/u18/" target="_blank">あへくりっく２</a>もよろしくね！<br>
	<a href="/click/omake/u18/" target="_blank"><img src="/click/omake/u18/img/bn_ahe2_j1.jpg"></a><br>
	<a href="./room002.php" target="_blank"><img src="/click/aks/bn_ahecl_200x70.jpg"></a><br>
	<br>


<br>
presented by <a href="http://www.tomatama.com/" target="_blank"><img src="/img/bn88x31.gif" alt="ケチャップ味のマヨネーズ" width="88" height="31" /></a><br>

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
		Ver 1.01.02 2015/04/18 英語修正とかちょっとしたバグ修正とか<br>
		Ver 1.01.01 2015/04/11 マイルームのメイド、バイヤーの処理速度UP<br>
		Ver 1.00.00 2015/04/04 open!!!<br>
		Ver 0.95.02 2015/02/25 CM<br>
		Ver 0.95.01 2015/02/24 ガス室/BGM調整<br>
		Ver 0.94.01 2015/02/23 怨念がおんねん<br>
		Ver 0.93.01 2015/02/10 ガス室仮設置<br>
		Ver 0.93.00 2015/02/09 けっこう修正<br>
		Ver 0.92.08 2015/02/07 ちょこっと修正<br>
		Ver 0.92.07 2015/02/06 ちょろちょろ修正<br>
		Ver 0.92.06 2015/02/05 たくさん修正<br>
		Ver 0.92.05 2015/02/04 ちょろちょろ修正<br>
		Ver 0.92.04 2015/02/03 ちょろちょろ修正<br>
		Ver 0.92.03 2015/02/02 たくさん修正<br>
		Ver 0.92.02 2015/01/31 ちょろちょろ修正<br>
		Ver 0.92.01 2015/01/30 ちょろちょろ修正<br>
		Ver 0.92.00 2015/01/29 イラスト設置 ベータ版オープン<br>
		Ver 0.91.00 2015/01/22 素材イラストを仮設置<br>
		Ver 0.90.00 2015/01/03 開発中だよー、あとイラスト……	</div>
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


				<a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.tomatama.com/click/mmc.php" data-lang="ja">ツイート</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

	<a href="http://www.tomatama.com/" target="_blank">ケチャマヨサイト(18禁)</a><br>
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
このゲームはエロゲームです。<br>１８歳未満はご利用いただけません。<br><br>
<span class="r18ck" id="r18a">１８歳以上です</span>　|　<span class="r18ck" id="r18b">１８歳未満です。エロとかないわー。</span>





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




</body>
</html>