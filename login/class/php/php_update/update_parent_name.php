<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
include("link.php") ; 

$child = $_POST["child"] ;
$parent = $_POST["parent"] ; 
 
$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("up ok") ;  
      $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_id_parent` = "'.$parent.'" WHERE  `liste_projet_id_sha1` = "'.$child.'"') ; 
      $apple->execution() ;
?>