function    voir_liste_projet(){
    let   array_voir_liste_projet = [];
       var xmlhttp = new XMLHttpRequest();
var url = "http://localhost/Model_Vue8/login/class/php/php_on/voir_liste_projet.php";


xmlhttp.onreadystatechange = function() {
 if (this.readyState == 4 && this.status == 200) {
   var myArr = JSON.parse(this.responseText);
   
   console.log(myArr) ; 

   

 }
};

xmlhttp.open("GET", url, true);
xmlhttp.send();



 
   }