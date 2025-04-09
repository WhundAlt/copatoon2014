<?php
switch ($_GET["method"]) {
    case "xgen.stickrpg2.load":
        $file = "stickrpg2/" . urlencode($_GET["username"]) . ".txt";
        $data = file_get_contents($file);
        if ($data !== False) {
            $data = explode(",", $data);
        }
        if ($data === False or count($data) != 4) {
            $data = array("", "", "", "");
        }
        $response = '<?xml version="1.0" encoding="utf-8" ?><rsp stat="ok"><saveGames>';
        foreach ($data as $index => $save) {
            if (!empty($save)) {
                $response .= '<slot id="' . $index . '"><data>' . $save . '</data></slot>';
            }
        }
        $response .= '</saveGames></rsp>';
        echo $response;
        break;
    case "xgen.stickrpg2.save":
        $game = "stickrpg2";
        if (!file_exists($game)) {
            mkdir($game);
        } else if (!is_dir($game)) {
            unlink($game);
            mkdir($game);
        }
        $file = $game . "/" . urlencode($_GET["username"]) . ".txt";
        $data = file_get_contents($file);
        if ($data !== False) {
            $data = explode(",", $data);
        }
        if ($data === False || count($data) != 4) {
            $data = array("", "", "", "");
        }
        $data[$_GET["slot_id"]] = $_POST["data"];
        file_put_contents($file, implode(",", $data));
        echo '<?xml version="1.0" encoding="utf-8" ?><rsp stat="ok" />';
        break;
    case "xgen.users.items.list":
        break;
        echo '<?xml version="1.0" encoding="utf-8" ?><rsp stat="ok"><items><item id="cheat0"><name>Super Speed</name><cost>100</cost><uses></uses><duration></duration></item><item id="cheat1"><name>Home Teleporter</name><cost>100</cost><uses></uses><duration></duration></item><item id="cheat2"><name>Ironium Skin</name><cost>100</cost><uses></uses><duration></duration></item><item id="cheat3"><name>John Titor</name><cost>100</cost><uses></uses><duration></duration></item><item id="cheat4"><name>Discount Shopper</name><cost>100</cost><uses></uses><duration></duration></item></items></rsp>';
        break;
    case "xgen.users.authenticate":
        $username = urlencode($_GET["username"]);
        if (empty($username)) {
            echo '<?xml version="1.0" encoding="utf-8" ?><rsp stat="fail"><err code="3" msg="Missing username" /></rsp>';
        } else {
            echo '<?xml version="1.0" encoding="utf-8" ?><rsp stat="ok"><user id="1"><username>' . $username . '</username><perms>-1</perms><points>0</points></user></rsp>';
        }
        break;
    case "xgen.users.add":
        echo '<?xml version="1.0" encoding="utf-8" ?><rsp stat="fail"><err code="4" msg="Username already exists" /></rsp>';
        break;
    default:
        break;
}
?>