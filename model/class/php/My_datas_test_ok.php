<?php
  session_start() ; 

 header("Access-Control-Allow-Origin: *");

include("connexion.php") ; 
 


class My_datas_php {
  public $name;
  public $color;
  public $array_list = array() ; 
  
public $array_row_result = array() ; 
   

  function __construct($servername, $username, $password, $dbname) {
      
    $this->servername = $servername;
    $this->username =   $username;
    $this->password =   $password;
    $this->dbname =     $dbname;
    
    
  
    
  }
 
  function execution(){
                                  // Create connection
                            $conn = new mysqli($this->servername, $this->username,$this->password, $this->dbname);
                            // Check connection
                            if ($conn->connect_error) {
                              die("Connection failed: " . $conn->connect_error);
                            }
                            
                           
                            $result = $conn->query($this->sql);
                            
                            if ($result->num_rows > 0) {
                              // output data of each row
                              while($row = $result->fetch_assoc()) {
                              /*  echo "id: " . $row["id_liste_projet"] ;
                                echo  $this->array_list[0] ; 
                                */
                                
                                
                                
                                
                                foreach ($this->array_list as $value) {

                                    array_push($this->array_row_result,$row[$value]);
                                    
                              
                                                  
                                     }
 
 
 
 
 
                              }
                            } else {
                              echo "0 results";
                            }
                            $conn->close();
  }
  
  function sql($sql){
      $this->sql = $sql ;
  }
              function set_array_list($ajout_el){
                  
                  array_push($this->array_list,$ajout_el);
              }
}
 
$apple = new My_datas_php($servername, $username, $password, $dbname);
 
$apple->set_array_list("id_liste_projet") ;
 
 
 $apple->sql("SELECT * FROM `liste_projet` WHERE 1");  
 
 $apple->execution(); 
 
 
 
 
 
 
 
 
 $myJSON = json_encode($apple->array_row_result);
echo $myJSON;
 
 
?>