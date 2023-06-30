<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
 
$password_information_user =$_POST["password_information_user"] ;

// Premier connexion 
// Lors de la connexion on demande a l'utilisateur de cocher une casse 
// Si la case est cocher ont fais une redirection de l'utilsateur pour quil utilise la fonction blog
// Si la casse n'est pas cocher ont peut commencer a coder la page en dur 

$mail_information_user =$_POST["mail_information_user"] ;
$var_action_header_0 =$_POST["var_action_header_0"] ;

// model/class/js/bdd_exe_config.js
// mail_information_user du formulaire denvoie appartir du fichier dans la racinde  view/config.php
// var_action_header_0 du formulaire denvoie appartir du fichier dans la racinde  view/config.php


 
include("../model/class/php/connexion.php"); 
include("../model/class/php/bdd_all_class.php"); 

// recuperation des fichier de parametres 

 $apple = new Bdd_class($servername ,$username,$password,$dbname);

 $apple->set_sql('SELECT * FROM `information_user` WHERE `password_information_user`="'.$password_information_user.'" AND `mail_information_user`="'.$mail_information_user.'"'); 

  $apple->exe_select() ; 
  echo $apple->get_exe_select_bool()  ;

  if($apple->get_exe_select_bool()=="1"){
    $_SESSION['server'] ="on";
  }
  else {
    $_SESSION['server'] ="off";
  }

?>