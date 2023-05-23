<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
include("link.php") ; 
 
$up_child_plus = $_POST["up_child_plus"] ; 
$_this_value = $_POST["_this_value"] ; 
 

$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("up ok") ;  
      $apple->set_sql('UPDATE `liste_projet_child` SET `liste_projet_child_description1` = "'.$_this_value.'" WHERE `liste_projet_child`.`liste_projet_child_sha1` = "'.$up_child_plus.'"') ; 
      $apple->execution() ;
 
?>