<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title>Super Mario Bros in HTML5</title>

    <link href="mario.css" rel="stylesheet">
    <link href="Fonts/stylesheet.css" rel="stylesheet">
    
    <script src="data.js"></script>
    <script src="editor.js"></script>
    <script src="events.js"></script>
    <script src="generator.js"></script>
    <script src="library.js"></script>
    <script src="load.js"></script>
    <script src="maps.js"></script>
    <script src="mario.js"></script>
    <script src="quadrants.js"></script>
    <script src="sounds.js"></script>
    <script src="sprites.js"></script>
    <script src="things.js"></script>
    <script src="toned.js"></script>
    <script src="triggers.js"></script>
    <script src="upkeep.js"></script>
    <script src="utility.js"></script>
<style>
#newWin:hover {opacity:1}
#newWin {position: absolute;
    z-index: 99;
    top: 50px;
    right: 10px;
    display:block;
	opacity: 0.4;}
</style>
<script type="text/javascript">

function init() {
 var isInIFrame = (window.location != window.parent.location); 
if(isInIFrame==true){

}
else {
document.getElementById('newWin').style.display = "none";
}
}
window.onload = init;



</script>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#000"
    },
    "button": {
      "background": "#f1d600"
    }
  },
  "theme": "edgeless",
  "content": {
    "href": "http://super-nintendo-emulator.com/page/privacy-policy-2"
  }
})});
</script>
</head>

<body onload="FullScreenMario()">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="http://www.googletagmanager.com/gtag/js?id=UA-436053-24"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-436053-24');
</script>



<div id="newWin"><a href="http://supermarioemulator.com" target="_top" title="Super Mario Bros Emulator">
<img src="new_window.svg" class="nwin" title="Play Super Mario Bros Emulator in your computer" alt="Super Mario Bros Emulator" style="
    width: 75px;
    height: 75px;
">

</a></div>
<div style="position: absolute;
    z-index: 99;
    top: 421px;
    left: 27px;"><a href="http://online-emulators.com" target="_top" title="SEGA Megadrive / SEGA Genesis / Super Nintendo Emulator"><img src="super-nintendo-sega-emulators.png" title="SEGA Megadrive / SEGA Genesis Emulator" alt="SEGA Megadrive / SEGA Genesis Emulator">

</a></div>
<div style="
    position: absolute;
    z-index: 99;
    top: 433px;
    left: 410px;
    width: 54%;
    height: 152px;
    ">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Mario -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9602208238522604"
     data-ad-slot="5959867308"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

</div>
</body>
</html>