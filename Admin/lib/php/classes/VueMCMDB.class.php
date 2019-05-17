<?php
class VueMCMDB {

    private $_db;
    private $_array = array();
    public function __construct($db) {
        $this->_db = $db;
    }
        public function getAllMCM(){


        try{
            $this->_db->beginTransaction();
            $query = "select * from vue_member_carryout_mission";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            $this->_db->commit();
            while($data = $resultset->fetch()){
                $_array[] = $data;
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
