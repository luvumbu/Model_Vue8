function array_all_info_bdd_user(array_liste_projet_info,array_liste_projet,condition) { 
    let  tab_ajout = [];     
     array_liste_projet_info.length = array_liste_projet_info.length ; 
     for(var x = 0 ;x<array_liste_projet.length;x++){

        //console.log(array_liste_projet[0][x]) ;    
        let z = x % array_liste_projet_info.length;
        if(z==condition){  
         
         
       //  console.log(array_liste_projet[x]);
            tab_ajout.push(array_liste_projet[x]) ; 
   
            
        }
     }
     
    
     return tab_ajout ; 
    
     
    }