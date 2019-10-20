<?php
require('../model/database.php');
require('../model/yarndb.php');
require('../model/needledb.php');
require('../model/miscdb.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_supplies';
    }
}  

switch( $action ) {
    case 'list_supplies' :
        $yarnid = filter_input(INPUT_POST, 'yarnid', 
            FILTER_VALIDATE_INT);
        $needleid = filter_input(INPUT_POST, 'needleid', FILTER_VALIDATE_INT);
        $miscid = filter_input(INPUT_POST, 'miscid', FILTER_VALIDATE_INT);
        if ($yarnid == NULL || $yarnid == FALSE || $needleid == NULL || $needleid == FALSE
                 || $miscid == NULL || $miscid == FALSE) {
            $yarnid = 1;
            $needleid = 1;
            $miscid = 1;
        }
        $yarns = get_yarn();
        $needles = get_needle();
        $miscs = get_misc();
        include('../supplies/supplieslist.php');
        break;
    case 'view_yarn' :
        $yarnid = filter_input(INPUT_POST, 'yarnid', 
            FILTER_VALIDATE_INT);   
            $yarns = get_yarn();
        
        include('../supplies/yarn_view.php');
        break;
    case 'yarn_delete' :
       $yarnid = filter_input(INPUT_POST, 'yarnid', 
            FILTER_VALIDATE_INT);
            delete_yarn($yarnid);
            header('Location: index.php?action=view_yarn');
        break;
    case 'show_add_form_yarn' :
        $yarnid = filter_input(INPUT_POST, 'yarnid', 
            FILTER_VALIDATE_INT);   
            $yarns = get_yarn();
        include('../supplies/yarn_add.php'); 
        break;
    case 'yarn_add' :
        $yarnbrand = filter_input(INPUT_POST, 'yarnbrand');
        $yarnamount = filter_input(INPUT_POST, 'yarnamount', FILTER_VALIDATE_INT);
        $yarnweight = filter_input(INPUT_POST, 'yarnweight');
        $yarncolor = filter_input(INPUT_POST, 'yarncolor');

        if ($yarnbrand == NULL || $yarnamount == NULL ||
                $yarnweight == NULL || $yarncolor == NULL) {
            echo 'Empty or invalid data input.';
        } else { 
            add_yarn($yarnbrand, $yarnamount, $yarnweight, $yarncolor);
            header('Location: index.php?action=view_yarn');
        }
        break;
    case 'show_edit_form_yarn' :
        $yarnid = filter_input(INPUT_POST, 'yarnid');   
         $ayarn = get_a_yarn($yarnid);
        include('../supplies/yarn_edit.php'); 
        break;
    case 'yarn_edit' :
        $yarnid = filter_input(INPUT_POST, 'yarnid', 
            FILTER_VALIDATE_INT);
        $yarns = get_yarn();
        $yarnbrand = filter_input(INPUT_POST, 'yarnbrand');  
        $yarnweight = filter_input(INPUT_POST, 'yarnweight');
        $yarnamount = filter_input(INPUT_POST, 'yarnamount');
        $yarncolor = filter_input(INPUT_POST, 'yarncolor');
        edit_yarn($yarnbrand, $yarnweight, $yarnamount, $yarncolor, $yarnid);
        header('Location: index.php?action=view_yarn');
        break;
    case 'view_needle' :
        $needleid = filter_input(INPUT_GET, 'needleid', 
            FILTER_VALIDATE_INT);   
        
            $needles = get_needle();
        
        include('../supplies/needle_view.php');
        break;  
    case 'show_add_form_needle' :
        $needleid = filter_input(INPUT_POST, 'needleid', 
            FILTER_VALIDATE_INT);   
            $needles = get_needle();
        include('../supplies/needle_add.php'); 
        break;
    case 'needle_add' :
        $needlebrand = filter_input(INPUT_POST, 'needlebrand');
        $needlesize = filter_input(INPUT_POST, 'needlesize', FILTER_VALIDATE_INT);
        $needleamount = filter_input(INPUT_POST, 'needleamount', FILTER_VALIDATE_INT);
        $needletype = filter_input(INPUT_POST, 'needletype');

        if ($needlebrand == NULL || $needlesize == NULL ||
                $needleamount == NULL || $needletype == NULL) {
            echo 'Empty or invalid data input.';
        } else { 
            add_needle($needlebrand, $needlesize, $needleamount, $needletype);
            header('Location: index.php?action=view_needle');
        }
        break;
    case 'show_edit_form_needle' :
        $needleid = filter_input(INPUT_POST, 'needleid');   
         $aneedle = get_a_needle($needleid);
        include('../supplies/needle_edit.php'); 
        break;
    case 'needle_edit' :
        $needleid = filter_input(INPUT_POST, 'needleid', 
            FILTER_VALIDATE_INT);
        $needlebrand = filter_input(INPUT_POST, 'needlebrand'); 
        $needlesize = filter_input(INPUT_POST, 'needlesize');  
        $needleamount = filter_input(INPUT_POST, 'needleamount');
        $needletype = filter_input(INPUT_POST, 'needletype');
        edit_needle($needlebrand, $needlesize, $needleamount, $needletype, $needleid);
        header('Location: index.php?action=view_needle');
        break;
    case 'view_misc' :
        $miscid = filter_input(INPUT_GET, 'miscid', 
            FILTER_VALIDATE_INT);   
        
            $miscs = get_misc();
        
        include('../supplies/misc_view.php');
        break;      
   case 'show_add_form_misc' :
        $miscid = filter_input(INPUT_POST, 'miscid', 
            FILTER_VALIDATE_INT);   
            $miscs = get_misc();
        include('../supplies/misc_add.php'); 
        break;
    case 'misc_add' :
        $miscid = filter_input(INPUT_POST, 'miscid');
        $miscname = filter_input(INPUT_POST, 'miscname');
        $miscamount = filter_input(INPUT_POST, 'miscamount', FILTER_VALIDATE_INT);

        if ($miscname == NULL || $miscamount == NULL) {
            echo 'Empty or invalid data input.';
        } else { 
            add_misc($miscname, $miscamount);
            header('Location: index.php?action=view_misc');
        }
        break;
    case 'show_edit_form_misc' :
        $miscid = filter_input(INPUT_POST, 'miscid');   
         $amisc = get_a_misc($miscid);
        include('../supplies/misc_edit.php'); 
        break;
    case 'misc_edit' :
        $miscid = filter_input(INPUT_POST, 'miscid', 
            FILTER_VALIDATE_INT);
        $miscname = filter_input(INPUT_POST, 'miscname'); 
        $miscamount = filter_input(INPUT_POST, 'miscamount');
        edit_misc($miscname, $miscamount, $miscid);
        header('Location: index.php?action=view_misc');
        break;
  
}

?>