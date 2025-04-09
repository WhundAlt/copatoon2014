<?php
    $castVote = $_GET['vote'];
    
    if (!$castVote)
        return;
    
    $db = new SQLite3("poll.db");
    
    $stm = $db->prepare("UPDATE poll2008 SET votes = votes + 1 WHERE name = ?");
    $stm->bindParam(1, $castVote);
    
    $stm->execute();
?>