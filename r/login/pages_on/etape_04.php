

<div id="liste_groupe_black" class="display_none" onclick="liste_groupe_black()">

</div>

<div id="liste_groupe" class="display_none">
    <div class="liste_groupe">
        <div>
                <input type="text" placeholder="exemple : mon groupe sport" id="name_liste_projet_group_gr">
        </div>
        <div class="btn_fictif cursor_pointer" onclick="add_etape_04()">
                Créer un groupe 
        </div>
    </div>
</div>


 <style>
   .liste_groupe_black{
    background-color:rgba(0,0,0,0.5) ; 
    position:absolute; 
    height:100% ; 
    width : 100% ; 
    top : 0 ; 
    z-index : 0 ; 

   } 
   .liste_groupe{
    z-index:   1 ; 
 background-color:white ; 

    position:absolute; 
    top : 0 ; 
    width:50%;
    padding:20px; 
    margin:auto;
    margin-left:25%;
    margin-top:100px;


   }
   .liste_groupe input {
    width:100%;
    margin-bottom : 10px; 
    padding:9px; 
    border-radius:15px; 
   
   }
   .btn_fictif{
    background-color:rgba(0,200,0,0.8) ; 
    text-align:center ; 
    padding:9px; 
    border-radius:15px; 
    margin-bottom : 10px; 
    color:white ; 
   }
 
 </style>