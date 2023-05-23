var general_element ="" ; 
var nombre_ = 0 ;
let random_1 = Math.random()*250 ; 

let colors_1_ =[] ; 
let distriution = [] ; 


var oook = 0 ; 
for(var x = 0 ; x < 500; x ++){
 
// creation de couleurs automatiques
  var n_1 =Math.random()*250  ; 
  var n_2 =Math.random()*250  ; 
  var n_3 =Math.random()*250  ; 
  var n_4 =0.1  ; 
  var  colors_1 ="background-color:rgba("+n_1+","+n_2+","+n_3+","+n_4+")" ; 
colors_1_.push(colors_1);

}


function add_liste_projet_exe(_this){

 
   
  var ok = new Information("class/php/php_add/add_liste_projet.php"); // création de la classe 
  ok.add("login", "root"); // ajout de l'information pour lenvoi 
  ok.add("password", "root"); // ajout d'une deuxieme information denvoi  
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 
  
  




  const myTimeout = setTimeout(exe_element, 250);

function exe_element() {
    
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
  
  
  
    
 
  
    console.log("INCLUDES") ; 
    console.log("INCLUDES") ; 


    if(distriution.includes(this.responseText)){
console.log(distriution);
    }
    else {
      distriution.push(this.responseText);
console.log(distriution);

    }
 
    
   

 var para = document.createElement("div"); 
 para.setAttribute("id","id_div_global_style1_"+this.responseText) ; 
 para.setAttribute("class","div_1") ; 



 
 


 if(general_element==""){
 
  document.getElementById("id_div_global_style1").appendChild(para);



  
  



  var  para = document.createElement("div");
  para.setAttribute("id","vplus"+this.responseText) ; 
   

  
  para.setAttribute("title",1) ; 
  

  vmax_ok = 1 ;

 
 
  document.getElementById("id_div_global_style1_"+this.responseText).appendChild(para);
 



 




 }
 else {
 

  let vmax_ok = document.getElementById("vplus"+general_element).title ; 
  
 
  vmax_ok ++ ; 


 
  
  document.getElementById("parent_"+_this.title).appendChild(para);




  var  para = document.createElement("div");
  para.setAttribute("id","vplus"+this.responseText) ; 
  
  para.setAttribute("title",vmax_ok) ; 
  // para.innerHTML=vmax_ok ; 

 
 
  document.getElementById("id_div_global_style1_"+this.responseText).appendChild(para);
 

 

 

 }
 


 

 

 var  para = document.createElement("input");
 para.placeholder="Mon text est ok" ;
 
 para.className="input_color";
 para.setAttribute("style",colors_1_[oook]+" ; margin-top:100px") ;
 para.title=this.responseText; 

 oook ++ ; 
 para.setAttribute("title",this.responseText) ;
  

 
 document.getElementById("id_div_global_style1_"+this.responseText).appendChild(para);


 var  para = document.createElement("textarea");
 para.placeholder="Mon text est ok" ;
 
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



 







 
      
    
    
     
    scrollTo_ = scrollTo_ + 700 ;
    general_element =this.responseText;
  
  
  
  
  
  
  
  
  
  }
  xhttp.open("GET", "class/php/cookie_table/liste_projet_cookie.php");
  xhttp.send();
}
  

  
   
   
  }
  