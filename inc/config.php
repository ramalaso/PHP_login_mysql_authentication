<?php 

if(!defined('__CONFIG__')) {
    exit('You do not have config file...');
}

//Include the DB php file
include_once "classes/DB.php";
$con = DB::getConnection();
?>