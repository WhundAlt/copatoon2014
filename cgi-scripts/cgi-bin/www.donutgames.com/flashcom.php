<?php
    // Highscore data is stored in csv files and pushed in a format of 14 chars for name and 10 for score and are each separated by 8 spaces. Empty data is filled in with spaces.
    // Example: "highscoresname1234567890        highscoresname1234567890"
    
    $timed = array('001');
    
    function get_scores($id) {
        $raw = array();
        $table = array();
        $vals = array();
        $file = fopen('highscores/' . $id . '.csv', 'r');
        if ($file !== false) {
            try {
                while (($data = fgetcsv($file)) !== false) {
                    if (count($data) == 2) {
                        $raw[] = substr(str_pad($data[0], 14), 0, 14) . substr(str_pad($data[1], 10), 0, 10);
                        $table[] = $data[0] . ',' . $data[1];
                        $vals[] = $data[1];
                    }
                }
            } finally {
                fclose($file);
            }
        }
        
        $raw = array_pad($raw, 100, '                       0');
        return array($raw, $table, $vals);
    }
    
    switch ($_POST['action']) {
        case 'get':
            $scores = get_scores($_POST['game']);
            $type = 0;
            if (in_array($_POST['game'], $timed)) {
                $type = 1;
            }
            echo 'data=' . implode('        ', $scores[0]) . '&highscoreType=' . $type . '&game=' . $_POST['game'];
            break;
        case 'post':
            if (!file_exists('highscores')) {
                mkdir('highscores');
            } else if (!is_dir('highscores')) {
                unlink('highscores');
                mkdir('highscores');
            }
            
            $scores = get_scores($_POST['game']);
            if (count($scores[1]) == 0) {
                $scores[0][0] = str_pad($_POST['name'], 14) . str_pad($_POST['score'], 10);
                $scores[1] = array($_POST['name'] . ',' . $_POST['score']);
            } else {
                $broken = false;
                foreach ($scores[2] as $key => $score) {
                    if ($_POST['score'] > $score) {
                        array_splice($scores[0], $key, 0, str_pad($_POST['name'], 14) . str_pad($_POST['score'], 10));
                        array_splice($scores[1], $key, 0, $_POST['name'] . ',' . $_POST['score']);
                        $broken = true;
                        break;
                    }
                }
                if ($broken === false) {
                    array_splice($scores[0], -1, 0, str_pad($_POST['name'], 14) . str_pad($_POST['score'], 10));
                    array_push($scores[1], $_POST['name'] . ',' . $_POST['score']);
                }
            }
            file_put_contents('highscores/' . $_POST['game'] . '.csv', implode("\n", $scores[1]));
            echo 'game=' . $_POST['game'];
            break;
    }
?>