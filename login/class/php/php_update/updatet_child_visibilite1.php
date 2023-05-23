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
$input = $_POST["updatet_child"] ; 
 

 
 
$_this_title2 =$_SESSION['INFO'][$input] ; 


//echo $_this_title2 ; 

 

$_this_value = $_POST["_this_value"] ; 


echo $_this_value ; 
for($i = 0 ; $i <1000;$i++){
    
    echo $_this_title2[$i] ;

   
 

}

$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("up ok") ;  
      $apple->set_sql('UPDATE `liste_projet_child` SET `liste_projet_child_description1` = "'.$_this_value.'" WHERE `liste_projet_child`.`liste_projet_child_sha1` = "'.$_this_title2.'"') ; 
      $apple->execution() ;
 
?>