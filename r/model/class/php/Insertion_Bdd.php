<?php
class Insertion_Bdd {

    public $servername ; 
    public $username ; 
    public $password ; 
    public $dbname ; 
    public $sql ="0"; 

  function __construct(
    $servername,
    $username,
    $password,
    $dbname
    ) {
    $this->servername = $servername;
    $this->username = $username;
    $this->password = $password;
    $this->dbname = $dbname;
  }
  function get_servername() {
    return $this->servername;
  }
  function get_username() {
    return $this->username;
  }
  function get_password() {
    return $this->password;
  }
  function get_dbname() {
    return $this->dbname;
  }

  function set_sql($sql){
    $this->sql = $sql ; 
  }
  function set_msg_valudation($msg_valudation){
    $this->msg_valudation = $msg_valudation ; 
  }

  function execution(){
 
                            // Create connection
                $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
  
  


                if($this->sql!="0"){
                  if ($conn->query($this->sql) === TRUE) {
                    echo  $this->msg_valudation ; 
                    } else {
                    echo "Error: " . $this->sql . "<br>" . $conn->error;
                    }
                }
                else {
                  echo "?" ; 
                }



                $conn->close();
                }
}



// exemple d'otulisation 


// etape n°1 



// donner le nom de la BDD 


//etape n°2 

/*

donner le champ de la bdd la vous souhaité envoyer les donne
vous pouvez envoyer egalement un message dans set messafe

*/
 ?>
 