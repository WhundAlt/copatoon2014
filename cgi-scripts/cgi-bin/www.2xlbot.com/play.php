<?php
    $title = (isset($_GET['game'])) ? $_GET['game'] : "";
    $tiger = (isset($_GET['tiger'])) ? $_GET['tiger'] : "";
?>

<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $title . " for 2-XL The Talking Robot"; ?></title>
    </head>
    <body style="margin: 5px;">
        <embed wmode="transparent" style="margin-right: 10px; float: left;" src="<?php echo "manual/2xlbot.swf?t=" . $title . ((empty($tiger)) ? "" : "&tiger=1"); ?>" width="365" height="450" />
        <div>
            <b>Click 2-XL's buttons!</b><br />
            Or Use Keyboard:<br />
            Button Select: <b>Z/X/C/V</b><br />
            Toggle Power: <b>Space</b><br />
            Volume: <b>Left/Right</b><br />
            Fast Forward/Rewind: <b>Up/Down</b><br />
            <?php
                $files = glob('./manual/' . $title . '/index.html');
                if (isset($files) && $files != false && count($files) > 0)
                    echo "<a target=\"_new\" href=\"manual/" . $title  . "/\">Manual</a>";
                echo "<br />";
            ?>
            <br />
            <img width="199px" src="<?php echo "manual/" . $title . "/cover.png"; ?>" /><br />
            <?php
                if (!empty($tiger))
                    echo "<img width=\"199px\" src=\"2xl.png\" /><br />";
            ?>
        </div>
    </body>
</html>
