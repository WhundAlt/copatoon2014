<!--
	Note: This is a custom HTML/PHP wrapper based on the original site.
	This is NOT the original!
-->
<?php
  /* by obelisk */

	/** Path of the backend folder (I wish I knew a cleaner way of doing this). */
	$backendPath = '../../../api.tetrisfriends.com/_backend';
	
	include_once $backendPath.'/users.php';
	include_once $backendPath.'/session.php';
	
	// Start/Continue a session
	// (This makes it possible to easily store data for this "session")
	sessionStart();

	$session_id    = sessionGet('session_id');
	$user_id       = sessionGet('user_id');
	$tf_uid        = sessionGet('tf_uid');
	$user          = ($user_id !== NULL) ? simplexml_load_string(loadUser($user_id)) : NULL;
	$username      = $user ? (string)$user->username : 'Guest';
	$user_avatar   = $user ? (string)$user->avatar   : '1';
	$current_money = $user ? (string)$user->coins    : '0';
	$you_played_a_full_game = false;

	echo (
		'<script type="text/javascript">'.
			'var loginId = getLoginId(1338);'.
		'</script>'
	);
	if ($you_played_a_full_game) {
		echo (
			'<script language="JavaScript" type="text/javascript">'.
				'$("#mini_profile_points").html(' . $current_money . ')'.
			'</script>'
		);
	}
	echo (
		'<script language="JavaScript" type="text/javascript">'.
			'pageTracker._trackPageview("/game_screen/results100");'.
		'</script>'
	);
	?>
	<script language='javascript' type='text/javascript'>
	
		$(document).ready(function() {
			if (document.addEventListener){
				document.addEventListener('keyup', checkKey, false);
			} else if (document.attachEvent){
				document.attachEvent('onkeyup', checkKey);
			} 
		});
			
		function checkKey(event) {
			if (isAdPlaying == false && gameResultsMissionAchievements == false)
			{
				if (gameResultsAdvanceRank) {
					if (event.keyCode == 13) {
						if (gameResultsPromotionRank != -1) {
							var changeType = "promote";
							
							if (gameResultsCurrentRank > gameResultsPromotionRank) {
								changeType = "demote";
							}
						
							gameResultsRankUp(true, loginId, gameResultsPromotionRank, changeType, 100, '//tetrisow-a.akamaihd.net/data5_0_1_1');
						}
					}
					else if (event.keyCode == 27) {
						gameResultsClosePopupLb('//tetrisow-a.akamaihd.net/data5_0_1_1', true);
					}
				}
				else {
					if (gameResultsAchievementPopup == false)
					{
						if (event.keyCode == 13) {
							window.document.location='/games/Battle2P/game.php';
						}
						else if (event.keyCode == 27) {
							window.document.location='/';
						}
					}
				}
			}
		}
	</script>

<div class='game_results'>
	<div class='game_results_game_logo'>
		<img src = '//tetrisow-a.akamaihd.net/data5_0_1_1/images/results/Battle2P_logo.gif' alt ='' ></img>
	</div>

	<div class='game_results_box box_container'>
		<div class='box_top_border'>
			<div class='box_top_left'>&nbsp;</div>
			<div class='box_top_right'>&nbsp;</div>
		</div>
		<div class='box_left_border'>
			<div class='box_right_border'>
				<div id = 'game_results_bg' class = 'game_results_bg'><div id = 'game_results_bg_content'></div></div>
				<div id = 'game_results_content' class='game_results_content game_results_Battle2P_content box_content'>

					<div class='game_results_nav'>
						<ul class='game_results_nav_items'>
							<li class='game_results_nav_item_result'><a href="javascript:void(0)" onclick='showGameResultsMain(true)'>Result</a></li>
							<li class='game_results_nav_item_stats'><a href="javascript:void(0)" onclick='showGameResultsStats()'>Stats</a></li>
							<li class='game_results_nav_item_replay'><a href="javascript:void(0)" onclick='showGameResultsReplayer()'>Replay</a></li>
							<li class='game_results_nav_item_missions'><a href="javascript:void(0)" onclick='showGameResultsMissions()'>Missions</a></li>
						</ul>
					</div>
					<div class='game_results_main'>
						
<div class='game_results_main_header'>
	<div id='game_results_header' class='game_results_header'></div>
</div>

<div id ='game_results_win_anim_msg' class = 'game_results_win_anim_msg'>
	<div id = 'game_results_wineffects_none'>
		<span>Get a</span>
		<a href = '/shop/index.php?accessoryType=5'>Win-Tone</a>
		<span>and</span>
		<a href = '/shop/index.php?accessoryType=6'>Win-Grafix</a>
		<span>to express yourself!</span>
	</div>
	<div id = 'game_results_wineffects_no_tone'>
		<span id = 'game_results_you_use'>You are using</span>
		<img class = 'game_results_win_grafix_icon' src = '../../data/images/results/winGrafix_icon.png'></img>
		<a id = 'game_results_win_grafix_name' href = '/shop/index.php?accessoryType=6'>name</a>
		<span>Get a</span>
		<a href = '/shop/index.php?accessoryType=5'>Win-Tone</a>
		<span>and express yourself!</span>
		<div class="clear"></div>
	</div>
	<div id = 'game_results_wineffects_no_grafix'>
		<span id = 'game_results_you_use1'>You are using</span>
		<img class = 'game_results_win_tone_icon' src = '../../data/images/results/winTone_icon.png'></img>
		<a id = 'game_results_win_tone_name' href = '/shop/index.php?accessoryType=5'>name</a>
		<span>Get a</span>
		<a href = '/shop/index.php?accessoryType=6'>Win-Grafix</a>
		<span>and express yourself!</span>
		<div class="clear"></div>
	</div>
	<div id = 'game_results_wineffects_all'>
		<span id = 'game_results_you_use2'>You are using</span>
		<img class = 'game_results_win_grafix_icon' src = '../../data/images/results/winGrafix_icon.png'></img>
		<a id = 'game_results_win_grafix_name1' href = '/shop/index.php?accessoryType=6'>name</a>
		<span>and</span>
		<img class = 'game_results_win_tone_icon' src = '../../data/images/results/winTone_icon.png'></img>
		<a id = 'game_results_win_tone_name1' href = '/shop/index.php?accessoryType=5'>name</a>
		<div id = 'game_results_effect_get_one'>
			<span>get one today and express yourself!</span>
		</div>
		<div id = 'game_results_effect_shop'>
			<span>Get more from the</span>
			<a href = '/shop/index.php'>Tetris Friends Shop</a>
			<span>!</span>
		</div>
		<div class="clear"></div>
	</div>
</div>

<div id='game_results_main_info' class='game_results_main_info game_results_Battle2P'>
	<h1 id='game_results_main_stat' class='game_results_main_stat'></h1>

	<div id='game_results_contestant0' class='game_results_contestant game_results_contestant0'></div><div id='game_results_contestant1' class='game_results_contestant game_results_contestant1'></div></div>
<div class="game_results_main_info2">
	<div id="game_results_player" class="game_results_player"></div>

	<div id="game_results_stars" class="game_results_stars"></div>
	<div id="game_results_rank" class="game_results_rank"></div>
	<div id="game_results_prev_stars" class="game_results_stars"></div>
	<div id="game_results_prev_rank" class="game_results_rank game_results_prev_rank"></div>
	<div id="game_results_rank_change_arrow" class="game_results_rank_change_arrow"></div>
	<div class="clear"></div>
	<div id="game_results_star_message" class="game_results_star_message"></div>
</div>
	
<a class="button button_arrow button_left_arrow game_results_main_prev_page" href="javascript:void(0);" onclick="toggleMainInfoPage()"></a>
<a class="button button_arrow button_right_arrow game_results_main_next_page" href="javascript:void(0);" onclick="toggleMainInfoPage()"></a>					</div>

					<div class='game_results_stats'>
						<div class='game_results_stats_header'>
							<a>View Full Leaderboard</a>
						</div>
						<div id = "game_results_details" class = "game_results_details">
						</div>
					</div>

					<div class='game_results_replay'>
						<div class='replayer_content game_results_replay_content'>
							

<!-- Content -->
<div id="content" class ='replayContent'>
	<div id="contentReplayFlash">
		<div id="errorMessage">
			<noscript>Tetris Friends requires that Javascript is enabled in order to
			properly display. <br />
			Please check that your browser has Javascript enabled and reload the
			page.</noscript>
		</div>
	</div>
</div>
<!-- JavaScript -->


<script type="text/javascript">
   function replayRenderFlash() {
   	  isPopup = 0;

	   flashVars = {
		sessionId: 'oqt2Os172VQ='
      };

 	  /* Add Timer for Opera and Safari */
	  if (/Opera/i.test(navigator.userAgent) && isPopup) {
		setTimeout("renderReplay()", 500);
	  }
	  else if (/Safari/i.test(navigator.userAgent) && isPopup) {
		setTimeout("renderReplay()", 500);
	  }
	  else {
	  	swfobject.embedSWF("//tetrisow-a.akamaihd.net/data5_0_1_1/games/replayer/OWTetrisMPReplayWidget.swf?version=0", "contentReplayFlash", "616", "355", "9.0.0", {}, flashVars, {wmode: "opaque"}, {allowscriptaccess: "always"}, {id:"OWReplay", name:"OWReplay"});
	  }
   }

   function renderReplay() {
	   swfobject.embedSWF("//tetrisow-a.akamaihd.net/data5_0_1_1/games/replayer/OWTetrisMPReplayWidget.swf?version=0", "contentReplayFlash", "616", "355", "9.0.0", {}, flashVars, {wmode: "opaque"}, {allowscriptaccess: "always"}, {id:"OWReplay", name:"OWReplay"});
   }

    // Checks if user has the correct version of Flash
    var hasReqestedVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);

    // If user does, render flash, else display error message
    if (hasReqestedVersion) {
      replayRenderFlash();
    } else {
      var errorMsg = document.getElementById('errorMessage');
      errorMsg.innerHTML = 'If the game doesn\'t load or you experience problems,'
          + '<br />please <a href="http://www.adobe.com/go/getflashplayer" title="Upgrade your version of Flash">'
          + 'update your version of Flash</a> by clicking '
          + '<a href="http://www.adobe.com/go/getflashplayer" title="Upgrade your version of Flash">HERE</a>.';
    }
</script>						</div>
					</div>
					
					<div class='game_results_missions'>
						<div class='game_results_missions_header'>
							<a>View All Missions</a>
						</div>
						<div class='game_results_missions_contents'>
														<div id='game_results_missions_content_active_header' class='game_results_missions_contents_active_header'>Activated Missions for this game</div>
							<div id='game_results_missions_content_active' class='game_results_missions_content_active'/>
							<div id='game_results_missions_content_available_header' class='game_results_missions_contents_available_header'/>
							<div id='game_results_missions_content_available' class='game_results_missions_content_available'/>
						</div>
					</div>

					
					
					<div id='game_results_advance_popup' class='game_results_game_notice game_results_game_notice_blue game_results_advance_popup'>
					</div>
					<div id='game_results_rank_popup' class='game_results_game_notice game_results_game_notice_blue game_results_rank_popup'>
					</div>
					<div id='game_results_missions_popup' class='game_results_game_notice game_results_game_notice_blue game_results_missions_popup'>
					</div>

															
					<div class='game_results_footer'>

						<table class = 'game_buttons'>
							<tr>

							<td align='center'><a href='/games/Battle2P/game.php' class='button button_large_blue button_play_again' ></a></td><td align='center'><a class='button button_large_blue button_home' ></a></div></td>
							</tr>
						</table>

					</div>

				</div>
			</div>
		</div>
		<div class='box_bottom_border'>
			<div class='box_bottom_left'>&nbsp;</div>
			<div class='box_bottom_right'>&nbsp;</div>
		</div>
	</div>

</div>

<!-- Advertisements -->
<!-- (Disable ads)
<div id="containerAds" class='game_ad_container'>
	<img class="game_ad_header" src="//tetrisow-a.akamaihd.net/data5_0_1_1/images/advertisement_text.gif" alt="" />
	<div class="game_advertisement"><iframe id='game_advertisement_iframe' frameborder=0 scrolling=no width=100% height=100% marginheight=0 marginwidth=0></iframe></div>
</div>
<div style='width: 1px; height: 1px; overflow: hidden;'>
	<iframe id='game_advertisement_hidden_iframe' frameborder=0 scrolling=no width=100% height=100% marginheight=0 marginwidth=0></iframe>
	<div id='game_advertisement_hidden_div'></div>
</div>
-->
<div class='game_results_mini_profile'>
	<div id='game_mini_profile_box' class='game_mini_profile_box boxContainer'>	<div class='box_top_border'>		<div class='box_top_left'>&nbsp;</div>		<div class='box_top_right'>&nbsp;</div>	</div>	<div class='box_left_border'>		<div class='box_right_border'>			<div class='box_content'><div id ='mini_profile' class = 'home_mini_profile home_signed_in game_signed_in'><p class='floatleft' style='height: 30px; line-height: 25px; left: 5px; color: #333;'><a>0 Friends Online</a></p><div class='floatright'>   <div class="message_counter 7296827">      <a class="button button_mail button_mail_unread floatleft"></a>      <p class="floatleft" ><a>0 New Message</a></p>   </div></div><div class='clear'></div><div id = 'home_main_info' class='home_main_info'><p class='home_first_info_field'>Welcome <strong><?php echo $username; ?></strong></p><p class='home_second_info_field'>		<script type=text/javascript>
		$(document).ready(function() {
		$('#home_profile_token_icon').qtip({
		show: { delay: 0 },
		content: '<span class=\"tooltip_content\">What are Tokens?<br />Click and find out!</span>',
		position: {
		corner: { tooltip: 'bottomRight', target: 'topMiddle' },
		adjust: { screen: true }
	},
	style: {
	width: 130,
	border: { width: 1, radius: 3, color: '#C0C0C0' },
	tip: { corner: 'bottomRight', color: '#C0C0C0', size: { x:20, y:10 }, centerColor:'#FFFFFF', border:1 }
						}
					});
				});
		</script><a class='tt' tabindex='-1'><img src='//tetrisow-a.akamaihd.net/data5_0_1_1/images/token_icon.png' id='home_profile_token_icon' class='token_icon' border='0' alt='' /></a>&nbsp;Tokens: <strong id = 'mini_profile_points'><?php echo $current_money; ?></strong></p><div class='home_token_tooltip game_token_tooltip'>		<script type=text/javascript>
		$(document).ready(function() {
		$('#home_profile_token_help').qtip({
		show: { delay: 0 },
		content: '<span class=\"tooltip_content\">What are Tokens?<br />Click and find out!</span>',
		position: {
		corner: { tooltip: 'bottomRight', target: 'topMiddle' },
		adjust: { screen: true }
	},
	style: {
	width: 130,
	border: { width: 1, radius: 3, color: '#C0C0C0' },
	tip: { corner: 'bottomRight', color: '#C0C0C0', size: { x:20, y:10 }, centerColor:'#FFFFFF', border:1 }
						}
					});
				});
		</script><a class='tt' tabindex='-1'><img src='//tetrisow-a.akamaihd.net/data5_0_1_1/images/help.png' id='home_profile_token_help' class='home_profile_token_help' border='0' alt='' /></a></div>		<script type=text/javascript>
		$(document).ready(function() {
		$('#home_profile_avatar').qtip({
		show: { delay: 0 },
		content: '<span class=\"tooltip_content\">Click here to edit!</span>',
		position: {
		corner: { tooltip: 'bottomLeft', target: 'topMiddle' },
		adjust: { screen: true }
	},
	style: {
	width: 130,
	border: { width: 1, radius: 3, color: '#C0C0C0' },
	tip: { corner: 'bottomLeft', color: '#C0C0C0', size: { x:20, y:10 }, centerColor:'#FFFFFF', border:1 }
						}
					});
				});
		</script><a class='' tabindex='-1'><img src='//tetrisow-a.akamaihd.net/data5_0_1_1/images/avatars/<?php echo $user_avatar; ?>.gif' id='home_profile_avatar' class='home_profile_avatar' border='0' alt='' /></a></div><div class='clear'></div><p id='mini_profile_token_msg' class='mini_profile_token_msg'>&nbsp;</p></div>		    </div>	    </div>	</div>	<div class='box_bottom_border'>		<div class='box_bottom_left'>&nbsp;</div>		<div class='box_bottom_right'>&nbsp;</div>	</div></div><div class='clear'></div><script language="JavaScript" type="text/javascript">
	function clickRubyLink(inLifeRubies){
		if (parseInt(inLifeRubies) > 0) {
  			pageTracker._trackPageview('game/ruby_purchase');
			popupBuyRuby();
		} else {
			pageTracker._trackPageview('game/ruby_help_redirect');
			setTimeout('location.href = "/help/help.php?linkTag=mp2#help_section_rubies";', 250);
		}
	}
	function popupBuyRuby() {
				
		if (true) {
			// popUpBoxByUrl("/shop/_inc/_ruby_options.php", 650, 250, "", null);
			popUpBoxByUrl("/shop/_inc/_incentivized_ruby_options.php", 650, 250, "", null);
		} else {
			popUpBoxByUrl("/shop/shop_popup.php?rdir=/games/ajax/game_results.php", 650, 640, "", null);
		}
	}

		$(document).ready(function() {
			$('.edit').editable('/users/ajax/save_message.php', {
				indicator : "<img src='//tetrisow-a.akamaihd.net/data5_0_1_1/images/spinner.gif'>",
				type   : 'text',
				submitdata: { _method: "put" },
				select : true,
				submit : 'OK',
				cssclass : "mini_profile_jeditable",
				maxlength: '50',
				placeholder: 'Click here to change your Status Message',
				onfocus: decodeHtmlSpecialChars
			});
		});

		/*
		 // SponsorPay Incentivized video (NOTE: widgets.js is loaded in the parent (i.e. /shop/index.php) header
		var sponsorPayVideo = new SPONSORPAY.Video.Iframe({
			appid: '6338',
			uid: '7296827',
			width: 600,
			height: 600,
			greyout: true,
			display_format: 'player_and_reward', // 'bare_player' will show only the video. Use 'player_and_reward' to show a line describing the reward on top of the video box.
			callback_on_start: sponsorPayOnStart,
			callback_no_offers: sponsorPayNoOffers,
			callback_on_close: sponsorPayOnClose,
			callback_on_conversion: sponsorPayOnConversion
		});
		sponsorPayVideo.backgroundLoad();
		*/

		function sponsorPayOnStart() {
			// EARN FREE RUBIES plays incentivized video
			$("#shop_popup_ruby_earn").attr("href", "javascript:void(0)");
			$("#shop_popup_ruby_earn").unbind('click');
			$("#shop_popup_ruby_earn").click(sponsorPayOnEarnButton);
		}
		
		function sponsorPayOnEarnButton() {
			sponsorPayVideo.showVideo();
		}
		
		function sponsorPayNoOffers() {
			// EARN FREE RUBIES goes to the offer wall
		    $("#shop_popup_ruby_earn").unbind('click');
			$("#shop_popup_ruby_earn").attr("href", "/shop/earn_rubies.php?ref=from-shop&sp_flag=no-offers");
		}
		
		function sponsorPayOnClose() {
			// The user has closed the video before completion --- redirect to the offer wall
			window.parent.location = '/shop/earn_rubies.php?ref=from-shop&sp_flag=on-close';
		}
		
		function sponsorPayOnConversion() {
			// The user has completed watching their video and earned their rubies --- redirect to the offer wall
			setTimeout('sponsorPayGotoOfferWall()', 1500);
		}

		function sponsorPayGotoOfferWall() {
			window.parent.location = '/shop/earn_rubies.php?ref=from-shop&sp_flag=on-conversion';
		}

</script>
</div>


<div class='clear'></div>
<div class='game_results_more_games'>
	<!-- (Disable ads)
	<iframe id='game_results_dfp_ads' src='/ads/google_dfp_results_ads.html' frameborder=0 scrolling=no width=100% height=256px marginheight=0 marginwidth=0></iframe>
	-->
	<!-- 
<table class='game_results_more_games_ads'>
	<tr>
		<td><div id='game_results_house_ad1'></div></td>
		<td><div id='game_results_house_ad2'></div></td>
		<td><div id='game_results_house_ad3'></div></td>
	</tr>
</table>

<script language="JavaScript" type="text/javascript">
	$.getScript("/ads/toa_ads.js.php?listpos=x62a,x62b,x62c&productId=100&XE&status=active&ar=3&gg=0&us=1&XE", function() { gameResultsLoadTOAADS(); });

	function gameResultsLoadTOAADS() {
		$('#game_results_house_ad1').html(GET_TOA_AD('x62a'));
		$('#game_results_house_ad2').html(GET_TOA_AD('x62b'));
		$('#game_results_house_ad3').html(GET_TOA_AD('x62c'));
	}
</script> -->
</div>

<div class='clear'></div>

<script type='text/javascript'>
	function showGameResultsMain(inIsPlayAnim) {
		$('div.game_results_stats').hide();
		$('div.game_results_replay').hide();
		$('div.game_results_missions').hide();
		$('div.game_results_main').show();
		$('ul.game_results_nav_items > li > a').removeClass('selected');
		$('li.game_results_nav_item_result > a').addClass('selected');
		if (inIsPlayAnim) {
			if ($('div.game_results_main_info2').css('display') != "none") {
				toggleMainInfoPage(true);
			} else {
				gameResultsPlayWinAnim();
			}
		}
	}

	function showGameResultsStats() {
		$("#game_results_header").hide();
		$('div.game_results_replay').hide();
		$('div.game_results_missions').hide();
		$('div.game_results_main').hide();
		$('div.game_results_stats').show();
		$('ul.game_results_nav_items > li > a').removeClass('selected');
		$('li.game_results_nav_item_stats > a').addClass('selected');
	}

	function showGameResultsReplayer() {
		$("#game_results_header").hide();
		$('div.game_results_main').hide();
		$('div.game_results_stats').hide();
		$('div.game_results_missions').hide();
		$('div.game_results_replay').show();
		$('ul.game_results_nav_items > li > a').removeClass('selected');
		$('li.game_results_nav_item_replay > a').addClass('selected');
		gameResultsPauseWinAnim();
	}

	function showGameResultsMissions() {
		$("#game_results_header").hide();
		$('div.game_results_main').hide();
		$('div.game_results_stats').hide();
		$('div.game_results_replay').hide();
		$('div.game_results_missions').show();
		$('ul.game_results_nav_items > li > a').removeClass('selected');
		$('li.game_results_nav_item_missions > a').addClass('selected');
		$('li.game_results_nav_item_missions_gold > a').addClass('selected');
	}
	showGameResultsMain(false);

	gameResultsShowMissions('100', '//tetrisow-a.akamaihd.net/data5_0_1_1', '1');	
</script>