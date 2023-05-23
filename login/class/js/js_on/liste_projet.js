   

var array_liste_projet = [];

let array_liste_projet_info_liste_projet_id = [] ; 
let array_liste_projet_info_liste_projet_sha1 = [] ; 
let array_liste_projet_info_liste_projet_name = [] ; 
let array_liste_projet_info_liste_projet_information_user_id = [] ; 
let array_liste_projet_info_liste_projet_information_user_sha1 = [] ; 

let array_liste_projet_info_liste_projet_description1 = [] ; 
let array_liste_projet_info_liste_projet_description2 = [] ; 
let array_liste_projet_info_liste_projet_visibilite1 = [] ; 
let array_liste_projet_info_liste_projet_visibilite2 = [] ; 
let array_liste_projet_info_liste_projet_new_file = [] ; 
let array_liste_projet_info_liste_projet_type = [] ; 

let array_liste_projet_info_liste_projet_reg_date = [] ; 

 

var array_liste_projet_info =[
 
  'liste_projet_id',
  'liste_projet_id_sha1',
  'liste_projet_ip',
  'liste_projet_name',
  'liste_projet_description1',
  'liste_projet_description2',
  'liste_projet_visibilite1',
  'liste_projet_visibilite2',
  'liste_projet_type',
  'information_user_id_sha1',
  'liste_projet_new_file',
  'liste_projet_reg_date'

 ]

 
function liste_projet(){

  array_liste_projet = [] ; 
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {    
      const obj = JSON.parse(  this.responseText);      
        
         
    
          array_liste_projet.push(obj);
          console.log(array_liste_projet);
       }            
  };
  xhttp.open("GET","class/php/php_on/liste_projet.php", true);
  // xhttp.open("GET",php_on_link_stock[0][x], true);
  
  
  
  xhttp.send(); 
}