<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>body{margin:0;padding:0;overflow:hidden}#frameDiv{position:relative;width:100vw;height:100vh;display:table-cell;vertical-align:middle}#contentDiv{display:table;margin:auto}#messageDiv{color:#fff;font-family:Verdana;font-size:9px;text-align:center;margin-bottom:3px}#axDiv{min-width:500px;min-height:375px;background:#000;border-style:solid;border-width:2px;border-radius:2px;border-color:#aaa}#closeDiv{text-align:right;visibility:hidden}#closeText{color:#fff;font-family:Verdana;font-size:9px;text-decoration:none}</style>
</head>
<body>
<div id="frameDiv">
<div id="contentDiv">
<div id="messageDiv">ADVERTISEMENT</div>
<div id="axDiv">
<div id="spotxvideo"></div>
<script type="text/javascript">startTimeMSEC=Date.now();var isIFrame=window.frameElement&&(window.frameElement.nodeName=="IFRAME");var didAdStart=false;var didAdStartIntervalId=0;var didAdFinish=false;var didAdFinishIntervalId=0;var didOnAdDone=false;var spotxvideoContainer=document.getElementById("spotxvideo");var spotx_ad_container_id="";didAdStartIntervalId=setInterval(function(){var spotxvideoContainerChildren=spotxvideoContainer.children;for(var i=0;i<spotxvideoContainerChildren.length;i++){var spotxvideoContainerChild=spotxvideoContainerChildren[i];if((spotxvideoContainerChild.id.indexOf("spotx_ad_container_")==0)&&(spotxvideoContainerChild.style.visibility!="hidden")){spotx_ad_container_id=spotxvideoContainerChild.id;break;}}if(spotx_ad_container_id!=""){clearInterval(didAdStartIntervalId);didAdStart=true;if(isIFrame){window.parent.trackPageEvent("SpotX ad","Ad started",0,true);}}},1000);setTimeout(function(){document.getElementById("closeDiv").style.visibility="visible";},15000);setTimeout(function(){if(!didAdStart){onAdDone(false);}},15000);function onAdDone(spotx_ad_found){if(didOnAdDone){return;}didOnAdDone=true;didAdFinish=spotx_ad_found;if(didAdStartIntervalId!=0){clearInterval(didAdStartIntervalId);}if(didAdFinishIntervalId!=0){clearInterval(didAdFinishIntervalId);}if(isIFrame){if(spotx_ad_found){window.parent.trackPageEvent("SpotX ad","Ad completed",0,true);window.parent.onGameAreaAdComplete();}else{window.parent.trackPageEvent("SpotX ad","Ad failed",0,true);window.parent.onGameAreaAdFailed();}}}function onAdDoneViaSpotX(spotx_ad_found){var elapsedTimeSEC=(Date.now()-startTimeMSEC)*0.001;spotx_ad_found=spotx_ad_found&&(elapsedTimeSEC>10);onAdDone(spotx_ad_found);}</script>
<script type="text/javascript" src="//search.spotxchange.com/js/spotx.js" data-spotx_channel_id="115790" data-spotx_ad_unit="instream" data-spotx_ad_done_function="onAdDoneViaSpotX" data-spotx_content_width="500" data-spotx_content_height="375" data-spotx_content_type="game" data-spotx_content_container_id="spotxvideo" data-spotx_ad_volume="60" data-spotx_autoplay="1" data-spotx_blocked_autoplay_override_mode="1" data-spotx_ad_max_duration="60" data-spotx_vpix='["FLV","VPAID"]' data-spotx_content_page_url="http://tetris.com/play-tetris/"></script>
</div>
<div id="closeDiv"><a id="closeText" href="#" onclick="window.parent.trackPageEvent( 'SpotX ad', 'Ad closed by user', 0, false ); onAdDone(didAdStart); return false;">CLOSE [&times]</a></div>
</div>
</div>
</body>
</html>
