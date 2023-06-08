function link(_this){


  var ok = new Information("class/php/cookie_table/liste_projet_img.php"); // création de la classe 
  ok.add("liste_projet_img", _this.title); // ajout de l'information pour lenvoi 
 
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 







  const myTimeout = setTimeout(myGreeting, 500);

function myGreeting() {
  var url = "http://localhost/Model_Vue8/login/class/php/php_on/voir_link.php";
  var xmlhttp = new XMLHttpRequest();
  
      xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            var myArr = JSON.parse(this.responseText);
            
            console.log(myArr) ; 
             
            
         
          }
         };
         
         xmlhttp.open("GET", url, true);
         xmlhttp.send();
}




       
}

