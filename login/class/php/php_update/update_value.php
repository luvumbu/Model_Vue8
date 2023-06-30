<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
include("link.php") ; 

$_this_value = htmlspecialchars($_POST["_this_value"]) ;
$_this_title = htmlspecialchars($_POST["_this_title"]) ; 
 
$_this_value2 ="";



$longueur=strlen($_this_value);

 

 
$people = array(
 
 
 
 
 
      "10",
 
   
      "13" 


);





$replace ="" ; 

for($i = 0 ; $i < strlen($_this_value) ; $i++) {
      echo $_this_value[$i] ;

      $caractere=substr($_this_value,$i,1);
     



                  if (in_array(ord($caractere), $people))
                              {
                                    /*
                                    if(ord($caractere)>0 && ord($caractere)<256 ){
                                          //  $_this_value2 = $_this_value2.$_this_value[$i] ;
                                           $_this_value2 = $_this_value2."'".ord($caractere)."'<br/>" ;
                                         
                                      }
                                      */


                              }
                              else
                              {

                                    $_this_value2 = $_this_value2.$_this_value[$i] ;

                              }


     
}



 

  





$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("") ;  

// i correspond a input 
// t correspond a textarea
      if($_POST["_this_id"][0]=="i"){
            $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_description1` = "'.$_this_value2.'" WHERE  `liste_projet_id_sha1` = "'.$_this_title.'"') ; 
      }
      else {
            $apple->set_sql('UPDATE `liste_projet` SET `liste_projet_description2` = "'.$_this_value2.'" WHERE  `liste_projet_id_sha1` = "'.$_this_title.'"') ; 

      }
      $apple->execution() ;



      // partie admin 



      


$apple = new Insertion_Bdd(
      $servername,
      $username,
      $password,
      $dbname
      
      );
      $apple->set_msg_valudation("") ;  

// i correspond a input 
// t correspond a textarea
      if($_POST["_this_id"][0]=="i"){
            $apple->set_sql('UPDATE `liste_projet_admin` SET `liste_projet_admin_description1` = "'.$_this_value2.'" WHERE  `liste_projet_admin_id_sha1` = "'.$_this_title.'"') ; 
      }
      else {
            $apple->set_sql('UPDATE `liste_projet_admin` SET `liste_projet_admin_description2` = "'.$_this_value2.'" WHERE  `liste_projet_admin_id_sha1` = "'.$_this_title.'"') ; 

      }
      $apple->execution() ;
?>