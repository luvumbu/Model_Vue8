 


<div class="container mt-5 text-center">
  <div class="row">
    <div class="col-sm-4" id="header_1" >    <img width="50" class="cursor_pointer" height="50" src="https://img.icons8.com/ios/50/add--v1.png" alt="add--v1"></div>
    <div class="col-sm-4" id="header_2">    <img width="50" class="cursor_pointer" height="50" src="https://img.icons8.com/ios/50/exit--v1.png" alt="exit--v1"></div>
    <div class="col-sm-4" id="header_3"> <img width="50" class="cursor_pointer" height="50" src="https://img.icons8.com/glyph-neue/50/folder-invoices--v1.png" alt="folder-invoices--v1"></div>
</div>
 
</div>

<div id="header_action"></div>

 
 

<script>




    document.getElementById("header_1").addEventListener("click", header_1_action);
    document.getElementById("header_2").addEventListener("click", header_2_action);
    document.getElementById("header_3").addEventListener("click", header_3_action);















    


function header_1_action() {
  console.log(this.id) ; 
  console.log(this.className) ; 
 
Ajax("header_action","pages_on/header/header_action/header_action_1.html");







    const myTimeout = setTimeout(block_header_action_1, 100);





}


function block_header_action_1() {

  document.getElementById("add_blog").addEventListener("click", add_blog);
  document.getElementById("add_img").addEventListener("click", add_img);
  document.getElementById("add_folder").addEventListener("click", add_folder);
  document.getElementById("black_element").addEventListener("click", black_element);










  


}



 
function header_2_action() {
  console.log(this.id) ; 
  console.log(this.className) ; 

  Ajax("header_action","pages_on/header/header_action/session_destroy.php");


  location.reload() ; 

}
function header_3_action() {
  console.log(this.id) ; 
  console.log(this.className) ; 

}

function disip() 
{
    document.getElementById("submit-button").style.display="none"; 
    document.getElementById("encours").style.display="block"; 
}

let time = "";
 

function add_blog() {
  
  console.log(this.id) ; 
  console.log(this.className) ; 



  const d = new Date();
 time = d.getTime();
 

console.log(time) ;
  Ajax("header_action","pages_on/header/header_action/header_action_2.html");





const x = setTimeout(oui_ok, 250);

function oui_ok() {
 

  
  document.getElementById("header_action_2_info").title=time ; 



var ok = new Information("class/php/php_on/header_action_add.php"); // création de la classe 
ok.add("time", time); // ajout de l'information pour lenvoi 
//ok.add("password", "root"); // ajout d'une deuxieme information denvoi  
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 


  
}



}





function add_img() {
  console.log(this.id) ; 
  console.log(this.className) ; 
  Ajax("header_action","pages_on/header/header_action/header_action_3.html");
  

}
function add_folder() {
  console.log(this.id) ; 
  console.log(this.className) ; 
  Ajax("header_action","pages_on/header/header_action/not.html");
  

}


function black_element() {
 
  Ajax("header_action","pages_on/header/header_action/not.html");

}



 
 



//Ajax("header_action","pages_on/header/header_action/header_action_2.html");
function header_action_2_(_this){

/* 

header_action_2_input
textarea_action_2_input

*/


 

  
  console.log(document.getElementById("header_action_2_info").title) ; 
  console.log(_this.value);


var ok = new Information("class/php/php_on/header_action_update.php"); // création de la classe 
ok.add("time", time); // ajout de l'information pour lenvoi 
ok.add("id", _this.id); // ajout de l'information pour lenvoi 
ok.add("value", _this.value); // ajout de l'information pour lenvoi 



//ok.add("password", "root"); // ajout d'une deuxieme information denvoi  
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 






}
 


</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="upload.js"></script>


<!--

<div class="container mt-5 text-center">
  <div class="mb-3">
     
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    
    <input type="password" class="form-control" id="exampleInputPassword1" style="height:90px">
  </div>
 
  <button type="submit" class="btn btn-primary" style="width:100%">Submit</button>
</div>

--> 


