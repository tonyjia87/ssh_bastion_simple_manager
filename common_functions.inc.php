<?php
function execCmd($cmd,&$output=NULL,&$ret_code=NULL) {
        exec($cmd,$output,$ret_code);
        return $output;
}

function whoAmI() {
        return implode("",execCmd("whoami"));
}

function onlyRoot($stop_execution = TRUE) {
$is_root = whoAmI() == "root";

if (!$is_root && $stop_execution) {
        echo "You need to be root to run this script\n";
        exit;
}

return $is_root;


}

