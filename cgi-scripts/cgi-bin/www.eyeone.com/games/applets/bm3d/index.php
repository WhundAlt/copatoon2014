<!-- codebase="/games/applets/bm3d/"  -->
<applet archive="bm3d.zip" height="40" width="400" code="Loader.class">
    <param name="domain" value="www.plutoniumsoftware.com|www.eyeone.com|www.eyeone.no">
    <param name="sound" value="<?php echo $_GET['sound']; ?>">
    <param name="music" value="<?php echo $_GET['music']; ?>">
    <param name="backClip" value="380">
    <!-- lockSize was originally set to false. However, doing so would slowly resize the game's frame until several UI elements were obscured.
    As such, it was changed to true. -->
    <param name="lockSize" value="true">
    <param name="soundtrack1" value="dasboot.mod">
    <param name="soundtrack2" value="Eye13.mod">
    <param name="soundtrack3" value="Eye1tech.mod">
    <param name="collision1" value="light_crash.au">
    <param name="collision2" value="big_crash.au">
    <param name="checkpoint" value="chkpoint.au">
    <param name="explosion" value="explosion.au">
    <param name="horn" value="horn.au">
    <param name="jump" value="jump.au">
    <param name="cop" value="siren.au">
    <param name="speedup" value="speedup.au">
    <param name="chopper" value="helicopter.au">
    <param name="flamethrower" value="flamethrower_1.au">
    <param name="pickup" value="leversml.au">
    <param name="machinegun" value="machinegun.au">
    <param name="cannon" value="canon.au">
    <param name="startWidth" value="800">
    <param name="startHeight" value="600">
    <param name="startLevel" value="1">
    <param name="colorMask" value="ff0000 3333ff 33cc00 333333">
    <param name="level1" value="Forest1">
    <param name="mintime1" value="100 40 40">
    <param name="time1" value="120 52 52">
    <param name="outside1" value="50">
    <param name="level2" value="Desert1">
    <param name="mintime2" value="80 37 37">
    <param name="time2" value="100 49 49">
    <param name="outside2" value="50">
    <param name="level3" value="City1">
    <param name="mintime3" value="70 40 40">
    <param name="time3" value="90 50 50">
    <param name="outside3" value="-5">
    <param name="layer3-1" value="City1-2">
    <param name="minFPS" value="16">
    <param name="maxFPS" value="20">
</applet>
