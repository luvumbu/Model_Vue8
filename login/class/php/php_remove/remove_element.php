<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
 
 
 
$remove_info =$_SESSION['INFO'][$_POST["remove_info"]] ; 
 
 
 
include("link.php") ; 

echo $remove_info  ; 
 
 
 

      $apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("remove ok ") ;  
      $apple->set_sql('DELETE FROM  `liste_projet_child` WHERE  `liste_projet_child_sha1` = "'.$remove_info.'"') ; 
      $apple->execution() ;




      
      $apple = new Insertion_Bdd(
            $servername,
            $username,
            $password,
            $dbname
            
            );
            $apple->set_msg_valudation("remove ok ") ;  
            $apple->set_sql('DELETE FROM  `liste_projet_child` WHERE  `liste_projet_child_liste_projet_id_sha1` = "'.$remove_info.'"') ; 
            $apple->execution() ;
      



 
 
  
?>