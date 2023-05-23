function add_etape_04(_this)
{
  

  
    document.getElementById("liste_groupe_black").className="display_none" ; 
    document.getElementById("liste_groupe").className="display_none" ; 

    
const name_liste_projet_group_gr = document.getElementById("name_liste_projet_group_gr").value ; 
 
var ok = new Information("class/php/php_add/add_etape_04.php"); // création de la classe 
ok.add("name_liste_projet_group_gr", name_liste_projet_group_gr); // ajout de l'information pour lenvoi 
 
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 
}