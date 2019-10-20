<?php

function get_project() {
    global $db;
    $query = 'SELECT * FROM project';
    $statement = $db->prepare($query);
    $statement->execute();
    $projects = $statement->fetchAll();
    $statement->closeCursor();
    return $projects;   
}

function get_project_view() {
    global $db;
    $query = 'SELECT * FROM project p
            INNER JOIN yarn y on p.yarnid = y.yarnid
            INNER JOIN needle n on p.needleid = n.needleid
            INNER JOIN misc m on p.miscid = m.miscid
            ORDER BY projectid ASC';    
    $statement = $db->prepare($query);
    $statement->execute();    
    $projectview = $statement->fetchAll();
    $statement->closeCursor();    
    return $projectview;
} 

function get_a_project($projectid) {
    global $db;
    $query = 'SELECT * FROM project p
            INNER JOIN yarn y on p.yarnid = y.yarnid
            INNER JOIN needle n on p.needleid = n.needleid
            INNER JOIN misc m on p.miscid = m.miscid
            WHERE projectid = :projectid';
    $statement = $db->prepare($query);
    $statement->bindValue(":projectid", $projectid);
    $statement->execute();
    $aproject = $statement->fetch();
    $statement->closeCursor();
    return $aproject;    
}

function edit_project($projectname, $projecttype, $projectstartdate, $projectid) {
    global $db;
    
     $query = 'UPDATE project
        SET  
        projectname = :projectname,
        projecttype = :projecttype,
        projectstartdate = :projectstartdate
        WHERE projectid = :projectid';
  
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $db->prepare($query);
    $statement->bindValue(':projectname', $projectname);
    $statement->bindValue(':projecttype', $projecttype);
    $statement->bindValue(':projectstartdate', $projectstartdate);
    $statement->bindValue(':projectid', $projectid);
    $statement->execute();
    $statement->closeCursor();
}

function add_project($yarnid, $needleid, $miscid, $projectname, $projectstartdate, $projecttype) {
    global $db;
    $query = 'INSERT INTO project
                 (yarnid, needleid, miscid, projectname, projectstartdate, projecttype)
              VALUES
                 (:yarnid, :needleid, :miscid, :projectname, :projectstartdate, :projecttype)';
        
    $statement = $db->prepare($query);
    $statement->bindValue(':yarnid', $yarnid);
    $statement->bindValue(':needleid', $needleid);
    $statement->bindValue(':miscid', $miscid);
    $statement->bindValue(':projectname', $projectname);
    $statement->bindValue(':projectstartdate', $projectstartdate);
    $statement->bindValue(':projecttype', $projecttype);
    $statement->execute();
    $statement->closeCursor();
}