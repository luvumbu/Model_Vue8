<?php

session_start() ; 
header("Access-Control-Allow-Origin: *");
 

echo $_SESSION['INFO_N_INFO'][$_POST["_this_title"]-1] ;
?>

