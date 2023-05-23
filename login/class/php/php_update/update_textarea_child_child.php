<?php

session_start() ; 
header("Access-Control-Allow-Origin: *");
 
 include("link.php");


$n = $_POST["_this_title"] ;

 

$liste_projet_child_sha1 = $_SESSION['INFO_N_INFO'][is_int($n)] ; 
$_this_value = $_POST["_this_value"];


 



$apple = new Insertion_Bdd(
    $servername,
    $username,
    $password,
    $dbname
    
    );
    $apple->set_msg_valudation("inserttion ok ") ;  
    $apple->set_sql('UPDATE `liste_projet_child` SET `liste_projet_child_description1` = "'.$_this_value.'" WHERE `liste_projet_child`.`liste_projet_child_sha1` = "'.$liste_projet_child_sha1.'"') ; 
    $apple->execution() ;


 
?>

