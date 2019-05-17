<?php
class DonDB extends Don {
     private $_db;
    private $_array = array();

    public function __construct($db){
        $this->_db = $db;
    }
    public function addDon(){

              $query = "select adddon(:amount,:datedon,:idtheme,:idmember) "
                      . "as retour";


      // adddon = fonction que l'on va créer dans pgadmin
              try {
                  $resultset = $this->_db->prepare($query);
                  $resultset->bindValue(':amount', $data['amount'], PDO::PARAM_STR);
                  $resultset->bindValue(':datedon', $data['datedon'], PDO::PARAM_STR);
                  $resultset->bindValue(':idtheme', $data['idtheme'], PDO::PARAM_STR);
                  $resultset->bindValue(':idmember', $data['idmember'], PDO::PARAM_STR);

                  $resultset->execute();
                  $retour = $resultset->fetchColumn(0); // permet le retour de la fonction embarquée (pgadmin)



                  return $retour;
              } catch (PDOException $e) {
                  print "<br/>Echec de l'insertion";
                  print $e->getMessage();
              }

    }
    public function getDon($login,$password){
        try{
            $query = "select * from don";
           // print $query;
            $resultset = $this->_db->prepare($query);
            //$resultset->bindValue(':login',$login);
            //$resultset->bindValue(':password',$password);
            $resultset->execute();

            while($data = $resultset->fetch()){
                $_array[] = new Don($data);
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
