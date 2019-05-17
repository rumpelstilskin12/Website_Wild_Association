<?php
header('Content-Type: application/json');
require '../pgConnect.php';
require '../classes/Connexion.class.php';
require '../classes/Carryout.class.php';
require '../classes/CarryoutDB.class.php';
$cnx = Connexion::getInstance($dsn,$user,$pass);
try{
   $update= new CarryoutDB($cnx);

   extract($_GET,EXTR_OVERWRITE);
    $parametre = 'id='.$id.'&champ='.$champ.'&nouveau='.$nouveau;
    $update->updateCarryout($champ, $nouveau, $id);
    print json_encode($retour);  //permet de retourner à ajax ce qui vient de la bdd.
}
catch(PDOException $e){
    print $e->getMessage()." ".$e->getLine()." ".$e->getTrace()." ".$e->getCode();
}
