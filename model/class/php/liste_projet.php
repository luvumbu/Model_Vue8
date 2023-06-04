<?php 

 session_start() ; 
 header("Access-Control-Allow-Origin: *");


include("Select_datas.php") ;   
$REMOTE_ADDR = $_SERVER['REMOTE_ADDR'] ; 


 

 $n_projet = "" ; 


for ($i =strlen($_SERVER['PHP_SELF'])-1 ; $i>0; $i --){
 if($_SERVER['PHP_SELF'][$i]=="/"){
  break ; 
 }

 $n_projet =  $n_projet.$_SERVER['PHP_SELF'][$i] ; 

}
 



$n_projet  = strrev($n_projet);

 



 
  
 



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
 
    $apple1->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_sha1` ="'.$n_projet.'"';
    $apple1->execution();
    $myJSON = json_encode($apple1->list_row); 

    // echo   $myJSON ; 
 


echo $apple1->all_data_json() ; 
 
 


 ?>

 
  
 