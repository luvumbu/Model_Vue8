<?php 

include("connexion.php") ; 




class Get_elements_tab {

    public $servername;
    public $dbname;
    public $username;
    public $password;
    public $connect_verif;
  
    public $sql ;
    public $row = array();
    public $list_row = array();
 
 
  
    function __construct($servername,$dbname,$username,$password) {



        try {
            $conn = new PDO("mysql:host=$servername;dbname=".$dbname, $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);           
            $this->connect_verif ="true";


            $this->servername = $servername ; 
            $this->dbname = $dbname ; 
            $this->username = $username ; 
            $this->password = $password ; 

          



            //echo   count($this->row) ; 
          } 
              catch(PDOException $e) {
                $this->connect_verif = "false" ; 
              }
    }

    function execution(){      
        return $this->connect_verif ; 
    }
     function set_sql($sql){
        $this->sql = $sql ; 
     }
function remove_row(){
    $this->row = array();
    $this->list_row = array();
}
    function execution_total(){


        /*
        public $row = array();
        public $list_row = array();
        */
        if($this->connect_verif=="true"){

       














// Create connection
$conn = new mysqli($this->servername,$this->dbname, $this->username, $this->password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 
$result = $conn->query($this->sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   // echo "id: " . $row["nom_liste_projet"];


 
    foreach ($this->row as &$value) {
 array_push($this->list_row ,$row[$value] );
       // $row["nom_liste_projet"] ; 
    }
    // $arr is now array(2, 4, 6, 8)
    unset($value); // break the reference with the last execution_total
  }




} 
/*else {
  //echo "0 results";
}
*/
$conn->close();




























         
        }
  
    }
 
  }
  

  // Creation de la table avec le donne 
  /*
  N°1
$servername ="localhost";
$username ="root";
$password =$username;
$dbname =$username;
utise pour la premier verification de connection dans la base de donné
*/
//  --$apple = new Get_elements_tab($servername,$dbname,$username,$password);
 




 //$apple->execution(); 
 // N°1 BIS Donne la valeur dexecution mais ne pas indispensable pour le foctionnement 


 // array_push 
 // permets d'ajouter dans un tableau les valeur a parcourir dans la table 
 // voir exemple 
 //  -- array_push($apple->row ,"nom_liste_projet","reg_date","id_liste_projet");

  
// set_sql 
// Important pour le nom de recherche dans les requettes 
// voir exemple 
// -- $apple->set_sql('SELECT * FROM `liste_projet` WHERE 1') ; 

// execution_total
// Permets dexecuter le programme avec l'ensemble des informations donne 
// -- $apple->execution_total(); 


 
 
// Bonus 
 

//remove_row
// permet d'effacer les valeur de tous es tableau 
// Puis ont peut recommence avec des nouvelles valeurs voir exemples 
//$apple->remove_row()  ; 
/*
array_push($apple->row ,"nom_liste_projet","reg_date","id_liste_projet");
$apple->set_sql('SELECT * FROM `liste_projet` WHERE 1 LIMIT 1') ;

echo "<br/>" ; 
$apple->execution_total(); 

echo count($apple->list_row) ; 



 
//exemple complet 

//exemple complet 

$apple = new Get_elements_tab($servername,$dbname,$username,$password);
// n°1 
array_push($apple->row ,"nom_liste_projet");
// n°2
$apple->set_sql('SELECT * FROM `liste_projet` WHERE 1') ; 
// n°3
$apple->execution_total(); 
 
 

for($i = 0 ; $i<count($apple->list_row); $i++){
 echo  $apple->list_row[$i].'id :'.$i; 
  echo "<br/>" ; 
}
*/
// n°4
 

 
 


 
?>
 