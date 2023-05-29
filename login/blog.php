<!DOCTYPE html>
<html>
<body>

<div id="id01" title="<?php $REMOTE_ADDR = $_SERVER['REMOTE_ADDR'] ;if(strlen($REMOTE_ADDR)<5){
$replace ="/Model_Vue8/login/blog.php/";  
$replace = str_replace($replace,"",$_SERVER['PHP_SELF']) ; 
echo $replace ;
  }    
?>" >
</div>

<script>


let id01_ = document.getElementById("id01") ;


 

 
var xmlhttp = new XMLHttpRequest();
var url = "http://localhost/Model_Vue8/login/class/php/blog/liste_projet.php/"+id01_.title;
 

xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myArr = JSON.parse(this.responseText);
    
    console.log(myArr) ; 
    

  }
};

xmlhttp.open("GET", url, true);
xmlhttp.send();
console.log(window.location.href) ; 
 
</script>




</body>
</html>
