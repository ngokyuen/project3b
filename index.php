<?php 
header('Content-Type: application/json; charset=utf-8');
require_once("./include/mysql_connect.inc.php");

if (isset($_POST) && isset($_POST["action"])){
    switch ($_POST["action"]) {
        case 'login':
            require_once("./include/login.php");
            break;
    }
} else
    exit("No access to site");

?>