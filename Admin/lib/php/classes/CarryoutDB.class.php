<?php
class CarryoutDB extends Carryout {
     private $_db;
    private $_array = array();

    public function __construct($db){
        $this->_db = $db;
    }

    public function getFunction(){
        try{
            $query = "select * from carryout";
           // print $query;
            $resultset = $this->_db->prepare($query);
            //$resultset->bindValue(':login',$login);
            //$resultset->bindValue(':password',$password);
            $resultset->execute();

            while($data = $resultset->fetch()){
                $_array[] = new Carryout($data);
            }
        }
        catch(PDOException $e){
            print $e->getMessage();
        }
        if(!empty($_array)){
            return $_array;
        }
        else {
            return null;
        }
    }
    //put your code here
}