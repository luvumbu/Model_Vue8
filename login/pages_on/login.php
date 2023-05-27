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
<script src="class/js/js_upload/update_value.js"></script> 

<div id="cookie_table"> </div>
<div id="cookie_table2"></div>
<div id="cookie_table3"></div>




<script>

    let scrollTo_ = 700 ; 
function upddate_child_input(_this){

 

var ok = new Information("class/php/php_update/upddate_child_input.php"); // création de la classe 
ok.add("_this_title", _this.title); // ajout de l'information pour lenvoi 
ok.add("_this_value", _this.value); // ajout d'une deuxieme information denvoi  
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 


}

function upddate_child_textarea(_this){
var ok = new Information("class/php/php_update/upddate_child_textarea.php"); // création de la classe 
ok.add("_this_title", _this.title); // ajout de l'information pour lenvoi 
ok.add("_this_value", _this.value); // ajout d'une deuxieme information denvoi  
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp
}

function remove_element(_this){
 

    const element = document.getElementById(_this.parentNode.id);
    element.remove();
 
    var ok = new Information("class/php/php_remove/remove_element.php"); // création de la classe 
ok.add("remove_info", _this.title); // ajout de l'information pour lenvoi 
 
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 
 
}


function updatet_child_visibilite1(_this)
{

     

const element = document.getElementById(_this.parentNode.id);
//element.remove();
 
var ok = new Information("class/php/php_update/updatet_child_visibilite1.php"); // création de la classe 

    if(_this.src==src_img3){
 
        _this.src = src_img3_2 ;
        ok.add("updatet_child", _this.title); // ajout de l'information pour lenvoi 
        ok.add("_this_value", "invisible"); // ajout de l'information pour lenvoi 

    }
    else {
        _this.src = src_img3 ;
        ok.add("updatet_child", _this.title); // ajout de l'information pour lenvoi 
        ok.add("_this_value", ""); // ajout de l'information pour lenvoi 


    }

 

 
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 


}

function updatet_child_visibilite_child(_this){    
console.log(_this.title) ; 
    
    const element = document.getElementById(_this.parentNode.id);
//element.remove();
 
var ok = new Information("class/php/php_update/updatet_child_visibilite_child.php"); // création de la classe 

    if(_this.src==src_img3){
 
        _this.src = src_img3_2 ;
        ok.add("updatet_child", _this.title); // ajout de l'information pour lenvoi 
        ok.add("_this_value", "invisible"); // ajout de l'information pour lenvoi 

    }
    else {
        _this.src = src_img3 ;
        ok.add("updatet_child", _this.title); // ajout de l'information pour lenvoi 
        ok.add("_this_value", ""); // ajout de l'information pour lenvoi 
    }
 
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 
}
function add_child_plus(_this){
    const element = document.getElementById(_this.parentNode.id);
    var ok = new Information("class/php/php_add/add_child_plus.php"); // création de la classe 
    ok.add("add_child_plus", _this.title); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    let myTimeout = setTimeout(ad_elements, 100);
function ad_elements() {
      // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() {
  

var  para = document.createElement("div");
para.setAttribute("id", this.responseText); 
document.getElementById(_this.parentNode.id).appendChild(para);    


var  para = document.createElement("input");
para.setAttribute("class","space_info input_child2")
para.setAttribute("title",this.responseText) ;
para.setAttribute("onkeyup","up_child_plus1(this)") ;
document.getElementById( this.responseText).appendChild(para);

var  para = document.createElement("textarea");
para.setAttribute("class","space_info input_child2"); 
para.setAttribute("title",this.responseText) ;
para.setAttribute("onkeyup","up_child_plus2(this)") ;
document.getElementById( this.responseText).appendChild(para);

// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!A

var  para = document.createElement("img");
para.setAttribute("src",src_img1); 
para.setAttribute("title",this.responseText) ;
para.setAttribute("class","padding_15 cursor_pointer");
para.setAttribute("onclick","remove_liste_projet_child(this)"); 
document.getElementById( this.responseText).appendChild(para);

 
var  para = document.createElement("img");
para.setAttribute("src",src_img3); 
para.setAttribute("class","padding_15 cursor_pointer");
para.setAttribute("title",this.responseText) ;
para.setAttribute("onclick","updatet_child_visibilite_child(this)"); 
document.getElementById( this.responseText).appendChild(para);

var  para = document.createElement("img");
para.setAttribute("src",src_img5); 
para.setAttribute("onclick","dowload_img_3(this)");
para.setAttribute("class","padding_15 cursor_pointer");
para.setAttribute("title",this.responseText) ;
document.getElementById( this.responseText).appendChild(para);
    
window.scrollTo( 0,scrollTo_);
scrollTo_ = scrollTo_ + 800 ; 
console.log("parent node" ) ; 

    console.log(_this.parentNode.id) ;
console.log("parent node" ) ; 

// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!Z
    

  }
  xhttp.open("GET", "class/php/cookie_table/liste_projet_child_cookie4.php");
  xhttp.send();
    // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
}

}


function up_child_plus1(_this){
       var ok = new Information("class/php/php_update/up_child_plus1.php"); // création de la classe 
       ok.add("up_child_plus", _this.title); // ajout de l'information pour lenvoi 
       ok.add("_this_value", _this.value); // ajout de l'information pour lenvoi 
       console.log(ok.info()); // demande l'information dans le tableau
       ok.push(); // envoie l'information au code pkp 
 
}

function up_child_plus2(_this){
       var ok = new Information("class/php/php_update/up_child_plus2.php"); // création de la classe 
        ok.add("up_child_plus", _this.title); // ajout de l'information pour lenvoi 
        ok.add("_this_value", _this.value); // ajout de l'information pour lenvoi 
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 
}

function remove_liste_projet_child(_this){
 

    console.log(_this.title) ;
    document.getElementById(_this.parentNode.id).remove();
    var ok = new Information("class/php/php_remove/remove_liste_projet_child.php"); // création de la classe 
    ok.add("remove_info", _this.title); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
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
<?php 
if($_SESSION["information_user_id_sha1"]==""){
    session_destroy();
?>
<meta http-equiv="refresh" content="0"
<?php
}
?>