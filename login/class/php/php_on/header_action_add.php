<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");

$time =  $_POST["time"] ; 

include("link.php") ; 
 
 

 
 
 
      
      $apple = new Insertion_Bdd(
        $servername,
        $username,
        $password,
        $dbname
        
        );
            
       
        $apple->set_msg_valudation("inserttion ok ") ;  
        $apple->set_sql("INSERT INTO liste_projet (liste_projet_id_sha1)
                
        VALUES ('$time')") ; 
        $apple->execution() ;




 
?> 