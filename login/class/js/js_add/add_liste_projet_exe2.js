var general_element ="" ; 
var nombre_ = 0 ;
let random_1 = Math.random()*250 ; 

let colors_1_ =[] ; 

for(var x = 0 ; x < 500; x ++){
 
// creation de couleurs automatiques
  var n_1 =Math.random()*250  ; 
  var n_2 =Math.random()*250  ; 
  var n_3 =Math.random()*250  ; 
  var n_4 =0.1  ; 
  var  colors_1 ="background-color:rgba("+n_1+","+n_2+","+n_3+","+n_4+")" ; 
colors_1_.push(colors_1);

}


 
  
function add_liste_projet_exe_child(_this){
 
var vplus = document.getElementById("info_"+_this.title).title ;
 
 

  var ok = new Information("class/php/php_add/add_liste_projet.php"); // création de la classe 
  ok.add("login", "root"); // ajout de l'information pour lenvoi 
  ok.add("password", "root"); // ajout d'une deuxieme information denvoi  
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 
  
  const myTimeout = setTimeout(myGreeting, 250);

  function myGreeting() {
  
  
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    general_element ="parent_"+this.responseText;
 
    
   

 var para = document.createElement("div"); 
 para.setAttribute("id","id_div_global_style1_"+this.responseText) ; 
 para.setAttribute("style","margin-top:25px") ; 


 
 document.getElementById("parent_"+_this.title).appendChild(para);
 


 


 var  para = document.createElement("input");
 para.setAttribute("class","input_color") ; 
 para.placeholder="Mon text est ok" ; 
  
 

para.setAttribute("style",colors_1_[vplus]) ; //
 para.setAttribute("title",this.responseText) ; 

 
 document.getElementById("id_div_global_style1_"+this.responseText).appendChild(para);



 var  para = document.createElement("textarea");
 para.setAttribute("class","input_color") ; 
 para.placeholder="Mon text est ok" ; 
  
 

para.setAttribute("style",colors_1_[vplus]) ; //
  
 para.setAttribute("title",this.responseText) ; 

 
 document.getElementById("id_div_global_style1_"+this.responseText).appendChild(para);





 var  para = document.createElement("img");
 para.setAttribute("src",src_img2) ; 
 para.setAttribute("style",colors_1_[vplus]) ; //
 para.setAttribute("onclick","add_liste_projet_exe_child(this)") ; 
 para.setAttribute("title",this.responseText) ;  
 para.setAttribute("class","margin_100 cursor_pointer") ; //
 document.getElementById("id_div_global_style1_"+this.responseText).appendChild(para);




 var  para = document.createElement("img");
 para.setAttribute("src",src_img3) ; 
 para.setAttribute("class","margin_100 cursor_pointer") ; //
 para.setAttribute("title",this.responseText) ;  
 document.getElementById("id_div_global_style1_"+this.responseText).appendChild(para);

 
 var  para = document.createElement("img");
 para.setAttribute("src",src_img4) ; 
 para.setAttribute("class","margin_100 cursor_pointer") ; //
 para.setAttribute("title",this.responseText) ;  
 document.getElementById("id_div_global_style1_"+this.responseText).appendChild(para);


 var  para = document.createElement("img");
 para.setAttribute("src",src_img5) ; 
 para.setAttribute("style",colors_1_[vplus]) ; //
 para.setAttribute("class","margin_100 cursor_pointer") ; //
 para.setAttribute("title",this.responseText) ;  
 document.getElementById("id_div_global_style1_"+this.responseText).appendChild(para);








 var  para = document.createElement("div");
 para.setAttribute("id","parent_"+this.responseText) ; 

 document.getElementById("id_div_global_style1_"+this.responseText).appendChild(para);





 var  para = document.createElement("div");
 para.setAttribute("id","info_"+this.responseText) ; 
 
 para.setAttribute("title",vplus) ; 


 document.getElementById("id_div_global_style1_"+this.responseText).appendChild(para);

  
    scrollTo_ = scrollTo_ + 700 ;
  



  
  
  
  
  
  
  
  
  }
  xhttp.open("GET", "class/php/cookie_table/liste_projet_cookie.php");
  xhttp.send();

vplus ++ ;
}
  
   

  }

  