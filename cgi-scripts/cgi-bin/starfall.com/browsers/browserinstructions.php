<!doctype html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Browser Instructions</title>
  <script type="text/javascript" src="assets/ua-parser.min.js"></script>

  <link href="assets/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
        background: #ffcc33;
        text-align: center;
        color: #503e08;
        font-size: 18px;
    }
    
    a {
        cursor: pointer;
    }
    
    .container {
        max-width: 1100px
    }
    
    .main-content {
        margin: 0 auto;
        margin-top: 30px;
    }
    
    h1 {
        color: #27200d;
        text-shadow: 0px 2px 2px #d8a819;
    }
    
    h2 {
        margin: 0px;
        padding: 0px;
        color: #27200d;
        text-shadow: 0px 2px 2px #d8a819;
        padding: 0px 10px;
    }
    
    h3 {
        font-size: 22px;
        color: #503e08;
    }
    
    .section-header,.section-content {
        display: block;
    }
    
    .section-header {
        padding-bottom: 15px;
    }
    
    .section-header img,.section-header h1{
        display: inline-block;
    }
    
    .section-content {
        background: #ffbf01;
        border-radius: 3px;
        margin: 0px 8px 20px;
        box-shadow: inset 2px 2px 3px #e5ab00;
    }
    
    .section-01,.section-02 {
        margin: 0 auto;
        padding: 40px 15px 20px;
    }
    
    .section-01 {
        margin-bottom: 15px;
    }
    
    .section-01 p {
        text-align: left;
        padding: 0 55px;
        margin-bottom: 30px;
    }
    
    .section-01 h3 {
        padding: 0px;
    }
    
    .section-01 p {
        margin-top: 10px;

    }
    
    .section-02 p {
        text-align: left;
    }
    .section-02 ol {
        text-align: left;
        margin: 0 auto;
    }
    .section-02 ol li {
        margin: 18px 0 14px;
    }
    .contact-us {
        margin: 5px 0 20px;
        font-size: 18px;
    }
    .return-to-index {
        margin-bottom: 40px;
    }
    .return-to-index a {
        font-size: 28px;
        margin: 0;
        text-decoration: none;
        display: block;
    }
    .return-to-index img {
        margin-bottom: 0px;
    }
    .hidden {
        display:none;
    }
    .visible {
        display: visible;
    }



    .dancing-star-container {
        width: 250px;
        height: 250px;
        position: relative;  
        margin: 0 auto;
        background-color: ffbf01;
    }

    .dancing-star-image {
        width: 250px;
        height: 250px;
        position: absolute;  
        z-index: 1;
    }

    .dancing-star-flash {
        width: 250px;
        height: 250px;
        position: absolute;  
        z-index: 99;
    }

  </style>

</head>

<body>

  <div class="container">
    <div class="row main-content">

      <div class="col-xs-12 section-header">
        <img src="../mi/system/bmp/oops.png">
        <h1>We're sorry you're having trouble.</h1>
      </div>
    </div>

      <div class="row  section-content">
        <div class="col-sm-6 section-01">
          <h2>Try this step first:</h2>
          <div class="text">
        <h3>Do You See The Dancing Star?</h3>
        <p>Starfall requires the <a href="https://helpx.adobe.com/flash-player.html" target="_blank">Adobe Flash plugin</a>. If you see a dancing star below, then Flash is installed and working.</p>
        <p>If the star is not animated or moving, please follow the instructions to the right.</p>

        </div>

        
        <div class="dancing-star-container">
        
            <div class="dancing-star-image">
                <img src="assets/star_no_dance.png" class="img-responsive center-block" id="star-no-dance"> 
            </div>
            
            
            <div class="dancing-star-flash">
                <!-- The flash dancing star embed code -->
                <object type="application/x-shockwave-flash"
                    data="assets/dancing-star_F10.swf"
                    width="250" height="250">
                    <param name="movie" value="your-flash-file.swf">
                    <param name="quality" value="autohigh">
                    <param name="wmode" value="transparent">
                </object>      
                <!-- end flash embed code -->
            </div>
            
        </div>

          

      </div><!--col-sm-12-->

      <div class="col-sm-6 section-02">
        <h2>If that didn't work...</h2>

        <div class="hidden" id="Chrome">
            <div class="text">
                <h3>Help for Google Chrome</h3>
                <p>The good news is that your browser, Google Chrome, comes with Flash and you do not need to install it.
                However, you may need to <b>enable</b> the player and then <b>allow *.starfall.com</b> to run it.</p>
           
                <p><a href="https://helpx.adobe.com/flash-player/kb/enabling-flash-player-chrome.html" target="_blank">Click Here To Visit Adobe.com's Step-By-Step Instructions</a></p>
           </div>
        </div>
        
        <div class="hidden" id="Safari">
            <div class="text">
                <h3>Help for Safari</h3>
                <p>To use Flash with your browser, Safari, you will need to <b>install</b> and <b>enable</b> the Flash plugin.
                
                <ol>
                    <li><a href="http://get.adobe.com/flashplayer/" target="_blank">Download & Install the Flash Player</a> from Adobe.com.
                    <li>Enable the Flash Plugin from the <i>Preferences > Security</i> tab or <a href="https://helpx.adobe.com/flash-player/kb/enabling-flash-player-safari.html" target="_blank">Visit Adobe.com For Step-By-Step Instructions</a></li>
                </ol>
              </div>
        </div>
        
        <div class="hidden" id="Firefox">
            <div class="text">
                <h3>Help for Firefox</h3>
                <p>To use Flash with your browser, Firefox, you will need to <b>install</b> and <b>enable</b> the Flash plugin.
                
                <ol>
                    <li><a href="http://get.adobe.com/flashplayer/" target="_blank">Download & Install the Flash Player</a> from Adobe.com.
                    <li>Enable the Flash Plugin from the <i>Tools > Add Ons</i> menu. <a href="https://helpx.adobe.com/flash-player/kb/enabling-flash-player-firefox.html" target="_blank">Visit Adobe.com For Step-By-Step Instructions</a></li>
                </ol>
    
           </div>
        </div>
        
        <div class="hidden" id="Edge">
            <div class="text">
                <h3>Help for Edge</h3>
                <p>The good news is that your browser, Edge, comes with Flash and you do not need to install it.
                However, you may need to <b>enable</b> the player to run it.</p>
                
                <p><a href="https://helpx.adobe.com/flash-player/kb/flash-player-issues-windows-10-edge.html" target="_blank">Click Here To Visit Adobe.com's Step-By-Step Instructions</a></p>

              </div>
        </div>
        
        <div class="hidden" id="IE-10">
            <div class="text">
                <h3>Help for Internet Explorer</h3>
                <p>The good news is that your browser, Internet Explorer, comes with Flash and you do not need to install it.
                However, you may need <b>enable</b> the player to run it. On your version of Windows, the Microsoft Edge browser is also available. We recommend using Edge instead.</p>
                
                <p><a href="https://helpx.adobe.com/flash-player/kb/flash-player-issues-windows-10-edge.html" target="_blank">Click Here To Visit Adobe.com's Step-By-Step Instructions</a></p>

    
           </div>
        </div>
        
        <div class="hidden" id="IE-Old">
            <div class="text">
                <h3>Help for Internet Explorer</h3>
                <p>To use Flash with your browser Internet Explorer, you will need to <b>install</b> and <b>enable</b> the Flash plugin. </p>
                
                <ol>
                    <li><a href="http://get.adobe.com/flashplayer/" target="_blank">Download & Install the Flash Player</a> from Adobe.com.
                    <li>Enable the Flash Plugin from the <i>Tools > Manage Add-Ons</i> menu.
                    <a href="https://helpx.adobe.com/flash-player/kb/install-flash-player-windows.html" target="_blank">Visit Adobe.com For Step-By-Step Instructions</a></li>
                </ol>
    
           </div>
        </div>
        
        <div class="hidden" id="Opera">
            <!-- lulz -->
            <div class="text">
                <h3>Help for Opera</h3>
                <p>To use Flash with your browser Opera, you will need to <b>install</b> and <b>enable</b> the Flash plugin.
                
                <ol>
                    <li><a href="http://get.adobe.com/flashplayer/" target="_blank">Download & Install the Flash Player</a> from Adobe.com.
                    <li>Enable the Flash player by visiting <i>opera://plugins</i> and clicking <i>Enable</i> next to the Adobe Flash Player entry.
                    <a href="https://helpx.adobe.com/flash-player/kb/enabling-flash-player-opera.html" target="_blank">Visit Adobe.com For Step-By-Step Instructions</a></li>
                </ol>
    
           </div>
        </div>
      
      
        
        <div class="hidden" id="Unknown">
            <!-- lulz -->
            <div class="text">
                <h3>Help for Your Browser</h3>
                <p>We're having trouble recognizing your browser. Please <a href="https://secure.starfall.com/lv/contact">contact us</a> for help.</p>
    
           </div>
        </div>
      
      
    
      </div><!--col-sm-12-->
    </div>

    <div class="col-xs-12 contact-us">
      Still not working? Please <a href="https://secure.starfall.com/lv/contact">contact us</a> if you need further assistance.
    </div>

    <div class="col-xs-12 return-to-index">
      <a href="http://starfall.com/index.htm">Return to the Main Index <img src="../mi/system/bmp/next-50-FFCC33.png"></a>
    </div>

  </div><!--row-->
</div> <!--container-->

</body>

<script type="text/javascript">
var parser = new UAParser();
var ua = parser.getResult();
displayBrowserBox(ua);

function displayBrowserBox(ua) {

    switch (ua.browser.name) {
        case "Firefox":
            document.getElementById("Firefox").className = 'visible';
            break;
        case "Chrome":
            document.getElementById("Chrome").className = 'visible';
            break;
        case "Edge":
            document.getElementById("Edge").className = 'visible';
            break;
        case "Safari":
            document.getElementById("star-no-dance").className = 'hidden';
            document.getElementById("Safari").className = 'visible';
            break;
        case "Opera":
//             Adobe's instructions for Opera are not up to date, so show unknown
            document.getElementById("Unknown").className = 'visible';
            break;
        case "IE":
            if (ua.os.version.substr(0,2) == '10') {
                document.getElementById("IE-10").className = 'visible';
            } else {
                document.getElementById("IE-Old").className = 'visible';
            }
            break;
        default:
            document.getElementById("Unknown").className = 'visible';
    }

}


</script>

</html>
