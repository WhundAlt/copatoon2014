<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Jenni's</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="platform.css">
	<style>
	#loginwrap{
		text-align: center;
		color: white;
		background: black;
		margin: 0 auto;
		padding: 15px;
		width: 350px;
		border: 1px solid white;
		border-radius: 14px;
		position:absolute;
		left: 50%;
		transform: translate(-50%, 0);
		z-index:100;
		top:20%;
	}
	#loginwrap img{
		 width:340px;
	}

	</style>
<script>
function createCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}
function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

createCookie('PHPSESSID','e12piu6laumjbnjeujevgc5fs5',7);</script>


</head>


<body>

<div id="preloader">
<!--
  <img src="j_01.png" width="1" height="1" />
  <img src="j_02.png" width="1" height="1" />
  <img src="j_03.png" width="1" height="1" />
  <img src="j_04.png" width="1" height="1" />
  <img src="j_05.png" width="1" height="1" />
  <img src="j_06.png" width="1" height="1" />  
  <img src="j_07.png" width="1" height="1" />
  <img src="j_08.png" width="1" height="1" />
  <img src="j_09.png" width="1" height="1" />
  <img src="j_10.png" width="1" height="1" />
  <img src="j_11.png" width="1" height="1" />
  <img src="j_12.png" width="1" height="1" />  
  <img src="j_13.png" width="1" height="1" />
  <img src="j_14.png" width="1" height="1" />
  <img src="j_15.png" width="1" height="1" />
  <img src="j_16.png" width="1" height="1" />
  <img src="j_17.png" width="1" height="1" />
  <img src="j_18.png" width="1" height="1" />
 -->
</div>
<script type="text/javascript">
	valid_user = true;
</script>

<div class="phone">
<div class="content">
   <div id="story" class="container story" onmouseover="document.body.style.overflow='hidden';" onmouseout="document.body.style.overflow='auto';">
        <!--<h1>Jenni's Call</h1>-->

        
        <div class="sidebar">
                    <div class="box">
					
                        Writing and Scripting: aghastlyapparition</br>
						Story, Art, Writing and Scripting: Doxy</br></br>
						
						<b>Jenni: Wrong Number</b> is a choose-your-own adventure game where you engage with a mysterious messenger in a series of dirty dares and public fun. Minding your own business one day, you receive a new text message and some glamorous body shots from an unrecognized number. She got her numbers mixed up and thinks you are one of her many flings. How will you seize this opportunity for all it is worth? Are you interested in only seeing more of this new playmate, or will you push her to her limits and engage in some directing of your own? Just because she has the wrong number doesn't mean you shouldn't have a little fun first. You can always set the record straight later, right? </br></br>
						Features: full-color game CGs, branching dialogue options, and multiple endings.</br>
						</br>
						<a href="http://www.patreon.com/doxygames"><img src="patreons.png"></a>
						
                    </div>

                    <div class="box follow-scroll">
                        <a href="javascript: popuponclick()">Ambient Sound ON</a>
                        <br>
                        <a href="javascript: closepopup()">Ambient Sound OFF</a>
                    </div>
        </div>            
        <!--  
        <a href="http://mynoise.net/clone.php?url=%2FNoiseMachines%2F%2FrainNoiseGenerator.php%3Fc%3D3%26l%3D3072303030303030303000%26m%3D" target="_blank">
            Link
        </a>

        <iframe name='iframe1' id="iframe1" src="http://mynoise.net/clone.php?url=%2FNoiseMachines%2F%2FrainNoiseGenerator.php%3Fc%3D3%26l%3D3072303030303030303000%26m%3D" 
        frameborder="0" border="0" cellspacing="0"
        style="border-style: none;width: 100%; height: 120px;"></iframe>
        -->

    </div>
    <!--
    <div class="container">
    
    <a class="promo" href="http:\\patreon.com\doxygames" target="_blank"> Support this Game on<br><img src="patreon.png" name="Support Game">  </a>
    <a class="promo" href="http:\\patreon.com\doxygames" target="_blank">Walkthrough and Source Art</a>    
    </div>
    -->

</div>
</div>
<div class="siderunner"></div>


    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.js"></script>
    <script src="ink.js"></script>
    <script src="jenni4w.js"></script>
    <script src="mainw.js"></script>
    <script src="reader.js"></script>
	
	
	
<script>
// [name] is the name of the event "click", "mouseover", .. 
// same as you'd pass it to bind()
// [fn] is the handler function
$.fn.bindFirst = function(name, fn) {
    // bind as you normally would
    // don't want to miss out on any jQuery magic
    this.on(name, fn);

    // Thanks to a comment by @Martin, adding support for
    // namespaced events too.
    this.each(function() {
        var handlers = $._data(this, 'events')[name.split('.')[0]];
        // take out the handler we just inserted from the end
        var handler = handlers.pop();
        // move it at the beginning
        handlers.splice(0, 0, handler);
    });
};
	   function patreonchoices(){
		   //$("#choices p.choice.patreon").mousedown(function(e){
		   $("#story p.choice a").each(function(e){
			   str = $(this).html();
			   console.log('checking',str);
			   if(str.indexOf("P!") >= 0){
				   res = str.replace("P!","");
				   $(this).html(res);
				   $(this).parent().addClass("patreon");
				   if(!valid_user && valid_user!=uniqid){
					   $(this).parent().html($(this).parent().html());
				   }
			   }
		   });
		   $("#story p.choice.patreon").bindFirst('mousedown',function(e){
			   if(!valid_user && valid_user!=uniqid){
				   $(this).unbind();
				   console.log('not valid user',valid_user,uniqid)
				   //alert("This is exclusive to logged in Patreon Supporters");
				   $("#loginwrap").fadeIn('fast',function(){});
				   e.preventDefault();
				   e.stopPropagation();
				   return false;
			   }
		   });
	   }
</script>

    <script type="text/javascript">
      $("#photo").addClass("load");
    </script>


    <script type="text/javascript">
        (function($) {
            var element = $('.follow-scroll'),
                originalY = element.offset().top;
            
            // Space between element and top of screen (when scrolling)
            var topMargin = 20;
            
            // Should probably be set in CSS; but here just for emphasis
            element.css('position', 'relative');
            
            $(window).on('scroll', function(event) {
                var scrollTop = $(window).scrollTop();
                
                element.stop(false, false).animate({
                    top: scrollTop < originalY
                            ? 0
                            : scrollTop - originalY + topMargin
                }, 300);
            });
        })(jQuery);
    </script>

    <script type="text/javascript">
      (function($) {
            var element = $('.follow-scroll'),
                originalY = element.offset().top;
            
            // Space between element and top of screen (when scrolling)
            var topMargin = 20;
            
            // Should probably be set in CSS; but here just for emphasis
            element.css('position', 'relative');
            
            $(window).on('scroll', function(event) {
                var scrollTop = $(window).scrollTop();
                
                element.stop(false, false).animate({
                    top: scrollTop < originalY
                            ? 0
                            : scrollTop - originalY + topMargin
                }, 300);
            });
        })(jQuery);
    </script>


    <script type="text/javascript">
       function popuponclick()
       {
          my_window = window.open("http://mynoise.net/clone.php?url=%2FNoiseMachines%2F%2F%2FrainNoiseGenerator.php%3Fc%3D3%26l%3D1645523030161809000000%26m%3D",
           "mywindow","status=1,width=500,height=400");
     
          //my_window.document.write('<h1>The Popup Window</h1>');
       }
     
       function closepopup()
       {
          if(false == my_window.closed)
          {
             my_window.close ();
          }
          else
          {
             //alert('Window already closed!');
          }
       }

    </script>
	<script>
		var uniqid='_';
		$(document).ready(function(){
			$.ajax({
				url: "?getkey=1",
				context: document.body
			}).done(function(str) {
				uniqid=str;
			});

			patreonchoices();
		});
		$(document).ready(function(){
			$(document).click(function(){
				window.parent.document.getElementsByTagName("body")[0].style.overflowY = "hidden";
			});
		});
	</script>

</body>
</html>
