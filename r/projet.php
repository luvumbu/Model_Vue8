<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

 


<?php 

 

 
 
 
 

 



 
  
include("model/class/php/Select_datas.php") ;  

 










   $apple2 = new Select_datas($servername,$username,$password,$dbname);

 array_push(
   $apple2->row,

   'liste_projet_description1',
   'liste_projet_img',
   'liste_projet_description2', 
   'liste_projet_reg_date',
   'liste_projet_visibilite1',
   'liste_projet_id_sha1' 
   

   );

 
   $apple2->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_parent`=""';
   $apple2->execution();
   $myJSON = json_encode($apple2->list_row); 

   // echo   $myJSON ; 







 





// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!




echo '<div class="page_t1">';
 


for($i = 0 ; $i <count($apple2->list_row) ; $i ++ ){
  // echo $apple2->list_row[$i].'<br/>' ; 
  
  // echo(fmod($i, count($apple2->row)) . "<br>");
  
   
  
   switch (fmod($i, count($apple2->row))) {
     case 0:
    
      
   
   if($apple2->list_row[$i+4]==""){
     echo '<h1>'.$apple2->list_row[$i].'</h1>' ; 
   }
  
       
  
       break;
     case 1:


  
      if($apple2->list_row[$i+3]==""){
        echo "<div><a href='vlog.php/".$apple2->list_row[$i+4]."'>Voir article</a>

        </div>" ; 
       
        if($apple2->list_row[$i]==""){
          echo '<img src="https://images.pexels.com/photos/3705944/pexels-photo-3705944.jpeg?auto=compress&cs=tinysrgb&w=300" alt="" srcset="">' ; 
   
        }
        else {
  
  
  
          if($_SERVER['SERVER_NAME']=="localhost"){
            echo '<img src="http://localhost/Model_Vue8/login/src/img/all/'.$apple2->list_row[$i].'" alt="" srcset="">' ; 
  
          }
          else {
    
  
            echo '<div>';
            echo '<img src="https://'.$_SERVER['SERVER_NAME'].'/login/src/img/all/'.$apple2->list_row[$i].'">' ; 
            echo '</div>';
            
   

          }


       
   
        }
  
  
      }
       
  
       break;
  
       case 2:
    
   
    
        
         break;
  
  
         case 3:
   
  
          if($_SERVER['SERVER_NAME']=="localhost"){
            //echo '<img src="http://localhost/Model_Vue8/login/src/img/all/'.$apple2->list_row[$i+2].'" alt="" srcset="">' ; 
  
          }
          else {
    
            //echo '<img src="https://'.$_SERVER['SERVER_NAME'].'/login/src/img/all/qr_code/'.$apple2->list_row[$i+2].'.png">' ; 
            
   
   
          }

          
  
          if($apple2->list_row[$i+1]==""){
              echo '<h3>'. $apple2->list_row[$i].'</h3>' ; 
          }
          
        

  
             break;
             
  
  
   }
  
  
  
  
  
  
  }
  
  echo '</div>';

?>


 <h4 class="voir_projet">
   
  <a href="index.php">Page d'acceuil</a>


 </h4>



<style>
  .voir_projet{
    text-align:center ; 
    margin-top:50px; 
    margin-bottom : 50px; 
  }
 .page_t1{
   text-align:center ; 
   max-width: 30%;
   margin:auto ; 
 }
 .page_t1 img{
  margin-top:50px ; 
  max-width:45%;
 }
  .page_t1 h1{
padding-top:50px;
 }
 .page_t1 h3{
color:rgba(0,0,0,0.3) ; 
margin-top:80px; 
text-align: justify;
font-size:1.2em; 
 }

 .page_t1 h4{
color:rgba(0,0,0,0.1) ; 

 }

 @media screen and (max-width: 1200px) {
   .page_t1{
   text-align:center ; 
   max-width: 90%;
   margin:auto ; 
 }
 .page_t1 img{
  margin-top:50px ; 
  max-width:90%;
 }
}
</style>

</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</body>
</html>