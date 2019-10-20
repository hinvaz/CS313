<?php

function get_needle() {
    global $db;
    $query = 'SELECT * FROM needle
              ORDER BY needleid';
    $statement = $db->prepare($query);
    $statement->execute();
    $needles = $statement->fetchAll();
    $statement->closeCursor();
    return $needles;       
}

function get_a_needle($needleid) {
    global $db;
    $query = 'SELECT * FROM needle
              WHERE needleid = :needleid';
    $statement = $db->prepare($query);
        $statement->bindValue(":needleid", $needleid);
    $statement->execute();
    $aneedle = $statement->fetch();
    $statement->closeCursor();
    return $aneedle;    
}

function add_needle($needlebrand, $needlesize, $needleamount, $needletype) {
    global $db;
    $query = 'INSERT INTO needle
                 (needlebrand, needlesize, needleamount, needletype)
              VALUES
                 (:needlebrand, :needlesize, :needleamount, :needletype)';
        
    $statement = $db->prepare($query);
    $statement->bindValue(':needlebrand', $needlebrand);
    $statement->bindValue(':needlesize', $needlesize);
    $statement->bindValue(':needleamount', $needleamount);
    $statement->bindValue(':needletype', $needletype);
    $statement->execute();
    $statement->closeCursor();
}

function edit_needle($needlebrand, $needlesize, $needleamount, $needletype, $needleid) {
    global $db;
    
     $query = 'UPDATE needle
        SET  
        needlebrand = :needlebrand,
        needlesize = :needlesize,
        needleamount = :needleamount,
        needletype = :needletype
        WHERE needleid = :needleid';
  
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $db->prepare($query);
    $statement->bindValue(':needlebrand', $needlebrand);
    $statement->bindValue(':needlesize', $needlesize);
    $statement->bindValue(':needleamount', $needleamount);
    $statement->bindValue(':needletype', $needletype);
    $statement->bindValue(':needleid', $needleid);
    $statement->execute();
    $statement->closeCursor();
}