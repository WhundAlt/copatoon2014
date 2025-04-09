<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<script type="text/javascript">
      var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
      document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
      </script>
      
      <script type="text/javascript">
      try {
      var pageTracker = _gat._getTracker("UA-403482-11");
      pageTracker._trackPageview();
      pageTracker._setVar("uuuu_a0000");
      
      } catch(err) {}
      </script>
      <script type="text/javascript">
        function trackUserAction(sPath)
        {
          sPath += "uuuu_a0000/";
          pageTracker._trackPageview(sPath);
          onPageTracked();
        };
        
        
        var g_track_count = 0;
        function onPageTracked()
        {
          g_track_count++;
          //if we have tracked more than 495 calls this session, tell google.
          if(g_track_count == 496)
          {
            trackUserAction("/call_count/" + g_track_count + "/");
          }
        }
        
        </script>  <script src="http://mingles.nyphilkids.org/misc/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
    function triggerPeanutBillingGateway()
    {
      top.location = "http://mingles.nyphilkids.org/billing/start//3";
    }
    
    function unixTime()
    {
      return Math.round(new Date().getTime()/1000.0);
    }
    
    //at a minimum, call the playerLeaveApp function when unloading
    var g_unload_functions = [];
    
    function addUnloadFunction(fcnPtr)
    {
      g_unload_functions.push(fcnPtr);
      
    }
    
    function doUnloadFunctions()
    {
      while(g_unload_functions.length > 0)
      {
        var fcn = g_unload_functions.pop();
        fcn();
      }
    }
    
    //user_id, user_first_name, game_code
    //called whenever the player leaves the app page
    function playerLeaveApp()
    {
      
        var leave_app_url = "/js/game/leave-game/3/MNGL/7/1/";
        
        $.ajax({
            type: "GET",
            url: leave_app_url,
            dataType: "script"
              });
    }
     
    function sendFinalTrackCount()
    {
      if(trackUserAction != null)
      {
        trackUserAction("/final_call_count/" + g_track_count + "/");
      }
       
    }
    
    function refreshCanvas()
    {
      window.location.reload(true);
    }
    
    addUnloadFunction(sendFinalTrackCount);
    addUnloadFunction(playerLeaveApp);
      
  </script><script type="text/javascript">
  g_already_opened = 0;
  var gCallbackFunction = null;
	function triggerBillingGateway(offer_id, user_id)
	{
    slowDownFlash();
		top.location = "http://mingles.nyphilkids.org/billing/start/" + offer_id + "/" + user_id;
  }
  
  function sendFeedback()
  {
    top.location = "http://www.largeanimal.com/support/request?platform=facebook&game=MNGL&external_id=1";
  }
  
  function startFocusTimer()
  {
   //check if this will call only once, or needs to be killed explicitly
    setTimeout("window.document.loader.focus()",5000); //focus flash 5 seconds after window load.
  }
  
  function closeDialog(div_name)
  {
    g_already_opened = 0;
    var div_to_close = document.getElementById(div_name);
    if(div_to_close != null)
    {
      div_to_close.style.display = "none";
    }
    
    hideScrim();
    restoreFlash();
    
    // If there is a callback function, call it.
    if (gCallbackFunction != null && gCallbackFunction != undefined)
    {
      gCallbackFunction();
    }
  }
  
  function showDialog(dialog_div_name, text_replacement_div, text_replacement,
                      scrim_color, scrim_opacity, kCallbackFunction)
  {
    gCallbackFunction = kCallbackFunction;

    slowDownFlash();
    
    var scrim = document.getElementById("scrim");
    
    if(scrim != null)
    {
      scrim.style.backgroundColor = scrim_color;
      scrim.style.opacity = scrim_opacity/10;
    	scrim.style.filter = "alpha(opacity=" + scrim_opacity*10 + ")";
    }
    
    var dialog_div_to_close = document.getElementById(dialog_div_name);
    if(dialog_div_to_close != null)
    {
      var text_replacement_div_to_change = document.getElementById(text_replacement_div);
      if(text_replacement_div_to_change != null)
      {
        text_replacement_div_to_change.innerHTML = text_replacement;
      }
      
      dialog_div_to_close.style.display = "block";
    }
    
    showScrim();
    slowDownFlash();
  }
  
  function slowDownFlash(flash_id)
  {
    if(flash_id == null)
    {
      flash_id = "game_movie";
    }
    var flash_obj = document.getElementById(flash_id);
    if(flash_obj == null)
    {
      return;
    }
    
    if(flash_obj.setGameFps == null)
    {
      return;
    }
    
    flash_obj.setGameFps(1);
    
  }
  
  function restoreFlash(flash_id)
  {
   
    if(flash_id == null)
    {
      flash_id = "game_movie";
    }
    
    var flash_obj = document.getElementById(flash_id);
    if(flash_obj == null)
    {
      return;
    }
    
    if(flash_obj.restoreGameFps == null)
    {
      //alert("flash obj does not support setGameFps - return");
      return;
    }
    
    flash_obj.restoreGameFps();

  }
  
</script><script type="text/javascript">
  function showScrim(millis)
  {
    document.getElementById('scrim').style.display='block';
    clearTimeout(g_scrim_timer);
    if(millis > 0)
    {
      g_scrim_timer = setTimeout("hideScrim()", millis);
    }
  } 
  function hideScrim()
  {
    clearTimeout(g_scrim_timer);
    document.getElementById('scrim').style.display='none'; 
  }
</script>
<div id="scrim" style="
  width:100%; 
  height:100%; 
  border-width:0px; 
  background-color:#000000;
  position:absolute;
  overflow:hidden;
  filter:alpha(opacity=40);
  opacity: 0.4;
  left:0px;
  top:0px;
  display:none;
  z-index:1;"></div>
<script type="text/javascript" src="http://mingles.nyphilkids.org/sites/all/includes/js/swfobject.js"></script>
            <script type="text/javascript">
              var flash_vars = {"songla_gateway":"http%3A%2F%2Fmingles.nyphilkids.org%2Fservices%2Famfphp%2F","songla_error_log":"http%3A%2F%2Fmingles.nyphilkids.org%2Fsites%2Fall%2Fthemes%2Fbeast%2Fsongla%2Ffla_logger.php","songla_error_log_level":"3","songla_bug_function":"sendFeedback","songla_platform_id":"7","songla_game_code":"MNGL","songla_client_type":"web_flash","billing_function":"triggerBillingGateway","tos_url":"http%3A%2F%2Fmingles.nyphilkids.org%2Fsites%2Fall%2Fthemes%2Fbeast%2Fsongla%2Ftos.xml%3Fv%3D","songla_game_version":"1","user_track_function":"trackUserAction","cash_start":"500","channel_settings_file":"http%3A%2F%2Fmingles.nyphilkids.org%2Ffiles%2Fsongla%2Fgames%2FMNGL%2Fen_us%2F9485%2F1390846308_channel_setings.xml","credit_start":"10","data_xml_file":"http%3A%2F%2Fmingles.nyphilkids.org%2Ffiles%2Fsongla%2Fgames%2FMNGL%2Fen_us%2F9485%2F1390846308_data.xml","default_player_pic":"http%3A%2F%2Fmingles.nyphilkids.org%2Ffiles%2Fsongla%2Fgames%2FMNGL%2Fen_us%2F9485%2F1390847564_DefaultPlayerPicture.jpg","dynamic_strings_file":"http%3A%2F%2Fmingles.nyphilkids.org%2Ffiles%2Fsongla%2Fgames%2FMNGL%2Fen_us%2F9485%2F1390846308_dynamic_strings.xml","game_swf":"http%3A%2F%2Fmingles.nyphilkids.org%2Ffiles%2Fsongla%2Fgames%2FMNGL%2Fen_us%2F9485%2F1390846308_game.swf","gifting_userid":"0","invite_gift_ids":"0","loader_sound_file":"","loader_strings_file":"http%3A%2F%2Fmingles.nyphilkids.org%2Ffiles%2Fsongla%2Fgames%2FMNGL%2Fen_us%2F9485%2F1390846308_loader_data.xml","loader_swf":"http%3A%2F%2Fmingles.nyphilkids.org%2Ffiles%2Fsongla%2Fgames%2FMNGL%2Fen_us%2F9485%2F1390846308_loader.swf","version":"1","songla_server_time":"1574011328","image_uploading_url":"http%3A%2F%2Fmingles.nyphilkids.org%2Fsongla_image_uploading%2Fsongla_image_upload%2F","external_file_host_url":"http%3A%2F%2Fmingles.nyphilkids.org%2Fmedia%2F","locale":"en_us","locales":"en_us","allow_domain":"mingles.nyphilkids.org","refresh_canvas_function":"refreshCanvas"};
              var swf_params = {"play":"true","loop":"true","quality":"high","scale":"showall","wmode":"opaque","salign":"","devicefont":"false","menu":"false","allowFullScreen":"false","allowScriptAccess":"always","bgcolor":"#ffffff","base":"http:\/\/mingles.nyphilkids.org"};
              var swf_attribs = {"align":"middle","name":"loader","id":"game_movie"};
              
              swfobject.embedSWF("http://mingles.nyphilkids.org/files/songla/games/MNGL/en_us/9485/1390846308_loader.swf", "flash-content", "650", "745", "9.0.0", "0",flash_vars,swf_params,swf_attribs);
            </script><link rel="stylesheet" type="text/css" href="http://mingles.nyphilkids.org//style.css" />
</head>
<body style="padding: 0px; margin: 0px;" onLoad="startFocusTimer();" onUnload="doUnloadFunctions();">


<div style="float: left; clear: both;">
  <div style="float: left; clear: left;">
        <link rel="stylesheet" type="text/css" href="http://mingles.nyphilkids.org//sidebar/style.css?v=4" />
  </div>
  <!-- where the report abuse go -->
  <div style="float: left; clear: right; width: 640px; margin-left: 5px;">
<link rel="stylesheet" type="text/css" href="http://mingles.nyphilkids.org//alert-panel.css?v=1" />    
    
    
    
      


  <div style="position: relative; width: 650px; height: 745px; padding-left: 0px;">
    <div id="play-content" style="z-index:-2;">
      <div id="flash-content">
        <h1>Flash Player Required</h1>
        <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
      </div>
    </div>
  </div>
  
  
    
  <script src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php" type="text/javascript"></script>
  <script type="text/javascript">
  FB_RequireFeatures(["XFBML"], function(){
    FB.init("", "xd_receiver.htm");
  });
  </script>
  
  
  </div>
  
  </div>
</div>

<div id="outside_location" style="float: left; clear: both; width: 100%; margin: 0px auto; height: 102px;">  
<fb:js-string var="location_two" >  
</fb:js-string> 

<fb:js-string var="location_one" >  
</fb:js-string> 
</div> 


<script type="text/javascript" charset="utf-8">  
var outside_location = document.getElementById('outside_location'); 
setTimeout(update_ad,90000);
var last_frame = 1;

function update_ad()
{
	if(last_frame == 1)
	{
		outside_location.setInnerFBML(location_two);
		last_frame = 2;
	}
	else
	{
		outside_location.setInnerFBML(location_one);
		last_frame = 1;
	}
	
	setTimeout(update_ad,90000);
}

</script>

</body>
</html>