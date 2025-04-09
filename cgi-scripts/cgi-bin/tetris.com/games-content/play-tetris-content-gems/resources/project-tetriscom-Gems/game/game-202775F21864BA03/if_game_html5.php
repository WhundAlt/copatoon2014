<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="renderer" content="webkit" />
<meta name="force-rendering" content="webkit" />
<style>body,canvas,div{outline:none;-moz-outline-style:none;-moz-outline-style:none;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;-khtml-user-select:none;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{margin:0;padding:0;border:0;overflow:hidden}canvas{background-color:rgba(0,0,0,0)}#frameDiv{position:relative;width:100vw;height:100vh;display:table-cell;vertical-align:middle}#contentDiv{display:table;margin:auto}#GameDiv{position:relative;width:800px;height:600px;left:0;top:0;background:#000;outline:none;-moz-outline-style:none}#GameCanvas{width:800px;height:600px}#Cocos2dGameContainer{position:absolute;margin:0;overflow:hidden;left:0;top:0}#loadingText{position:absolute;top:50%;left:50%;width:116px;height:116px;margin-top:-50px;margin-left:-50px;border:0 solid #000;color:#eee;font-family:Verdana;font-size:16px;text-align:center;vertical-align:middle;line-height:116px}#loadingDisplay{position:absolute;top:50%;left:50%;width:100px;height:100px;margin-top:-50px;margin-left:-50px;border:8px solid #eee;border-top:8px solid #666;border-radius:50%;animation:spin 1.5s linear infinite}@keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }</style>
<script src="Build/31f8de7822664290e9fabb4c96983cbb.js" type="285ade567c1f7b339bf81a82-text/javascript"></script>
</head>
<body>
<div id="frameDiv">
<div id="contentDiv">
<div id="GameDiv">
</div>
<div id="loadingText">LOADING</div>
<div id="loadingDisplay"></div>
</div>
</div>
<script type="285ade567c1f7b339bf81a82-text/javascript">var isIFrame=window.frameElement&&(window.frameElement.nodeName=="IFRAME");if(('true'=='1')&&!isIFrame){window.location.replace(window.location.protocol+"//"+window.location.hostname);}else{var pageStartTimeMSEC=Date.now();var cbid='202775F21864BA03';var isDesktop='1'=='1';var isMobile=''=='1';window.platformSrcDir='';var gameDiv=document.getElementById("GameDiv");var gameCanvas=document.getElementById("GameCanvas");function UnityProgress(gameInstance,progress){if(progress==1){removeLoadingDisplay();}}var UnityGameInstance=UnityLoader.instantiate("GameDiv","Build/00371107bf5e10b0084440893fa13f32.json",{onProgress:UnityProgress});function getPageElapsedTimeMSEC(){return isIFrame?window.parent.getPageElapsedTimeMSEC():((Date.now()-pageStartTimeMSEC));}function getCBID(){return cbid;}function getGameDiv(){return gameDiv;}function getGameCanvas(){return gameCanvas;}function removeLoadingDisplay(){{var loadingText=document.getElementById('loadingText');if(loadingText){loadingText.parentNode.removeChild(loadingText);}{var loadingDisplay=document.getElementById('loadingDisplay');if(loadingDisplay){loadingDisplay.parentNode.removeChild(loadingDisplay);}}}}function trackEvent(category,action,opt_label,opt_value,opt_noninteraction){if(isIFrame){try{window.parent.trackEvent(category,action,opt_label,opt_value,opt_noninteraction);}catch(e){}}}function refreshAds(){if(isIFrame){window.parent.refreshAds();}}function isGameAreaAdEnabled(){return isIFrame?window.parent.canShowAds:false;}function isGameAreaAdActive(){return isIFrame?window.parent.isGameAreaAdActive:false;}function showGameAreaAd(){if(isIFrame){window.parent.showGameAreaAd();}}function onGameAreaAdComplete(){var onGameAreaAdCompleteInterval=setInterval(function(){try{UnityGameInstance.SendMessage("BPSTUWPI","dispatchMessage","979287055")
clearInterval(onGameAreaAdCompleteInterval);window.parent.document.activeElement.blur();window.parent.document.getElementById("gameIFrame").focus();document.activeElement.blur();}catch(e){}},100);}}</script>
<script src="http://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="285ade567c1f7b339bf81a82-|49" defer=""></script></body>
</html>
