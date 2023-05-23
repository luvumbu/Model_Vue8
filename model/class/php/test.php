<?php
include("connexion.php") ; 
include("Get_elements_tab.php") ; 
/*
include("connexion.php") ; 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM `liste_projet` WHERE 1';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "informations : " . $row["nom_liste_projet"];
  }
} else {
  echo "0 results";
}
$conn->close();
*/


 

 
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

// n°4
 

 
?>