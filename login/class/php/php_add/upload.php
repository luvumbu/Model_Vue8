<?php

session_start() ; 

header("Access-Control-Allow-Origin: *");
 


/*

      $_SESSION["liste_projet_cookie"] = $liste_group_id_sha1  ; 
      $_SESSION["liste_projet_id"] = $liste_group_id_sha1 ; 

 */
 






if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $photo = $_FILES['photo'];
  
  
  $liste_img_information_user_id_sha1 =     $_SESSION["information_user_id_sha1"];
  
  mkdir('../../../src/img/all/'.$liste_img_information_user_id_sha1);
 
 
 $nom_img= sha1(rand(10,9999999999));
  $path ='../../../src/img/all/'.$liste_img_information_user_id_sha1.'/'.$nom_img.".jpg";
  


  $_SESSION["img_pictur"] =$liste_img_information_user_id_sha1.'/'.$nom_img.".jpg";
  move_uploaded_file($photo['tmp_name'], $path);
}





/*


















*/































include("link.php") ; 



 
 
 


$information_user_id_sha1 =    $_SESSION["information_user_id_sha1"];
$liste_projet_child_sha1 =    $_SESSION["liste_projet_child_sha1"];


 

 

//$_POST["liste_projet_child_id"] ;  


 
 


 

$liste_img_type =  $liste_img_information_user_id_sha1.'/'.$nom_img.".jpg" ;


$liste_img_type_sha1 = sha1($liste_img_type) ; 
/*

switch ($liste_img_type) {
  case "all_picture":
 

$liste_img_liste_projet_id_sha1="";
$liste_img_liste_projet_child_sha1 ="" ;  

    break;
  case "img_projet":
$liste_img_liste_projet_id_sha1= $_SESSION["liste_projet_id"] ;
$liste_img_liste_projet_child_sha1 ="" ;  
 

     
    break;
  case "img_projet_child":
 
$liste_img_liste_projet_id_sha1=$_SESSION["liste_projet_id"] ;
$liste_img_liste_projet_child_sha1= $_SESSION["liste_projet_child_id"] ;

 

    break;


    default:
    echo "Your favorite color is neither red, blue, nor green!";
 
     
}


*/


























/*


$liste_img_name = $_SESSION["img_pictur"];
 





$liste_img_id_sha1 = sha1(rand(0, 999999999999999).$information_user_sha1) ; 


$apple = new Insertion_Bdd(
 $servername,
 $username,
 $password,
 $dbname
 
 );





 

 $apple->set_msg_valudation("inserttion ok ") ;  
 $apple->set_sql("INSERT INTO liste_img (liste_img_id_sha1,liste_img_name,liste_img_type,liste_img_ip,liste_img_information_user_id_sha1,liste_img_liste_projet_id_sha1,liste_img_liste_projet_child_sha1)
 
 
 VALUES ('$liste_img_id_sha1','$liste_img_name','$liste_img_type','$liste_img_ip','$liste_img_information_user_id_sha1','$liste_img_liste_projet_id_sha1','$liste_img_liste_projet_child_sha1')") ;
 

 

 $apple->execution() ;






 







 

 
 $apple = new Insertion_Bdd(
  $servername,
  $username,
  $password,
  $dbname
  
  );
  $apple->set_msg_valudation("inserttion ok ") ;  
  $apple->set_sql('UPDATE `root`.`liste_projet_child` SET `liste_projet_liste_img` = "'.$liste_img_id_sha1.'" WHERE `liste_projet_child`.`liste_projet_child_sha1` = "'.$liste_img_liste_projet_child_sha1.'"') ; 
  $apple->execution() ;


  */

  $liste_img_ip = $_SERVER['REMOTE_ADDR'] ;


  

  $apple = new Insertion_Bdd(
    $servername,
    $username,
    $password,
    $dbname
    
    );
   
   
   
   
 
    
   
    $apple->set_msg_valudation("inserttion ok ") ;  
    $apple->set_sql("INSERT INTO liste_img (liste_img_name,liste_img_id_sha1,liste_img_type,liste_img_ip,liste_img_information_user_id_sha1)
    
    
    VALUES ('$liste_img_type','$liste_img_type_sha1','img','$liste_img_ip','$liste_img_information_user_id_sha1')") ; 
    
   
    
   
    $apple->execution() ;
   
   
    
 

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












