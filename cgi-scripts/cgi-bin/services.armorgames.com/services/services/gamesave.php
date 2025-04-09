<?php
$PREMIUM_ENABLED = false;

session_name('agi_session');
session_start();

require dirname(__DIR__) . '/vo/GameSaveVO.php';

class GameSave {

    public function get($uid, $name="") {
        $gameId = $_SESSION['gameId'];
        $uid = basename($uid);
        $name = basename($name);
        $path = "gamesave/{$gameId}/{$uid}/{$name}";
        $file = dirname(__DIR__) . '/' . $path;
        if ($name === "") {
            $folder = $file;
        } else {
            $folder = dirname($file);
        }

        if (!is_dir($folder)) {
            mkdir($folder, 0777, true);
        }

        $save = new GameSaveVO();
        $save->isOk = true;
        $save->status = "Getting from {$path}";
            # code...
        }
        if ($name === "") {
            if ($PREMIUM_ENABLED) {
                $save->value = array("PremiumEnabled" => "2");
            }
            foreach (glob($folder . "/*") as $filename) {
                $save->value[basename($filename)] = file_get_contents($filename);
            }
        } else {
            if ($PREMIUM_ENABLED and $name == "PremiumEnabled") {
                $save->value = "2";
            } else {
                try {
                    $content = file_get_contents($file);
                    if ($content === false) {
                        $save->value = '';
                    } else {
                        $save->value = $content;
                    }
                } catch (Exception $e) {
                    $save->value = '';
                }
            }
        }

        return $save;
    }

    public function put($uid, $name, $data) {
        $gameId = $_SESSION['gameId'];
        $uid = basename($uid);
        $name = basename($name);
        $path = "gamesave/{$gameId}/{$uid}/{$name}";
        $file = dirname(__DIR__) . '/' . $path;
        $folder = dirname($file);

        if (!is_dir($folder)) {
            mkdir($folder, 0777, true);
        }
        file_put_contents($file, $data);

        $save = new GameSaveVO();
        $save->isOk = true;
        $save->status = "Put {$path}";
        $save->value = null;
        return $save;
    }
}
