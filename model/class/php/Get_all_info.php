<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
include("connexion.php") ; 
class Get_all_info {
    public $servername;
    public $dbname;
    public $username;
    public $password;
    public $connect_verif = false;
    public $foreach_elements = false;
  
   
  
  
   
    
    
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
  
  $this->foreach_elements = true ; 
   
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
         echo $this->get_msg();
  
    
      
      } catch(PDOException $e) {
        $this->connect_verif = false;
        echo   $this->error ;
        echo "Connection failed: " . $e->getMessage();
        $this->connect_verif = "OFF" ; 
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
  


// exemple d'utilisation ----------------------------------------------------------------------------------------
 
/*
 $apple = new Get_all_info($servername,$dbname,$username,$password);


 array_push(
 $apple->row,
 "id_information_user",
 "password_information_user",
 "mail_information_user",
 "reg_date"
 );
    
 //$apple->set_sql('SELECT * FROM `information_user` WHERE `mail_information_user` ="'.$mail_information_user.'"'); 
 $apple->set_sql('SELECT * FROM `information_user` WHERE `mail_information_user`="'.$mail_information_user.'"'); 
 $apple->set_msg(""); 
 $apple->set_error(""); 
 $apple->get_exe();
 array_push($apple->row, "id_information_user");
 $apple->execution_total() ; 
 //var_dump(count($apple->liste_row()));
   if($apple->foreach_elements){
 
  if($apple->list_row[1]==$password_information_user){
 
 
  $_SESSION['start'] ="1";
  $_SESSION["id_information_user"]  = $apple->list_row[0] ;
  $_SESSION["password_information_user"] = $apple->list_row[1] ;
  $_SESSION["mail_information_user"] = $apple->list_row[2] ;
  $_SESSION["reg_date"] = $apple->list_row[3] ;
 }
 else{
 echo "ERROR password" ; 
 }
 }
 else{
     echo "user row" ; 
 }
 */ 
 // fin d'exemple ---------------------------------------------------------------------------------------------------------
 
?>