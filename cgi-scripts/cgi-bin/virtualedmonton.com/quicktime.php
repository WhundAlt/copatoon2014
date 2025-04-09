<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>City of Edmonton - City Hall Virtual Tour</title>
<script id="spHTMLFormElementPrototypeScript">(function ()
  {
    try
    {
      var sp_old_HTMLFormElementPrototype_submit = HTMLFormElement.prototype.submit;
      HTMLFormElement.prototype.submit = function(AEvent)
      {
        try
        {
          var spEvent = document.createEvent('Event');
          spEvent.initEvent('sp_submit', true, true);
          this.dispatchEvent(spEvent);
        }
        catch(ErrorMessage)
        {
          console.error('spFormElementPrototype() Error sending "sp_submit" event from HTMLFormElement.prototype.submit: ' + ErrorMessage);
        }
        sp_old_HTMLFormElementPrototype_submit.apply(this);
      };
    }
    catch(ErrorMessage)
    {
      console.error('spFormElementPrototype() Error attaching to HTMLFormElement.prototype.submit: ' + ErrorMessage);
    }

    try
    {
      if (typeof __doPostBack == 'function')
      {
        var sp_old__doPostBack = __doPostBack;
        __doPostBack = function(eventTarget, eventArgument)
        {
          try
          {
            var spEvent = document.createEvent('Event');
            spEvent.initEvent('sp_submit', true, true);
            window.dispatchEvent(spEvent);
          }
          catch(ErrorMessage)
          {
            console.error('spFormElementPrototype() Error sending "sp_submit" event from __doPostBack(): ' + ErrorMessage);
          }
          sp_old__doPostBack(eventTarget, eventArgument);
        };      
      }
    }
    catch(ErrorMessage)
    {
      console.error('spFormElementPrototype() Error attaching to __doPostBack(): ' + ErrorMessage);
    }
  })();</script></head>
<body style="background-color: #4075a2; margin:0px;">

<center>
<div style="width:650px; height:550px;background:url('/images/html_bg.jpg') top right no-repeat #4075a2;padding-top:85px;">
<div style="position:absolute;top:20px; margin-left:20px;"><a href="javascript:window.close();"><img src="quicktime_files/quickTimeclose.gif" style="border: 1px solid #fff;"></a></div>
<div style="color:#fff;font-size:16px;font-family:verdana,arial;margin-bottom:10px;"><?php if (isset($_GET["title"])) { echo ($_GET["title"]); } ?></div>
<!--<embed src="qt/scene<?php echo (intval($_GET["ID"])); ?>.mov" width="600" height="400" pluginspage="http://www.apple.com/quicktime/download.">
</embed>-->

<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab" height="350" width="600">
      <param name="controller" value="false">
      <param name="autoplay" value="true">
      <param name="cache" value="true">
      <param name="src" value="qt/scene<?php if (isset($_GET["ID"]) && intval($_GET["ID"]) !== false) { echo (intval($_GET["ID"])); } else { echo("17"); } ?>.mov">
      <embed src="qt/scene<?php if (isset($_GET["ID"]) && intval($_GET["ID"]) !== false) { echo (intval($_GET["ID"])); } else { echo("17"); } ?>.mov" cache="true" type="video/quicktime" autoplay="true" controller="false" align="middle" height="350" width="600">
    </object>

<div style="color:#fff;font-size:12px;margin:10px 0 10px 0;font-family:verdana,arial;">Click and drag to look around.<br>Use "ctrl" and "shift" to zoom in and out.</div>
</div>
</center>





</body></html>