<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
 
 
  
 
$liste_projet_cookie =$_SESSION["liste_projet_id"] ;
 
include("link.php") ; 

 
 

echo $liste_projet_cookie ; 



 


 

echo "..." ; 


$apple = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple->row,
    "liste_projet_child_id"
 

  
    );

  $apple->sql='SELECT * FROM `liste_projet_child` WHERE 1 ORDER BY `liste_projet_child_id` ';
  $apple->execution();
  $myJSON = json_encode($apple->list_row); 

 



 for($i = 0 ; $i< count($apple->list_row) ; $i ++){
      echo $apple->list_row[$i].' ...';
 }

















/*

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
            $apple->set_sql('DELETE FROM  `liste_projet_child` WHERE  `liste_projet_child_liste_projet_id_sha1` = "'.$liste_projet_cookie.'"') ; 
            $apple->execution() ;
 



       
*/





            
  
?>