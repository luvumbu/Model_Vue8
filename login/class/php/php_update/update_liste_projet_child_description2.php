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

 
 


$input = $_POST["input"] ; 




$_this_title =$_POST["_this_title"] ; 


echo $_SESSION['INFO'][$_this_title] ;


 
$_this_title2 =$_SESSION['INFO'][$_this_title] ; 
 






$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("inserttion ok ") ;  
      $apple->set_sql('UPDATE `liste_projet_child` SET `liste_projet_child_description2` = "'.$input.'" WHERE `liste_projet_child`.`liste_projet_child_sha1` = "'.$_this_title2.'"') ; 
      $apple->execution() ;
 
?>












