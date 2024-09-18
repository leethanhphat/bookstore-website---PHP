<?php
session_start();
require_once("db_module.php");
$link=null;
taoKetNoi($link);
if (isset($_SESSION['user_id'])) {
    session_destroy();
    giaiPhongBoNho($link,true);
    header("Location: ../login.php");
} else{    return false;}

?>