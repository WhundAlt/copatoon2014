<?php
   $l = $args['l'];
   $r = $args['r'];
   ?>
<div id="diff-container"></div>
<script type="text/javascript" src="diffview.js"></script>
<script type="text/javascript" src="difflib.js"></script>
<script>
(function() {
    "use strict";
    window.wa = {
        l: <?php print json_encode($args['l']['as3_code']); ?>,
        r: <?php print json_encode($args['r']['as3_code']); ?>
    };

    document.addEventListener("DOMContentLoaded", function(event) {
        var out = document.getElementById('diff-container');
        var lt = difflib.stringAsLines(wa.l);
        var rt = difflib.stringAsLines(wa.r);
        var sm = new difflib.SequenceMatcher(lt, rt);
        var opcodes = sm.get_opcodes();

        out.appendChild(diffview.buildView({
            baseTextLines: lt,
            newTextLines: rt,
            opcodes: opcodes,
            baseTextName: <?php print json_encode($l['user_name'] . "'s " .  $l['title']); ?>,
            newTextName: <?php print json_encode($r['user_name'] . "'s " .  $r['title']); ?>,
            viewType: "sidebyside"
        }));
    });
})();
</script>
