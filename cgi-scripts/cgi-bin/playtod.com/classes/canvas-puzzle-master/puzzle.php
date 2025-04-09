



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <title>J3 Puzzle</title>
    <script type="text/javascript" src="js/bin/flashcanvas.js"></script>
    <link rel="stylesheet" href="css/modal.css" type="text/css" charset="utf-8" />
    <link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8" />
    <link rel="stylesheet" href="css/buttons.css" type="text/css" charset="utf-8" />
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>

<!-- JIGSAW CANVAS -->
<div id="canvas-wrap">
    <canvas id="canvas"></canvas>
    <canvas class="hide" id="image"></canvas>
    <canvas class="hide" id="image-preview"></canvas>
</div>

<!-- GAME OPTIONS -->
<div id="game-options">
<ul>
    <li><b id="clock" class="button">00:00:00</b></li>
    <li><a href="#" id="JIGSAW_SHUFFLE" class="button" title="Shuffle">Shuffle</a></li>
    <li><a href="#" id="SHOW_PREVIEW" class="button" title="Preview">Preview</a></li>
    <li><a href="#" id="SHOW_HELP" class="button help" title="Help">Help</a></li>    
    <li>
        <div class="styled-select">
            <select id="set-parts" selected-index="8">
            </select>
        </div>
    </li>
    <!-- Insert custom buttons here -->
    <li id="create"></li>
</ul>
<br class="clear"/>
</div>

<!-- MODAL WINDOW -->
<div class="hide" id="overlay"></div>
<div id="modal-window" class="hide">
    <div id="modal-window-msg"></div>
    <a href="#" id="modal-window-close" class="button">OK</a>
</div>

<!-- CONGRATULATION -->
<div id="congrat" class="hide">
    <h1>Congratulations!</h1>
    <h2>You Did It!</h2>
    <h3><span id="time"></span></h3>
</div>

<!-- CREATE PUZZLE -->
<div class="hide" id="create-puzzle">
    <h1>Elija una imagen</h1>
    <form id="image-form" id="add-image-form">
        <input type="file" id="image-input">
        <p id="image-error">Esto no es una imagen valida</p>
        <p id="dnd"><i>O arrastre una desde su dispositivo</i></p>
    </form>
</div>

<!-- HELP -->
<div id="help" class="hide">
    <h2>How to play</h2>
    <ul>
        <li>Change the number of pieces with the selector on the top
            <small>(approximate number)</small>.<br/>
            <img src="images/selector.png"/>
        </li>
        
        <li>Use left/right arrows, or right click to rotate a piece.</li>

        <li>Toggle between edge or middle pieces:<br>
            <img src="images/toggle.png"/>
        </li>
    </ul>
    
    <h3>Good luck.</h3>
</div>

<form class="hide" method="post" id="redirect-form">
    <input type="text" name="time" id="t" />
    <input type="text" name="parts" id="p" />
</form>
<iframe class="hide" src="about:blank" id="save-score" name="save-score"></iframe>
<!-- SCRIPTS ROMPECABEZAS -->
<script src="js/event-emiter.min.js"></script>
<script src="js/canvas-event.min.js"></script>
<script src="js/canvas-puzzle.min.js"></script>
<!--[if lt IE 9]><script type="text/javascript" src="js/canvas-puzzle.ie.min.js"></script><![endif]-->
<script>
;(function() {
var jsaw = new jigsaw.Jigsaw({
        defaultImage: <?php
        $image_name = $_GET['image'];
        if (substr($image_name, 0, 7 ) === 'http://') {
            echo '"' . $image_name . '"';
        } else {
            echo '"http://playtod.com' . $image_name . '"';
        }
        ?>,
        piecesNumberTmpl: "%d Pieces",
        shuffled: true,
        maxwidth: 1000,
        maxheight: 800,
        rotatePieces: false
    });
// this is just an example
}());
</script>
</body>
</html>