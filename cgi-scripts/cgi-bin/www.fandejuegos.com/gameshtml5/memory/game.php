<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/reset.css?v=1718861383" type="text/css">
        <link rel="stylesheet" href="css/main.css?v=1718861383" type="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui" />
		<meta name="msapplication-tap-highlight" content="no"/>



        <script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="js/createjs-2013.12.12.min.js?v=1718861383"></script>
        <script type="text/javascript" src="js/ctl_utils.js?v=1718861383"></script>
        <script type="text/javascript" src="js/sprite_lib.js?v=1718861383"></script>
        <script type="text/javascript" src="js/settings.js?v=1718861383"></script>
        <script>
        TEXT_GAMEOVER  = "GAME OVER";
TEXT_PLAY      = "PLAY";
TEXT_LEVEL_SCORE = "LEVEL SCORE";
TEXT_LEVELCOMPLETED = "STAGE CLEARED!";
TEXT_TIMELEFT = "Time ";
TEXT_SCORE = "Score ";
TEXT_MATCH_SCORE = "SCORE MATCHING";
TEXT_TIMEBONUS = "TIME BONUS";
TEXT_TOTALSCORE = "TOTAL SCORE";
TEXT_VICTORY = "CONGRATULATIONS!!";
TEXT_PLAY_AGAIN = "PLAY AGAIN";

TEXT_SHARE_IMAGE = "200x200.jpg";
TEXT_SHARE_TITLE = "Congratulations!";
TEXT_SHARE_MSG1 = "You collected <strong>";
TEXT_SHARE_MSG2 = " points</strong>!<br><br>Share your score with your friends!";
TEXT_SHARE_SHARE1 = "My score is ";
TEXT_SHARE_SHARE2 = " points! Can you do better?";		var CARD_WIDTH = 	160;
		var CARD_HEIGHT = 	252;
		var VAR_BG_MENU=	"./sprites/ratchermemory-bg-menu.jpg";
		var VAR_BG_1=		"./sprites/ratchermemory-bg-1.jpg";
		var VAR_BG_2=		"./sprites/ratchermemory-bg-2.jpg";
		var VAR_BG_3=		"./sprites/ratchermemory-bg-3.jpg";
		var VAR_BG_4=		"./sprites/ratchermemory-bg-4.jpg";
		var VAR_BG_SPRITE=	"./sprites/ratchermemory_spritesheet.png";
		</script>
        <script type="text/javascript" src="js/CPreloader.js?v=1718861383"></script>
        <script type="text/javascript" src="js/CMain.js?v=1718861383"></script>
        <script type="text/javascript" src="js/CTextButton.js"></script>
        <script type="text/javascript" src="js/CGfxButton.js"></script>
        <script type="text/javascript" src="js/CToggle.js"></script>
        <script type="text/javascript" src="js/CMenu.js"></script>
        <script type="text/javascript" src="js/CGame.js?v=1718861383"></script>
        <script type="text/javascript" src="js/CCard.js"></script>
        <script type="text/javascript" src="js/CLevels.js"></script>
        <script type="text/javascript" src="js/CNextLevel.js"></script>
        <script type="text/javascript" src="js/CInterface.js"></script>
        <script type="text/javascript" src="js/CGameOver.js"></script>
        <script type="text/javascript" src="js/CVictory.js"></script>


        
    </head>
    <body ondragstart="return false;" ondrop="return false;" >
	<div style="position: fixed; background-color: transparent; top: 0px; left: 0px; width: 100%; height: 100%"></div>
          <script>
            $(document).ready(function(){
                     var oMain = new CMain({
                                                card_per_level :   [4,      //NUM CARD IN LEVEL 1
                                                                    8,      //NUM CARD IN LEVEL 2
                                                                    16,     //NUM CARD IN LEVEL 3
                                                                    32      //NUM CARD IN LEVEL 4
                                                                    ],     

                                                time_level:[30,  //NUM SECONDS PER LEVEL 1
                                                            60,  //NUM SECONDS PER LEVEL 2
                                                            120, //NUM SECONDS PER LEVEL 3
                                                            240  //NUM SECONDS PER LEVEL 4
                                                            ],

                                                score_match_card: 10,     //SCORE ASSIGNED WHEN USER MATCH TWO CARDS
                                                score_time_left_mult: 2,  //MULTIPLIER ASSIGNED TO REMAINING LEVEL TIME
                                                time_match_mult: 3000,     //TIME AVAILABLE BETWEEN DISCOVERED MATCHING TO GET SCORE MULTIPLIER 
                                                show_cards: 0             //IF YOU WANT TO SHOW CARDS FOR SOME SECONDS WHEN LEVEL START, SET THIS VALUE > 0 (NUM OF SECONDS)
                                        });

                    $(oMain).on("start_session", function(evt) {
                        if(getParamValue('ctl-arcade') === "true"){
                            parent.__ctlArcadeStartSession();
                        }
                        //...ADD YOUR CODE HERE EVENTUALLY
                    });

                    $(oMain).on("end_session", function(evt) {
                           if(getParamValue('ctl-arcade') === "true"){
                               parent.__ctlArcadeEndSession();
                           }
                           //...ADD YOUR CODE HERE EVENTUALLY
                    });
                    
                    $(oMain).on("start_level", function(evt, iLevel) {
                           if(getParamValue('ctl-arcade') === "true"){
                               parent.__ctlArcadeStartLevel({level:iLevel});
                           }
                    });

                    $(oMain).on("end_level", function(evt,iLevel) {
                           if(getParamValue('ctl-arcade') === "true"){
                               parent.__ctlArcadeEndLevel({level:iLevel});
                           }
                    });

                    $(oMain).on("save_score", function(evt,iScore) {
                           if(getParamValue('ctl-arcade') === "true"){
                               parent.__ctlArcadeSaveScore({score:iScore});
                           }
                           //...ADD YOUR CODE HERE EVENTUALLY
                    });

                    $(oMain).on("show_interlevel_ad", function(evt) {
                           if(getParamValue('ctl-arcade') === "true"){
                               parent.__ctlArcadeShowInterlevelAD();
                           }
                           //...ADD YOUR CODE HERE EVENTUALLY
                    });

                    $(oMain).on("share_event", function(evt, iScore) {
                           if(getParamValue('ctl-arcade') === "true"){
                               parent.__ctlArcadeShareEvent({   img: TEXT_SHARE_IMAGE,
                                                                title: TEXT_SHARE_TITLE,
                                                                msg: TEXT_SHARE_MSG1 + iScore + TEXT_SHARE_MSG2,
                                                                msg_share: TEXT_SHARE_SHARE1 + iScore + TEXT_SHARE_SHARE1});
                           }
                    });
                     
                    if(isIOS()){
                        setTimeout(function(){sizeHandler();},200);
                    }else{
                        sizeHandler();
                    }
           });

        </script>
        <canvas id="canvas" class='ani_hack' width="1920" height="1080"></canvas>
        <div id="block_game" style="position: fixed; background-color: transparent; top: 0px; left: 0px; width: 100%; height: 100%; display:none"></div>
        
        <a href="https://www.juegos.net" title="juegos gratis en juegos.net" style="position:absolute; bottom:20px; right:20px; z-index:99999999;display:block; color:#FFFFFF; overflow:hidden; width:200px; height:50px;font-weight:bold;padding:0; margin:0;" target="_blank"><img src="/gameshtml5/logo.png" width="200" height="50" alt="juegos gratis en Juegos.NET"><br>juegos gratis para jugar online</a>
    </body>
</html>