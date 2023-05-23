<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
 
 
  
 
$liste_projet_cookie =$_SESSION["liste_projet_id"] ;
 
include("link.php") ; 

 
 

echo $liste_projet_cookie ; 



 


 
 


 














 
      $apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("remove ok ") ;  
      $apple->set_sql('DELETE FROM  `liste_projet` WHERE  `liste_projet_id_sha1` = "'.$liste_projet_cookie.'"') ; 
      $apple->execution() ;








      $apple = new Insertion_Bdd(
            $servername,
            $username,
            $password,
            $dbname
            
            );
            $apple->set_msg_valudation("remove ok ") ;  
            $apple->set_sql('DELETE FROM  `liste_projet_child` WHERE  `liste_projet_child_id_general` = "'.$liste_projet_cookie.'"') ; 
            $apple->execution() ;
 



       






            
  
?>