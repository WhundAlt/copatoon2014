<!DOCTYPE HTML>
<html>
<head>

<title>Torto</title>
<script src="js/jquery-1.9.1.js"></script>
<script src="js/funcoes.js"></script>
<script src="js/spin.min.js"></script>
<link rel=" stylesheet" type="text/css"  href="css/core.css" >
<link rel=" stylesheet" type="text/css"  href="css/pc.css" >


<link rel=" stylesheet" type="text/css"  href="css/fonts.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="assets/pc/icone.ico" type="image/x-icon" />
<meta charset="utf-8"/>

</head>





<body style="background-color: #f3f3f3">

<div class="topo">
<img src="assets/pc/instrucoes_marca.png" id="imagem_marca" alt=""/>  
<div id="dica">
<img id='bt_dica' src="assets/pc/bt_dica_unselect.png" alt="Dica">
</div>
</div>
<div id='palavras' style="position: absolute; top: 90px; left:0; z-index: 10; font-size: 9px">
</div>
	<div class="content" id="spinw">
        <table class="tb_tabuleiro" align="center"  border=0>
				<tr style="background-color:#f3f3f3">
				
			
					<td width="50%" height="50px"> 
					</td>
					<td width="50%" style="text-align:center">
						<span id="texto_pontuacao">Pontuação:</span>
						<span id="valor_pontuacao">000</span>
					</td>
					
				
				</tr>
								
				<tr height="500">
					<td align="center" style="background-color:#f3f3f3; width: 50%; margin: 0; padding: 0;
					    vertical-align: top">		
					
                        <div id="div_letras" style="margin: 0; padding: 0">
                    
                            <table align="center" width="222px" height="443px"
                                style="margin-left:0%; margin-top: 0; 
                                    background-image: url(assets/pc/mainscreen_line2.png);
                                    background-repeat: no-repeat;" border=0>

                                    <tr>
                                        <td width="54px" height="50" align="center" style="vertical-align: top; padding-top: 6px"><div class="clickletra" id="l1c1" cor="preto"> A </div> </td>
                                        <td width="30px"></td>
                                        <td width="56px" align="center" style="vertical-align: top; padding-top: 6px"><div class="clickletra" id="l1c2" cor="preto"> B </div> </td>
                                        <td width="22px"></td>
                                        <td width="58px" align="center" style="vertical-align: top; padding-top: 6px"><div class="clickletra" id="l1c3" cor="preto"> C </div></td>
                                    </tr>
                                
                                    <tr>
                                        <td width="54px" height="79" align="center" style="vertical-align: bottom; padding-bottom: 6px"><div class="clickletra" id="l2c1" cor="preto"> D </div> </td>
                                        <td width="30px"></td>
                                        <td width="56px" align="center" style="vertical-align: bottom; padding-bottom: 6px"><div class="clickletra" id="l2c2" cor="preto"> E </div> </td>
                                        <td width="22px"></td>
                                        <td width="58px" align="center" style="vertical-align: bottom; padding-bottom: 6px"><div class="clickletra" id="l2c3" cor="preto"> F </div></td>
                                    </tr>
                                
                                    <tr>
                                        <td width="54px" height="78" align="center" style="vertical-align: bottom; padding-bottom: 6px"><div class="clickletra" id="l3c1" cor="preto"> G </div> </td>
                                        <td width="30px"></td>
                                        <td width="56px" align="center" style="vertical-align: bottom; padding-bottom: 6px"><div class="clickletra" id="l3c2" cor="preto"> H </div> </td>
                                        <td width="22px"></td>
                                        <td width="58px" align="center" style="vertical-align: bottom; padding-bottom: 6px"><div class="clickletra" id="l3c3" cor="preto"> I </div></td>
                                    </tr>
                                
                                    <tr>
                                        <td width="54px" height="79" align="center" style="vertical-align: bottom; padding-bottom: 6px"><div class="clickletra" id="l4c1" cor="preto"> J </div> </td>
                                        <td width="30px"></td>
                                        <td width="56px" align="center" style="vertical-align: bottom; padding-bottom: 6px"><div class="clickletra" id="l4c2" cor="preto"> L </div> </td>
                                        <td width="22px"></td>
                                        <td width="58px" align="center" style="vertical-align: bottom; padding-bottom: 6px"><div class="clickletra" id="l4c3" cor="preto"> M </div></td>
                                    </tr>
                                
                                    <tr>
                                        <td width="54px" height="79" align="center" style="vertical-align: bottom; padding-bottom: 6px"><div class="clickletra" id="l5c1" cor="preto"> N </div> </td>
                                        <td width="30px"></td>
                                        <td width="56px" align="center" style="vertical-align: bottom; padding-bottom: 6px"><div class="clickletra" id="l5c2" cor="preto"> O </div> </td>
                                        <td width="22px"></td>
                                        <td width="58px" align="center" style="vertical-align: bottom; padding-bottom: 6px"><div class="clickletra" id="l5c3" cor="preto"> P </div></td>
                                    </tr>
                                    <tr>
                                        <td width="54px" height="79" align="center" style="vertical-align: bottom; padding-bottom: 8px"><div class="clickletra" id="l6c1" cor="preto"> Q </div> </td>
                                        <td width="30px"></td>
                                        <td width="56px" align="center" style="vertical-align: bottom; padding-bottom: 8px"><div class="clickletra" id="l6c2" cor="preto"> R </div> </td>
                                        <td width="22px"></td>
                                        <td width="58px" align="center" style="vertical-align: bottom; padding-bottom: 8px"><div class="clickletra" id="l6c3" cor="preto"> S </div></td>
                                    </tr>
                        
                            </table>
                                
                            <table width="234px" height="40px" align="center" style="margin-top: 10px">
                                <tr>
                                    <td align="center" width="50%">
                                            <div class="td_tabuleiro_sair td_tabuleiro"> 
                                                <img src="assets/pc/bt_sair_unselect.png"  alt="" id="img1" /> 
                                                <img src="assets/pc/bt_sair_select.png"  alt="" id="img2" /> 
                                                <p class="textTabuleiro" id="textSair" >SAIR</p>
                                            
                                            </div>
                                    
                                    
                                    </td>
                                
                                    <td align="center" width="50%">
                                        <a href="tabuleiro.php">
                                            <div class="td_tabuleiro_reiniciar td_tabuleiro"> 
                                                <img src="assets/pc/bt_reiniciar_unselect.png"  alt="" id="img1" class="bt_instrucoes"/> 
                                                <img src="assets/pc/bt_reiniciar_select.png"  alt="" id="img2" class="bt_instrucoes"/>

                                                    <p class="textTabuleiro" id="textReiniciar" >REINICIAR</p>
                                
                                            </div>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                                
                                
                        </div>
                    </td>
					<td align="center" style="background-color:#f3f3f3; width: 50%; vertical-align: top">		
                            <table id="tb_linhas" border=0>
                            
                                <tr>
                                    <td style="vertical-align: middle" tb="1"> <div class="numeros">01</div> </td>
                                    <td><input type="text" id="edt11" tabindex="1" class="esquerda"><img id="x1" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                    <td style="vertical-align: middle" tb="16"> <div class="numeros">16</div></td> 
                                    <td style="white-space: nowrap"><input type="text" id="edt12" tabindex="16" class="esquerda" style="top:8px"><img id="x16" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle" tb="2"> <div class="numeros">02</div> </td>
                                    <td > <input type="text" id="edt21" tabindex="2" class="esquerda" ><img id="x2" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                    <td style="vertical-align: middle" tb="17"> <div class="numeros">17</div></td> 
                                    <td><input type="text" id="edt22" class="esquerda" tabindex="17"><img id="x17" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle" tb="3"> <div class="numeros">03</div> </td>
                                    <td >  <input type="text" id="edt31"  tabindex="3" class="esquerda" ><img id="x3" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                    <td style="vertical-align: middle" tb="18"> <div class="numeros">18</div></td>
                                    <td><input type="text" id="edt32" class="esquerda" tabindex="18"><img id="x18" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle" tb="4"> <div class="numeros">04</div> </td>
                                    <td >  <input type="text" id="edt41" tabindex="4" class="esquerda" ><img id="x4" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                    <td style="vertical-align: middle" tb="19"> <div class="numeros">19</div></td>
                                    <td><input type="text" id="edt42" class="esquerda" tabindex="19"><img id="x19" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                </tr>
                            
                            
                                <tr>
                                    <td style="vertical-align: middle" tb="5"> <div class="numeros">05</div> </td>
                                    <td>   <input type="text" id="edt51" tabindex="5" class="esquerda"><img id="x5" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                    <td style="vertical-align: middle" tb="20"> <div class="numeros">20</div></td>
                                    <td><input type="text" id="edt52" class="esquerda" tabindex="20"><img id="x20" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle" tb="6"> <div class="numeros">06</div> </td>
                                    <td >  <input type="text" id="edt61" tabindex="6" class="esquerda"><img id="x6" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                    <td style="vertical-align: middle" tb="21"> <div class="numeros">21</div></td>
                                    <td><input type="text" id="edt62" class="esquerda" tabindex="21"><img id="x21" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle" tb="7"> <div class="numeros">07</div> </td>
                                    <td >   <input type="text" id="edt71" tabindex="7" class="esquerda"><img id="x7" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                    <td style="vertical-align: middle" tb="22"> <div class="numeros">22</div></td>
                                    <td><input type="text" id="edt72" class="esquerda" tabindex="22"><img id="x22" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                </tr>
                        
                                <tr>
                                    <td style="vertical-align: middle" tb="8"> <div class="numeros">08</div> </td>
                                    <td >  <input type="text" id="edt81" tabindex="8" class="esquerda" ><img id="x8" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                    <td style="vertical-align: middle"  tb="23"> <div class="numeros">23</div></td>
                                    <td > <input type="text" id="edt82" class="esquerda" tabindex="23"><img id="x23" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle" tb="9"> <div class="numeros">09</div> </td>
                                    <td >  <input type="text" id="edt91" tabindex="9" class="esquerda"><img id="x9" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                    <td style="vertical-align: middle" tb="24"> <div class="numeros">24</div></td>
                                    <td > <input type="text" id="edt92" class="esquerda" tabindex="24"><img id="x24" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                </tr>
                        
                        
                                <tr>
                                    <td style="vertical-align: middle" tb="10"> <div class="numeros">10</div> </td>
                                    <td > <input type="text" id="edt101" tabindex="10" class="esquerda" ><img id="x10" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                    <td style="vertical-align: middle" tb="25"> <div class="numeros">25</div></td>
                                    <td > <input type="text" id="edt102" class="esquerda" tabindex="25"><img id="x25" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle" tb="11"> <div class="numeros">11</div> </td>
                                    <td > <input type="text" id="edt111" tabindex="11" class="esquerda" ><img id="x11" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                    <td style="vertical-align: middle" tb="26"> <div class="numeros">26</div></td>
                                    <td > <input type="text" id="edt112" class="esquerda" tabindex="26"><img id="x26" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle" tb="12"> <div class="numeros">12</div> </td>
                                    <td > <input type="text" id="edt121" tabindex="12" class="esquerda"><img id="x12" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                    <td style="vertical-align: middle" tb="27"> <div class="numeros">27</div></td>
                                    <td > <input type="text" id="edt122" class="esquerda" tabindex="27"><img id="x27" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle" tb="13"> <div class="numeros">13</div> </td>
                                    <td > <input type="text" id="edt131" tabindex="13" class="esquerda" ><img id="x13" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                    <td style="vertical-align: middle" tb="28"> <div class="numeros">28</div></td>
                                    <td > <input type="text" id="edt132" class="esquerda" tabindex="28"><img id="x28" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle" tb="14"> <div class="numeros">14</div> </td>
                                    <td > <input type="text" id="edt141" tabindex="14" class="esquerda"><img id="x14" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                    <td style="vertical-align: middle" tb="29"> <div class="numeros">29</div></td>
                                    <td > <input type="text" id="edt142" class="esquerda" tabindex="29" ><img id="x29" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle" tb="15"> <div class="numeros">15</div> </td>
                                    <td > <input type="text" id="edt151" tabindex="15" class="esquerda" ><img id="x15" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                    <td style="vertical-align: middle" tb="30"> <div class="numeros">30</div></td>
                                    <td > <input type="text" id="edt152" class="esquerda" tabindex="30" ><img id="x30" class="x" src="assets/pc/x.png" style="float: right; margin: -18px 30px 0 0" alt=""></td>
                                </tr>
                            </table>
						</td>
					</div>
				</tr>
				
				
				
			</table>
			
			
		
	</div>
	
	<div id='a_dica'>
	<p style='margin-top: 35px'>Dica: <span id='duas_dicas'></span></p>
	</div>



</body>
</html>
