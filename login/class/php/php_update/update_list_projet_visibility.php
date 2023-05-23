<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
 
include("link.php") ; 

 /*

//$information_user_sha1  =$_SESSION["information_user_id_sha1"] ; 
 

 
//$liste_projet_child_sha1 = $_SESSION["liste_projet_child_sha1"] ; 
$input =$_POST["input"] ;
$table_info =$_POST["table_info"];



 echo $table_info;

 
 
      $apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("inserttion ok ") ;  
      $apple->set_sql('UPDATE  `liste_projet_child` SET `liste_projet_child_description1` = "'.$input .'" WHERE `liste_projet_child`.`liste_projet_child_sha1` = "'.$table_info.'";') ; 
      $apple->execution() ;
 */

 
 

 
 
 $liste_projet_cookie =   $_SESSION["liste_projet_cookie"]  ; 
 
$list_projet_visibility =  $_POST["list_projet_visibility"] ; 
//$list_projet_visibility = $_POST["list_projet_visibility";]




$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("inserttion ok ") ;  
      $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_visibilite1` = "'.$list_projet_visibility.'" WHERE  `liste_projet_id_sha1` = "'.$liste_projet_cookie.'"') ; 
      $apple->execution() ;
 



?>












