<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
include("link.php") ; 
 
      $t = time(date_default_timezone_set('Europe/Paris')) ; 
      $tiempo = date("Y-m-d",$t);

 
 

   
     $information_user_info = $_SESSION["information_user_id_sha1"] ; 
 
 
      $apple = new Insertion_Bdd(
        $servername,
        $username,
        $password,
        $dbname
        
        );
            
       
        $apple->set_msg_valudation("inserttion ok ") ;  
        $apple->set_sql("INSERT INTO liste_group (liste_group_id_sha1,liste_group_information_user_id_sha1,liste_group_new_file)
                
        VALUES ('$t','$information_user_info','$tiempo')") ; 
        $apple->execution() ;
 
        
?>