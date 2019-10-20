<?php

function get_yarn() {
    global $db;
    $query = 'SELECT * FROM yarn
              ORDER BY yarnid';
    $statement = $db->prepare($query);
    $statement->execute();
    $yarns = $statement->fetchAll();
    $statement->closeCursor();
    return $yarns;      
}

function get_a_yarn($yarnid) {
    global $db;
    $query = 'SELECT * FROM yarn
              WHERE yarnid = :yarnid';
    $statement = $db->prepare($query);
    $statement->bindValue(":yarnid", $yarnid);
    $statement->execute();
    $ayarn = $statement->fetch();
    $statement->closeCursor();
    return $ayarn;    
}

function get_yarn_by_project($yarnid) {
    global $db;
    $query = 'SELECT * FROM project
              WHERE project.yarnid = :yarnid
              ORDER BY projectid';
    $statement = $db->prepare($query);
    $statement->bindValue(":yarnid", $yarnid);
    $statement->execute();
    $yarn = $statement->fetchAll();
    $statement->closeCursor();
    return $yarn;
}

function add_yarn($yarnbrand, $yarnamount, $yarnweight, $yarncolor) {
    global $db;
    $query = 'INSERT INTO yarn
                 (yarnbrand, yarnamount, yarnweight, yarncolor)
              VALUES
                 (:yarnbrand, :yarnamount, :yarnweight, :yarncolor)';
        
    $statement = $db->prepare($query);
    $statement->bindValue(':yarnbrand', $yarnbrand);
    $statement->bindValue(':yarnamount', $yarnamount);
    $statement->bindValue(':yarnweight', $yarnweight);
    $statement->bindValue(':yarncolor', $yarncolor);
    $statement->execute();
    $statement->closeCursor();
}


function edit_yarn($yarnbrand, $yarnweight, $yarnamount, $yarncolor, $yarnid) {
    global $db;
    
     $query = 'UPDATE yarn
        SET  
        yarnbrand = :yarnbrand,
        yarnweight = :yarnweight,
        yarnamount = :yarnamount,
        yarncolor = :yarncolor
        WHERE yarnid = :yarnid';
  
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $db->prepare($query);
    $statement->bindValue(':yarnbrand', $yarnbrand);
    $statement->bindValue(':yarnweight', $yarnweight);
    $statement->bindValue(':yarnamount', $yarnamount);
    $statement->bindValue(':yarncolor', $yarncolor);
    $statement->bindValue(':yarnid', $yarnid);
    $statement->execute();
    $statement->closeCursor();
    echo "Successfully updated the yarn information";
}

function delete_yarn($yarnid) {
    global $db;
    $query = 'DELETE FROM yarn
              WHERE yarnid = :yarnid';
    $statement = $db->prepare($query);
    $statement->bindValue(':yarnid', $yarnid);
    $statement->execute();
    $statement->closeCursor();
}