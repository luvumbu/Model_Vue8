<?php

 



include("link.php") ; 
//echo $myJSON;
 

 

$liste_projet_id = $_SESSION["liste_projet_id"] ;

$PHP_SELF =  $_SERVER['PHP_SELF'];
 

$PHP_SELF_strrev= strrev($_SERVER['PHP_SELF']); 

 

$PHP_SELF_strrev_info ="" ;

for($i= 0 ; $i<strlen( $PHP_SELF);$i++){
   // echo  $PHP_SELF_strrev[$i].'<br/>';
    if($PHP_SELF_strrev[$i]=="/"){
        break ; 
    }
    else {
        $PHP_SELF_strrev_info = $PHP_SELF_strrev_info.$PHP_SELF_strrev[$i] ; 
        
    }
}


$PHP_SELF_strrev_info = strrev($PHP_SELF_strrev_info ); 

$apple = new Select_datas($servername,$username,$password,$dbname);

array_push(
  $apple->row,

  'liste_projet_id',
  'liste_projet_id_sha1',
  'liste_projet_id_sha1_general',
  'liste_projet_ip',
  'liste_projet_img',
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

  $id_information_user_id_sha1 =$_SESSION["information_user_id_sha1"] ; 

  
$apple->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_sha1_general`="'.$liste_projet_id.'"';
$apple->execution();
$myJSON = json_encode($apple->list_row); 












$apple = new Select_datas($servername,$username,$password,$dbname);

array_push(
  $apple->row,

  'liste_projet_child_id',
  'liste_projet_child_sha1',
  'liste_projet_child_ip',
  'liste_projet_liste_img',
  'liste_projet_child_name',
  'liste_projet_child_description1',   
  'liste_projet_child_description2',   
  'liste_projet_child_visibilite1',   
  'liste_projet_child_visibilite2',   
  'liste_projet_child_information_user_id_sha1',   
  'liste_projet_child_liste_projet_id_sha1',   
  'liste_projet_child_new_file',
  'liste_projet_child_reg_date'  
  );

  $id_information_user_id_sha1 =$_SESSION["information_user_id_sha1"] ; 

  
$apple->sql='SELECT * FROM `liste_projet_child` WHERE `liste_projet_child_liste_projet_id_sha1`="'.$PHP_SELF_strrev_info.'"';
$apple->execution();
$myJSON2 = json_encode($apple->list_row); 



echo '[';
echo $myJSON;

echo "," ; 
echo $myJSON2;

echo ']';





?>
 