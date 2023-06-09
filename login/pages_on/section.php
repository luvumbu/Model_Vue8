 
 
<style>
    .div_group{
        border:1px solid rgba(0,0,0,0.1) ; 

        max-height:400px;


     
 
  overflow-y: scroll;
  scrollbar-color: rebeccapurple green;
  scrollbar-width: thin;
  display:flex;
  justify-content:space-around ; 
 
 flex-wrap: wrap;
 

    }

    .div_group_n1 div {
 
 
 

    }

    .div_group_n1 div:hover {
 
 

    }

    .div_group_n1{
    
    }
    .display_flex2{
        display:flex ; 
        justify-content:space-around ; 
   

    }
    .display_flex2 div{
        display:flex ; 
        justify-content:space-around ; 
 
       
        text-align:center ; 
        
      

    }
    .margin_right_100px{
        
    }
    .div_group_n1{
        
        text-align:center ; 
    }
    .display_flex2  {
     
        width:100%;
      border-bottom:1px solid rgba(0,0,0,0.1) ; 
    }
 
    .display_flex2:hover{
        background-color:rgba(0,50,100,0.2) ; 
        
        color:white ; 
    }
    .n_nombre{
        background-color:rgba(100,50,200,0.3) ; 
        
     
         
      

    }
   
  
    .div_group_n3{
        display:flex;
        justify-content:space-around ; 
        flex-wrap: wrap;
  
        margin-right:100px ;  
 

        
    }
    .div_group_n3 div {
       
        margin-top:100px; 

    }
    .carte_0{
        background-color:rgba(200,50,200,0.7) ; 
        color:white ; 

        text-align:center ; 
    }
    .carte{
        border-radius:15px;
    }
    .carte:hover{
       cursor:pointer ; 

    }
    .personnel{
  
        text-align:center ; 
 
       
    }
</style>


<script> 
 
 
    const myTimeout = setTimeout(myGreeting, 400);
function myGreeting() {
   
    voir_liste_projet() ;
 

    const myTimeout = setTimeout(myGreeting2, 600);



    function myGreeting2(){
        document.getElementById("id_div_global_style1").innerHTML="" ; 
        document.getElementById("id_div_global_style2").innerHTML="" ; 

var node = document.createElement("div");
node.setAttribute("id","elements"+i) ;  
node.setAttribute("class","display_flex2 margin_right_100px form_general") ;  
document.getElementById("id_div_global_style2").appendChild(node);
    

    for(var i = 0 ; i<array_voir_liste_projet.length ; i ++){
        console.log(array_voir_liste_projet[i].liste_projet_description1) ;



        

var node = document.createElement("div");
node.setAttribute("id",array_voir_liste_projet[i].liste_projet_id_sha1) ;  
node.setAttribute("class","display_flex2 margin_right_100px form_general") ;  
document.getElementById("id_div_global_style2").appendChild(node);















var node = document.createElement("input");

node.setAttribute("value",array_voir_liste_projet[i].liste_projet_description1) ; 
node.setAttribute("style","border:1px solid rgba(0,0,0,0);height:100%") ; 

//
 node.setAttribute("onkeyup","update_value(this)");
 node.setAttribute("id","i_"+array_voir_liste_projet[i].liste_projet_id_sha1);
 node.setAttribute("title",array_voir_liste_projet[i].liste_projet_id_sha1) ;

//
document.getElementById(array_voir_liste_projet[i].liste_projet_id_sha1).appendChild(node);


var node = document.createElement("div");
var textnode = document.createTextNode(array_voir_liste_projet[i].liste_projet_id_sha1);
node.setAttribute("class","n_nombre margin_right_100px") ; 
node.appendChild(textnode);
document.getElementById(array_voir_liste_projet[i].liste_projet_id_sha1).appendChild(node);



var node = document.createElement("div");
var textnode = document.createTextNode(array_voir_liste_projet[i].liste_projet_id_parent);
node.setAttribute("class","n_nombre margin_right_100px") ; 
node.appendChild(textnode);
document.getElementById(array_voir_liste_projet[i].liste_projet_id_sha1).appendChild(node);


var node = document.createElement("img");
 
if(array_voir_liste_projet[i].liste_projet_visibilite1==""){
node.setAttribute("src",src_img3) ; 
}
else{
    node.setAttribute("src",src_img3_2) ; 
}
node.setAttribute("class","margin_right_100px cursor_pointer") ;
node.setAttribute("style","margin-left:45px") ;  
node.setAttribute("onclick","update_liste_projet_visibilite1(this)") ;  
node.setAttribute("title",array_voir_liste_projet[i].liste_projet_id_sha1) ;  
document.getElementById(array_voir_liste_projet[i].liste_projet_id_sha1).appendChild(node);


var node = document.createElement("img");
 

node.setAttribute("src","https://img.icons8.com/ios/30/domain--v1.png") ; 
node.setAttribute("class","margin_right_100px cursor_pointer") ;
node.setAttribute("style","margin-left:45px") ;  
node.setAttribute("onclick","link(this)") ;  
node.setAttribute("title",array_voir_liste_projet[i].liste_projet_id_sha1) ;  
document.getElementById(array_voir_liste_projet[i].liste_projet_id_sha1).appendChild(node);





var node = document.createElement("img");
 

node.setAttribute("src","https://img.icons8.com/ios/30/link--v1.png") ; 
node.setAttribute("class","margin_right_100px cursor_pointer") ;
node.setAttribute("style","margin-left:45px") ;  
node.setAttribute("onclick","link(this)") ;  
node.setAttribute("title",array_voir_liste_projet[i].liste_projet_id_sha1) ;  
document.getElementById(array_voir_liste_projet[i].liste_projet_id_sha1).appendChild(node);




var node = document.createElement("img");
node.setAttribute("title",array_voir_liste_projet[i].liste_projet_id_sha1) ;
node.setAttribute("onclick","option_remove(this)") ;  
node.setAttribute("src","https://img.icons8.com/fluency/30/delete-forever.png") ; 
node.setAttribute("class","margin_right_100px cursor_pointer") ; 
node.setAttribute("style","margin-left:45px") ; 


 
document.getElementById(array_voir_liste_projet[i].liste_projet_id_sha1).appendChild(node);
 

// ELEMENT N°2 



 



 



 
 
 


    }
 


 
 


}
 



}



</script>


<div id="id_div_global_style2"></div>