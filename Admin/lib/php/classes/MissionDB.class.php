<?php
class missionDB {
     private $_db;
    private $_array = array();

    public function __construct($db){
        $this->_db = $db;
    }

    public function getMission(){
        try{
            $query = "select * from mission";

            $resultset = $this->_db->prepare($query);

            $resultset->execute();

            while($data = $resultset->fetch()){
                $_array[] = new Mission($data);
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

}
