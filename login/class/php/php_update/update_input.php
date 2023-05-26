<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
include("link.php") ; 

$_this_value = $_POST["_this_value"] ;
$_this_title = $_POST["_this_title"] ; 
 
$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("up ok") ;  
      $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_description1` = "'.$_this_value.'" WHERE  `liste_projet_id_sha1` = "'.$_this_title.'"') ; 
      $apple->execution() ;
?>