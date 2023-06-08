function link(_this){


  var ok = new Information("class/php/cookie_table/liste_projet_img.php"); // création de la classe 
  ok.add("liste_projet_img", _this.title); // ajout de l'information pour lenvoi 
 
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 







  const myTimeout = setTimeout(myGreeting, 500);


  var array_local = [] ; 
function myGreeting() {

  
  var url = "http://localhost/Model_Vue8/login/class/php/php_on/voir_link.php";
  var xmlhttp = new XMLHttpRequest();
  
      xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            var myArr = JSON.parse(this.responseText);
            
         
            array_local = myArr ; 
            const myTimeout2 = setTimeout(myGreetingxx, 100);
         
          }
         };
         
         xmlhttp.open("GET", url, true);
         xmlhttp.send();
}






function myGreetingxx() {
 console.log(array_local[0][0].liste_projet_id) ; 
 console.log(array_local[0][0].liste_projet_id_sha1) ; 
 console.log(array_local[0][0].liste_projet_ip) ; 
 console.log(array_local[0][0].liste_projet_name) ; 
 console.log(array_local[0][0].liste_projet_description1) ; 
 console.log(array_local[0][0].liste_projet_description2) ; 
 console.log(array_local[0][0].liste_projet_visibilite1) ; 
 console.log(array_local[0][0].liste_projet_visibilite2) ; 
 console.log(array_local[0][0].liste_projet_type) ; 
 console.log(array_local[0][0].information_user_id_sha1) ; 
 console.log(array_local[0][0].liste_projet_new_file) ; 
 console.log(array_local[0][0].liste_projet_reg_date) ; 

 
 
 

}




       
}

