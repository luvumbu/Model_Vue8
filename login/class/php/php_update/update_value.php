<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
include("link.php") ; 

$_this_value = htmlspecialchars($_POST["_this_value"]) ;
$_this_title = htmlspecialchars($_POST["_this_title"]) ; 
 
$_this_value2 ="";



$longueur=strlen($_this_value);

 

 
$people = array(
 
      "195",
      "194",
      
 
      "128",
      "153",
      "160",
      "168",
      "169",
      "170",
      "171",
      "174",
      "180",
      "185",
      "226"

);



$replace ="" ; 

for($i = 0 ; $i < strlen($_this_value) ; $i++) {
      echo $_this_value[$i] ;

      $caractere=substr($_this_value,$i,1);
   
      
 
                        if (in_array(ord($caractere), $people))
                  {
         
                        switch (ord($caractere)) {
                              case "195":
                                   $replace =  str_replace("195","",ord($caractere));
                              break;

                              case "194":
                                    
                                    $replace =  str_replace("194","»",ord($caractere));
                              break;
                              case "128":
                                   
                                    $replace =  str_replace("128","’",ord($caractere));

                              break;

                              case "153":
                                   
                                    $replace =  str_replace("153","’",ord($caractere));
                              break;
                              case "160":
                                    $replace =  str_replace("169","à",ord($caractere));
                              break;

                              case "168":
                                    $replace =  str_replace("168","è",ord($caractere));
                                    
                              break;
                              case "169":
                                    $replace =  str_replace("169","é",ord($caractere));
                              break;
                              case "170":
                                    $replace =  str_replace("170","ê",ord($caractere));

                                         
                              break;
                              case "171":
                                    $replace =  str_replace("171","«",ord($caractere));         
                              break;
                              case "174":
                                    $replace =  str_replace("174","î",ord($caractere));         
                                                            
                              break;
                              case "180":
                                    $replace =  str_replace("180","ô",ord($caractere));         
                                                                  
                              break;
                              case "185":
                                    $replace =  str_replace("185","ù",ord($caractere));                                      
                                                                        
                              break;
                              case "226":
                                    $replace =  str_replace("226","’",ord($caractere));                                        
                              break;

                                
 
                         
                            }

                          


 

                  
                 
                        $_this_value2 = $_this_value2.$replace;


                        //ord($caractere)

                  }
                  else{
                       
                     

             if(ord($caractere)>30 && ord($caractere)<127 ){
                        $_this_value2 = $_this_value2.$_this_value[$i] ;
                     }
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
?>