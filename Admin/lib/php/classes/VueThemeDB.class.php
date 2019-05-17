<?php
class VueThemeDB {

    private $_db;
    private $_array = array();
    public function __construct($db) {
        $this->_db = $db;
    }
        public function getAllTheme(){


        try{
            $this->_db->beginTransaction();
            $query = "select * from vue_theme";
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

        public function getThemeByTheme($idtheme){

        try{
            $this->_db->beginTransaction();
            $query = "select * from vue_theme where idtheme=:idtheme";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':idtheme',$idtheme);
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
