<!DOCTYPE html>
<html>
<body>

 <div id="info"></div>

<script>


var n_projet = ""  ; 

for(var i = window.location.href.length-1 ; i>0 ; i-- ){
   
  if(window.location.href[i]=="/"){
    break ; 
  }

  n_projet = n_projet+window.location.href[i] ; 


}


var n_final = "" ; 
for(var i = n_projet.length-1; i>-1 ; i--){
 
  n_final = n_final+n_projet[i] ; 
 
 }


 

n_ = 0 ; 
nom_localisation="";
for(var i = 0 ; i < window.location.href.length ; i ++){
 
 if(window.location.href[i]=="/"){
  
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
 

 


var URL = "";
if(nom_localisation=="localhost" || nom_localisation=="127.0.0.1"){
  URL ="http://"+nom_localisation+"/Model_Vue8/model/class/php/liste_projet.php/"+n_final;
}
else{
 
URL ="http://"+nom_localisation+"//model/class/php/liste_projet.php/"+n_final;
    
 
}
 
 
 var val_statu =false;
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
  var myObj = JSON.parse(this.responseText);
 

 

  val_statu = myObj ; 
 
  //calculer = myObj[0][0].information_user_id_sha1.length ; 

 console.log("Info") ; 
 console.log(myObj) ; 
 console.log("Info") ; 

//"http://localhost/Model_Vue8/model/class/php/liste_projet.php/"+n_final
  }
};
xmlhttp.open("GET", URL, true);
xmlhttp.send();    






const myTimeout = setTimeout(m404, 100);

function m404() {
 
   console.log(val_statu[0]);
   if(val_statu[0]=="404"){

 


    const para = document.createElement("img");
 
para.src = "https://www.happy-beez.net/wp-content/uploads/2018/09/erreur404.png";
document.getElementById("info").appendChild(para);



   }
}







 

 
</script>

 

</body>
</html>
