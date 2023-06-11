function add_liste_projet_exe2(_this){
  


  var ok = new Information("class/php/php_add/add_liste_projet.php"); // création de la classe 
 
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 


  const myTimeout = setTimeout(myGreeting, 250);

function myGreeting() {
   
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
  



     
  var node = document.createElement("input");
  node.id="liste_projet_description1" ;  
  node.placeholder= "Votre tire" ; 
  node.setAttribute("onkeyup","update_value(this)");
  node.setAttribute("id","i_"+ this.responseText);
  node.setAttribute("class","input_class_general");

  node.setAttribute("title", this.responseText);
  document.getElementById("id_div_global_style2").appendChild(node);
  
  var node = document.createElement("textarea");
  node.id="liste_projet_description2" ;  
  node.placeholder= "Votre tire" ; 

  node.setAttribute("onkeyup","update_value(this)");
  node.setAttribute("id","t_"+ this.responseText);
  node.setAttribute("title", this.responseText);
  node.setAttribute("class","text_area_class_general");

  document.getElementById("id_div_global_style2").appendChild(node);











  var node = document.createElement("input");
  node.id="liste_projet_description1" ;  
  node.placeholder= "Votre tire" ; 
  node.setAttribute("onkeyup","update_value(this)");
  node.setAttribute("id","i_"+ this.responseText);
  node.setAttribute("class","input_class_general");

  node.setAttribute("title", this.responseText);
  document.getElementById("id_div_global_style2").appendChild(node);




  
  window.scrollTo( 0,scrollTo_);
  scrollTo_ = scrollTo_ + 800 ; 




  // UPDATE INFO 

  var ok = new Information("class/php/php_update/update_parent_name.php"); // création de la classe 
   
 
  ok.add("child",this.responseText); // ajout d'une deuxieme information denvoi  
  ok.add("parent",  _this.title); // ajout d'une deuxieme information denvoi  
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 
 // UPDATE INFO 


  }
  xhttp.open("GET", "class/php/cookie_table/liste_projet_cookie.php");
  xhttp.send();
  
}
  
}