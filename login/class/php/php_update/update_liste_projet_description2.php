<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
 

 

$information_user_sha1  =$_SESSION["information_user_id_sha1"] ; 
$liste_projet_cookie =$_SESSION["liste_projet_cookie"]  ; 


$input =$_POST["input"] ;


 
include("link.php") ; 




      $apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("inserttion ok ") ;  
      $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_description2` = "'.$input.'" WHERE `liste_projet`.`liste_projet_id_sha1` = "'.$liste_projet_cookie.'"') ; 
      $apple->execution() ;
  
?>