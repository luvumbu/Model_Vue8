function add_group(_this){
  var ok = new Information("class/php/php_add/add_group.php"); // création de la classe 
ok.add("login", "root"); // ajout de l'information pour lenvoi 
ok.add("password", "root"); // ajout d'une deuxieme information denvoi  
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp  
}