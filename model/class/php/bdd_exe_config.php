<?php
session_start() ; 
/*
commande envoyé depuis le fichier javascript
// model/class/js/bdd_exe_config.js 
*/
/*
Fichier de configuration appartir du renvoi de requette lorsque le fichier Connexion n'existe pas
*/
header("Access-Control-Allow-Origin: *");
include("bdd_class_exe.php") ; // nom de la fonction a ajouter 

/*
// Pour factorise le code on utilise une classe creer sur le meme dossier bdd_class_exe.php
// Puis bdd_class_exe.php 

*/
 
$servername ="localhost" ; 
$username= $_POST["username"]; 
$password= $_POST["password"]; 
$checkBox_checked= $_POST["checkBox_checked"]; 
$dbname= $_POST["dbname"];
$_SESSION["alpha"] = "Erreur de mot de passe ou identifiant" ;  

// $_POST variable envoyé depuis le fichier javascript
// model/class/js/bdd_exe_config.js 
/*
  //********************************************
  //*informations envoye a l'aide du formulaire*
  //*si le fichier connexion.php n'existe pas  *
  //******************************************** 
*/ 
// information ajouter dans le fichier de connexion avec son parametre 
$servername = "localhost";
$n="\n";
$debut="<?php".$n;
$fin="?>".$n;

// nom du fichier courant
$nom_file = "connexion.php";
$filename_config = "config_folder_verif.php";
// creation de table 
$execution_formulaire_php = new Bdd_class(
  $servername,
  $username,
  $password,
  $dbname);
  
  //echo $execution_formulaire_php->exe(); 
// Si tout va bien on crée ces tables 

$execution_formulaire_php->set_action ("CREATE TABLE information_user (
  information_user_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  information_user_id_sha1 VARCHAR(200) NOT NULL,
  information_user_ip VARCHAR(200) NOT NULL,
  information_user_login VARCHAR(200) NOT NULL,
  information_user_password VARCHAR(200) NOT NULL,   
  information_user_new_file VARCHAR(200) NOT NULL, 
  information_user_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");


$execution_formulaire_php->set_action ("CREATE TABLE liste_projet (

  liste_projet_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  liste_projet_id_sha1 VARCHAR(200) NOT NULL,
  liste_projet_id_parent VARCHAR(200) NOT NULL,
  liste_projet_id_sha1_general VARCHAR(200) NOT NULL,
  liste_projet_ip VARCHAR(200) NOT NULL,
  liste_projet_img VARCHAR(200) NOT NULL,
  liste_projet_name VARCHAR(200) NOT NULL, 
  liste_projet_description1 TEXT(2000) NOT NULL,
  liste_projet_description2 TEXT(2000) NOT NULL,
  liste_projet_visibilite1 TEXT(200) NOT NULL,
  liste_projet_visibilite2 TEXT(200) NOT NULL,
  liste_projet_type VARCHAR(200) NOT NULL,   
  information_user_id_sha1 VARCHAR(200) NOT NULL, 
  liste_projet_new_file  VARCHAR(200) NOT NULL, 
  liste_projet_remove  VARCHAR(200) NOT NULL, 
  liste_projet_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");




$execution_formulaire_php->set_action ("CREATE TABLE liste_projet_remove_log (

  liste_projet_remove_log_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  liste_projet_remove_log_id_sha1 VARCHAR(200) NOT NULL, 
  liste_projet_remove_log_id_sha1_name VARCHAR(200) NOT NULL, 

  liste_projet_remove_log_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");



 


 



    $execution_formulaire_php->set_action ("CREATE TABLE showCoords (
      showCoords_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      showCoords_id_sha1	 VARCHAR(200) NOT NULL,
      showCoords_id_name	 VARCHAR(200) NOT NULL, 
      showCoords_ip VARCHAR(30) NOT NULL,
      showCoords_action VARCHAR(30) NOT NULL,
      showCoords_x VARCHAR(30) NOT NULL,
      showCoords_y VARCHAR(30) NOT NULL,
      showCoords_height VARCHAR(30) NOT NULL,
      showCoords_width VARCHAR(200),

      showCoords_information_user_id_sha1  VARCHAR(200),
      showCoords_liste_projet_id_sha1  VARCHAR(200),
      showCoords_liste_projet_child_sha1  VARCHAR(200),

      showCoords_new_file VARCHAR(200),
      showCoords_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
      )");  
  
  



 


$execution_formulaire_php->set_action ("CREATE TABLE liste_signal (
  liste_signal_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  liste_signal_id_sha1 VARCHAR(200) NOT NULL,   
  liste_signal_ip VARCHAR(200) NOT NULL,   
  


  liste_signal_id_name VARCHAR(200) NOT NULL, 
  liste_signal_description VARCHAR(200) NOT NULL,  
  liste_signal_information_user_id_sha1 VARCHAR(200) NOT NULL,   
  liste_signal_liste_projet_id_sha1 VARCHAR(200) NOT NULL, 
  liste_signal_liste_projet_child_sha1 VARCHAR(200) NOT NULL, 

  liste_signal_new_file VARCHAR(200) NOT NULL,  
  liste_signal_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");



$execution_formulaire_php->set_action ("CREATE TABLE liste_style (
  liste_style_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  


  liste_style_font_size VARCHAR(200) NOT NULL,
  liste_style_font_family VARCHAR(200) NOT NULL,
  liste_style_color VARCHAR(200) NOT NULL,
  liste_style_background_color VARCHAR(200) NOT NULL,
  liste_style_border_left VARCHAR(200) NOT NULL,

  liste_style_border_right VARCHAR(200) NOT NULL,
  liste_style_border_bottom VARCHAR(200) NOT NULL,
  liste_style_border_top VARCHAR(200) NOT NULL,
  liste_style_margin_left VARCHAR(200) NOT NULL,
  liste_style_margin_right VARCHAR(200) NOT NULL,

  liste_style_margin_top VARCHAR(200) NOT NULL,
  liste_style_margin_bottom VARCHAR(200) NOT NULL,
  liste_style_mode VARCHAR(200) NOT NULL,
 


 
  liste_style_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");



 



$execution_formulaire_php->set_action ("CREATE TABLE liste_comment (
  liste_comment_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  

  liste_comment_id_sha1 VARCHAR(200) NOT NULL, 
  liste_comment_name VARCHAR(200) NOT NULL,
  liste_comment_ip VARCHAR(200) NOT NULL,
  liste_comment_information_user_id_sha1 VARCHAR(200) NOT NULL,
  liste_comment_liste_projet_id_sha1 VARCHAR(200) NOT NULL,
  liste_comment_liste_projet_child_sha1 VARCHAR(200) NOT NULL,
  liste_comment_new_file VARCHAR(200) NOT NULL, 
  liste_comment_nemove VARCHAR(200) NOT NULL, 

  liste_comment_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");


/*

$execution_formulaire_php->set_action ("CREATE TABLE liste_group2 (
  liste_comment_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  liste_group_id_sha1  VARCHAR(200) NOT NULL, 
  liste_group_ip  VARCHAR(200) NOT NULL, 
  liste_group_name  VARCHAR(200) NOT NULL, 
  liste_group_ip  VARCHAR(200) NOT NULL, 
  liste_group_liste_projet_id  VARCHAR(200) NOT NULL, 
  liste_group_information_user_id  VARCHAR(200) NOT NULL, 
  liste_group_information_user_id_sha1  VARCHAR(200) NOT NULL, 
  liste_group_liste_projet_id_sha1  VARCHAR(200) NOT NULL, 
  liste_group_liste_projet_child_sha1  VARCHAR(200) NOT NULL, 
  liste_group_new_file  VARCHAR(200) NOT NULL,  
  liste_group_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");

*/

$execution_formulaire_php->set_action ("CREATE TABLE liste_group (
  liste_group_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  

  liste_group_id_sha1 VARCHAR(200) NOT NULL, 
  liste_group_name VARCHAR(200) NOT NULL,
  liste_group_ip VARCHAR(200) NOT NULL,
  liste_group_information_user_id_sha1 VARCHAR(200) NOT NULL,
  liste_group_liste_projet_id_sha1 VARCHAR(200) NOT NULL,
  liste_group_liste_projet_child_sha1 VARCHAR(200) NOT NULL,
  liste_group_new_file VARCHAR(200) NOT NULL, 
  liste_group_remove VARCHAR(200) NOT NULL, 

  liste_group_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");












$execution_formulaire_php->set_action ("CREATE TABLE liste_img (
  liste_img_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  

  liste_img_id_sha1 VARCHAR(200) NOT NULL, 
  liste_img_name VARCHAR(200) NOT NULL,
  liste_img_type VARCHAR(200) NOT NULL,

  liste_img_ip VARCHAR(200) NOT NULL,
  liste_img_information_user_id_sha1 VARCHAR(200) NOT NULL,
  liste_img_liste_projet_id_sha1 VARCHAR(200) NOT NULL,
  liste_img_liste_projet_child_sha1 VARCHAR(200) NOT NULL,
  liste_img_new_file VARCHAR(200) NOT NULL, 
  liste_img_remove VARCHAR(200) NOT NULL, 

  liste_img_reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");
 

$execution_formulaire_php->set_action ("CREATE TABLE info_cookie (
  info_cookie_id	 INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  info_cookie_id_sha1 VARCHAR(200) NOT NULL,
  info_cookie_name VARCHAR(200) NOT NULL,
  info_cookie_ip VARCHAR(200) NOT NULL, 
  info_cookie_action VARCHAR(200) NOT NULL,

  info_cookie_information_user_id_sha1 VARCHAR(200) NOT NULL,
  info_cookie_liste_projet_id_sha1 VARCHAR(200) NOT NULL,
  info_cookie_liste_projet_child_sha1 VARCHAR(200) NOT NULL,
  info_cookie_remove VARCHAR(200) NOT NULL,



  info_cookie_new_file VARCHAR(200) NOT NULL,
  info_cookie_reg_date  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");






 



 

     // SI le document connexion d'existe pas le créer 
      if( $execution_formulaire_php->get_exe_resul()){
        // si il ya pas d'erreur  creer le fichier
        $texte=   $debut.$n.'$dbname="'.$dbname.'";'.$n.'$username="'.$username.'";'.$n.'$password="'.$password.'";'.$n.'$servername="'.$servername.'";'.$n.$n.$fin;

        // création du fichier
        $f = fopen($nom_file, "x+");
        // écriture
        fputs($f, $texte );
        // fermeture
        fclose($f);


if($checkBox_checked=="on"){
          $texte=   "on";

        // création du fichier
        $f = fopen($filename_config, "x+");
        // écriture
        fputs($f, $texte );
        // fermeture
        fclose($f);
}
else {
  $texte=   "off";

  // création du fichier
  $f = fopen($filename_config, "x+");
  // écriture
  fputs($f, $texte );
  // fermeture
  fclose($f);
}
      }      