<?php

function get_misc() {
    global $db;
    $query = 'SELECT * FROM misc
              ORDER BY miscid';
    $statement = $db->prepare($query);
    $statement->execute();
    $miscs = $statement->fetchAll();
    $statement->closeCursor();
    return $miscs;      
}

function get_a_misc($miscid) {
    global $db;
    $query = 'SELECT * FROM misc
              WHERE miscid = :miscid';
    $statement = $db->prepare($query);
    $statement->bindValue(":miscid", $miscid);
    $statement->execute();
    $amisc = $statement->fetch();
    $statement->closeCursor();
    return $amisc;    
}

function add_misc($miscname, $miscamount) {
    global $db;
    $query = 'INSERT INTO misc
                 (miscname, miscamount)
              VALUES
                 (:miscname, :miscamount)';
        
    $statement = $db->prepare($query);
    $statement->bindValue(':miscname', $miscname);
    $statement->bindValue(':miscamount', $miscamount);
    $statement->execute();
    $statement->closeCursor();
}

function edit_misc($miscname, $miscamount, $miscid) {
    global $db;
    
     $query = 'UPDATE misc
        SET  
        miscname = :miscname,
        miscamount = :miscamount
        WHERE miscid = :miscid';
  
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $db->prepare($query);
    $statement->bindValue(':miscname', $miscname);
    $statement->bindValue(':miscamount', $miscamount);
    $statement->bindValue(':miscid', $miscid);
    $statement->execute();
    $statement->closeCursor();
}