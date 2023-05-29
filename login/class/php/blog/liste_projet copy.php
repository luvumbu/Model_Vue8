<?php 

 session_start() ; 
 header("Access-Control-Allow-Origin: *");


include("link.php") ;   
$REMOTE_ADDR = $_SERVER['REMOTE_ADDR'] ; 

if(strlen($REMOTE_ADDR)<5){
 
  // local 

  $replace ="/Model_Vue8/login/class/php/blog/liste_projet.php/";

  $replace = str_replace($replace,"",$_SERVER['PHP_SELF']) ; 
}
 
  
 



$apple1 = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple1->row,

    'liste_projet_id',
    'liste_projet_id_sha1',
    'liste_projet_ip',
    'liste_projet_name',
    'liste_projet_description1',
    'liste_projet_description2',
    'liste_projet_visibilite1',
    'liste_projet_visibilite2',
    'liste_projet_type',
    'information_user_id_sha1',
    'liste_projet_new_file',
    'liste_projet_reg_date'  
    );
 
    $id_information_user_sha1 =$replace ;
    $apple1->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_sha1`="'.$id_information_user_sha1.'"  ORDER BY `liste_projet_id`';
    $apple1->execution();
    $myJSON = json_encode($apple1->list_row); 

    // echo   $myJSON ; 
 






 
$test = $apple1->list_row[1] ; 





    
$apple2 = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple2->row,

    'liste_projet_id',
    'liste_projet_id_sha1',
    'liste_projet_ip',
    'liste_projet_name',
    'liste_projet_description1',
    'liste_projet_description2',
    'liste_projet_visibilite1',
    'liste_projet_visibilite2',
    'liste_projet_type',
    'information_user_id_sha1',
    'liste_projet_new_file',
    'liste_projet_reg_date'  
    );
 
    $id_information_user_sha1 =$replace ;
    $apple2->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_parent`="'.$test.'"  ORDER BY `liste_projet_id`';
    $apple2->execution();
    $myJSON = json_encode($apple2->list_row); 

    // echo   $myJSON ; 


$test = $apple2->list_row[1] ; 




 











 







 
    echo "[";

    if(count($apple1->list_row)<1){
      include("404.php") ; 
}
else {
   $apple1->all_data_json() ;

}

    echo "," ; 

    if(count($apple2->list_row)<1){
          include("404.php") ; 
    }
    else {
      $apple2->all_data_json() ;

    }

    echo "]";


 ?>

 
  
 