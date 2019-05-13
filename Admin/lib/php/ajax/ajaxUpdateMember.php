<?php
header('Content-Type: application/json');
require '../pgConnect.php';
require '../classes/Connexion.class.php';
require '../classes/Member.class.php';
require '../classes/MemberDB.class.php';

$cnx = Connexion::getInstance($dsn,$user,$pass);

try{
   $update= new MemberDB($cnx);

   extract($_GET,EXTR_OVERWRITE);
    $parametre = 'id='.$id.'&champ='.$champ.'&nouveau='.$nouveau;
    $update->updateMember($champ, $nouveau, $id);
    print json_encode($retour);  //permet de retourner à ajax ce qui vient de la bdd.
}
catch(PDOException $e){
    print $e->getMessage()." ".$e->getLine()." ".$e->getTrace()." ".$e->getCode();
}
