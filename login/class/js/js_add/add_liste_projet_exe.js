var general_element ="" ; 
var nombre_ = 0 ;
let random_1 = Math.random()*250 ; 

let colors_1_ =[] ; 
let distriution = [] ; 
let provisoir = "w";

let debut = false ; 

const add_element_array = [];
const add_element_array_parent = [];
const add_element_array_parent_int = [];
const add_element_array_colors = [];

let array_1 = [] ; 
let array_2 = [] ; 
  let couleur_final  = 0

 
var oook = 0 ; 
for(var x = 0 ; x < 1200; x ++){
 
// creation de couleurs automatiques
  var n_1 =Math.random()*250  ; 
  var n_2 =Math.random()*250  ; 
  var n_3 =Math.random()*250  ; 
  var n_4 =0.4  ; 
  var  colors_1 ="background-color:rgba("+n_1+","+n_2+","+n_3+","+n_4+")" ; 
colors_1_.push(colors_1);

}
n_plus = 0  ; 

function add_liste_projet_exe(_this){


  add_element_array_parent_int.push(n_plus) ; 




 

  n_plus ++ ; 

   
  var ok = new Information("class/php/php_add/add_liste_projet.php"); // création de la classe 
  ok.add("login", "root"); // ajout de l'information pour lenvoi 
  ok.add("password", "root"); // ajout d'une deuxieme information denvoi  
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 
  
  




  const myTimeout = setTimeout(exe_element, 250);

function exe_element() {
    
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
  
  
  
    
 
  
  


 
    
   

 var para = document.createElement("div"); 
 para.setAttribute("id","id_div_global_style1_"+this.responseText) ; 
 
 

 para.setAttribute("class","div_1") ; 



 
 


 if(general_element==""){
  general_element="ok" ;
  add_element_array_parent.push("vide");

  general_element = this.responseText ; 
  document.getElementById("id_div_global_style1").appendChild(para);
/*
Premier element creer sans parent 
general_element definis le nom du parent mais comme il est premier il na pas de parent atribué


*/

  var  para = document.createElement("div");
  para.setAttribute("id","vplus"+this.responseText) ;   
  para.setAttribute("title",1) ; 
  vmax_ok = 1 ; 
  document.getElementById("id_div_global_style1_"+this.responseText).appendChild(para);
  document.getElementById("id_div_global_style1_"+this.responseText).appendChild(para);
  var  para = document.createElement("div");

  
  para.setAttribute("id","colors_"+this.responseText) ;   
  para.setAttribute("title", parseInt(Math.random()*1199)) ; 
   // para.innerHTML=vmax_ok ;  
  document.getElementById("id_div_global_style1_"+this.responseText).appendChild(para);
 

 }
 else { 
 
  add_element_array_parent.push(this.responseText) ; 
   if(add_element_array.includes(_this.title)==false) {
           add_element_array.push(_this.title);
          add_element_array_colors.push(parseInt(Math.random()*500));
   }
 couleur_final = parseInt(add_element_array.indexOf(_this.title))
 let vmax_ok = document.getElementById("vplus"+general_element).title ; 
 vmax_ok ++ ; 
  document.getElementById("parent_"+_this.title).appendChild(para);
  var  para = document.createElement("div");
  para.setAttribute("id","vplus"+this.responseText) ;   
  para.setAttribute("title",vmax_ok) ; 
   // para.innerHTML=vmax_ok ;  
   //add_element_array_parent.push("id_div_global_style1_"+this.responseText) ;
  document.getElementById("id_div_global_style1_"+this.responseText).appendChild(para);

 }
 
 var  para = document.createElement("input");
 para.placeholder="Entrer votre texte" ;
 para.setAttribute("onkeyup","update_input(this)");

 para.className="input_color";
 para.setAttribute("style",colors_1_[couleur_final]+" ; margin-top:100px") ;
 para.title=this.responseText; 

 oook ++ ; 
 para.setAttribute("title",this.responseText) ;
  

 
 document.getElementById("id_div_global_style1_"+this.responseText).appendChild(para);


 var  para = document.createElement("textarea");
 para.placeholder="Entrer votre texte" ;
 
 para.className="input_color";
 para.title=this.responseText; 

 para.setAttribute("title",this.responseText) ; 

 
 document.getElementById("id_div_global_style1_"+this.responseText).appendChild(para);





 var  para = document.createElement("img");
 para.src=src_img2 ;
 para.className="input_color";
 para.title=this.responseText; 
 para.setAttribute("onclick","add_liste_projet_exe(this)") ; 
 para.setAttribute("title",this.responseText) ;
 para.setAttribute("style","margin-left:45px") ;
 para.setAttribute("class","cursor_pointer") ;   
 

 document.getElementById("id_div_global_style1_"+this.responseText).appendChild(para);




 var  para = document.createElement("img");
 para.src=src_img3 ;
 para.className="input_color";
 para.title=this.responseText; 
 
 para.setAttribute("title",this.responseText) ;
 para.setAttribute("style","margin-left:45px") ;
 para.setAttribute("class","cursor_pointer") ;   
 document.getElementById("id_div_global_style1_"+this.responseText).appendChild(para);


 
 var  para = document.createElement("img");
 para.src=src_img4 ;
 para.className="input_color";
 para.title=this.responseText; 
 
 para.setAttribute("title",this.responseText) ;
 para.setAttribute("style","margin-left:45px") ;
 para.setAttribute("class","cursor_pointer") ;   
 document.getElementById("id_div_global_style1_"+this.responseText).appendChild(para);


 var  para = document.createElement("img");
 para.src=src_img5;
 para.className="input_color";
 para.title=this.responseText; 
 
 para.setAttribute("title",this.responseText) ;
 para.setAttribute("style","margin-left:45px") ;
 para.setAttribute("class","cursor_pointer") ;   
 document.getElementById("id_div_global_style1_"+this.responseText).appendChild(para);


 var  para = document.createElement("img");
 para.src=src_img1;
 para.className="input_color";
 para.title=this.responseText; 
 
 para.setAttribute("title",this.responseText) ;
 para.setAttribute("style","margin-left:45px") ;
 para.setAttribute("class","cursor_pointer") ;   
 document.getElementById("id_div_global_style1_"+this.responseText).appendChild(para);

 var  para = document.createElement("div");
 para.setAttribute("id","parent_"+this.responseText) ; 
 document.getElementById("id_div_global_style1_"+this.responseText).appendChild(para);





 var  para = document.createElement("div");
 para.setAttribute("id","colors_"+provisoir) ; 
 para.setAttribute("title",provisoir) ; 
 document.getElementById("id_div_global_style1_"+this.responseText).appendChild(para);
 if(_this==undefined){
array_1.push(undefined) ; 
array_2.push(undefined) ; 
 }
 else {
  array_1.push(_this.title) ; 
  array_2.push(this.responseText) ; 
 }
 
 var ok = new Information("class/php/php_update/update_parent_name.php"); // création de la classe 
 ok.add("child",this.responseText); // ajout de l'information pour lenvoi 

 if(_this!=undefined)
 {
   ok.add("parent", _this.title); // ajout d'une deuxieme information denvoi
 }
 else {
  ok.add("parent", undefined); // ajout d'une deuxieme information denvoi

 }
  
 console.log(ok.info()); // demande l'information dans le tableau
 ok.push(); // envoie l'information au code pkp 
 
  }
  xhttp.open("GET", "class/php/cookie_table/liste_projet_cookie.php");
  xhttp.send();
}
  

  
   
   
  }
  


  function update_input(_this){

var ok = new Information("class/php/php_update/update_input.php"); // création de la classe 
ok.add("_this_value", _this.value); // ajout de l'information pour lenvoi 
ok.add("_this_title", _this.title); // ajout d'une deuxieme information denvoi  
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 


 

  }