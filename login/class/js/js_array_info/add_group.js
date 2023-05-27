function add_group(_this){

  let liste_group_name = document.getElementById("liste_group_name").value ; 

  console.log(liste_group_name) ; 
_this.className="display_none" ; 
    var ok = new Information("class/php/php_add/add_group.php"); // création de la classe 
ok.add("liste_group_name", liste_group_name); // ajout de l'information pour lenvoi 
  
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp  



const myTimeout = setTimeout(myGreeting, 1000);

function myGreeting() {
  _this.className="cursor_pointer" ; 
  document.getElementById("id_div_global_style1").innerHTML="" ;
 
 
}



document.getElementById("id_div_global_style1").innerHTML=
'<div class="alert alert-success" role="alert">ajout du groupe  du group </div>' ;  
 
}

