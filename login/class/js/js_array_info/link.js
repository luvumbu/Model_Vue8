function link(_this){

  document.getElementById("id_div_global_style2").innerHTML="" ; 


  var ok = new Information("class/php/cookie_table/liste_projet_img.php"); // création de la classe 
  ok.add("liste_projet_img", _this.title); // ajout de l'information pour lenvoi 
 
  console.log(ok.info()); // demande l'information dans le tableau
  ok.push(); // envoie l'information au code pkp 







  const myTimeout = setTimeout(myGreeting, 500);


  var array_local = [] ; 
function myGreeting() {

  
  var url = "class/php/php_on/voir_link.php";
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



var node = document.createElement("div");
 
node.id="myGreetingxx" ;  
//node.innerHTML="vmax_ok" ;  
document.getElementById("id_div_global_style2").appendChild(node);






var node = document.createElement("input");
node.id="liste_projet_description1" ;  
node.value=array_local[0][0].liste_projet_description1 ; 
node.setAttribute("onkeyup","update_value(this)");
node.setAttribute("id","i_"+array_local[0][0].liste_projet_id_sha1);
  node.setAttribute("class","input_class_general");
node.setAttribute("title",array_local[0][0].liste_projet_id_sha1);
document.getElementById("id_div_global_style2").appendChild(node);

var node = document.createElement("textarea");
node.id="liste_projet_description2" ;  
node.value=array_local[0][0].liste_projet_description2 ; 
node.setAttribute("onkeyup","update_value(this)");
node.setAttribute("id","t_"+array_local[0][0].liste_projet_id_sha1);
  node.setAttribute("class","text_area_class_general");
node.setAttribute("title",array_local[0][0].liste_projet_id_sha1);
document.getElementById("id_div_global_style2").appendChild(node);



/*


var node = document.createElement("div");
node.id="liste_projet_id" ;  
node.innerHTML=array_local[0][0].liste_projet_id ;  
document.getElementById("id_div_global_style2").appendChild(node);

var node = document.createElement("div");
node.id="liste_projet_id_sha1" ;  
node.innerHTML=array_local[0][0].liste_projet_id_sha1 ;  
document.getElementById("id_div_global_style2").appendChild(node);

var node = document.createElement("div");
node.id="liste_projet_ip" ;  
node.innerHTML=array_local[0][0].liste_projet_ip ;  
document.getElementById("id_div_global_style2").appendChild(node);

var node = document.createElement("div");
node.id="liste_projet_name" ;  
node.innerHTML=array_local[0][0].liste_projet_name ;  
document.getElementById("id_div_global_style2").appendChild(node);



var node = document.createElement("div");
node.id="liste_projet_description2" ;  
node.innerHTML=array_local[0][0].liste_projet_description2 ;  
document.getElementById("id_div_global_style2").appendChild(node);

var node = document.createElement("div");
node.id="liste_projet_visibilite1" ;  
node.innerHTML=array_local[0][0].liste_projet_visibilite1 ;  
document.getElementById("id_div_global_style2").appendChild(node);

var node = document.createElement("div");
node.id="liste_projet_visibilite2" ;  
node.innerHTML=array_local[0][0].liste_projet_visibilite2 ;  
document.getElementById("id_div_global_style2").appendChild(node);

var node = document.createElement("div");
node.id="liste_projet_type" ;  
node.innerHTML=array_local[0][0].liste_projet_type ;  
document.getElementById("id_div_global_style2").appendChild(node);

var node = document.createElement("div");
node.id="information_user_id_sha1" ;  
node.innerHTML=array_local[0][0].information_user_id_sha1 ;  
document.getElementById("id_div_global_style2").appendChild(node);
*/
var node = document.createElement("div");
node.id="liste_projet_new_file" ;  
node.innerHTML=array_local[0][0].liste_projet_new_file ;  
document.getElementById("id_div_global_style2").appendChild(node);
var node = document.createElement("div");
node.id="liste_projet_reg_date" ;  
   


 





 /*
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

*/
 




 



 if(array_local[1][0]!="404"){
  for(var f =0 ; f<array_local[1].length; f++){
    console.log(f) ; 
  console.log(array_local[1][f].liste_projet_reg_date) ;



  var node = document.createElement("input");
  node.id="liste_projet_description1" ;  
  node.value=array_local[1][f].liste_projet_description1 ; 
  node.setAttribute("onkeyup","update_value(this)");
  node.setAttribute("id","i_"+array_local[1][f].liste_projet_id_sha1);
  node.setAttribute("class","input_class_general");

  node.setAttribute("title",array_local[1][f].liste_projet_id_sha1);
  document.getElementById("id_div_global_style2").appendChild(node);
  
  var node = document.createElement("textarea");
  node.id="liste_projet_description2" ;  
  node.value=array_local[1][f].liste_projet_description2 ; 
  node.setAttribute("onkeyup","update_value(this)");
  node.setAttribute("id","t_"+array_local[1][f].liste_projet_id_sha1);
  node.setAttribute("title",array_local[1][f].liste_projet_id_sha1);
  node.setAttribute("class","text_area_class_general");

  document.getElementById("id_div_global_style2").appendChild(node);
  
  
  
  
  
  /*
  var node = document.createElement("div");
  node.id="liste_projet_id" ;  
  node.innerHTML=array_local[1][f].liste_projet_id ;  
  document.getElementById("id_div_global_style2").appendChild(node);
  
  var node = document.createElement("div");
  node.id="liste_projet_id_sha1" ;  
  node.innerHTML=array_local[1][f].liste_projet_id_sha1 ;  
  document.getElementById("id_div_global_style2").appendChild(node);
  
  var node = document.createElement("div");
  node.id="liste_projet_ip" ;  
  node.innerHTML=array_local[1][f].liste_projet_ip ;  
  document.getElementById("id_div_global_style2").appendChild(node);
  
  var node = document.createElement("div");
  node.id="liste_projet_name" ;  
  node.innerHTML=array_local[1][f].liste_projet_name ;  
  document.getElementById("id_div_global_style2").appendChild(node);
  
  
  
  var node = document.createElement("div");
  node.id="liste_projet_description2" ;  
  node.innerHTML=array_local[1][f].liste_projet_description2 ;  
  document.getElementById("id_div_global_style2").appendChild(node);
  
  var node = document.createElement("div");
  node.id="liste_projet_visibilite1" ;  
  node.innerHTML=array_local[1][f].liste_projet_visibilite1 ;  
  document.getElementById("id_div_global_style2").appendChild(node);
  
  var node = document.createElement("div");
  node.id="liste_projet_visibilite2" ;  
  node.innerHTML=array_local[1][f].liste_projet_visibilite2 ;  
  document.getElementById("id_div_global_style2").appendChild(node);
  
  var node = document.createElement("div");
  node.id="liste_projet_type" ;  
  node.innerHTML=array_local[1][f].liste_projet_type ;  
  document.getElementById("id_div_global_style2").appendChild(node);
  
  var node = document.createElement("div");
  node.id="information_user_id_sha1" ;  
  node.innerHTML=array_local[1][f].information_user_id_sha1 ;  
  document.getElementById("id_div_global_style2").appendChild(node);
  */
  var node = document.createElement("div");
  node.id="liste_projet_new_file" ;  
  node.innerHTML=array_local[1][f].liste_projet_new_file ;  
  document.getElementById("id_div_global_style2").appendChild(node);
  var node = document.createElement("div");
  node.id="liste_projet_reg_date" ; 

  
  }

 }
 
 
 

}

       
}


function link_w3(_this){
   window.location.replace("../blog.php/"+_this.title);
}
