<!DOCTYPE html>
<html>
<body>

 

<script>


console.log(window.location.href) ; 


n_ = 0 ; 
nom_localisation="";
for(var i = 0 ; i < window.location.href.length ; i ++){
 
 if(window.location.href[i]=="/"){
 console.log(i) ; 
 n_ = n_ +1 ; 
 }
 else{
 }


 if(n_==2){
 
  if(window.location.href[i]!="/"){
 
     nom_localisation = nom_localisation+window.location.href[i] ;
  }

 }

}
 

console.log(nom_localisation) ; 



if(nom_localisation=="localhost" || nom_localisation=="127.0.0.1"){
  alert("LOCAL ok") ; 
}
/*
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
  var myObj = JSON.parse(this.responseText);
  console.log(myObj) ; 

 


console.log(myObj) ; 
  //calculer = myObj[0][0].information_user_id_sha1.length ; 

console.log(n_final);

//"http://localhost/Model_Vue8/model/class/php/liste_projet.php/"+n_final
  }
};
xmlhttp.open("GET", "model/class/php/liste_projet.php/"+n_final, true);
xmlhttp.send();    








const myTimeout = setTimeout(myGreeting, 250);

function myGreeting() {
  console.log(calculer) ; 

  if(calculer==0){
  //  window.location.replace("../404.html");
  }
}
*/
</script>

 

</body>
</html>
