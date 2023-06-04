<!DOCTYPE html>
<html>
<body>

 

<script>


console.log(window.location.href) ; 





console.log(window.location.href.length) ; 
var n_projet = ""  ; 

for(var i = window.location.href.length-1 ; i>0 ; i-- ){
   
  if(window.location.href[i]=="/"){
    break ; 
  }

  n_projet = n_projet+window.location.href[i] ; 


}


var n_final = "" ; 
for(var i = n_projet.length-1; i>-1 ; i--){
 


  console.log(n_projet[i]) ;  
  n_final = n_final+n_projet[i] ; 
 
 }



 

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
  var myObj = JSON.parse(this.responseText);
  console.log(myObj) ; 
  }
};
xmlhttp.open("GET", "http://localhost/Model_Vue8/model/class/php/liste_projet.php/"+n_final, true);
xmlhttp.send();
</script>

 

</body>
</html>
