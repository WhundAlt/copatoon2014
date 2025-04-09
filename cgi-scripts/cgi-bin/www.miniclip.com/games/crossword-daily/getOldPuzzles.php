<?php
    function yjdtodate($jd, $year) {
        return date("Y-m-d", date_timestamp_get(date_create_from_format('Y.z', $year . "." . $jd)));
    }
    
    for ($i = 0; $i < 357; $i++)
    {
        echo "&puzzle" . strval($i) . "=" . strval($i);
        echo "&date" . strval($i) . "=" . yjdtodate($i, 2020);
    }
?>
