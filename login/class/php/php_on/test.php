<?php 

 session_start() ; 
 header("Access-Control-Allow-Origin: *");

include("link.php") ;  


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
  $a=array();

 
 

for($i = 0 ; $i<count($apple->list_row) ; $i++){
 
  array_push($a,$apple->list_row[$i]);
}

 echo "[" ; 
 echo "{" ; 
for($i = 0 ; $i<count($a) ; $i++){
  echo '"'.$apple->row[fmod($i, count($apple->row))].'"' ; 
  echo ':';
  echo '"'.$a[$i].'"'  ; 
  if($i!=count($a)-1){
    echo "," ;
      }

if(fmod($i, count($apple->row))==count($apple->row)-1)
{

if(count($apple->row)!=$i){
    if($i==count($a)-1){
 echo "}" ;
   }
   else {
 
  echo '"":""';
 echo "}" ;
 echo ",";
 echo "{" ; 

   }
}
else {
 
 
 

   
//  echo ",";
  //echo "{" ; 
}

}
} 
echo "]" ; 


 ?>

 
  
 