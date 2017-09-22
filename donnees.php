<?php
$login=$_GET["login"];
$password=$_GET["password"];
if (isset($login) && isset($password) && empty($login )!==true && empty($password)!==true){
require "connection.php";
$state =$dbh->prepare("INSERT INTO Formulaire(login, password) VALUES (:login,:password)");
$state->bindParam(':login',$login);
$state->bindParam(':password',$password);


$state->execute();

}

else
(!empty($login) && !empty($password)){

echo "erreur";
}
?>
