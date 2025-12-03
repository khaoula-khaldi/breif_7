<?php 
$host = "localhost";
$username = "root";
$dbname= "smart walet";
$pass = "";

try{
   $PDO=NEW PDO("mysql:root=$host;dbname=$dbname",$username,$pass);
   echo'conixion OK!! ';
}catch(PDOException $erreur){
    die("Erreur de connexion".$erreur->getMessage());
};


?> 
 