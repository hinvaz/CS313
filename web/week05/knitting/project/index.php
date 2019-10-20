<?php
require('../model/database.php');
require('../model/projectdb.php');
require('../model/yarndb.php');
require('../model/needledb.php');
require('../model/miscdb.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'view_project';
    }
}  

switch( $action ) {
    /*case 'list_projects' :
        $projectid = filter_input(INPUT_GET, 'projectid', 
            FILTER_VALIDATE_INT);
        if ($projectid == NULL || $projectid == FALSE) {
        }    
        $projects = get_project();
        include('../project/projectlist.php');
        break;*/
    case 'view_project' :
        $projectid = filter_input(INPUT_GET, 'projectid');  
        $yarnid = filter_input(INPUT_GET, 'yarnid');
        $needleid = filter_input(INPUT_GET, 'needleid');
        $projectview = get_project_view();
        
        include('../project/project_view.php');
        break;
    case 'show_add_form_project' :
        $projectid = filter_input(INPUT_POST, 'projectid', 
            FILTER_VALIDATE_INT);   
        $projects = get_project();
        $needleid = filter_input(INPUT_POST, 'needleid');
        $needles = get_needle();
        $yarnid = filter_input(INPUT_POST, 'yarnid');
        $yarns = get_yarn();
        $miscid = filter_input(INPUT_POST, 'miscid', 
            FILTER_VALIDATE_INT);   
        $miscs = get_misc();
        include('../project/project_add.php'); 
        break;
    case 'project_add' :  
        $yarnid = filter_input(INPUT_POST, 'yarnid');
        $needleid = filter_input(INPUT_POST, 'needleid');
        $miscid = filter_input(INPUT_POST, 'miscid');
        $projectname = filter_input(INPUT_POST, 'projectname');
        $projectstartdate = filter_input(INPUT_POST, 'projectstartdate');
        $projecttype= filter_input(INPUT_POST, 'projecttype');

        if ($projectname == NULL || $projectstartdate == NULL ||
                $projecttype == NULL) {
            echo 'Empty or invalid data input.';
        } else { 
            add_project($yarnid, $needleid, $miscid, $projectname, $projectstartdate, $projecttype);
            header('Location: index.php?action=view_project');
        }
        break;
    case 'show_edit_form_project' :
        $projectid = filter_input(INPUT_POST, 'projectid');   
         $aproject = get_a_project($projectid);
        include('../project/project_edit.php'); 
        break;
    case 'project_edit' :
        $yarnid = filter_input(INPUT_POST, 'yarnid');   
        $aproject = get_a_project($yarnid);
        $projectname = filter_input(INPUT_POST, 'yarnbrand');  
        $projecttype = filter_input(INPUT_POST, 'yarnweight');
        $projectstartdate = filter_input(INPUT_POST, 'yarnamount');
        edit_project($projectname, $projecttype, $projectstartdate, $projectid);
        header('Location: index.php?action=view_project');
        break;
  
}

?>