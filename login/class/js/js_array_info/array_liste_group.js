
  const const_array_array_liste_group_info = setTimeout(array_liste_group_info_, 600);
  /*
 0: La fuction
 1: array_liste_group_group.length Nombre Total des elements dans un tableau 
 2: array_liste_group.length Nombre Total des element a cherche sa representa la liste de nom dans une table de BDD exemple id,nom ..ect
 3: condition Modulo a recherche 
 4: tab_ajout element ajouter dans le tableau apres execution  
  */
 
 
 
 
 
  
 function array_liste_group_info_(){
    
 
 
 
 






    array_liste_group_info_liste_group_id = [] ; 
    array_liste_group_info_liste_group_id_sha1 = [] ; 
    array_liste_group_info_liste_group_name = [] ; 
    array_liste_group_info_liste_group_ip = [] ; 
    array_liste_group_info_liste_group_information_user_id_sha1 = [] ; 
  
    array_liste_group_info_liste_group_liste_projet_id_sha1 = [] ; 
    array_liste_group_info_liste_group_liste_projet_child_sha1 = [] ; 
    array_liste_group_info_liste_group_new_file = [] ; 
    array_liste_group_info_liste_group_reg_date = [] ; 
   

















 
 
   console.log(array_liste_group) ; 
     
   n_plus = 0 ; 

 
 
 

      
 array_liste_group_info_liste_group_id.push( array_all_info_bdd_user(array_liste_group_info,array_liste_group[0],n_plus));
 n_plus ++ ; 

 array_liste_group_info_liste_group_id_sha1.push( array_all_info_bdd_user(array_liste_group_info,array_liste_group[0],n_plus));
 n_plus ++ ; 

 array_liste_group_info_liste_group_name.push( array_all_info_bdd_user(array_liste_group_info,array_liste_group[0],n_plus));
 n_plus ++ ; 

 array_liste_group_info_liste_group_ip.push( array_all_info_bdd_user(array_liste_group_info,array_liste_group[0],n_plus));
 n_plus ++ ; 

 array_liste_group_info_liste_group_information_user_id_sha1.push( array_all_info_bdd_user(array_liste_group_info,array_liste_group[0],n_plus));
 n_plus ++ ; 

 array_liste_group_info_liste_group_liste_projet_id_sha1.push( array_all_info_bdd_user(array_liste_group_info,array_liste_group[0],n_plus));
 n_plus ++ ; 

 array_liste_group_info_liste_group_liste_projet_child_sha1.push( array_all_info_bdd_user(array_liste_group_info,array_liste_group[0],n_plus));
 n_plus ++ ; 
 
 array_liste_group_info_liste_group_new_file.push( array_all_info_bdd_user(array_liste_group_info,array_liste_group[0],n_plus));
 n_plus ++ ; 
 array_liste_group_info_liste_group_reg_date.push( array_all_info_bdd_user(array_liste_group_info,array_liste_group[0],n_plus));
 
 
 

        
   }
 
 
 
 
 
 
  
  