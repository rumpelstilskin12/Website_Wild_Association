<?php
class ThemeDB extends Theme {
     private $_db;
    private $_array = array();

    public function __construct($db){
        $this->_db = $db;
    }
    public function addThemes($data) {

        $query = "select addthemes(:themename,:countryt,:themegoal,:pictures)"
                . "as retour";


    // addThemes = fonction créée dans pgadmin
        try {
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':themename', $data['themename'], PDO::PARAM_STR);
            $resultset->bindValue(':countryt', $data['countryt'], PDO::PARAM_STR);
            $resultset->bindValue(':themegoal', $data['themegoal'], PDO::PARAM_STR);
            $resultset->bindValue(':pictures', $data['pictures'], PDO::PARAM_STR);

            $resultset->execute();
            $retour = $resultset->fetchColumn(0); // permet le retour de la fonction embarquée (pgadmin)
            return $retour;

        } catch (PDOException $e) {
            print "<br/>Echec de l'insertion";
            print $e->getMessage();
        }
    }
  public function getTheme(){
        try{
            $query = "select * from theme";
            $resultset = $this->_db->prepare($query);

            $resultset->execute();

            while($data = $resultset->fetch()){
                $_array[] = new Theme($data);
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
