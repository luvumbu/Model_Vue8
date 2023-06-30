<?php 
include("header_1.php") ; 


$_SESSION["add_liste_projet"] = array("");
/*
header_1  : 

Ensemble du  menu principal 
Liste des option dans le menu 

1) Nom de l'application
2) Option qui permet d'ajouter une page web (Inactive)
3) Fonction qui permet à l'utilisateur de se déconnecter
4) Option qui permet d'achicher la premier lettre du NOm de l'utilisateur 

*/
//include("01.php") ; 
//include("etape_04.php") ; 
//include("info_user.php") ; 
    include("img_add.php") ;  

?>
<link rel="stylesheet" href="pages_on/header_1.css">
<script src="class/js/js_add/add_liste_projet_exe.js"></script>
<script src="class/js/js_add/add_liste_projet_exe2.js"></script>

<script src="class/js/js_upload/update_value.js"></script> 

<div id="cookie_table"> </div>
<div id="cookie_table2"></div>
<div id="cookie_table3"></div>




<script>

    let scrollTo_ = 700 ; 






 

function update_liste_projet_visibilite1(_this){
    console.log("update_liste_projet_visibilite1") ; 
    var ok = new Information("class/php/php_update/update_liste_projet_visibilite1.php"); // création de la classe 
    ok.add("liste_projet_id_sha1", _this.title); // ajout de l'information pour lenvoi
   if( _this.src==src_img3_2){
        _this.src = src_img3 ; 
        ok.add("value_", ""); // ajout de l'information pour lenvoi 



    }
    else {
        _this.src = src_img3_2 ; 
        ok.add("value_", "i"); // ajout de l'information pour lenvoi 
 
    }

    console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 
 
}

function liste_projet_img_exe(_this){
    dowload_img(_this);
}
</script>




<style>
 .div_1{
    margin-bottom:100px; 
 
 }
 .div_1 input {
    padding : 15px ; 
    margin-bottom : 45px; 
 
 }
</style>


<style>
    .display_flexx{
        display: flex;
        justify-content: space-around;
        width:50%;
margin: auto ; 
    }

    .g{
        border : 1px solid rgba(200,0,0,0.3) ;
    }
    
    .d{
        border : 1px solid rgba(0,200,0,0.3) ;
    }
    .v {
        border : 1px solid rgba(0,0,200,0.3) ;

    }

    .d,.g,.v{
        width:300px;
        text-align: center;
        padding: 10px;
    }
    @media screen and (max-width: 1200px) {
        .display_flexx{
        display: flex;
        justify-content: space-around;
        width:90%;
margin: auto ; 
    }
}
</style>
<?php 
if($_SESSION["information_user_id_sha1"]==""){
    session_destroy();
?>


<meta http-equiv="refresh" content="0"
<?php
}




include("section.php") ;
?>

 

