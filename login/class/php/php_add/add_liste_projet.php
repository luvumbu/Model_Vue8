<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
include("link.php") ; 




 
 
 
      $t = time(date_default_timezone_set('Europe/Paris')) ; 
      $tiempo = date("Y-m-d",$t);



      $_SESSION["add_liste_projet"] = $t ; 

 
      
      $apple = new Insertion_Bdd(
        $servername,
        $username,
        $password,
        $dbname
        
        );
       
 

        
       
        $apple->set_msg_valudation("inserttion ok ") ;  
        $apple->set_sql("INSERT INTO liste_projet (liste_projet_id_sha1)
        
        
        VALUES ('$t')") ; 
     
       
        
       
        $apple->execution() ;
        
?>