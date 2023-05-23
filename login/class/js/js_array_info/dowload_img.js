var fileInput = document.getElementById('fileInput');
var fileInput_files_length = false ; 


 

let  dowload_img_name= "" ; 
function dowload_img(_this) {

  dowload_img_name  = _this.title ; 
  document.getElementById("parent_label_fileInput").className="parent_label_fileInput" ; 
  document.getElementById("parent_fileInput2").className="parent_fileInput2" ; 
  document.getElementById("id_div_global_style1").className="display_none" ; 
 
}

 



 
function fileInput_action(){
  

  document.getElementById("parent_fileInput2").className="parent_fileInput4" ; 

 
  
   

  
   fileInput.files.length =0;
   fileInput.files[0]="";

}



function myTimer() {

  const date = new Date();
console.log(date.toLocaleTimeString());
console.log(fileInput.files.length);



if(fileInput.files.length==1){
  
  // Création d'une nouvelle instance de XMLHttpRequest
  var xhr = new XMLHttpRequest();

  // Ouverture d'une requête POST vers upload.php
  xhr.open('POST', 'class/php/php_add/upload.php', true);

  // Définition de la fonction de gestion de la réponse
  xhr.onreadystatechange = function() {
    // Vérification que la requête est terminée et a réussi
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Affichage d'un message dans la console
      console.log('Upload terminé !');
    }
  };

  // Création d'une instance de FormData pour envoyer les données
  var formData = new FormData();
 

  // Ajout de la photo au formulaire
  formData.append('photo', fileInput.files[0]);

  // Envoi de la requête
  xhr.send(formData);
  fileInput_files_length = false ; 

  document.getElementById("parent_label_fileInput").className="display_none" ; 
  document.getElementById("parent_fileInput2").className="display_none" ; 
  document.getElementById("id_div_global_style1").className="" ; 
}
else {
  document.getElementById("parent_label_fileInput").className="display_none" ; 
  document.getElementById("parent_fileInput2").className="display_none" ; 
  document.getElementById("id_div_global_style1").className="" ; 
}

}
 