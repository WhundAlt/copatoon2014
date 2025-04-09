<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Slingo Advantage</title>
        <script type="text/javascript">
            var paused = false;

            function __send_value(name, value) {
                var movie = document.getElementById("game");
                movie.slingoSetVar(name, value);
            }

            function __overlay_visibility(visible) {
                var gameOverlay = document.getElementById("gameOverlay");
                gameOverlay.style.visibility = (visible) ? "visible" : "hidden";
            }

            function __button_enabled(btnID, enabled) {
                var btn = document.getElementById(btnID);
                btn.disabled = !enabled;
            }

            function __button_rename(btnID, newName) {
                var btn = document.getElementById(btnID);
                btn.innerHTML = newName;
            }

            function __powerups_iterate(func) {
                var ids = ["DevilProtection", "SlingoVision", "BounceSlingos", "Nudge", "ExtraJokers", "AllFreeSpins", "Multipliers", "ExtraSuperJokers"];

                ids.forEach(func);
            }

            function __powerups_set_all(checked) {
                __powerups_iterate(function (val, idx, arr) {
                    var checkBox = document.getElementById(val);
                    checkBox.checked = checked;
                });
            }

            function startGame() {
                __button_enabled("startBtn", false);
                __button_enabled("pauseBtn", true);

                __overlay_visibility(false);

                setPowerUpsToSWF();
                __send_value("start_game", "1");
            }

            function resetGame() {
                var pwr = getPowerUpsFromForm();
                var url = "main.php";

                if (pwr.length > 0)
                    url += "?pwr=" + pwr.join(",");

                window.location.replace(url);
            }

            function pauseGame() {
                paused = !paused;

                if (paused) {
                    __send_value("pause_game", "1");
                    __button_rename("pauseBtn", "Resume game!");
                    __overlay_visibility(true);
                } else {
                    __send_value("pause_game", "0");
                    __button_rename("pauseBtn", "Pause game!")
                    __overlay_visibility(false);
                }
            }

            function getPowerUpsFromForm() {
                var pwr = [];

                __powerups_iterate(function (val, idx, arr) {
                    var checkBox = document.getElementById(val);
                    if (checkBox.checked)
                        pwr.push(val);
                });

                return pwr;
            }

            function setPowerUpsToSWF() {
                var powerUps = getPowerUpsFromForm();

                powerUps.forEach(function (val, idx) {
                    powerUps[idx] = "Pwr" + val;
                });

                __send_value("init_sparks", powerUps.join(","));
            }

            function powerUpsChanged() {
                __button_enabled("startBtn", false);
            }

            function selectAllPowerUps() {
                __powerups_set_all(true);
            }

            function selectNoPowerUps() {
                __powerups_set_all(false);
            }

            document.addEventListener("DOMContentLoaded", function() {
                var btnBindings = {
                    "startBtn": startGame,
                    "pauseBtn": pauseGame,
                    "resetBtn": resetGame,
                    "selAllBtn": selectAllPowerUps,
                    "selNoneBtn": selectNoPowerUps
                };

                var checkBindings = {
                    "DevilProtection": powerUpsChanged,
                    "SlingoVision": powerUpsChanged,
                    "BounceSlingos": powerUpsChanged,
                    "Nudge": powerUpsChanged,
                    "ExtraJokers": powerUpsChanged,
                    "AllFreeSpins": powerUpsChanged,
                    "Multipliers": powerUpsChanged,
                    "ExtraSuperJokers": powerUpsChanged
                }

                for (var prop in btnBindings) {
                    if (btnBindings.hasOwnProperty(prop)) {
                        var elem = document.getElementById(prop);
                        elem.addEventListener("click", btnBindings[prop]);
                    }
                }

                for (var prop in checkBindings) {
                    if (checkBindings.hasOwnProperty(prop)) {
                        var elem = document.getElementById(prop);
                        elem.addEventListener("change", checkBindings[prop]);
                    }
                }

                var powerUps = <?php
                    if ($_GET['pwr'])
                        echo "\"" . $_GET['pwr'] . "\"";
                    else
                        echo "false";
                ?>;

                if (powerUps) {
                    powerUps = powerUps.split(",");
                    powerUps.forEach(function (val) {
                        var checkBox = document.getElementById(val);
                        checkBox.checked = true;
                    });
                }

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
                height: 450px;
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
                height: 450px;
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

            #gamePowerUps td.pwrImg {
                background-color: white;
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
                        <object id="game" type="application/x-shockwave-flash" data="main.swf" width="500" height="450">
                            <param name="wmode" value="transparent">
                            <param name="flashvars" value="_host=web02.slingo.com:12000&amp;_rsid=1556413807&amp;working_url=http://classic.slingo.com/cachebust01584732994/sgs/games/slingoadvantage/&amp;com.slingo.flash.platform.adapter=/cachebust1501506200/sgs/platform/platform_adapter.swf&amp;asset_domain=http://classic.slingo.com&amp;asset_path=/cachebust01584732994/sgs/games/slingoadvantage/&amp;com.slingo.flash.game.assetpath=http://classic.slingo.com/cachebust01584732994/sgs/games/slingoadvantage/&amp;com.slingo.flash.platform.onReady=js_gameCommReady">
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
                                <td>
                                    <button type="button" id="startBtn">
                                        Start game!
                                    </button>
                                </td>
                                <td>
                                    <button type="button" id="pauseBtn" disabled="disabled">
                                        Pause game!
                                    </button>
                                </td>
                                <td>
                                    <button type="button" id="resetBtn">
                                        Restart game!
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <table id="gamePowerUps" class="tbl">
                        <tbody>
                            <tr>
                                <td colspan="3">
                                    <button type="button" id="selAllBtn">
                                        Select all
                                    </button>
                                    &nbsp;&nbsp;&nbsp;
                                    <button type="button" id="selNoneBtn">
                                        Select none
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="pwrImg">
                                    <img src="/images/common/powerup_devil_protection.gif">
                                </td>
                                <td>
                                    <input type="checkbox" id="DevilProtection" name="DevilProtection">
                                    <label for="DevilProtection">Devil Protection</label>
                                </td>
                                <td>
                                    When the Slingo Devil shows up in your spin he can steal half your points. Use Devil Protection and play without any Devils to steal your points.
                                </td>
                            </tr>
                            <tr>
                                <td class="pwrImg">
                                    <img src="/images/common/powerup_slingo_vision.gif">
                                </td>
                                <td>
                                    <input type="checkbox" id="SlingoVision" name="SlingoVision">
                                    <label for="SlingoVision">Slingo Vision</label>
                                </td>
                                <td>
                                    Use Slingo Vision to get ahead of your Slingo friends. With Slingo Vision, matching numbers are revealed with each spin letting you accelerate through games and boost your scores.
                                </td>
                            </tr>
                            <tr>
                                <td class="pwrImg">
                                    <img src="/images/common/powerup_bouncing_slingos.gif">
                                </td>
                                <td>
                                    <input type="checkbox" id="BounceSlingos" name="BounceSlingos">
                                    <label for="BounceSlingos">Bounce Slingos</label>
                                </td>
                                <td>
                                    Use the Bounce Slingos powerup to supercharge your Slingo game scores. Slingos will "bounce" off the edges of the matrix, giving you 12 more opportunities to score.
                                </td>
                            </tr>
                            <tr>
                                <td class="pwrImg">
                                    <img src="/images/common/powerup_nudge.gif">
                                </td>
                                <td>
                                    <input type="checkbox" id="Nudge" name="Nudge">
                                    <label for="Nudge">Reel Nudge</label>
                                </td>
                                <td>
                                    Tired of Slingo spins that result in no matches whatsoever? The Reel Nudge powerup will take effect the first time in each game that this happens and bounce the reels to new random positions. It's like a free extra spin in return for a bad spin. (Max. one per game).
                                </td>
                            </tr>
                            <tr>
                                <td class="pwrImg">
                                    <img src="/images/common/powerup_extra_jokers.gif">
                                </td>
                                <td>
                                    <input type="checkbox" id="ExtraJokers" name="ExtraJokers">
                                    <label for="ExtraJokers">Extra Jokers</label>
                                </td>
                                <td>
                                    The Extra Jokers powerup is exactly what it sounds like. More chances to spin up a Joker in each Singo Reel.
                                </td>
                            </tr>
                            <tr>
                                <td class="pwrImg">
                                    <img src="/images/common/powerup_all_spins_free.gif">
                                </td>
                                <td>
                                    <input type="checkbox" id="AllFreeSpins" name="AllFreeSpins">
                                    <label for="AllFreeSpins">All Spins Free</label>
                                </td>
                                <td>
                                    Don't use your points to get those last four spins. Turn on the All Spins Free powerup and get the last four spins without giving up your points.
                                </td>
                            </tr>
                            <tr>
                                <td class="pwrImg">
                                    <img src="/images/common/powerup_multipliers.gif">
                                </td>
                                <td>
                                    <input type="checkbox" id="Multipliers" name="Multipliers">
                                    <label for="Multipliers">Multipliers</label>
                                </td>
                                <td>
                                    Get a chance at being super-lucky on any Slingo spin with the Multipliers powerup. Spin up a x2, x3 or even a x5 symbol that will multiply all of your points during that spin. The Multipliers powerup is your ticket to high-scores!!!
                                </td>
                            </tr>
                            <tr>
                                <td class="pwrImg">
                                    <img src="/images/common/powerup_extra_super_jokers.gif">
                                </td>
                                <td>
                                    <input type="checkbox" id="ExtraSuperJokers" name="ExtraSuperJokers">
                                    <label for="ExtraSuperJokers">Extra Super Jokers</label>
                                </td>
                                <td>
                                    The Extra Super Jokers powerup changes some of your regular jokers into Super Jokers for a super-good chance at a full card in every game.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>