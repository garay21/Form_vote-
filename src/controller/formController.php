<?php

include_once('./../model/formModel.php');

$frommodel = new FormModel();

if(isset($_GET['action'])){
    $action = $_GET['action'];
}
else {
    $action = 'index';
}

switch($action){
    case 'store':
        header("Location: /form-vot/");
        break;
}


?>
