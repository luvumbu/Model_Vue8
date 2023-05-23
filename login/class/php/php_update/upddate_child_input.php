<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
 // child child input
include("link.php") ; 
$_this_value = $_POST["_this_value"] ;
$_this_title = "" ; 


for($i = 0 ; $i<10;$i++){
    echo $_this_title = $_this_title.$_POST["_this_title"][$i];
}
 
 
$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("inserttion ok ") ;  
      $apple->set_sql('UPDATE `liste_projet_child` SET `liste_projet_child_description1` = "'.$_this_value.'" WHERE `liste_projet_child`.`liste_projet_child_sha1` = "'.$_this_title.'"') ; 
      $apple->execution() ;
 
 
 ?>