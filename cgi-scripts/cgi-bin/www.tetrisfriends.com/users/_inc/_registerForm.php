<?php
  /* by obelisk */

	// Start a session when this is shown as a popup
	if (session_status() === PHP_SESSION_NONE) {
		/** Path of the backend folder (I wish I knew a cleaner way of doing this). */
		$backendPath = '../../../api.tetrisfriends.com/_backend';

		include_once $backendPath.'/session.php';
		
		// Start/Continue a session
		// (This makes it possible to easily store data for this "session")
		sessionStart();
	}
	
	// Check if this is shown in a "popup" in a page or as part of the registration page.
	$is_popup = ($_SERVER['REQUEST_METHOD'] === 'GET' && array_key_exists('isPopup', $_GET));
	?>
<!--
	Note: This is a custom HTML/PHP wrapper based on the original site.
	This is NOT the original!
-->
<?php if ($is_popup) { ?>
<link rel='stylesheet' href='//tetrisow-a.akamaihd.net/data5_0_1_1/stylesheets/combined.min.css' type='text/css' media='screen' />
<script type='text/javascript' src='//tetrisow-a.akamaihd.net/data5_0_1_1/javascripts/combined.min.js' charset='utf-8'></script>
<script type='text/javascript' src='//tetrisow-a.akamaihd.net/data5_0_1_1/javascripts/ads/showads.js' charset='utf-8'></script>
<script type="text/javascript">
	window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(3),u=e(4),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],t),e}finally{f.emit("fn-end",[c.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e,n){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now(),!1,n])}},{}],2:[function(e,n,t){function r(e,n){if(!o)return!1;if(e!==o)return!1;if(!n)return!0;if(!i)return!1;for(var t=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var u=navigator.userAgent,f=u.match(a);f&&u.indexOf("Chrome")===-1&&u.indexOf("Chromium")===-1&&(o="Safari",i=f[1])}n.exports={agent:o,version:i,match:r}},{}],3:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],4:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],5:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=v(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||o(t)}function w(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(3),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!E++){var e=x.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+x.offset],null,"api");var t=l.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===l.readyState&&i()}function i(){f("mark",["domContent",a()+x.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-x.offset}var u=(new Date).getTime(),f=e("handle"),c=e(3),s=e("ee"),p=e(2),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1123.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=n.exports={offset:u,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),l[m]?(l[m]("DOMContentLoaded",i,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",o),d[v]("onload",r)),f("mark",["firstbyte",u],null,"api");var E=0,O=e(5)},{}]},{},["loader"]);
</script>

<body class='popup_body register_popup'>
	<div class='box_header'>
		<h4 class='textleft floatleft'>Hello Guest, before you continue...</h4><a class='button button_small_grey button_small_grey_close close_btn floatright' href='javascript: void(0)' onclick='closePopup();'></a></div>
	<div class='clear'></div>
	<div class='promo_sub_header'>
		<h2 class='margintop_10px' style='color: #000;'>Sign-up for a FREE Account to save your progress!</h2>
	</div>
<?php } ?>
	<form id="form_reg" action="/users/process.php" target="_parent" method="post">
		<input type="hidden" id='input_guest_id' name="guestId" value="47528582" />
		<input type="hidden" name="saveGame" value="true" />
		<input type="hidden" name="register" value="1" />
		<input type="hidden" name="token" value="5de08be319336821144c4876010e9355079b3f516e20ef6c9d4a1dd8453a13da" />
		<div class="reg_main">
<?php if (!$is_popup) { ?>
			<div class='reg_title'><strong>Create your Account</strong></div>
<?php } ?>
<?php         // (Error Box)
              // Only show this if an error ocurred while registering
              $register_errors = sessionGet('register_errors');
              if ($register_errors && count($register_errors) > 0) {
                // Clear the register errors
                sessionSet('register_errors', array());
                // Render HTML from error messages
                $errors = '';
                foreach ($register_errors as $error) {
                  switch ($error) {
                    case 'USERNAME_TAKEN':
                      $errors .= '<li>Username is already taken. Please try again with a different username.</li>';
                      break;
                    case 'USERNAME_INVALID':
                      $errors .= '<li>Username is not valid. Please try again with a different username.</li>';
                      break;
                  }
                }
?>
									<div class="reg_error box_red_container">
										<div class="box_red_top_border">
											<div class="box_red_top_left">&nbsp;</div>
											<div class="box_red_top_right">&nbsp;</div>
										</div>
										<div class="box_red_left_border">
											<div class="box_red_right_border">
												<div class="box_red_content">
													<!-- Put box contents here -->
													<div>
														<img class="box_icon" src="//tetrisow-a.akamaihd.net/data5_0_1_1/images/alertbad_icon.gif" alt="Error!">
														<strong>Registration Failed!</strong><br>
														<ul>
															<?php echo $errors; /* Errors */ ?>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="box_red_bottom_border">
											<div class="box_red_bottom_left">&nbsp;</div>
											<div class="box_red_bottom_right">&nbsp;</div>
										</div>
									</div>
<?php } ?>
			<div class="reg_form">
				<div class="reg_page1">
					<table>
						<tr>
							<td class="username_label label ">Username</td>
							<td class="ui">
								<ul>
									<li>
										<input id='username' type='text' name='username' autocomplete='off' value='' maxlength='16' onchange='hasChanged=true; lastInput=2' onblur='validate(2)' />
										<input type='hidden' name='username_selection' value='1' />
										<script type='text/javascript'>
											$(document).ready(function() {
												$('#home_reg_username_help').qtip({
														show: { delay: 0 },
														content: '<span class=\"tooltip_content\">Remember it!<br>You will need it to log in.</span>',
														position: {
														corner: { tooltip: 'topLeft', target: 'rightBottom' },
														adjust: { screen: true }
													},
													style: {
														width: 220,
														border: { width: 1, radius: 3, color: '#969696' },
														tip: { corner: 'topLeft', color: '#969696', size: { x:20, y:10 }, centerColor:'#FFFFFF', border:1 }
													}
												});
											});
										</script><a class='tt' href='#' tabindex='-1'><img src='//tetrisow-a.akamaihd.net/data5_0_1_1/images/help.png' id='home_reg_username_help' class='home_reg_username_help' border='0' alt='' /></a>
										<div id='username_error_msg' style='font-size: 10px; color: #f00; font-style: italic;'></div>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td></td>
<?php if ($is_popup) { ?>
							<td class="ui" style='padding-top: 77px;'>
								<button class="button button_small_grey button_small_grey_signup reg_submit" type="submit" style='margin-left: 70px;'></button>
							</td>
<?php } else { ?>
							<td class="ui">
								<button class="button button_small_grey button_small_grey_signup reg_submit" type="submit"></button>
								<br><br><br>
							</td>
<?php } ?>
						</tr>
						<script type='text/javascript'>
							$.getScript('//tetrisow-a.akamaihd.net/data5_0_1_1/javascripts/extra/country_state.pack.js', function () { initCountry(); });
						</script>
					</table>
				</div>
			</div>
			<div class="reg_info box_blue_container">
				<div class='box_blue_top_border'>
					<div class='box_blue_top_left'>&nbsp;</div>
					<div class='box_blue_top_right'>&nbsp;</div>
				</div>
				<div class='box_blue_left_border'>
					<div class='box_blue_right_border'>
						<div class='reg_info_content box_blue_content'>
							<!-- Put box contents here -->
							<div>
								<strong>Reasons to Create an Account</strong>
								<!--
								<ul>
									<li>It&rsquo;s FREE and super easy to do!</li>
									<li>Play <a href='/missions/index.php?ref=from-registration'>Missions</a> to earn Badges!</li>
									<li>Earn <a href='/help/help.php#help_section_tokens'>Tokens</a> to spend in <a href='/shop/index.php'>Tetris Friends Shop</a> and customize your gaming experience.</li>
									<li>Save your personal rank, high scores, game replays, and more.</li>
									<li>Choose your personality from our collection of <a href='/users/choose_avatar.php'>avatars</a>.</li>
									<li>Earn 500 BONUS Tokens instantly!</li>
								</ul>
								-->
								<ul>
									<li>It&rsquo;s FREE and super easy to do!</li>
									<li>Play <a>Missions</a> to earn Badges!</li>
									<li>Earn <a>Tokens</a> to spend in <a>Tetris Friends Shop</a> and customize your gaming experience.</li>
									<li>Save your personal rank, high scores, game replays, and more.</li>
									<li>Choose your personality from our collection of <a>avatars</a>.</li>
									<li>Earn 500 BONUS Tokens instantly!</li>
									<li>Note: Most things listed above don't work at the moment!</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class='box_blue_bottom_border'>
					<div class='box_blue_bottom_left'>&nbsp;</div>
					<div class='box_blue_bottom_right'>&nbsp;</div>
				</div>
			</div>
		</div>
	</form>

	<script language="javascript" type="text/javascript">
		var hasChanged = true;
		var hasErrors  = false;
		var lastInput  = "";
		
		function validate(itemId) {
			if (hasChanged) {
				switch(itemId) {
					case 2:
						usernameCheck();
						break;
				}
				hasChanged = false;
			}
		}
		
		function validatePage(pageNum) {
			if (pageNum == 1) {
				usernameCheck(true);
			}
		
			return !hasErrors;
		}
		
		function emailCheck(forceCheck) {
			var email = trim($("input#email").val());
		
			if (email != '') {
				if (validateEmailAddress(email)) {
					$.get("/users/ajax/user_lookup.php?searchType=1&email=" + email,
							function(data){
								if (data != "SUCCESS") {
									$('#email_error_msg').html(data);
									$('.email_label').addClass("error");
									hasErrors = true;
								} else {
									$('#email_error_msg').html("");
									$('.email_label').removeClass("error");
									hasErrors = false;
								}
							});
				} else {
					$('#email_error_msg').html("Please enter a valid email address");
					$('.email_label').addClass("error");
				}
			} else if (forceCheck) {
				$('#email_error_msg').html("Please enter a valid email address");
				$('.email_label').addClass("error");
			}
		}
		
		function usernameCheck(forceCheck) {
			var username = trim($("input#username").val());
		
			if (username != '' && (username.length > 3 && username.length < 17)) {
				$.get("/users/ajax/user_lookup.php?searchType=2&username=" + username,
						function(data){
							if (data != "SUCCESS") {
								$('#username_error_msg').html(data);
								$('.username_label').addClass("error");
								hasErrors = true;
							} else {
								$('#username_error_msg').html("");
								$('.username_label').removeClass("error");
								hasErrors = false;
							}
						});
			} else if (forceCheck) {
				$('#username_error_msg').html("Please enter a valid username");
				$('.username_label').addClass("error");
			}
		}
		
		function checkKey(event) {
			if (event.keyCode == 9) {
				if (hasChanged) {
					validate(lastInput);
				}
			}
		}
		
		$(document).ready(function() {
			if (document.addEventListener){
				document.addEventListener('keyup', checkKey, false);
			} else if (document.attachEvent){
				document.attachEvent('onkeyup', checkKey);
			} 
		});
	</script>
<?php if ($is_popup) { ?>
	<script type="text/javascript">
		window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"0db427ec08","applicationID":"12597004","transactionName":"YAZSZkBSXhZYWhAKC1lMZUBbHEUWXEsXTDteDVMdbUFVAlBKEAYWcQxCXxxDWBU=","queueTime":0,"applicationTime":5,"atts":"TEFREAhITRg=","errorBeacon":"bam.nr-data.net","agent":""}
	</script>
</body>
<?php } ?>
