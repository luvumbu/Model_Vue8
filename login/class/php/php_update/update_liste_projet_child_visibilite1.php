<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
 



 
$liste_projet_child_id = $_POST["liste_projet_child_id"] ; 

$liste_projet_child_visibilite1 =  $_POST["liste_projet_child_visibilite1"]; 




 
 

 
 



 echo $table_info  ; 
include("link.php") ; 

 
 

      $apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("inserttion ok ") ;  
      $apple->set_sql('UPDATE  `liste_projet_child` SET `liste_projet_child_description1` = "'.$liste_projet_child_visibilite1.'" WHERE `liste_projet_child_sha1` = "'.$liste_projet_child_id.'"') ; 
      $apple->execution() ;
 
 
?>