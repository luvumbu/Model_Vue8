<script>
 var elements =[] ; 
	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
 
      const obj = JSON.parse(  this.responseText);
      console.log(obj) ; 
      elements = obj ; 
    }
  };
  xhttp.open("GET", "index_liste_projet_off.php/8fd935cbe3c1620da9a4a196d19d6d0b367cab35", true);
  xhttp.send();
 




 

// exemple de code 

/* 
Ajax(nomId,document/source.txt);
*/
</script>