<?php
//Code written by JrMasterModelBuilder.
//Thanks to Biomaniac, Gatanui, and -Auron-.
//Mata Nui Online Game is copyright The LEGO Group and possibly Templar Studios.
//startnew.php, setlanguage.php, setstate.php, getdate.txt, getlanguage.txt, and getstate.txt were created to recreate features and are not original.


//This block gets the variables from the query string sent by player.swf.
$mvn=$_GET['mvn'];
$vsh=$_GET['vsh'];
$hsh=$_GET['hsh'];
$sho=$_GET['sho'];
$s_bg=$_GET['s_bg'];
$s_bg_v=$_GET['s_bg_v'];
$s_fx=$_GET['s_fx'];
$m_mv=$_GET['m_mv'];
$ltA=$_GET['ltA'];
$ltB=$_GET['ltB'];
$Gno=$_GET['Gno'];
$ltS=$_GET['ltS'];
$IltS=$_GET['IltS'];
$TaB=$_GET['TaB'];
$Gak=$_GET['Gak'];
$Lek=$_GET['Lek'];
$Ga_c=$_GET['Ga_c'];
$Ga_v=$_GET['Ga_v'];
$Bk=$_GET['Bk'];
$Pok=$_GET['Pok'];
$q_k_u=$_GET['q_k_u'];
$q_k=$_GET['q_k'];
$k_b=$_GET['k_b'];
$k_b_u=$_GET['k_b_u'];
$Chi=$_GET['Chi'];
$Onu_L=$_GET['Onu_L'];
$Onu_D=$_GET['Onu_D'];
$Onu_R=$_GET['Onu_R'];
$Lv_b=$_GET['Lv_b'];
$Fl=$_GET['Fl'];
$Kr=$_GET['Kr'];
$Taipu=$_GET['Taipu'];
$F_s=$_GET['F_s'];
$Ens=$_GET['Ens'];
$Kok=$_GET['Kok'];
$f_K=$_GET['f_K'];
$f_L=$_GET['f_L'];
$f_P=$_GET['f_P'];
$f_O=$_GET['f_O'];
$f_T=$_GET['f_T'];
$f_G=$_GET['f_G'];
$cMa=$_GET['cMa'];
$cKa=$_GET['cKa'];
$cTa=$_GET['cTa'];
$cKo=$_GET['cKo'];
$cHa=$_GET['cHa'];
$cTu=$_GET['cTu'];
$Quest=$_GET['Quest'];
$cBarNum=$_GET['cBarNum'];
$C1=$_GET['C1'];
$C2=$_GET['C2'];
$C3=$_GET['C3'];
$C4=$_GET['C4'];
$C5=$_GET['C5'];
$C6=$_GET['C6'];
$fgW=$_GET['fgW'];
$fgV=$_GET['fgV'];
$fgS=$_GET['fgS'];
$MaHlth=$_GET['MaHlth'];
$KaHlth=$_GET['KaHlth'];
$TuHlth=$_GET['TuHlth'];
$KoHlht=$_GET['KoHlht'];
$HaHlth=$_GET['HaHlth'];
$TaHlth=$_GET['TaHlth'];
$Backpack=$_GET['Backpack'];
$ShowBackPack=$_GET['ShowBackPack'];
$I4WVisited=$_GET['I4WVisited'];


//This block checks if any of the variables are defined in the query string. If not, the script will exit without saving blank data.
if ($mvn == "" && $vsh == "" && $hsh == "" && $sho == "" && $s_bg == "" && $s_bg_v == "" && $s_fx == "" && $m_mv == "" && $ltA == "" && $ltB == "" && $Gno == "" && $ltS == "" && $IltS == "" && $TaB == "" && $Gak == "" && $Lek == "" && $Ga_c == "" && $Ga_v == "" && $Bk == "" && $Pok == "" && $q_k_u == "" && $q_k == "" && $k_b == "" && $k_b_u == "" && $Chi == "" && $Onu_L == "" && $Onu_D == "" && $Onu_R == "" && $Lv_b == "" && $Fl == "" && $Kr == "" && $Taipu == "" && $F_s == "" && $Ens == "" && $Kok == "" && $f_K == "" && $f_L == "" && $f_P == "" && $f_O == "" && $f_T == "" && $f_G == "" && $cMa == "" && $cKa == "" && $cTa == "" && $cKo == "" && $cHa == "" && $cTu == "" && $Quest == "" && $cBarNum == "" && $C1 == "" && $C2 == "" && $C3 == "" && $C4 == "" && $C5 == "" && $C6 == "" && $fgW == "" && $fgV == "" && $fgS == "" && $MaHlth == "" && $KaHlth == "" && $TuHlth == "" && $KoHlht == "" && $HaHlth == "" && $TaHlth == "" && $Backpack == "" && $ShowBackPack == "" && $I4WVisited == "")
{
exit();
}


//This block puts defaults into variables that are undefined.
//Should the mvn variable default, other variables for the frame properties are attached.
if ($mvn=="")
{
$mvn="I.1-S.swf";
$vsh="0";
$hsh="1";
$sho="0";
$s_bg="Sound_Waves.swf";
$s_fx="Sound_Beach.swf";
}

if ($vsh=="")
{
$vsh="0";
}

if ($hsh=="")
{
$hsh="0";
}

if ($sho=="")
{
$sho="0";
}

if ($s_bg=="")
{
$s_bg="blank.swf";
}

if ($s_bg_v=="")
{
$s_bg_v="HIGH";
}

if ($s_fx=="")
{
$s_fx="blank.swf";
}

if ($m_mv=="")
{
$m_mv="blank.swf";
}

if ($ltA=="")
{
$ltA="0";
}

if ($ltB=="")
{
$ltB="0";
}

if ($Gno=="")
{
$Gno="0";
}

if ($ltS=="")
{
$ltS="0";
}

if ($IltS=="")
{
$IltS="0";
}

if ($TaB=="")
{
$TaB="0";
}

if ($Gak=="")
{
$Gak="0";
}

if ($Lek=="")
{
$Lek="0";
}

if ($Ga_c=="")
{
$Ga_c="0";
}

if ($Ga_v=="")
{
$Ga_v="0";
}

if ($Bk=="")
{
$Bk="0";
}

if ($Pok=="")
{
$Pok="0";
}

if ($q_k_u=="")
{
$q_k_u="0";
}

if ($q_k=="")
{
$q_k="0";
}

if ($k_b=="")
{
$k_b="0";
}

if ($k_b_u=="")
{
$k_b_u="0";
}

if ($Chi=="")
{
$Chi="0";
}

if ($Onu_L=="")
{
$Onu_L="0";
}

if ($Onu_D=="")
{
$Onu_D="0";
}

if ($Onu_R=="")
{
$Onu_R="0";
}

if ($Lv_b=="")
{
$Lv_b="0";
}

if ($Fl=="")
{
$Fl="0";
}

if ($Kr=="")
{
$Kr="0";
}

if ($Taipu=="")
{
$Taipu="Free";
}

if ($F_s=="")
{
$F_s="0";
}

if ($Ens=="")
{
$Ens="0";
}

if ($Kok=="")
{
$Kok="0";
}

if ($f_K=="")
{
$f_K="0";
}

if ($f_L=="")
{
$f_L="0";
}

if ($f_P=="")
{
$f_P="0";
}

if ($f_O=="")
{
$f_O="0";
}

if ($f_T=="")
{
$f_T="0";
}

if ($f_G=="")
{
$f_G="0";
}

if ($cMa=="")
{
$cMa="0";
}

if ($cKa=="")
{
$cKa="0";
}

if ($cTa=="")
{
$cTa="0";
}

if ($cKo=="")
{
$cKo="0";
}

if ($cHa=="")
{
$cHa="0";
}

if ($cTu=="")
{
$cTu="0";
}

if ($Quest=="")
{
$Quest="0";
}

if ($cBarNum=="")
{
$cBarNum="0";
}

if ($C1=="")
{
$C1="";
}

if ($C2=="")
{
$C2="";
}

if ($C3=="")
{
$C3="";
}

if ($C4=="")
{
$C4="";
}

if ($C5=="")
{
$C5="";
}

if ($C6=="")
{
$C6="";
}

if ($fgW=="")
{
$fgW="0";
}

if ($fgV=="")
{
$fgV="0";
}

if ($fgS=="")
{
$fgS="1";
}

if ($MaHlth=="")
{
$MaHlth="150";
}

if ($KaHlth=="")
{
$KaHlth="250";
}

if ($TuHlth=="")
{
$TuHlth="200";
}

if ($KoHlht=="")
{
$KoHlht="250";
}

if ($HaHlth=="")
{
$HaHlth="300";
}

if ($TaHlth=="")
{
$TaHlth="300";
}

if ($Backpack=="")
{
$Backpack="0";
}

if ($ShowBackPack=="")
{
$ShowBackPack="0";
}

if ($I4WVisited=="")
{
$I4WVisited="0";
}


//This block calls the variables from above and puts then into a string.
//Constant variables are also added here.
$savestate="AbrevState=1&mvn=".$mvn."&vsh=".$vsh."&hsh=".$hsh."&sho=".$sho."&s_bg=".$s_bg."&s_bg_v=".$s_bg_v."&s_fx=".$s_fx."&m_mv=".$m_mv."&ltA=".$ltA."&ltB=".$ltB."&Gno=".$Gno."&IltS=".$IltS."&ltS=".$ltS."&TaB=".$TaB."&Gak=".$Gak."&Lek=".$Lek."&Ga_c=".$Ga_c."&Ga_v=".$Ga_v."&Bk=".$Bk."&Pok=".$Pok."&q_k_u=".$q_k_u."&q_k=".$q_k."&k_b=".$k_b."&k_b_u=".$k_b_u."&Chi=".$Chi."&Onu_L=".$Onu_L."&Onu_D=".$Onu_D."&Onu_R=".$Onu_R."&Lv_b=".$Lv_b."&Fl=".$Fl."&Kr=".$Kr."&Taipu=".$Taipu."&F_s=".$F_s."&Ens=".$Ens."&Kok=".$Kok."&f_K=".$f_K."&f_L=".$f_L."&f_P=".$f_P."&f_O=".$f_O."&f_T=".$f_T."&f_G=".$f_G."&cMa=".$cMa."&cKa=".$cKa."&cTa=".$cTa."&cKo=".$cKo."&cHa=".$cHa."&cTu=".$cTu."&Quest=".$Quest."&cBarNum=".$cBarNum."&C1=".$C1."&C2=".$C2."&C3=".$C3."&C4=".$C4."&C5=".$C5."&C6=".$C6."&fgW=".$fgW."&fgV=".$fgV."&fgS=".$fgS."&MaHlth=".$MaHlth."&KaHlth=".$KaHlth."&TuHlth=".$TuHlth."&KoHlht=".$KoHlht."&HaHlth=".$HaHlth."&TaHlth=".$TaHlth."&Backpack=".$Backpack."&ShowBackPack=".$ShowBackPack."&I4WVisited=".$I4WVisited."&p8=1&StateLoaded=1&vars=1";


//This block calls the string above and writes it to getstate.txt overwriting the previous data.
$writefile='getstate.txt';
$fh=fopen($writefile, 'w');
fwrite($fh, $savestate); 
fclose($fh);
?>