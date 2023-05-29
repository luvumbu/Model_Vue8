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
 

$apple = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple->row,

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
 
    $id_information_user_sha1 =$_SESSION["information_user_id_sha1"] ; 

    
  $apple->sql='SELECT * FROM `liste_projet` WHERE `information_user_id_sha1`="'.$id_information_user_sha1.'"  ORDER BY `liste_projet_id`';
  $apple->execution();
  $myJSON = json_encode($apple->list_row); 


 

  if(count($apple->list_row)>1){
    $apple->all_data_json() ; 

  }
  else{
    echo "[404]";
  }


 

 
 
 



 
  
 

 ?>

 
  
 