
 
    const myTimeout = setTimeout(myGreeting, 400);
    function myGreeting() {
        voir_liste_projet() ;
     
    
        const myTimeout = setTimeout(myGreeting2, 600);
    
    
    
        function myGreeting2(){
            document.getElementById("id_div_global_style1").innerHTML="" ; 
            document.getElementById("id_div_global_style2").innerHTML="" ; 



const info_01 ="Titre ";
const info_02 ="visibilité";
const info_03 ="Lien page web";

const info_04 ="Modifier le fichier";
const info_05 ="Changer l'image";
const info_06 ="Effacer projet";


            var node = document.createElement("div");
            node.setAttribute("id","informationes1") ;
            node.setAttribute("class","informationes1_1") ;              
            document.getElementById("id_div_global_style2").appendChild(node);


            var node = document.createElement("div");            
            node.setAttribute("class","informationes1_x1") ;
            node.innerHTML=info_01 ;              
            document.getElementById("informationes1").appendChild(node);

            var node = document.createElement("div");            
            node.setAttribute("class","informationes1_x2") ;
            node.innerHTML=info_02;              
            document.getElementById("informationes1").appendChild(node);

            var node = document.createElement("div");            
            node.setAttribute("class","informationes1_x3") ;
            node.innerHTML=info_03 ;              
            document.getElementById("informationes1").appendChild(node);

            var node = document.createElement("div");            
            node.setAttribute("class","informationes1_x4") ;
            node.innerHTML=info_04 ;              
            document.getElementById("informationes1").appendChild(node);

            var node = document.createElement("div");            
            node.setAttribute("class","informationes1_x5") ;
            node.innerHTML=info_05 ;              
            document.getElementById("informationes1").appendChild(node);

            var node = document.createElement("div");            
            node.setAttribute("class","informationes1_x6") ;
            node.innerHTML=info_06 ;              
            document.getElementById("informationes1").appendChild(node);




    
    var node = document.createElement("div");
    node.setAttribute("id","elements"+i) ;  
    node.setAttribute("class","display_flex2 margin_right_100px form_general") ;  
    document.getElementById("id_div_global_style2").appendChild(node);
        
    
    
    if(array_voir_liste_projet[0].liste_projet_description1!=undefined){
    





       
        for(var i = 0 ; i<array_voir_liste_projet.length ; i ++){



            if(array_voir_liste_projet[i].liste_projet_id_parent==""){

            

         
            console.log(array_voir_liste_projet[i].liste_projet_description1) ;
    
    
    
            
    
    var node = document.createElement("div");
    node.setAttribute("id",array_voir_liste_projet[i].liste_projet_id_sha1) ;  
    node.setAttribute("class","display_flex2 margin_right_100px form_general") ; 
    node.setAttribute("style","padding:15px") ;  
    
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


    




    
    /*
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
    
    */
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
    node.setAttribute("onclick","link_w3(this)") ;  
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
     
    
    
    
    if(array_voir_liste_projet[i].liste_projet_img==""){
        node.setAttribute("src","https://img.icons8.com/pastel-glyph/30/null/image--v1.png") ; 
    
    } 
    else{
        node.setAttribute("src","src/img/all/"+array_voir_liste_projet[i].liste_projet_img) ; 
    
    }
    node.setAttribute("class","margin_right_100px cursor_pointer") ;
    node.setAttribute("style","margin-left:45px;width:30px") ;  
    node.setAttribute("onclick","dowload_img2(this)") ;  
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
    



    var node = document.createElement("div");
    node.setAttribute("id","informationes2") ;
    node.setAttribute("class","informationes2_1") ;              
    document.getElementById("id_div_global_style2").appendChild(node);


    var node = document.createElement("div");            
    node.setAttribute("class","informationes2_x1") ;
    node.innerHTML=info_01 ;              
    document.getElementById("informationes2").appendChild(node);

    var node = document.createElement("div");            
    node.setAttribute("class","informationes2_x2") ;
    node.innerHTML=info_02 ;              
    document.getElementById("informationes2").appendChild(node);

    var node = document.createElement("div");            
    node.setAttribute("class","informationes2_x3") ;
    node.innerHTML=info_03 ;              
    document.getElementById("informationes2").appendChild(node);

    var node = document.createElement("div");            
    node.setAttribute("class","informationes2_x4") ;
    node.innerHTML=info_04 ;              
    document.getElementById("informationes2").appendChild(node);

    var node = document.createElement("div");            
    node.setAttribute("class","informationes2_x5") ;
    node.innerHTML=info_05 ;              
    document.getElementById("informationes2").appendChild(node);

    var node = document.createElement("div");            
    node.setAttribute("class","informationes2_x6") ;
    node.innerHTML=info_06 ;              
    document.getElementById("informationes").appendChild(node);
    
    }
     
    
    
    
    }
    