<?php 
session_start(); 
// echo count($_SESSION["option_remove_name_x"]) ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="src/img/all/favicon.jpg">
</head>
<body id="my_body">

<div id="information_user_info"></div>
<!-- 

  <body id="my_body"  onmouseover="info_cookie_save(event)"  title="my_body">
-->   

<div id="ip_info_cookie_cool_cook" title="<?php echo $_SERVER["REMOTE_ADDR"] ; ?>"></div>
<div id="info"></div>
<?php 
  if(!isset($_SESSION["information_user_id_sha1"])){
    
    include("pages_off/acceuil1.html") ;
    // si lutilisateur n'est pas connexion
  }
  else {
   include("pages_on/login.php") ;
   ?>
<script src="class/js/js_on/session_destroy.js"></script>
<?php 
  }
 include("link_off/index_link.html") ; 
   ?>
  <!--
<script src="class/js/js_off/select_info1.js"></script> 
<script src="class/js/js_off/select_info2.js"></script>
-->
 
<script src="class/js/js_off/Information.js"></script>
 
 <!-- 
toutes les focti
--> 
<script src="class/js/js_off/login_user.js"></script>  
<script src="class/js/js_off/login_user.js"></script> 
<script src="class/js/js_add/dowload_img.js"></script> 
<script src="class/js/js_add/dowload_img2.js"></script>  
<script src="class/js/js_add/dowload_img3.js"></script>  


<script src="class/js/js_array_info/add_group_affiche_form.js"></script>  
<script src="class/js/js_array_info/voir_group.js"></script>  
<script src="class/js/js_remove/option_remove.js"></script>  
<script src="class/js/js_on/option_redirection.js"></script>  
<script src="class/js/js_array_info/voir_liste_projet.js"></script>  
<script src="class/js/js_array_info/link.js"></script>  


<style>
.input_class_general{
width:100% ;
padding:5px;

margin-top:50px;
margin-bottom:50px;
border:1px solid rgba(0,0,0,0.1) ; 
border-bottom : 2px solid black ;
background-color:rgba(100,140,190,0.7) ;


 
}
.text_area_class_general{
    width:100% ;
    
 height:150px;
 
 margin-bottom:100px;
 border:1px solid rgba(0,0,0,0.7) ; 
 border-bottom : 2px solid black ;
 background-color:rgba(100,140,0,0.1) ;

}
</style>
<link rel="stylesheet" href="src/css/index.css">
<div id="el"></div>
<?php 
  if(isset($_SESSION["information_user_id"])){
}
include("class/php/php_off/verif.php");
?>
</div>
</body>
 <link rel="stylesheet" href="css.css">
 </html>