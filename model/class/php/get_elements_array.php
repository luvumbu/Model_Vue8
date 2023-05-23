<?php
include("connexion.php") ; 

 



class get_name {
  public $servername;
  public $dbname;
  public $username;
  public $password;
  public $connect_verif;

 
  
  
  public $sql ;
  public $row = array();
  public $list_row = array();

 
 



 

  function __construct($servername,$dbname,$username,$password) {
    $this->servername = $servername;
    $this->dbname = $dbname;
    $this->username = $username;
    $this->password = $password;
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
  function get_exe() {
   

    try {
      $conn = new PDO("mysql:host=$this->servername;dbname=".$this->dbname, $this->username, $this->password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->connect_verif = true;
     //echo $this->get_msg();
    
    } catch(PDOException $e) {
      $this->connect_verif = false;
      echo   $this->error ;
      echo "Connection failed: " . $e->getMessage();
    }
  }

 

  function set_msg($msg){
    $this->msg = $msg;
  }
  function set_error($error){
    $this->error = $error;
  }
  function get_msg(){
    return $this->msg  ;
  }
  function get_error(){
    return $this->error ;
  }
  function get_sql(){
    return $this->sql ;
  }

  function liste_row(){
    return $this->list_row;
  }
 
}


/*
$apple = new get_name($servername,$dbname,$username,$password);

  $apple->set_sql('SELECT * FROM `information_user` WHERE `id_information_user`="1"'); 

  $apple->set_msg("Connexion reussi 100%"); 
  $apple->set_error("ERREUR  100% verifier mot de passe ou dbname"); 
 

 $apple->get_exe();
 array_push($apple->row, "id_information_user");
 $apple->execution_total() ; 


 //var_dump(count($apple->liste_row()));



 $myJSON = json_encode($apple->list_row);
echo $myJSON;
 // verification du nombre des elements 
 */

?>