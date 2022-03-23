<?php
global $mod_strings,$app_strings;

if (ACLController::checkAccess('job_queue', 'list', true)) {
    $module_menu[]=array("index.php?module=job_queue&action=index", $mod_strings['LINK_SCHEDULERSJOBS_LIST'],"List");
}
