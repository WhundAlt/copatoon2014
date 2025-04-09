<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Slingo Gold Rush Daily Challenge</title>
    <script type="text/javascript">
      var firstSession = true;
      var gameOverPoller;

      function __bind_JS_function(bindPoint, funcName) {
        var movie = document.getElementById("game");
        movie.pa_RegisterJavascriptMethod(funcName, bindPoint);
      }

      function __send_value(name, value) {
        var movie = document.getElementById("game");
        movie.slingoSetVar(name, value);
      }

      function __retrieve_value(name) {
        var movie = document.getElementById("game");
        return movie.slingoGetVar(name);
      }

      function __overlay_visibility(visible) {
        var gameOverlay = document.getElementById("gameOverlay");
        gameOverlay.style.visibility = (visible) ? "visible" : "hidden";
      }

      function __elem_enabled(elemID, enabled) {
        var elem = document.getElementById(elemID);
        elem.disabled = !enabled;
      }

      function __elem_getValue(elemID) {
        var elem = document.getElementById(elemID);
        return elem.value;
      }

      function __button_rename(btnID, newName) {
        var btn = document.getElementById(btnID);
        btn.innerHTML = newName;
      }

      function __powerups_iterate(func) {
        var ids = ["quickChargeSpark","blastModeSpark","coolJokerSpark","multBlockSpark","midasTouchSpark","powerBlastBlockSpark","redJokerSpark","timeBlockSpark","visionSpark","reelDevilSpark","cellPowerupsSpark","newVBlockSpark","autoSpinSpark","autoMatchSpark","cellPowerupsSpark"];

        ids.forEach(func);
      }

      function __powerups_applySel(checked) {
        __powerups_iterate(function (val) {
          var powerUp = document.getElementById(val);
          powerUp.checked = checked;
        });
      }

      function __ui_enabled(enabled) {
        var uiNotPwr = ["startBtn", "goalTxt", "allPowerUps", "noPowerUps"];

        var enableFunc = function(val) {
          var elem = document.getElementById(val);
          elem.disabled = !enabled;
        };

        uiNotPwr.forEach(enableFunc);
        __powerups_iterate(enableFunc);
      }

      function __game_start(firstTime) {
        if (firstTime) {
          __bind_JS_function("js_PlayAgain", "playAgain");
        }

        __ui_enabled(false);

        __overlay_visibility(false);

        gameOverPoller = setInterval(isGameOver, 1000);

        setPowerUpsToSWF();

        __send_value("start_game", "1");
      }

      function startGame() {
        __game_start(firstSession);

        if (firstSession)
          firstSession = false;
      }

      function resetGame() {
        var chalGoal = __elem_getValue("goalTxt");

        var url = "main.php";
        if (chalGoal)
          url += "?challenge_score=" + chalGoal + "&";
        else
          url += "?";

        url += "powerups=" + getPowerUpsFromForm().join(",");

        window.location.replace(url);
      }

      function isGameOver() {
        var isOver = __retrieve_value("game_over");
        if (isOver != "1")
          return;

        clearInterval(gameOverPoller);

        // Here, Slingo tech computed # of gold coins.
        __send_value("game_awards", "0,0");
      }

      function playAgain() {
        __ui_enabled(true);

        __overlay_visibility(true);

        __send_value("reset_game", "1");
      }

      function getPowerUpsFromForm() {
        var pwr = [];

        __powerups_iterate(function (val) {
          var powerUp = document.getElementById(val);
          if (powerUp.checked)
            pwr.push(powerUp.value);
        });

        return pwr;
      }

      function setPowerUpsToSWF() {
        var selPwrs = getPowerUpsFromForm();

        __send_value("init_powerups", selPwrs.join(","));
      }

      function selAllPowerUps() {
        __powerups_applySel(true);
      }

      function selNoPowerUps() {
        __powerups_applySel(false);
      }

      function goalScoreChanged(event) {
        __elem_enabled("startBtn", false);
        __button_rename("resetBtn", "Set score goal!");
      }

      document.addEventListener("DOMContentLoaded", function() {
        var btnBindings = {
          "startBtn": startGame,
          "resetBtn": resetGame,
          "allPowerUps": selAllPowerUps,
          "noPowerUps": selNoPowerUps
        };

        for (var prop in btnBindings) {
          if (btnBindings.hasOwnProperty(prop)) {
            var elem = document.getElementById(prop);
            elem.addEventListener("click", btnBindings[prop]);
          }
        }

        var defaultChecked = <?php
          if (isset($_GET['powerups'])) {
            $powerUps = explode(",", $_GET['powerups']);
          } else {
            $powerUps = ["quickChargeSpark", "blastModeSpark", "coolJokerSpark", "midasTouchSpark", "visionSpark"];
          }

          $noPowerUps = count($powerUps);

          echo "[";
          for ($i = 0; $i < $noPowerUps; $i++) {
            echo "\"" . $powerUps[$i] . "\"";
            if ($i < $noPowerUps - 1)
              echo ",";
          }
          echo "]";
        ?>;

        defaultChecked.forEach(function (id) {
          var elem = document.getElementById(id);
          elem.checked = true;
        });

        var goalTxt = document.getElementById("goalTxt");
        goalTxt.addEventListener("input", goalScoreChanged);

        __overlay_visibility(true);
      });
    </script>
    <style type="text/css">
      body {
        background-color: aliceblue;
      }

      .game {
        border: 5px outset grey;
        margin-left: auto;
        margin-right: auto;
        min-width: 500px;
        padding: 1em;
        background-color: ivory;
      }

      .game > .game_panel {
        position: relative;
        width: 500px;
        height: 573px;
        margin-left: auto;
        margin-right: auto;
      }

      .game > .game_panel > .swf {
        position: absolute;
        left: 0;
        top: 0;
        z-index: 1;
      }

      .swf p {
        text-align: center;
        font-style: italic;
      }

      .game > .game_panel > .overlay {
        position: absolute;
        left: 0;
        top: 0;
        z-index: 2;
        background-color: rgba(0, 0, 0, 0.5);
        width: 500px;
        height: 573px;
        visibility: hidden;
      }

      .tbl {
        margin-left: auto;
        margin-right: auto;
      }

      .tbl, .tbl tr, .tbl th, .tbl td {
        border: 3px outset black;
        border-collapse: collapse;
      }

      .tbl th, .tbl td {
        padding: 1em;
        text-align: center;
      }

      .tbl.compact, .tbl.compact tr, .tbl.compact th, .tbl.compact td {
        border: 3px groove lightgrey;
        border-collapse: collapse;
        width: auto;
      }

      .tbl.compact th, .tbl.compact td {
        padding: 0.2em;
      }

      .tbl.compact td:nth-child(even) {
        text-align: left;
      }

      .right {
        text-align: right;
      }

      @media only screen and (min-width: 576px) {
        .game, .tbl {
          width: 80%;
        }
      }

      @media only screen and (min-width: 768px) {
        .game, .tbl {
          width: 60%;
        }
      }
    </style>
  </head>
  <body>
    <div class="game_container">
      <div class="game">
        <div class="game_panel">
          <div class="swf">
            <object id="game" type="application/x-shockwave-flash" data="main.swf" width="500" height="573">
              <param name="wmode" value="transparent">
              <param id="gameFlashVars" name="flashvars" value="_host=web02.slingo.com:12000&amp;_rsid=2090653659&amp;working_url=http://classic.slingo.com/cachebust01585013080/sgs/games/blastgoldrush/&amp;com.slingo.flash.platform.adapter=/cachebust1501506200/sgs/platform/platform_adapter.swf&amp;asset_domain=http://classic.slingo.com&amp;asset_path=/cachebust01585013080/sgs/games/blastgoldrush/&amp;com.slingo.flash.game.assetpath=http://classic.slingo.com/cachebust01585013080/sgs/games/blastgoldrush/&amp;com.slingo.flash.platform.onReady=js_gameCommReady&amp;challenge_score=<?php
                if (isset($_GET['challenge_score']))
                  echo $_GET['challenge_score'];
                else
                  echo "1800000";
              ?>">
              <p>Please enable Flash support!</p>
            </object>
          </div>
          <div class="overlay" id="gameOverlay">
          </div>
        </div>
      </div>
      <hr>
      <div id="ui" class="ui">
        <form autocomplete="off">
          <table id="gameControls" class="tbl">
            <tbody>
              <tr>
                <td colspan="2">
                  <button type="button" id="startBtn">
                    Start game!
                  </button>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <button type="button" id="resetBtn">
                    Restart game!
                  </button>
                </td>
              </tr>
              <tr>
                <td class="right">
                  Challenge score:
                </td>
                <td>
                  <input type="number" id="goalTxt" placeholder="Type the score here." min="0" value="<?php
                    if (isset($_GET['challenge_score']))
                      echo $_GET['challenge_score'];
                    else
                      echo "1800000";
                  ?>">
                </td>
              </tr>
              <tr>
                <td class="right">
                  Power-Ups:
                </td>
                <td>
                  <table class="tbl compact">
                    <tbody>
                      <tr>
                        <td>
                          <button type="button" id="allPowerUps">
                            Select all
                          </button>
                        </td>
                        <td>
                          <button type="button" id="noPowerUps">
                            Select none
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <br>
                  <table class="tbl compact">
                    <tbody>
                      <tr>
                        <td><input type="checkbox" id="quickChargeSpark" name="quickChargeSpark" value="quickChargeSpark"></td>
                        <td><label for="quickChargeSpark">Spin All Speed Up</label></td>
                        <td><input type="checkbox" id="timeBlockSpark" name="timeBlockSpark" value="timeBlockSpark"></td>
                        <td><label for="timeBlockSpark">Extra Time</label></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" id="blastModeSpark" name="blastModeSpark" value="blastModeSpark"></td>
                        <td><label for="blastModeSpark">Blast Mode</label></td>
                        <td><input type="checkbox" id="visionSpark" name="visionSpark" value="visionSpark"></td>
                        <td><label for="visionSpark">Slingo Vision</label></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" id="coolJokerSpark" name="coolJokerSpark" value="coolJokerSpark"></td>
                        <td><label for="coolJokerSpark">Tex Joker</label></td>
                        <td><input type="checkbox" id="reelDevilSpark" name="reelDevilSpark" value="reelDevilSpark"></td>
                        <td><label for="reelDevilSpark">Devil Protection</label></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" id="multBlockSpark" name="multBlockSpark" value="multBlockSpark"></td>
                        <td><label for="multBlockSpark">Multiplier</label></td>
                        <td><input type="checkbox" id="newVBlockSpark" name="newVBlockSpark" value="newVBlockSpark"></td>
                        <td><label for="newVBlockSpark">Rocket Box</label></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" id="midasTouchSpark" name="midasTouchSpark" value="midasTouchSpark"></td>
                        <td><label for="midasTouchSpark">Cherub Cash</label></td>
                        <td><input type="checkbox" id="autoSpinSpark" name="autoSpinSpark" value="autoSpinSpark"></td>
                        <td><label for="autoSpinSpark">Auto Spin</label></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" id="powerBlastBlockSpark" name="powerBlastBlockSpark" value="powerBlastBlockSpark"></td>
                        <td><label for="powerBlastBlockSpark">Boom Box</label></td>
                        <td><input type="checkbox" id="autoMatchSpark" name="autoMatchSpark" value="autoMatchSpark"></td>
                        <td><label for="autoMatchSpark">Auto Match</label></td>
                      </tr>
                      <tr>
                        <td><input type="checkbox" id="redJokerSpark" name="redJokerSpark" value="redJokerSpark"></td>
                        <td><label for="redJokerSpark">Bonus Jokers</label></td>
                        <td><input type="checkbox" id="cellPowerupsSpark" name="cellPowerupsSpark" value="cellPowerupsSpark"></td>
                        <td><label for="cellPowerupsSpark">Pistolero Jokers</label></td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>
    </div>
  </body>
</html>